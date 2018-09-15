<?php
	include_once 'header.php';
?>
<div class="central-container">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
					<div class="col-md-12 p-lg-5 mx-auto my-5">
					<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>
		</form>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
	include_once 'footer.php';
?>