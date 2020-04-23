<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>

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

    </style>
    <script>
       $(document).ready(function(){
            $("#Login").click(function(event){
                event.preventDefault();
                let data=$("#Log").serialize();
                console.log(data)
                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:data+"&action=login"
                }).done(function(result){
                  console.log(result);
                    if(result==2)window.location="Restaraunt.php"
                });
            });
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
                 <div class="col-md-6 col-sm-12">
                   
                    <div class="login-form">
                        
                       <form id="Log">
                          
                        <h1>LOGIN PAGE</h1>
                        <div class="form-group">
                          
                             <label>User Name</label>
                             <input type="text" class="form-control" name="Uname" placeholder="User Name">
                          </div>
                          <div class="form-group">
                             <label>Password</label>
                             <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-success btn-lg" id="Login">Login</button>
                          
                       </form>
                    </div>
                 </div>
              </div>
  </body>
</html>