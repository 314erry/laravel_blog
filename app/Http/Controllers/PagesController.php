<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        // Processa variaveis de dado ou parametros
        // Fala com o MODEL
        // Recebe dados do MODEL
        // Compilar ou processa dados do MODEL se necessario
        // passa esse dado para a view correta

        return view('pages.welcome');
    }

    public function getAbout() {
        $first = 'Pierry';
        $last = 'Jonny';

        $fullname = $first . " " . $last;
        $email = '314pierry@gmail.com';

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about') -> withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }

    //Usuário envia dados
    //public function postContact() {

    //}

}