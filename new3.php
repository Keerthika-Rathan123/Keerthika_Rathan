<!DOCTYPE html>
<html lang="en" dir='ltr'>
<head>
    <meta charset="utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style >
    .button-hover{
  position: relative;
  min-width:230px;
  margin:1em;
  padding: 0.3em;
  background: linear-gradient(to right,#56ccf2,#2f80ed)
  border:0;
  cursor:pointer;
  border-radius: 20px;
}
.button-hover::before,
.button-hover::after{
  content:'';
  position: absolute;
  left: 0;
  right:0;
  top:0;
  bottom: 0;
  background: linear-gradient(to right,#56ccf2,#2f80ed);
  border-radius: 20px;
  transition: all .5s ease-in-out;
}
.button-hover:hover::before{
  filter:blur(5px);
}
.button-hover:hover::after{
  filter:blur(15px);
}
.button-hover:hover{
  animation: hue 3s linear infinite;
}
@keyframes hue{
  0%{
    filter: hue-rotate(0deg);
  }
  100%{
    filter: hue-rotate(100deg);
  }
}
.button-hover span{
  position: relative;
  z-index: 3;
  display: block;
  padding: 1.0em;
  font-family: 'italic',sans-serif;
  font-size: 1.0em;
  font-weight: bold;
  color:#fff;
  text-transform: uppercase;
  background-color: #2c2e36;
  border-radius: 10em;
}


</style>

</style>

<body style="color: AntiqueWhite; font-family: sans-serif;font-weight: bold;font-size: 20px;text-align: center;" bgcolor="Black">
     <div class="main">
        <div class="register">
            <form action="" method="POST">


<?php
       

    if(isset($_POST["submit"])){
        $Name=$_POST["Name"];
        $Roll_Number=$_POST["Roll_Number"];
        $Department=$_POST["Department"];
        $Section=$_POST["Section"];
        $Batch=$_POST["Batch"];
        $email=$_POST["email"];
        $paper=$_POST['paper'];
        $college=$_POST["college"];
        $Fromm=$_POST["Fromm"];
        $Too=$_POST["Too"];
        $prize=$_POST["prize"];
        $shiv=$_FILES["certificate"]["name"];
        $an=$_FILES["certificate"]["tmp_name"];
        

        $host= "localhost";
        $dbusername= "root";
        $dbpassword= "";
        $dbname= "projectdetails";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
           
            $insert= "INSERT INTO workshopdetails(Name, Roll_Number, Department, Section, Batch, email, paper, college, Fromm, Too, prize, certificatename) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt=$conn->prepare($insert);
            $stmt->bind_param("ssssssssssss", $Name, $Roll_Number, $Department, $Section, $Batch, $email, $paper, $college, $Fromm, $Too, $prize, $shiv);
            $stmt->execute();
            echo "Details are uploaded sucessfully ";

            move_uploaded_file($an, "certified/".$Fromm.$Too.$shiv);
       

}
       
    
        $stmt->close();
        $conn->close();

    }
 
?>
</form>
        <a href="firstp.html">
            <button style="font-weight: bold;margin:25px;color:#fff;"type="submit" name="submit" value="submit" class="button-hover">
                <span>OK</span>
            </button></a>
</div>
</div>
</body>
</html>

