<?php
  session_start(); 
  require_once("section/header.php");
  if (isset($_POST["signin"])) {
    $name = $_POST["name"];
    $password_user = $_POST["password"];
    
    require_once("conn.php");
    $sql = "SELECT * FROM users WHERE name = '$name' AND pass = '$password_user' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if ($row['id']==1) {
          
          $_SESSION['name'] = $row['name'];
          $_SESSION['gender']= $row['gender'];
          $_SESSION['email']= $row['email'];
          $_SESSION['age']= $row['age'];
          header("Location: /Project/index.php?Link=admin");
        }else{
          $_SESSION['name'] = $row['name'];
          $_SESSION['gender']= $row['gender'];
          $_SESSION['email']= $row['email'];
          $_SESSION['age']= $row['age'];
          header("Location: /Project/index.php?Link=Profile");
        } 
      }
    }else {  
        ?>
        <script>alert('User not found, please check again.');</script>
        <?php
    }
    $conn->close();

  }
?>
    
  <form class="form-horizontal"  role="form" method="post" action="Login.php">
    <div id="back_images" style="background-image: url(images/login.jpg);height:558px;">
    <div class="container" style="margin-top:60px;">
    <div class="col-md-4 col-md-offset-4" id="login-menu">
      <h1>Login</h1>
      <div class="form-group">
        <label for="usr">Username:</label>
        <input type="text" class="form-control" id="usr" placeholder="Your name:" name="name" id="loginField">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Your password:" name="password" id="passwordField">
    </div>
    <hr>
    <!-- <span id="loginButton" >Button</span> -->
     <button type ="submit" class="btn btn-info" name="signin" >Login</a></button>
    <div class="checkbox">
      <label><input type="checkbox">Remember me</label>
    </div>
 
  </div>
  </div>
</div>
</form>
    
  <script type="text/javascript">
    $("#loginButton").click(function(){
      var name = $("#loginField").val()
      var pass = $("#passwordField").val()
      if (name == '' || pass == '') {
        alert("Fill all the inputs")
      }else{
        $.ajax({
          method: "POST",
          url: "http://<?php echo $_SERVER["SERVER_NAME"]; ?>/Project/ajax.php",
          data: {
            name: name,
            password: pass
          }
        }).done(function( msg ) {
          
        })
      }
    })
  </script>

    <?php
    require_once("section/footer.php");
  ?>

 

  

  