<?php    
        if(isset($_POST["submit"])){
            $right=$_POST["right"];
            $left=$_POST["left"];
            $forward=$_POST["forward"];

            
            $hostname="localhost";
            $userName="root";
            $passward="";
            $DB_name="panel";

           $conn = new mysqli($hostname,$userName,$passward,$DB_name);
           
            if($conn->connect_error){
                die("connection filed ".$conn->connect_error);
            }
            $id=0;
            $sql="INSERT INTO direction (id,forward,lefts,rights) VALUES ('$id','$forward','$left','$right')";

            if(mysqli_query($conn,$sql)){
                echo " your data has been saved!!";
                $id=$id+1;
            }
            else{
                echo " ops didn't save your data!!";
            }
            $conn->close();
        }
        else{
            echo " submit not";
        }
    ?>