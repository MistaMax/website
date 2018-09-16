<?php
    include_once 'header.php';
    if(!isset($_SESSION['u_id']))
    {
        header("Location: index.php");
    }
?>
<div class="central-container">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
					<div class="col-md-12 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 font-weight-normal">Add Certification</h1>
                    <form class="certification-form" action="newCert.php" method="POST">
                    <p class="lead font-weight-normal">Cert ID:<input class="fancy-input" type="text" name="certID" placeholder="Certification ID"></p>
                    <p class="lead font-weight-normal">Cert Nm:<input class="fancy-input" type="text" name="certName" placeholder="Certification Name"></p>
                    <p class="lead font-weight-normal"><button class="fancy-button" type="submit" name="submit">Add Certification</button></p>
		</form>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
    include_once 'footer.php';
?>