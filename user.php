<?php
    class User{
        protected $id;
        protected $Uname;
        protected $password;
        protected $contact;
        protected $Veg;
        protected $Nveg;
        protected $role;
        protected $rest;
        public $con;

        function getId() { return $this->id; }
        function setId($id){ $this->id=$id; }
		function setUname($Uname) { $this->Uname = $Uname; }
        function getName() { return $this->Uname; }
		function setContact($contact) { $this->contact = $contact; }
        function getContact() { return $this->contact; }
        function setVeg($Veg) { $this->Veg = $Veg; }
        function getVeg() { return $this->Veg; }
        function setNveg($Nveg) { $this->Nveg = $Nveg; }
		function getNveg() { return $this->Nveg; }
        function setPass($pass) { $this->password = $pass; }
        function setRole($Role) { $this->role = $Role; }
        function getRole() { return $this->role; }
        function setRest($Rest) { $this->rest = $Rest; }
        
        function __construct()
        {
            require 'DbConn.php';
            $db=new DbConnect();
            $this->con=$db->connect();
        }

        function connect(){
            $query="INSERT INTO `clients`(`S.no`, `UserName`, `Contact`, `Password`, `Vegetarian`, `Non-vegetarian`, `Restaraunt`, `Role`) 
            VALUES (null,:fname,:contact,:pass,:veg,:Nveg,:rest,:rolee)";

            $stmt=$this->con->prepare($query);
            $stmt->bindParam(':fname', $this->Uname);
			$stmt->bindParam(':contact', $this->contact);
            $stmt->bindParam(':pass', $this->password);
            $stmt->bindParam(':veg', $this->Veg);
            $stmt->bindParam(':Nveg', $this->Nveg);
            $stmt->bindParam(':rolee', $this->role);
            $stmt->bindParam(':rest', $this->rest);
            
            try{
                if($stmt->execute()) echo "Registered Succesfully";
            }
            catch(Exception $e){ echo $e;}
        }

        function login(){
            $query="SELECT * FROM `clients` WHERE `UserName` LIKE '$this->Uname' AND `Password` LIKE '$this->password'";

            $stmt=$this->con->prepare($query);
            try{
                if($stmt->execute()) return $stmt->fetch();
            }
            catch(Exception $e){
                return $e;
            }
        }
    }
?>