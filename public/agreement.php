<!doctype html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <title>Agreement</title>
</head>

<body class=’bginfo’>
<?php include_once 'header.php';?>
<div class=’container-fluid col-md-10 offset-md-1’></div>
<div class=’row’></div>
<div class=’card mt-3 px-2 py-2’></div>
<h1>Stationary application</h1>
    <?php
    echo 'Welcome. You have selected ' . htmlspecialchars($_GET["decision"]) . ' for the
agreement';
    ?>

<?php include_once 'footer.php';?>
</body>
