<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con)
    {
        die("connection to this database failed due to " . mysqli_connect_error());  
    }
    // echo "Success Connecting to the db";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $others = $_POST['desc'];



    $sql = "INSERT INTO `londontrip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
            VALUES ('$name', '$age', '$gender', '$email', '$phone','$others', current_timestamp());";

    // echo $sql;

    if($con->query($sql)== true)
    {
        // echo "Successfully submitted";
        echo "thanks for submitting yours details, we are happy to see you joining the party";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();

?>

