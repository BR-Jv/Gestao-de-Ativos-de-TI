<?php

class CategoriesController extends AppController
{
    public $name = 'Categories';
    public $uses = array();


    public function tolist()
    {
        $this->set('categories', $this->Category->find('all'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Category->create();
            if ($this->Category->save($this->request->data)) {
                $this->Flash->success(__('Categoria salva com sucesso!'));
                return $this->redirect(array('action' => 'tolist'));
            }
            $this->Flash->error(__('Categoria não pode ser salvo, tente novamente!'));
        }
    }

    public function edit($id = null) 
    {
        $this->Category->id = $id; 
        if(!$this->Category->exists()){
            throw new NotFoundException(__('Categoria não foi encontrado em nossa base de dados.'));
        }

        if($this->request->is(array('post', 'put'))){
            if ($this->Category->save($this->request->data)) {
                $this->Flash->success(__('Categoria salvo com sucesso!'));
                return $this->redirect(array('action' => 'tolist')); 
            }
            $this->Flash->error(__('Categoria não pode ser salvo, tente novamente!'));

        } 
        
        $this->request->data = $this->Category->read();
    }

    public function delete($id)
    {
        
    }

    
}
