<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global</title>
</head>
<body>
    <?php
    $x =5;
    $y = 30;
    function addtion(){
        $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
    }
    addtion();
    echo $z;
    ?>
</body>
</html>