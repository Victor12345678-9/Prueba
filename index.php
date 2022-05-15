<?php

require_once "router.php";

route('/', function () {
    include ("./Public/views/usuarios/usersView.php");
});


route('/showUser/{id}/?', function($id){
    $_GET['id'] = $id;
    if(is_numeric($_GET['id']))
    {
        include ("./Public/views/usuarios/showUser.php");
    }
    else
    {
        error_page();
    }
});
  
route('/usersView', function() {
    include ("./Public/views/usuarios/usersView.php");
});

route('/indexP', function() {
    include ("./Public/index.php");
});

route('/usersView/{pagina}/?', function($pagina) {
    $_GET['pagina'] = $pagina;
    if(is_numeric($_GET['pagina']))
    {
        include ("./Public/views/usuarios/usersView.php");
    }
    else
    {
        error_page();
    }
});

route('/editUser/{id}/?', function($id) {
    $_GET['id'] = $id;
    if(is_numeric($_GET['id']))
    {
        include ("./Public/views/usuarios/editUser.php");
    }
    else
    {
        error_page();
    }
});

route('/updateUser', function() {
    include ("./Public/views/usuarios/updateUser.php");
});

route('/deleteUser/{id}/?', function($id) {
    $_GET['id'] = $id;
    if(is_numeric($_GET['id']))
    {
        include ("./Public/views/usuarios/deleteUser.php");
    }
    else
    {
        error_page();
    }
});

route('/addUser', function() {
    include ("./Public/views/usuarios/addUser.php");
});

route('/insertUser', function() {
    include ("./Public/views/usuarios/insertUser.php");
});


$action = $_SERVER['REQUEST_URI'];
dispatch($action);