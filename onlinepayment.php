<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>

<?php
	$login_check = Session::get('customer_login');
	if($login_check==false) {
		header('Location:login.php');
	}
?>

<div class="main">
	<div class="content">
		<div class="cartoption">		
			<div class="cartpage">
				<div class="order_page">
                    <h3 style="text-align:center; font-size:21px; color:#602D8D">Đang trong quá trình thực hiện, vui lòng chọn phương thức khác</h3>
                    <a style="background: grey; padding: 10px; color: #fff;" href="payment.php"><< Quay lại</a>
                </div>	
			</div>
					
		</div>  	
	    <div class="clear"></div>
	</div>
</div>

<?php 
	include 'inc/footer.php';
?>