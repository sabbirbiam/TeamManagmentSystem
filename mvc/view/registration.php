

    <html>
         <head>
       <style>
            div {
                color: red;
            }
        </style>
    </head>

    <body>
        <center>
           <div> <?php
            session_start();
            if(!empty($_SESSION["response_message"]))
                {
                    echo $_SESSION["response_message"];
                    unset($_SESSION["response_message"]);
                }
            ?>
               </div>
                <!-- header start-->
                <h1>Create your Account</h1>

            <table>
                <form action="../controller/validate.php" method="post">
                    <tr>
                        <td>
                            <b>First Name</b>
                        </td>
                        <td>
                            <input type="text" name="firstname" value=""><br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Last Name</b>
                        </td>
                        <td>
                            <input type="text" name="lastname" value=""><br><br>
                        </td>
                    </tr>
                    <tr>
                     <td><b>Date Of Birth:</b></td>
                    <td><select name="day">
                        <?php 
                        for($i=1;$i<=31;$i++){
                            if($i<10){
                                $i='0'.$i;
                            }
                            echo "<option value=".$i.">".$i."</option>";
                        } 
                    ?>
                    
                    </select>    
                    <select name="month">
                        <?php 
                        $Months = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                        for($i=0;$i<12;$i++){
                            echo "<option value=".$Months[$i].">".$Months[$i]."</option>";
                        } 
                    ?>
                    </select>
                    <select name="year">
                        <?php 
                        for($i=date('Y');$i>=date('Y')-100;$i--){
                            echo "<option value=".$i.">".$i."</option>";
                        } 
                    ?>
                    </select>
                    <br>
                    <br>
                    </td>    
                    </tr>
                    <br>
                    <br>
                    <tr>
                    <td><b>Gender</b></td> 
                    <td> 
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <br>
                    <br 
                    </td>
                    </tr>    
                    <tr>
                        <td>
                            <b>Phone</b>
                        </td> 
                        <td>
                            <input type="text" name="phone" value=""><br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Email</b>
                        </td>
                        <td>
                            <input type="text" name="email" value=""><br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Password</b>
                        </td>
                        <td>
                            <input type="password" name="passone" value=""><br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Confirm Password</b>
                        </td>
                        <td>
                            <input type="password" name="passtwo" value=""><br><br>
                        </td>
                    </tr>
  
                    <tr>
                        <td>
                            <br><input type="submit" name="submit" value="SUBMIT">
                        </td>
                        <td>
                           <br><input type="reset" name="reset" value="Reset">
                        </td>
                    </tr>
                    

                </form>
            </table>

        </center>
    </body>

    </html>