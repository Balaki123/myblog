<?php
include('includes/header.php');
include('includes/sidebar.php');
$conn = mysqli_connect("localhost","root","","blog_data");
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
input[type="text"] {
width: 650px;
background: white;
color: black;
}
.edit-container {
margin-left: 250px;
margin-top: 10px;
display: flex;
flex-direction: row;
gap: 10px;
background: url('./images/background-blue.jpg');
background-size: cover;
background-repeat: no-repeat; 
height: 755px;	 	

}
.button {
display: flex;
flex-direction: row;
justify-content: space-between;
}
.video-list {
width: 100%;
height: 730px;
display: flex:
flex-direction: column;
gap: 20px;
} 
.footer {
margin-top: 20px;
width: 1520px;
}
.video-title, .recent-videos {
text-align: center;
background:blue;
color: white;
height: 25px;
padding: 5px 5px;
}
.data {
margin-top: 20px;
margin-left: 5px;
margin-right: 5px;
}
.video-cards {
height: 400px;
width: 100%;
overflow: scroll;
background: url('./images/background-shade-blue.jpg');
background-size: cover;
background-repeat: no-repeat;
}
.card-videos {
display: flex;
flex-direction: row;
gap: 10px;
width: 100%;
height: 130px;
border: blue 3px solid;
border-radius: 10px;

}
.video-titles {
width: 100%;
height: 20px;
background: blue;
color: #fff;
text-align: center;
font-size: 14px;
font-weight: 700;
}
.video-content, .videos {
width: 100%;
height: 188px;
margin-top: -17px;
}
.video-details {
width: 150%;
height: 220px;
font-size: 15px;
}
.video-footer {
margin-top: 10px;
height: 20px;
background: blue;
color: white;
}
.video-desc {
height: 75px;
width: 100%;
}
.footer {
margin-top: 10px;
}
#anime-body
	{
		background: url(https://git.io/JUW4t);
		background-size: cover;
		overflow: hidden;
	}

#panda
	{
		position:relative;
		top:600px;
		background: url(https://git.io/JUW4L); 
		width:250px;
		height:320px;		
		animation:walking_animation 1s steps(12) infinite,move_forward 8s linear infinite;	
	}

@keyframes walking_animation
	{
		0%{background-position:0px;}
		100%{background-position:3000px;}
	}

@keyframes move_forward
	{
		0%{transform:translateX(-100px);}
		100%{transform:translateX(1366px);}
	}

#street
	{
		position:relative;
		top:600px;
		border-bottom:5px groove green;
	}
.video-other {
width: 100%;
height: 220px;
}
</style>
</head>
<body>
<div class="edit-container">

<div class="video-card">
<h4 class="video-title"> Upload Videos</h4>
<table class="data">
<form action="" post="">
<tr><td><input type="text" name="title" class="title"></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><textarea name="details" class="details" cols="60" rows="25"></textarea></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="file" class="picture" name="picture"></td></tr>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td><input type="text" name="uploaded" class="uploaded" ></td></tr>
</form>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td rowspan="12"><div class="button"><button class="upload" name="upload">Video Upload</button><button class="cancel" name="cancel">Cancel</button></div></td></tr>
</table>

</div>
<div class="video-list">
<h4 class="recent-videos"> Recent Videos </h4>
<div class="video-cards">
<?php 
$sql = "select * from videodata order by uploaded desc limit 5";
$result = mysqli_query($conn, $sql);
while($record = mysqli_fetch_assoc($result))
{
?>
<div class="card-videos">
<div class="videos">
<video class="video-content">
<source src="./videos/<?=$record['videos']; ?>" type="video/mp4">
</video>
</div>
<div class="video-details">
<div class="video-titles"><?=$record['title']; ?></div>
<div class="video-desc"><?=$record['description']; ?></div>
<?php
$date = date_create($record['uploaded']);
$current = date_format($date, 'd/m/y');
?>
<div class="video-footer">Uploaded on : <?=$current; ?></div>
</div>
</div>
<?php
}
?>
</div>
<div class="video-other">
<div id="anime-body">
	<div id="panda"></div>
	<div id="street"></div>

</div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
$('.details').summernote({
height: 400,
width: 650
});
$('.upload').click(function() {
alert("upload button clicked");
var title = $('.title').val();
var details = $('.details').val();
var picture = $('.picture').prop('files');
var videos = picture[0];
var videos_name = videos.name;
var uploaded = $('.uploaded').val();
alert(videos_name+","+title);
fd = new FormData;
fd.append("title", title);
fd.append("details", details);
fd.append("videos", videos);
fd.append("uploaded", uploaded);
$.ajax({
url: "video-upload.php",
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
<?php
include('includes/script.php');
include('includes/footer.php');
?>
</body>
</html>