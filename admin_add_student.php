
         <html>
         <head>
          <link rel="stylesheet" type="text/css" href="style.css">
         	<title></title>
         	<link rel="stylesheet"  href="css/bootstrap.min.css">
          <script type="text/javascript" src="admin_student_validation.js"></script>
         </head>
         <body>

          <form action="admin_add_student_insert.php" method="POST" name="StudentRegistration" onsubmit="return(validate());">

</style>
	<div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="admin.php">Home</a></li>
    <li class="menu-item">
      <a href="#0">Teachers</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="teacher_registration.php">Add</a></li>
        <li class="menu-item"><a href="teacher_details.php">Details</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Student</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="admin_add_student.php">Add</a></li>
        <li class="menu-item"><a href="student_details.php">Details</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="feedback.php">Feedback</a></li>
    <li class="menu-item"><a href="home.php">Logout</a></li>
  </ol>
</nav>


<br>
<br>




<center>
<div class="col-md-6">
  <span class="d-block p-2 bg-primary text-white">Add Student</span>
  <div class="jumbotron">
    <img src="registration.png" height="100">
  <input type="text" name="fname"  class="form-control"  placeholder="First Name"><br>
  <input type="text" name="lname" class="form-control" placeholder="Last Name"><br>
  <input type="email" name="email" class="form-control" placeholder="Email Id"><br>
  <input type="text" name="college" class="form-control" placeholder="College Name"><br>
  <input type="text" name="contact" class="form-control" placeholder="Mobile Number"><br>
  <input type="text" name="class" class="form-control" placeholder="Standard"><br>
  <input type="password" name="pass" class="form-control"  value="" placeholder="new password"> <br>
  <input type="password" name="pass1" class="form-control"  value="" placeholder="confirm your password"> <br>
  <div>
                            <button class="btn btn--radius-2 btn--red" style="background-color:#00008B" class="btn btn-success type="submit"><font color="white">Register</font></button>
                        </div>
  </div>

</div>
</center>







   <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</form>
         </body>
         </html>