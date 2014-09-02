<?php

Class Bootstrapped extends CWidget{

    public function getClasses(){
        if(isset($this->classes)){
            return implode(' ', $this->classes);
        }
    }

    public function containerClass(){
        if(isset($this->fluid)){
            return ($this->fluid===true) ? 'container-fluid' : 'container';
        }
    }
}