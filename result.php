<?php
$activeMenu = "result";
require_once('header.php');

$kw        = '';
$sort     = 'name';
$ord        = 'asc';
// $ppp        =  empty($_COOKIE['ppp']) ? PPP : intval($_COOKIE['ppp']);
$p          = 1;
?>

<div class="main-container scroll-page">
    <h4 class="title-page mb-4">Result Analysis</h4>
    <div class="box-table">
        <div class="mb-3">
            <div class="frm-search-wrapper box-filter">
                <form id="frm_search" class="frm-search d-flex justify-content-between flex-column-reverse flex-sm-row ">
                    <div class="--filter flex-wrap">
                        <div class="datepicker-input mb-2 mb-md-0 me-sm-3 me-0">
                            <input date-from="date-select" type="text" placeholder="date" required="" name="_date" class="form-control no-shadow" id="_date" aria-describedby="date" value="22/02/2023 - 30/02/2023">
                            <i class="bi bi-calendar"></i>
                        </div>
                        <div class="dropdown dd-type me-2 me-sm-3 mb-2 mb-sm-0">
                            <button class="btn btn-alltype dropdown-toggle no-shadow d-flex justify-content-between align-items-center" type="button" id="dropdownType" data-bs-toggle="dropdown" aria-expanded="false">
                                All Type
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownType">
                                <li><a class="dropdown-item" href="#">Backbone</a></li>
                                <li><a class="dropdown-item" href="#">IVUS</a></li>
                                <li><a class="dropdown-item" href="#">Lung Cancer</a></li>
                            </ul>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input no-shadow" type="checkbox" value="" id="flexCheck">
                            <label class="form-check-label" for="flexCheck">
                                Abnormal
                            </label>
                        </div>
                    </div>
                    <span class="search-kw mb-2 mb-sm-0">
                        <i class="bi bi-search"></i><input type="text" id="txt_kw" name="kw" placeholder="Search by ID, Name" value="">
                    </span>
                    <input type="hidden" id="hid_sort" name="sort" value="name">
                    <input type="hidden" id="hid_ord" name="ord" value="asc">
                    <input type="hidden" id="hid_ppp" name="ppp" value="20">
                    <input type="hidden" id="hid_p" name="p" value="1">
                    <input type="hidden" id="hid_action" name="action" value="">

                    <button type="submit" class="d-none"><i class="bi bi-search"></i>ค้นหา</button>
                </form>
            </div>
        </div>

        <div class="data-table result-table" data-form='#frm_search'>
            <div class="table-h table-res table-responsive">
                <table id="tbl_search" class="table-with-sort valign-middle no-shadow">
                    <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Date / Time</th>
                            <th style="min-width: 200px;">Name</th>
                            <th>Sex</th>
                            <th>Age</th>
                            <th style="min-width: 150px;">Type</th>
                            <th>Abnormal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- TABLE CONTENT -->
                        <tr>
                            <td colspan="7" class="center loading-data py-5 d-none">กำลังเรียกดูข้อมูล</td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>10/01/2023</td>
                            <td>Sanchai jitpitak</td>
                            <td>Male</td>
                            <td>25</td>
                            <td><img src="./assets/images/ic_backbone.png" class="me-2" alt="icon">Backbone</td>
                            <td>
                                <div class="ab-yes"><img src="./assets/images/caution.png" alt="icon">Yes</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>10/01/2023</td>
                            <td>John Doh</td>
                            <td>Male</td>
                            <td>35</td>
                            <td><img src="./assets/images/ic_backbone.png" class="me-2" alt="icon">Backbone</td>
                            <td>
                                <div class="ab-yes"><img src="./assets/images/caution.png" alt="icon">Yes</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>10/01/2023</td>
                            <td>Siriporn Komdee</td>
                            <td>Female</td>
                            <td>26</td>
                            <td><img src="./assets/images/ic_lung.png" class="me-2" alt="icon">Lung Cancer</td>
                            <td>
                                <div class="ab-no">No</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>11/01/2023</td>
                            <td>John Doh</td>
                            <td>Male</td>
                            <td>35</td>
                            <td><img src="./assets/images/ic_lung.png" class="me-2" alt="icon">Lung Cancer</td>
                            <td>
                                <div class="ab-no">No</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>11/01/2023</td>
                            <td>Siriporn Komdee</td>
                            <td>Female</td>
                            <td>26</td>
                            <td><img src="./assets/images/ic_lung.png" class="me-2" alt="icon">Lung Cancer</td>
                            <td>
                                <div class="ab-no">No</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>12/01/2023</td>
                            <td>Pitipong Yookong</td>
                            <td>Male</td>
                            <td>37</td>
                            <td><img src="./assets/images/ic_lung.png" class="me-2" alt="icon">Lung Cancer</td>
                            <td>
                                <div class="ab-no">No</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>12/01/2023</td>
                            <td>Sanchai jitpitak</td>
                            <td>Male</td>
                            <td>25</td>
                            <td><img src="./assets/images/ic_backbone.png" class="me-2" alt="icon">Backbone</td>
                            <td>
                                <div class="ab-no">No</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>12/01/2023</td>
                            <td>Pitipong Yookong</td>
                            <td>Male</td>
                            <td>37</td>
                            <td><img src="./assets/images/ic_ivus.png" class="me-2" alt="icon">IVUS</td>
                            <td>
                                <div class="ab-no">No</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>18/01/2023</td>
                            <td>Sanchai jitpitak</td>
                            <td>Male</td>
                            <td>25</td>
                            <td><img src="./assets/images/ic_lung.png" class="me-2" alt="icon">Lung Cancer</td>
                            <td>
                                <div class="ab-no">No</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Exxxx1234</td>
                            <td>20/01/2023</td>
                            <td>Suparak Kitiroj</td>
                            <td>Male</td>
                            <td>32</td>
                            <td><img src="./assets/images/ic_backbone.png" class="me-2" alt="icon">Backbone</td>
                            <td>
                                <div class="ab-yes"><img src="./assets/images/caution.png" alt="icon">Yes</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination d-flex flex-row justify-content-start align-items-center mt-3" data-form="#frm_search">
                <div class="entry d-none">กำลังประมวลผล</div>
                <div class="page-ppp ms-auto">
                    แสดงผล
                    <select class="ppp sel-ppp">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    รายการ
                </div>
                <div class="pagination-wrapper d-flex flex-row">
                    <!-- PAGINATION -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    psContent = new PerfectScrollbar('.data-table table');

    $('.dd-type a').click(function() {
        $('.dd-type a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownType").html($(this).text());
    });
</script>

<?php require_once('footer.php'); ?>