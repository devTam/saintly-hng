<?php
//the empyty '' after root is for your personal db password
//if your db name isnt root, change this code accordingly
$conn = mysqli_connect("localhost", "root", "");
if(!$conn){
    echo 'Cant connect to db';
}
mysqli_select_db($conn, 'subscription_list');
if(!mysqli_select_db($conn, 'subscription_list')){
    echo 'Unable to connect to your database';
}else{
//echo 'connection established';
}

?>