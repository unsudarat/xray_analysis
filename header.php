<?php global $activeMenu; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&family=Sarabun:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css?v=<?php echo $timeVersion; ?>">
    <link rel="stylesheet" href="./assets/plugins/perfectScrollbar/dist/css/perfect-scrollbar.css?version=1.5.3">
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- js -->
    <script src="./assets/plugins/perfectScrollbar/dist/js/perfect-scrollbar.min.js?version=1.5.3"></script>
    <!-- <script src="./assets/plugins/highcharts/highcharts.js"></script> -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>X-ray Analysis</title>
    <meta name="description" content="">
</head>

<body>
    <div id="wrapper">
        <header class="header">
            <div class="header-menu">
                <?php if (!$activeMenu == "") : ?>
                    <div class="hamburger d-block d-lg-none">
                        <span></span>
                    </div>
                <?php endif; ?>
                <div class="logo">
                    <a href="./">
                        <img src="./assets/images/logo_dr.png" class="logo-header" alt="logo">
                    </a>
                </div>
                <div class="d-flex justify-content-end w-100">
                    <?php if (!$activeMenu == "") : ?>
                        <ul class="navbar-nav d-none d-lg-inline-flex w-100">
                            <li class="navbar-item">
                                <a href="./analyze.php" class="<?php echo $activeMenu == "analyze" ? "active" : ""; ?>">
                                    <img src="./assets/images/icon/create.svg" alt="icon">
                                    Analyze</a>
                            </li>
                            <li class="navbar-item">
                                <a href="./result.php" class="<?php echo $activeMenu == "result" ? "active" : ""; ?>">
                                    <img src="./assets/images/icon/history.svg" alt="icon">
                                    Result Analysis</a>
                            </li>
                            <li class="navbar-item">
                                <a href="./management.php" class="<?php echo $activeMenu == "management" ? "active" : ""; ?>">
                                    <img src="./assets/images/icon/database.svg" alt="icon">
                                    Data Management</a>
                            </li>
                            <li class="navbar-item">
                                <a href="./statistics.php" class="<?php echo $activeMenu == "statistics" ? "active" : ""; ?>">
                                    <img src="./assets/images/icon/statistic.svg" alt="icon">
                                    Statistics</a>
                            </li>
                            <li class="navbar-item">
                                <a href="./report.php" class="<?php echo $activeMenu == "report" ? "active" : ""; ?>">
                                    <img src="./assets/images/icon/file.svg" alt="icon">
                                    Report</a>
                            </li>
                        </ul>
                        <div class="menu d-lg-none">
                            <ul class="navbar-nav d-flex flex-column w-100">
                                <li class="navbar-item">
                                    <a href="./analyze.php" class="<?php echo $activeMenu == "analyze" ? "active" : ""; ?>">
                                        <img src="./assets/images/icon/create.svg" alt="icon">
                                        Analyze</a>
                                </li>
                                <li class="navbar-item">
                                    <a href="./result.php" class="<?php echo $activeMenu == "result" ? "active" : ""; ?>">
                                        <img src="./assets/images/icon/history.svg" alt="icon">
                                        Result Analysis</a>
                                </li>
                                <li class="navbar-item">
                                    <a href="./management.php" class="<?php echo $activeMenu == "management" ? "active" : ""; ?>">
                                        <img src="./assets/images/icon/database.svg" alt="icon">
                                        Data Management</a>
                                </li>
                                <li class="navbar-item">
                                    <a href="./statistics.php" class="<?php echo $activeMenu == "statistics" ? "active" : ""; ?>">
                                        <img src="./assets/images/icon/statistic.svg" alt="icon">
                                        Statistics</a>
                                </li>
                                <li class="navbar-item">
                                    <a href="./report.php" class="<?php echo $activeMenu == "report" ? "active" : ""; ?>">
                                        <img src="./assets/images/icon/file.svg" alt="icon">
                                        Report</a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="login-profile d-flex align-items-center">
                        <a href="#" class="m-setting"><i class="bi bi-gear"></i></a>
                        <div class="--profile">
                            <a href="./login.php">
                                <img src="./assets/images/moc-profile.png" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </header>