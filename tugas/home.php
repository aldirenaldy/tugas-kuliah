<html>
<head>
<title> PEMROGRAMAN WEB </title>
     <link href="css\search.css" rel="stylesheet" type="text/css">
     <link href="http://localhost/tugas/css/menu.css" rel="stylesheet" type="text/css"/>
     <link href="css\slide.css" rel="stylesheet" type="text/css"/>
</head>
<body>
     <ul class="menu">
	    <span style="float:left">
	    <a class="brand" href="home.php">TokoKu</a>
        <li><select>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="vw">VW</option>
			<option value="audi" selected>Audi</option></select></li></span>
			<span style="float:right">
        <li><a href="masuk">Login</a></li>
        <li><a href="daftar">Register</a></li></span>
		<form>
            <input class="search" type="search" placeholder="Search...">
            <input class="button" type="submit" value="Search">
        </form>
     </ul>

<meta name="viewport" content="width=device-width, initial-scale=1">
	  
<center><div class="container">
  <img class="mySlides" src="images/slider/ke1.jpg" style="width:80%">
  <img class="mySlides" src="images/slider/ke2.jpg" style="width:80%">
  <img class="mySlides" src="images/slider/ke3.jpg" style="width:80%">
  <span style="float:left">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button></span>
  <span style="float:right">
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button></span>
</div></center>
  
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<center>
				<br><br><br><hr color="black" width="1300">
			    About| Ads | Shop | Help | Privacy | Terms | Blog | Developers
				<br><br>
		Copyright @ 2018 TokoKu
			</center>

    
</body>
</head>