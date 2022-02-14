<?php 

    require_once ("globals.php");
    require_once ("db.php");
    require_once ("models/User.php");
    require_once ("dao/UserDAO.php");


    // verifica tipo de form 

    $type = filter_input(INPUT_POST, "type"); 

    // verificar tipo de formulario

    if ($type === "register"){

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname"); 
        $email = filter_input(INPUT_POST, "email"); 
        $password = filter_input(INPUT_POST, "password"); 
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword"); 

        //verificao de dados minimos 

         if ( $name && $lastname && $email && $password){

        }else{

        // enviar msg de erro, de dados faltantes 
        
        }
    }else if ($type === "login"){

    }