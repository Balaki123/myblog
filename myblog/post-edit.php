<?php
 include('includes/header.php');
include('includes/sidebar.php');
$conn = mysqli_connect("localhost","root","","blog_data");
?>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/adapters/jquery.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
.edit-post-container {
display: grid;
grid-auto-flow: column;
grid-gap: 20px;
}
.edit-post {
width: 75%;
margin-left: 240px;
background: url('images/blur-bubbles.jpg');
background-size: cover;
background-width: 1000px;
height: 948px;
margin-top: -30px;
}
.other-block {
width: 45%;
margin-left: 20px;
display: flex;
flex-direction: column;
height: 948px;
margin-top: -30px;
}
.recent-post {
margin-top: 10px
}
.post-card {
display: grid;
grid-template-rows: 130px;
grid-template-columns: auto;
grid-template-area:
'post-card1'
'post-card2'
'post-card3'
'post-card4'
'post-card5';
grid-gap: 60px;
height: 440px;
}
.post-card1 {
width: 120%;
height: 130px;
}
.card-title1 {
background: blue;
width: 100%;
color: white;
font-weight: bold;
}
.card-footer1 {
background: blue;
color: white;
font-weight: bold;
display: grid;
grid-auto-flow: column;
grid-gap: 10px;
}
.card-description1  {
background: url('images/blur-bubbles.jpg');
background-size: cover;
color: black;
font-weight: bold;
height: 120px;
display: grid;
grid-auto-flow: column;
}
.list {
color: white;
background: brown;
font-weight: bold;
text-align: center;
width: 210%;
}
.content-container {
display: grid;
grid-template-columns: 140px 200px;
grid-gap: 10px;

}
.image {
width: 100px;
height: 120px;
}
.content {
width: 270px;
display: block;
  overflow: hidden;
  max-height: 5.6em;
  line-height: 1.2em;
text-overflow: ellipsis;
}
.img {
width: 140px;
height: 120px;
border-style: solid;
border-radius: 10px;
border-color: blue;
}
.footer  {
margin-top: 4px;
}
.sidebar {
height: 948px;
}
.frm {
margin-left: 35px;
margin-top: 10px;
}
input[type="text"] {
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
background: white;
}
.btn, .btn1 {
width: 80px;
background: blue;
color: white;
font-weight: bold;
}
.tools {
display: flex;
flex-direction: row;
gap: 310px;
width: 100%;
}
.pic {
background: url('images/hillside.jpg');
background-size: cover;
}
</style>
</head>
<html>
<div class="edit-post-container">
<div class="edit-post">
<form action="" post="" class="frm">
<table class="data">
<tr><td><input type="text" name="title" class="title" width="400px"></td></tr>
<tr><td><br></td></tr>
<tr><td> <textarea name="desc" class="desc" cols="70" rows="80"></textarea></td></tr>
<tr><td><br></td></tr>
<tr><td><input type="file" name="picture" class="picture"></td></tr>
<tr><td><br></td></tr>
<tr><td><input type="text" name="author" class="author"></td></tr>
<tr><td><br></td></tr>
<tr><td><div class="tools"><button name="btn" class="btn" >Update</button><button class="btn1" name="btn1">Cancel</button></div></td></tr>
<tr><td><br></td></tr>
<tr><td><div class="pic"></div></td></tr>
</table>
</form>
</div>
<div class="other-block">
<div class="list"> Recent Post </div>

<div class="recent-post">
<div class="post-card">
<?php

$sql = "select * from posts order by postid desc LIMIT 5 ";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($res))
{
?>
<div class="post-card1">
<div class="card-title1"><?=$row['title'] ?></div>
<div class="card-description1">
<div class="content-container">
<div class="image"><img class="img" src="./images/<?=$row['image']; ?>"></div>
<div class="content"><?=$row['details'] ?></div>
</div>
</div>
<div class="card-footer1">
<div class="author">Author : <?=$row['author']; ?></div>
<?php
$date1 = date_create($row['postedon']);
$original1 = date_format($date1,'d/m/y');
?>
<div class="date">Posted on : <?=$original1; ?></div>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>
</div>
</div>
<?php
include('includes/script.php');
include('includes/footer.php');
?>
<script>
$(document).ready(function() {
var editor = $( '.desc' ).ckeditor().editor;
$('.btn').click(function() {
alert("hello world");
$('.upload').click(function() {

var title = $('.title').val();
var details = $('.desc').val();
var author = $('.author').val();
var picture = $('.picture').prop('files');
var file = picture[0];
var picture_name = file.name;
var postdate = $('.postdate').val();

alert(picture_name+","+author+type);
fd = new FormData;
var table=$('.table').val();
var type=$('.type').val();
fd.append("title", title);
fd.append("details", details);
fd.append("file", file);
fd.append("postdate", postdate);
fd.append("author", author);
fd.append("table", table);
fd.append("type", type);
$.ajax({
url: "post-upload.php",
method: "POST",
data: fd,
cache: false,
processData: false,
contentType: false,
success: function(response) {
alert(response);

}
});
alert("Edit button cleared");
});
});
$('.btn1').click(function() {
alert("I like you");
});
});
</script>