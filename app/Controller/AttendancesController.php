<?php

class AttendancesController extends AppController 
{
    public $uses = array('Attendance', 'Member');

    public function index() 
    {
        $this->set('attendance', $this->Attendance->find('all', array(
            'conditions' => array('Attendance.canceled <>' => 1)
        )));
    }

    public function add() 
    {
        $memberData = $this->Member->find('all', array(
            'fields' => array('Member.name', 'Member.id')
        ));
        if ($this->request->is('post')) {
            $memberName = $this->Member->find('first', array(
                'fields' => 'Member.name',
                'conditions' => array('Member.id' => $this->data['Member']['id'])
            ));
            $addData = array(
                'name' => $memberName['Member']['name'],
                'member_id' => $this->data['Member']['id'],
                'date' => $this->getFormatedDate($this->data['Attendance']['date'], 'Y-m-d'),
                'hour' => $this->data['Attendance']['hour'],
                'status' => 'Pendente'
            );
            if ($this->Attendance->save($addData)) {
                $this->Session->setFlash("Atendimento gravado com sucesso.");
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash("Erro ao gravar dados.");
            }
        }
        
        $this->set(compact('memberData'));
    }

    public function view($id = NULL) 
    {
        $this->set('attendance', $this->Attendance->read(NULL, $id));
    }

    public function edit($id = null) 
    {        
        if ($this->request->is('post')) {
            
            $editData = array(
                'id' => $this->data['Attendance']['id'],
                'name' => $this->data['Attendance']['name'],
                'member_id' => $this->data['Member']['id'],
                'date' => $this->getFormatedDate($this->data['Attendance']['date'], 'Y-m-d'),
                'hour' => $this->getFormatedDate($this->data['Attendance']['hour'], 'H:i'),
                'status' => 'Pendente'
            );
            
            if ($this->Attendance->save($editData)) {
                $this->Session->setFlash("Dados alterados com sucesso.");
                $this->redirect(array('action' => 'edit', $id));
            }
        }
        
        $this->data = $this->Attendance->read(NULL, $id);
        $date = $this->getFormatedDate($this->data['Attendance']['date'], 'd-m-Y');
        $time = $this->getFormatedDate($this->data['Attendance']['hour'], 'H:i');
        $this->request->data['Attendance']['date'] = $date;
        $this->request->data['Attendance']['hour'] = $time;
    }

    public function autoComplete() 
    {
        $this->autoRender = false;
        $nomes = $this->Cadastro->find('all', array('fields' => 'nome'));
        foreach ($nomes as $nome) {
            $data[] = $nome['Cadastro']['nome'];
        }
        echo json_encode($data);
    }
    
    public function cancel($id)
    {
        
    }
    
    private function getFormatedDate($dateTime, $format)
    {
        $dateTimeZone = new DateTimeZone('America/New_York');
        $date = new DateTime($dateTime, $dateTimeZone);
        
        return $date->format($format);
    }

}
