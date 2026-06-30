<?php

namespace AmplifyCode\AscentCMS\Controllers\Admin;

use AmplifyCode\AscentCMS\Controllers\AdminBaseController;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class SiteBannerController extends AdminBaseController
{

    static $modelClass = 'AmplifyCode\AscentCMS\Models\SiteBanner';
    static $bladePath = "cms::admin.sitebanners";



    public function rules($request, $model=null) {

       return [
            'title' => 'required',
        ]; 

    }


    public function autocomplete(Request $request, string $term) {

        echo $term;

    }



}