<?php 

session_start();

	include("connect.php");
	include("functions.php");
	include 'header.php';


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($connect, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:index.php");
						die;
					}
				}
			}
			
			//echo "wrong username or password!";
		}else
		{
			//echo "wrong username or password!";
		}
	}

?>











	




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
<style type="text/css">


body

{

 
 
background-image: url("bg.jpg");
  background-size: cover;
  background-repeat: none;
  
 
}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 150px;
		color: white;
		background-color: darkgreen;
		border: none;
		font-size:14px;

	}

	a{

		color:white;
		
	}

	#box{

	
		margin: auto;
		width: 500px;
		padding: 70px;
	}

	</style>

	<div id="box">
		
		<form method="post">
		<div style="font-size: 20px;margin: 10px;color: darkblue; font-weight:bold;font-family: 'Times New Roman', Times, serif;">Login</div>


			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			
			<button id="button" type="submit" class="btn btn-success">Login</button>
			<button id="button" type="submit" class="btn btn-success"><a href="signup.php">Create Account</a></button>

			<!--<button><a href="signup.php">Click to Signup</a></button><br><br> -->
		</form>
	</div>
</body>
</html>
