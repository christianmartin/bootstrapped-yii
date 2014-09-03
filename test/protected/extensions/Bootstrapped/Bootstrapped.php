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

    protected function createLink($data){

        //return (isset($data[1])) ? Yii::app()->createUrl($data[0], $data[1]) : Yii::app()->createUrl($data[0]);
        if(is_array($data)){
            if(!empty($data[1])){
                return Yii::app()->createUrl($data[0], $data[1]);
            }
            return Yii::app()->createUrl($data[0]);
        }
        return Yii::app()->createUrl($data);

    }

    protected function createAnchor($data, $attributes = array()){

        $formatted_attributes = (!empty($attributes)) ? self::buildAttributes($attributes) : '';
        $link = self::createLink($data['route']);
        return '<a '.$formatted_attributes.' href="'.$link.'">'.$data['title'].'</a>';
    }

    protected function createUnorderedList($data, $attributes = array(), $create_list = true){

        $formatted_attributes = (!empty($attributes)) ? self::buildAttributes($attributes) : '';
        $list = '';
        foreach($data as $item){
            $list.= ($create_list) ? self::createListItem($item) : $item;
        }

        return '<ul '.$formatted_attributes.'>'.$list.'</ul>';
    }

    protected function createListItem($data, $attributes = array()){
        $formatted_attributes = (!empty($attributes)) ? self::buildAttributes($attributes) : '';
        return '<li '.$formatted_attributes.'>'.$data.'</li>';
    }

    protected function buildAttributes($data){
        $return = array();
        foreach($data as $name => $value){
            $return[] = $name.'="'.$value.'"';
        }
        return implode(' ', $return);
    }
}