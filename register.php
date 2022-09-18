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
    * 
{
	box-sizing: border-box
}

.header 
{
	padding: 90px;
	text-align: left;
	font-style: italic;
	background:  #8e4eed;
	color: white;
}

.header h1 
{
  	font-size: 50px;
}

/* Add padding to containers */
.container 
{
	padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password]
{
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus 
{
	background-color: #ddd;
	outline: none;
}

/* Overwrite default styles of hr */
hr 
{
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn 
{
	background-color: #8e4eed;
	color: white;
	padding: 16px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
	opacity: 0.9;
}

.registerbtn:hover 
{
	opacity:1;
}

/* Add a blue text color to links */
a 
{
	color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin 
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
	<form methode="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="txtemail"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="txtEmail" id="txtEmail" required>

    <label for="txtUname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="txtUname" id="txtUname" required>

    <label for="txtnumber"><b>Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="txtnumber" id="txtnumber" required>

    <label for="txtpassword"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txtPassword" id="txtPassword" required>

    <label for="txtConfirmPassword"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="txtConfirmPassword" id="txtConfirmPassword" required>
    <hr>

    <button type="submit" name="btnSubmit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="..\GoCheeta\login.php">Sign in</a>.</p>
  </div>
</form>
</body>

<?php

	$Email = $_GET["txtEmail"];
    $Name = $_GET["txtUname"];
    $Number = $_GET["txtnumber"];
	if($_GET["txtPassword"] == $_GET["txtConfirmPassword"])
	{
		$Password = $_GET["txtPassword"];
	}
	else
	{
		echo "Check Password";
	}
	
	$sql = "INSERT INTO customer (email, password, name, number) VALUES ('abc@gmail.com', '$Password', '$Name', '$Number')";

	if(mysqli_query($conn, $sql))
                        {
                            echo "Data saved";
                        } 
                        else
                        {
                            echo "ERROR: Hush! Sorry $sql. "
                                . mysqli_error($conn);
                        }
                         
                        // Close connection
                        mysqli_close($conn);

?>

</html>
