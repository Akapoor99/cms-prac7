<?php include( "dbconnect.php" ); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - New Page 1</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include( "inc_header.php" );
include( "inc_nav.php" ); ?>
<section id="content">
    <h2>This is a new test page</h2>

    <h3>Ordered List Example</h3>
    <ul>
      <?php
        $services = array("Example 1", "Example 2", "Example 3", "Example 4", "Example 5");
        foreach ($services as $service) {
          echoList($service);
        }

        function echoLists($msg){
          echo "<li>".$msg."</li>";
        }
      ?>
    </ul>

</section>
<?php include( "inc_footer.php" );
#test commit
?>
</body>
</html>
