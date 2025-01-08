<?php
session_start();
if(isset($_POST["register"])){
    // Assuming you have already retrieved the $status variable from your database
    // Check if the status is closed
    if ($status == 'Closed') {
        // Display a message indicating that the tender is already closed
        echo "<script>alert('The tender is already closed');</script>";
        // Redirect the user back to the previous page or any other appropriate action
        echo "<script>window.location='previous_page.php';</script>";
        // Stop further execution of the script
        exit;
    }
    
    // Proceed with form submission if the status is not closed
    $cname=$_POST['cname'];  
    $tinno=$_POST['tinno'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $tele=$_POST['telephone'];
    $fax=$_POST['fax'];
    $no=$_POST['no'];
    $date=$_POST['date'];
    $itemname=$_POST['itemname'];
    $itemmodel=$_POST['itemmodel'];
    $odate=$_POST['odate'];
    $cdate=$_POST['cdate'];
    $mbirr=$_POST['mbirr'];
    $supbirr=$_POST['supbirr'];
    $adate=$_POST['adate'];
    $res=$_POST['resultt'];
    $reason=$_POST['reason'];

    $mysql=mysqli_connect('localhost','root','',"tender");
    $db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
    
    $sql="INSERT INTO assessdsupplier (campany_name,tin_no,city,email,telephone,fax_no,no,prepare_date,item_name,item_model,market_birr,supplier_birr,open_date,close_date,assess_date,assess,reason,status) 
    VALUES('$cname','$tinno','$city','$email','$tele','$fax','$no','$date','$itemname','$itemmodel','$mbirr','$supbirr','$odate','$cdate',now(),'$res','$reason','pending...')";
    
    $sqlresult=mysqli_query($mysql,$sql);
    if(!$sqlresult){
        echo "".mysqli_error($mysql);
    }
    if($sqlresult){
        // Display success message and redirect to the assessment page
        echo"<script type='text/javascript'>alert('Supplier registered successfully!');window.open('assess.php','_self');</script>";
    } else {
        // Display error message if registration fails
        echo"<script type='text/javascript'>alert('Supplier registration failed!');</script>";
    }
}
?>
