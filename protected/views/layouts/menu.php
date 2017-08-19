<?php

$this->widget(
        'booster.widgets.TbNavbar', array(
    'type' => 'inverse',
    'brand' => Yii::app()->name,
    'brandUrl' => '#',
    'collapse' => true, // requires bootstrap-responsive.css
    'fixed' => true,
    'fluid' => true,
    'items' => array(
        array(
            'class' => 'booster.widgets.TbMenu',
            'type' => 'navbar',
            'items' => array(
                array('label' => 'Home', 'url' => array('/site/index'), 'active' => true),
                array('label' => 'Customers', 'url' => array('/customers/index') ),
                
                array(
                    'label' => 'Dropdown',
                    'url' => '#',
                    'items' => array(
                        array('label' => 'Action', 'url' => '#'),
                        array('label' => 'Another action', 'url' => '#'),
                        array(
                            'label' => 'Something else here',
                            'url' => '#'
                        ),
                        '---',
                        array('label' => 'NAV HEADER'),
                        array('label' => 'Separated link', 'url' => '#'),
                        array(
                            'label' => 'One more separated link',
                            'url' => '#'
                        ),
                    )
                ),
            ),
        ),
        '<form class="navbar-form navbar-left" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Search"></div></form>',
        array(
            'class' => 'booster.widgets.TbMenu',
            'type' => 'navbar',
            'htmlOptions' => array('class' => 'pull-right'),
            'items' => array(
                array('label' => 'Link', 'url' => '#'),
                '---',
                array(
                    'label' => 'Dropdown',
                    'url' => '#',
                    'items' => array(
                        array('label' => 'Action', 'url' => '#'),
                        array(
                            'label' => 'Something',
                            'url' => '#'
                        ),
                        '---',
                        array('label' => 'Separated', 'url' => '#'),
                       
                    )
                ),
                 array('label' => '', 'url' => '#'),
            ),
        ),
    ),
        )
);
?>