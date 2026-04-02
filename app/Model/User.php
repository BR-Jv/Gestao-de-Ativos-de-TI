<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel
{
    public $validate = array(

        'name' => array(
            'rule' => 'notBlank',
            'required' => true,
            'allowempty' => false,
            'on' => 'created',
            'message' => 'Nome é um campo obrigatório'
        ),
        'email' => array('rule' => array('email', true), 'message' => 'Coloque um email válido.'),
        'login' => array(
            'rule' => '/^[0-9]{11}$/i',
            'required' => true,
            'allowempty' => false,
            'message' => 'Digite sem o pontos e traço'
        ),
        'password' => array(
            'rule' => 'notBlank',
            'required' => true,
            'allowempty' => false,
            'on' => 'created',
            'message' => 'Password é um campo obrigatório'
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'gestor')),
                'message' => 'Escolha um campo válido',
            )
        ),
        'status' => array(
            'rule' => array('boolean'),
            'message' => 'Status é um campo obrigatório'
        ),

        // 'role' => array(
        //     'valid' => array(
        //         'rule' => array('inList', array('ADM', 'TEC')),
        //         'message' => 'Escolha um cargo válido',
        //         'allowEmpty' => false
        //     )
        // )
    );

    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        /** @var DboSource $db */
        $db = $this->getDataSource(); 
        $this->data[$this->alias]['created_at'] = $db->expression('NOW()'); //? Se eu editar essa coluna vai ser alterada ? 
        $this->data[$this->alias]['modified_at'] = $db->expression('NOW()');
        
        return true;
    }
}
