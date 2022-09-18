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
              <div class="container">
                <h1>Booking</h1>
                <p>Please fill in this form to book your ride.</p>
                <hr>

                <label for="txtUname"><b>Name</b></label>
                <input type="text" placeholder="Enter Name for the Booking" name="txtUname" id="txtUname" required>

                <label for="txtnumber"><b>Number</b></label>
                <input type="text" placeholder="Enter Phone Number for the Booking" name="txtnumber" id="txtnumber" required>

                <label for="txtlocation"><b>Location</b></label>
                <input type="text" placeholder="Enter Dropping Point for the Booking" name="txtlocation" id="txtlocation" required>

                <label for="txtlocation"><b>Vehicle</b></label>
                <input type="text" placeholder="Enter Vehicle Type for the Booking (Car/Van/Threewheel)" name="txtlocation" id="txtlocation" required>
                
                <button type="submit" name="btnSubmit" class="registerbtn">Book</button>

                <?php
                    $Name = $_GET["txtUname"];
                    $Number = $_GET["txtnumber"];
                    $Location = $_GET["txtlocation"];
                    $Vehicle = $_GET["txtlocation"];

                    $sql = "INSERT INTO bookings ( customerName, number, location, vehicleCaegory) VALUES ('$Name', '$Number', '$Location','$Vehicle')";
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
            </div>
    </body>
</html>