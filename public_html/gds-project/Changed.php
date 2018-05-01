<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">Price Changed</h1>
                    </div>
                    <p class="lead font-weight-normal"><?php
if (isset($_POST['submit'])){
	$P_ID = $_POST['P_ID'];
	$From  $_POST['From'];
	$new_Price $_POST['New_Price'];
	
	
	
	
	switch($From){
		case "P":
			$query = "SELECT * FROM `product` WHERE szProductID = '$P_ID'";
	}
}

?></p>
                </div>
            </div>
        </div>
</div>
<?php
	include_once 'footer.php';
?>