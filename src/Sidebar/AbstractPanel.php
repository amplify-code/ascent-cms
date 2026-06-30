<?php

namespace AmplifyCode\AscentCMS\Sidebar;


abstract class AbstractPanel {


    public abstract function isRenderable();

    public abstract function render();


}