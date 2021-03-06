<?php
   include_once("connection-pdo.php");

   if(isset($_POST['submit']))
   {
    if(empty($_FILES['file']))
    {
      print_r('ALL FIELDS ARE REQUIRED.');
    }
    else
    {
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
      $file_cext= (explode('.',$_FILES['file']['name']));
      $file_ext= strtolower(end($file_cext));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         $message= "Success";
      }else{
         print_r($errors);
      }
   }
   }
}
?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/aa.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Edit Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    student name
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="home.html">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="profile.html">
                        <i class="pe-7s-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="pe-7s-date"></i>
                        <p>Academic Calendar</p>
                    </a>
                </li>
                <li>
                    <a href="timetable.html">
                        <i class="pe-7s-clock"></i>
                        <p>Time Table</p>
                    </a>
                </li>
                <li>
                    <a href="syllabus.html">
                        <i class="pe-7s-note2"></i>
                        <p>Course Syllabus</p>
                    </a>
                </li>
                <li>
                    <a href="schedule.html">
                        <i class="pe-7s-hourglass"></i>
                        <p>Exam Schedule</p>
                    </a>
                </li>
                <li>
                    <a href="notes.html">
                        <i class="pe-7s-note"></i>
                        <p>Notes And Assignments</p>
                    </a>
                </li>
                <li>
                    <a href="results.html">
                        <i class="pe-7s-study"></i>
                        <p>RESULTS</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="../login.php">
                        <i class="pe-7s-power"></i>
                        <p>LOGOUT</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Edit Profile</a>
                </div>
                
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Edit Profile</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">   
                                    <p>
										Settings
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="edit.html">Edit Profile</a></li>
                                <li><a href="password.html">Change Password</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="../login.php">
                                <p> Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color:rgb(80, 80, 80)">University Roll Number</label>
                                                <input type="text" name="roll" id="roll" class="form-control" placeholder="Roll Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color:rgb(80, 80, 80)">Registration Number</label>
                                                <input type="text" name="regno" id="regno" class="form-control" placeholder="Registration  Number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color:rgb(80, 80, 80)">First Name</label>
                                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="color:rgb(80, 80, 80)">Middle Name</label>
                                                    <input type="text" name="mname" id="mname" class="form-control" placeholder="Middle Name">
                                                </div>
                                            </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color:rgb(80, 80, 80)">Last Name</label>
                                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="color:rgb(80, 80, 80)">Date Of Birth</label>
                                                    <input type="date" name="dob" id="dob" class="form-control" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label style="color:rgb(80, 80, 80)">Blood Group</label>
                                                        <select name="bgrp" id="bgrp" class="form-control">  
                                                                <option>A+</option> 
                                                                <option>A-</option> 
                                                                <option>B+</option> 
                                                                <option>B-</option> 
                                                                <option>AB+</option> 
                                                                <option>AB-</option> 
                                                                <option>O+</option> 
                                                                <option>O-</option> 
                                                        </select> 
                                                    </div>
                                                </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="color:rgb(80, 80, 80)">Sex</label>
                                                    <select name="sex" id="sex" class="form-control">  
                                                            <option>Male</option> 
                                                            <option>Female</option> 
                                                            <option>Others</option> 
                                                            
                                                    </select>                                             
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label style="color:rgb(80, 80, 80)">Secondary Education(School Name)</label>
                                                        <input type="text" name="sname" id="sname" class="form-control" placeholder="School Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label style="color:rgb(80, 80, 80)">Percentage(%) Obtained</label>
                                                        <input type="text" name="percent" id="percent" class="form-control" placeholder="Percentage">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label style="color:rgb(80, 80, 80)">Senior Secondary Education(School Name)</label>
                                                            <input type="text" name="ssname" id="ssname" class="form-control" placeholder="School Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="color:rgb(80, 80, 80)">Percentage(%) Obtained</label>
                                                            <input type="text" name="spercent" id="spercent" class="form-control" placeholder="Percentage">
                                                        </div>
                                                    </div>
                                                </div>

                                        <div class="row">
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="color:rgb(80, 80, 80)">Course</label>
                                                            <select name="course" id="course" class="form-control">  
                                                                    <option>B.Tech</option> 
                                                                    <option>M.Tech</option> 
                                                                    <option>MCA</option> 
                                                                </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label style="color:rgb(80, 80, 80)">Stream</label>
                                                                <select name="stream" id="stream" class="form-control">  
                                                                        <option>Computer Science And Engineering</option> 
                                                                        <option>Electrical Engineering</option> 
                                                                        <option>Information Technology</option> 
                                                                        <option>Electronics And Communication Engineering</option> 
                                                                        <option>Mechanical Engineering</option> 
                                                                        <option>Production Engineering</option> 
                                                                        <option>Computer Applications</option> 
                                                                </select> 
                                                            </div>
                                                        </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label style="color:rgb(80, 80, 80)">Semester</label>
                                                        <select name="semester" id="semester" class="form-control">  
                                                                <option>1</option> 
                                                                <option>2</option> 
                                                                <option>3</option> 
                                                                <option>4</option> 
                                                                <option>5</option> 
                                                                <option>6</option> 
                                                                <option>7</option> 
                                                                <option>8</option>                                                           
                                                        </select>                                             
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label style="color:rgb(80, 80, 80)">Contact Number</label>
                                                            <input type="text" name="phno" id="phno" class="form-control" placeholder="Contact Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label style="color:rgb(80, 80, 80)">Email Id</label>
                                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Id(example@abc.xyz)">
                                                        </div>
                                                    </div>
                                                </div>
            

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color:rgb(80, 80, 80)">Address</label>
                                                <textarea rows="1" name="address" id="address" class="form-control" placeholder="Home Address "></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                        <div id="my_data" style=" font-weight: 1000; color: rgb(87, 85, 85);" ></div>
                                                </div>
                                            </div>
                                        </div>
                                    <div id="my_data" style=" font-weight: 1000; color: rgb(87, 85, 85);" ></div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                    <input type="button" class="btn btn-info btn-fill pull-right" name="submit_profile" id="submit_profile" onclick="editpro()" value="Update Profile">
                                    </div>
                                </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-user">
                            <div class="image">
                                <img src="uploads/background.jpeg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="uploads/defaultdp.png">
                                    <img class="avatar border-gray" src="uploads/defaultdp.png" alt="..."/>
                                    </a>
                                    <form action="" method="post" enctype="multipart/form-data" class="title" id="fileUpload">
                                        <input type="file" name="file" id="file">
                                        <input type="button" value="Upload Profile Picture" name="submit">
                                    </form>
                                    <?php
        if(isset($message))
        {
            echo '<h1 style="font-size: 14px; color: #f1f1f1; font-family: "Arial Hebrew", Arial, sans-serif;">'.$message.'</h1>';
        }
        ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; All Right Reserved. Designed by <a href="https://www.facebook.com/swapnil.kishore.5" rel="nofollow">Swapnil Kishore</a></p>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<script>

