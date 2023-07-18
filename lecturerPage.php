<?php include("database.php");

session_start();
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$idAcc = $_SESSION['idAcc'];


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
   <title>Lecturer Page</title>
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
                        <h6><?php echo $email; ?></h6>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">

               <ul class="list-unstyled components">
                  <li><i class="fa fa-table purple_color2"></i> <span><a href="lecturerPage.php"> MAIN</a></span></li>
                  <li><i class="fa fa-table purple_color2"></i> <span><a href="showQuestions.php">Show Questions</a></span></li>
                  <li><i class="fa fa-table purple_color2"></i> <span><a href="addQuestions.php"> Add Questions</a></span></li>
                  <li><i class="fa fa-cog yellow_color"></i> <span><a href="lecturerSettings.php">Settings</a></span></li>
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
                              <h7><a href="index.php"> Log out </a></h7>
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
                              <h2>Lecturer Page</h2>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table-responsive-sm">
                              <table class="table table-striped">
                                 <?php
                                 $data = getFromData("SELECT lecturer.id_lecturer,lecturer.first_name,lecturer.last_name,account.email,account.passwordA,lecturer.mobile
                                 FROM lecturer JOIN account
                                 ON lecturer.id_account=account.id_account
                                     WHERE lecturer.id_lecturer='$id'");
                                 foreach ($data as $result) {
                                 }

                                 echo   " 
            <tr>
            <td><b>ID</b> </td>
            <td>" . $result["id_lecturer"] . "</td>
          </tr> <tr>
              <td><b>First Name</b> </td>
              <td>" . $result["first_name"] . "</td>
            </tr>
            <tr>
              <td><b>Last Name</b> </td>
              <td>" . $result["last_name"] . "</td>
            </tr>
            <tr>
            <td><b>Email</b> </td>
            <td> " . $result["email"] . "</td>
          </tr>
            <tr>
              <td><b>Password</b> </td>
              <td> " . $result["passwordA"] . "</td>
            </tr>
            <tr>
              <td><b>Mobile</b> </td>
              <td>" . $result["mobile"] . "</td>
            </tr>";


                                 ?>
                                 <tr>
                                    <td><b>Course Name</b></td>
                                    <td>
                                       <?php
                                       $data3 = getFromData("SELECT course.name_course  FROM course WHERE course.id_lecturer='$id';");
                                       foreach ($data3 as $result) {
                                          echo $result["name_course"] . "<br> ";
                                       }
                                       ?>
                                    </td>
                                 </tr>

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

// if (isset($_GET['main'])) {
//    $href = 'Location: lecturerPage.php?id=' . $id . '&email=' . $email . '&idAcc=' . $idAcc;
//    header($href);
// }
// if (isset($_GET['show'])) {
//    $href = 'Location: showQuestions.php';
//    header($href);
// }
// if (isset($_GET['add'])) {
//    $href = 'Location: studentpage.php?id=' . $id . '&email=' . $email . '&idAcc=' . $idAcc;
//    header($href);
// }
// if (isset($_GET['settings'])) {
//    $href = 'Location: studentpage.php?id=' . $id . '&email=' . $email . '&idAcc=' . $idAcc;
//    header($href);
// }
?>