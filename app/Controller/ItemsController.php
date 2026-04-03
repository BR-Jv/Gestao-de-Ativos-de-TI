<?php

class ItemsController extends AppController
{
    public $name = 'Items';
    public $uses = array('Item', 'Category', 'Locations');

    public function tolist()
    {
        $this->set('items', $this->Item->find('all', array(
            'conditions' => array('Item.status !=' => 'baixado')
        )));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Item->create();
            if ($this->Item->save($this->request->data)) {
                $this->Flash->success(__('Item salvo com sucesso!'));
                return $this->redirect(array('action' => 'tolist'));
            }
            $this->Flash->error(__('Item não pode ser salvo, tente novamente!'));
        }

        $this->set('categories', $this->Category->find('list'));
        $this->set('locations', $this->Locations->find('list'));
        //TODO - Deve ter um campo relacionando a um usuário / Funcionário - contempla o RF-01.4 
    }

    public function edit($id = null) 
    {
        if(!$id){
            throw new NotFoundException(__('Item não é válido.'));
        }

        $asset = $this->Item->findById($id);
        if(!$asset){
            throw new NotFoundException(__('Item não foi encontrado em nossa base de dados.'));
        }

        if($this->request->is(array('post', 'put'))){
            $this->Item->id = $id;
            if ($this->Item->save($this->request->data)) {
                $this->Flash->success(__('Item salvo com sucesso!'));
                return $this->redirect(array('action' => 'tolist')); 
            }
            $this->Flash->error(__('Item não pode ser salvo, tente novamente!'));
        } 
        
        if(!$this->request->data){
            //TODO - Deve ter um campo relacionando a um usuário / Funcionário - contempla o RF-01.4
            $this->set('categories', $this->Category->find('list'));
            $this->set('locations', $this->Locations->find('list'));
            $this->request->data = $asset;
        }
    }

    public function delete($id)
    {
        if($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->Item->id = $id;
        if($this->Item->saveField('status', 'baixado')){
            $this->Flash->success(__('Item com id %s foi deletado com sucesso.', h($id)));
        }else {
            $this->Flash->success(__('Item com id %s não pode ser deletado.', h($id)));
        }
                
        return $this->redirect(array('action' => 'tolist'));  

    }

    
}
