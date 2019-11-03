<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semester</title>

    <!-- links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- links -->

    <!-- css link -->
    <link rel="stylesheet" href="semesterstyle.css">
    <!-- css lik end -->


    <!-- style -->
    <style>
    body{margin:0;
    padding: 0;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgb(4, 4, 117);
    }
    .hero{
    background-image: url("images/a.jpg");
    background-size:cover;
    background-position:center;
    width: 100%;
    position:relative;
    background-attachment: fixed;
    height: 320%;
    z-index:0;
    display: block;
    }
    .hero-overlay{
    
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        
        background-color: rgba(30, 30, 117, 0.9);
       
        
       
        background-attachment: fixed;
        height: 100%;
        width: 100%;
    
    
    }
    
    
    
    
    
    
    
    
    
    
    
     /* start of desktop styles */
    
     @media screen and (max-width: 991px) {
        /* start of large tablet styles */
        .hero {
          min-width: 70%;
          height: 320%;
        }
    }
    
    @media screen and (max-width: 767px) {
        /* start of medium tablet styles */
        /* Adding a fixd/percentage min-width could ensure that the image doesn't get too small */
        .hero {
          min-width: 30%;
        
          height: 900%;
        }
        .logoo{
          width: 300px;
        }
    }
    
    @media screen and (max-width: 479px) {
        /* start of phone styles */
        /* It's possible to hide the image if the screen becomes too small */
        .hero {
          min-width: 10%;
          height: 620%;
        }
        .logoo{
          width: 300px;
        }
    
    }
    /* enddd */


    /* notice start */
    .notice{
        border-radius: 5px;
    }
    /* notice end */



    /* tam member */
#team {
    background: transparent;
    padding: 20px 0;
    
  }
  
  #team .member {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
    /* border-radius: 50%; */
    border-radius: 6px;
    overflow: hidden;
  }
  
  #team .member .member-info {
    opacity: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    transition: 0.2s;
  }
  
  #team .member .member-info-content {
    margin-top: 50px;
    transition: margin 0.2s;
  }
  
  #team .member:hover .member-info {
    background: rgba(255, 255, 255, 0.7);
    opacity: 10;
    transition: 0.4s;
  }
  
  #team .member:hover .member-info-content {
    margin-top: 0;
    transition: margin 0.4s;
  }
  
  #team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff;
  }
  
  #team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    color: #fff;
  }
  
  #team .member .social {
    margin-top: 15px;
  }
  
  #team .member .social a {
    transition: none;
    color: #fff;
  }
  
  #team .member .social a:hover {
    color: #007bff;
  }
  
  #team .member .social i {
    font-size: 18px;
    margin: 0 2px;
  }
/* end team ,member */
/* hover on technologies */
.hov :hover{
    background-image: linear-gradient(120deg,rgb(24, 21, 56),rgb(11, 9, 41));
   

}

/* end */


    </style>
    <!-- style -->
</head>
<body>
    <!-- header  -->
  
<div class="container-fluid hero">


 
    <div class="container-fluid hero-overlay">
    <div class="container">
      <div class="row">
          <div class="col-sm-6 mt-3 text-left" >
    
              <img src="images/logo.png" class="logoo" alt="no"/>
    
            </div>
          <div class="col-sm-6 mt-5 text-right">
    
              <img src="images/help.png" class="logoo" alt="no"/>
    
          </div>
          
          
          
          </div></div>
          <!-- container finish -->
          <!-- container for notice -->
          <div class="container mt-3">
            <div class="row">
                <div class="col-sm-12 bg-info text-center p-3 notice">
                    <h4 style="color:white;"><b>NOTICE</b></h4>
                </div>
                <!-- col-sm-12 end -->
            </div>
            <!-- row end -->
          </div>
          <!-- container notice end -->

         <!-- team section -->
<section id="team">
    <div class="container">
      <!-- <div class="section-header">
        <h3 style="text-align: center;" class="title">Team</h3>
        <p style="text-align: center;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div> -->

      <div class="row">

        <div class="col-lg-4 col-md-6 wow fadeInUp mt-5">
          <div class="member bg-info">
            <img src="images/ict.jpg" class="img-fluid" alt="" width="500px" height="500px">
            <h1 style="color: white;">Semester 1</h1>
            <div class="member-info">
              <div class="member-info-content">
               
                <P><a href="/introduction_to_ict" style="color: rgba(9, 32, 56, 0.7);"><b>Introduction to ICT</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Electric Circuit Analysis 1</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>English Comprehension and Composition</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Islamic Studies</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Pakistan Studies</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Introduction to Management</b></a></P>
                <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 1</b></h2> -->
              
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
          <div class="member bg-info">
            <img src="images/c.jpg" class="img-fluid" alt="" width="500px" height="500px">
            <h1 style="color: white;">Semester 2</h1>
            <div class="member-info">
              <div class="member-info-content">
            
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Discrete Structure</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Programming Fundamentals</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Professional Practises of IT</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Report Writting Skills</b></a></P>
                <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Electricity,Magnetism and Optics</b></a></P>
                <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 2</b></h2> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
            <div class="member bg-info">
              <img src="images/java.png" class="img-fluid" alt="" width="500px" height="500px">
              <h1 style="color: white;">Semester 3</h1>
              <div class="member-info">
                <div class="member-info-content">
                    
                    <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Object Oriented Programming</b></a></P>
                    <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Introduction to Software Engineering</b></a></P>
                    <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Digital Logic Design</b></a></P>
                    <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Calculus and Analytical Geometry</b></a></P>
                    <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Statistics and Probality Theory</b></a></P>
                    <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 3</b></h2> -->
                </div>
              </div>
            </div>
          </div>
        

      </div>

    </div>
  </section><!-- #team -->
