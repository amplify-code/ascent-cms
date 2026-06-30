<?php

namespace AmplifyCode\AscentCMS\Controllers\Admin;

use AmplifyCode\AscentCMS\Controllers\AdminBaseController;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

use AmplifyCode\AscentCMS\Models\Stack;
use AmplifyCode\AscentCMS\Models\Block;

class StackController extends AdminBaseController
{

    static $modelClass = 'AmplifyCode\AscentCMS\Models\Stack';
    static $bladePath = "cms::admin.stacks";



    public function rules($request, $model=null) {

       return [
            'name' => 'required',
        ]; 

    }


    public function autocomplete(Request $request, string $term) {

        echo $term;

    }


    public function updateblockorder() {

        $stack = Stack::find(request()->stack);

        $i = 0;
        foreach(request()->blockorder as $block_id) {
            $block = Block::find($block_id);
            if($block) {
                $block->sort = $i;
                $block->save();
                $i++;
            }

        }

    }


}