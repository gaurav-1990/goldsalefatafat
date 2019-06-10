<?php
include_once ("includes/header.php");
include_once ("functions.php");
$obj = new Register;
$result = $obj->fetch_data();
?>
<style type="text/css">
table {
  background: #fff none repeat scroll 0 0;
  border-bottom: 1px solid #ebebeb;
  margin: 0 0 20px;
  width: 100%;
}
  tr {
  border-top: 1px solid #ebebeb;
}
  tr td {
  padding: 10px 20px 11px;
  /* white-space: nowrap; */
}
 tr td:first-child {
  border-right: 1px solid #ebebeb;
  color: #333;
  font-weight: 700;
  width: 30%;
  white-space: nowrap;
}
 tr.even {
  background: #fdfdfd none repeat scroll 0 0;
}

</style>
<section>
    <div class="slider-active owl-carousel">
        <div>
            <img src="img/com.jpg" alt=""/>
        </div> 
        <div>
            <img src="img/banner/shop-banner-1.jpg" alt=""/>

        </div> 
    </div>
</section>

<div class="gold-heading">
    <h2>Gold Sale Fatafat <span class="blink_me">New Product </span></h2>
</div>

<!-- breadcrumb-banner-area-end -->
<!-- shop-area start -->
<?php
foreach ($result as $key => $res) {
    $p_id = $res['pid'];
    $result2 = $obj->image($p_id);
    $img2 = $result2['img'];
    ?>       
    <div class="shop-area pt-50">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">                   
                    <div class="product-zoom">
                        <!-- Tab panes -->
                        <div class="tab-content">


                            <div class="tab-pane active" >
                                <div class="pro-large-img">
                                    <img src="admin/<?= $img2 ?>" alt="" />
                                    <a class="popup-link" href="admin/<?= $img2 ?>">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>




                        </div>



                        <div class="details-tab owl-carousel">
                            <?php
                            $result3 = $obj->all_images($p_id);
                            foreach ($result3 as $res3) {
                                $img3 = $res3['img'];
                                ?>
                                <div class="active"><a href='javascript:void(0)' data-toggle="tab"><img class="img-replace" src="admin/<?= $img3 ?>" alt="" /></a></div>


                            <?php }?>
                        </div>  

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <div class="product-details">

                        <h2 class="pro-d-title"><?php echo $res['p_name']; ?></h2>

                        <?php
                        if ($res['cond'] != "") {
                            ?>
                            <div class="pro-ref">

                                <p>
                                    <label>Condition: </label> 
                                    <span><?php echo $res['cond']; ?></span>
                                </p>                            
                            </div>
                        <?php } ?>

                        <div class="price-box">
                            <?php
                            if ($res['sell_price'] != "" || $res['actual_sell_price'] != "") {
                                ?>
                                <span class="selling">Selling Price : <cut><i class="fa fa-inr" aria-hidden="true"></i><?php echo $res['sell_price']; ?></cut>  <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $res['actual_sell_price']; ?></span></br>
                                <?php
                            }
                            if ($res["in_stock"] == "1" && $res['quantity1'] == "") {
                                ?>

                               
                            <?php } else {
                                ?>
                                <h4 class="tec" style="
                                    font-size: 20px;
                                    color: #cd842a;
                                    ">Out Of Stock </h4>
                                <?php }
                                ?>
                        </div>

                        <div class="price-box">
                            <?php
                            if ($res['offer_price'] != "") {
                                ?>
                                <span class="offer">Offer Price : <i class="fa fa-inr" aria-hidden="true"></i> <blink class="blink_me"><?php echo $res['offer_price']; ?></blink></span>
                                </br>
                                <?php
                            }
                            if ($res["in_stock"] == "1" && $res['quantity2'] == "") {
                                ?>
                                
                            <?php } ?>
                        </div>

                        <div class="closed">
                            <a href="#">Booking: <?= $res["is_booking"] == "1" ? "Open" : "Closed" ?></a>
                        
                            <a href="#">Closing Time: <?= $res['b_close'];?></a>
                        </div>


                        <div class="short-desc">
                            <p><?php echo $res['description']; ?></p>
                        </div>

                        <div class="box-quantity">
                            <form action="#">

                                <a href="tel:+<?= $res["phone_no"] ?>">Call For Purchase: <?= $res["phone_no"] ?></a>
                            </form>
                        </div>
                        <div class="book-time">
                            <?= $res["b_open"] != "" ? " <p> Booking Open: " . $res["b_open"] . "</p>" : "" ?>  
                           <!--
                            <?= $res["b_open"] != "" ? " <p> Booking Closed: " . $res["b_close"] . "</p>" : "" ?>  
                            -->
                        </div>
                        <div class="color-list">
                            <a href="#"></a>
                            <a href="#"></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="pro-info-area ptb-30">
        <div class="container">
            <div class="pro-info-box">
                <!-- Nav tabs -->
                <ul class="pro-info-tab" role="tablist">
                    <li class="active"><a href="#home3<?= $key ?>" data-toggle="tab">Metal Details </a></li>
                    <li><a href="#profile3<?= $key ?>" data-toggle="tab">Product Info</a></li>
                    <li><a href="#messages3<?= $key ?>" data-toggle="tab">Diamond Info</a></li>
                    <li><a href="#services<?= $key ?>" data-toggle="tab">Services</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home3<?= $key ?>">
                        <div class="pro-desc">


                            <?php echo $res['metal_details']; ?>

                        </div>
                    </div>
                    <div class="tab-pane" id="profile3<?= $key ?>">
                        <div class="pro-desc">


                            <?php echo $res['product_info']; ?>

                        </div>
                    </div>
                    <div class="tab-pane" id="messages3<?= $key ?>">
                        <div class="pro-desc">



                            <?php echo $res['diamond_info']; ?>

                        </div>
                    </div>
                    <div class="tab-pane" id="services<?= $key ?>">
                        <div class="pro-desc">


                            <?php echo $res['services']; ?>

                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>
<?php } ?>

<?php include_once ("includes/footer.php"); ?>