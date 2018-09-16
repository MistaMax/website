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
                    <h1 class="display-4 font-weight-normal">Add Work Order</h1>
                    <form class="worker-form" action="newWorkOrder.php" method="POST">
                    <p class="lead font-weight-normal">Work Order ID:<input class="fancy-input" type="text" name="workOrder" placeholder="Work Order ID"></p>
                    <p class="lead font-weight-normal">Cert Req ID:<input class="fancy-input" type="text" name="certReqID" placeholder="Cert Req ID"></p>
                    <p class="lead font-weight-normal">Facility:<input class="fancy-input" type="text" name="facility" placeholder="Facility"></p>
                    <p class="lead font-weight-normal">Equipment ID:<input class="fancy-input" type="text" name="equipmentID" placeholder="Equipment ID"></p>
                    <p class="lead font-weight-normal">Priority(1-5):<input class="fancy-input" type="text" name="priority" placeholder="Priority"></p>
                    <p class="lead font-weight-normal">Time to Complete:<input class="fancy-input" type="text" name="timeToComplete" placeholder="timeToComplete"></p>
                    <p class="lead font-weight-normal"><button class="fancy-button" type="submit" name="submit">Add Work Order</button></p>
		</form>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
    include_once 'footer.php';
?>