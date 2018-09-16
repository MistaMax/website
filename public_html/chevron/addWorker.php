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
                    <form class="certification-form" action="newWorker.php" method="POST">
                    <p class="lead font-weight-normal">Worker ID:<input class="fancy-input" type="text" name="workerID" placeholder="Worker ID"></p>
                    <p class="lead font-weight-normal">First Name:<input class="fancy-input" type="text" name="firstName" placeholder="First Name"></p>
                    <p class="lead font-weight-normal">Middle Name:<input class="fancy-input" type="text" name="middleName" placeholder="Middle Name"></p>
                    <p class="lead font-weight-normal">Last Name:<input class="fancy-input" type="text" name="lastName" placeholder="Last Name"></p>
                    <p class="lead font-weight-normal">Sex(M or F):<input class="fancy-input" type="text" name="sex" placeholder="M or F"></p>
                    <p class="lead font-weight-normal"><button class="fancy-button" type="submit" name="submit">Add Worker</button></p>
		</form>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
    include_once 'footer.php';
?>