<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Order</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            let data=localStorage.getItem('data');
            $.ajax({
                url:'mainPage.php',
                method:"POST",
                data:data+"&action=fet"
            }).done(function(result){
                let menus=JSON.parse(result);
                $("#display").append("<form id='order' method='POST'>");
                i=0;
                for (let [key, value] of Object.entries(menus)){
                        if(key!=='RestName'&&key!=='Veg'&&key!=='Restaraunt_id'&&key!=='S.no'&&key!=='Non-veg'&&value!=null){
                            $("#order").append("<div class="+"form-group"+">"+"<label>"+value+"</label>"+
                            "<input class='form-control' type='number' name="+"name"+i+" id="+key+">");
                            i++
                        }
                    }
                    $("#display").append("</form>");
            })

            $("#sub").click(function(event){
                let data=$("#order").serialize();
                console.log(data);
                $.ajax({
                url:'action.php',
                method:"POST",
                data:data+"&action=manageOrder"
                }).done(function(result){
                    console.log(result);
                })
            });
        });
    </script>
    <style>
  

    body, html {
  height: 100%;
  margin: 0;
  font-family: "Lato", sans-serif;
} 


.bg {
  background-image: url("orderimg.png");
  height: 100%; 
  width:100%;
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
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
</head>
<body>
  <div class="bg"> 
 <div class="jumbotron jumbotron-fluid">
    <div id="display" class="container">
    <button class="btn btn-danger btn-lg">Place Order</button> 
    </div>
  </div> 
 </div>
</html> 