<?php 
    include 'SRC/editacc.php';

    if (!isset($_SESSION["id"])) {
        echo "<script>window.location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Aqua Swift</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="SRC/account.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="SRC/index.css?v=<?php echo time();?>">
        <script src="navbar.js?v=<?php echo time();?>"></script>
    </head>

    <body>
        <div class="navbar">
            <a href="index.php"><img class="mainlogo" src="SRC/Index/AquaSwiftLogo.png" alt="Business Logo">
            <div class="buttonset1">
                <a href="index.php"><button>Home</button></a>
                <a href="booking.php"><button>Book Ticket</button></a>
                <a href="gallery.php"><button>Gallery</button></a>
                <a href="review.php"><button>Reviews</button></a>
                <img src="SRC/Index/dropdown.png" alt="dropdown" id="line3" onclick="shownavbar()">
                <a href="account.php" class="acclogo"><img src="SRC/Index/dp.png" alt="Profile"></a>
            </div>
        </div>
        <div id="mininavbar">
            <a href="index.php"><button>Home</button></a>
            <a href="booking.php"><button>Book Ticket</button></a>
            <a href="gallery.php"><button>Gallery</button></a>
            <a href="review.php"><button>Reviews</button></a>
        </div>

        <form method="post" action="SRC/logoff.php" class="logoff">
        <input name="logoff" type="submit" value="LOG OUT">
        </form>
        

        <div class="summery">
            <img class="bigdp" src="SRC/Index/dp.png">
            <div class="devider"></div>
            <p>
                <span id="username"> <?php echo $fname ?> &nbsp <?php echo $lname ?> </span><br>
                <span id="email"> <?php echo $email ?> </span><br><br>
                <span id="usertype"> <?php echo $usertype ?> </span>
            </p>
        </div>

        <form class="detail" method="post" action="SRC/editacc.php">
            <div class="data">
                <label><p>First Name</p><input type="text" name="fname" value=<?php echo $fname ?> ></label>
                <label><p>Last Name</p><input type="text" name="lname" value=<?php echo $lname ?> ></label>
            </div>

            <input class="save" name="update" type="submit" value="Save Changes">

            <div class="password">
                <span>Change Password</span>
                <div class="data">
                    <label><p>Current Password</p><input type="password" name="pass" required></label>
                    <label><p>New Password</p><input type="password" name="npass" required></label>
                </div>

                <input class="save" name="updatepw" type="submit" value="Update Password">
            </div>
            
            <div class="extras">
                <div>Booking History</div>
                <input class="delete" name="delete" type="submit" value="Delete Account">
            </div>
        </form>
        

    </body>

    <footer style="position: fixed; bottom: 0;">

        <p class="copyright">Copyright 2023 © AquaSwift. All Rights Reserved.</p>
        <a href="contactUs.php"><button class="contactus">
            Send Message
        </button></a>
    </footer>

</html>