<?php

class Attendance extends AppModel{
    public $belongsTo = array(
        'Member' => array(
            'className'    => 'Member',
            'foreignKey'   => 'member_id',
            'dependent'    => true
        ),        
    );
}
