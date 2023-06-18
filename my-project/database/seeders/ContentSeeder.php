<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    public function run()
    {
        DB::table('elements')->insert([
            'id' => '2',
            'title' => 'Example Title',
            'author' => 'John Doe',
            'date' => '2023-01-01',
            'desc' => 'Example News Content',
            'link' => 'https://example.com',
            'image' => 'https://example.com/image.jpg',
            'tags' => 'tag1',
        ]);

        // Add more entries as needed...
    }
}

