<?php 
    require_once 'templates/header.php';
?>

<main>
    <section class="section container-post">

        <div class="container center red-text fontp">
        <?php
            if(isset($_GET["error"])) {

                if($_GET["error"] == "emptyinput") {
                  echo "<p>Fill in all fields!</p>";
          
                } else if ($_GET["error"] == "invalidemail") {
                  echo "<p>Enter proper e-mail!</p>";
                }
            }
            
        ?>
        </div>
        <div class="container row contact-div z-depth-1">
         <div>
            <h3 class="center-align" id="fontx">Contact</h3>
         </div>   
            
        <form action="includes/contact.inc.php" method="post">
            <div class="row">
                <div class="input-field col s12 l6">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="fullname">
                    <label for="fullname">Fullname</label>
                </div>
                <div class="input-field col s12 l6">
                    <i class="material-icons prefix">email</i>
                    <input type="text" name="mail"  id="email">
                    <label for="email">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">markunread</i>
                    <input type="text" name="subject"  id="subject">
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">message</i>
                    <textarea name="message" class="materialize-textarea" id="message"></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="input-field center">
                <button type="submit" name="submit" class="btn waves-effect waves-light">SEND MAIL</button>
            </div>
        </form>
        </div>
    </section>
</main>


<?php 
    require_once 'templates/footer.php';
?>