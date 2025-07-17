<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tags = [
            // Locations
            'Tanzania',
            'Ghana',
            'Nigeria',
            'Uganda',
            'East Africa',
            'West Africa',
            // Services
            'Physical Storage',
            'Digital Solutions',
            'Document Scanning',
            'Secure Destruction',
            // Industries
            'Banking',
            'Healthcare',
            'Legal',
            'Government',
            'Education',
            // Topics
            'Data Protection',
            'ISO Standards',
            'Climate Control',
            'Security Systems',
            'Chain of Custody'
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag)
            ]);
        }
    }
}