<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    private function generatePosts(): array
    {
        return [
            [
                'title' => 'Top Archive Celebrates 25 Years of Excellence in Document Management',
                'excerpt' => 'Marking a quarter-century of leadership in Africa\'s document storage and management industry.',
                'content' => 'This year marks a significant milestone as Top Archive celebrates 25 years of excellence in providing document storage and management solutions across Africa...',
                'is_featured' => true,
                'image_name' => 'celebration.jpg'
            ],
            [
                'title' => 'New State-of-the-Art Storage Facility Opens in Tanzania',
                'excerpt' => 'Expanding our presence in East Africa with a cutting-edge document storage facility.',
                'content' => 'Top Archive continues its expansion in East Africa with the opening of a new, state-of-the-art storage facility in Tanzania...',
                'image_name' => 'facility.jpg'
            ],
            // ... other posts
        ];
    }

    private function copyImageToStorage($sourcePath, $fileName)
    {
        $destinationPath = 'posts/' . $fileName;

        if (File::exists(public_path($sourcePath))) {
            Storage::disk('public')->put($destinationPath, File::get(public_path($sourcePath)));
            return $destinationPath;
        }

        return null;
    }

    private function getRandomImageAndCopy()
    {
        $images = File::files(public_path('assets/seeder_post'));
        $randomImage = $images[array_rand($images)];
        $fileName = time() . '_' . $randomImage->getFilename();

        return $this->copyImageToStorage(
            'assets/seeder_post/' . $randomImage->getFilename(),
            $fileName
        );
    }

    public function run()
    {
        // Ensure storage directory exists
        Storage::disk('public')->makeDirectory('posts');

        $categories = Category::all();
        $users = User::all();
        $tags = Tag::all();
        $posts = $this->generatePosts();

        foreach ($posts as $postData) {
            $imagePath = $this->copyImageToStorage(
                'assets/seeder_post/' . ($postData['image_name'] ?? 'default.jpg'),
                time() . '_' . ($postData['image_name'] ?? 'default.jpg')
            );

            $post = Post::create([
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'excerpt' => $postData['excerpt'],
                'content' => $postData['content'],
                'status' => 'published',
                'is_featured' => $postData['is_featured'] ?? false,
                'published_at' => now()->subDays(rand(1, 30)),
                'category_id' => $categories->random()->id,
                'author_id' => $users->random()->id,
                'featured_image' => $imagePath,
            ]);

            $randomTags = $tags->random(rand(3, 5))->pluck('id')->toArray();
            $post->tags()->attach($randomTags);
        }

        // Create additional random posts
        for ($i = 1; $i <= 15; $i++) {
            $imagePath = $this->getRandomImageAndCopy();

            $title = "Document Management Tips: Part {$i}";
            $post = Post::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'excerpt' => "Essential tips for effective document management and storage.",
                'content' => "This comprehensive guide covers important aspects of document management and storage...",
                'status' => 'published',
                'published_at' => now()->subDays(rand(1, 30)),
                'category_id' => $categories->random()->id,
                'author_id' => $users->random()->id,
                'featured_image' => $imagePath,
            ]);

            $post->tags()->attach(
                $tags->random(rand(2, 4))->pluck('id')->toArray()
            );
        }
    }
}