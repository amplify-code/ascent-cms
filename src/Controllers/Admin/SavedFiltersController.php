<?php

namespace AmplifyCode\AscentCMS\Controllers\Admin;

use AmplifyCode\AscentCMS\Controllers\AdminBaseController;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class SavedFiltersController extends AdminBaseController
{

    static $modelClass = 'AmplifyCode\AscentCMS\Models\SavedFilter';
    static $bladePath = "cms::admin.savedfilters";

   
    public function rules($request, $model=null) {

       return [
            'name' => 'required',
        ]; 

    }


}