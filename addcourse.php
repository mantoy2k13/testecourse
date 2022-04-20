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
       session_start();
     
             $servername  = 'localhost';
             $username    = 'root';
             $password    =  'mysql';
             $dbname      = 'elearning';
             
             $date = date('Y-m-d h:i:s');
            $id = ($_GET['id']) ? $_GET['id']: '' ;
            
       ?>
        <div class="wrap">
            <form action="submitcourse.php" method="POST">
                <label for="course">E learning Course</label>
                <input type="text" id="elcourse" name="elcourse" placeholder="Learning Course">

                <label for="author">Author</label>
                <input type="text" id="author" name="author" placeholder="Author">
                <textarea id="content" name="content">Content</textarea>
            
                <input type="hidden" name="currentdate" value="<?=$date;?>">
                <input type="submit" name="submit" value="Submit Course">
            </form>
            
        </div>
     
   </div>
</body>
<script>
   
</script>
</html>

