<?php

//Usuarios Controller
$router->get('usuarios','UsuariosController@view');
$router->post('usuarios','UsuariosController@adicionar');
$router->post('usuarios/delete','UsuariosController@apagar');
$router->post('usuarios/update','UsuariosController@update');

//Categorias Controller
$router->get('categorias','CategoriasController@view');
$router->post('categorias','CategoriasController@adicionar');
$router->post('categorias/delete','CategoriasController@apagar');
$router->post('categorias/update','CategoriasController@update');

//Produtos Controller
$router->get('produtos','ProdutosController@view');
$router->post('produtos','ProdutosController@create');
$router->post('produtos/delete','ProdutosController@delete');
$router->post('produtos/update','ProdutosController@update');

?>
