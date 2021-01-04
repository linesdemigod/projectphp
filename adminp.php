<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
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
                  
                <form action="includes/adminp.inc.php"  method="post">
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
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">email</i>
                            <input type="text" name="email" id="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <i class="material-icons prefix">person</i>
                            <input type="text" name="uid" id="username">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l12">
                            <input type="text" name="dob" id="date" class="datepicker">
                            <label for="date">Date of Birth</label>
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
                        <button type="submit" name="submit" class="btn waves-effect waves-light">Submit</button>
                    </div>
                </form>

            </div>
            
        </section>
    </main>
        


        <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $(".materialboxed").materialbox();
            $(".parallax").parallax();
            $(".datepicker").datepicker({
                disableWeekends: true
            })
            $(".tooltipped").tooltip();
            $(".scrollspy").scrollSpy();
            $('.tabs').tabs();

        });
    </script>
</body>
</html>