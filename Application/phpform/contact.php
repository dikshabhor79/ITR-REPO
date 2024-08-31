<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="./applicationimg/logo.jpg" type="image/jpg">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
    <?php 
    include('connection.php');
    ?>
    <section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Developing an e-learning platform web app involves creating an engaging online environment for learning. The contact us section is crucial as it allows users to reach out for support, feedback, or inquiries. </p>
    </div> 
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
            </div>
                <div class="text">
                <h3>Address</h3>
                <p>Mancher Pune-Nashik highway .<br>Pune-410503</p>
                </div>
            </div>
            
    <div class="box">
        <div class="icon">
            <i class="fa-solid fa-phone-volume"></i>
        </div>
        <div class="text">
        <h3>Phone</h3>
        <p>507-475-6094</p>
       </div>
    </div>

    <div class="box">
        <div class="icon">
            <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="text">
        <h3>Email</h3>
        <p>e-learning@gamil.com</p>
       </div>
       </div>
       </div>

    <div class="contactForm">
        <form method="post">
            <h2>Send Message</h2>
            <div class="inputBox">
                <input type="text" name="name"  required="required">
                <span>Full Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="email" required="required">
                <span>Email</span>
    </div>
    <div class="inputBox">
        <textarea name="question" required="required"></textarea>
        <span>Type your Message....</span>
        </div>
        <div class="inputBox">
            <input type="submit" class="btncontact" name="Save" value="Send">
        </div>
      </form>
    </div>
</div>

</section>

<?php
if(isset($_POST['Save'])){   
    $Name=$_POST['name'];
	$Emailid=$_POST['email'];
	$question=$_POST['question'];
 
// insert record
$SqlStudent="insert into formtbl(Name,Emailid,Question) values('".$Name."','".$Emailid."','".$question."')";
$ResStudent=mysql_query($SqlStudent);
  
    echo "<script> alert('Your Question send Successfully!!');window.location.assign('main.php') </script>";

}


?>



    
</body>
</html>