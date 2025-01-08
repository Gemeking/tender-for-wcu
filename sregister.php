<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"tender");
 session_start();
if(isset($_SESSION['user_id']))
 {
	
  $mail=$_SESSION['user_id'];
   $n=$_SESSION['username'];
 } else {

 ?>
<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='index.php');
 </script>
 <?php
 }
 ?>
 			<?php 

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"tender");
$result = mysqli_query($con,"SELECT * FROM request where status='pending...' "); 
//$num_rows = mysqli_num_rows($result); 
$count1=($result? mysqli_affected_rows($con):0);


?>
<?php 

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"tender");
$result = mysqli_query($con,"SELECT * FROM feedback where status='pending...' "); 
$count=($result? mysqli_affected_rows($con):0);


?>

<!DOCTYPE html>
<html>
<head>
 <title>Open Tender For WCU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
 <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css1/mystyle1.min.css">
   <script src="js1/jquery.min.js"></script>
      <script src="js1/script.min.js"></script>
 <link href="css/animate/animate.min.css" rel="stylesheet">
 <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
  <script src="lib/wow/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login33.css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
   <script>
    $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your campany name'
                    }
                }
            },
             tinno: {
                validators: {
                     stringLength: {
                        min: 10,
                    },
                    notEmpty: {
                        message: 'Please enter your Tin number'
                    }
                }
            },
			
			fax: {
                validators: {
                     stringLength: {
                        min: 10,
                    },
                    notEmpty: {
                        message: 'Please enter fax number'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            telephone: {
                validators: {
                  stringLength: {
                        min: 10, 
                        max: 13,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
			 city: {
                validators: {
                    notEmpty: {
                        message: 'Please select your city'
                    }
                }
            },
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
  
  
  </script>
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:1700px;color: #fff; }
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
 
.prof{
border-radius:50px;
height:700px;
}
.img-thumnail{border-radius:450px;}
.use{font-size:18px;}
.container{margin-top:60px;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
     <h3> <a class="navbar-brand1" href="#">Web Based Open tender</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
           <li> <a href="supplier.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
          
    <li> <a href="sbiddocument.php"  target="iframe2">Bid_Document</a></li>

      <li><a href="supplierwins.php"  target="iframe2">Winner supplier</a></li>
	  <li> <a href="supplierfails.php"  target="iframe2">supplier Fail</a></li>
		
            </ul>
          </li>
	
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofileps.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
            
			   	    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  

<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<?php 
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST['update'])){
$id=$_POST['id'];
	    $sql ="SELECT no FROM biddocument WHERE no='$id'  AND status='open'";
	    $result = mysqli_query($mysql,$sql); 
		if(!$result){
		die("couldnot execute query".mysqli_error($mysql));}
		$rowCheck = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
IF($row=$id){
$query ="SELECT * FROM biddocument  where no='$id' AND status='open'"; 
$result = mysqli_query($mysql,$query);
if(!$result){echo "erroram".mysqli_error($mysql);}
while($row = mysqli_fetch_array($result))
{
$no=$row['no'];
$itemname=$row['item_name'];
$itemmodel=$row['Discription'];
$supbirr=$row['supplier_birr'];
$cdate=$row['close_date'];
$odate=$row['open_date'];
$date=$row['date'];
$status=$row['status'];
}
}
else{
echo"incorrect roll number";
}}

?>
<div class="container">

    <form class="well form-horizontal" action="registerdsupplier.php " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<center><fieldset>
    <legend>Supplier Registration Form:</legend>
<div class="form-group">
  <label class="col-md-4 control-label">Campany Name:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  type="text" class="form-control" name="cname" placeholder="ente campany name" required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">TIN NO:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input class="form-control" type="text" name="tinno" placeholder="enter identification no" >
    </div>
  </div>
</div>
 <div class="form-group"> 
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="city" class="form-control selectpicker">
      <option value="">Select your city</option>
      <option > Hossana</option>
      <option > Hawassa</option>
      <option > Gonder</option>
      <option>Duramie</option>
      <option>wolayta sedo</option>
      <option >Adigrat</option>
      <option >Adwa</option>
      <option >Agaro</option>
      <option >Aksum</option>
      <option >Bahirdar</option>
      <option >Alaba Kulito</option>
      <option >Alamata</option>
      <option >Alemata</option>
	  <option > Aleta Wendo    </option>
	  <option >  Ambo   </option>
	  <option > Arba Minch    </option>
	  <option > Areka    </option>
	  <option > Arsi Negele    </option>
	  <option >Asella     </option>
	  <option > Adama</option>
    </select>
  </div>
</div>
</div>
  <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Phone number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="telephone" placeholder="enter your mobile number" class="form-control" type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Fax:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fax" placeholder="enter fax number" class="form-control"  type="text">
    </div>
  </div>
</div>
<fieldset>
<legend>Item Discription</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">No</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  readonly name="no" placeholder="" value="<?php echo $no?>"; class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Market birr</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input readonly name="mbirr" placeholder="fill by procurement team" class="form-control"  type="text">
    </div>
  </div>
</div>
  
<div class="form-group">
  <label class="col-md-4 control-label">Prepare Date</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input readonly class="form-control" type="date" name="date" placeholder=" date of prepared" value="<?php echo $date?>"; required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Supplier birr</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="supbirr" placeholder="fill by supplier" value="<?php echo $supbirr?>"; class="form-control"  type="text">
  
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Item Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  readonly name="itemname" placeholder=" name of item"  value="<?php echo $itemname?>"; class="form-control"  type="text">
  
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Item Model</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  name="itemmodel" placeholder="model of the item" value="<?php echo $itemmodel?>"; class="form-control"  type="text">
  
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">open Date</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input readonly  type="date" name="odate" placeholder=" date of tender opend" value="<?php echo $odate?>"; class="form-control"required   >
  
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Closed Date</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  readonly type="date"  class="form-control" name="cdate" placeholder=" date of tender closed" value="<?php echo $cdate?>"; required >
  
    </div>
  </div>
</div><!--
<div class="form-group">
  <label class="col-md-4 control-label">Fill Date</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input  type="date" name="fdate" placeholder=" date of supplier register" required class="form-control">
  
    </div>
  </div>
</div>-->
<div class="form-group">
  <label class="col-md-4 control-label">Status</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
  <input readonly  type="text" name="status" placeholder="model of the item" value="<?php echo $status?>";  class="form-control"  >
  
    </div>
  </div>
</div>
<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<button name="register" type="submit" class="btn btn-success active" >Register <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	
	<button type="reset" class="btn btn-danger active ">Reset</button>
  
  </div>
</div>

</fieldset>
</form>
</div> </fieldset></center>
</div>

<footer id="footer">
   

    <div class="container">
      <div class="copyright">
        © Copyright <strong>Wachemo University Open Tender system | 2024</strong>. All Rights Reserved
      </div>
      <div class="credits"> 
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
     <!-- Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade--> 
      </div>
   
                        </div>
  </footer>
       
	 
</body>

</html>