<!-- end team section -->




<!-- second team section start-->
        <!-- team section -->
        <section id="team">
            <div class="container">
              <!-- <div class="section-header">
                <h3 style="text-align: center;" class="title">Team</h3>
                <p style="text-align: center;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
              </div> -->
        
              <div class="row">
        
                <div class="col-lg-4 col-md-6 wow fadeInUp mt-5">
                  <div class="member bg-info">
                    <img src="images/data.jpg" class="img-fluid" alt="" width="500px" height="500px">
                    <h1 style="color: white;">Semester 4</h1>
                    <div class="member-info">
                      <div class="member-info-content">
                        
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Communication Skills</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Data Structures and Algorithms</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Database System 1</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Object Oriented Software Engineering</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Multivariable Calculus</b></a></P>
                        <!-- <h2 style="text-align: center; color:rgba(9, 32, 56, 0.7) ;"><b>SEMESTER 4</b></h2> -->
                        
                      
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
                  <div class="member bg-info">
                    <img src="images/web.jpg" class="img-fluid" alt="" width="500px" height="500px">
                    <h1 style="color: white;">Semester 5</h1>
                    <div class="member-info">
                      <div class="member-info-content">
                       
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Operating System</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Data Communication and Data Network</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Scripting Languages</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Software Quality Engineering</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Software Requiement Engineering</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Linear Algebra</b></a></P>
                        <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 5</b></h2> -->
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
                    <div class="member bg-info">
                      <img src="images/and.png" class="img-fluid" alt="" width="500px" height="500px">
                      <h1 style="color: white;">Semester 6</h1>
                      <div class="member-info">
                        <div class="member-info-content">
                           
                            <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Modern Programming Languages</b></a></P>
                            <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Data Warehousing</b></a></P>
                            <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Software Project Management</b></a></P>
                            <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Finacial Accounting</b></a></P>
                            <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Software Construction</b></a></P>
                            <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 6</b></h2> -->
                        </div>
                      </div>
                    </div>
                  </div>
                
        
              </div>
        
            </div>
          </section><!-- #team -->
        <!-- end team section -->
<!-- second team section finish -->












<!-- third team section start-->
        <!-- team section -->
        <section id="team">
            <div class="container">
              <!-- <div class="section-header">
                <h3 style="text-align: center;" class="title">Team</h3>
                <p style="text-align: center;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
              </div> -->
        
              <div class="row">
        
                <div class="col-lg-4 col-md-6 wow fadeInUp mt-5">
                  <div class="member bg-info">
                    <img src="images/ai.jpg" class="img-fluid" alt="" width="500px" height="500px">
                    <h1 style="color: white;">Semester 7</h1>
                    <div class="member-info">
                      <div class="member-info-content">
                       
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Human Computer Interaction</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Data Mining</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Software Design and Architecture</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Software Engineering Economics</b></a></P>
                         <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Introduction to Sociology</b></a></P>
                        <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 7</b></h2> -->
                        
                      
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
                  <div class="member bg-info">
                    <img src="images/fypp.jpg" class="img-fluid" alt="" width="500px" height="500px">
                    <h1 style="color: white;">Semester 8</h1>
                    <div class="member-info">
                      <div class="member-info-content">
                        
                        <P><a href="#" style="color:rgba(9, 32, 56, 0.7);"><b>Formal Methods in Software Engineering</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Data Security and Encryption</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Project</b></a></P>
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>French</b></a></P>
                       
                        <P><a href="#" style="color: rgba(9, 32, 56, 0.7);"><b>Enterpreneurship</b></a></P>
                        <!-- <h2 style="text-align: center; color: rgba(9, 32, 56, 0.7);"><b>SEMESTER 8</b></h2> -->
                      </div>
                    </div>
                  </div>
                </div>
        
           
                
        
              </div>
        
            </div>
          </section><!-- #team -->
        <!-- end team section -->
<!-- third team section finish -->
          </div>
          <!-- hero overlay end -->
          </div>
          <!-- hero end -->


          
<footer>
    <div class="container-fluid p-1">
        <div class="container">
            <div class="col-lg-12 col-md-6 mt-2 text-center">
                  <p style="color: white;"><b>Comsats University Islammabad.</b></p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>