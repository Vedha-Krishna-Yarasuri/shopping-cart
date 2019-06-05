<html>
<head>
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		.top
		{
			height: 34px;
		    background-color: #50d78c;
		    margin-left: 40px;
		}
		.success
		{
			margin-left: 40px;
		    margin-bottom: 12px;
		    width: 186px;
		    background-color: #fff;
		    color: teal;
		    border-width: 0px;
		    border-radius:20px;
		    font-size: 20px;
    		margin-top: 12px;
		}
		.success:hover
		{
			background-color:teal;
			color:#fff; 
		}
		.out
		{
			    width: 36%;
			    margin-left: 35px;
			    margin-top: -10px;
			    border: 2px solid #27be7f;
			    font-size: 20px;
			    background-color: thistle;
			    color: slateblue;
			    border-radius: 9px;
		}
		
		.cart
		{
			    margin-top: 40px;
			    font-family: cursive;
			    height: 40px;
			    border: 2px solid #27be7f;
			    font-size: 18px;
			    background-color: thistle;
			    color: slateblue;
			    border-radius: 9px;
		}
		.d:hover
		{
			    background-color: red;
			    border-width: 0px;
			    color: #fff;
			    border-radius: 7px;
		}
		.d
		{
			border-width: 0px;
			border-radius: 7px;
			border:2px solid red;
			background-color:#fff;
		}
	</style>
</head>
<body>
	
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-3"></div>
		<div class="col-md-7 col-sm-7 col-xs-7">
			<h1 style="text-transform: uppercase; letter-spacing: 7px;    font-family: cursive;">WELCOME TO ONLINE SHOPPING</h1>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2">
				<h3 style="font-family: cursive;">want to log out - ?</h3>
				<br>
				<form action="php1.php" method="POST">
			  <a href="php1.php"><input type="button" class="out" name="signout" 
			   value="log out"></a></form>
			</div>
			</div>
		
	</div>
	<div class="row">
		<div class="col-md-1 col-sm-1 col-xs-1"></div>
		<div class="col-md-9 col-sm-9 col-xs-9">
		<h3 style="text-transform: uppercase; letter-spacing: 7px;     margin-top: 40px;font-family: cursive;">NEWLY AVAILABLE ITEMS
		</h3>
		</div>
		<div class="col-md-2 col-xs-2 col-md-2">
		<a href="#data-table" style="visibility: visible;"><button type="button"class="cart" value="MY CART" >MY CART</button></a>
		</div>
	</div>

	<div class="row" style="margin-top: 40px;">
		<div class="col-md-2 col-sm-2 col-xs-2" style="margin-left: 83px;">
				<div class="top"></div>
				<div>
					<img src="https://images-na.ssl-images-amazon.com/images/I/81qiCrJlzgL._SL1500_.jpg" style="width: 132%;margin-left: -20px;">
					<h4 style=" margin-left: 52px;">
					   <span style="color:blue;letter-spacing: 4px;">price  </span>RS:26,910</h4>
					<h4 style=" margin-left: 52px;">
					   <span style="color:blue;letter-spacing: 4px;">quantity  </span><form action="cart.php" method="POST"><input type="number" name="quantity1"
					   required style="width: 60px;"></h4>
					   <a href="cart.php"><button class="success" name="order1">place order</button>   </a>
					</form>
					<div class="top" style="height: 5px;"></div>
				</div>
				<div class="top"></div>
			</div>
	

			<div class="col-md-2 col-sm-2 col-xs-2">
				<div class="top"></div>
				<div>
					<img src="https://store.hp.com/UKStore/Html/Merch/Images/c05965913_1750x1285.jpg" style="width: 100%;margin-left: 13px;height: 197px;margin-top: 47px;">
					<h4 style=" margin-left: 52px;margin-top: 69px;">
					   <span style="color:blue;letter-spacing: 4px;">price  </span>RS:89,000</h4>
					<h4 style=" margin-left: 52px;">
					   <span style="color:blue;letter-spacing: 4px;">quantity  </span><form action="cart.php" method="POST"><input type="number" name="quantity2"
					   required style="width: 60px;"></h4> 
					   <button class="success" name="order2">place order</button> 
					   </form>    
					<div class="top" style="height: 5px;"></div>
				</div>
				<div class="top"></div>
			</div>

	<div class="col-md-2 col-sm-2 col-xs-2">
				<div class="top"></div>
				<div>
					<img src="https://i5.walmartimages.ca/images/Large/010/121/6000199010121.jpg" style="width: 100%;
   					margin-left: 20px;margin-top: 74px;">
					<h4 style="margin-left: 52px;margin-top: 89px;">
					   <span style="color:blue;letter-spacing: 4px;">price  </span>RS:1,50,000</h4>
					<h4 style=" margin-left: 52px;">
					   <span style="color:blue;letter-spacing: 4px;">quantity  </span><form action="cart.php" method="POST"><input type="number" name="quantity3"
					   required style="width: 60px;"></h4>   
					   <button class="success" name="order3">place order</button> 
					   </form>  
					<div class="top" style="height: 5px;"></div>
				</div>
				<div class="top"></div>
			</div>

				<div class="col-md-2 col-sm-2 col-xs-2">
				<div class="top"></div>
				<div>
					<img src="https://media3.bosch-home.com/Product_Shots/600x337/MCSA02216978_B20CS30SNS_Front_Facing_-_Door_Closed_def.jpg" style="margin-left: -25px;width: 324px;
						height: 200px;margin-top: 30px;">
					<h4 style="margin-left: 52px;margin-top: 85px;">
					   <span style="color:blue;letter-spacing: 4px;">price  </span>RS:90,000</h4>
					<h4 style=" margin-left: 52px;">
					   <span style="color:blue;letter-spacing: 4px;">quantity  </span><form action="cart.php" method="POST"><input type="number" name="quantity4"
					   required style="width: 60px;"></h4> 
					   <button class="success" name="order4">place order</button>
					   </form>     
					<div class="top" style="height: 5px;"></div>
				</div>
				<div class="top"></div>
			</div>

				<div class="col-md-2 col-sm-2 col-xs-2">
				<div class="top"></div>
				<div>
					<img src="https://i.pinimg.com/236x/56/c4/86/56c4862407afd08dfad7db6cf7ce13fa--modern-basement-velvet-armchair.jpg" style="width: 82%;margin-left: 37px;
						margin-top: 50px;">
					<h4 style=" margin-left: 52px;margin-top:74px;">
					   <span style="color:blue;letter-spacing: 4px;">price  </span>RS:26,000</h4>
					<h4 style=" margin-left: 52px;">
					   <span style="color:blue;letter-spacing: 4px;">quantity  </span><form action="cart.php" method="POST"><input type="number" name="quantity5"
					   required style="width: 60px;"></h4>   
					   <button class="success" name="order5">place order</button>  
					   </form> 
					<div class="top" style="height: 5px;"></div>
				</div>
				<div class="top"></div>
			</div>


	</div>
