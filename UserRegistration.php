<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
    <script>
        $(document).ready(function(){
            $("#Register").click(function(){
                let data=$("#Reg").serialize();
                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:data+"&action=usregister"
                }).done(function(result){
                    
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <form id="Reg" action="" method="post">
            <div class="name">
                <label for="name">Full Name</label>
                <input type="text" class="name" placeholder="Enter your Name">
            </div>
            <div class="email">
                <label for="Email">Email</label>
                <input type="text" class="email" placeholder="Enter your Email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" class="password" placeholder="Enter your password">
            </div>
            <div class="conf-pass">
                <label for="cnf-pass">Confirm Password</label>
                <input type="text" class="cnf-pass" placeholder="Confirm your password">
            </div>
            <div class="Submit">
                <button type="Submit" id="Register">Submit</button>
            </div>
        </form>
        
    </div>
</body>
</html> -->




><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGESTRATION</title>

    <style>
  body {
    font-family: "Lato", sans-serif;
 
    
}
.main-head{
    height: 150px;
    /* background: #FFF; */
  
}

.sidenav {
    height: 100%;
    /* background-color: #000; */
    background-image: url("food4.jpg");
    overflow-x: hidden;
    padding-top: 20px;
    /* background-repeat: no-repeat; */
}


.main {
    padding: 0px 10px;
 
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}
label
{
    font-size: large;
    color: yellow;
}

.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: yellow;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}

    /* ANIMATIONS */

    @font-face {
  font-family: Clip;
  src: url("https://acupoftee.github.io/fonts/Clip.ttf");
}

body {
  background-color: #141114;
  background-image: linear-gradient(335deg, black 23px, transparent 23px),
    linear-gradient(155deg, black 23px, transparent 23px),
    linear-gradient(335deg, black 23px, transparent 23px),
    linear-gradient(155deg, black 23px, transparent 23px);
  background-size: 58px 58px;
  background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;
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
  left: 50%;
  top: 50%;
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


h1{
    color: white;
}
h3{
    color:yellow;
}

    </style>
    <script>
        $(document).ready(function(){
            $("#Register").click(function(event){
                event.preventDefault();
                let data=$("#Reg").serialize();
                console.log(data)
                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:data+"&action=usregister"
                }).done(function(result){
                    console.log(result  )
                });
            });

            $("#reg").click(function(){
                window.location="Regres.php";
            })
        });
    </script>
</head>
<body>
  
        <div class="sidenav">
            <div class="sign">
             
            <span class="fast-flicker">F</span>ood<span class="flicker">i</span>es
            
           
          </div>
          </div>
              <div class="main">
                 <div class="col-md-4 col-sm-12">
                   
                    <div class="login-form">
                        
                       <form id="Reg" action="" method="POST">
                        <h1>USER REGISTRATION</h1>
                          <div class="form-group">
                           
                          
                          
                             <label>User Name</label>
                             <input type="text" class="form-control" name="Uname" placeholder="User Name">
                          </div>
                          <div class="form-group">
                             <label>Password</label>
                             <input type="password" class="form-control" name="password" placeholder="Password">

                          </div>
                          <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" class="form-control" name="Contact" placeholder="number">
                            
                          </div>
                          <h3>User Preference</h3>
                          <label class="checkbox-inline" style="color:black;">
                          <select id="Veg" name="Veg">
                            <option value="1" selected>Veg</option>
                            <option value="0">No</option>
                            </select>
                            <!-- <input type="checkbox" value="" id="Veg" name="Veg" value="False">Vegetarian -->
                          </label>
                          <label class="checkbox-inline" style="color:black">
                          <select id="Nveg" name="Nveg" >
                            <option value="1" selected>Non-Veg</option>
                            <option value="0">No</option>
                            </select>
                            <!-- <input type="checkbox" value="" id="Nveg" name="Nveg" value="False">Non-Vegetarian -->
                          </label>
                          <button type="submit" class="btn btn-success btn-lg" id="Register">Register</button>
                          
                       </form>

                       <a id="reg" style="cursor: pointer"><p>Join for restaraunt registration?</p></a>
                 
                    </div>

                 </div>
              </div>
  </body>
</html>