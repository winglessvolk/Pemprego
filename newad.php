
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values and then populates them with form values

$name = $job =  $description = $contact = "";


?>

<h2>Introduza os dados do anuncio</h2>

<form action="newad.php" method="post">
Nome da Empresa: <input type="text" name="name"><br>
Posição Disponivel: <input type="text" name="job"><br>
Contactos: <input type="text" name="contacts"><br>
Descrição: <input name="description" rows="5" cols="40"><br>

<input type="submit">
</form>
<!-- $_SERVER is a global variable from php and htmlspecialcharacters prevents xss exploit
$_GET is another variable accessible by all that stores form data
$_POST is another variable that's slightly more private than $_GET
 -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php
echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $_POST["job"];
echo "<br>";
echo $_POST["contacts"];
echo "<br>";
echo $_POST["description"];
echo "<h3> Isto dá merda porque a variavel está vazia antes do submit e estamos a tentar apresenta-la a mesma</h3>";
?>

<?php

    if (empty($_POST["name"])) {
      echo $empty = "<h3>No Data</h3>"; //declares var $empty and displays it
    } else {
        $name = $_POST["name"];
    }
echo "very cool, this works ^ Time to expand it<br>";

if (empty($_POST["job"])) {
    echo $empty = "<h3>No Data</h3>"; //declares var $empty and displays it
  } else {
      $job = $_POST["job"];
  }
  if (empty($_POST["contacts"])) {
    echo $empty = "<h3>No Data</h3>"; //declares var $empty and displays it
  } else {
      $contacts = $_POST["contacts"];
  }
  if (empty($_POST["description"])) {
    echo $empty = "<h3>No Data</h3>"; //declares var $empty and displays it
  } else {
      $description = $_POST["description"];
  } 
  //problems with this approach returns "no data" if 1 var is empty 
  //defaults to $empty when it should default to $name $contact etc.. - fix by reversing the if else loop
  // improvements : this should be done with a constructor instead by fetching the values in $_POST
  // handing them to local variables and then just replacing variables as needed inside the constructor
  // one last note, this doesn't send the data to mysql. That's only approached if I can get this to work.
?>

&copy; 2021-<?php echo date("Y");?>
</body>
</html>