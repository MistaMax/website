<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">Edit_Product</h1>
                        <p class="lead font-weight-normal">
<form class="edit-form" action = "Edit_Act.php" method="POST">
<select name='action'>
<option value="price">Price</option>
<option value="P_name">Name</option>
<option value="Quantity">Quantity</option>
</select>

<?php
$query = "SELECT * FROM `product`";
$response = mysqli_query($connection, $query);
echo "<select name='P_ID'>";
while ($row = mysqli_fetch_array($response)) {
		echo "<option value='" . $row['szProductID'] . "'>"  . $row['szProductName'] . "</option>";
}
echo "</select>";
?>
<button type="submit" name="submit">Change</button>
</form></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
	include_once 'footer.php';
?>