
<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
	
}
if(isset($_POST['btn-update'])) 
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

 // sql query for update data into database 
 $sql_query = "UPDATE users SET name='$name',nickname='$nickname',email='$email',home='$email',cell='$cell',message='$comment',gender='$gender' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database 
 
 // sql query execution function  
 if(mysqli_query($con,$sql_query))  
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT DATA</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>  

<div id="header">
 <div id="content">
    <label>EDIT DATA</label>  
    </div>
</div>


<div id="body">  
 <div id="content">  
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="home" placeholder="Home Address" value="<?php echo $fetched_row['home']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cell" placeholder="Cellphone Number" value="<?php echo $fetched_row['cell']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comment" placeholder="Comment" value="<?php echo $fetched_row['message']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" value="<?php echo $fetched_row['gender']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
