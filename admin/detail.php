<?php
$obj = new Register;
$res = $obj->fetch_record();

?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
 
   
    <!--main content start-->
  
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-3 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4><?php echo $res?></h4>
                  <h6>PRODUCTS</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-5 profile-text">
                <h3>GOLDSALE FATAFAT</h3>
                <h6>Administrator</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="img/side-ring.jpg" width="100"></p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
         
            <!-- /col-lg-12 -->
          </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
 
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->

</body>

</html>
