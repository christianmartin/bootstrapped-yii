<?php

class NavbarWidget extends Bootstrapped {

    public $element_id = 'bootstrapped-navbar';
    public $classes;
    public $fluid = false;

    public function run(){
        $this->render('navbarWidget', array('classes'=>$this->classes));
    }

}