<?php
    include_once 'header.php';
    if(!isset($_SESSION['u_id']))
    {
        header("Location: index.php");
    }
    include 'includes/dbh.php';
?>

<div class="central-container">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
					<div class="col-md-12 p-lg-5 mx-auto my-5">
                        <?php
                            if(isset($_POST['submit']))
                            {
                                echo '<h1 class="display-4 font-weight-normal">
                                Worker Search Results
                                </h1>';
                                $W_type = $_POST['type'];
                                $W_string = $_POST['search'];

                                if(empty($W_type) || empty($W_string))
                                {
                                    header("Location: findWorker.php?find=empty");
                                }
                                else
                                {
                                    $sql = "SELECT * FROM workers WHERE ".$W_type."='$W_string'";
                                    $result = mysqli_query($connection, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if($resultCheck == 0)
                                    {
                                        header("Location: findWorker.php?find=none");
                                    }
                                    echo '<table class="center" cellspacing="5" cellpadding="5" ><h4></h4>
	                                    <col width = "200">
	                                    <col width = "200">
	                                    <col width = "200">
	                                    <col width = "200">
	                                    <col width = "200">
	                                    <tr><td align="left"><b>Worker ID</b></td>
	                                    <td align="left"><b>First Name</b></td>
	                                    <td align="left"><b>Middle Name</b></td>
	                                    <td align="left"><b>Last Name</b></td>
	                                    <td align="left"><b>Sex</b></td>
	                                    </tr>';
	                                    while($row = mysqli_fetch_array($result)){
		                                    echo '<tr><td align="left">'.
		                                    $row['workerID'] . '</td><td align="left">'.
		                                    $row['first_name'] . '</td><td align="left">'.
		                                    $row['middle_name'] . '</td><td align="left">' .
		                                    $row['last_name'] . '</td><td align="left">' .
		                                    $row['sex'] . '</td><td align="left">';
		                                    echo '</tr>';
	                                    }
                                        echo '</table>';
                                        echo '<p class="lead font-weight-normal"><a class="user-name nav-item nav-link" href="findWorker.php">Try another search</a></p>';
                                }

                            }
                            else
                            {
                                echo '<h1 class="display-4 font-weight-normal">
                                Find Workers
                                </h1>
                                <form class="find-worker-form" action="findWorker.php" method="POST">
                                <p class="lead font-weight-normal">
                                <select class="fancy-input" name="type">
                                <option value="workerID">workerID</option>
                                <option value="first_name">First Name</option>
                                <option value="middle_name">Middle Name</option>
                                <option value="last_name">Last Name</option>
                                <option value="sex">Sex</option>
                                </select>
                                </p>
                                <p class="lead font-weight-normal">
                                <input class="fancy-input" type="text" name="search" placeholder="Search">
                                </p>
                                <p class="lead font-weight-normal"><button class="fancy-button" type="submit" name="submit">Find Workers</button></p>
                                </form>';
                            }?>
</div>
</div>
</div>
</div>
</div>


<?php
    include_once 'footer.php';
?>