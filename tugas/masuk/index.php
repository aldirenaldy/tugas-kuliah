<html>
<head>
    <title> login | TokoKu</title>
	     <link href="kontak.css" rel="stylesheet" type="text/css">	
 <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid lightgrey; float:right; width:40%; height:420px;}

image{float:left; margin 30px auto;}

input[type=text], input[type=password] {
	width: 90%;
    padding: 12px 20px;
    margin: 20px auto;
    display: inline-block;
    border: 1px solid lightgrey;
    box-sizing: border-box;
}

button {
    background-color: dodgerblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 90%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: red;
}


</style>		 
</head>
<body>
	<center><h2><a href="http://localhost/tugas/home.php" class="brand" style="text-decoration: none; color:blue; font-size:50px; " >TokoKu</a></h2></center><br>
	<img class="image" src="images/login.jpg" >
	<form action="masuk/login.php" method="post">
	<center><h3> Login TokoKu</h3>
	<p>Belum Punya Akun TokoKu? Daftar <a href="register">Disini</a></p></center>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="name" required>

    <label for="passwoed"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forget <a href="#">password?</a></span>
</form>
</body>
</html>