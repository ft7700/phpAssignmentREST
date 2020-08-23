<?php

$con= mysqli_connect('localhost','root','','registration');
$response = array();

if($con){
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['username'] = $row['username'];
            $response[$i]['email'] = $row['email'];
            $response[$i]['password'] = $row['password'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "Database connection failed.";
}
?>
