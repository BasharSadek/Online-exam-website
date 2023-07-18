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
   <title>Add Questions</title>
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
                              <h2>Add Questions</h2>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">
                           <div class="table-responsive-sm">
                              <form method="post">
                                 <table class="table table-striped">
                                    <tr>
                                       <td><b>Choose a course</b></td>
                                       <td>
                                          <select value="1" name="number" required class=" TableAddInput">
                                             <?php

                                             $data = getFromData("SELECT course.id_course,course.name_course FROM course 
                                           WHERE course.id_lecturer='$id';");
                                             foreach ($data as $result) {
                                                echo "<option value=\" " . $result["id_course"] . "\" name=\" number\" class=\"optionAddExam\">" . $result["name_course"] . " </option>";
                                             }
                                             ?>
                                          </select>
                                       </td>
                                    </tr>
                                    <td><b>Question text</b></td>
                                    <td class="ques"><input type="text" required name="textQues" placeholder="Question text" class="ques"></td>
                                    </tr>

                                    <tr>
                                       <td><b>Answer 1 </b></td>
                                       <td><input type="text" name="an1" required placeholder="Answer 1" class="ques"></td>
                                    </tr>

                                    <tr>
                                       <td><b>Answer 2</b></td>
                                       <td><input type="text" name="an2" required placeholder="Answer 2" class="ques"></td>
                                    </tr>

                                    <tr>
                                       <td><b>Answer 3</b></td>
                                       <td><input type="text" name="an3" required placeholder="Answer 3" class="ques"></td>
                                    </tr>
                                    <tr>
                                       <td><b>Answer 4</b></td>
                                       <td><input type="text" name="an4" required placeholder="Answer 4" class="ques"></td>
                                    </tr>
                                    <tr>
                                       <td><b>correct</b></td>
                                       <td><input type="text" name="cor" required placeholder="correct" class="ques"></td>
                                    </tr>
                                 </table>
                                 <button type="submit" name="add" class="main_bt">Add</button>
                              </form>
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
if (isset($_POST['add'])) {
   if ($_POST['cor'] == 1 || $_POST['cor'] == 2 || $_POST['cor'] == 3 || $_POST['cor'] == 4) {
      $text = $_POST['textQues'];
      $an1 = $_POST['an1'];
      $an2 = $_POST['an2'];
      $an3 = $_POST['an3'];
      $an4 = $_POST['an4'];
      $correct = $_POST['cor'];
      $idCourse = $_POST['number'];
      connToData("INSERT INTO questions VALUES (NULL,'$text','$an1','$an2','$an3','$an4'
   ,'$correct','$idCourse');");
   }
   echo '<script>alert("Done Saved");</script>';
}
?>