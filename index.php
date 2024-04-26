<?php
// $activeMenu = "welcome";
require_once('header.php');
?>

<div class="main-container main-container-welcome scroll-page">
    <img src="./assets/images/bg_login_top.png" class="bg bg-top" alt="bg" />
    <img src="./assets/images/bg_login_bottom.png" class="bg bg-bottom" alt="bg" />
    <h2 class="--title">Welcome, Dr.Siriporn</h2>
    <div class="row">
        <div class="col-6 col-sm-3 mb-3">
            <a href="./analyze.php">
                <div class="box-content">
                    <img src="./assets/images/img_analyze.png" class="" alt="Analyze" />
                    <p>Analyze</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 mb-3">
            <a href="./result.php">
                <div class="box-content">
                    <img src="./assets/images/img_result.png" class="" alt="Result Analysis" />
                    <p>Result Analysis</p>

                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 mb-3">
            <a href="./statistics.php">
                <div class="box-content">
                    <img src="./assets/images/img_statistics.png" class="" alt="Statistics" />
                    <p>Statistics</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 mb-3">
            <a href="./report.php">
                <div class="box-content">
                    <img src="./assets/images/img_report.png" class="" alt="Report" />
                    <p>Report</p>
                </div>
            </a>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>