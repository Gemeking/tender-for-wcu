<?php
include('config.php');



print_r($_POST);
// $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
// print($password)
$usertype = $_POST['usertype'];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $username = $_POST['username'];

$query = "SELECT * FROM users WHERE username = '$username' AND usertype = '$usertype' AND status='1'";
      $result_set = mysqli_query($link, $query);
      if (!$result_set) {
          die("Query failed" . mysqli_error($link));
      }

      echo mysqli_num_rows($result_set);
      if (mysqli_num_rows($result_set) > 0) {
          $row = mysqli_fetch_array($result_set);
          if (password_verify($password, $row['password'])) {
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['username'] = $row['username'];
              echo 'correct password. Please try again.';

            //   switch ($usertype) {
            //       case 'Administrator':
            //           echo "<script>window.open('administrator.php','_self')</script>";
            //           break;
            //       case 'supplier':
            //           echo "<script>window.open('supplier.php','_self')</script>";
            //           break;
            //       case 'finance':
            //           echo "<script>window.open('finance.php','_self')</script>";
            //           break;
            //       case 'property_department':
            //           echo "<script>window.open('propertydepartment.php','_self')</script>";
            //           break;
            //       case 'scientific_director':
            //           echo "<script>window.open('scientificdirector.php','_self')</script>";
            //           break;
            //       case 'procurement_approvin':
            //           echo "<script>window.open('procurement_Approving_committee.php','_self')</script>";
            //           break;
            //       case 'procurement_team':
            //           echo "<script>window.open('procurementteam.php','_self')</script>";
            //           break;
            //       case 'procurement_request':
            //           echo "<script>window.open('procurement_request.php','_self')</script>";
            //           break;
            //       default:
            //           echo "<script>alert('Login failed. Please try again.')</script>";
            //           break;
            //   }
          } else {
            echo 'Incorrect password. Please try again.';
            //   echo "<script>alert('Incorrect password. Please try again.')</script>";
          }
      } else {
        echo 'User not found or account is deactivated';
        //   echo "<script>alert('User not found or account is deactivated.')</script>";
      }
?>