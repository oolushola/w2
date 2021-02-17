<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'tbl_kat_galleries';
    protected $fillable = [
        'image_for', 'headline', 'caption', 'photo'
    ];
}
