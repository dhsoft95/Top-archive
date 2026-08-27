<?php

namespace Database\Seeders;

use App\Models\ImgCategory;
use Illuminate\Database\Seeder;

class ImgCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'        => 'Physical Archive',
                'description' => 'Secure physical storage and management of archival boxes and files',
            ],
            [
                'name'        => 'Document Digitization',
                'description' => 'High-volume scanning and digital conversion of physical records',
            ],
            [
                'name'        => 'Warehouse & Storage',
                'description' => 'Climate-controlled warehouse facilities and storage infrastructure',
            ],
            [
                'name'        => 'Document Destruction',
                'description' => 'Certified and secure destruction of confidential business records',
            ],
            [
                'name'        => 'Client Events',
                'description' => 'Events, workshops, and client engagement activities across our offices',
            ],
            [
                'name'        => 'Office Facilities',
                'description' => 'Our offices and operational facilities across Ghana, Nigeria, Tanzania, and Uganda',
            ],
            [
                'name'        => 'Team & Staff',
                'description' => 'Our people and teams across all Top Archive locations',
            ],
        ];

        foreach ($categories as $data) {
            ImgCategory::firstOrCreate(
                ['name' => $data['name']],
                [
                    'description' => $data['description'],
                    'is_active'   => true,
                ]
            );
        }
    }
}
