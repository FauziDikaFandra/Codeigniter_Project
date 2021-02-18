<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = true;

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        } //tidak perlu else karena return langsung keluar dari function nya

        return $this->where(['Slug' => $slug])->first();
    }
}
