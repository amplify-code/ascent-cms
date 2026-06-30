<?php

namespace AmplifyCode\AscentCMS\Controllers\Admin;

use AmplifyCode\AscentCMS\Controllers\AdminBaseController;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class BlockController extends AdminBaseController
{

    static $modelClass = 'AmplifyCode\AscentCMS\Models\Block';
    static $bladePath = "cms::admin.blocks";



    public function rules($request, $model=null) {

       return [
            'name' => 'required',
        ]; 

    }


    public function autocomplete(Request $request, string $term) {

        echo $term;

    }



}