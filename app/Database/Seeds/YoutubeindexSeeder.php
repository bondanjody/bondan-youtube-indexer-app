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
                'url' => 'https://www.youtube.com/watch?v=_K_SZONUMHM',
                'category'    => 'programming',
                'slug'    => '001',
                'gambar'    => '001.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => 'Mungkin Nanti - Moshimo Mata Itsuka Ariel NOAH ft. Ariel Nidji (Cover : Kobasolo & Lefty Hand Cream)',
                'nama_channel'    => 'kobasolo',
                'url' => 'https://www.youtube.com/watch?v=Syph0HBRy4o',
                'category'    => 'japanese-songs',
                'slug'    => '002',
                'gambar'    => '002.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => 'I Want You to Have It All',
                'nama_channel'    => 'Lee Jacks & Tory Rines - Topic',
                'url' => 'https://www.youtube.com/watch?v=1NPiH7LmP3U',
                'category'    => 'west-songs',
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