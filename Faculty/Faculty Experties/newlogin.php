<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="newloginstyl.css">
    <title>Document</title>
</head>
<body>
    <div class="hero">
         <div class="form-box">
             <div class="button-box">
                 <div id="btn"></div>
                 <button type="button" class="toggle-btn" onclick="login()">Log-In</button>
                 <button type="button" class="toggle-btn" onclick="register()">Register</button>
             </div>
             <form id="login" class="input-group">
                 <input type="text" class="input-field" placeholder="User-Id" required>
                 <input type="text" class="input-field" placeholder="Enter password" required>
                 <input type="checkbox" class="chech-box" ><span>Remember Password</span>
                 <button type="submit" class="submit-btn" >Log In</button>

             </form>
             <form id="register" class="input-group">
                 <input type="text" class="input-field" placeholder="Username" required>
                 <input type="email" class="input-field" placeholder="User-Id" required>
                 <input type="text" class="input-field" placeholder="Enter password" required>
                 
                 <button type="submit" class="submit-btn" >Register</button>

             </form>

         </div>
         
    </div>

    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
    </script>
</body>
</html>