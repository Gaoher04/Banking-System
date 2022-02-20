<?php
session_start();
$con=mysqli_connect('localhost','root','','banking-system');
$name1=$_SESSION['name'];
$q="select sender,receiver, amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);

$name2=$_SESSION['name'];
$q1="select sender,receiver, amount from mini_statement where sender='$name1'";
$result1=mysqli_query($con,$q1);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
		<style>
			.nav-ul {
				list-style-type: none;
				margin: 0;
				padding: 5px;
				verflow: hidden;
				
				}
			.nav-li {
			float:left;
			}
			.nav-li a {
				
			display: block;
			color:#010114;
			text-align: center;
			padding: 8px 10px;
			text-decoration: none;
			text-transform:uppercase;
			}
			body{
				
				background-color:#004545;
				background-repeat: no-repeat;
				background-size:cover;
			}
			table{
				text-align:center;
				margin-left: auto;
				margin-right: auto;
				border:4px solid gray;
				border-collapse:collapse;
				background-color:#a3c2c2;
				}
			th{
				color:#0d0d26;
				font-size:26px;
				padding:16px;
			}
			
			td{
				font-size:23px;
				color: black;
				padding: 10px 20px 10px 22px;
			}
			tr{
				transition: background 0.3s, box-shadow 0.3s;
			}
			th,td{
				border-collapse:collapse;
				border:2px groove gray;
			}
			h2{
				padding:20px;
				font-size:35px;
				color:#805a46;
				text-shadow: 1px 1px black;
				text-align:center;
			}
			.btn {
				background-color:#a3c2c2;
				border: none;
				color: black;
				padding: 12px 16px;
				font-size: 23px;
				cursor: pointer;
			}
			.buttons{
				
				right:42%;
				text-align:center;
			}
			.btn:hover {
				background-color:  DodgerBlue;
			}
			.button1 {
				background-color:#a3c2c2;
				border: none;
				color: black;
				padding: 12px 16px;
				font-size: 23px;
				cursor: pointer;
			}
			
			.button1:hover {
				background-color: Dodgerblue;
			}
		</style>
	</head>
	
	<body>
		<ul class="nav-ul"">
			<a href="index.php">
				<li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
			</a>
			<form action="customer.php" method="post">
				
				&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
					<button class="button1" style="float:right;height:45px;width:50px;text-align:center;font-size:20px;" type="submit" name="name" value="<?php echo $name1 ?>"><i class="fa fa-arrow-left"></i></button>
				
			</form>
		</ul><br><br><br>
		<h2><?php echo "Mini Credit Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credit</th>
			</tr>
			<tr>
				
				<?php while($row = $result->fetch_assoc()) { ?>
				
				<tr>
					<td><?php echo $row["sender"]; ?></td>
					<td><?php echo $row["amount"]; ?></td>
				</tr>
				<?php } ?>
			</table>
			<br>
			<br>
                 
                 <h2><?php echo "Mini Debit Statement of ".$name2?></h2>
		 <table class="flat-table-1">
			<tr>
				<th>Receiver</th>
				<th>Debit</th>
			</tr>
			<tr>
				
				<?php while($row = $result1->fetch_assoc()) { ?>
				
				<tr>
					<td><?php echo $row["receiver"]; ?></td>
					<td><?php echo $row["amount"]; ?></td>
				</tr>
				<?php } ?>
			</table>
			<br>
			<br>
			
				
	</body>
</html>


<!--
	<form action="customer.php" method="post">
					<div class="buttons">
						<br><button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
						
					</div>
				</form>
				
				-->