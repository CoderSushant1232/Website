<?php
    $connect = mysqli_connect("localhost", "root", "", "website");

    if (!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    echo "Connected";

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $review = mysqli_real_escape_string($connect, $_POST['review']);

    $sql = "INSERT INTO fooddelivary (Name, Email, Contact, Feedback) VALUES ('$name', '$email', '$phone', '$review')";

    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>
