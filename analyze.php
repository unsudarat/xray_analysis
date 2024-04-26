<?php
$activeMenu = "analyze";
require_once('header.php');
?>

<div class="main-container analyze-step1 scroll-page">
    <h4 class="title-page mb-4">Analyze</h4>
    <span class="title-select">Select Type <span class="t-red">*</span></span>
    <div class="box-choose mt-2 mb-4">
        <div class="form-check form-check-inline check-img position-relative">
            <input class="form-check-input no-shadow float-end" type="checkbox" id="Checkbox1" value="option1" name="fooby[1][]">
            <label class="form-check-label d-flex flex-column align-items-center" for="Checkbox1">
                <img src="./assets/images/icon/backbone.svg" alt="icon">
                Backbone
            </label>
        </div>
        <div class="form-check form-check-inline check-img position-relative">
            <input class="form-check-input no-shadow float-end" type="checkbox" id="Checkbox2" value="option2" name="fooby[1][]">
            <label class="form-check-label d-flex flex-column align-items-center" for="Checkbox2">
                <img src="./assets/images/icon/heart.svg" alt="icon">
                IVUS
            </label>
        </div>
        <div class="form-check form-check-inline check-img position-relative">
            <input class="form-check-input no-shadow float-end" type="checkbox" id="Checkbox3" value="option2" name="fooby[1][]">
            <label class="form-check-label d-flex flex-column align-items-center" for="Checkbox3">
                <img src="./assets/images/icon/lungs.svg" alt="icon">
                Lung Cancer
            </label>
        </div>
    </div>
    <span class="title-select">File <span class="t-red">*</span></span>
    <div class="box-upload d-flex flex-column flex-sm-row align-items-center no-event --disabled">
        <div class="--left">
            <img src="./assets/images/img_upload.png" alt="icon upload">
        </div>
        <div class="--right">
            <span class="title-file">Select Files to Analyze</span>
            <form id="_uploadfile" method="post" enctype="multipart/form-data">
                <label for="apply_xray"><input type="file" name="" id="apply_xray" accept="image/*" onchange="uploadXray()">Upload</label>
                <span class="t-or">or</span>
                <label for="apply_db"><input type="file" name="" id="apply_db" accept="image/*">Select from Database</label>
            </form>
        </div>
    </div>
</div>
<div class="analyze-step2 scroll-page d-flex flex-md-nowrap flex-wrap d-none">
    <div class="side-right">
        <div class="nav-xray d-flex justify-content-between align-items-center">
            <div class="xray-setting">
                <a href="#" class="ic-move"><i class="bi bi-arrows-move"></i></a>
                <a href="#"><i class="bi bi-zoom-in"></i></a>
                <a href="#"><i class="bi bi-zoom-out"></i></a>
                <a href="#"><i class="bi bi-arrow-counterclockwise"></i></a>
            </div>
            <div class="xray-draw box-importimg">
                <a href="#" class="btn-reset me-2 me-sm-3">Reset</a>
                <a href="#" class="btn-green btn-draw"><i class="bi bi-pencil-fill me-2"></i>Draw Region</a>
            </div>
            <div class="xray-compare box-compare d-none">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary btn-outline-gray no-shadow" for="btnradio1">Compare</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary btn-outline-gray no-shadow" for="btnradio2">Original</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary btn-outline-gray no-shadow" for="btnradio3">Analyzed</label>
                </div>
            </div>
        </div>
        <div class="d-flex flex-lg-nowrap flex-wrap justify-content-center">
            <div id="image_preview">
                <img src="" alt="xray upload">
            </div>
            <div id="image_preview2" class="image-preview2 d-none">
                <img src="" alt="xray upload">
            </div>
        </div>
    </div>
    <?php include "components/aside.php" ?>
</div>

<script>
    $(function() {
        $('#Checkbox1').click(function() {
            $('.box-upload').toggleClass('no-event --disabled')
        })
        $('#Checkbox2, #Checkbox3').click(function() {
            $('.box-upload').addClass('no-event --disabled')
        })

        $("input:checkbox").click(function() {
            var $box = $(this);
            if ($box.is(":checked")) {
                var group = "input:checkbox[name='" + $box.attr("name") + "']";
                $(group).prop("checked", false);
                $box.prop("checked", true);
            } else {
                $box.prop("checked", false);
            }
        });

        $('.btn-analyze').click(function() {
            $('.box-compare').removeClass('d-none')
            $('.box-importimg').addClass('d-none')
            $('.image-preview2').removeClass('d-none')
        })
        $('.btn-back').click(function() {
            $('.box-compare').addClass('d-none')
            $('.box-importimg').removeClass('d-none')
            $('.image-preview2').addClass('d-none')
        })

    })

    function uploadXray() {
        const [file] = apply_xray.files
        if (file) {
            $('#image_preview img').attr('src', URL.createObjectURL(file));
            $('#image_preview2 img').attr('src', URL.createObjectURL(file));
            $('.analyze-step2').removeClass('d-none');
            // console.log(URL.createObjectURL(file));
            $('.analyze-step1').addClass('d-none');
        }
    }

    function closeInfo() {
        $('.info-form').toggleClass('d-none')
    }

    $('.dd-sex a').click(function() {
        $('.dd-sex a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownSex").html($(this).text());
    });

    $('.dd-type a').click(function() {
        $('.dd-type a').removeClass("active");
        $(this).addClass("active");
        $("#dropdownType").html($(this).text());
    });
</script>

<?php require_once('footer.php'); ?>