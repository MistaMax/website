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
                    <h1 class="display-4 font-weight-normal">Display Work Orders</h1>
                    <?php
                        $sql = "SELECT * FROM workorders WHERE 1";
                        $result = mysqli_query($connection, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck == 0)
                        {
                            header("Location: findWorkOrder.php?find=none");
                        }
                        echo '<table class="center" cellspacing="5" cellpadding="5" ><h4></h4>
                            <col width = "200">
                            <col width = "200">
                            <col width = "200">
                            <col width = "200">
                            <col width = "200">
                            <col width = "200">
                            <tr><td align="left"><b>Work Order</b></td>
                            <td align="left"><b>Facility</b></td>
                            <td align="left"><b>Equipment ID</b></td>
                            <td align="left"><b>Priority</b></td>
                            <td align="left"><b>Time To Complete</b></td>
                            <td align="left"><b>Submission Time Stamp</b></td>
                            </tr>';
                            while($row = mysqli_fetch_array($result)){
                                echo '<tr><td align="left">'.
                                $row['workOrder'] . '</td><td align="left">'.
                                $row['facility'] . '</td><td align="left">'.
                                $row['equipmentID'] . '</td><td align="left">' .
                                $row['priority'] . '</td><td align="left">' .
                                $row['timeToComplete'] . '</td><td align="left">'.
                                $row['submissionTimeStamp'].'</td><td align="left">';
                                echo '</tr>';
                            }
                            echo '</table>';
                    ?>
</div></div></div></div></div>