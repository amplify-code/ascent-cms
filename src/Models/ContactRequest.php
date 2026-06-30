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
class ContactRequest extends Base
{
    use HasFactory;

    public $table = 'cms_contactrequests';

    public $fillable = ['name', 'email', 'contactcategory_id', 'user_id', 'message', 'recaptcha_score'];
  

}
