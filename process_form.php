<?php

if(isset($_POST['submit'])){
    //you must include db file in this kind of operation that involves the database
    include_once('db.php');
    //check if the fields are empty, if they are not, we proceed
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
        // $name = $_POST['name'];
        //escaping mysql injection
        $email = mysqli_real_escape_string($conn, $email);
        // $name = mysqli_real_escape_string($conn, $name);
       
        //now inserting into database, simple sql syntax will make that clear
        $sql = "INSERT INTO email_list 
        SET email = '$email'";
        $result = mysqli_query($conn, $sql);
        //ascertaining whether it was successfull or not
        //and outputing the right message
        if(!$result){
            $error = 'ERROR: Unable to execute' . $mysqli ->connect_error;
        }else{
            $success = 'Congratulations! You have been successfully added to our mailing list.';
        }
        //if they are empty, no operations except outputing the error message
    }else{
        $error = 'Please provide a valid email address.';
        
    }
   
}
$test = 'You got this';



?>
