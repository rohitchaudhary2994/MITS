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

    
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $noofguests = $_POST['noofguests'];

    // this is the query which will insert record into your database so add relevant variables and same name of table and database as you have made into the myadminphp 
    $sql = "INSERT INTO bookatable (name, phoneno, email, date, time, noofguests) VALUES ('$name', '$phoneno', '$email', '$date', '$time', '$noofguests');";   
    

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
        <title>MITS | Book a table</title>
        <link rel="stylesheet" href="bookatable.css">
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
                <form action="bookatable.php" method="post">
                    <section class="headingtxt">
                        <h1><u>Book Your Table</u></h1>
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
                                <input type="date" name="date" id="date" placeholder="Enter Date" required>
                            </div>
                        </div>
                        <div class="time">
                            <h3>Time</h3>
                            <div class="input-timings">
                                <input type="time" name="time" id="time" placeholder="Enter Time" required>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="phoneno">
                        <h3>Number of Guests</h3>
                        <div class="input-field-2">
                            <input type="number" name="noofguests" id="noofguests" required>
                        </div>
                    </div><br /><br /> <br />
                    <input type="submit" class="confirm" name="submit" value="Register Table">

                </form>
                <section class="menubtntxt">
                    <h2><u>Payment Option</u></h2>
                </section>
                <section class="menubtn">
                    <a id="myBtn" class="menubtn-btn">Pay on Arrival</a>
                    <a href="paymentpage.html" class="menubtn-btn">Pay Online</a>
                </section>

            </div>
        </section>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Pay on Arrival confirmed.</p>
            </div>

        </div>
        <script>
            function preventBack() {
                window.history.forward();
            }
            setTimeout("preventBack()", 0);
            window.onunload = function() {
                null
            };
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                //   modal.style.display = "none";
                window.location.href = "index.html";

            }
             // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                // modal.style.display = "none";
                window.location.href = "index.html";

            }
        }
        </script>
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
        <div class="audiohide">
            <audio autoplay="true" id="myaudio" src="Feel.mp3"></audio>
        </div>
        <script>
            var audio = document.getElementById("myaudio");
            audio.volume = 0.3;
        </script>
    </body>
    </html>