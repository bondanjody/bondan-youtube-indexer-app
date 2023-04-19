<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class YoutubeindexSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Alur Kerja PROGRAMMER Di Industri JANGAN KAGET',
                'nama_channel'    => 'Dea Afrizal',
                'category'    => 'Programming',
                'slug'    => '001',
                'gambar'    => '001.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => '“Moshimo Mata Itsuka (Mungkin Nanti)” feat. Ariel Nidji (Covered by KOBASOLO & Lefty Hand Cream)',
                'nama_channel'    => 'kobasolo',
                'category'    => 'Japanese Songs',
                'slug'    => '002',
                'gambar'    => '002.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => 'I Want You to Have It All',
                'nama_channel'    => 'Lee Jacks & Tory Rines - Topic',
                'category'    => 'West Songs',
                'slug'    => '003',
                'gambar'    => '003.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];


        // Using Query Builder
        $this->db->table('youtube-index')->insertBatch($data);
    }
}