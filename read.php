<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title></title>

    <script>

        $(document).ready(function(){
            $("#dir").load("read.php");
        });

    </script>
</head>
<body>

<div id="dir">

<?php
   
   $hostname="localhost";
   $username="root";
   $pass="";
   $dbname="panel";

   $conn= mysqli_connect($hostname,$username,$pass,$dbname);

   $sql ="SELECT * from direction ORDER BY id DESC LIMIT 1";;
   $result=mysqli_query($conn,$sql);

   error_reporting(E_ALL ^ E_WARNING);

   if(mysqli_num_rows($result) >0){

       while($row =mysqli_fetch_assoc($result)){

           echo" <p style = 'text-align: center;font-size: 100px;margin-top:20%;color:red'>";
           if($row[rights] != "IS NULL"){
               echo $row[rights];
           }

           if(!empty($row[rights])){
               echo $row[lefts];
           }

           if($row[forward] != ""){
               echo $row[forward];
           }

           if($row[backward] != ""){
               echo $row[backward];
           }

           if($row[stop] !=""){
               echo $row[stop];
           }

           echo" </p>";

       }
   }
   else{
       echo "no result";
   }
    
   mysqli_close($conn);
?>


</div>
    
</body>
</html>

