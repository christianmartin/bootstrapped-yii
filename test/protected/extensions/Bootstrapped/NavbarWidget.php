<?php

class NavbarWidget extends Bootstrapped {

    public $element_id = 'bootstrapped-navbar';
    public $classes;
    public $sections;
    public $fluid = false;


    public function run(){

        $this->render('navbarWidget');
    }

    protected function buildLinks($data){
        $return = array();
        $position = '';
        if(isset($data['position'])){
            $position = in_array($data['position'], array('left', 'right')) ? 'navbar-'.$data['position'] : '';
        }

        foreach($data['links'] as $link){

            if(!empty($link['children'])){
                $children = array();
                foreach($link['children'] as $child){
                    $children[] = parent::createAnchor($child);
                }

                $title = parent::createAnchor(array(
                    'route'=>'#',
                    'title'=>$link['title'] . ' ' . '<span class="caret"></span>'
                ),
                array(
                    'class'=>'dropdown-toggle',
                    'data-toggle'=>'dropdown'
                ));

                $return[] = '<li class="dropdown">' . $title . parent::createUnorderedList($children,
                array(
                    'class'=>'dropdown-menu',
                    'role'=>'menu'
                )) . '</li>';
                continue;
            }

            //normal link
            $active = 'active';
            $return[] = parent::createListItem(parent::createAnchor($link), array('class'=>$active));
        }
        return parent::createUnorderedList($return, array('class'=>'nav navbar-nav '.$position), false);
    }

}