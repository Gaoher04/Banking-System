<?php
session_start();
$con=mysqli_connect('localhost','root','','banking-system');
$q="select name from customers";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Money Transfer</title>
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
		text-align:center;
	}
	body{
		background-color:#004545;
	
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#a3c2c2;
		padding:50px;
		border:2px ridge black;
	}
	.ho{
		padding-top:50px;
	}
	
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:brown;
	}
	.button:hover{                                    
		background-color:#ff3333;
	
	}

	.btn {
				background-color:#a3c2c2;
				border: none;
				color: black;
				padding: 12px 16px;
				font-size: 20px;
				cursor: pointer;
			}
			.btn:hover {
				background-color:dodgerblue;
			}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Oliver"){
				 var arr=["Ava","Emma","John","Karan","Xavier","Caroline","Tina","Dan","Sara"];
				 }
				 else if(a==="Ava"){
					var arr=["Oliver","Emma","John","Karan","Xavier","Caroline","Tina","Dan","Sara"];
				}
				else if(a==="Emma"){
					var arr=["Oliver","Ava","John","Karan","Xavier","Caroline","Tina","Dan","Sara"];
				}
				else if(a==="John"){
					var arr=["Oliver","Ava","Emma","Karan","Xavier","Caroline","Tina","Dan","Sara"];
				 }
				 else if(a==="Karan"){
					var arr=["Oliver","Ava","Emma","John","Xavier","Caroline","Tina","Dan","Sara"];
				 }
				 else if(a==="Xavier"){
					var arr=["Oliver","Ava","Emma","John","Karan","Caroline","Tina","Dan","Sara"];
				 }
				 else if(a==="Caroline"){
					var arr=["Oliver","Ava","Emma","John","Karan","Xavier","Tina","Dan","Sara"];
				 }
				 else if(a==="Tina"){
					var arr=["Oliver","Ava","Emma","John","Karan","Xavier","Caroline","Dan","Sara"];
				 }
				 else if(a==="Dan"){
					var arr=["Oliver","Ava","Emma","John","Karan","Xavier","Caroline","Tina","Sara"];
				 }
				 else if(a==="Sara"){
				 var arr=["Oliver","Ava","Emma","John","Karan","Xavier","Caroline","Tina","Dan"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }

	</script>	

</head>
<body>
         <ul class="nav-ul">
			<a href="index.php">
				<li class="nav-li"><button class="btn" style='margin-left:16px' ><i class="fa fa-home"></i></button></li>
			</a>
		</ul>
			<br>
			
	<h1 style=" font-size:45px;color:#ccff99;text-shadow: 1.5px 1.5px black;">Transfer Amount  <i class="fa fa-money"></i></h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" style="font-size: 15pt; height: 28px; width:290px;"  align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Oliver">Oliver</option>
			<option value="Ava">Ava</option>
			<option value="Emma">Emma</option>
			<option value="John">John</option>
			<option value="Karan">Karan</option>
			<option value="Xavier">Xavier</option>
			<option value="Caroline">Caroline</option>
			<option value="Tina">Tina</option>
			<option value="Dan">Dan</option>
			<option value="Sara">Sara</option>
		</select><br><br>
		<label for="receiver" style="font-size: 15pt; height: 28px; width:290px;" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" style="font-size: 15pt; height: 28px; width:290px;" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<br>
		<div class="button1">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='black'"onMouseOut="this.style.color='black'"type="submit" name="submit" value="Transfer" style="color:black;font-size:19px;height:50px; width:130px;">
		</div>
	</form> 
	</div><br><br><br>

</body>
</html> 


