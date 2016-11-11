<?php
include_once 'dbconfig.php';
if(isset($_POST['submit']))
{
    // variables for input data
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $home = $_POST['home'];
    $cell = $_POST['cell'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];
    // variables for input data

    // sql query for inserting data into database

    $sql_query = "INSERT INTO users(name,nickname,email,home,cell,message,gender) VALUES('$name','$nickname','$email','$home','$cell','$comment','$gender')";
    mysqli_query($con, $sql_query);

    // sql query for inserting data into database

}
?>

<!DOCTYPE html>
<html>
<body background="bg.png">

<head>
<title>NicolaiCaasi</title>
</head>
<body>
<center>
<style>
body{
font-family: Stellar;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>

<h1>HOME</h1>
<img src="BS2.jpeg" style="width:304px;height:228px;">

<p>I'm incomparabale. I'm not like anyone else. Because I'm me.<p>

<h2>ABOUT</h2>
<table style="width:100%">
  <tr>
    <th>Hobbies</th>
    <th>Interests</th>
  </tr>
  <tr>
    <td>Eating</td>
    <td>Music</td>
  </tr>
</table>
<br>
<p>Nicolai Louise B. Caasi, also known as "nics" she loves music and eating as well and aiming to be a web developer someday.<p>
<br>

<p id="Question1">What things do you do in your leisure time?</p>

<button type="button" onclick="document.getElementById('Question1').innerHTML = 'I compose songs and try to cover them as well.'">Click Me!</button>

<p id="Question2">What is your favorite kind of genre?</p>

<button type="button" onclick="document.getElementById('Question2').innerHTML = 'OPM, Acoustic, Electronic Music.'">Click Me!</button>

<p id="Question3">Explain why you love music so much.</p>

<button type="button" onclick="document.getElementById('Question3').innerHTML = 'Music keeps me going and takes me out of the dark hole called life.'">Click Me!</button>

<p id="Question4">What songs do you like?</p>

<button type="button" onclick="document.getElementById('Question4').innerHTML = 'Almost is Never Enough by Ariana Grande and Bed of Lies by Nicki Minaj'">Click Me!</button>

<p id="Question5">Who is favorite artist?</p>

<button type="button" onclick="document.getElementById('Question5').innerHTML = 'Nicki Minaj and Ariana Grande.'">Click Me!</button>

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $homeErr = $cellErr = $commentErr = $genderErr = "";
$name = $nickname = $email = $home = $cell = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$name)) {
      $nameErr = "Only letters and Numbers";
    }
  }
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("[a-zA-Z ]",$nickname)) {
      $nicknameErr = "Letters Only!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
   if (empty($_POST["home"])) {
    $homeErr = "Home Address is required";
  } else {
    $home = test_input($_POST["home"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$home)) {
      $homeErr = "Only letters and Numbers"; 
    }
  }
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
   if (empty($_POST["cell"])) {
    $cellErr = "";
  } else {
    $cell = test_input($_POST["cell"]);
    if (!preg_match("[0-9 ]",$cell)) {
      $cellErr = "Only Numbers are allowed!"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Register Now</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
 E-mail:  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Home Address:  <input type="text" name="home" value="<?php echo $home;?>">
  <span class="error">*<?php echo $homeErr;?></span>
  <br><br>
 Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <span class="error">*<?php echo $genderErr;?></span>
  <br><br>
 Cell-Phone Number:  <input type="text" name="cell" value="<?php echo $cell;?>">
  <span class="error">*<?php echo $cellErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <p><span class="error">* required field.</span></p>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo $cell;
echo "<br>";
?>

<br>
<p style ="font-size:200; font-family:Lucida Sans; color:black"> These are my favorite sites:</p>
<a href="http://www.facebook.com"/>Facebook Link</a>
<br>
<a href="http://www.lol.ph/">League of Legends PH Link</a>
<br>
<a href="http://www.twitter.com/">Twitter Link</a>
<br>
<a href="index.php" class=button>Messages</a>
</center>
</body>
</html>

