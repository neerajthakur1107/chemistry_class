 
 <?php
 header('Location:login.html');
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","25");
    include_once("database.php");
     $postdata = file_get_contents("php://input");
    if(isset($postdata) && !empty($postdata)) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $cPassword = $_POST['cPassword'];
        $comp=$_POST['comp'];
        
        if($Password==$cPassword){
            $sql = "INSERT INTO register(Name,Email,comp,Password) VALUES ('$Name','$Email','$comp','$Password')";

            if ($con->query($sql) === TRUE) {
                $authdata = [
                    'Name' => $Name,
                    'Email' => $Email,
                    'id' => mysqli_insert_id($con)
                    
                    ];
            } else {
                
                echo('yaha error hai');
            }
        }
    }
        else{
            echo('waha error hai');
        }
?>