 $conn=mysqli_connect('localhost','root','','tour_db');
    if(mysqli_connect_error()){
        echo "connection is failed" .mysqli_connect_error();
    } else {
        echo "database successfully created";
    }
    if(isset($_post['send'])){
        $name=$_post['name'];
        $lastname=$_post[lname];
        $email=$_post['email'];
        $phone=$_post['phone'];
        $name=$_post['address'];
        $arrival=$_post['arriva'];
        $departure=$_pos<?php
  t['departure'];
        $text=$_post['message'];

    }















?>