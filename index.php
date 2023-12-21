<?php
$name=$_REQUEST['name'];
$mail=$_REQUEST['mail'];
$txtarea=$_REQUEST['txtarea'];


if(isset($_POST['btntest']))
{


    $host= "localhost";
    $user="root";
    $password="";
    $db="palestino";


    @$conn = mysqli_connect($host,$user,$password,$db);


    $insert="insert into palestino_contact values('$name','$mail','$txtarea')";

    mysqli_query($conn,$insert);


    if($conn){
        echo("<h1 style='color:green;' >Your Registration is Successful !! </h1>");
    }
    else{
        echo("<h1 style='color:red;'>Your Registration is Failed ! </h1>");
    }



}

?>