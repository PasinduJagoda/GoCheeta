<!doctype html>
<html>
<head>

<?php
        $conn = mysqli_connect("localhost", "root", "", "apiyamu");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
?>

<title>Untitled Document</title>

<style>
    body 
{
	font-family: Arial, Helvetica, sans-serif;
}

.header 
{
	padding: 90px;
	text-align: left;
	font-style: italic;
	background:  #8e4eed;
	color: rgb(255, 255, 255);
}

.header h1 
{
  	font-size: 50px;
}

form 
{
	border: 3px solid #f1f1f1;
}

input[type=text], input[type=password]
{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

button 
{
	background-color: #30E43B;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
}

button:hover 
{
	opacity: 0.8;
}

.cancelbtn 
{
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}

.registerbtn
{
	width: auto;
	padding: 10px 18px;
	background-color: #8e4eed;
}

.imgcontainer 
{
	text-align: center;
	margin: 24px 0 12px 0;
}

img.avatar 
{
	width: 40%;
	border-radius: 50%;
}

.container 
{
	padding: 16px;
}

span.psw 
{
	float: right;
	padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) 
{
  span.psw 
	{
		 display: block;
		 float: none;
	}
  .cancelbtn 
	{
		width: 100%;
  	}
}

.register 
{
	background-color: #f1f1f1;
	text-align: center;
}
</style>

</head>

<body>

<div class="header">
<table width="1321" height="123" border="0">
  <tbody>
    <tr>
      <td width="500" height="200"><h1>GoCheeta</h1></td>
    </tr>
  </tbody>
</table>
</div>

<h2>Driver Login Form</h2>

<form action = "admin_main.php" method="post">
  <div class="imgcontainer">
    <img src="../Gocheeta/user_image.png" alt="Avatar" class="avatar" style="width:200px;height:200px;">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="txtUname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txtPassword" required>

    <button type="submit" name="btnSubmit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="booking.html">Cancel</button>
  </div>
  <p>
	<?php
			   include('connection.php');
				 $Username = $_GET["txtUname"];
				 $Password = $_GET["txtPassword"];

				 $Username = stripcslashes($Username);
				 $Password = stripcslashes($Password);
				 $Username = mysqli_real_escape_string($conn, $Username);
				 $Password = mysqli_real_escape_string($conn, $Password);

				 $sql = "SELECT * FROM driver WHERE name = '$Username' and  password = '$Password'";
				 $result = mysqli_query($conn, $sql);
				 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				 $count = mysqli_num_rows($result);

				 if($count == 1)
				{  
					echo "<h1><center> Login successful </center></h1>";
				}  
        		else
				{  
            		echo "<h1> Login failed. Invalid username or password.</h1>";
				}
			?>
	</p>
</form>

</body>
</html>
