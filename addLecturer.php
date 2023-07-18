<?php include("database.php"); ?>
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
   <title>Add Lecturer</title>
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
   <!-- calendar file css -->
   <link rel="stylesheet" href="js/semantic.min.css" />
   <!-- fancy box js -->
   <link rel="stylesheet" href="css/jquery.fancybox.css" />
</head>

<body class="inner_page tables_page">
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
                        <img width="28" src="images/logo/anyone.png" alt="#" />

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
                           <a href="addDepartment.php">> <span>Add & Update Department</span></a>
                        </li>
                        <li>
                           <a href="addCourse.php">> <span>Add & Update Course</span></a>
                        </li>
                        <li>
                           <a href="addLecturer.php">> <span>Add & Update Lecturer</span></a>
                        </li>
                        <li>
                           <a href="addStudent.php">> <span>Add & Update Student</span></a>
                        </li>
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
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <h4>Online Exam System</h4>
                     <div class="right_topbar">
                        <div class="card-block">
                           <button type="button" class="btn btn-outline-info btn-log-out" data-mdb-ripple-color="dark">
                              <h7><a href="index.php"> Log out</a></h7>
                           </button>
                        </div>
                     </div>
                  </div>
            </div>
            </nav>
         </div>
         <!-- end topbar -->
         <!-- dashboard inner -->
         <div class="midde_cont">
            <div class="container-fluid">
               <div class="row column_title">
                  <!-- row -->
                  <div class="row">
                     <!-- table section -->
                     <!-- <div class="col-md-12"> -->
                     <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                           <div class="heading1 margin_0">
                              <h2>Add&Update Lecturer</h2>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table-responsive-sm">
                              <table class="table table-striped">
                                 <form method="post">
                                    <tr>
                                       <td><b>First Name</b></td>
                                       <td><input type="text" name="name1" required placeholder="First Name"></td>
                                    </tr>

                                    <tr>
                                       <td><b>Last Name</b></td>
                                       <td><input type="text" name="name2" required placeholder="Last Name"></td>
                                    </tr>

                                    <tr>
                                       <td><b>Email</b></td>
                                       <td><input type="email" name="Email" required placeholder="Enter Email" value="@gmail.com"></td>
                                    </tr>
                                    <tr>
                                       <td><b>Password</b></td>
                                       <td><input type="text" name="pass" required placeholder="Enter password"></td>
                                    </tr>

                                    <tr>
                                       <td><b>Mobile</b></td>
                                       <td><input type="text" name="mobile" required placeholder="Enter number"></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <p><b>ID & Name</b> </p>
                                       </td>
                                       <td> <select value="1" name="num" required required>
                                             <?php

                                             $data = getFromData("SELECT lecturer.id_lecturer,lecturer.first_name,lecturer.last_name FROM lecturer;");
                                             foreach ($data as $result) {
                                                echo '<option value=" ' . $result["id_lecturer"] . ' " name="num" >' .
                                                   $result["id_lecturer"] . ' ' . $result["first_name"] . ' ' . $result["last_name"] .  '</option>';
                                             }
                                             ?>
                                          </select></td>
                                    </tr>
                                    <tr>
                                       <td> <button type="submit" name="add" class="main_bt">Add</button></td>
                                       <td> <button type="submit" name="update" class="main_bt">Update</button></td>
                                    </tr>
                                 </form>
                              </table>
                           </div>
                        </div>
                     </div>

                     <!-- table section -->
                     <!-- end dashboard inner -->
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
      <!-- fancy box js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->
      <script src="js/semantic.min.js"></script>
</body>

</html>
<?php
function addlect()
{
   $name1 = $_POST['name1'];
   $name2 = $_POST['name2'];
   $Email = $_POST['Email'];
   $pass = $_POST['pass'];
   $mobile = $_POST['mobile'];
   $num  = $_POST['num'];
   connToData("INSERT INTO account VALUES(NULL,'$Email','$pass');");
   $data2 = getFromData("SELECT account.id_account FROM account
   ORDER BY account.id_account DESC LIMIT 1");
   foreach ($data2 as $result) {
      $idAccount = $result['id_account'];
   }

   connToData("INSERT INTO lecturer VALUES(NULL,'$name1','$name2','$mobile','$idAccount');");
   echo '<script>alert("Done Saved");</script>';
}
function updateLect()
{
   $name1 = $_POST['name1'];
   $name2 = $_POST['name2'];
   $Email = $_POST['Email'];
   $pass = $_POST['pass'];
   $mobile = $_POST['mobile'];
   $num  = $_POST['num'];
   connToData("UPDATE lecturer SET lecturer.first_name='$name1',lecturer.last_name='$name2',lecturer.mobile='$mobile'
   WHERE lecturer.id_lecturer='$num';");
   $data2 = getFromData("SELECT account.id_account FROM account JOIN lecturer
   ON lecturer.id_account =account.id_account
   WHERE lecturer.id_lecturer='$num'
       ORDER BY account.id_account DESC LIMIT 1
    ");
   foreach ($data2 as $result) {
      $idAccount = $result['id_account'];
   }
   connToData("UPDATE account SET account.email='$Email',account.passwordA='$pass' WHERE account.id_account='$idAccount'");
   echo '<script>alert("The data has been modified");</script>';
}
if (isset($_POST['add'])) {
   $isFound = false;
   $Email = $_POST['Email'];
   $dataAcoun = getFromData("SELECT account.id_account,account.email 
   FROM account");
   foreach ($dataAcoun as $re) {
      if ($Email == $re['email'] || $Email == "admin@gmail.com") {
         echo '<script>alert("The data was not saved due to a previously used email");</script>';
         $isFound = true;
         break;
      }
   }
   if ($isFound == false) {
      addlect();
   }
}

if (isset($_POST['update'])) {
   $isFound = false;
   $Email = $_POST['Email'];
   $dataAcoun = getFromData("SELECT account.id_account,account.email 
   FROM account");
   foreach ($dataAcoun as $re) {
      if ($Email == $re['email'] || $Email == "admin@gmail.com") {
         echo '<script>alert("The data was not saved due to a previously used email");</script>';
         $isFound = true;
         break;
      }
   }
   if ($isFound == false) {
      updateLect();
   }
}
?>