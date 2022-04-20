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
             $sql_fetch = "SELECT course_title as title FROM `learning` GROUP BY title";
             $result = mysqli_query($conn, $sql_fetch);
             $select_course = array();
             while($row = $result->fetch_assoc()){
                $select_course[] = $row;
             }
            
       ?>
        <div class="wrap">
            <form action="selectcourse.php" method="GET">
                <label for="">Select Course: </label>
                <select name="select_course" id="">
                    <?php foreach($select_course as $course):?>
                        <option value="<?=$course['title']?>"><?=$course['title'];?></option>
                    <?php endforeach;?>
                </select>
                
                <input type="submit" name="submit" value="Select">
            </form>
            <?php 
                if(isset($_GET['submit'])){
                    $course = $_GET['select_course'];
                    $sql_course = "SELECT * FROM `learning` WHERE course_title LIKE '".$course."%' ";
                    $course_query = mysqli_query($conn, $sql_course);
                    $rsult_title = array();
                    while($cours_row = $course_query->fetch_assoc()){
                        $rsult_title[] = $cours_row;
                     }
                   
                }
                else{
                    $rsult_title = array();
                }
               
            ?>
        <table>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Title</th>
                        <th>Author</th>
                        <th>Content</th>
                        <th>Date Created</th>
                    </tr>
                    <?php if($rsult_title):?>
                        <?php foreach($rsult_title as $re_cours):?>
                            <tr>
                                <td><?=$re_cours['id'];?></td>
                                <td><?=$re_cours['course_title'];?></td>
                                <td><?=$re_cours['author'];?></td>
                                <td><?=$re_cours['content'];?></td>
                                <td><?=$re_cours['date_created'];?></td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                </table>
        </div>
       
   </div>
</body>
<script>
    
</script>
</html>

