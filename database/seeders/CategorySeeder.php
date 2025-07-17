<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            'Document Storage' => 'Solutions and services for secure document storage',
            'Records Management' => 'Professional record management services and systems',
            'Digital Archiving' => 'Digital transformation and electronic archiving solutions',
            'Data Security' => 'Security measures and protocols for information protection',
            'Industry Solutions' => 'Specialized solutions for different business sectors',
            'Company News' => 'Updates and news about Top Archive',
            'Best Practices' => 'Industry standards and best practices in archiving',
            'Case Studies' => 'Success stories and implementation examples',
            'Innovation' => 'New technologies and innovative solutions in archiving',
            'Compliance' => 'Regulatory compliance and standards in document management'
        ];

        foreach ($categories as $name => $description) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $description,
//                'is_active' => true
            ]);
        }
    }
}
