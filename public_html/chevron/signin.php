<?php
	include_once 'header.php';
?>
<div class="central-container">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
					<div class="col-md-12 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 font-weight-normal">Sign In</h1>
                    <form class="login-form" action="includes/login.inc.php" method="POST">
                    <p class="lead font-weight-normal"><input class="fancy-input" type="text" name="uid" placeholder="Username"></p>
                    <p class="lead font-weight-normal"><input class="fancy-input" type="password" name="pwd" placeholder="Password"></p>
                    <p class="lead font-weight-normal"><button class="fancy-button" type="submit" name="submit">Sign In</button></p>
		</form>
					</div>
				</div>
			</div>
		</div>
</div>

<?php
	include_once 'footer.php';
?>