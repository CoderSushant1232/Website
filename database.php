<?php
    $connect=mysqli_connect("localhost", "root", "", "website");

    if(!$connect)
    {
        die("Connection Failed...!");
    }

    $sql="insert into fooddelivary (Name, Email, Contact, Feedback) values ('$name', '$email', '$conact', '$feedback')";

    mysqli_query($connect, $sql);

    mysqli_close($connect)
?>