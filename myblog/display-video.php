<?php
$id = $_GET['tableid'];
$table = $_GET['table'];
$conn = mysqli_connect("localhost","root","","blog_data");

include('includes/header.php');
include('includes/sidebar.php');
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.new-container {
margin-left: 260px;
width: 1200px;
height: 800px;
overflow: scroll;
background: white;
color: black;
}
.card-title {
background: blue;
color: white;
text-align: center;
padding: 3px 3px;
}
.card-footer {
background: blue;
color: white;
text-align: center;
padding: 10px 10px;
display: flex;
flex-direction: row;
gap: 20px;
justify-content: space-between;
margin-top: 850px;
}
.btn1, .btn2, .btn3 {
text-decoration: none;
color: white;
}
.align, .card-body {
margin-left: 15px;
}
.video1 {
width: 800px;
height: 600px;
margin-left: 150px;
margin-right: 200px;
}
.sidebar {
height: 790px;
}
.buttons {
background: blue;
display: flex;
flex-direction: row;
gap: 5px;
justify-content: center;
}
.btn1 {
margin-left: 30px;
}
</style>
</head>
<body>
<div class="new-container">
<div class="post-display">
<?php
if($table == "videodata")
{
$sql = "select * from ".$table." where videoid = '$id'";
$rest = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rest);
?>
   <div class="card">
      <div class="card-title"><?=$row['title']; ?></div>
        <div class="card-body">
           <span class="videos">
<video class="video1" controls >
<source src="./videos/<?=$row['videos']; ?>" type="video/mp4">
</video>
</span>
           <span class="align"><?=$row['description']; ?></span>
        </div>
        <div class="card-footer">
          <?php
             $originalDate = $row['uploaded'];
             $newDate = date("d-m-Y", strtotime($originalDate));
          ?>
          <div class="date">Posted on : <?=$newDate; ?></div> 
            
             <div class="social">
                <a href="#" class="btn1" type="button"><i class="fa fa-facebook"></i></a> &nbsp; <a href="#" class="btn2" type="button"><i class="fa fa-linkedin"></i></a>  &nbsp; <a href="#" class="btn3" type="button"><i class="fa fa-google"></i></a> <a href="#" class="btn4" type="button"><i class="fa fa-twitter"></i></a>
             </div>
     
         </div>
     
    </div>
<?php
}
?>
<div class="buttons"><button name="button1" class="button1">Edit</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button name="button2" class="button2">Delete</button></div>
</div>
</div>
</div>
</div>
<?php
include('includes/footer.php');
include('includes/script.php');
?>
</body>
<script>
$(document).ready(function() {
$('.button1').click(function() {
alert("edit button clicked1");
window.open("editor-video.php?table1=<?=$table; ?>&&id1=<?=$id; ?>", "_self");
});
$('.button2').click(function() {
alert("delete button clicked");
window.open("editor-video.php?table1=<?=$table; ?>&&id1=<?=$id; ?>", "_self");
});
});
</script>
</html>