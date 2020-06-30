<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
      protected $fillable = [
        'basic_month', 'premium_month', 'corporate_month','basic_year', 'year', 'corporate_year','community'
    ];

}
