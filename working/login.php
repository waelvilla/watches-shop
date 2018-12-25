<?php
include("db.php");
if(isset($_SESSION['valid'])) {
    header('Location: index.php');
}


if(isset($_POST['submit']) || isset($_POST['signup'])) {
    $user = mysqli_real_escape_string($db, $_POST['username']);
    $pass = mysqli_real_escape_string($db, $_POST['password']);
    $role=$_POST['role'];
 
    if($user == "" || $pass == "") {
        echo "Either username or password field is empty.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
    } else {
        
        $result = mysqli_query($db, "SELECT * FROM watches_users WHERE username='$user' AND password=md5('$pass') AND category='$role'")
        or die("Could not execute the selected query.");
        
        $row = mysqli_fetch_assoc($result);
        
        if(is_array($row) && !empty($row)) {
            if(isset($_POST['submit'])){
              $validuser = $row['username'];
              $_SESSION['valid'] = $validuser;
              $_SESSION['username'] = $row['username'];
              $_SESSION['id'] = $row['id'];
              $_SESSION['category']=$row['category'];              
              print_r($_SESSION);
            }
            elseif (isset($_POST['signup'])) {
              echo "You already have an account, log in instead!";
              echo "<br/>";
              echo "<a href='login.php'>Go back</a>"; 
            }
        } elseif(isset($_POST['signup'])) {
            
              $regiter=mysqli_query($db,"INSERT INTO watches_users (username,password,category) VALUES('$user',md5('$pass'),'$role')")
              or die("Could not execute the selected query.");
              if($regiter){
                echo "You have been registered Successfully";
                echo " <div class='main'> <a href='/watches-shop/index.php'>Go back</a> </div>";
              }
          }
          else{          
            echo "<div class='main'> Invalid username or password. </div>";
            echo "<br/>";
            echo " <div class='main'> <a href='login.php'>Go back</a> </div>";
          }
        
 
        if(isset($_SESSION['valid'])) {
			
            header('Location: ../index.php');   
            var_dump($_SESSION);			
        }

  }
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body class="login-body">

    <form class="form-signin" method="post">

      <img class="mb-4" src="../img/logo.png" alt="" width="150" height="150">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      <div class="form-group">
        <label for="sel1">Select Role:</label>
        <select class="form-control" id="sel1" name="role">
          <option value="user">user</option>
          <option value="admin">admin</option>
        </select>
      </div>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign in</button>
      <div>
        <br>
        <h5>Don't have an account?</h5>
      </div>
      <button class="btn btn-lg btn-secondary btn-block" name="signup" value="signup">Sign up</button>

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
<?php
}
?>
</body>
</html>