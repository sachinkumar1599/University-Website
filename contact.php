<html>
<head>	<link rel="stylesheet" href="css/homebutton.css"></head>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;

}
.container1{
  position: absolute;
  width: 100%;
  top: 50%;
  transform: translateY(-50%);
  text-align: center;
  margin: 40px 100px 0px 0px;
}
.contact-method{
  width: 220px;
  height: 140px;
  display: inline-block;
  background: #3498db;
  margin: 10px;
  color: #fff;
  position: relative;
  cursor: pointer;
}
.contact-method i{
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  font-size: 30px;
  line-height: 140px;
  background:black;
  z-index: 1;
  transition: transform 0.6s;
}
.contact-method span{
  position: absolute;
  width: 100%;
  left: 0;
  bottom: 0;
  padding: 10px 0;
}

.contact-method:hover i{
  transform: translateY(-40px);
}

.title h4{
	margin-top:30px;
	font-size:50px;
	color:black;
}

</style>
		<body>
		
				<button class="button" style="widht=30%"><span><a href="index.html">Home</a></span></button>
		<div class="title">
		<center><h4>CONTACT<h4><center>
		</div>
	<div class="container1">
      <div class="contact-method">
        <i class="fas fa-envelope"></i>
        <span>sachin12345603.com</span>
      </div>
      <div class="contact-method">
        <i class="fas fa-mobile-alt"></i>
        <span>9860311696</span>
      </div>
      <div class="contact-method">
        <i class="fas fa-map-marker-alt"></i>
        <span>nashik,MH</span>
      </div>
    </div>
    </body>
</html>