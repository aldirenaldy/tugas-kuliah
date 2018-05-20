<?php
require("");

$con=mysqli_connect("localhost","root",""); 
$db_selected = mysqli_select_db("market", $con);

 if (!$con)
    {
     echo 'berhasil';
}else{
		echo 'gagal';
	}
?>