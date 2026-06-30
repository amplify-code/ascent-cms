<?php
namespace AmplifyCode\AscentCMS\Forms\Admin;

use AscentCreative\Forms\Form;
use AscentCreative\Forms\Fields\Input;
use AscentCreative\Forms\Fields\ForeignKeySelect;
use AmplifyCode\AscentCMS\Forms\Structure\Screenblock;

class BaseForm extends Form {

    public function __construct() {

        $this->children([
            Input::make('_postsave', null, 'hidden')
                    ->value(old('_postsave', getReturnUrl() ))
                    ->wrapper('none'),
        ]);

    }

}
