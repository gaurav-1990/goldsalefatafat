<?php
include_once ("../functions.php");

$id = $_GET['id'];

$obj = new Register;
$res = $obj->getUpdate($id);

if (isset($_POST["save"])) 
{


    $obj->update($_POST, $id);
    $res = $obj->getUpdate($id);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="add_prod">
    <center><u><h4>UPDATE PRODUCT</h4></u></center><br>
    <form enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="form-group col-md-3">
                <label>Product Name</label>
                <input type="text" class="form-control" name="pname" value="<?php echo $res['p_name']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label>Phone</label>
                <input type="text" value="<?=$res["phone_no"]?>" placeholder="Phone Number" class="form-control" name="phone_no">
            </div>

            <div class="form-group col-md-3">
                <label>Booking Open Time   </label>
                <input type="text" class="form-control" name="b_open" placeholder="Booking Open Time" value="<?= $res["b_open"] ?>" />
            </div>

            <div class="form-group col-md-3">
                <label>Booking Close Time   </label>
                <input type="text" class="form-control" name="b_close" placeholder="Booking Close Time" value="<?= $res["b_close"] ?>" />
            </div>
</div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label class="check-dtl">Is in stock
                        <input type="checkbox" value="1" <?= $res["in_stock"] == "1" ? "checked" : "" ?>  name="in_stock" />
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-group col-md-2">
                    <label class="check-dtl">Is Booking Open
                      <input type="checkbox" value="1" <?= $res["is_booking"] == "1" ? "checked" : "" ?> name="is_booking" />
                      <span class="checkmark"></span>
                    </label>
                </div>
            </div>

        

        <div class="row">
            
            <div class="form-group col-md-2">
                <label>Selling Price</label>
                <input type="text" class="form-control" name="sp" value="<?php echo $res['sell_price']; ?>">	
            </div>
            <div class="form-group col-md-3">
                <label>Actual Selling Price</label>
                <input type="text" class="form-control" name="asp" value="<?php echo $res['actual_sell_price']; ?>">	
            </div>
            <div class="form-group col-md-2">
                <label>Quantity</label>
                <input type="text" class="form-control" name="q1" value="<?php echo $res['quantity1']; ?>">	
            </div>
            <div class="form-group col-md-3">
                <label>Offer Price</label>
                <input type="text" class="form-control" name="op" value="<?php echo $res['offer_price']; ?>">	
            </div>
            <div class="form-group col-md-2">
                <label>Quantity</label>
                <input type="text" class="form-control" name="q2" value="<?php echo $res['quantity2']; ?>">	
            </div>
            <div class="form-group col-md-6">
                <label>Description</label>
                <input type="text" class="form-control" name="desc" value="<?php echo $res['description']; ?>">	
            </div>
            <div class="form-group col-md-6">
                <label>Condition</label>
                <input type="text" class="form-control" name="cond" value="<?php echo $res['cond']; ?>">    
            </div>
            <div class="form-group col-md-6">
                <label>Metal Details</label>
                <textarea class="form-control" name="md"><?php echo $res['metal_details']; ?></textarea>
                <script>
                    CKEDITOR.replace('md');
                </script>	
            </div>
            <div class="form-group col-md-6">
                <label>Product Info</label>
                <textarea class="form-control" name="pi"><?php echo $res['product_info']; ?></textarea>
                <script>
                    CKEDITOR.replace('pi');
                </script>	
            </div>
            <div class="form-group col-md-6">
                <label>Diamond Info</label>
                <textarea class="form-control" name="di"><?php echo $res['diamond_info']; ?></textarea>
                <script>
                    CKEDITOR.replace('di');
                </script>	
            </div>
            <div class="form-group col-md-6">
                <label>Services</label>
                <textarea class="form-control" name="ser"><?php echo $res['services']; ?></textarea>
                <script>
                    CKEDITOR.replace('ser');
                </script>	
            </div>

            <?php
            ?>
            <div class="clear-both"></div>
            <div class="admin-img-mid">
                <h4>UPDATE IMAGE:</h4>
                <?php
                $result = $obj->all_images($id);
                foreach ($result as $res2) {
                    $img = $res2['img'];

                    //while($res2=$stmt->fetch())
                    //{
                    //	$img_id=$res2['id'];
                    //    $img=$res2['img'];
                    //  
                    ?>
                    <div class=" col-md-3">
                        <div class="admin-img-upload ">
                            <label> 
                                <img src="<?= $img ?>" > 
                                <i class="fa fa-times" onclick="deletePImage(this, '<?= $res2['id'] ?>')" aria-hidden="true"></i>
                            </label>

                            <input type="hidden" name="hide_img1[]" value="<?= $res2['img'] ?>"></input>  
                        </div>  
                    </div>
                    <?php
                }
                ?>
                <div class="form-group col-md-12">
                    <input class="for-sbt2" type="button" id="add_more" class="upload btn btn-xs btn-info" value="Add More Files"/>
                </div>
                <div class="form-group col-md-12">
                    <input class="for-sbt" type="submit" name="save" value="SUBMIT">
                </div>
            </div>
        </div>

    </form>
    </div>
</body>
</html>