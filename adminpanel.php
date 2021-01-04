<?php 
    include 'templates/adminpanelheader.php';

    include_once 'includes/dbh.inc.php';

    require_once 'includes/functions.inc.php';

?>

    <div id="header">
        <center>
            <h4>Admin Panel</h4>
        </center>
    </div>

    <div id="sidemenu">
        <ul>
            <li><a href="add.php" target="_blank"> Create Account </a></li>
            <li><a href="delete.php" target="_blank"> Delete Account </a></li>
            <li><a href="update.php" target="_blank"> Update Account </a></li>
            <li><a href="search.php" target="_blank"> Search </a></li>
            <li><a href="includes/adminpanellogout.inc.php" target="_blank"> Log out </a></li>
        </ul>
    </div>

    <div class="container center">
        <div class="row">
            <form action="includes/signup.inc.php"  method="post">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">account_box</i>
                            <input type="text" name="firstname" id="firstname">
                            <label for="firstname">Firstname</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">account_box</i>
                            <input type="text" name="surname" id="surname">
                            <label for="surname">Surname</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l12">
                            <input type="text" name="dob" id="date" class="datepicker">
                            <label for="date">Date of Birth</label>
                        </div>
                        <div class="input-field col s12 l12">
                            <i class="material-icons prefix">email</i>
                            <input type="text" name="email" id="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 l12">
                            <i class="material-icons prefix">person</i>
                            <input type="text" name="uid" id="username">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="pwd" id="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="pwdconfirm" id="password">
                            <label for="password">Confirm Password</label>
                        </div>
                    </div>
                    <div class="input-field center">
                        <button type="submit" name="submit" class="btn waves-effect waves-light">Sign Up</button>
                    </div>
            </form>
        </div>
    </div>


    <!-- <div id="data">
    <br><br>

    <center><h6>Data available</h6></center>

<?php
        if(!isset($_SESSION['adminuid'])) {
            header("location: admin.php");
            exit();
        } 

            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
            echo " ID: " . $row["usersId"]. "<br>" . "  Name: " . $row["usersFirstName"].  " <br> " .  "Email: " . $row["usersEmail"] .  "<br>" . "username: " . $row["usersUid"]. "<br><br><br>";
            }
        } else {
            echo "<h3><center>No user data found!<center></h3>";
        }
?>
    </div> -->

<?php 
    include 'templates/adminpanelfooter.php';
?>
