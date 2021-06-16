<?php

namespace App\Controllers;

use App\Core\App;

class UsuariosController
{

    public function view()
    {
        $usuarios = App::get('database')->selectAll('usuarios');

        return view('usuarios',compact('usuarios'));
    }

    public function adicionar()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email'=>$_POST['email']
        ];

        App::get('database')->insert('tarefas', $_POST['nome'], $_POST['email']);

        header('Location: /inicio');
    }

}
