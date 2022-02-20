<?php
session_start();
$con=mysqli_connect('localhost','root','','banking-system');
$q="select * from customers ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>

<html>
	<head>
		<title>Customer</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
		
		<style>
			body{
				text-align:center;
			}
			.flat-table-1 {
				background: #a3c2c2;
			}
			.flat-table-1 tr:hover {
				background: rgba(0,0,0,0.19);
			}
			h1{
				font-family: Arial, Times, serif;
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
				text-align:center;
				font-size:22px;
				color: black;
				padding: 0px 20px 0px 20px;
			}
			tr{
				transition: background 0.3s, box-shadow 0.3s;
			}
			th,td{
				border-collapse:collapse;
				border:2px groove gray;
				font-family: Arial;
			}
			.css-button{
				margin-left:auto;
				margin-right:auto;
			}
			.button1{
				font-family: Arial;
				background-color:#527a7a;
				text-align:center;
				padding-top:2px;
				font-size: 18px;
			}
			
			.button1:hover{
				background-color:blues;
			}
			.view{
				top:50%;
				padding-top:20px;
				text-align:center;
			}
			.ho{
				padding-top:50px;
				padding-bottom:100px;
			}
			body{
			background-color: #004545;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.nav-ul {
				list-style-type: none;
				margin: 0;
				padding: 5px;
				verflow: hidden;
				
				}
        
		.nav-li a:hover:not(.active) {
			background-color: #00ccff;
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
	<ul class="nav-ul">
			<a href="index.php">
				<li class="nav-li"><button class="btn"><i class="fa fa-home "></i></button></li>
			</a>
		</ul><br><br>
	<br> <br>
		<h1 style="color:#ccff99;text-shadow: 2px 2px black;font-family: Times New Roman;">Customer 
		Details <i class="fa fa-users"></i></h1>
		<table class="flat-table-1">
			<thead>
				<th>NO</th>
				<th>Name</th>
				<th>Email</th>
				<th>Current Balance</th>
				<th></th>
			</thead>
			<tbody>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 1</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post"  class="view">
							<button class="button1" type="submit" name="name" value="Oliver">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 2</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Ava">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 3</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Emma">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 4</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="John">View</button>
						</form>
					</td>
					
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 5</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Karan">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 6</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Xavier">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
					
						$row=mysqli_fetch_array($result);
					?>
					<td> 7</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="Caroline">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 8</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="Tina">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 9</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="Dan">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 10</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["current_balance"]; ?></td>
					<td>
						<form action="customer.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="Sara">View</button>
						</form>
					</td>
				</tr>
			</tbody>
		</table><br><br>
		<!--<div class="buttons">
			<a href="index.php">
				<button class="glow-on-hover">HOME</button>
			</a>
		</div>-->
	</body>
</html>





<!--
 #00008b

#92c6df
fa-3x
-->