<?php

class MovementsController extends AppController
{
    public $name = 'Movements';
    public $uses = array('Movement', 'Item', 'Location');

    public function tolist()
    {
        $this->set('movements', $this->Movement->find('all'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Item->create();
            //TODO - Tenho que associar o usuário logado pela session
            // $this->Item['moved_by'] =  
            if ($this->Item->save($this->request->data)) {
                $this->Flash->success(__('Movimentação salva com sucesso!'));
                return $this->redirect(array('action' => 'tolist'));
            }
            $this->Flash->error(__('Movimentação não pode ser salva, tente novamente!'));
        }

        $this->set('locations', $this->Location->find('list'));
        $this->set('assets', $this->Item->find('list'));

    }
}
