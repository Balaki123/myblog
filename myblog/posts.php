<?php
 include('includes/header.php');
include('includes/sidebar.php');
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
width: 700px;
background: #fff;
}
.post-container {
margin-left: 240px;
background: url('images/blur-bubbles.jpg');
background-size: cover;
background-repeat: no-repeat;
width: 1100px;
height: 748px;
margin-top: 10px;
display: flex;
flex-direction: row;
gap: 5px;

}
.other-block {
display: flex:
flex-direction: column;
gap: 30px;
width: 35%;
}
.post-upload {
display: flex:
flex-direction: column;
gap: 30px;
width: 65%;
}

.part1 {
background: transparent;
color: white;
height: 60%;
overflow: auto;
}
.part2 {
background: green;
color: white;
height: 33%;
}
.type-title {
background: blue;
color: white;
text-align: center;
font-weight: 700;
margin-top: 10px;
}
.data {
margin-left: 15px;
margin-top: 30px;
margin-right: 15px;
}
.post-cards {
display: flex;
flex-direction: row;
gap: 5px;
width: 100%;
height: 150px;
border: #D3D3D3 5px solid;
border-radius: 20px;
background: url('./images/background-blue.jpg');
background-size: cover;
background-repeat: no-repeat; 	 	

}
.card-content {
width: 150%;
height: 140px;
background: transparent;
color: black;
overflow: scroll;
min-height: 100vh
diplay: flex
flex-direction: column;
}
.card-img, .img-card {
width: 100%; 
height: 140px;
border-radius: 10px;
}
.post-title1 {
width: 100%;
height: 20px;
color: white;
background: blue;
text-align: center;
border-radius: 5px;;
}
.post-footer {
margin-top: auto;
border-radius: 5px;
}
.author-contacts {
display: flex;
flex-direction: row;
gap: 2px;
justify-content: space-between;
}
.post-details {
height: 120px;
width: 100%;
}
.recent {
background: blue;
color: white;
height: 20px;
text-align: center;
font-weight: 500;
}

@import url('https://fonts.googleapis.com/css?family=Arima+Madurai:300');

*,
*::before,
*::after {
	box-sizing: border-box;
}

h1 {
	font-family: 'Arima Madurai', cursive;
	color: black;
	font-size: 4rem;
	letter-spacing: -3px;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.6);
	position: relative;
	z-index: 3;
}

.container {
	z-index: 1;
	position: relative;
	overflow: hidden;
	display: flex;
	align-items: center;
	justify-content: center;
	// min-height: 100vh;
	min-height: 25rem;
	background-image: linear-gradient(to bottom,  rgba(255,168,76,0.6) 0%,rgba(255,123,13,0.6) 100%), url('https://images.unsplash.com/photo-1446824505046-e43605ffb17f');
	background-blend-mode: soft-light;
	background-size: cover;
	background-position: center center;
	padding: 2rem;
width: 100%;
}

.bird {
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/174479/bird-cells-new.svg);
	background-size: auto 100%;
	width: 88px;
	height: 125px;
	will-change: background-position;
	
	animation-name: fly-cycle;
	animation-timing-function: steps(10);
	animation-iteration-count: infinite;

	&--one {
		animation-duration: 1s;
		animation-delay: -0.5s;		
	}
	
	&--two {
		animation-duration: 0.9s;
		animation-delay: -0.75s;
	}
	
	&--three {
		animation-duration: 1.25s;
		animation-delay: -0.25s;
	}
	
	&--four {
		animation-duration: 1.1s;
		animation-delay: -0.5s;
	}

}

.bird-container {
	position: absolute;
	top: 20%;
	left: -10%;
	transform: scale(0) translateX(-10vw);
	will-change: transform;
	
	animation-name: fly-right-one;
	animation-timing-function: linear;
	animation-iteration-count: infinite;
	
	&--one {
		animation-duration: 15s;
		animation-delay: 0;
	}
	
	&--two {
		animation-duration: 16s;
		animation-delay: 1s;
	}
	
	&--three {
		animation-duration: 14.6s;
		animation-delay: 9.5s;
	}
	
	&--four {
		animation-duration: 16s;
		animation-delay: 10.25s;
	}
	
}

