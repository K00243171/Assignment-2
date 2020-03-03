<html>
<head>
<title>Confirm Submition</title>
</head>
<h1> Confirm details </h1>
    <p><li>Thank you for your submission</li>
    <li>Your Application was successfully received</li>
    <li>Please see a summary of your details below </li></p>
<?php
    $UserName = $_POST["Enter User Name"];
    $FirstName = $_POST["Enter First Name"];
    $LastName = $_POST["Enter First Name"];
    $EmailAd = $_POST["Enter Email"];
    $Twitter = $_POST["Enter Twitter UserName"];
    $Gender = $_POST["Gender"];
    $Age = $_POST["Age"];
    $Language = $_POST["Language"];
    $Country = $_POST["Country"];
    $Food = $_POST["Food"];
    $Bio = $_POST["Bio"];
    $CardNo = $_POST["Please Enter 16 digit card number"];
    $CardExp = $_POST["Enter card expiration date"];
    $line1 = $_POST["Address Line 1"];
    $line2 = $_POST["Address Line 2"];
    $postcode = $_POST["Postcode"];
    $countryAd = $_POST["Country"];
    $1line = $_POST["Line 1"];
    $2line = $_POST["Line 2"];
    $postcodeDel = $_POST["Postcode"];
    $countryDel = $_POST["Country"];
    ?>
    <p>Thank you! Here are your submitted details</p>
    <fieldset>
    <legend>Your Details:</legend>
    <ol>
    <li>User Name: <?php echo "$UserName";?></li>
    <li>First Name: <?php echo "$FirstName";?></li>
    <li>Last Name: <?php echo "$LastName";?></li>
    <li>Email: <?php echo "$EmailAd";?></li>
    <li>Twitter: <?php echo "$Twitter";?></li>
    <li>Gender: <?php echo "$Gender";?></li>
    <li>Age: <?php echo "$Age";?></li>
    <li>Language: <?php echo "$Language";?></li>
    <li>Country: <?php echo "$Country";?></li>
    <li>Food: <?php echo "$Food";?></li>
    <li>Bio: <?php echo "$Bio";?></li>
    <li>CardNo <?php echo "$CardNo";?></li>
    <li>CardExp <?php echo "$CardExp";?></li></ol>
    <li>Postal Address</li>
    <ol><li>Line 1 <?php echo "$line1";?></li>
    <li>Line 2 <?php echo "$line2";?></li>
    <li>Postcode <?php echo "$postcode";?></li>
    <li>Country <?php echo "$country";?></li></ol>
    <li>Delivery Address</li>
    <ol><li>Line 1 <?php echo "$1line";?></li>
    <li>Line 2 <?php echo "$2line";?></li>
    <li>Postcode <?php echo "$postcodeDel";?></li>
    <li>Country <?php echo "$countryDel";?></li></ol>
    </fieldset>
</html>