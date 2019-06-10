<?php
echo "<table id='example' class='table table-hover table-striped table-info table-bordered'>

		<caption>LIST OF PRODUCTS</caption>

		<thead>
		<tr>
		<th class='text-center'>PRODUCT NAME</th>
		<th class='text-center'>CONDITION</th>
		<th class='text-center'>SELLING PRICE</th>
		<th class='text-center'>ACTUAL SELLING PRICE</th>
		<th class='text-center'>QUANTITY</th>
		<th class='text-center'>OFFER PRICE</th>
		<th class='text-center'>QUANTITY</th>
		<th class='text-center'>UPDATE</th>
		<th class='text-center'>DELETE</th>
		</tr></thead><tbody>";

		include_once ("../functions.php");

		$obj = new Register;
		$res = $obj->fetch_data();
		
		foreach ($res as $val)
		{
    		//print_r($val);

    		@$id=$val['pid'];
			
			
			//$img=$res['main_img'];
			//$cat=$res['cat_name'];

			echo "<tr>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='PRODUCT NAME'>".$val['p_name']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='CONDITION'>".$val['cond']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='SELLING PRICE'>".$val['sell_price']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='ACTUAL SELLING PRICE'>".$val['actual_sell_price']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='QUANTITY'>".$val['quantity1']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='OFFER PRICE'>".$val['offer_price']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='QUANTITY'>".$val['quantity2']."</a></td>";
				//echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='IMAGE'><img src='img/$cat/$img' width='100px'></a></td>";
				echo "<td class='text-center'><a href='dashboard.php?page=update_product&id=$id' data-toggle='tooltip' title='EDIT'><img src='pro_img/edit.png'></a></td>";
				echo "<td class='text-center'><a href='delete_product.php?id=$id' data-toggle='tooltip' title='DELETE'><img src='pro_img/icon-delete.png'></a></td>";
			echo "</tr>";
		}

echo "</tbody></table>";
?>


