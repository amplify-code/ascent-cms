<?php

namespace AmplifyCode\AscentCMS\Controllers\Admin;

use AmplifyCode\AscentCMS\Controllers\AdminBaseController;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class MenuController extends AdminBaseController
{

    static $modelClass = 'AmplifyCode\AscentCMS\Models\Menu';
    static $bladePath = "cms::admin.menus";

    public $modelNameHuman = "";
    public $modelNamePlural = "";


    public function rules($request, $model=null) {

       return [
            'title' => 'required',
        ]; 

    }


    public function autocomplete(Request $request, string $term) {

        echo $term;

    }



}