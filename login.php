<?php
include_once("database.php");
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $check=$_POST['check'];
    $sql = "SELECT * FROM register where Email='$Email' and Password = '$Password'";
    if($result = mysqli_query($con,$sql))
    {
        $rows = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        echo "login sucessfull...";
    }
    else{
        http_response_code(401);
        
    }
}
?>
