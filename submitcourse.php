<?php
        $servername  = 'localhost';
        $username    = 'root';
        $password    =  'mysql';
        $dbname      = 'elearning';        
        $conn = new mysqli($servername, $username, $password ,$dbname);

      if(isset($_POST['submit'])){
         $course = $_POST['elcourse'];
         $author = $_POST['author'];
         $content = $_POST['content'];
         $currentdate = $_POST['currentdate'];

         $sql_insert = "INSERT INTO learning (
         `course_title`,`author`,`content`, `date_created`
         ) VALUES (
             
             '".$course."',
             '".$author."',
             '".$content."',
             '".$currentdate."'
         ) ";
         if ($conn->query($sql_insert) === TRUE) {
            echo "New record created successfully";
            header("Location:admin.php");
          } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
          }
          $conn->close();
      }
   



?>