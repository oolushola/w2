<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'tbl_kat_company_profiles';
    protected $fillable = [
        'company_name',
        'email_one',
        'email_two',
        'phone_no_one',
        'phone_no_two',
        'address',
        'facebook',
        'linkdin',
        'instagram',
        'twitter',
        'logo',
        'our_history',
        'our_mission',
        'our_vision'
    ];
}