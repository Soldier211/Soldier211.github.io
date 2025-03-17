<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h1>Form Submission</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        echo "fname=" . $fname . "&lname=" . $lname;
    }
    else{
        echo "No data received";
    }
    ?>
</body>
</html>