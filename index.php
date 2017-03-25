<?php
    include('connect.php'); //Runs connection check
    include('header.php'); //Loads the header
    include('functions.php'); //Loads the functions file
?>

    <div>
        <form action='index.php' method='post'>
      <!--A DIV appears here if ran properly-->                
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //Trim the input
                $username = test_input($_POST["username"]);
                $password = test_input($_POST["password"]);
                //Forms a query
                $query = "SELECT userID FROM user_info WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_row($result);

                if ($row) {
                    //Code to be executed on successful login
                } 
                else {
                    echo "<div class='error'>Incorrect Credentials.</div>";                              
                }
            }
        ?>
          
        <label for='username'>Username</label>
        <input type='text' id='username' name='username' placeholder='Enter Username'>

        <label for='password'>Password</label>
        <input type='password' id='password' name='password' placeholder='Enter Password'>

        <input type='submit' value='Login'>
      </form>
    </div>                                           

<!--Close database connection-->
<?php
    mysqli_close($conn);
    include('footer.php');
?>