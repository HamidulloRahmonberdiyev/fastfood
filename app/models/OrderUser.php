<?php

namespace app\models;

class OrderUser extends AppModel
{

    public $attributes = [
        'name' => '',
        'phone' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
            ['phone'],
        ],
    ];

    

}