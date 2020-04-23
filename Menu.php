<?php
    class Menu{
        protected $id;
        protected $name;
        protected $veg;
        protected $nveg;
        protected $item1;
        protected $item2;
        protected $item3;
        protected $item4;
        protected $item5;
        protected $item6;
        protected $item7;
        protected $item8;
        protected $item9;
        protected $item10;
        protected $length;
        public $con;

        function getId() { return $this->id; }
        function setId($id){ $this->id=$id; }
        function setVeg($veg){ $this->veg=$veg; }
        function setNveg($Nveg){ $this->nveg=$Nveg; }
        function setName($name){ $this->name=$name; }
        function setItem1($item1){$this->item1=$item1;}
        function getItem1(){return $this->item1;}
        function setItem2($item2){$this->item2=$item2;}
        function setItem3($item3){$this->item3=$item3;}
        function setItem4($item4){$this->item4=$item4;}
        function setItem5($item5){$this->item5=$item5;}
        function setItem6($item6){$this->item6=$item6;}
        function setItem7($item7){$this->item7=$item7;}
        function setItem8($item8){$this->item8=$item8;}
        function setItem9($item9){$this->item9=$item9;}
        function setItem10($item10){$this->item10=$item10;}
        function setLength($len){$this->length=$len;}
    
       function __construct()
       {
           require 'DbConn.php';
           $db=new DbConnect();
           $this->con=$db->connect();
       }

        function connect(){
                        
            echo $this->length;
            $query="INSERT INTO `menu`(`RestName`, `Veg`,`Item1`, `Item2`, `Item3`, `Item4`, `Item5`, `Item6`, `Item7`, `Item8`, `Item9`, `Item10`, `Restaraunt_id`, `Non-veg`) 
            VALUES (:namee,:veg,:item1,:item2,:item3,:item4,:item5,:item6,:item7,:item8,:item9,:item10,:id,:nveg)";


            $stmt=$this->con->prepare($query);
            for($i=1;$i<=$this->length;$i++){
                $fun='item'.$i;
                $stmt->bindParam(':item'.$i, $this->$fun);
            }
            for($i=$this->length+1;$i<=10;$i++){
                $r=null;
                $stmt->bindParam(':item'.$i,$r);
            }
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':namee', $this->name);
            $stmt->bindParam(':veg', $this->veg);
            $stmt->bindParam(':nveg', $this->nveg);
            // echo $this->nveg;
            try{
                if($stmt->execute()) echo "Registered Succesfully";
            }
            catch(Exception $e){ echo $e;}
        }

        function conn(){
            $query="SELECT * FROM `menu` WHERE `Restaraunt_id` LIKE '$this->id'";
            $stmt=$this->con->prepare($query);
            try{
                if($stmt->execute()) return $stmt->fetch(PDO::FETCH_ASSOC);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
</head>
<style>
    
    body, html {
  height: 100%;
  margin: 0;

} 
.bg {
  background-image: url("img1.webp");
  height: 100%; 
  /* width:100%; */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.sign {
  position: absolute;
  display: flex;
  justify-content: center; 
   align-items: center;
  width: 50%;
  height: 50%;
  background-image: radial-gradient(
    ellipse 50% 35% at 50% 50%,
    #6b1839,
    transparent
  );
  transform: translate(-50%, -50%);
  letter-spacing: 2;
  left: 20%;
  top: 15%;
  font-family: "Clip";
  text-transform: uppercase;
  font-size: 6em;
  color: #ffe6ff;
  text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
    -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
    0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  animation: shine 2s forwards, flicker 3s infinite;
}

@keyframes blink {
  0%,
  22%,
  36%,
  75% {
    color: #ffe6ff;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
  28%,
  33% {
    color: #ff65bd;
    text-shadow: none;
  }
  82%,
  97% {
    color: #ff2483;
    text-shadow: none;
  }
}

.flicker {
  animation: shine 2s forwards, blink 3s 2s infinite;
}

.fast-flicker {
  animation: shine 2s forwards, blink 10s 1s infinite;
}

    </style>

<body>
        <div class="bg">
        <div class="sign">
             
             <span class="fast-flicker">M</span>E<span class="flicker">N</span>U
             
            
           </div>
        </div>   
</body>
</html>