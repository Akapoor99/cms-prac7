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
    <ol>
      <?php
        $services = array("abcd", "efgh", "ijkl", "mnop", "qrst", "uvwx", "yz");
        foreach ($services as $service) {
          echoList($service);
        }

        function echoList($msg){
          echo "<li>".$msg."</li>";
        }
      ?>
    </ol>

</section>
<?php include( "inc_footer.php" );
#test commit
?>
</body>
</html>
