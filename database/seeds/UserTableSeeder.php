<?php

use Illuminate\Database\Seeder;
use MaraLibros\Institucion;

class UserTableSeeder extends Seeder{

    public function run(){

        $this->createUser();
    }

    public function createUser(){

        Institucion::create([
            'nombre'=>'Gual y España',
            'rif' =>'89892804382423',
            'correo'=>'osmanv04@gmail.com'


        ]);
    }
}