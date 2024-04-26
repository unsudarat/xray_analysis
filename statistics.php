<?php
$activeMenu = "statistics";
require_once('header.php');
?>

<div class="main-container scroll-page">
    <h4 class="title-page">Statistics</h4>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="charts-box">
                <div class="mb-3 d-flex flex-wrap justify-content-between align-items-center">
                    <span class="title-statis mb-2 mb-sm-0">Abnormal</span>
                    <div class="statis-box d-flex">
                        <div class="dropdown dd-years me-2">
                            <button class="btn btn-year btn-ststistics dropdown-toggle no-shadow d-flex justify-content-between align-items-center" type="button" id="dropdownYears" data-bs-toggle="dropdown" aria-expanded="false">
                                2022
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownYears">
                                <li><a class="dropdown-item" href="#">2022</a></li>
                                <li><a class="dropdown-item" href="#">2023</a></li>
                                <li><a class="dropdown-item" href="#">2024</a></li>
                            </ul>
                        </div>
                        <div class="dropdown dd-months me-2">
                            <button class="btn btn-month btn-ststistics dropdown-toggle no-shadow d-flex justify-content-between align-items-center" type="button" id="dropdownMonths" data-bs-toggle="dropdown" aria-expanded="false">
                                All Month
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMonths">
                                <li><a class="dropdown-item" href="#">Jan</a></li>
                                <li><a class="dropdown-item" href="#">Feb</a></li>
                                <li><a class="dropdown-item" href="#">Mar</a></li>
                                <li><a class="dropdown-item" href="#">Apr</a></li>
                                <li><a class="dropdown-item" href="#">May</a></li>
                                <li><a class="dropdown-item" href="#">Jun</a></li>
                                <li><a class="dropdown-item" href="#">Jul</a></li>
                                <li><a class="dropdown-item" href="#">Aug</a></li>
                                <li><a class="dropdown-item" href="#">Sep</a></li>
                                <li><a class="dropdown-item" href="#">Oct</a></li>
                                <li><a class="dropdown-item" href="#">Nov</a></li>
                                <li><a class="dropdown-item" href="#">Dec</a></li>
                            </ul>
                        </div>
                        <div class="dropdown dd-type">
                            <button class="btn btn-month btn-ststistics dropdown-toggle no-shadow d-flex justify-content-between align-items-center" type="button" id="dropdownType" data-bs-toggle="dropdown" aria-expanded="false">
                                All Type
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownType">
                                <li><a class="dropdown-item" href="#">Not Found</a></li>
                                <li><a class="dropdown-item" href="#">Abnormal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end mb-3">
                    <span class="t-detail t-detail2 me-3"><i class="bi bi-circle-fill me-2 color-bb"></i>Not Found</span>
                    <span class="t-detail t-detail2"><i class="bi bi-circle-fill me-2 color-ivus"></i>Abnormal</span>
                </div>
                <figure class="highcharts-figure">
                    <div id="container_line"></div>
                </figure>

            </div>
        </div>
        <div class="col-12 col-lg-4 mt-4 mt-lg-0">
            <div class="charts-box">
                <div class="mb-5 d-flex justify-content-between align-items-center">
                    <span class="title-statis">Type</span>
                    <div class="statis-box d-flex">
                        <div class="dropdown dd-year me-2">
                            <button class="btn btn-year btn-ststistics dropdown-toggle no-shadow d-flex justify-content-between align-items-center" type="button" id="dropdownYear" data-bs-toggle="dropdown" aria-expanded="false">
                                2022
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownYear">
                                <li><a class="dropdown-item" href="#">2022</a></li>
                                <li><a class="dropdown-item" href="#">2023</a></li>
                                <li><a class="dropdown-item" href="#">2024</a></li>
                            </ul>
                        </div>
                        <div class="dropdown dd-month me-2">
                            <button class="btn btn-month btn-ststistics dropdown-toggle no-shadow d-flex justify-content-between align-items-center" type="button" id="dropdownMonth" data-bs-toggle="dropdown" aria-expanded="false">
                                All Month
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMonth">
                                <li><a class="dropdown-item" href="#">Jan</a></li>
                                <li><a class="dropdown-item" href="#">Feb</a></li>
                                <li><a class="dropdown-item" href="#">Mar</a></li>
                                <li><a class="dropdown-item" href="#">Apr</a></li>
                                <li><a class="dropdown-item" href="#">May</a></li>
                                <li><a class="dropdown-item" href="#">Jun</a></li>
                                <li><a class="dropdown-item" href="#">Jul</a></li>
                                <li><a class="dropdown-item" href="#">Aug</a></li>
                                <li><a class="dropdown-item" href="#">Sep</a></li>
                                <li><a class="dropdown-item" href="#">Oct</a></li>
                                <li><a class="dropdown-item" href="#">Nov</a></li>
                                <li><a class="dropdown-item" href="#">Dec</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
                <div class="row m-0">
                    <div class="col p-0">
                        <h4 class="t-stat">Type</h4>
                        <div class="d-flex flex-column">
                            <span class="t-detail"><i class="bi bi-circle-fill me-2 color-bb"></i>Backbone</span>
                            <span class="t-detail"><i class="bi bi-circle-fill me-2 color-ivus"></i>IVUS</span>
                            <span class="t-detail"><i class="bi bi-circle-fill me-2 color-lc"></i>Lung Cancer</span>
                        </div>
                    </div>
                    <div class="col p-0 text-end">
                        <h4 class="t-stat">User</h4>
                        <div class="d-flex flex-column">
                            <span class="t-detail">1,476</span>
                            <span class="t-detail">1,899</span>
                            <span class="t-detail">482</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    Highcharts.chart('container', {
        chart: {
            type: 'variablepie',
            spacingLeft: 15,
            spacingRight: -10,
        },
        title: {
            text: 'Based on<br><br><p class="num-basedon">4,215</p><br><br>Users',
            align: 'center',
            verticalAlign: 'middle',
            x: -15
        },
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <p style="color:{point.text}">{point.tooltip} : <b>{point.y}</p>'
        },
        series: [{
            minPointSize: 50,
            innerSize: '70%',
            zMin: 30,
            name: 'countries',
            showInLegend: false,
            data: [{
                name: '',
                tooltip: 'Backbone',
                y: 1476,
                z: 92,
                color: '#0BC563',
                text: '#FFF'
            }, {
                name: '',
                tooltip: 'IVUS',
                y: 1897,
                z: 92,
                color: '#5A31FF',
                text: '#FFF'
            }, {
                name: '',
                tooltip: 'Lung Cancer',
                y: 842,
                z: 92,
                color: '#E9EEFF',
                text: '#FFF'
            }]
        }]
    });

    Highcharts.chart('container_line', {
        chart: {
            type: 'spline'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            ]
        },
        yAxis: {
            title: {
                text: ''
            },
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> <p style="color:#FFF;padding:0">{series.name} : </p>' +
                '<p style="padding:0;color:#FFF"><b>{point.y:.1f}</b></p><br>',
            crosshairs: true,
            shared: true
        },
        legend: {
            layout: 'horizontal',
            align: 'right',
            x: 0,
            verticalAlign: 'top',
            position: 'absolute',
            y: 0,
            floating: true,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                '#FFF'
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Not Found',
            point: {
                events: {
                    mouseOver: function() {
                        $(this.series.chart.xAxis[0].labelGroup.element.childNodes[this.x]).css('fill', 'white');
                    },
                    mouseOut: function() {
                        $(this.series.chart.xAxis[0].labelGroup.element.childNodes[this.x]).css('fill', '#999999');
                    }
                }
            },
            color: '#0BC563',
            text: '#FFF',
            marker: {
                enabled: false
            },
            data: [348, 430, 512, 414, 549, 565, 648, 430, 512, 414, 649, 724],
            showInLegend: false
        }, {
            name: 'Abnormal Case',
            dashStyle: 'shortdot',
            point: {
                events: {
                    mouseOver: function() {
                        $(this.series.chart.xAxis[0].labelGroup.element.childNodes[this.x]).css('fill', 'white');
                    },
                    mouseOut: function() {
                        $(this.series.chart.xAxis[0].labelGroup.element.childNodes[this.x]).css('fill', '#999999');
                    }
                }
            },
            color: '#5A31FF',
            text: '#FFF',
            marker: {
                enabled: false
            },
            data: [202, 307, 368, 309, 396, 471, 402, 307, 368, 309, 396, 471],
            showInLegend: false
        }]
    });

    $('.dd-years a').click(function() {
        $('.dd-years a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownYears").html($(this).text());
    });

    $('.dd-year a').click(function() {
        $('.dd-year a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownYear").html($(this).text());
    });

    $('.dd-months a').click(function() {
        $('.dd-months a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownMonths").html($(this).text());
    });

    $('.dd-month a').click(function() {
        $('.dd-month a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownMonth").html($(this).text());
    });

    $('.dd-type a').click(function() {
        $('.dd-type a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownType").html($(this).text());
    });
</script>

<?php require_once('footer.php'); ?>