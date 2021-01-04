<?php 
    include 'templates/header.php';
?>

<main>
    <section class="section container-post">
        <div class="container center red-text fontp">
    <?php 
            if(isset($_GET["error"])) {

                if($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
        
                } else if ($_GET["error"] == "invaliuid") {
                    echo "<p>Choose a proper username!</p>";
        
                } else if ($_GET["error"] == "invaliemail") {
                    echo "<p>Choose a proper email!</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>password doesn't match!</p>";
        
                } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
        
                }  else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken!</p>";
        
                }  else if ($_GET["error"] == "passwordisshort") {
                echo "<p>Password is short!</p>";
                
                } else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
                }
        
            }
        ?>
        </div>
        <div class="container row signup-div z-depth-1">
                <div>
                    <h3 class="center-align" id="fontx">Sign Up</h3>
                </div>
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
        
    </section>
</main>


<?php 
    include 'templates/footer.php';
?>