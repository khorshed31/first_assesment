<?php


namespace App\classes;


class Register
{


    public function getAllUser(){

        return [
            0 => [
                'id' => 1,
                'name' => 'Khorshed Alom',
                'email' => 'khorshed@gmail.com',
                'password' => '123456',
                'image' => '1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'Emon Ali',
                'email' => 'emon@gmail.com',
                'password' => '123456',
                'image' => '2.jpg'
            ],
        ];
    }


}