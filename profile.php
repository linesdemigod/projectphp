<?php 
    include 'templates/header.php';

    
//Logic
require_once 'includes/functions.inc.php';



require_once 'includes/dbh.inc.php';


?>



<main>
    <section>
        <div class="container">

            <div class="container row">
                <div>
                    <p class="center-align">Welcome, <?php echo $_SESSION['useruid'];?></p>
                    
                </div>
            </div>
            

            <?php 
                if(!isset($_SESSION['useruid'])) {
                    header("location: login.php");
                    exit();
                } 
                // SQL query
                $strSQL = "SELECT * FROM users WHERE usersUid = '".$_SESSION['useruid']."'";

                // Execute the query (the recordset $rs contains the result)
                $rs = mysqli_query($conn, $strSQL);

                // Loop the recordset $rs
                // Each row will be made into an array ($row) using mysqli_fetch_array
                while($row = mysqli_fetch_array($rs)) {
                
                    echo "<div class='container table-size'>";
                    echo "<div class='row'>";
                        echo "<table class='col s12 l12'>";
                        
                            echo "<tr>";
                                echo "<td>";
                                    echo "<p class='table-detail-label'>Full name: </p>";
                                echo "</td>";
                                echo "<td>";
                                    echo $row['usersFirstName'], ", ", $row['usersSurName']; 
                                echo "</td>";
                            echo "</tr>";
                        
                            echo "<tr>";
                                echo "<td>";
                                echo "<p class='table-detail-label'>Date of Birth: </p>";
                                echo "</td>";
                                echo "<td>";
                                    echo $row['usersDOB']; 
                                echo "</td>";
                            echo "</tr>";
                        
                            echo "<tr>";
                                echo "<td>";
                                    echo "<p class='table-detail-label'>E-mail: </p>";
                                echo "</td>";
                                echo "<td>";
                                    echo $row['usersEmail']; 
                                echo "</td>";
                            echo "</tr>";
                        echo "</table>";

                    echo "</div>";

                    echo "</div>";

                

                // Close the database connection
                mysqli_close($conn);
            } 
            ?>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
            <div class="col s12 l12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#test1" class="">Account</a></li>
                    <li class="tab col s3"><a href="#test2">Bank Statement</a></li>
                    <li class="tab col s3"><a href="#test3">Transfer</a></li>
                </ul>
                </div>
                <div id="test1" class="col s12">Account</div>
                <div id="test2" class="col s12">Bank Statement</div>
                <div id="test3" class="col s12">Transfer</div>
                
            </div>
                        
        </div>
    </section>
</main>



<?php 
    include 'templates/footer.php';
?>
