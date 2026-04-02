<?php 

class Location extends AppModel {
    public $useTable = 'locations';
    public $validate = array(
        'name' => array('rule' => 'notBlank')
    );
}