<?php  

$conn=mysqli_connect("localhost","root","Krishna@2","practice") or die("connection failed");

if(!$conn)
{
	echo mysqli_error($conn);
}
$entry="";


$m=$_SERVER['HTTP_REFERER'];
$pattern1 = '/\bregister.html\b/';
$pattern2 = '/\blogin.html\b/';
$pattern3 = '/\bcart.php\b/';



// register
if(preg_match($pattern1,$m)==1)
{
	// echo $m."<br><br>";
		$fname=$_POST["firstname"];
		$lname=$_POST["lastname"];
		$email=$_POST["username_register"];
		$mobile=$_POST["number"];
		$passwords="";
		if($_POST["password_1"]==$_POST["password_2"])
		{
			$passwords=$_POST["password_1"];
		}
		else
		{
			die("passwords do not match");
		}

		$query1="SELECT * FROM `login` WHERE fname = '$fname' OR lname='$lname' AND email='$email' OR password='$passwords' OR mobile='$mobile';";

		$query2="INSERT INTO `login`(`fname`, `lname`, `email`, `password`,
		 `mobile`, `status`) VALUES ('$fname','$lname','$email','$passwords','$mobile',0);";

		 $query3="CREATE TABLE `$email` (id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,phone INT(10) NOT NULL,laptop INT(10) NOT NULL,tv INT(10) NOT NULL,fridge INT(10) NOT NULL,sofa INT(10) NOT NULL);";

		 $i=1;

		 $query4="INSERT INTO `$email` (`id`, `phone`, `laptop`, `tv`, `fridge`, `sofa`) VALUES ('$i',0,0,0,0,0);";

		$check1=mysqli_query($conn,$query1);

		if(mysqli_num_rows($check1)>0)
		{
			echo "user aldready exist";
		}
		else
		{
			$result=mysqli_query($conn,$query2) or die(mysqli_error($conn));
			$check3=mysqli_query($conn,$query3) or die(mysqli_error($conn));
			 $check4=mysqli_query($conn,$query4) or die(mysqli_error($conn));
			
		}

		?>	<a href="login.html">click here</a>  <?php
}

if(preg_match($pattern2,$m)==1)		// login
{
	// echo $m."<br><br>";
		$gmail=$_POST["username_login"];
		$passwd=$_POST["passwd"];

		$query5="SELECT * FROM `login` WHERE email='$gmail' AND password='$passwd';";

		$check5=mysqli_query($conn,$query5);

		if(mysqli_num_rows($check5)>0)
		{
			// while($row = mysqli_fetch_assoc($check2))
			// {
			// 	echo "welcome your details are:"."<br>";
			// 	echo $row["fname"]."<br>".$row["lname"]."<br>".$row["mobile"]."<br>";

			// }
			
				$entry=$gmail;
				$query6="UPDATE `login` SET `status` = 1 WHERE 
				`login`.`email` = '$entry';";

				$check6=mysqli_query($conn,$query6) or 
				die(mysqli_error($conn));
			

			
			?>	<a href="cart.php">click here</a>  <?php
		}
		else
			{echo "wrong";}
}

if(preg_match($pattern3,$m)==1)		//	cart
 {

$query7="SELECT `email` FROM `login` WHERE `status`=1 LIMIT 1";
$check7=mysqli_query($conn,$query7) or die(mysql_error($conn));
$name="";
if(mysqli_num_rows($check7)>0)
{
	while($r=mysqli_fetch_assoc($check7))
	{
		$name=$r['email'];
	}
}

	$query8="UPDATE `login` SET `status` = 0 WHERE `login`.`email` = '$name';";
 	$check8=mysqli_query($conn,$query8) or die(mysqli_error($conn));
 	echo "successfully logged out";

}

?>