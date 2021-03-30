<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <title>Registro</title>

    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\auxiliary.css">
</head>
<body>
<!-- início header -->

<div class="container">
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

        <h2>Nova conta</h2>
        <p>Preencha os dados para criar uma conta</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nome de Utilizador</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Palavra Chave</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirmar Palavra Chave</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="button-green" value="Submit">
                <input type="reset" class="button-yellow" value="Reset">
            </div>
            <p><a href="login.php">Já tem uma conta?</a></p>
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
