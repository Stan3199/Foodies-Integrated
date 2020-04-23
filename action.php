<?php
include 'user.php';

    if(isset($_POST['action'])&&$_POST['action']=='usregister'){
        $user=data();

        $ins=new User();
        $ins->setUname($user['Uname']);
        $ins->setContact($user['Contact']);
        $ins->setVeg($user['veg']);
        $ins->setNveg($user['Nveg']);
        $ins->setPass($user['password']);
        $ins->setRole($user['Role']);
        $ins->setRest($user['user']);

        echo $ins->connect();

    }

    if(isset($_POST['action'])&&$_POST['action']=='regres'){
        $user=restvalidata();

        $ins=new User();
        $ins->setUname($user['Uname']);
        $ins->setContact($user['Contact']);
        $ins->setVeg($user['veg']);
        $ins->setNveg($user['Nveg']);
        $ins->setPass($user['password']);
        $ins->setRole($user['Role']);
        $ins->setRest($user['user']);

        echo $ins->connect();

    }

    if(isset($_POST['action'])&&$_POST['action']=='login'){
        $user=login();
        $log=new User();

        $log->setUname($user['Uname']);
        $log->setPass($user['password']);

        $usdata=$log->login();
        session_start();
        $_SESSION['id']=$usdata['S.no'];
        $_SESSION['name']=$usdata['Restaraunt'];
        $_SESSION['Veg']=$usdata['Vegetarian'];
        $_SESSION['Nveg']=$usdata['Non-vegetarian'];
        echo $usdata['Role'];
    }

    if(isset($_POST['action'])&&$_POST['action']=='Menu'){
        $user=checkNonEmpty();
        include 'Menu.php';
        $menu=new Menu();
        session_start();
        
        for($i=0;$i<count($user);$i++){
            $fun='setItem'.($i+1);
            $menu->$fun($user[''.$i.'']);
        }
        $menu->setLength(count($user));
        $menu->setId($_SESSION['id']);
        $menu->setName($_SESSION['name']);
        $menu->setVeg($_SESSION['Veg']);
        $menu->setNveg($_SESSION['Nveg']);
        // echo $_SESSION['name'];
        $menu->connect();
    }

    if(isset($_POST['action'])&&$_POST['action']=='manageOrder'){
        $user=ordercheck();
        // echo $user['name0'];
        include 'place.php';
        $menu=new Place();
        // for($i=0;$i<count($user);$i++){
        //     $fun='setItem'.($i+1);
        //     $menu->$fun($user['name'.$i.'']);
        // }
        $res;
        for($i=0;$i<count($user);$i++){
            $res=$res.'item'.($i+1).'='.$user['name'.$i].' ';
        }
        $menu->setOrder($res);
        echo $menu->connect();
        // echo $menu->getItem1();
    }

    function ordercheck(){
        $j=0;
        for($i=0;$i<10;$i++){
            if(!isset($_POST['name'.$i])) break;
            $input=filter_input(INPUT_POST, 'name'.$i, FILTER_SANITIZE_STRING);
            if(strlen($input)!==0){$user['name'.$i]=$input;$j++;}
        }
        return $user;
    }

    function checkNonEmpty(){
        $j=0;
        // $user;
        for($i=0;$i<10;$i++){
            $input=filter_input(INPUT_POST, 'name'.$i, FILTER_SANITIZE_STRING);
            if(strlen($input)!==0){$user[''.$j.'']=$input;$j++;}
        }
        return $user;
    }

    function login(){
        $user['Uname'] = filter_input(INPUT_POST, 'Uname', FILTER_SANITIZE_STRING);
		if(false == $user['Uname']) {
			echo "Enter valid restName";
			exit;
        }
        $user['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		if(false == $user['password']) {
			echo "Enter valid password";
			exit;
        }
        return $user;
    }

    function restvalidata(){
        $user['user'] = filter_input(INPUT_POST, 'rname', FILTER_SANITIZE_STRING);
		if(false == $user['user']) {
			echo "Enter valid restName";
			exit;
        }

        $user['Uname'] = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
		if(false == $user['Uname']) {
			echo "Enter valid name";
			exit;
        }
       
        $user['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		if(false == $user['password']) {
			echo "Enter valid password";
			exit;
        }

        $user['Contact'] = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_NUMBER_INT);
		if(false == $user['Contact']) {
			echo "Enter valid number";
			exit;
        }

        $user['veg']=$_POST['Veg'];
        $user['Nveg']=$_POST['Nveg'];
        $user['Role']=2;

        return $user;
    }
    
    function data(){
        $user['Uname'] = filter_input(INPUT_POST, 'Uname', FILTER_SANITIZE_STRING);
		if(false == $user['Uname']) {
			echo "Enter valid name";
			exit;
        }
       
        $user['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		if(false == $user['password']) {
			echo "Enter valid password";
			exit;
        }
        $user['Contact'] = filter_input(INPUT_POST, 'Contact', FILTER_SANITIZE_NUMBER_INT);
		if(false == $user['Contact']) {
			echo "Enter valid number";
			exit;
        }
        $user['veg']=$_POST['Veg'];
        $user['Nveg']=$_POST['Nveg'];
        $user['Role']=1;
        $user['user']='user';

        return $user;
        
    }
?>