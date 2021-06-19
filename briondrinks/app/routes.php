<?php

$router->get('usuarios','UsuariosController@view');
$router->post('usuarios','UsuariosController@adicionar');
$router->post('usuarios/delete','UsuariosController@apagar');

$router->post('usuarios/update','UsuariosController@update');

?>