function editpro()
{
    var roll= $("#roll").val();
    var regno= $("#regno").val();
    var fname= $("#fname").val();
    var mname= $("#mname").val();
    var lname= $("#lname").val();
    var dob= $("#dob").val();
    var bgrp= $("#bgrp").val();
    var sex= $("#sex").val();
    var sname= $("#sname").val();
    var percent= $("#percent").val();
    var ssname= $("#ssname").val();
    var spercent= $("#spercent").val();
    var course= $("#course").val();
    var stream= $("#stream").val();
    var semester= $("#semester").val();
    var phno= $("#phno").val();
    var email= $("#email").val();
    var address= $("#address").val();

    $.ajax({
            url :'edit-profile-db.php',
            type:'POST',
            dataType:'html',
            data :{
                'roll':roll,
                'regno':regno,
                'fname':fname,
                'mname':mname,
                'lname':lname,
                'dob':dob,
                'bgrp':bgrp,
                'sex':sex,
                'sname':sname,
                'percent':percent,
                'ssname':ssname,
                'spercent':spercent,
                'course':course,
                'stream':stream,
                'semester':semester,
                'phno':phno,
                'email':email,
                'address':address,
            },
            success  :function(data){
                $('#my_data').html(data);

            }
        )
    }

   

</script>




    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
