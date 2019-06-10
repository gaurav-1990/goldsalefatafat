<?php
include_once ("includes/header.php");
include_once ("functions.php");
$obj = new Register;
$result = $obj->fetch_data();
?>

<div class="about-setting">
    
	<div class="container">
	<div class="about-setting-in">
            
            <div class="row">
            <div class="col-md-8">
            <h2>Privacy policy</h2>
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including 
                        versions of Lorem Ipsum.
		</p>
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including 
                        versions of Lorem Ipsum.
		</p>
            </div>
                <div class="col-md-4">
                    <img src="img/porduct/side-ring.jpg" alt=""/>
                </div>
        </div>
		

	</div>
</div>

</div>
<?php include_once ("includes/footer.php"); ?>