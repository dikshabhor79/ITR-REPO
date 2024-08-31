<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Notes by-eLEARNING</title>
    <link rel="icon" href="./applicationimg/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link href="p.css" rel="stylesheet">
   <link href="notes.css" rel="stylesheet">
</head>
<body>
<?php 
  include('connection.php');
?>

     <!-- NAVBAR CODE -->

   <nav class="navbarmain">
     
    <div class="logo"><a href="main.php">
       <img src="./applicationimg/logo.jpg" style="height:auto; width: 90px; margin:0px 25px 0px 25px; "></a>
    </div>
  
   <ul id="navbarMenu">
    
       <li><a href="main.php" class="active">Home</a></li>
       <li><a href="About.php"target="_blank">About Us</a></li>
       <li><a href="coursemain.php"target="_blank">Courses</a></li>
       <li><a href="Notes.php"target="_blank">Notes</a></li>    
      <li><a href="login.php"target="_blank">Logout</a></li>
   </ul>
   
</nav>
    <div class="header">
        <h1> Learn and Download Notes by e-LEARNING</h1>
    </div>
    
    <div class="nav-bar">
        <a href="./Notes/HTML Notes.pdf" target="_blank">HTML</a>
        <a href="./Notes/CSS NOTES.pdf"target="_blank">CSS</a>
        <a href="./Notes/Java_Notes.pdf"target="_blank">Java</a>
        <a href="./Notes/JavaScript Notes.pdf"target="_blank">JavaScript</a>
        <a href="./Notes/Bootstrap Notes.pdf"target="_blank">Bootstrap</a>
        <a href="./Notes/jQuery Notes.pdf"target="_blank">jQuery</a>
        <a href="./Notes/C++ Notes .pdf"target="_blank">C++</a>
        <a href="./Notes/PHP Notes.pdf"target="_blank">PHP</a>
        <a href="./Notes/Tailwind notes.pdf"target="_blank">Tailwind</a>
    </div>
    <div class="container">
        <div class="notes-section">
            <div class="note-card">
                <img src="./applicationimg/html.jpg"  alt="HTML Notes">
                <h2>HTML Notes</h2>
                <div class="down1">
               <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/HTML Notes.pdf" target="_blank">PDF Notes</a></button>
              <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/HTML Notes.pdf" download="HTML NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
              </div>
            </div>
            <div class="note-card">
                <img src="./applicationimg/css notes.jpg" alt="CSS Notes">
                <h2>CSS Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/CSS NOTES.pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/CSS NOTES.pdf" download="CSS NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
            </div>
            <div class="note-card">
                <img src="./applicationimg/java notes.jpg" alt="Java Notes">
                <h2>Java Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/Java_Notes.pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/Java_Notes.pdf" download="JAVA NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
              </div>
            <div class="note-card">
                <img src="./applicationimg/js.jpg" alt="JavaScript Notes">
                <h2>JavaScript Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/JavaScript Notes.pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/JavaScript Notes.pdf" download="JavaScript NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
                 </div>
            <div class="note-card">
                <img src="./applicationimg/bootstrap.jpg" alt="Bootstrap Notes">
                <h2>Bootstrap Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/Bootstrap Notes.pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/Bootstrap Notes.pdf" download="Bootstrap NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
                 </div>
            <div class="note-card">
                <img src="./applicationimg/jquery,jpg.png" alt="jQuery Notes">
                <h2>jQuery Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/jQuery Notes.pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/jQuery Notes.pdf" download="jQuery NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
                  </div>
            <div class="note-card">
                <img src="./applicationimg/cpp.jpg" alt="C++ Notes">
                <h2>C++ Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/C++ Notes .pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/C++ Notes .pdf" download="C++ NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
                </div>
            <div class="note-card">
                <img src="./applicationimg/php notes.jpg" alt="PHP Notes">
                <h2>PHP Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/PHP Notes.pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/PHP Notes.pdf" download="PHP NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
                </div>
            <div class="note-card">
                <img src="./applicationimg/tailwind12.jpg" alt="Tailwind Notes">
                <h2>Tailwind Notes</h2>
                <div class="down1">
                    <button class="btn btn-defaut text-center col-md-12"> <a href= "./Notes/Tailwind notes.pdf" target="_blank">PDF Notes</a></button>
                   <button class="btn btn-defaut text-center col-md-12"> <a href="./Notes/Tailwind notes.pdf" download="Tailwind NOTES" class="downloadb">Download<i class="fa-solid fa-download"></i></a></button>
                   </div>
                </div>
        </div>
    </div>

    
<!-- myfooter -->


<footer>
    <div class="footer-main">
  <div class="footer-container">
     
        <div class="footer1">
         
          <p class="footer-pe"><i class="fas fa-book"></i> E-LEARNING</p>
          <p class="p1">Where eduction meets real-world needs</p>
        </div>
  
            <div class="empty-footer"> </div>
  
           <!-- Quick Links -->
        <div class="footer2">
          <p class="footer-p">Quick Links</p>
            <ul style="list-style-type: none;">
           
               <li><a href="contact.php"target="_blank">&#x27A2; &nbsp; Contact Us</a></li>
               <li><a href="term&condition.html">&#x27A2; &nbsp; Term & Conditions</a></li>
               <li><a href="FAQs&help.html">&#x27A2; &nbsp; FAQs & Help</a></li>
                </ul>
        </div>
  
              <div class="empty-footer"> </div>
  
            <!-- Helpful Links -->
        <div class="footer3">
          <p class="footer-p">Helpful Links</p>
          <ul style="list-style-type: none;">
             <li><a href="helpcenter.html" >&#x27A2; &nbsp; Help Center</a></li>
             <li><a href="contact.php">&#x27A2;  &nbsp; Ask Questions</a></li>
             <li><a href="privacy&policy.html">&#x27A2; &nbsp; privacy policy</a></li>
         
         </ul>
         </div>
  
             <div class="empty-footer"> </div>
  
             <!-- Gallery-->
        <div class="footer4">
          <p class="footer-pe">Gallery</p>
  
            <div class="footer-img">
               <img src="./applicationimg/fimg1.jpg">
               <img src="./applicationimg/fimg2.jpg">
               <img src="./applicationimg/fimg3.jpg">
            </div>
  
             <div class="footer-img">
               <img src="./applicationimg/fimg4.jpg">
               <img src="./applicationimg/fimg5.jpg">
               <img src="./applicationimg/fimg6.jpg">
            </div>
         </div>
    </div>
   </div>
   <hr>
  <div class="footer5">
     <div class="footer-links">
       <div class="socialicons">
           <a href="#"><i class="fa-brands fa-twitter"></i></a>
           <a href="#"><i class="fa-brands fa-facebook"></i></a>
           <a href="#"><i class="fa-brands fa-instagram"></i></a>
           <a href="#"><i class="fa-brands fa-google-plus"></i></a>
       </div>
      <div class="footernav">
        <ul style="list-style-type: none; display: flex; align-items: center; justify-content: center;">
           <li><a href="main.php" target="_blank">Home</a></li>
           <li><a href="About.php" target="_blank">About Us</a></li>
           <li><a href="coursemain.php"target="_blank">Courses</a></li>
           <li><a href="contact.php"target="_blank">Contact Us</a></li>
         </ul>
       </div>
       <div class="footerButton" >
        <p>Copyright &copy;2024;Designed by <span class="designer">Our Team</span></p>
       </div>
     </div>  
   </div>
  </div>
  </div>
  </div>
  
  
  
  </footer>
  
  
  
    <script src="https://kit.fontawesome.com/f8ela90484.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </body>
  </html>   