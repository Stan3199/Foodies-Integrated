<?php
    class Place{
        protected $name;
        protected $order;
        protected $length;
        public $con;

        function setname($name){$this->name=$name;}
        function getItem1(){return $this->item1;}
        function setOrder($order){$this->order=$order;}
        function setLength($len){$this->length=$len;}
    
       function __construct()
       {
           require 'DbConn.php';
           $db=new DbConnect();
           $this->con=$db->connect();
       }

        function connect(){
            $query="INSERT INTO `order`(`S.no`, `Customer`, `Order`) VALUES (null,'$this->name','$this->order')";
            $stmt=$this->con->prepare($query);

            // echo $this->order;
            try{
                if($stmt->execute()) return "Ordered Successfully";
            }
            catch(Exception $e){
                return $e;
            }

                        

        }

        function fetch(){
            $query="SELECT * FROM `menu`";

            $stmt=$this->con->prepare($query);
            try{
                if($stmt->execute()) return $stmt->fetchAll();
            }
            catch(Exception $e){ return $e;}
        }

        
    }
?>