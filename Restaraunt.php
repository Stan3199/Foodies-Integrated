<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>FOODIES</title>


<style>
   

body {
    
  font-family: "Lato", sans-serif;
 }


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
<script>
   $(document).ready(function(){
            $("#menuPut").click(function(event){
                event.preventDefault();
                let data=$("#menu").serialize();
                console.log(data)
                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:data+"&action=Menu"
                }).done(function(result){
                    console.log(result)
                });
            });
            $("#manage").click(function(){
              window.location="manage.php";
            });
        });
        

        function openNav() {
          document.getElementById("mySidenav").style.width = "300px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
 </script>
</head>
<body>


 
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="closenNav">&times;</a>
        <a href="#"><img src="logo2.jpg"></a>
        <a href="#" id="manage">Manage Orders</a>
        <a href="#">Logout</a>
     </div>
      <span style="font-size:60px;cursor:pointer;color:black" onclick="openNav()" id="openNav"> &#9776; </span>
      <h1 class="display-4">ADD RESTAURANT MENU</h1>
     
      <form id="menu" action="" method="POST">
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name1"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name2"  placeholder="Enter Food Item">
          
        </div>
  
    
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name3"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name4"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name5"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name6"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name7"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name8"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name9"  placeholder="Enter Food Item">
          
        </div>
        <div class="form-group">
          <label >Food Item</label>
          <input type="text" class="form-control" name="name10"  placeholder="Enter Food Item">
          
        </div>

        <button type="button" class="btn btn-danger btn-lg btn-block" id="menuPut">ADD MENU TO DATABASE</button>
      </form>



    </div>
  </div>
</body>
</html>