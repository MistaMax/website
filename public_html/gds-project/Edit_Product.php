<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<section class="main-container">
	<div class="main-wrapper">
                        <h2>Edit_Product</h2>
                        <form class="edit-form" action = "Edit_Act.php" method="POST">
<select name='action'>
<option value="price">Price</option>
<option value="P_name">Name</option>
<option value="Quantity">Quantity</option>
<option value="Location">Location</option>
</select>
<h4></h4>
<?php
$query = "SELECT * FROM `Product`";
$response = mysqli_query($connection, $query);
echo "<select name='P_ID'>";
while ($row = mysqli_fetch_array($response)) {
		echo "<option value='" . $row['szProductID'] . "'>"  . $row['szProductName'] . "</option>";
}
echo "</select>";
?>
<h4></h4>
<button type="submit" name="submit">Change</button>
</form>
</div>
</section>

<?php
	include_once 'footer.php';
?>


