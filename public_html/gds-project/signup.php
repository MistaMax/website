<?php
	include_once 'header.php';
?>

<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">SignUp</h1>
                        <p class="lead font-weight-normal">
						<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>
		</form>
						</p>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php
	include_once 'footer.php';
?>
