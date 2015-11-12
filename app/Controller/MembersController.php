<?php

class MembersController extends AppController
{    
    public function index()
    {
        $this->set('cadastro', $this->Member->find('all'));
    }
    
    public function add()
    {
        if($this->request->is('post')){
            $addData = array(
                'name' => $this->data['Member']['name'],
                'email' => $this->data['Member']['email'],
                'phone' => $this->data['Member']['phone'],
                'birth' => $this->getFormatedDate($this->data['Member']['birth'], 'Y-m-d'),
                'status' => 'Ativo',
                'created' => date('Y-m-d H:i:s')
            );
            
            if(!$this->Member->save($addData)){
                $this->Session->setFlash("Erro ao gravar dados.");
                $this->redirect(array('action' => 'index'));
            }
            
            $this->Session->setFlash("Cadastro efetuado com sucesso.");
            $this->redirect(array('action' => 'index'));
        }
    }
    
    public function view($id = NULL)
    {
        $this->set('member', $this->Member->read(NULL, $id));
    }    
    
    public function edit($id = null)
    {
        if($this->request->is('post')){
            $editData = array(
                'id' => $this->data['Member']['id'],
                'name' => $this->data['Member']['name'],
                'email' => $this->data['Member']['email'],
                'phone' => $this->data['Member']['phone'],
                'birth' => $this->getFormatedDate($this->data['Member']['birth'], 'Y-m-d'),
                'status' => $this->data['Member']['status']
            );
            if($this->Member->save($editData)){
                $this->Session->setFlash("Dados alterados com sucesso.");
                $this->redirect(array('action' => 'index', $id));
            }
        }
        $this->data = $this->Member->read(NULL, $id);
        $date = $this->getFormatedDate($this->data['Member']['birth'], 'd-m-Y');
        $this->request->data['Member']['birth'] = $date;
    }
    
    private function getFormatedDate($dateTime, $format)
    {
        $dateTimeZone = new DateTimeZone('America/New_York');
        $date = new DateTime($dateTime, $dateTimeZone);
        
        return $date->format($format);
    }                
}        

            