<?php
$words = array("World", "PHP", "Web Application");
?>
<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
    <?php
    foreach ($words as $word) {
        echo "<p>Hello, " . $word . "!</p>" . "\n";
    }
    ?>
 </body>
</html>
