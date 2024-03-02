<?php
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET['id1'];
$table = $_GET['table1'];
echo $id;
 $conn = mysqli_connect("localhost","root","","blog_data");
if($table == "videodata")
{
$sql= "select * from ".$table." where videoid= '$id'";
}


$rest = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rest); 
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
input[type="text"] {
width: 750px;
background: white;
}
.edit-container {
margin-left: 250px;
margin-top: -20px;
width: 1210px;
height: 855px;
background: white;
}
.data {
margin-left: 20px;
margin-top: 30px;
}
.header {
margin-top: -20px;
}
.sidebar {
margin-top: 160px;
}
.buttons {
display: flex;
flex-direction: row;
justify-content: space-between;
}
.btn2 {
margin-right: 150px;
}
</style>
</head>
<body>
<div class="edit-container">
<?php
if($table == "videodata")
{
?>
<table class="data">
<tr><td><input type="text" name="title" class="title" value="<?=$row['title']; ?>"></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td>
<textarea class="content" name="content"><?=$row['details']; ?>"</textarea></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="text" name="author" class="author" value="<?=$row['author']; ?>"></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="file" name="picture" class="picture"></td></td>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="text" name="date" class="date" value="<?=$row['postedon']; ?>"></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><div class="buttons"><button class="btn1" name="btn1">Update</button><button class="btn2" name="btn2">Cancel</button></div></td></tr>
</table>

<?php
}
?>
<input type="hidden" name="id-type" class="id-type" value="<?=$id; ?>">
<input type="hidden" name="table-type" class="table-type" value="<?=$table; ?>">
</div>
<?php
include("includes/footer.php");
include("includes/script.php");
?>
</body>
<script>
$(document).ready(function() {
$('.content').summernote({
height: 400,
width: 750
});
$('.btn1').click(function() {

alert("Update button clicked");
var title = $('.title').val();
var date = $('.date').val();
var author = $('.author').val();
var content = $('.content').val()
var id = $('.id-type').val();
var table =  $('.table-type').val();
var picture = $('.picture').prop('files');
var file = picture[0];
var type = "update";
alert(title+","+date+","+author+","+file);
fd = new FormData;
fd.append("title", title);
fd.append("content", content);
fd.append("file", file);
fd.append("date", date);
fd.append("author", author);
fd.append("table", table);
fd.append("id", id);
fd.append("type",type);
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
});
});
</script>
</html>