@keyframes fly-cycle {
	
	100% {
		background-position: -900px 0;
	}
	
}

@keyframes fly-right-one {
	
	0% {
		transform: scale(0.3) translateX(-10vw);
	}
	
	10% {
		transform: translateY(2vh) translateX(10vw) scale(0.4);
	}
	
	20% {
		transform: translateY(0vh) translateX(30vw) scale(0.5);
	}
	
	30% {
		transform: translateY(4vh) translateX(50vw) scale(0.6);
	}
	
	40% {
		transform: translateY(2vh) translateX(70vw) scale(0.6);
	}
	
	50% {
		transform: translateY(0vh) translateX(90vw) scale(0.6);
	}
	
	60% {
		transform: translateY(0vh) translateX(110vw) scale(0.6);
	}
	
	100% {
		transform: translateY(0vh) translateX(110vw) scale(0.6);
	}
	
}

@keyframes fly-right-two {
	
	0% {
		transform: translateY(-2vh) translateX(-10vw) scale(0.5);
	}
	
	10% {
		transform: translateY(0vh) translateX(10vw) scale(0.4);
	}
	
	20% {
		transform: translateY(-4vh) translateX(30vw) scale(0.6);
	}
	
	30% {
		transform: translateY(1vh) translateX(50vw) scale(0.45);
	}
	
	40% {
		transform: translateY(-2.5vh) translateX(70vw) scale(0.5);
	}
	
	50% {
		transform: translateY(0vh) translateX(90vw) scale(0.45);
	}
	
	51% {
		transform: translateY(0vh) translateX(110vw) scale(0.45);
	}
	
	100% {
		transform: translateY(0vh) translateX(110vw) scale(0.45);
	}
	
}

</style>
</head>
<body>
<div class="post-container">
<div class="post-upload">
<div class="type-title"> Upload Posts </div>
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
<tr><td><input type="text" name="postdate" class="postdate" placeholder="Enter date..."></td></tr>
</form>
<tr><td>&nbsp; &nbsp;</td></tr>
<tr><td rowspan="12"><div class="button"><button class="upload" name="upload">Upload</button><button class="cancel" name="cancel">Cancel</button></div></td></tr>
</table>
</div>
<div class="other-block">
<h4 class="recent"> Recent Posts</h4>
<div class="part1">

<?php
$conn = mysqli_connect("localhost","root","","blog_data");
$sql = "select * from posts order by postid desc limit 5";
$rest = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($rest))
{ 
?>
<div class="post-cards">
<div class="img-card"><img class="card-img" src="./images/<?=$row['image']; ?>" ></img></div>
<div class="card-content">
<div class="post-title1">
<?=$row['title']; ?>
</div>
<div class="post-details">
<?=$row['details']; ?>
</div>
<?php
$original = $row['postedon'];
$date = date_create($original);
$original = date_format($date,'d/m/y');
?>
<div class="post-footer">
<div class="author-contacts"><span class="date">Posted on :&nbsp;<?=$original;?></span><span class="social"><i class="fab fa-facebook-f"></i>&nbsp; <i class="fab fa-linkedin"></i> &nbsp; <i class="fab fa-twitter"></i> &nbsp; <i class="fab fa-instagram"></i>&nbsp; <i class="fab fa-reddit"></i></span></div>
</div>

</div>
</div>
<?php
}
?>
</div>
<div class="part2">

<div class="container">
	
	<h1>My Blog Posts</h1>
	
	<div class="bird-container bird-container--one">
		<div class="bird bird--one"></div>
	</div>
	
	<div class="bird-container bird-container--two">
		<div class="bird bird--two"></div>
	</div>
	
	<div class="bird-container bird-container--three">
		<div class="bird bird--three"></div>
	</div>
	
	<div class="bird-container bird-container--four">
		<div class="bird bird--four"></div>
	</div>
	
</div>



</div>
</div>
<input type="hidden" name="table" class="table" value="posts">
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
alert("Upload button cleared");
});
});
</script>
</body>
</html>