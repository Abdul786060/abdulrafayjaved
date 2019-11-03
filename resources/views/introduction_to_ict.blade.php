<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- links end -->

    <!-- links of data table -->
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- end links of data table -->

    <!-- css link -->
    <link rel="stylesheet" href="css/ictstyle.css">
    <!-- css link end -->

    <!-- style -->
  <style>
  /* images and overlay start */
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
    height: 300%;
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
        
          height: 700%;
        }
        .logoo{
          width: 300px;
        }
    }
    
    @media screen and (max-width: 479px) {
        /* start of phone styles */
        /* It's possible to hide the image if the screen becomes too small */
        .hero {
          min-width: 15%;
          height: 470%;
        }
        .logoo{
          width: 300px;
        }
    
    
    }
    
/* image and over end */

.navrad{
    border-radius: 7px;
}

/* file upload start */
.filechange{
  text-align: left;
}
/* file upload end */

/* table start */
.firstr{
padding-top: 10px;
padding-bottom: 10px;
  border-style: solid;
  border-width: 10px;
  border-radius: 5px;
  border-color: white;
}

.headtable{
 
  color: white;
}

.tablerad{
  border-radius: 7px;
}
/* table end */
  </style>
    <!-- style -->
</head>
<body>
   <!-- header -->
 
  <!-- header end -->
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

            <!-- subject detail start -->
              <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <h3 style="color: white; text-align: left;"><b>Introduction to ICT</b></h3>
                            <h6 style="color: white; text-align: left;"><b>COURSE NO: CSC-101</b></h6>
                            <h6 style="color: white; text-align: left;"><b>CREDITS HOURS: 3</b></h6>
                        </div>
                    <div class="col-lg-3 col-md-1"></div>
                        <div class="col-lg-5 col-md-3 ">
                            <div class="row">
                            <div class="con bg-info text-center navrad pr-3 pl-3 mt-1 ml-3">
                            <a href="#"><img src="images/home-icon.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                <p style="color: white;">Home</p></a>

                            </div>
                            <!-- last end -->
                            <!-- insertion -->
                            <div class="con bg-light text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/insert.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p style="color: black;">Insert</p></a>


                                        <!-- modal start -->
                                        
     
    
  
                                        <!-- The Modal -->
                                        <div class="modal" id="myModal" data-backdrop="false">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                              <!-- Modal Header -->
                                              <div class="modal-header">
                                                <h4 class="modal-title"><img class="logoo" src="images/help.png" alt=""></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              </div>
                                              
                                              <!-- Modal body -->
                                              <div class="modal-body">
                                               <!-- form start -->
                                               <form action="/examples/actions/confirmation.php" method="post">
                                                <h2 class="text-center">Share the Notes</h2> 
                                                <div class="form-group">
                                                        <input type="text" class="form-control" value="Introduction to ICT" readonly>
                                                    </div>      
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Teacher Name" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Topic Name" required="required">
                                                </div>
                                                <div class="form-group">
                                                       
                                                        <textarea class="form-control" rows="3" id="comment" placeholder="Description of the Topic"></textarea>
                                                      </div>
                                                      <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="google drive link" required="required">
                                                    </div>
                                                   <!-- file choosen -->
                                                   <div class="custom-file mb-3 filechange">
                                                      <input type="file" id="myFile" name="filename2">
  
                                                     
                                                     </div>
                                                   <!-- file choosen end -->

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-block">DONE</button>
                                                </div>
                                                  </form>
                                                <!-- form end -->
                                              </div>
                                              
                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <!-- modal end -->
                                    </div>
                            <!-- end insertion -->

                              <!-- view -->
                              <div class="con bg-light text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a href="/ictvieww"><img src="images/vv.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p style="color: black;">View</p></a>
        
                                    </div>
                            <!-- end view -->
                             <!-- PROFILE-->
                             <div class="con bg-light text-center navrad pr-3 pl-3 ml-3 mt-1">
                              <a href="/profile"><img src="images/profile.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                  <p style="color: black;">Profile</p></a>
  
                              </div>
                      <!-- end PROFILE-->

                              <!-- logout -->
                              <div class="con bg-light text-center navrad pr-3 pl-3 ml-3 mt-1">
                                    <a href="/sofware_engineering"><img src="images/logout.png"class="inage mt-2" alt="no" width="40px" height="40px">
                                        <p style="color: black;">Logout</p></a>
        
                                    </div>
                            <!-- end logout -->
                            
                                </div>
                        </div>

                        

                    </div>
                    <!-- row end -->
                </div>
              <!-- subject detail and navbar end -->


              <!-- table pagination start -->
              <div class="container mb-5 mt-3 bg-light tablerad table-responsive">

                <table id="example" class="display nowrap" style="width:100%;">
                    <thead>
                      <!-- some upper change -->

                      <!-- end upper change -->
                      <tr><h5 class="text-center bg-info firstr" style="color: white;"><b>Helping Resources</b></h5></tr>
                      <tr class="text-center bg-light headtable" >
                        <th style="background-color: rgb(20, 16, 51);">Teacher Name</th>
                        <th style="background-color: rgb(20, 16, 51);">Topic Name</th>
                        <th style="background-color: rgb(20, 16, 51);">Description</th>
                        <th style="background-color: rgb(20, 16, 51);">Link</th>
                        <th style="background-color: rgb(20, 16, 51);">Action</th>
                      </tr>
                    </thead>

                    <tbody>
                        <tr class="text-center bg-light">
                          <td> ali</td>
                          <td>HexaDecimal into Binary</td>
                          <td>In this file we have some imported example which is repeated in last few papers.</td>
                          <td>None</td>
                          <td><a href="#"><br>
                            <img src="images/download.png" alt="no" width="25px" height="25px"><p style="color: black;">Download</p>
                          </a></td>
                        </tr>

                        

                        <tr class="text-center" style="background-color: white;">
                            <td>Dr. Habib ur Rehman</td>
                            <td>HexaDecimal into Binary</td>
                            <td>In this file we have some imported example which is repeated in last few papers.</td>
                            <td>None</td>
                            <td><a href="#"><br>
                              <img src="images/download.png" alt="no" width="25px" height="25px"><p style="color: black;">Download</p>
                            </a></td>
                          </tr>

                          <tr class="text-center bg-light">
                              <td>Dr. Habib ur Rehman</td>
                              <td>HexaDecimal into Binary</td>
                              <td>In this file we have some imported example which is repeated in last few papers.
                                </td>
                              <td>None</td>
                              <td><a href="#"><br>
                                <img src="images/download.png" alt="no" width="25px" height="25px"><p style="color: black;">Download</p>
                              </a></td>
                            </tr>


                            <tr class="text-center" style="background-color: white;">
                                <td>Dr. Habib ur Rehman</td>
                                <td>HexaDecimal into Binary</td>
                                <td>In this file we have some imported example which is repeated in last few papers.</td>
                                <td>None</td>
                                <td><a href="#"><br>
                                  <img src="images/download.png" alt="no" width="25px" height="25px"><p style="color: black;">Download</p>
                                </a></td>
                              </tr>


                              <tr class="text-center bg-light">
                                  <td><b>Dr. Habib ur Rehman</b></td>
                                  <td><b>HexaDecimal into Binary</b></td>
                                  <td><b>In this file we have some imported example which is repeated in last few papers.</b></td>
                                  <td><b>None</b></td>
                                  <td><a href="#"><br>
                                    <img src="images/download.png" alt="no" width="25px" height="25px"><p style="color: black;"><b>Download</b></p>
                                  </a></td>
                                </tr>

                                <tr class="text-center" style="background-color: white;">
                                  <td>Dr. Habib ur Rehman</td>
                                  <td>HexaDecimal into Binary</td>
                                  <td>In this file we have some imported example which is repeated in last few papers.</td>
                                  <td>None</td>
                                  <td><a href="#"><br>
                                    <img src="images/download.png" alt="no" width="25px" height="25px"><p style="color: black;">Download</p>
                                  </a></td>
                                </tr>

                                <tr class="text-center bg-light">
                                  <td><b>Dr. Habib ur Rehman</b></td>
                                  <td><b>HexaDecimal into Binary</b></td>
                                  <td><b>In this file we have some imported example which is repeated in last few papers.</b></td>
                                  <td><b>None</b></td>
                                  <td><a href="#"><br>
                                    <img src="images/download.png" alt="no" width="25px" height="25px"><p style="color: black;"><b>Download</b></p>
                                  </a></td>
                                </tr>
                    </tbody>
                    <tfoot>
                        <tr class="text-center bg-light headtable" >
                            <th style="background-color: rgb(20, 16, 51);">Teacher Name</th>
                            <th style="background-color: rgb(20, 16, 51);">Topic Name</th>
                            <th style="background-color: rgb(20, 16, 51);">Description</th>
                            <th style="background-color: rgb(20, 16, 51);">Link</th>
                            <th style="background-color: rgb(20, 16, 51);">Action</th>
                          </tr>

                    </tfoot>
                  </table>

              </div>
              <!-- table pagination end -->

              </div>
              <!-- hero-overlay fiish -->
              </div>
              <!-- hero finish -->

<!-- script link -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
    
      "iDisplayLength": 7,
      "lengthMenu": [[3, 5 , 7], [3, 5, 7]],
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );

</script>

<!-- script link end -->

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