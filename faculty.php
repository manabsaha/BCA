<!DOCTYPE html>
<html>
<head>
	<title>BCA</title>
	<link rel="stylesheet" href="static/style.css">
</head>
<body>
	<div  style="background-image: url('static/img/facultybg.png');position: fixed;height: 100vh;width: 100%;background-repeat: no-repeat;background-size: cover;box-shadow:inset 0 0 0 2000px rgba(64, 68, 241, 0.3);">	
	</div>
	<!-- Navbar -->
	<nav style="position: relative;">
		<img src="static/img/jblogo.png" alt="JBC" onclick="window.location.href='/bca/'">
		<label for="college_department" onclick="window.location.href='/bca/'">
			<span id="college">JAGANNATH BAROOAH COLLEGE</span><br>
			<span id="department">DEPARTMENT OF COMPUTER SCIENCE</span>
		</label>
		<ul>
			<li onclick="window.location.href='/bca/'">HOME</li>
			<li class="active" onclick="window.location.href='/bca/faculty.php'">FACULTY</li>
			<li>RESULTS</li>
			<li onclick="login_modal();">LOGIN</li>
		</ul>
	</nav>
	<!-- Login Div -->
		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <form action="" method="post">
		    	<div class="form-group">
		    		<p id="login_header">STUDENT LOGIN</p>
		    		<input type="text" name="email" id="email" placeholder="Email">
		    		<input type="password" name="password" id="password" placeholder="Password">
		    		<p id="reset_pass">Forgot Password? <span>RESET</span></p>
		    		<button>LOGIN</button>
		    	</div>
		    </form>
		  </div>
		</div>
	<!-- Faculty Div -->
	<div id="faculty">
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(HEAD OF THE DEPARTMENT)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Data Mining and Warehousing, Advanced Programming Languages</span>
		</div>
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(TEACHER)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Field</span>
		</div>
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(TEACHER)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Field</span>
		</div>
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(TEACHER)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Field</span>
		</div>
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(TEACHER)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Field</span>
		</div>
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(TEACHER)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Field</span>
		</div>
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(TEACHER)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Field</span>
		</div>
		<div class="teacher">
			<img src="static/img/profile.png" alt="">
			<span class="fac_name">Gautam Kumar Adhyapak</span>
			<span>(TEACHER)</span>
			<span>kumaradhyapokgautam@gmail.com</span>
			<span>+91 9435-092-568</span>
			<span>Since 2004</span>
			<span>Field</span>
		</div>
	</div>
</body>
<script>
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
function login_modal(){
	modal.style.display = "flex";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>