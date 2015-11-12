<?php

class Member extends AppModel{
    public $validate = array(
        'email' => array(
            'rule' => 'isUnique',
            'message' => 'Email já cadastrado.'
        )
    );
    
    public $hasMany = array(
        'Attendance' => array(
            'className' => 'Attendance',
            'foreignKey' => 'member_id',
            'dependent' => true
        ),        
    );
}
