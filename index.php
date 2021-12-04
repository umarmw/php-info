<?php

$welcome = "Welcome to my PHP website!";

?>
<html>
    <head>
        <title>PHP - <?php echo getenv('TITLE');</title>
</head>
<body>
    <?php echo $welcome; ?>
</body>
</html>