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
$router->get('produtos-adm','ProdutosController@view');
$router->post('produtos-adm','ProdutosController@create');
$router->post('produtos-adm/delete','ProdutosController@delete');
$router->post('produtos-adm/update','ProdutosController@update');

//Pages Controller
$router->get('','PagesController@viewHome');
$router->get('quemsomos','PagesController@viewQuemSomos');

?>
