<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'tbl_kat_testimonials';
    protected $fillable = [
        'full_name',
        'designation',
        'comment',
        'photo'
    ];
}