<?php include("database.php");
session_start();
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$idAcc = $_SESSION['idAcc'];
$MyDate = date("Y-m-d");
$MyTime = date("H") + 1;
$MyTime .= date(":i:00");
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
   <title>start Exam</title>
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
   <script src="timerJava.js"></script>
   <script>
      //startTimer();
   </script>
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
                  <li><i class="fa fa-table purple_color2"></i> <span><a href="studentpage.php"> MAIN</a></span></li>
                  <li><i class="fa fa-table purple_color2"></i> <span><a href="startExam.php">Start Exam</a></span></li>
                  <li><i class="fa fa-cog yellow_color"></i> <span><a href="studentSettings.php">Settings</a></span></li>
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
                  <div>
                     <h1 id="idTimer" class="fa main_bt">Time = 1:30 </h1>
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
                              <h2>start Exam</h2>
                           </div>
                        </div>
                        <div class="table_section padding_infor_info">

                           <div class="table-responsive-sm">
                              <!-- AND exam.hour>='$MyTime' -->
                              <form method="post">
                                 <table class="table table-striped">
                                    <tr>
                                       <td><b>Choose an Exam</b></td>
                                       <td> <select value="1" name="numC" required>
                                             <?php

                                             $data = getFromData("SELECT course.id_course,course.name_course,exam.name,exam.Exam_date,exam.hour
                                             FROM course JOIN exam
                                             ON course.id_course=exam.id_course
                                             WHERE exam.Exam_date='$MyDate' AND exam.hour<='$MyTime'");
                                             foreach ($data as $result) {
                                                echo '<option value="' . $result["id_course"] . '" name="numC" >' . $result["name"] . '</option>';
                                             }

                                             ?>
                                          </select></td>

                                    </tr>
                                 </table>
                                 <table>

                                    <button type="submit" name="exam" class="main_bt">Start</button>

                                    <?php
                                    $iQ = 0;
                                    if (isset($_POST['exam'])) {

                                       $numCo = $_POST['numC'];
                                       $_SESSION['idCou'] = $numCo;

                                       $data2 = getFromData("SELECT questions.id_questions,questions.textq,questions.answer1,questions.answer2,
                                                                        questions.answer3,questions.answer4,questions.correct
                                                                      FROM questions
                                                                          WHERE questions.id_course='$numCo' 
                                                                             ORDER  BY questions.id_questions DESC
                                                                               LIMIT 4");

                                       foreach ($data2 as $result) {
                                          echo ' <table class="table table-striped">
                                          <tr>'
                                             . $iQ + 1 .  '_ Text Ques :   ' . $result["textq"] . '</tr>
                                            <td>' . "A : " . $result["answer1"] . '</td>
                                            <td>' . "B : " . $result["answer2"] . '</td>
                                            <td>' . "C : " . $result["answer3"] . '</td>
                                            <td>' . "D : " . $result["answer4"] . '</td>
                                          </tr>
                                        </table>';
                                       }

                                       echo '<script> startTimer();</script>';
                                       echo '<table class="table table-striped">
            <td>
              <p><b>Answer 1</b></p>
            </td>
            <td><input type="text"  required name="an1" placeholder="Answer 1" ></td>
            </tr>
            <tr>
              <td>
                <p><b>Answer 2</b></p>
              </td>
              <td><input type="text" required name="an2" placeholder="Answer 2" ></td>
            </tr>
            <tr>
              <td>
                <p><b>Answer 3</b></p>
              </td>
              <td><input type="text" required name="an3" placeholder="Answer 3"></td>
            </tr>
            <tr>
              <td>
                <p><b>Answer 4</b></p>
              </td>
              <td><input type="text" required  name="an4" placeholder="Answer 4" ></td>
            </tr>
          
          </table>';
                                       echo '<button type="submit"  name="finish" class="main_bt" >Finish</button>';
                                    }

                                    if (isset($_POST['finish'])) {
                                       $idCou = $_SESSION['idCou'];
                                       $data2 = getFromData("SELECT questions.correct FROM questions
                                      WHERE questions.id_course='$idCou' 
                                            ORDER  BY questions.id_questions DESC
                                              LIMIT 4");
                                       $i = 1;
                                       foreach ($data2 as $result) {
                                          switch ($i) {
                                             case 1:
                                                $corr1 = $result["correct"];
                                                break;

                                             case 2:
                                                $corr2 = $result["correct"];
                                                break;
                                             case 3:
                                                $corr3 = $result["correct"];
                                                break;
                                             case 4:
                                                $corr4 = $result["correct"];
                                                break;

                                             default:
                                                # code...
                                                break;
                                          }
                                          $i++;
                                       }
                                       $idCou = $_SESSION['idCou'];
                                       $answer1 = $_POST['an1'];
                                       $answer2 = $_POST['an2'];
                                       $answer3 = $_POST['an3'];
                                       $answer4 = $_POST['an4'];
                                       $sum = 0;

                                       if ($answer1 == $corr1) {
                                          $sum += 25;
                                       }
                                       if ($answer2 ==  $corr2) {
                                          $sum += 25;
                                       }
                                       if ($answer3 ==  $corr3) {
                                          $sum += 25;
                                       }
                                       if ($answer4 ==  $corr4) {
                                          $sum += 25;
                                       }

                                       connToData("INSERT INTO mark VALUES (NULL,'$sum','$idCou','$id');");
                                       echo '<script> alert("The mark is : ' . $sum . '"); </script>';
                                    }
                                    ?>
                                 </table>
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