<!doctype html>
<?php
include 'connection.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Yarala Hruthik Reddy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="####ADD CONTENT HERE####">
        <meta name="keywords" content="####ADD KEYWORDS####">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="sthapatya_CSS.css">
        <link rel="stylesheet" type="text/css" href="sthapatya_Sponsors_CSS.css">
        <link rel="icon" href="Photos/JNTUH%20FINAL%20NEW%20LOGO.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto+Mono" rel="stylesheet">


        <title>Sthapatya Registrations</title>
    </head>

    <body>
        <div id="container">
            <div class="logoAndNavbar">
                <img class="logo" src="Photos/JNTUH%20FINAL%20NEW%20LOGO.png" alt="logo">

                <div class="menu" id="navbar">
                    <a href="index.html" class="menuAnimation" onclick="menuAnimate()">Home</a>
                    <a href="index.html#aboutCollege" class="menuAnimation" onclick="menuAnimate()">About</a>
                    <a href="sthapatya_Events.html" class="menuAnimation" onclick="menuAnimate()">Events</a>
                    <a href="index.html#workshops" class="menuAnimation" onclick="menuAnimate()">Workshops</a>
                    <a href="#backGround" class="menuAnimation" onclick="menuAnimate()">Register</a>
                    <a href="sthapatya_Sponsors.html" class="menuAnimation" onclick="menuAnimate()">Sponsors</a>
                    <a href="sthapatya_gallery.html" class="menuAnimation" onclick="menuAnimate()">Gallery</a>
                    <a href="index.html#socialMedia" class="menuAnimation" onclick="menuAnimate()">Contact</a>
                </div>

                <div class="menuBar">
                    <a href="javascript:void(0);" class="menuAnimation" onclick="menuAnimate()"><i id="changeMenu" class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>

        <div id="backGround">
        <img class="logo3" src="Photos/GJC_logo_04.png" alt="logo">
        <h1 class="mainHeading">STHAPATYA 2K19</h1>
        <img class="finalLogo" src="Photos/1550576932379.png" alt="logo">
        
        <h2 class="mainInfo">Registrations<br><a href="#register"><i id="mainDown" class="fa fa-chevron-circle-down down"></i></a></h2>
        <p id="countTimer" class="timer"></p>
        
        <h3 class="mainDate">13th - 14th March 2019</h3>
    </div>

        <div id="register">
            <form  method="POST" action="sthapatya_Register.php">
                <fieldset>
                    <p>
                        Name: <br>
                        <input type="text" name="name" placeholder="Hi, your name?">
                    </p>
                    <br>
                    <p>
                        Mail ID: <br>
                        <input type="email" name="email" placeholder="I need your E-mail ID!">
                    </p>
                    <br>
                    <p>
                        Mobile: <br>
                        <input type="text" name="mobile" placeholder="Maybe your number?">
                    </p>
                </fieldset>
                <fieldset>
                    <p>
                        Event: <br>
                        <select name="event" id="formEvent" onclick="getEventAmount()">
                            <option value="None">None</option>
                            <option value="Poster Presentation">Poster Presentation</option>
                            <option value="Paper Presentation">Paper Presentation</option>
                            <option value="CAD Ovation">CAD Ovation</option>
                            <option value="Quickfix">Quickfix</option>
                            <option value="Logiq">Logiq</option>
                            <option value="Civiq">Civiq</option>
                            <option value="It's Debatble">It's Debatble</option>
                            <option value="Prototypical">Prototypical</option>
                        </select>
                    </p>
                    <br>
                    <p>
                        Workshop: <br>
                        <select name="workshop" id="formWorkshop" onclick="getWorkshopAmount()">
                            <option value="None">None</option>
                            <option value="E-TABS">E-TABS</option>
                            <option value="BIM-REVIT">BIM-REVIT</option>
                        </select>
                    </p>
                    <p id="showEventAmount"></p>
                    <p id="showWorkshopAmount"></p>
                </fieldset>
                <br>
                <p>
                    <input type="submit" name="submit" value="Submit">
                </p>
            </form>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $mail = $_POST['email'];
            $mobile = $_POST['mobile'];
            $event = $_POST['event'];
            $workshop = $_POST['workshop'];
            $obj = new MyConn();
            $obj->connect();
            $stl = $obj->conn->query("select * from register1 where email='$mail'")->fetchAll(PDO::FETCH_ASSOC);
            $obj->disconnect();
            if ($stl) {
                echo '<script language="javascript">';
                echo 'alert("Email ID ALREADY EXISTS")';
                echo '</script>';
            } else {
                $obj = new MyConn();
                $obj->connect();
                $st2 = $obj->conn->query("insert  into register1 (name,email,mobile,event,workshop,uploadedTime) values ('$name','$mail','$mobile','$event','$workshop',NOW())");
                $obj->disconnect();
                echo '<script language="javascript">';
                echo 'alert("Details Registered Succesfully")';
                echo '</script>';
            }
        }
        ?>


        <div id="socialMedia">
            <h1 class="moreTitle">More About Us</h1>
            <p class="moreInfo">STHAPATYA’19 is a platform of future civil Engineers to expand their horizon. The idea is to encourage students all over the country to share their technical knowledge.</p>
            <p class="mailAt">Mail us at <a href="mailto:sthapatya19@gmail.com" target="_top">sthapatya19@gmail.com</a></p>
            <p class="callUs">Reach us at :</p>
            <ul>
                <li>S. Anil Raj-9652676707</li>
                <li>G. Nikhil Reddy-9701148300</li>
                <li>M. Srinath-9701079742</li>
                <li>M. Nuthan Chandra Kumar-7396045508</li>
                <li>Venkata Ramana-8686579102</li>
            </ul>
            <div id="icons">
                <a class="socialIcons" href="https://www.facebook.com/sthapatya.jntuh/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="socialIcons" href="https://www.instagram.com/sthapatya2019/?utm_source=ig_profile_share&igshid=1wweifhomduw5" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </div>

        <div id="footer">
            <p class="made">Made for Team STHAPATYA 2019</p>
            <p class="copyRight">&copy; Yarala Hruthik Reddy 2019</p>
        </div>



        <script src="sthapatya_JS.js"></script> 
    </body>
</html>