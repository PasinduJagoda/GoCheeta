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
        
        .navbar 
        {
            overflow: hidden;
            background-color: #333; 
        }

        .navbar a 
        {
            float: right; 
            display: block; 
            color: white;
            text-align: center; 
            padding: 14px 20px;
            text-decoration: none; 
        }

        .navbar a:hover
        {
            background-color: #8e4eed;
            color: white;
        }
        </style>
    </head>

    <body>
        <div class="navbar">
            <a href="home.html">Logout</a>
        </div>
        
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
                <table width="1321" height="123" border="0">
                    <tbody>
                        <tr>
                            <div>
                                <td width="500" height="200"><h1>Add Drivers</h1>
                                    <label for="txtUname"><b>Name</b></label>
                                    <input type="text" placeholder="Enter Driver's Name" name="txtUname" id="txtUname">
                                    
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Driver's Password" name="txtPassword">
                                    
                                    <label for="txtnumber"><b>Phone Number</b></label>
                                    <input type="text" placeholder="Enter Driver's phone number" name="txtnumber" id="txtnumber">
        
                                    <button type="submit" value="btnSubmit" id ="btnSubmit" name="btnSubmit" class="registerbtn">Add New Driver</button>
        
                                </td>
                            </div>
                        </tr>
                    </tbody>
                </table>


                <?php

                    
                $name = $_GET['txtUname'];
                $password = $_GET['txtPassword'];
                $number = $_GET['txtnumber'];


                        $sql = "INSERT INTO driver (name, password, number)
                                        VALUES ('$name','$password' , '$number')";
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
        </form>
    </body>
</html>