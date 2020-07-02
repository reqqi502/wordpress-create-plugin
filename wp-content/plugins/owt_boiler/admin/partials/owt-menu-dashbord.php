<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles.css">
    
  </head>
  <body style=" background-color: black;">
        <?php

        
        
        global $wpdb;
        if(isset($_POST["add"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone_no=$_POST["phone_no"];
        // $query="insert into wp_owt_boiler_table values('".$name."','".$email."','".$phone_no."')";
        $table_name = $wpdb->prefix . "owt_boiler_table";
        $wpdb->insert( $table_name, array(
                              'name' => $name,
                              'email' => $email,
                              'phone_no'=>$phone_no
                              )); 
        


        // $wpdb->query($query);
        echo $query;
      
          }
        
        ?>
        <br><br><br><br><br><br><br>
  <center>
  <form method="post" style="color:white">
  <div class="login-box">
  <h1 style="color:white">Login</h1>
  <div class="textbox">
    <input name="name"  type="text" placeholder="name">
  </div><br>
  <input name="email"  type="text" placeholder="email">
  <div class="textbox">
    <i class="fas fa-lock"></i><br>
    <input name="phone_no"  placeholder="phone">
  </div>
  <br>
  <input type="submit" name="add" id="activate" class="btn" value="Sign in" style="margin-left:114px;background-color: blue;">
</div>
</form>
</center>
  </body>
</html>





