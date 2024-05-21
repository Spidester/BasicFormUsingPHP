<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body
        {
            background-color: burlywood;
        }
        img
        {
            border: 1px solid black;
            height: 100px;
            width: 100px;
        }
        .a
        {
            margin-top: 50px;
            margin-left: 300px;
            height: 500px;
            width: 500px;
            text-align: center;
        }
        .b
        {
            margin-top: -350px;
            float: right;
            height: 200px;
            width: 300px;
        }
        legend
        {
            font-size: larger;
            background-color: white;
            color: brown;
            text-align: center;
            border: 1px solid black;
        }
        .c
        {
            margin-left: 35px;
            height: 25px;
            width: 300px;
        }
        .d
        {
            margin-left: 30px;
            height: 25px;
            width: 300px;
        }
        .e
        {
            margin-left: 28px;
            height: 25px;
            width: 300px;
        }
        .f
        {
            margin-left: 10px;
            height: 25px;
            width: 300px;
        }
        .g
        {
            margin-left: 23px;
            height: 25px;
            width: 300px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fname=$mail=$number=$un=$roll="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $fname = test_input($_POST["fname"]);
        $mail = test_input($_POST["mail"]);
        $number = test_input($_POST["number"]);
        $un = test_input($_POST["un"]);
        $roll=test_input($_POST["roll"]);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <fieldset class="a">
        <legend><b>Registration Form</b></legend><br>
    <center><img src="logo.png" alt=""></center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <br><br>
        Name<input type="text" name="fname" class="c" placeholder="Enter Your Name"><br><br>
        E-mail<input type="email" name="mail" class="d"placeholder="Enter Your Mail-id"><br><br>
        Mobile<input type="number" name="number" class="e"placeholder="Enter Your Mobile Number"min="10"><br><br>
        University<input type="text" name="un" class="f" placeholder="Enter Your University Name"><br><br>
        Roll No.<input type="text" name="roll" class="g" placeholder="Enter Your Enrollment Number"><br><br>
        <input type="submit"><br><br>
    </form>
    </fieldset>
    <fieldset class="b">
        <legend><b>Form Details</b></legend>
    <?php
        echo "<br>";
        echo "Name: ".$fname;
        echo "<br><br>";
        echo "E-mail: ".$mail;
        echo "<br><br>";
        echo "Mobile: ".$number;
        echo "<br><br>";
        echo "University: ".$un;
        echo "<br><br>";
        echo "Roll No.: ".$roll;

    ?>
    </fieldset>
</body>
</html>