<?php
include('includes/header.php');
include('includes/sidebar.php');
$conn = mysqli_connect("localhost","root","","blog_data");
?>
<html>
<head>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container2">
<div class="cards">
<div class="card1">
<div class="title">Users</div>
<div class="card-body"> 
<div class="numb1">
<?php
$sql = "select * from users";
$res = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($res);
echo $rows;
?>
</div>
<span class="icons"><i class="fa fa-users"></i></span>
</div>
<div class="card-footer"></div>
</div>
<div class="card2">
<div class="title">Posts</div>
<div class="card-body">
<div class="numb2">
<?php
$sql = "select * from posts";
$res = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($res);
echo $rows;
?>
</div>
<span class="icons"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>

</div>
<div class="card-footer"></div>
</div>
<div class="card3">
<div class="title">Featured</div>
<div class="card-body"> 
<div class="numb3">
<?php
$sql = "select * from featured";
$res = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($res);
echo $rows;
?>
</div>
<span class="icons"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>

</div>
<div class="card-footer"></div>
</div>
<div class="card4"><div class="title">Videos</div>
<div class="card-body"> 
<div class="numb4">
<?php
$sql = "select * from videodata";
$res = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($res);
echo $rows;
?>
</div>
<span class="icons"><i class="fa fa-video-camera"></i></span>
</div>
<div class="card-footer"></div>
</div>
</div>
<div class="mains">
<div class="posts">
<div class="type">Posts </div>
<?php
$sql = "select distinct title, details, author, postedon, image from posts";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($res))
{
?>
<div class="card-posts">
<div class="image1"><img class="img1" src="./images/<?=$row['image']; ?>" ></img></div>
<div class="card-content">
<div class="post-title"><?=$row['title']; ?></div>
<div class="post-desc"><?=$row['details']; ?></div> 
<?php
$date = date_create($row['postedon']);
$original = date_format($date, "d/m/y");
?>
<div class="post-footer">Author: <?=$row['author']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Posted on: <?=$original; ?></div>
</div>
</div>
<?php
}
?>
</div>
<div class="featured">
<div class="featured-posts">
<div class="type">Featured Posts </div>
<?php
$sql = "select * from featured";
$res = mysqli_query($conn, $sql);
while($rows = mysqli_fetch_assoc($res))
{
?>
<div class="featured-cards">
<div class="image2"><img class="img2" src="./images/<?=$rows['picture']; ?>" ></img></div>
<div class="featured-content">
<div class="featured-title"><?=$rows['title']; ?></div>
<div class="featured-desc"><?=$rows['details']; ?></div>
<?php
$date = date_create($rows['uploadedon']);
$original = date_format($date, "d/m/y");
?>
<div class="featured-footer">Author: <?=$rows['author']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Uploaded on: <?=$original; ?></div>
</div>
</div>
<?php
}
?>

</div>
</div>
</div>
</div>
<?php
include('includes/script.php');
include('includes/footer.php');
?>
</div>
<script>
$(document).ready(function() {
var txt1= $('.post-desc').text();
if(txt1.length > 155)
    $('.post-desc').text(txt1.substring(0,150) + '.....');

var txt2= $('.featured-desc').text();
if(txt2.length > 155)
    $('.featured-desc').text(txt2.substring(0,150) + '.....');


});
</script>
</body>
</html>