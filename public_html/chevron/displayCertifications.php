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
                            $sql = "SELECT * FROM certifications WHERE 1";
                            $result = mysqli_query($connection, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if($resultCheck == 0)
                            {
                                header("Location: findCert.php?find=none");
                            }
                            echo '<table class="center" cellspacing="5" cellpadding="5" ><h4></h4>
                                <col width = "200">
                                <col width = "400">
                                <tr><td align="left"><b>Certification ID</b></td>
                                <td align="left"><b>Certification Name</b></td>
                                </tr>';
                                while($row = mysqli_fetch_array($result)){
                                    echo '<tr><td align="left">'.
                                    $row['certID'] . '</td><td align="left">'.
                                    $row['certName'] . '</td><td align="left">';
                                    echo '</tr>';
                                }
                                echo '</table>';
                        ?>
                        </div>
</div>
</div>
</div>
</div>

<?php
    include_once 'footer.php';
?>