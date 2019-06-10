<?php
include_once ("../functions.php");

$obj = new Register;

extract($_REQUEST);
if (isset($save)) {
    $obj->insert($_REQUEST);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="add_prod">
  <h4>ADD PRODUCT</h4>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-md-3">
                <label>Product Name</label>
                <input type="text" class="form-control" name="pname">
            </div>

            <div class="form-group col-md-3">
                <label>Phone</label>
                <input type="text" placeholder="Phone Number" class="form-control" name="phone_no"> 
            </div>

              <div class="form-group col-md-3">
                <label>Booking Open Time   </label>
                <input type="text" class="form-control" name="b_open" placeholder="Booking Open Time" value="" />
            </div>
            <div class="form-group col-md-3">
                <label>Booking Close Time   </label>
                <input type="text" class="form-control" name="b_close" placeholder="Booking Close Time" value="" />
            </div>

            
            
        </div>
<div class="row">
  
    <div class="form-group col-md-2">
        <label class="check-dtl">Is in stock
            <input type="checkbox" checked="checked" value="1" name="in_stock">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class="form-group col-md-2">
        <label class="check-dtl">Is Booking Open
          <input type="checkbox" checked="checked" value="1" name="is_booking">
          <span class="checkmark"></span>
        </label>
    </div>

              <!--   <label>
                    <input type="checkbox" value="1"   name="in_stock" />
                    Is in stock
                </label>
            </div>
            <div class="form-group col-md-2">
                <label>
                    <input type="checkbox" value="1"   name="is_booking" />
                    Is Booking Open 

                </label> -->
        
</div>

        <div class="row">
            
            
            <div class="form-group col-md-2">
                <label>Selling Price</label>
                <input type="text" class="form-control" name="sp">	
            </div>
            <div class="form-group col-md-3">
                <label>Actual Selling Price</label>
                <input type="text" class="form-control" name="asp">	
            </div>
            <div class="form-group col-md-2">
                <label>Quantity</label>
                <input type="text" class="form-control" name="q1">	
            </div>


            <div class="form-group col-md-3">
                <label>Offer Price</label>
                <input type="text" class="form-control" name="op">	
            </div>
            <div class="form-group col-md-2">
                <label>Quantity</label>
                <input type="text" class="form-control" name="q2">	
            </div>
            <div class="form-group col-md-6">
                <label>Description</label>
                <input type="text" class="form-control" name="desc">	
            </div>

            <div class="form-group col-md-6">
                <label>Condition</label>
                <input type="text" class="form-control" name="cond">    
            </div>

            <div class="form-group col-md-6">
                <label>Metal Details</label>
                <textarea class="form-control" name="md"></textarea>
                <script>
                    CKEDITOR.replace('md');
                </script>	
            </div>
            <div class="form-group col-md-6">
                <label>Product Info</label>
                <textarea class="form-control" name="pi"></textarea>
                <script>
                    CKEDITOR.replace('pi');
                </script>	
            </div>
            <div class="form-group col-md-6">
                <label>Diamond Info</label>
                <textarea class="form-control" name="di"></textarea>
                <script>
                    CKEDITOR.replace('di');
                </script>	
            </div>
            <div class="form-group col-md-6">
                <label>Services</label>
                <textarea class="form-control" name="ser"></textarea>
                <script>
                    CKEDITOR.replace('ser');
                </script>	
            </div>

            <div class="form-group col-md-5">
                <label>ADD IMAGES:</label><br>
                <div id="filediv"><input name="file[]" type="file" id="file"/></div>
                <input type="button" id="add_more" class="upload btn-xs btn-info for-sbt2" value="Add More Files"/>
            </div>

            <div class="col-md-12">
                <input type="submit" name="save" class="for-sbt" value="SUBMIT">
            </div>
        </div>   
    </form>
    </div>
</body>
</html>