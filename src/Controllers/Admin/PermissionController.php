<?php

namespace AmplifyCode\AscentCMS\Controllers\Admin;

use AmplifyCode\AscentCMS\Controllers\AdminBaseController;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class PermissionController extends AdminBaseController
{

    static $modelClass = 'Spatie\Permission\Models\Permission';
    static $bladePath = "cms::admin.permissions";


    public function rules($request, $model=null) {

       return [
            'name' => 'required'
        ]; 

    }


    public function autocomplete(Request $request, string $term) {

        echo $term;

    }



}