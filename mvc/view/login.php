<!DOCTYPE HTML>
<html>  
<body>
    <head>
       <style>
            div {
                color: red;
            }
        </style>
    </head>
    <center>
   <div> <?php
    session_start();
        if( ! empty($_SESSION['login_error_msg']))
        {
            echo $_SESSION['login_error_msg'];
            unset($_SESSION['login_error_msg']);
        }
    ?>
       </div>
        <h1>Please enter username and password</h1>

        <table>

                <form action="../controller/verify_login.php" method="post">
                UserName: <input type="text" name="username"><br><br>
                Password: <input type="password" name="pass"><br><br>
               <td><input type="submit" value="Login"></td> 
                </form>
                <form action="registration.php" method="post">
                <td><input type="submit" value="Registration"></td>
                </form>    
        
        </table>

    </center>
</body>
</html>

