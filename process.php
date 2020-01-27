<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Subscribed</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<?php
if (isset($_REQUEST['name'])) {
  if(isset($_REQUEST['gender'])){
    if($_REQUEST['gender'] == 'male'){
      getDisplayMsg("Mr.", $_REQUEST['name']);
    }else{
      getDisplayMsg("Mrs.", $_REQUEST['name']);
    }
  }else{
    getDisplayMsg("", $_REQUEST['name']);
  }
}
else {
    echo "<h2>Please subscribe</h2>";
}

function getDisplayMsg($greeting, $name){
  echo "<h2>Thank you ".$greeting." ".$name."</h2>";
}
?>

<div id="content">

<p>...<form action="process.php" method="get">
  <p>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
  </p>
  <p>Gender:<br>
    <label>
      <input type="radio" name="gender" value="male" id="gender_0">
      Male</label>
    <br>
    <label>
      <input type="radio" name="gender" value="female" id="gender_1">
      Female</label>
    <br>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Subscribe">
  </p>
</form>
</p>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>
