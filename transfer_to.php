<?php
session_start();
$con=mysqli_connect('localhost','root','','banking-system');
$name1=$_SESSION['name'];
$q="select name from customers where not name='$name1'";
$result=mysqli_query($con,$q);
?>

<html>
	<head>
		<title>Transfer</title>
		<link rel="stylesheet" href="button.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			padding: 5px 5px;
			text-decoration: none;
			text-transform:uppercase;
			}
			body{
				background-color:#004545;
				background-image:url("images/12.jpg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
			.form{
				text-align:center;
				
			}
			.button{
				text-align:center;
			}
			button{
				border-radius:10px;
				background-color:brown;
			}
			button:hover{
				background-color:#ff3333;
			}
			table{
				background-color:#a3c2c2;
				padding:50px;
				border:2px ridge black;
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
				background-color:dodgerblue;
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
				background-color:dodgerblue;
			}
			
			.nav-li a:hover:not(.active) {
			background-color: 	 #527a7a;
			}
		</style>
	</head>
	<body>
	
		<ul class="nav-ul">
			<a href="index.php">
				<li class="nav-li"><button class="btn" style='margin-left:16px' ><i class="fa fa-home"></i></button></li>
			</a>
			
			<form action="customer.php" method="post">
				
				&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
					<button class="button1" style="float:right;height:45px;width:50px;text-align:center;font-size:20px;" type="submit" name="name" value="<?php echo $name1 ?>"><i class="fa fa-arrow-left"></i></button>
				
			</form>
		</ul>
	
		<center>
		<div class="view">
			<br><br><h2 style=" font-size:45px;color:#ccff99;text-shadow: 1.5px 1.5px black;">Transfer Amount <i class="fa fa-money"></i>
			</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
					<table>
						<tr>
						
							<td style="font-size:17pt;color:#010114;">
							<br>
								<label for="sender" align="left">Receiver Name:</label>
								&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
									<?php while($row = $result->fetch_assoc()) { ?>
									<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
									<?php } ?>
								</td>
							</tr><br>
							<tr>
								<td style="font-size:17pt;color:#010114;">
									<br><label for="transfer">Amount:</label>
								&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
							</tr>
							<tr>
								<td>
									<div class="button">
										<br> 
										<br>
										&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" class="c" onMouseOver="this.style.color='black'"onMouseOut="this.style.color='black'" value="current_balance" style="color:black;font-size:19px;height:50px; width:130px;">Transfer</button>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</form>
			</div><br>
			
			</center>
		</body>
	</html>


	