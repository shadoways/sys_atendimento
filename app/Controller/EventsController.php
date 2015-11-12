<?php

class EventsController extends AppController
{
    public $uses = array('Event');
            
    public function index()
    {
        $this->set('event', $this->Event->find('all'));
    }
    
    public function add()
    {
        if (!empty($this->data)) {
            $addData = $this->data;
            if ($this->Event->save($addData)) {
                $this->Session->setFlash("Atendimento gravado com sucesso.");
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash("Erro ao gravar dados.");
            }
        }        
    }
    
    public function edit($id = NULL)
    {
        
    }
}