<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FOODIES</title>
  
  
  
  <style>
    body, html {
  height: 100%;
  margin: 0;

} 


.bg {
  background-image: url("photo1.jpg");
  height: 100%; 
  /* width:100%; */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.navbar {
  min-height: 50px;
}

.navbar-brand {
  padding: 12px 15px;
  height: 55px;
  line-height: 80px;
}

.res
{
    widows: 5px;
    height:300px;
    /* background-color: white; */
    display: inline-block;
}
.res1
{   height:280px;
width:280px;
    background-color: blue;
    /* display:flex;
    justify-content: space-evenly; */
}  


.jumbotron {
    background: none; 
    color:white;
}

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin-top: 5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.815);
  padding: 16px;
  text-align: center;
  background-color:grey;
  opacity:0.8;
}


    </style>
    <script>
        $(document).ready(function(){
            $("#Login").click(function(){
                window.location='login.php'
                console.log("asdas")
            });
            $("#Register").click(function(){
                window.location='UserRegistration.php'
            });

            $.ajax({
                url:'mainPage.php',
                method:"POST",
                data:"&action=display"
            }).done(function(result){
                console.log(JSON.parse(result));
                let menus=JSON.parse(result);
                console.log(menus);
                console.log(menus[0]);
                let k=0;
                "<div id="+"row"+k+"class="+"row"+"></div>"
                $("#jumbotron").append("<div id="+"row"+k+" class="+"row"+"></div>")
                for(let i=0;i<menus.length;i++){
                    if((i+1)%4==0){k++; $("#jumbotron").append("<div id="+"row"+k+" class="+"row"+"></div>");}
                    $("#row"+k).append("<div class='column'><div class='card' id="+"disp"+i+" onclick='view(\""+menus[i]['Restaraunt_id']+"\")'>"+menus[i]['RestName']+"</div></div>");
                    if(menus[i]['Veg']!=0) $("#disp"+i).append(' Veg');
                    if(menus[i]['Non-veg']!=0) $("#disp"+i).append(' Non-Veg');
                }
                // for(let i=0;i<menus.length;i++){
                //     $("#display").append("<div id="+"disp"+i+">"+menus[i]['RestName']+"</div>");
                //     $("#display").append("</br>")
                //     for (let j=1;j<Object.keys(menus[i]).length/2;j++){
                //         if(menus[i]["Item"+j]!=null){ $("#disp"+i).append("Item"+j+""+menus[i][j]+"<br>");console.log(menus[i]["Item"+j])}
                //     }
                // }
            })
            
        });
        function view(menu){
            let data="id="+menu;
            localStorage.setItem("data",data);
            window.location="order.php"
            }
    </script>
</head>
<body>
    <div class="bg">
    <nav class="navbar navbar-light" style="background-color: yellow; color:white; opacity: 0.7;">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
            
                <img src="logo2.jpg" width="66">
            
            </a>
          </div>
          <ul class="nav navbar-nav">
        
         
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="UserRegistration.php"><span class="glyphicon glyphicon-user" id="Register"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in" id="Login"></span> Login</a></li>
          </ul>
        </div>
      </nav>




       <div id="jumbotron" class="jumbotron">
        </div>

</div>
</body>
</html>


<!-- made main page,login page single for both, two different signup pages -->
<!-- index page needs designing rest of the pages are good to go -->
<!-- do something about the navbar in index does not go with the page background -->
<!-- put a button in user regestration page to take him to the restaurant register page -->
