<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Дозор</title>
</head>
<style>
    @font-face {
        font-family: "RobotoLight";
        src: url("/dozor_fonts/RobotoLight/RobotoLight.eot");
        src: url("/dozor_fonts/RobotoLight/RobotoLight.eot?#iefix")format("embedded-opentype"),
        url("/dozor_fonts/RobotoLight/RobotoLight.woff") format("woff"),
        url("/dozor_fonts/RobotoLight/RobotoLight.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    @font-face {
        font-family: "RobotoRegular";
        src: url("/dozor_fonts/RobotoRegular/RobotoRegular.eot");
        src: url("/dozor_fonts/RobotoRegular/RobotoRegular.eot?#iefix")format("embedded-opentype"),
        url("/dozor_fonts/RobotoRegular/RobotoRegular.woff") format("woff"),
        url("/dozor_fonts/RobotoRegular/RobotoRegular.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    @font-face {
        font-family: "RobotoMedium";
        src: url("/dozor_fonts/RobotoMedium/RobotoMedium.eot");
        src: url("/dozor_fonts/RobotoMedium/RobotoMedium.eot?#iefix")format("embedded-opentype"),
        url("/dozor_fonts/RobotoMedium/RobotoMedium.woff") format("woff"),
        url("/dozor_fonts/RobotoMedium/RobotoMedium.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    body {
        margin: 0px;
        position: relative;
    }
    .red {
        background: #bb6767 !important;
    }
    .yellow {
        background: #ffda73 !important;
    }
    .green {
        background: #00a070 !important;
    }

    .hidden {
        display: none !important;
    }
   .dozor-main-inner {
       /*margin-left: 12%;
       margin-right: 12%;
       border: 1px solid black;*/
       height: 100vh;
       background: #d9d9d9;
       font-family: "RobotoLight";
   }
    .col-left{
       width: 23%;
        display: inline-block;
        height: 100%;
        background: #003e63;
        float: left;
    }
    .col-left-logo {
       width: 100%;
        height: 140px;
        color: white;

        display: table;
    }
    .col-left-logo-inner-pre {
        display: inline-block;
    }
    .col-left-logo-inner {
       /*margin-top: 10px;
       margin-bottom: 10px;*/
       padding-left: 15%;
       padding-right: 15%;
	   cursor: pointer;
       text-align: center;
       display: table-cell;
       vertical-align: middle;
       font-size: 30px;
   }

    .col-left-logo-text{
        border: 1px solid white;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .col-left-menu{
       /* padding-right: 15%;*/
        color: #003e63;
        font-family: "RobotoLight";
        font-style: semibold;
        font-size: 24px;
    }
    .menu-item-top-outer {
        width: 100%;
        margin-top: 10px;
        height: 80px;
    }
    .menu-item-indicator-num {
        width: 15%;
        float: right;
        height: 100%;
    }
    .menu-item-top{
        float: left;
        width: 85%;
        background: white;
        height: 60px;
        /*margin-top: 10px;*/
        //background: green;
        /*padding-left: 40px;*/
        padding-top: 10px;
        padding-bottom: 10px;
        color: #003e63;
    }
    .menu-item-top-top {
        margin-top: 0px;

    }
   .menu-item-top2{
       //background: #00a070;
       height: -webkit-fill-available;
   }
   .menu-item-top-inner {
        /*margin-top: 3px;
       margin-bottom: 3px;*/
      /* border: 1px solid #00a070;*/
       height: inherit;
       text-align: center;
       width: 100%;
       display: table;
       background: white;
   }
    .menu-item-top-inner-text{
        display: table-cell;
        vertical-align: middle;
    }
    .menu-item-indicator-cell{
        display: table-cell;
        vertical-align: middle;

    }
    .menu-item-indicator{
        height: 100%;
        float: right;
        width: 12px;
        float: right;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .menu-item-indicator-half {
        width: 100%;
        height: 50%;
        background: #00a070;
    }


    .menu-top-level-item-outer {
        width: 100%;
        height: 80px;
        //background: white;
        margin-top: 10px;
    }
    .menu-top-level-item {

        width: 100%;
        height: 100%;
    }
    .menu-top-level-item2 {

    }
    .menu-top-level-item-text-and-indicator-color {
        float: left;
        width: 85%;
        background: white;
        height: 60px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .menu-top-level-item-text {
        display: table;
        height: 100%;
        width: 90%;
        text-align: center;
        float:left;
    }
    .menu-top-level-item-text-inner {
        display: table-cell;
        vertical-align: middle;
    }
    .menu-top-level-item-text-inner2 {
        width: 72%;
        float: right;
    }
    .menu-top-level-item-indicator-color {
        width: 10%;
        height: 60px;
        float: right;
        position: relative;


    }
    .menu-top-level-item-indicator-color2 {
        position: absolute;
        top: 10px;
        bottom: 10px;
        right: 0px;
        width: 12px;
    }
    .menu-top-level-item-indicator-color2.mod {
        top: 10px;
        bottom: 10px;
        right: -12px;
        width: 24px;
    }
    .menu-top-level-item-indicator-color-inner {
        height: 100%;
        width: 100%;

    }
    .menu-top-level-item-indicator-half {
        height: 50%;
        background: #00a070;
    }
    .menu-top-level-item-indicator-num {
        width: 15%;
        float: right;
        height: 100%;
        display: table;
    }
    .menu-top-level-item-indicator-num-inner {
        padding-left: 15px;
        height: 80px;
        /*line-height: 80px;*/
        text-align: left;
        display: table-cell;
        vertical-align: middle;
        color: white;
    }
    .menu-top-level-item-indicator-num-inner p {
        /*line-height: 1.6;
        display: inline-block;
        vertical-align: middle;*/
    }
    .menu-item-v1-top{

        height: 90px;
        //  margin-top: 10px;
        background: #003e63;
        padding-left: 15%;
        padding-right: 15%;
       /* padding-top: 10px;
        padding-bottom: 10px;*/

    }
    .menu-item-v1-top2{
        height: 80px;

    //background: #00a070;
        color: #003e63;
        /*height: -webkit-fill-available;*/
    }
    .menu-item-v1-top-inner {
        /*margin-top: 3px;
       margin-bottom: 3px;*/
        /* border: 1px solid #00a070;*/
        height: inherit;
        text-align: center;
        width: 100%;
        display: table;
        background: #d9d9d9;
    }
    .menu-item-v1-top-inner-text{
        display: table-cell;
        vertical-align: middle;
    }
    .menu-item-v1-indicator-cell{
        display: table-cell;
        vertical-align: middle;
        width: 12px;

    }
    .menu-item-v1-indicator{
        height: 100%;
        float: right;
        width: 100%;
        float: right;
        padding-top: 18px;
        padding-bottom: 18px;
    }
    .menu-item-v1-indicator-half {
        width: 100%;
        height: 50%;
        background: #00a070;
    }




    .menu-item-sub {
        height: 70px;
        margin-left: 40px;
        color: #003e63;
        font-size: 18px;
    }
    .line-delimiter{
        height: 10px;
        background: white;
        margin-left: 48.5%;
        margin-right: 48.5%;
    }
    .menu-item-sub2 {
        height: 60px;
        background: lightgray;
        display: table;
        width: 100%;
    }
    .menu-item-sub-inner-text {
        display: table-cell;
        vertical-align: middle;
    }
   .cube-outer-left {
       width: 20%;
       float: left;
   }
   .cube-outer-right {
       width: 20%;
       float: right;
   }
    .cube-left {
        float: left;
        width: 20px;
        height: 20px;
        //background: red;

    }

    .menu-item-sub-indicator{
        height: 100%;
        float: right;
        width: 12px;
        float: right;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .menu-item-sub-indicator-half {
        width: 100%;
        height: 50%;
        background: #00a070;
    }

   .cube-right {
       float: right;
       width: 20px;
       height: 20px;
       background: #00a070;

   }
    .text-center {
        width: 60%;
        display: inline-block;
        text-align: center;
    }
    .col-right {
        width: 77%;
        display: block;
        height: 100%;
        vertical-align:top;
        float: right;
    }
    .col-right-inner{
        /*width: 100%;*/
    }
    .info-status-block {
        width: 100%;
        height: 100px;
        padding-left: 3%;
        padding-top: 40px;

    }
    .info-status-block-item {
        float: left;
        width: 18%;
        margin-right: 1%;
        display: none;

    }
    .info-status-block-item-indicator{
        width: 100%;
        height: 20px;
    }
    .info-status-block-item-title {
        text-align: center;
    }

   .items-block {
       width: 100%;
       height: calc(100vh - 140px);
       font-size: 18px;
       box-sizing: border-box;
       padding-bottom: 15px;

   }
    .item-engineering-complex {
        width: 32.7%;
        height: 100%;
        float: left;
        display: inline-block;
        /*padding-left: 10px;
        padding-right: 10px;*/
        padding-left: 3%;
        box-sizing: border-box;
        vertical-align:top;
    }
    .item-engineering-complex-inner {
        border: 1px solid black;
        height: 100%;
    }
    .item-engineering-complex-inner-title,
    .item-pt-tha1-inner-title {
        text-align: center;
        color: #003e63;
        font-size: 18px;
        padding-top: 5px;
        padding-bottom: 20px;
        height: 48px;
    }
    .item-pt-tha {
        width: 67.3%;
        height: 100%;
        display: inline-block;
        float: right;
        padding-left: 3%;
        padding-right: 3%;
        box-sizing: border-box;
        vertical-align:top;
    }
   .item-pt-tha1-inner {
       border: 1px solid black;
       height: 100%;

   }

    .col-right-item {
        width: 94%;
        height: 70px;
        padding-left: 3%;
        padding-right: 3%;
        margin-bottom: 10px;
   }
    .col-right-item-pic {
        width: 70px;
        float: left;
    }
    .col-right-item-pic-icon {
        float: left;
        //display: inline-block;
        height: 70px;
        width: 70px;
        background: #00a070;
        -webkit-border-radius: 35px;
        display: table;
        //width: 100%;
        text-align: center;
    }
    .col-right-item-pic-icon div {
        display: table-cell;
        vertical-align: middle;
    }
    .col-right-item-pic-icon img{
        max-width: 35px;
        max-height: 35px;
        vertical-align: middle;
        align-self: center;
    }

    .col-right-item-title {
        width: calc(100% - 70px);
        height: 70px;
        float: left;

        text-align: center;

    }
    .col-right-item-title-inner {
        float: right;
        background: #bfbfbf;
        width: 90%;
        display: table;
        font-weight: 500;
        height: 100%;
    }
    .col-right-item-title-inner div {

        display: table-cell;
        vertical-align: middle;

    }
    .col-right-item-pic-line {
        float: left;
        height: 70px;
        width: 10%;
        position: relative;
    }
    .col-right-item-pic-line div{
        height: 1px;
        position: absolute;
        top: 50%;
        background: #003e63;
        width: 100%;
    }

    .col-right-double {
        width: 100%;
        height: calc(100% - 73px);
    }
    .col-right-double-left {
        width: 50%;
        height: 100%;
        float: left;
        border-right: 1px solid black;
        box-sizing: border-box;
    }
    .col-right-double-right {
        width: 50%;
        height: 100%;
        float: right;
    }

    .col-right-double-left-item{
        width: 91%;
        height: 70px;
        padding-left: 3%;
        padding-right: 6%;
        margin-bottom: 10px;
    }

    .col-right-double-right-item{
        width: 91%;
        height: 70px;
        padding-left: 6%;
        padding-right: 3%;
        margin-bottom: 10px;
    }

    .window-pop-up {
        position: absolute;
        top: 30%;
        bottom: 40%;
        left: 25%;
        right: 25%;
        z-index: 100;
        display: none;
    }
    .window-pop-up-inner {
        z-index: 100;
        background: white;
        border-radius: 5px;
        padding: 10px;
        width: 300px;
        margin: auto;
    }
    .window-pop-up-inner>div{
        border-bottom: 1px solid darkgray;

        padding-top: 10px;
        padding-bottom: 10px;
    }

    .item-room-and-exit {
        display: inline-block;
        width: 100%;
    }
    .item-room-title {
        font-family: "RobotoRegular";
        float: left;
    }
    .item-scheme-and-video {
        overflow: hidden;
    }
    .item-scheme {
        float: left;
        cursor: pointer;
    }
    .item-video {
        float: right;
        cursor: pointer;
    }
    .item-pop-up-exit {
        float: right;
        cursor: pointer;
    }
    .item-pop-up-exit img {
        /*height: 40px;*/
        width: 20px;
    }

    .display_block{
        display: block;
    }
    .display_none {
        display: none;
    }

    @media (max-width: 1500px) {
        .col-left-logo-inner {
            font-size: 26px;
        }
    }

   /* @media (max-width: 1400px) {
        .items-block {
            font-size: 16px;
        }
    }*/
    @media (max-width: 1280px) {
        .items-block {
            font-size: 14px;
        }
        .col-left-logo-inner {
            font-size: 21px;
        }
    }
    @media (max-width: 1400px) {
   /* @media (max-width: 1024px) {*/
        .col-left-logo {
            height: 100px;
        }
        .col-left-logo-inner {
            font-size: 19px;
        }
        .col-right-double-left-item {
            height: 50px;
        }
        .col-right-double-right-item {
            height: 50px;
        }
        .col-left-menu{
            font-size: 20px;
        }
        .items-block {
            font-size: 12px;
            height: calc(100vh - 110px);
        }
        .item-outer-first {
            margin-top: 0px;
        }
        .info-status-block {
            height: 80px;
            padding-top: 20px;
            font-size: 13px;
        }
        .item-engineering-complex-inner-title {
            padding-bottom: 10px;
        }
        .item-pt-tha1-inner-title {
            padding-bottom: 10px;
        }
        .col-right-double-left-item{
            margin-bottom: 5px;
        }
        .col-right-double-right-item{
            margin-bottom: 5px;
        }
        .col-right-item {
            width: 94%;
            height: 50px;
            padding-left: 3%;
            padding-right: 3%;
            margin-bottom: 5px;
        }
        .col-right-item-pic {
            width: 50px;
            float: left;
        }
        .col-right-item-pic-icon {
            float: left;
            height: 50px;
            width: 50px;
            background: #00a070;
            -webkit-border-radius: 25px;
            display: table;

            text-align: center;
        }
        .col-right-item-pic-icon div {
            display: table-cell;
            vertical-align: middle;
        }
        .col-right-item-pic-icon img{
            max-width: 25px;
            max-height: 25px;
            vertical-align: middle;
            align-self: center;
        }

        .col-right-item-title {
            width: calc(100% - 50px);
            height: 50px;
            float: left;

            text-align: center;

        }
        .col-right-item-title-inner {
            float: right;
            background: #bfbfbf;
            width: 90%;
            display: table;
            font-weight: 500;
            height: 100%;
        }
        .col-right-item-title-inner div {

            display: table-cell;
            vertical-align: middle;

        }
        .col-right-item-pic-line {
            float: left;
            height: 50px;
            width: 10%;
            position: relative;
        }

    }
</style>

<script src="/dozor_js/jquery-1.11.2.min.js"></script>
<script src="/dozor_js/jquery.ba-throttle-debounce.min.js"></script>
<script src="/dozor_js/detectmobiledevice.js"></script>
<script src="/dozor_js/jquery.debounce-1.0.5.js"></script>

<script>
$(function() {
    $(".item-video").on("click", function(){
        openWindow(700, 600);
    });
    function openWindow(width, height){
        if(window.location.hostname == 'nordiceng.primesoftpro.ru'){
            var camera_link = 'http://10.12.0.14:81/video2.mjpg';
        }else{
            var camera_link = 'http://'+window.location.hostname+':81/video2.mjpg';
        }

        window.open(camera_link, 'camera', 'width='+width+',height='+height+',toolbar=no,location=no,menubar=no,left='+
            ((window.innerWidth - width)/2)+',top='+((window.innerHeight - height)/2));
    }
    if(! jQuery.browser.mobile){
        $(".col-right-item-pic-icon.work").on("mouseenter", function(){
            console.log("click");
            if($(this).hasClass("water")){
            $(".window-pop-up .item-scheme").html("<a href='/dozorfloor0.php'> Показать схему </a>");
            }else{
            $(".window-pop-up .item-scheme").html("<a href='/dozorengine.php'> Показать схему </a>");
            }
           //var dfdf =  $(".items-block").getBoundingClientRect();

            var total_container_width = $('body').width();
            var total_container_height = $('body').height();
            console.log('total_container_width ' + total_container_width);
            console.log('total_container_height ' + total_container_height);
            var parent = $(this).closest('.col-right-item-pic');
            var elem_coord = this.getBoundingClientRect();
            //var elem_coord = $(".col-right-item-pic-icon.work.ww").getBoundingClientRect();

            console.log(' elem_coord icon_right ' + elem_coord.right);
            console.log(' elem_coord icon_top ' + elem_coord.top);

            var icon_right = elem_coord.right;
            var icon_top = elem_coord.top;

            var window_pop_up_width = 320;
            var window_pop_up_height = 215;
            console.log('window_pop_up_height ' + window_pop_up_height);
            console.log('window_pop_up_width ' + window_pop_up_width);

            var popup_corner_left = icon_right;
            popup_corner_left = popup_corner_left + 'px';

            var popup_corner_right = total_container_width - icon_right;
            popup_corner_right = popup_corner_right + 'px';

            var popup_corner_top = icon_top + 'px';
            var popup_corner_bottom = total_container_height - icon_top - window_pop_up_height;
            popup_corner_bottom = popup_corner_bottom + 'px';

            console.log('popup_corner_left ' + popup_corner_left);
            console.log('popup_corner_right ' + popup_corner_right);
            console.log('popup_corner_top ' + popup_corner_top);
            console.log('popup_corner_bottom ' + popup_corner_bottom);

            $(".window-pop-up").css('left', popup_corner_left);
            $(".window-pop-up").css('top', popup_corner_top);
            $(".window-pop-up").css('bottom', popup_corner_bottom);
            $(".window-pop-up").css('right', popup_corner_right);

            if($(".window-pop-up").hasClass('display_none')) {
                $(".window-pop-up").removeClass('display_none');
            }

            if(! $(".window-pop-up").hasClass('display_block')) {
                $(".window-pop-up").addClass('display_block');
            }
        });

        $(".col-right-item-pic-icon.work").on("mouseleave", function(){
            console.log("mouseout");
            if($(".window-pop-up").hasClass('display_block')) {
                $(".window-pop-up").removeClass('display_block');
            }
            if(! $(".window-pop-up").hasClass('display_none')) {
                $(".window-pop-up").addClass('display_none');
            }
        });

        $('.window-pop-up').on('mouseenter', function(){
            console.log("window-pop-up mouseenter");
            if($(".window-pop-up").hasClass('display_none')) {
                $(".window-pop-up").removeClass('display_none');
                $(".window-pop-up").addClass('display_block')
            }
        });

        $('.window-pop-up').on('mouseleave', function(){
            console.log("window-pop-up mouseenter");
            if($(".window-pop-up").hasClass('display_block')) {
                $(".window-pop-up").removeClass('display_block');
                $(".window-pop-up").addClass('display_none');
            }
        });





    }else{
        $(".col-right-item-pic-icon.work").on("click", function(){
            /*console.log("click");*/
            $(".window-pop-up").show();
        });
        $(".item-pop-up-exit").on("click", function(){
            console.log("click");
            $(".window-pop-up").hide();
        });
    }
    $(".col-left-logo-inner").on("click", function(){
        console.log("click");
        window.open("/maps.php");
    });

	 $(".col-left-logo-inner").on("click", function(){
        console.log("click");
        window.open("/maps.php");
    });

    fetchData();
    setInterval(function() {
        console.log('fetch data');
        fetchData();
    }, 6000);

    var colorIndicatorArr = {
        'indicator_color_red' : '#bb676',
        'indicator_color_yellow' : '#ffda73',
        'indicator_color_green' : '#00a070'
    };

    function Item(class_name, trigger_id_high, trigger_id_middle, data){
        this.class_name = class_name;
        this.trigger_id_high = trigger_id_high;
        this.trigger_id_middle = trigger_id_middle;
        this.getTriggerState = function(data){
            if (!$.isEmptyObject(data['trigger'][this.trigger_id_high])) {
                this.trigger_state = 2;
            } else if (!$.isEmptyObject(data['trigger'][this.trigger_id_middle])) {
                this.trigger_state = 1;
            } else {
                this.trigger_state = 0;
            }
        };
        this.getTriggerState(data);
        this.getColorFromState = function(){
            if (this.trigger_state == 2) {
                this.indicator_color = '#bb6767';
            } else if (this.trigger_state == 1) {
                this.indicator_color = '#ffda73';
            } else {
                this.indicator_color = '#00a070';
            }
        };
        this.getColorFromState();
        this.applyIconParameters = function () {
            $(".col-right-item-pic-icon.work."+this.class_name).attr("data-state", this.trigger_state);
            $(".col-right-item-pic-icon.work."+this.class_name).css('background', this.indicator_color);
        };
        this.applyIconParameters();
        this.getErrorCounter = function(){
            if(this.trigger_state !== 0){
                this.counter_error = 1;
            }else{
                this.counter_error = '';
            }

        }
        this.getErrorCounter();
        this.applyMenuItemParameters = function(){
            var indicator_color = this.indicator_color;
            $("#menu-indicator-color-"+this.class_name+" .menu-top-level-item-indicator-half").each(function(){
                $(this).removeClass('red');
                $(this).removeClass('green');
                $(this).removeClass('yellow');
                $(this).css('background', indicator_color);
            });
            $("#menu-indicator-counter-"+this.class_name+" p").text(this.counter_error);

        }
        this.applyMenuItemParameters();
        this.applyInfoStatus = function(){
            if(this.trigger_state == 2){
                $(".info-status-block-item."+this.class_name+"2").css("display", "block");
                $(".info-status-block-item."+this.class_name+"1").css("display", "none");
                $(".info-status-block-item."+this.class_name+"0").css("display", "none");
            }else if(this.trigger_state == 1){
                $(".info-status-block-item."+this.class_name+"1").css("display", "block");
                $(".info-status-block-item."+this.class_name+"2").css("display", "none");
                $(".info-status-block-item."+this.class_name+"0").css("display", "none");
            }else{
                $(".info-status-block-item."+this.class_name+"0").css("display", "block");
                $(".info-status-block-item."+this.class_name+"1").css("display", "none");
                $(".info-status-block-item."+this.class_name+"2").css("display", "none");
            }
        };
        this.applyInfoStatus();

    }



    /*function getTriggerState(objData, objItem){
        var trigger_state;
        if (!$.isEmptyObject(objData['trigger'][trigger_id_high])) {
            trigger_state = 2;
        } else if (!$.isEmptyObject(objData['trigger'][trigger_id_middle])) {
            trigger_state = 1;
        } else {
            trigger_state = 0;
        }
        return trigger_state;
    }

    function getColorFromState(state){
        var color;
        if (state == 2) {
            color = '#bb6767';
        } else if (state == 1) {
            color = '#ffda73';
        } else {
            color = '#00a070';
        }
        return color;
    }
    function applyIconParameters(class_name, state, color){
        $(".col-right-item-pic-icon.work."+class_name).attr("data-state", state);
        $(".col-right-item-pic-icon.work."+class_name).css('background', color);
    }
    function getErrorCounter(state){
        var counter_error;
        if(state !== 0){
            counter_error = 1;
        }else{
            counter_error = 0;
        }
        return counter_error;
    }
    function applyMenuItemParameters(class_name, color, counter_error){
        $("#menu-indicator-color-"+class_name+" .menu-top-level-item-indicator-half").each(function(){
            $(this).removeClass('red');
            $(this).removeClass('green');
            $(this).removeClass('yellow');
            $(this).css('background', color);
        });
        $("#menu-indicator-counter-"+class_name+" p").text(counter_error);
    }*/




    function fetchData() {
        $.ajax({
            url: 'dozor_ajax/getdata.php',
            success: function (data) {
                var obj = jQuery.parseJSON(data);
                console.log(obj);
                //obj['trigger'][13591] = {'triggerid' : 1, 1: 2}; // верхний бак переполнен
                //obj['trigger'][13589] = {'triggerid': 1, 1: 2}; // верхний бак пустой
                var Water = new Item('water', '13591', '13589', obj);
                //obj['trigger'][13563] = {'triggerid' : 1, 1: 2}; // t > 80
                //obj['trigger'][13561] = {'triggerid': 1, 1: 2}; // t > 50
                var Temperature = new Item('temperature', '13563', '13561', obj);
            }
        });
    };

});
</script>
<body>
<div class="dozor-main-inner">
    <div class="col-left">

        <div class="col-left-logo">
            <!--<div class="col-left-logo-inner-pre">-->
                <div class="col-left-logo-inner">
                    <div class="col-left-logo-text">
                        Панель<br/>
                        администратора
                    </div>
                </div>
            <!--</div>-->
        </div>

        <div class="col-left-menu">
            <div class="menu-top-level-item-outer item-outer-first">
                <div class="menu-top-level-item">
                    <div class="menu-top-level-item2">
                        <div class="menu-top-level-item-text-and-indicator-color">
                            <div class="menu-top-level-item-text">
                                <div class="menu-top-level-item-text-inner">
                                    <div class="menu-top-level-item-text-inner2">
                                        Инженерный<br>комплекс
                                    </div>
                                </div>
                            </div>
                            <div class="menu-top-level-item-indicator-color water">
                                <div class="menu-top-level-item-indicator-color2 mod">
                                    <div class="menu-top-level-item-indicator-color-inner" id="menu-indicator-color-water">
                                        <div class="menu-top-level-item-indicator-half red">
                                        </div>
                                        <div class="menu-top-level-item-indicator-half yellow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-top-level-item-indicator-num">
                            <div class="menu-top-level-item-indicator-num-inner" id="menu-indicator-counter-water">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="menu-top-level-item-outer">
                <div class="menu-top-level-item">
                    <div class="menu-top-level-item-text-and-indicator-color">
                        <div class="menu-top-level-item-text">
                            <div class="menu-top-level-item-text-inner">
                                <div class="menu-top-level-item-text-inner2">
                                    THA - 1500
                                </div>
                            </div>
                        </div>
                        <div class="menu-top-level-item-indicator-color temperature">
                            <div class="menu-top-level-item-indicator-color2 mod">
                                <div class="menu-top-level-item-indicator-color-inner" id="menu-indicator-color-temperature">
                                    <div class="menu-top-level-item-indicator-half red">
                                    </div>
                                    <div class="menu-top-level-item-indicator-half yellow">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-top-level-item-indicator-num">
                        <div class="menu-top-level-item-indicator-num-inner" id="menu-indicator-counter-temperature">
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>



            <div class="menu-item-v1-top">
                <div class="line-delimiter"></div>
                <div class="menu-item-v1-top2">
                    <div class="menu-item-v1-top-inner">
                        <div class="menu-item-v1-top-inner-text">
                            PT THA
                        </div>
                        <div class="menu-item-v1-indicator-cell">
                            <div class="menu-item-v1-indicator">
                                <div class="menu-item-v1-indicator-half">
                                </div>
                                <div class="menu-item-v1-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item-v1-top">
                <div class="line-delimiter"></div>
                <div class="menu-item-v1-top2">
                    <div class="menu-item-v1-top-inner">
                        <div class="menu-item-v1-top-inner-text">
                            Щитовая №2
                        </div>
                        <div class="menu-item-v1-indicator-cell">
                            <div class="menu-item-v1-indicator">
                                <div class="menu-item-v1-indicator-half">
                                </div>
                                <div class="menu-item-v1-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item-v1-top">
                <div class="line-delimiter"></div>
                <div class="menu-item-v1-top2">
                    <div class="menu-item-v1-top-inner">
                        <div class="menu-item-v1-top-inner-text">
                            Щитовая №3
                        </div>
                        <div class="menu-item-v1-indicator-cell">
                            <div class="menu-item-v1-indicator">
                                <div class="menu-item-v1-indicator-half">
                                </div>
                                <div class="menu-item-v1-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-right">
        <div class="col-right-inner">
            <div class="info-status-block">
                <div class="info-status-block-inner">
                    <div class="info-status-block-item temperature0">
                        <div class="info-status-block-item-indicator green"></div>
                        <div class="info-status-block-item-title">
                            ТНA - 1500<br/>ИСПРАВЕН
                        </div>
                    </div>
                    <div class="info-status-block-item water0">
                        <div class="info-status-block-item-indicator green"></div>
                        <div class="info-status-block-item-title">
                            ИНЖЕНЕРНЫЙ КОМПЛЕКС<br/>ИСПРАВЕН
                        </div>
                    </div>
                    <div class="info-status-block-item water1">
                        <div class="info-status-block-item-indicator yellow"></div>
                        <div class="info-status-block-item-title">
                            ИНЖЕНЕРНЫЙ КОМПЛЕКС<br/>НЕ ИСПРАВЕН
                        </div>
                    </div>
                    <div class="info-status-block-item water2">
                        <div class="info-status-block-item-indicator red"></div>
                        <div class="info-status-block-item-title">
                            ИНЖЕНЕРНЫЙ КОМПЛЕКС<br/>НЕ ИСПРАВЕН
                        </div>
                    </div>
                    <div class="info-status-block-item temperature1">
                        <div class="info-status-block-item-indicator yellow"></div>
                        <div class="info-status-block-item-title">
                            ТНA - 1500<br/>НЕ ИСПРАВЕН
                        </div>
                    </div>
                    <div class="info-status-block-item temperature2">
                        <div class="info-status-block-item-indicator red"></div>
                        <div class="info-status-block-item-title">
                            ТНA - 1500<br/>НЕ ИСПРАВЕН
                        </div>
                    </div>

                </div>
            </div>
            <div class="items-block">
                <div class="window-pop-up">
                    <div class="window-pop-up-inner">
                        <div class="item-room-and-exit">
                            <div class="item-room-title">
                                Помещение 032
                            </div>
                           <!-- <div class="item-pop-up-exit">
                                <img src="/dozor_images/multiply.png">
                            </div>-->
                        </div>
                        <div class="item-scheme-and-video">
                            <div class="item-scheme">
                                Показать схему
                            </div>
                            <div class="item-video">
                                Показать видео
                            </div>
                        </div>
                        <div class="item-characteristics">
                            Показать характеристики и чертежи устройства
                        </div>
                        <div class="item-disconnection">
                            Отключить устройство
                        </div>
                    </div>
                </div>
                <div class="item-engineering-complex">
                    <div class="item-engineering-complex-inner">
                        <div class="item-engineering-complex-inner-title">
                            Инженерный<br/>комплекс
                        </div>
                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon work water">
                                    <div>
                                        <img src="/dozor_images/system_water.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ВОДОСНАБЖЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_energy.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ЭНЕРГОСНАБЖЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_fire_alarm.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ПОЖАРНОЙ<br/>СИГНАЛИЗАЦИИ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_conditioning.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>КОНДИЦИОНИРОВАНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_fire_fighting.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ПОЖАРОТУШЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_supervision.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ВИДЕОНАБЛЮДЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_remote_access_control.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        СКУД
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-pt-tha">
                    <div class="item-pt-tha1-inner">
                        <div class="item-pt-tha1-inner-title">
                            PT THA
                        </div>
                        <div class="col-right-double">
                            <div class="col-right-double-left">
                                <div class="col-right-double-left-inner">

                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    Система<br/>ВТОРИЧНАЯ
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    КАБИНА<br/>НАДЗЕРКАЛЬНАЯ
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    РЕФЛЕКТОР
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon work temperature">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    ЭЛЕКТРОПРИВОД<br/>НАВЕДЕНИЯ
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    УСТРОЙСТВО<br/>УПРАВЛЕНИЯ ПРИВОДОМ
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    СИСТЕМА<br/>ВИДЕОНАБЛЮДЕНИЯ
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    УСУК
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    КОНТРРЕФЛЕКТОР
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!--
                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_radio_dish.png"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    СИСТЕМА УПРАВЛЕНИЯ<br/>ГЕКСАПОДОМ
                                                </div>
                                            </div>
                                        </div>                                    
									</div>		
									-->									
                                </div>
                            </div>
                            <div class="col-right-double-right">
                                <div class="col-right-double-left-inner">

                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_panel_2.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    ЩИТОВАЯ №2
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_panel_3.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    ЩИТОВАЯ №3
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_weather_station.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    МЕТЕОСТАНЦИЯ
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_auto_air_dehydrator.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    АВТОМАТИЧЕСКИЙ<br/>ДЕГИДРАТОР ВОЗДУХА
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_arm_1.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    АРМ 1 КИС
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_arm_2.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    АРМ 2 КИС
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_arm_3.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    АРМ 3 КИС
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_arm_4.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    АРМ 4 КИС
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</body>