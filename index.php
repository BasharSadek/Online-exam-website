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
   <title> login </title>
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
</head>

<body class="inner_page login">
   <div class="full_container">
      <div class="container">
         <div class="center verticle_center full_height">
            <div class="login_section">
               <div class="logo_login">
                  <div class="center">
                     <img width="210" src="images/logo/logo1.png" alt="#" />
                  </div>
               </div>
               <div class="login_form">
                  <form method="post">
                     <fieldset>
                        <div class="field">
                           <label class="label_field">Email Address</label>
                           <input type="email" required name="email" placeholder="E-mail" />
                        </div>
                        <div class="field">
                           <label class="label_field">Password</label>
                           <input type="password" required name="password" placeholder="Password" />
                        </div>
                        <div class="field margin_0">
                           <label class="label_field hidden">hidden label</label>
                           <button type="submit" name="login" class="main_bt">Sing In</button>
                        </div>
               </div>
               </fieldset>
               </form>
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
   <!-- nice scrollbar -->
   <script src="js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>
<?php
if (isset($_POST['login'])) {
   if ($_POST['email'] == "admin@gmail.com" && $_POST['password'] == 123) {
      $href = 'Location: admin.php';
      header($href);
   }
   $data = getFromData("SELECT lecturer.id_lecturer,account.email,account.passwordA,account.id_account 
   FROM account JOIN lecturer
   ON account.id_account=lecturer.id_account");
   foreach ($data as $result) {
      if ($_POST['email'] == $result["email"] && $_POST['password'] == $result["passwordA"]) {

         session_start();
         $_SESSION['id'] = $result["id_lecturer"];
         $_SESSION['email'] = $result["email"];
         $_SESSION['idAcc'] = $result["id_account"];
         $href = 'Location: lecturerPage.php';
         header($href);
      }
   }
   $data2 = getFromData("SELECT student.id_student,account.email,account.passwordA,account.id_account  
   FROM account JOIN student
   ON account.id_account=student.id_account");
   foreach ($data2 as $result) {
      if ($_POST['email'] == $result["email"] && $_POST['password'] == $result["passwordA"]) {

         session_start();
         $_SESSION['id'] = $result["id_student"];
         $_SESSION['email'] = $result["email"];
         $_SESSION['idAcc'] = $result["id_account"];
         $href = 'Location: studentpage.php';
         header($href);
      }
   }
   echo '<script>alert("There is an error in the email or password");</script>';
}

?>