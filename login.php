<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\auxiliary.css">

</head>
<body>
<div class="container">
<!-- início header -->

<header>

        <!-- navigation -->
        <div>

  			    <ul class="ul">
                    <li class="dropdown">
                    <a href="login.php"><img src="images/male.png" width="50px" height="50px" alt="Usuário" class="dropbtn"/></a>
                            <div class="dropdown-content">
                                <a href="logout.php">Sair</a>
                                <a href="userarea.php">Conta</a>
                                <a href="forum.php">Forum </a>
                            </div>
                    </li>
    			    <li><a href="#">Notícias</a></li>
				    <li><a href="ads.php">Ofertas</a></li>
				    <li><a href="index.php">Home</a></li>
                <img src="images\logo.png" alt="logotipo" class="avatar" height="75" width="75">
  			    </ul>
                  <br><br>


        </div>
        <!-- Navigation end -->

</header>

<!-- fim header -->
        <h2>Login</h2>
        <p>Introduza os seus dados</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nome de Utilizador</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Palavra chave</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="button-green" value="Login">
            </div>
            <p><a href="register.php">Nova conta?</a></p>
        </form>
    </div>
    <!-- início div content formulário-->

    	<div class="content">

    		<h4>Segue-nos</h4>

    			<ul>
    				<li><a href="https://www.facebook.com/" target="_blank"></a><b>Facebook</b></li>
    				<li><a href="https://www.instagram.com/" target="_blank"></a><b>Instagram</b></li>
    				<li><a href="https://www.twitter.com/" target="_blank"></a><b>Twitter</b></li>
    				<li><a href="https://www.youtube.com/" target="_blank"></a><b>Youtube</b></li>
    			</ul>

    		<center>
    		<form>
    			<h4>Contacta-nos</h4>
    				<p><label>Nome</label>&nbsp;<input type="text"></p>
    		  		<p><label>Sobrenome</label>&nbsp;<input type="text"></p>
    		  		<p><label>E-mail</label>&nbsp;<input type="email" name="fn"</p>
    		  		<p><label>Assunto&nbsp;&nbsp;</label><textarea name="add" rows="3" wrap="soft"></textarea></p>
    		  		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="submit">&nbsp;&nbsp;</label><label><input type="reset" value="Apagar"></label></p>
    		</form>
    	</center>

    	</div>

    <!--fim div content formulário-->
    &copy; 2021-<?php echo date("Y");?>
</body>
</html>
