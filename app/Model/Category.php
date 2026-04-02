<?php 

class Category extends AppModel {
    public $useTable = 'asset_types';
    public $validate = array(
        'name' => array('rule' => 'notBlank')
    );
}