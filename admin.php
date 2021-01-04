<?php 
    include 'templates/adminheader.php';
?>

<main>
    <section class="section container-post">
        
        <div class="container center red-text fontp">
        <?php
            if(isset($_GET["error"])) {

                if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";

                } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect information!</p>";
                }
            }
        ?>
        </div>
        
        <div class="container row center login-div z-depth-1">
            <div>
                <h3 class="center-align" id="fontx">Log In</h3>
            </div>
            <form action="includes/admin.inc.php" method="post" >
            <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="uid" id="username">
                        <label for="username">username</label>
                    </div> 
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="pwd" id="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="input-field center">
                    <button type="submit" name="submit" class="btn waves-effect waves-light">Log In</button>
                </div>
            </form>
        </div>
        <div class="container row">
            <div class="col s12">
                <p class="center-align"> By signing in I acknowledge that I have read and understand the <br>terms and conditions when using Online Banking</p>
            </div>
        </div>
    </section>
    
</main>
 
<?php 
    include 'templates/adminfooter.php';
?>
