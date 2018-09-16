<?php
    include_once header.php;
    if(!(isset($_SESSION['u_id'])))
    {
        header("Location: index.php");
    }
?>
<div class="central-container">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
					<div class="col-md-12 p-lg-5 mx-auto my-5">
        <form class="signup-form" action="newCert.php" method="POST">
			<input class="fancy-input" type="text" name="certID" placeholder="Certification ID">
			<input class="fancy-input" type="text" name="certName" placeholder="Certification Name">
			<button class="fancy-button" type="submit" name="submit">Add Certification</button>
		</form>
</div></div></div></div></div>
<?php
    include_once footer.php;
?>