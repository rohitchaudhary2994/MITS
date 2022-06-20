<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables (*)
    $server = "localhost";
    $username = "id17543846_mitsuser";
    $password = ")K?n6Do81xD>J&5X";
    $database = "id17543846_mits";
    // Create a database connection (*)

    $con = mysqli_connect($server, $username, $password, $database);

    // Check for connection success (*)
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    // Now you have Successfully connected to the database

    // Collect post variables (I have added just two input tags in the html so i will create just two $_POST variables, when we create a input tage in html for eg. <input type="text" id="gender" name="gender"> so in brackets of $_POST[add name of input eg. here it is:- gender] )
    // you can add as many as variables but just make sure you are adding the name attribute value into the bracets 
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $address = $_POST['address'];

    // this is the query which will insert record into your database so add relevant variables and same name of table and database as you have made into the myadminphp 
    $sql = "INSERT INTO orderonline (name, phoneno, email, date, time, address) VALUES ('$name', '$phoneno', '$email', '$date', '$time', '$address');";   //practise- database name , signup- table name you can other names to your database and table
    

    // Execute the query
    if($con->query($sql) == true){
        // Successfully inserted
        // Flag for successful insertion
        $insert = true;
    }

    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MITS | Order Online</title>
        <link rel="stylesheet" href="orderonline.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="img/20619095.jpg" type="image/x-icon">

    </head>

    <body>
        <section class="header" id="menu">
            <nav>
                <a href="index.html"><img src="img/Capture4yw.png"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="bookatable">
                <form action="orderonline.php" method="post">
                    <section class="headingtxt">
                        <h1><u>Order Online</u></h1>
                    </section><br />
                    <div class="rowone">
                        <div class="rowonedetail">
                            <h3>Name:</h3>
                            <div class="input-field">
                                <input type="text" name="name" id="name" placeholder="Enter your name" required>
                            </div>
                        </div>
                    </div><br />
                    <div class="rowtwo">
                        <div class="phoneno">
                            <h3>Phone No.</h3>
                            <div class="input-field">
                                <input type="number" name="phoneno" id="phoneno" placeholder="Enter your Phone Number" required>
                            </div>
                        </div><br />
                        <div class="email">
                            <h3>Email Id</h3>
                            <div class="input-field">
                                <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="rowthree">
                        <div class="date">
                            <h3>Date</h3>
                            <div class="input-timings">
                                <input type="date" name="date" id="date" required>
                            </div>
                        </div>
                        <div class="time">
                            <h3>Time</h3>
                            <div class="input-timings">
                                <input type="time" name="time" id="time" required>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="rowone">
                        <div class="rowonedetail">
                            <h3>Address:</h3>
                            <div class="input-field">
                                <input type="text" name="address" id="adress" placeholder="Enter your address" required>
                            </div>
                        </div>
                        <br /> <br /><br />
                        <input type="Submit" class="confirm" name="submit" value="Confirm Order">


                </form>
                <br />
                <section class="menubtntxt">
                    <h2><u>Payment Option</u></h2>
                </section>
                <section class="menubtn">

                    <a href="paymentpage.html" class="menubtn1-btn" id="online1">Net Banking</a>
                    <a href="index.html" onclick="ubereats();" class="menubtn2-btn" id="online2">Uber Eats</a>
                    <br />
                    <br />
                    <a href="index.html" onclick="zomato();" class="menubtn3-btn" id="online3">Zomato</a>
                    <a href="index.html" onclick="swiggy();" class="menubtn4-btn" id="online4">Swiggy</a>

                </section>

                </div>
        </section>
        <!-- ---------about us--------- -->
        <section class="footer" id="Contact">
            <h2>About Us</h2>
            <h6>Moon in the Sky is a Sample Project made with an intention of creating a multi-paged website with a<br> backend database connected.</h6>
            <br>
            <br>
            <div class="icons" id="Contact">
                <a href="https://facebook.com" target="_blank" class="fa fa-facebook"></a>
                <a href="https://twitter.com" target="_blank" class="fa fa-twitter"></a>
                <a href="https://instagram.com" target="_blank" class="fa fa-instagram"></a>
                <a href="https://linkedin.com" target="_blank" class="fa fa-linkedin"></a>
            </div>
            <div class="topio">
                <p>mobile:9968934316</p>
                <p>email:mooninthesky@gmail.com</p>
                <br>
                <br>
                <h6>copyright ©2021 all rights reserved</h6>
            </div>
        </section>
    </body>

    </html>
    <audio autoplay="true" id="myaudio" src="Feel.mp3"></audio>
    <script>
        var audio = document.getElementById("myaudio");
        audio.volume = 0.3;

        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };

        function ubereats() {
            window.open("https://ubereats.com");
        }

        function zomato() {
            window.open("https://zomato.com");
        }

        function swiggy() {
            window.open("https://swiggy.com");
        }
    </script>