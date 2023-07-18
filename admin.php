<?php include("database.php");
$data = getFromData("SELECT COUNT(department.id_department) AS 'num'FROM department;");
foreach ($data as $re) {
   $numDepart = $re['num'];
}

$data = getFromData("SELECT COUNT(course.id_course) AS 'num'FROM course;");
foreach ($data as $re) {
   $numCourse = $re['num'];
}
$data = getFromData("SELECT COUNT(lecturer.id_lecturer) AS 'num'FROM lecturer;");
foreach ($data as $re) {
   $numLecturer = $re['num'];
}

$data = getFromData("SELECT COUNT(student.id_student) AS 'num'FROM student;");
foreach ($data as $re) {
   $numStudent = $re['num'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>online exam system</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="css/custom.css" />
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" />
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="user_info">
                        <img width="29" src="images/logo/anyone.png" alt="#" />

                        <h6>admin@gmail.com</h6>

                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <ul class="list-unstyled components">
                  <li><a href="admin.php"><i class="fa fa-table purple_color2"></i> <span>MAIN</span></a></li>
                  <li class="active">
                     <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Show Data</span></a>
                     <ul class="collapse list-unstyled" id="dashboard">
                        <li>
                           <a href="department.php">> <span>Department</span></a>
                        </li>
                        <li>
                           <a href="academic_year.php">> <span>Academic Year</span></a>
                        </li>
                        <li>
                           <a href="course.php">> <span>Course</span></a>
                        </li>
                        <li>
                           <a href="lecturer.php">> <span>Lecturer</span></a>
                        </li>
                        <li>
                           <a href="student.php">> <span>Student</span></a>
                        </li>
                        <li>
                           <a href="showExam.php">> <span>Show Exam</span></a>
                        </li>
                     </ul>
                  </li>
                  <li class="active">
                     <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Add&Update Data</span></a>
                     <ul class="collapse list-unstyled" id="additional_page">
                        <li>
                           <a href="addDepartment.php">> <span>Add&Update Department</span></a>
                        </li>
                        <li>
                           <a href="addCourse.php">> <span>Add&Update Course</span></a>
                        </li>
                        <li>
                           <a href="addLecturer.php">> <span>Add&Update Lecturer</span></a>
                        </li>
                        <li>
                           <a href="addStudent.php">> <span>Add&Update Student</span></a>
                        </li>

                        <!-- <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li> -->
                     </ul>
                  </li>
                  <li><a href="reports.php"><i class="fa fa-table purple_color2"></i> <span>Reports</span></a></li>
                  <li><a href="addExam.php"><i class="fa fa-table purple_color2"></i> <span>ِAdd Exam</span></a></li>
                  <li><a href="changeLecturer.php"><i class="fa fa-table purple_color2"></i> <span>change of lecturer</span></a></li>
                  <li><a href="showQuestionsAdmin.php"><i class="fa fa-table purple_color2"></i> <span>Show Questions</span></a></li>
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content1">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <h4>Online Exam System</h4>
                     <div class="right_topbar">
                        <div class="card-block">
                           <button type="button" class="btn btn-outline-info btn-log-out" data-mdb-ripple-color="dark">
                              <h7><a href="index.php">Log out</a></h7>
                           </button>
                        </div>
                     </div>

                  </div>
               </nav>
            </div>
            <div class="kk">
               <h1># Dashboard</h1>
            </div>
            <!-- end topbar -->
            <div class="row column1 social_media_section">
               <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-blue order-card">
                           <div class="card-block">
                              <a href="department.php">
                                 <h4><span><?php echo "Department : " . $numDepart; ?></span></h4>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-green order-card">
                           <div class="card-block">
                              <a href="course.php">
                                 <h4><span><?php echo "Course : " . $numCourse; ?></span></h4>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                           <div class="card-block">
                              <a href="lecturer.php">
                                 <h4><span><?php echo "Lecturer : " . $numLecturer; ?></span></h4>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                           <div class="card-block">
                              <a href="student.php">
                                 <h4><span><?php echo "Student : " . $numStudent; ?></span></h4>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-xl-3">
                        <div class="card fg_ce order-card ">
                           <div class="card-block ">
                              <a href="reports.php">
                                 <h5><span>Reports</span></h5>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-xl-3">
                        <div class="card ng_ce order-card">
                           <div class="card-block">
                              <a href="showQuestionsAdmin.php">
                                 <h5><span>Questions</span></h5>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-xl-3">
                        <div class="card bg-ce order-card">
                           <div class="card-block">
                              <a href="changeLecturer.php">
                                 <h5><span>change lecturer</span></h5>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-xl-3">
                        <div class="card bg-cee order-card">
                           <div class="card-block">
                              <a href="addExam.php">
                                 <h5><span>Add Exam</span></h5>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- jQuery -->
               <script src="js/jquery.min.js"></script>
               <script src="js/popper.min.js"></script>
               <script src="js/bootstrap.min.js"></script>
               <!-- wow animation -->
               <script src="js/animate.js"></script>
               <!-- select country -->
               <script src="js/bootstrap-select.js"></script>
               <!-- owl carousel -->
               <script src="js/owl.carousel.js"></script>
               <!-- chart js -->
               <script src="js/Chart.min.js"></script>
               <script src="js/Chart.bundle.min.js"></script>
               <script src="js/utils.js"></script>
               <script src="js/analyser.js"></script>
               <!-- nice scrollbar -->
               <script src="js/perfect-scrollbar.min.js"></script>
               <script>
                  var ps = new PerfectScrollbar('#sidebar');
               </script>
               <!-- custom js -->
               <script src="js/custom.js"></script>
               <script src="js/chart_custom_style1.js"></script>
</body>

</html>