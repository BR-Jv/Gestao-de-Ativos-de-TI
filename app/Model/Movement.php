<?php 


class Movement extends AppModel {
    public $useTable = 'asset_movements';
    public $name = 'Movement';

    public $validate = array(
        //TODO: Fazer a validação dos outros campos
        
        'quantity' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A senha é obrigatória'
            )
        ),
        'type' => array(
            'valid' => array(
                'rule' => array('inList', array('ENT', 'SAI')), 
                'message' => 'Escolha um tipo válido',
                'allowEmpty' => false
            )
        )
    );
    
}