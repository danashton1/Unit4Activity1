<!doctype html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>

<body class=’bginfo’>
<?php include_once 'header.php';?>
<div class=’container-fluid col-md-10 offset-md-1’></div>
<div class=’row’></div>
<div class=’card mt-3 px-2 py-2’></div>
<h1>Stationary application</h1>
<form action="landingPage.php" method="post">
    <div>
        <label for="customerName">Name</label>
        <input type="text" id="customerName" name="custName" required>
        <br>
        <label for="postCode">Post Code</label>
        <input type="text" id="postCode" name="pCode" required>
        <br>
        <label for="email">email</label>
        <input type="text" id="email" name="eMail" value="">
        <br>
        <input type="submit" value="Submit">
    </div>
</form>
<?php include_once 'footer.php';?>
</body>
