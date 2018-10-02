<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
	$nameErr = $emailErr = $nimErr = "";
$name = $email = $nim = "";
 
if($nim == ""){
        $nimErr= "NIM tidak boleh kosong";
    }else{
        if(strlen($nim)<>10){
        $nimErr= "Harus 10 digit";
        }
        
        if(!is_numeric($nim)){
            $nimErr= "Harus berupa angka";
        }
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (strlen($name)<>25) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Form Validation</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="">
  Nim: <input type="text" name="nim" value="<?php echo $nim;?>">
  <span class="error">* <?php echo $nimErr;?></span>
  <br><br>  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
