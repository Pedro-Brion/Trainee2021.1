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
        $parametros = [
            'nome' => $_POST['nome'],
            'email'=> $_POST['email'],
            'senha'=> $_POST['senha']
        ];

        App::get('database')->insert('usuarios', $parametros);

        header('Location: /usuarios');
    }

    public function apagar()
    {
        App::get('database')->delete('usuarios', $_POST['id']);

        header('Location: /usuarios');
    }

    public function update()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email'=> $_POST['email'],
            'senha'=> $_POST['senha']
        ];

        App::get('database')->update('usuarios', $parametros, $_POST['id']);

        header('Location: /usuarios');
    }

}
