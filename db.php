<?php

$conn = mysqli_connect("localhost", "id14340310_saintly", "w)~2l(@c{M4kN/<U");
if(!$conn){
    echo 'Cant connect to db';
}
mysqli_select_db($conn, 'id14340310_saintlydb');
if(!mysqli_select_db($conn, 'id14340310_saintlydb')){
    echo 'Unable to connect to your database';
}else{
//echo 'connection established';
}

?>
