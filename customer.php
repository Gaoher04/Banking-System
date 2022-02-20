<?php
session_start();
$con=mysqli_connect('localhost','root','','banking-system');
$name=$_POST['name'];
$q="select * from customers where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$current_balance=$row['current_balance'];
$_SESSION['name']=$name;
?>

<html>
	<head>
		<title><?php echo $name?></title>
		<link rel="stylesheet" href="button.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body {
				font-family: "Lato", sans-serif;
				margin: 0px;
				text-align:center;
				}
			.nav-ul {
				list-style-type: none;
				margin: 0;
				padding: 10px;
				verflow: hidden;
				
				}
			.nav-li {
			float:left;
			}
			.nav-li a {
				
			display: block;
			color:#010114;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			text-transform:uppercase;
			}
			.nav-li a:hover:not(.active) {
			background-color: 	 #527a7a;
			}
			table{
				text-align:center;
				margin-left: auto;
				margin-right: auto;
				border:4px solid gray;
				border-collapse:collapse;
				}
			th{
				color:#0d0d26;
				font-size:24px;
				padding:16px;
			}
			
			td{
				font-size:22px;
				color: black;
				padding: 11px 16px 11px 18px;
			}
			tr{
				transition: background 0.3s, box-shadow 0.3s;
			}
			th,td{
				border-collapse:collapse;
				border:2px groove gray;
				font-family: Arial;
			}
			body{
				background-color:#004545;
				background-position: center;
				background-repeat: no-repeat;
				background-size:cover;
			}
			.flat-table-1 {
				background: #a3c2c2;
			}
			.flat-table-1 tr:hover {
				background: rgba(0,0,0,0.19);
			}
			.btn {
				background-color:#a3c2c2;
				border: none;
				color: black;
				padding: 12px 16px;
				font-size: 23px;
				cursor: pointer;
			}
			.btn:hover {
				background-color:RoyalBlue;

			
			}
		</style>
	</head>
	<body>
		<ul class="nav-ul" style="height:53px;">
			<a href="index.php">
				<li class="nav-li"><button class="btn"><i class="fa fa-home" style="font-size:24px"></i></button></li>
			</a>
			<li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px" ><a class="nav-link"><?php echo $name?></a></li>
		</ul>
		<br><br>
		<h1 style="font-size:43px;color:#ccff99;text-shadow: 2px 2px black;font-family: Times New Roman;">Customer 
		Detail <i class="fa fa-user"></i></h1>
		<br>
		<div class="view">
			<table class="flat-table-1">
				<tr>
					<th>Name</th>
					<td><?php echo $name?></td>
				</tr>
				
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<th>Email</th>
					<td><?php echo $mail?></td>
				</tr>
				
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<th>Current Balance</th>
					<td><?php echo $current_balance?></td>
				</tr>
			</table>
		</div>
		<br>
		<br>
		
<br>
		<div class="w3-padding-32">                                                                                                                                                              
      <a href="transfer_to.php">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" id="button "type="button" href="transfer_to.php" style="font-family: Arial; font-size:22px; background:#476b6b">Transfer To</button>
    </div>
		<br>
	<div class="w3-padding-32">
      <a href="ministatement.php">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" id="button "type="button" href="transfer_to.php" style="font-family: Arial; font-size:22px; background:#476b6b">Mini Statement</button>
    </div>

	</body>
</html>


