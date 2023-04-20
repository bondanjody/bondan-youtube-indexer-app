<?php

namespace App\Models;

use CodeIgniter\Model;

class YoutubeModel extends Model
{
    protected $table = 'youtube-index';

    protected $useTimestamps = true;

    protected $allowedFields = ['judul', 'nama_channel', 'url', 'category', 'slug', 'gambar'];

    public function getData($slug = false)
    {
        if ($slug == false) 
        {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}

?>