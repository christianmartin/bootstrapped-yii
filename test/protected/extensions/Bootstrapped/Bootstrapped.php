<?php

Class Bootstrapped extends CWidget{

    public function getClasses(){
        if(isset($this->classes)){
            return implode(' ', $this->classes);
        }
    }
}