<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E learning Webiste Courses</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
   <div class="row">
       <div class="container">
           <ul id="navmenu">
               <li><a href="index.php">List Courses </a></li>
               <li><a href="selectcourse.php">Select Courses </a></li>
               <li><a href="admin.php">Admin Page </a></li>
           </ul>
       </div>
    
   </div>
   <div class="clear"></div>
   <div class="row">
       <?php
             $servername  = 'localhost';
             $username    = 'root';
             $password    =  'mysql';
             $dbname      = 'elearning';
             
             $conn = new mysqli($servername, $username, $password ,$dbname);
             // Check connection
             if ($conn -> connect_errno) {
                     echo "Failed to connect to MySQL: " . $conn -> connect_error;
                     exit();
             }
             $sql_fetch = "SELECT * FROM learning" ;
             $result = mysqli_query($conn, $sql_fetch);
             
            
       ?>
        <div class="wrap">
        <table>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Title</th>
                        <th>Author</th>
                        <th>Content</th>
                        <th>Date Created</th>
                    </tr>
                    <?php while ($row = $result->fetch_assoc()):?>
                        <tr>
                            <td><?=$row['id'];?></td>
                            <td><?=$row['course_title'];?></td>
                            <td><?=$row['author'];?></td>
                            <td><?=$row['content'];?></td>
                            <td><?=$row['date_created'];?></td>
                        </tr>
                    <?php endwhile;?>
                </table>
        </div>
       
   </div>
</body>
<script>
    
</script>
</html>

