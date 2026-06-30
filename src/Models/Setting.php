<?php

namespace AmplifyCode\AscentCMS\Models;


use AmplifyCode\AscentCMS\Traits\HasHeaderImage;
use AmplifyCode\AscentCMS\Traits\HasMenuItem;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;


/**
 * Used a convenient jumping off point for all models in the package.
 * Essentially just prefixes all child models' table names with 'checkout_'. 
 */
class Setting extends Base
{
    use HasFactory;

    public $fillable = ['name', 'value'];
  

}
