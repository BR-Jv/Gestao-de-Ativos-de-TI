<?php 


class Movement extends AppModel {
    public $useTable = 'asset_movements';
    public $name = 'Movement';

    public $validate = array(
        'asset_id' => array(
            'required' => array(
                'rule' => 'notblank', 
                'message' => 'Campo obrigatorio'
            )
        ),
        'to_location_id' => array(
            'required' => array(
                'rule' => 'notblank', 
                'message' => 'Campo obrigatorio'
            )
        ),
        'to_user_id' => array(
            'required' => array(
                'rule' => 'notblank', 
                'message' => 'Campo obrigatorio'
            )
        ),
        
        
       
    );

    public function beforeSave($options = array())
    {
        
        /** @var DboSource $db */
        $db = $this->getDataSource(); 
        
        if($this->data[$this->alias]['movement_date'] == null){
            $this->data[$this->alias]['movement_date'] = $db->expression('NOW()');
        }

        $this->data[$this->alias]['created_at'] = $db->expression('NOW()');
        
        return true;
    }
    
}