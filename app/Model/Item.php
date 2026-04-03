<?php 

class Item extends AppModel {
    public $useTable = 'assets';
    public $name = 'Item';

    public $validate = array(
        'asset_type' => array(
            'required' => array(
                'rule' => 'notblank', 
                'message' => 'Campo obrigatorio'
            )
        ),
        'location_id' => array(
            'required' => array(
                'rule' => 'notblank', 
                'message' => 'Campo obrigatorio'
            )
        ),
        'serial_number' => array(
            'required' => array(
                'rule' => 'isUnique', 
                'message' => 'Já existe esse serial number cadastrado'
            )
        ),
        'asset_tag' => array('required' => array(
                'rule' => 'isUnique', 
                'message' => 'Já existe essa tag cadastrado'
            )),
        'status' => array(
            'valid' => array(
                'rule' => array('inList', array('disponivel', 'em_uso', 'manutencao', 'retirado', 'perdido')),
                'message' => 'Escolha uma opção válida',
            )
        ),
    );

    public function beforeSave($options = array())
    {
        
        /** @var DboSource $db */
        $db = $this->getDataSource(); 
        
        //* Tenho que verificar quando é um save ou edit 
        $this->data[$this->alias]['created_at'] = $db->expression('NOW()');
        
        $this->data[$this->alias]['modified_at'] = $db->expression('NOW()');
        
        return true;
    }

    

}