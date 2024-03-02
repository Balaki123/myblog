<?php
include('includes/header.php');
include('includes/sidebar.php');
$conn = mysqli_connect("localhost", "root","","blog_data");
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/adapters/jquery.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
.button {
display: flex;
flex-direction: row;
justify-content: space-between;
}
input[type="text"] {
width: 600px;
background: transparent;
}
.featured-container {
margin-left: 240px;
background: white;
width: 1240px;
height: 760px;
color: black;
display: flex;

flex-direction: row;
gap: 10px;
}
.other-block {
background: transparent;
height: 760px;
width: 100%;
display: flex;
flex-direction: column;
gap: 20px;
}
.featured-upload {
width: 100%;
height: 760px;
background: url('images/blue-backgground.jpg');
background-size: cover;
background-repeat: no-repeat;

}
.data {
margin-left: 15px;
margin-top: 20px;
}
.featured-title {
text-align: center;
font-weight: 700;
padding: 5px 5px;
}
.recent-featured {
height: 50%;
}
.featured-cards {
display: flex;
flex-direction: column;
gap: 20px;
width: 100%;
height: 400px;
overflow: scroll;
background: url('./images/background-shade-blue.jpg');
background-size: cover;
background-repeat: no-repeat;
}
.data-cards {
display: flex;
flex-direction: row;
gap: 5px;
height: 170px;
width: 100%;
}
.featured-title {
background: blue;
color: #fff;
padding: 10px 10px;
height: 30px;
}
.img1, .image {
width: 200px;
height: 170px;
}
.card-details {
display: flex;
flex-direction: column;
gap: 20px;
width: 400px;
}
.card-content {
width: 120%;
height: 240px;
}
.card-title, .card-footer {
background: blue;
color: white;
width: 120%;
height:30px;
padding: 10px 10px;
}
.truncate {
               overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            line-height: 16px; 
            max-height: 68px;     
              
            /* The number of lines to be displayed */
            -webkit-line-clamp: 1; 
            -webkit-box-orient: vertical;
}
.anime {
width: 100%;
height: 320px;
border: blue 5px solid;
background: #ADD8E6;

}
</style>
</head>
<body>
<div class="featured-container">
<div class="featured-upload">
<div class="featured-title">Upload Featured Posts</div>
<table class="data">
<form action="" post="">
<tr><td><input type="text" name="title" class="title" placeholder="Enter title here...."></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><textarea name="details" class="details" cols="120" rows="70"></textarea></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="text" name="author" class="author" placeholder="Enter Author name..."></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="file" class="picture" name="picture"></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="text" name="uploadedon" class="uploadedon" placeholder="Enter date..."></td></tr>
</form>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td rowspan="12"><div class="button"><button class="upload" name="upload">Upload</button><button class="cancel" name="cancel">Cancel</button></div></td></tr>
</table>
</div>
<div class="other-block">
<div class="featured-title">Recent Featured Posts </div>
<div class="featured-cards">

<?php
$stmt = "select * from featured order by uploadedon desc limit 5";
$rest = mysqli_query($conn, $stmt);
$i = 1;
While ($record = mysqli_fetch_assoc($rest))
{
?>
<div class="data-cards">
<div class="img1"><img class="image" src=".\images\<?=$record['picture']; ?> "></img></div>
<div class="card-details">
<div class="card-title"> <?=$record['title']; ?></div>
<div class="card-content truncate"><?=$record['details']; ?></div>

<?php
$date = $record['uploadedon'];
$current = date_create($date);
$formatted = date_format($current, 'd/m/y'); 
?>
<div class="card-footer">Author:<?=$record['author']; ?> &nbsp; &nbsp; &nbsp; Uploaded on:<?=$formatted; ?>&nbsp; &nbsp; &nbsp; &nbsp;<i class="fab fa-facebook"></i>&nbsp; <i class="fab fa-twitter"></i> &nbsp; <i class="fab fa-linkedin"></i>&nbsp; <i class="fab fa-reddit"></i>&nbsp; <i class="fab fa-buffer"></i>&nbsp; <i class="fab fa-instagram"></i></div>
</div>

</div>
<?php
$i++;
}
?>
</div>
<div class="other-recent">
<iframe src="https://giphy.com/embed/TlK63EDww4g4tXUd0gE" frameBorder="0" class="anime" allowFullScreen></iframe>
</div>
</div>
<input type="hidden" name="table" class="table" value="featured">
<input type="hidden" name="type" class="type" value="insert">
</div>
<?php
include('includes/footer.php');
include('includes/script.php');
?>
<script>
$(document).ready(function() {
var editor = $( '.details' ).ckeditor().editor;
//editor.resize('100%', '350');
$('.cancel').click(function() {
alert("Cancel button cleared");
});
$('.upload').click(function() {

var title = $('.title').val();
var details = $('.details').val();
var author = $('.author').val();
var picture = $('.picture').prop('files');
var file = picture[0];
var picture_name = file.name;
var uploadedon = $('.uploadedon').val();
alert(picture_name+","+author);
fd = new FormData;
var table=$('.table').val();
var type = $('.type').val();
fd.append("title", title);
fd.append("details", details);
fd.append("file", file);
fd.append("uploadedon", uploadedon);
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
alert("Upload button cleared");
});

});
</script>
</body>
</html>