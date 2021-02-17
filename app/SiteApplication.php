<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteApplication extends Model
{
    protected $table = 'tbl_kat_site_applications';
    protected $fillable = [
        'application_name',
        'url_path',
        'menu_link',
        'footer_link',
        
    ];  
}