<!-- <div class="row">

</div> -->

<?php 

$conn=mysqli_connect("localhost","root","Krishna@2","practice") or die("connection failed");



$query7="SELECT * FROM `login` WHERE `status`=1 LIMIT 1";
$check7=mysqli_query($conn,$query7) or die(mysql_error($conn));
$name="";
if(mysqli_num_rows($check7)>0)
{
	while($r=mysqli_fetch_assoc($check7))
	{
		$name1=$r['fname'];
		$name2=$r["lname"];
		$name3=$r['email'];
	}
}

?>


<?php

static $phone=0;
static $laptop=0;
static $tv=0;
static $fridge=0;
static $sofa=0;


if(isset($_POST["order1"]))
{
	$phone=$phone+$_POST["quantity1"];
}
if(isset($_POST["order2"]))
{
	$laptop=$laptop+$_POST["quantity2"];
}
if(isset($_POST["order3"]))
{
	$tv=$tv+$_POST["quantity3"];
}
if(isset($_POST["order4"]))
{
	$fridge=$fridge+$_POST["quantity4"];
}
if(isset($_POST["order5"]))
{
	$sofa=$sofa+$_POST["quantity5"];
}

$my_things=array("phone"=>$phone,"laptop"=>$laptop,"tv"=>$tv,
"fridge"=>$fridge,"sofa"=>$sofa);

$val=0;

foreach($my_things as $key => $value)
{
	
	if($value>0)
	{
		$query16="SELECT `$key` FROM `$name3` LIMIT 1";
		$check16 = mysqli_query($conn,$query16) or die(mysqli_error($conn)."hello");
		$col=mysqli_fetch_assoc($check16);
		$val = $col[$key];
		$value = $value+$val;
		$query10="UPDATE `$name3` SET `$key` = $value WHERE `$name3`.`id` = 1;";
		$ckeck10=mysqli_query($conn,$query10) or die(mysqli_error($conn)."bye");
	}

}

?>

<div id="data-table">

<br><br>
<div class="row">
	<div class="col-md-5"></div>
	<div class="col-md-6">
<h2><?php echo $name1."  ".$name2."'s cart"; ?></h2>
</div>
</div>
<br><br>

<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
		<table class="table">
		  <thead>
		    <tr class="thead-dark">
		       <th>ITEM NAME</th>
		      <th>QUANTITY</th>
		      <th>CHANGES</th>
		    </tr>

		  </thead>
		  <tbody>
<?php

$query12="SELECT * FROM `$name3`";
$check12 = mysqli_query($conn,$query12) or die(mysqli_error($conn));
$rows=mysqli_fetch_assoc($check12);

foreach($rows as $key=>$value)
{
	if($value>0 && $key!="id")
	{

		$make="cart.php?delete=$key";
		
		?>

			<tr class="table-primary">
		    <td><h4><?php echo $key ?></h4></td>
		    <td><h4><?php echo $value ?></h4></td>
		    <td><form action="cart.php" method="GET"><a href="<?php echo $make; ?>"<button class="d" name="delete">Delete</button></form></td>
		    </tr>
		<?php
	}
}

if(isset($_GET["delete"]))
{
	$del=$_GET["delete"];
	$query14="UPDATE `$name3` SET `$del` = '0' WHERE `$name3`.`id` = 1;";
	$check14=mysqli_query($conn,$query14) or die(mysqli_error($conn));
}
?>

<!-- while($rows = mysqli_fetch_assoc($check11))
{
	if($value>0)
	{
		?>
		  
		    <tr class="table-primary">
		    <td><h4><?php echo $key ?></h4></td>
		    <td><h4><?php echo $value ?></h4></td>
		    </tr>
			
 -->
		
		</tbody>
		</table>
		</div>
		<div class="col-md-1"></div>
</div>
</div>


</body>
</html>