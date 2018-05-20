<html>
<head>
    <title> Register | TokoKu</title>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}

form {border: 3px solid lightgrey; margin:40px auto; width:85%; height:950px;}

* {
    box-sizing: border-box;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 20px auto;
    display: inline-block;
    border: 1px solid lightgrey
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
	<center><h2><a class="brand" style="text-decoration: none; color:blue; font-size:50px; " href="home.php">TokoKu</a></h2></center><br>
	<form action="register.php" method="post">
	<center><h3> Daftar Sekarang</h3>
	<p> Sudah Punya Akun TokoKu? <a href="daftar">Masuk</a></p></center>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" required>
	
	<label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>
	
    <span style="float:right">
	<label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Password" name="password" required>
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" required>
	
	<label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Phone" name="phone" required>
	
	<label for="phone"><b>Alamat</b></label>
    <input type="text" placeholder="Alamat" name="alamat" required></span>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forget <a href="#">password?</a></span>
</form>