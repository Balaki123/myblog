<?php
include('includes/header.php');
include('includes/sidebar.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
.contact-form {
display: flex;
flex-direction: column;
gap: 30px;
}
.buttons {
display: flex;
flex-direction: row;
justify-content: space-between;
}
.contact-container {
display: flex;
flex-direction: row;
justify-content: start;
gap: 30px;
background: url('images/clip-art.jpg');
background-size: cover;
background-repeat: no-repeat;
margin-left: 250px;
height: 860px;
}
input[type="text"] {
width: 600px;
height: 30px;
}
.maps-info {
display: flex;
flex-direction: column;
justify-content: start;
gap: 20px;
}
.fa {
font-size: 20px;
font-weight: 700;
color: white;
text-align: center;
}
.info {
display: flex;
flex-direction: row;
gap: 20px;
justify-content: start;
width: 100%;
height: 300px;
}
.google-map {
width: 250px;
height: 250px;
border: blue 3px solid;
border-radius: 20px;
margin-top: 10px;
margin-right: 10px;
}
.other-info {
display: flex;
flex-direction: column;
justify-content: start;
gap: 20px;
}
.frequently {
width: 100%;
height: 250px;
overflow: scroll;
}
.title {
width: 100%;
height: 30px;
padding 10px 10px;
background: blue;
color: #fff;
text-align: center;
font-size: 20px;
margin-top: -10px;
}
.answer {
display: block;
text-align: justify;
text-justify: inter-word;
color: white;
}
.info {
width: 100%;
height: 300px;
color: white;
}
.info-table {
width: 70%;
margin-top: 20px;
}
table {
color: white;
}
.fa-facebook {
color: blue;
}
.fa-linkedin {
color: yellow;
}
.fa-instagram {
color: pink;
}
.fa-twitter {
color: #ADD8E6;
}
.fa-pinterest {
color: red;
}
.question1, .question2, .question3, .question4 {
color: white;
}
.contact-form {
margin-left: 30px;
margin-right: 30px;
margin-top: 20px;
}
.address {
text-justify: justify;
}
.canvas {
      background:url('https://i.postimg.cc/6q3KG8Hw/maxresdefault.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;  
      border: yellow 4px solid;
      border-radius: 20px; 
    }
.animate {
width: 540px;
height: 210px;
border: #fff 4px solid;
background: url('./images/blur-bubbles.jpg');
background-size: cover;
background-repeat: no-repeat;
}
.sidebar {
height: 860px;
}
</style>
</head>
<body>
<div class="contact-container">
<div class="contact-form">
<div class="name1">
<input type="text" class="name" name="name" placeholder="name.."></div>
<div class="Address1">
<input type="text" class="address" name="address" placeholder="Address.."></div>
<div class="emailid1">
<input type="text" class="emailid" name="emailid" placeholder="emailid.."></div>
<div class="entity1">
<select class="entity" name="entity" placeholder="Entity Type">
<option val="">Select Entity Type</option>
<option val="individual">Individual</option>
<option val="company">Company</option>
<option val="enterprise">Enterprise</option>
<option val="business">Business</option>
</select>
</div>
<div class="phone1">
<input type="text" class="phoneno" name="phoneno" placeholder="phoneno.."></div>
<div class="message1">
<textarea class="message" name="message" cols="80" rows="20" placeholder="message...."></textarea></div>
<div class="buttons">
<button class="send" name="send">Send</button><button class="cancel" name="cancel">Cancel</button>
</div>
</div>
<div class="maps-info">
<div class="info">
<div class="info-table">
<table>
<tr><td><i class="fa fa-user"></i></td><td><b>:</b></td><td>&nbsp; MyBlog</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><i class="fa fa-map-marker"></i></td><td><b>:</b></td><td>&nbsp; <span class="address">Flat 403, Sai Village A, Sai &nbsp; Village Road, Pragathi Nagar, Opp. &nbsp; JNTU, Hyderabad</span></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><i class="fa fa-users"></i></td><td><b>:</b></td><td>&nbsp; Individual</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><i class="fa fa-phone"></i></td><td><b>:</b></td><td>&nbsp; 9505439574</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><i class="fa fa-globe"></i></td><td><b>:</b></td><td>&nbsp; balaki1@gmail.com</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><i class="fa fa-envelope"></i></td><td><b>:</b></td><td>&nbsp; <i class="fa fa-facebook" style="font-size: 16;"></i> &nbsp; <i class="fa fa-linkedin" style="font-size: 16;"></i> &nbsp; <i class="fa fa-twitter" style="font-size: 16;"></i> &nbsp; <i class="fa fa-instagram" style="font-size: 16;"></i>&nbsp; <i class="fa fa-pinterest" style="font-size: 16;"></i></td></tr>
</table>
</div>
<div class="map">
<iframe class="google-map" src="https://maps.google.com/maps?width=800&amp;height=700&amp;hl=en&amp;q=Sai Village A, Pragathi Nagar, Hyderabad, India&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed""></iframe>

</div>
</div>
<div class="other-info">
<h3 class="title">Frequently Asked Questions </h3>
<div class="frequently">

<table>
<tr>
<td><div class="question1">Why should I simply purchase cheaper generic content?</div></td><td>&nbsp; &nbsp;</td><td><i class="fa fa-plus q1"></i></td></tr>
<tr class="answer1"><td><div class="answer">That sounds like an inexpensive way to fill your blog space. However, there’s a big difference between posting content and making your blog a successful marketing tool.<br> We provide custom content that helps build bonds between you and your current and future customers. Our content shows the uniqueness of your offerings and is designed to encourage your customers to engage with you.<br> Generic content can’t do that. </div></td></tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td><div class="question2">How Active Blogs know enough to write for our industry?</div></td><td>&nbsp; &nbsp;</td><td><i class="fa fa-plus q2"></i></td></tr>
<tr class="answer2"><td><div class="answer">You’re the expert at what you do, and we’re experts at blog and content marketing. We simply act as an extension of your organization and leverage your internal expertise <br>and resources — similarly to how a busy executive would hire a ghostwriter to write his or her book. </div></td></tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td><div class="question3">How to distinguish between a typical blog and the Active Blog?</div></td><td>&nbsp; &nbsp;</td><td><i class="fa fa-plus q3"></i></td></tr>
<tr class="answer3"><td><div class="answer">A typical blog depends entirely on your efforts: It’s up to you to write, post, and maintain the blog. With an Active Blog, we do all the writing, research, planning, editing, and other blog tasks for you. We have programs to maximize your blog distribution through email, social media, SEO, and a host of other effective methods. The program is very flexible: We can simply create content or scale up for maximum content exposure. </div></td></tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td><div class="question4">Why should we invest in a business blog?</div></td><td>&nbsp; &nbsp;</td><td><i class="fa fa-plus q4"></i></td></tr>
<tr class="answer4"><td><div class="answer">Having an Active Blog presents you as a thought leader and your business as an authority, improving your company visibility. Your regularly published informative blog content builds trust in and nurtures relationships with your customers and prospects, brings more visitors to your website, and increases visitor engagement — for example, through blog or newsletter signups, downloads, or requests for additional information. </div></td></tr>
</table>
</div>
<div class="animate" onload='_pexresize()'>
<canvas class='canvas' id='canvas' onload='animate()'></canvas>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
$('.answer1').hide();
$('.answer2').hide();
$('.answer3').hide();
$('.answer4').hide();
$('.q1').click(function() {
$('.answer1').toggle();
});
$('.q2').click(function() {
$('.answer2').toggle();
});
$('.q3').click(function() {
$('.answer3').toggle();
});
$('.q4').click(function() {
$('.answer4').toggle();
});
$('.send').click(function() {
alert('send button clicked');
});
var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');


    var stgw = 1280;
    var stgh = 720;


    var loffset = 0;
    var toffset = 0;

    function _pexresize() {
      var cw = (window.innerWidth/3);
      var ch = (window.innerHeight/4);
      if (cw<=ch*stgw/stgh) {
        loffset = 0;
        toffset = Math.floor(ch-(cw*stgh/stgw))/2;
        canvas.style.width = cw + "25px";
        canvas.style.height = Math.floor(cw*stgh/stgw) + "25px";
      } else {
        loffset = Math.floor(cw-(ch*stgw/stgh))/2;
        toffset = 0;
        canvas.style.height = ch + "px";
        canvas.style.width = Math.floor(ch*stgw/stgh) + "px";
      }
      canvas.style.marginLeft = loffset +"px";
      canvas.style.marginTop = toffset +"px";
    }
    _pexresize();

    var count = 100;
    var lcount = 6;

    var layer = [];
    var layery = [];

    ctx.fillStyle = "rgba(255,255,255,0.5)";
    for (var l=0;l<lcount;l++) {
      ctx.clearRect(0,0,stgw,stgh);
      for (var i=0;i<count*(lcount-l)/1.5;i++) {
        var myx = Math.floor(Math.random()*stgw);
        var myy = Math.floor(Math.random()*stgh);
        var myh = l*6+8;
        var myw = myh/10;
        ctx.beginPath();
        ctx.moveTo(myx,myy);
        ctx.lineTo(myx+myw,myy+myh);
        ctx.arc(myx, myy+myh, myw, 0, 1 * Math.PI);
        ctx.lineTo(myx-myw,myy+myh);
        ctx.closePath();
        ctx.fill();
      }
      layer[l] = new Image();
      layer[l].src = canvas.toDataURL("image/png");
      layery[l] = 0;
    }



    var stt = 0;
    var str = Date.now()+Math.random()*4000;
    var stact = false;

    function animate() {
      ctx.clearRect(0,0,stgw,stgh);

      for (var l=0;l<lcount;l++) {
        layery[l] += (l+1.5)*5;
        if (layery[l]>stgh) {

          layery[l] =layery[l]-stgh;
        }
        ctx.drawImage(layer[l],0,layery[l]);
        ctx.drawImage(layer[l],0,layery[l]-stgh);
      }
      if (Date.now()>str) {
        stact = true;
      }
      if (stact) {
        stt++;
        if (stt<5+Math.random()*10) {
          var ex = stt/30;
        } else {
          var ex = (stt-10)/30;
        }
        if (stt>20) {
          stt = 0;
          stact = false;
          str = Date.now()+Math.random()*8000+2000;
        }

        ctx.fillStyle = "rgba(255,255,255,"+ex+")";
        ctx.fillRect(0,0,stgw,stgh);
      }
      window.requestAnimationFrame(animate);
    }


    animate();




});
</script>
</body>
<?php
include('includes/footer.php');
include('includes/script.php');
?>
</html>