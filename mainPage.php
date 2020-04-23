<?php
include 'Menu.php';
    if(isset($_POST['action'])&&$_POST['action']=='display'){
        session_start();
        $Menus=new Menu();

        $res=$Menus->fetch();
        echo json_encode($res);
    }
    if(isset($_POST['action'])&&$_POST['action']=='fet'){
        $id=$_POST['id'];
        $Menu=new Menu();
        $Menu->setId($id);
        $res=$Menu->conn();
        // echo $res['Veg'];
    
        echo json_encode($res);
    }
?>