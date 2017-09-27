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

        text-align: center;
        display: table-cell;
        vertical-align: middle;
        font-size: 30px;
        cursor: pointer;
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
        height: 650px;
        margin-bottom: -30%;
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

    .line-delimiter{
        height: 10px;
        background: white;
        margin-left: 48.5%;
        margin-right: 48.5%;
    }

    .col-left-video {
        width: 100%;
        height: 20%;
        vertical-align:bottom;
        display:inline-block;

        padding: 10px;
        box-sizing: border-box;
        background: #003e63;
    }
    .col-left-video-title {
        color: white;
        padding: 2px;
    }
    .col-left-video-video{
        border: 1px solid black;
        background: white;
        height: -webkit-fill-available;
        box-sizing: border-box;
        cursor: pointer;
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
        height: 100%;

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
        cursor: pointer;
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
        height: 50px;
        padding-left: 3%;
        padding-right: 6%;
        margin-bottom: 10px;
    }

    .col-right-double-right-item{
        width: 91%;
        height: 50px;
        padding-left: 6%;
        padding-right: 3%;
        margin-bottom: 10px;
    }


    /* dozorfloor styles  */

    .map-info-status-block {
        width: 100%;
        height: 140px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-right: 6%;
        box-sizing: border-box;
    }

    .map-info-status-block-item {

        float: right;
        height: 100px;
        width: 100px;
        background: #bfc5cc;
        border: 1px solid black;
        border-radius: 4px;
        display: table;
        margin-left: 3%;
    }
    .map-info-status-block-item-inner {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }
    .map-info-status-block-item-inner img {
        max-width: 60px;
        max-height: 60px;
        vertical-align: middle;
        align-self: center;
        text-align: center;
    }

    .map-container {
        width: 100%;
        height: calc(100% - 140px);
        background: #003050;
        margin-left: 1px;
        position: relative;
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
        background: #d9d9d9;
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
    .item-pop-up-exit {
        float: right;
        cursor: pointer;
    }
    .item-disconnection {
        border-bottom: none !important;
    }

    .map-container-floors-outer {
        width: 100%;
        height: 40px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .map-container-floors{

        width: 94%;
        padding-right: 3%;
        padding-left: 3%;
        /*text-align: justify;*/
        font-family: "RobotoRegular";
        /*box-sizing: border-box;*/
        height: 40px;
        /*display: flex;
        justify-content: center;*/

        display: -webkit-flex;
        display:    -moz-flex;
        display:     -ms-flex;
        display:      -o-flex;
        display:         flex;

        -webkit-justify-content: space-between;
        -moz-justify-content: space-between;
        -ms-justify-content: space-between;
        -o-justify-content: space-between;
        justify-content: space-between;
        display:none;
    }
    .map-container-floor-outer {
        width: 32%;
        height: 40px;
        background: white;
        display: inline-block;
        position: relative;
        text-align: center;
        color: #003e63;
        font-size: 18px;

    }
    .map-container-floor {
        display: table;
        text-align: center;
        width: 100%;
        height: 100%;
    }
    .map-container-floor-inner{
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }

    /*    .map-container-floors:before{
            content: '';
            display: block;
            width: 100%;
            height: 0;
        }

        .map-container-floors:after {
            width: 100%;
            height: 0;
            visibility: hidden;
            overflow: hidden;
            content: '';
            display: inline-block;
        }*/

    .map-container-map{
        width: 100%;
        height: calc(100% - 80px);
        padding-bottom: 20px;
        box-sizing: border-box;
        text-align: center;
    }
    .map-container-map-inner {
        display: inline-block;
        height: 100%;
        width: 100%;
    }
    .map-container-map-inner-img {
        display: block;
    //width: ;
        margin: 0 auto;
        height: 100%;
        background-image: url("/dozor_images/engine2.png");
        background-repeat:no-repeat;
        background-size: contain;
        position: relative;
    }
    .map-container-map-inner-img {

    }


    .col-right-item-pic {
        width: 50px;
        float: left;
    }
    .col-right-item-pic-icon {
        float: left;
        height: 40px;
        width: 40px;
        background: #00a070;
        -webkit-border-radius: 20px;
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
    .item-pop-up-exit img {
        /*height: 40px;*/
        width: 20px;
    }
    .item-disconnection {

    }

    .system_temperature {
        position: absolute;
        left: 37%;
        top: 30%;
    }

    .indicator_temperature {
        position: absolute;
        left: 93%;
        top: 83%;
    }
    .col-right-item-pic-indicator-temperature {
        width: 90px;
        float: left;
    }
    .col-right-item-pic-icon-indicator-temperature {
        float: left;
        height: 90px;
        width: 90px;
        background: #00a070;
        -webkit-border-radius: 45px;
        display: table;
        text-align: center;
    }
    .col-right-item-pic-icon-indicator-temperature .in1 {
        display: table-cell;
        vertical-align: middle;
    }
    .col-right-item-pic-icon-indicator-temperature .in1 .in2{
        margin-left: 7.5px;
    }
    .col-right-item-pic-icon-indicator-temperature-inner {
        float: left;
        height: 75px;
        width: 75px;
        background: white;
        -webkit-border-radius: 37.5px;
        display: table;
        text-align: center;
    }
    .col-right-item-pic-icon-indicator-temperature-inner-inner {
        margin: 10%;
        height: 80%;
        width: 80%;
        color: grey;
    }
    .indicator-temperature-number-big {
        height: 100%;
        width: 80%;
        float: left;
        font-size: 40px;
    }
    .indicator-temperature-small {
        height: 100%;
        width: 20%;
        float: right;
    }
    .indicator-temperature-temperature-sign {
        height: 50%;
    }
    .indicator-temperature-number-small {
        height: 50%;
    }


    @media (max-width: 1500px) {
        .col-left-logo-inner {
            font-size: 26px;
        }
    }


    @media (max-width: 1400px) {
        .items-block {
            font-size: 16px;
        }
    }
    @media (max-width: 1280px) {
        .items-block {
            font-size: 14px;
        }
        .col-left-logo-inner {
            font-size: 21px;
        }
        .col-left-menu {
            height: 550px;
        }
    }
    @media (max-width: 1024px) {
        .col-left-logo-inner {
            font-size: 19px;
        }
        .col-left-menu{
            font-size: 20px;
            height: 510px;
        }
        .items-block {
            font-size: 12px;
        }

        .col-right-item {
            width: 94%;
            height: 50px;
            padding-left: 3%;
            padding-right: 3%;
            margin-bottom: 10px;
        }
        .col-right-item-pic {
            width: 50px;
            float: left;
        }
        .col-right-item-pic-icon {
            float: left;
            height: 30px;
            width: 30px;
            background: #00a070;
            -webkit-border-radius: 15px;
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
        .info-status-block {
            font-size: 15px;
        }
    }
    .display_block{
        display: block;
    }
    .display_none {
        display: none;
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

</style>
<script src="/dozor_js/jquery-1.11.2.min.js"></script>
<script src="/dozor_js/jquery.ba-throttle-debounce.min.js"></script>
<script src="/dozor_js/detectmobiledevice.js"></script>
<script src="/dozor_js/jquery.debounce-1.0.5.js"></script>
<script>
function resizeMap(){
	var height = $(".map-container-map-inner-img").height();
	console.log(height);
	height = height + 'px';
	$(".map-container-map-inner-img").width(height);
}

function Item(class_category, class_group, class_element, trigger_id_high, trigger_id_middle, data){
	this.class_category = class_category;
	this.class_group = class_group;
	this.class_element = class_element;
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
		$(".indicator-pic.system-"+this.class_element+" .col-right-item-pic-icon").attr("data-state", this.trigger_state);
		$(".indicator-pic.system-"+this.class_element+" .col-right-item-pic-icon").css('background', this.indicator_color);
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
		$(".menu-top-level-item.category-"+this.class_category+" .menu-top-level-item-indicator-half").each(function(){
			$(this).removeClass('red');
			$(this).removeClass('green');
			$(this).removeClass('yellow');
			$(this).css('background', indicator_color);
		});
		$(".category-"+this.class_category+" .menu-top-level-item-indicator-num  p").text(this.counter_error);

	}
	this.applyMenuItemParameters();
	this.showGroupElements = function(){
		if(this.trigger_state === 0){
			$(".indicator-pic.system-"+this.class_group).each(function(){
				$(this).attr("data-state", "1");
				console.log($(this));
			});
		}else{
			$(".indicator-pic.system-"+this.class_element).attr("data-state", "1");
		}
	};
	this.showGroupElements();
	this.changeStateIndicatorTemperature = function(data){
		if(this.class_element == "temperature-0"){
			var lastvalue = data['items'][23675]['lastvalue'];
			lastvalueArr = lastvalue.split('.');
			$('.indicator-temperature-number-big').text(lastvalueArr[0]);
			lastvalueArr2 = lastvalueArr[1].split('');
			$('.indicator-temperature-number-small').text('.' + lastvalueArr2[0]);
			$('.col-right-item-pic-icon-indicator-temperature').css('background', this.indicator_color);
		}
	};
	this.changeStateIndicatorTemperature(data);
	console.log(' ');
	console.log("this.class_category " + this.class_category);
	console.log("this.class_group " + this.class_group);
	console.log("this.class_element " + this.class_element);
	console.log("this.trigger_id_high " + this.trigger_id_high);
	console.log("this.trigger_id_middle " + this.trigger_id_middle);
	console.log("this.trigger_state " + this.trigger_state);
	console.log("this.indicator_color " + this.indicator_color);
	console.log("this.counter_error " + this.counter_error);
}
	
$(function() {
	fetchData();
	resizeMap();

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
		console.log('not mobile');
		$(".col-right-item-pic-icon").on("mouseenter", function(){
			console.log("click");
			var total_container_width = $('.map-container-map-inner-img').width();
			var total_container_height = $('.map-container-map-inner-img').height();
			console.log('total_container_width ' + total_container_width);
			console.log('total_container_height ' + total_container_height);

			var parent = $(".col-right-item-pic-icon").closest('.indicator-pic');

			console.log('icon_left ' + parent.css('left'));
			console.log('icon_top ' + parent.css('top'));

			var icon_left = parseInt(parent.css('left'));
			var icon_top = parseInt(parent.css('top'));

			var window_pop_up_width = 320;
			var window_pop_up_height = 215;
			console.log('window_pop_up_height ' + window_pop_up_height);
			console.log('window_pop_up_width ' + window_pop_up_width);
			var popup_corner_left = icon_left - window_pop_up_width;
			popup_corner_left = popup_corner_left + 'px';
			var popup_corner_right = total_container_width - icon_left;
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

		$(".col-right-item-pic-icon").on("mouseleave", function(){
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
				$(".window-pop-up").addClass('display_none')
			}
		});
	}else{
		$(".col-right-item-pic-icon").on("click", function(){
			/*console.log("click");*/
			$(".window-pop-up").show();
		});
	}
	
});
	
setInterval(function() {
	console.log('fetch data');
	fetchData();
}, 6000);

function fetchData() {
	$.ajax({
		url: 'dozor_ajax/getdata.php',
		success: function (data) {
			var obj = jQuery.parseJSON(data);
			
			//obj['trigger'][13591] = {'triggerid' : 1, 1: 2}; // верхний бак переполнен
			//obj['trigger'][13589] = {'triggerid': 1, 1: 2}; // верхний бак пустой
			var Water = new Item('engineering-complex', 'water', 'water-0', '13591', '13589', obj);
			//obj['trigger'][13563] = {'triggerid' : 1, 1: 2}; // t > 80
			//obj['trigger'][13561] = {'triggerid': 1, 1: 2}; // t > 50               
			var Temperature = new Item('tha1500','temperature', 'temperature-0', '13563', '13561', obj);
			
			// var lastvalue = obj['items'][23675]['lastvalue'];
			// lastvalueArr = lastvalue.split('.');
			// $('.indicator-temperature-number-big').text(lastvalueArr[0]);
			// lastvalueArr2 = lastvalueArr[1].split('');
			
			// $('.indicator-temperature-number-small').text('.' + lastvalueArr2[0]);
			// var temp_indicator_color;

			// console.log(obj['trigger']);

			// if (!$.isEmptyObject(obj['trigger'][13564])) {
				// temp_indicator_color = '#bb6767';
			// } else if (!$.isEmptyObject(obj['trigger'][13562])) {
				// temp_indicator_color = '#ffda73';
			// } else {
				// temp_indicator_color = '#00a070';
			// }

			// console.log('temp_indicator_color ' + temp_indicator_color);

			// $('.col-right-item-pic-icon-indicator-temperature').css('background', temp_indicator_color);
			// $('.col-right-item-pic-icon').css('background', temp_indicator_color);

			// $('.complex-engineering .menu-top-level-item-indicator-half').each(function( index ) {
				// $(this).removeClass('red');
				// $(this).removeClass('green');
				// $(this).removeClass('yellow');
				// $(this).css('background', temp_indicator_color);
			// });
			// if(temp_indicator_color == '#bb6767' ||  temp_indicator_color == '#ffda73'){
				// $('.menu-top-level-item-indicator-num-inner p').text(1);
			// }else{
				// $('.menu-top-level-item-indicator-num-inner p').text('');
			// }

		}
	});
};

$(".col-left-logo-inner").on("click", function(){
	console.log("click");
	window.open("/maps.php");
});

</script>
<body>
<div class="dozor-main-inner">
    <div class="col-left">

        <div class="col-left-logo">
            <div class="col-left-logo-inner">
                <div class="col-left-logo-text">
                    Панель<br/>
                    администратора
                </div>
            </div>
        </div>
        <div class="col-left-menu">
            <div class="menu-top-level-item-outer">
                <div class="menu-top-level-item category-engineering-complex">
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
                                <div class="menu-top-level-item-indicator-color2">
                                    <div class="menu-top-level-item-indicator-color-inner">
                                        <div class="menu-top-level-item-indicator-half">
                                        </div>
                                        <div class="menu-top-level-item-indicator-half">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="menu-top-level-item-indicator-num">
							<div class="menu-top-level-item-indicator-num-inner">
								<p>5</p>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="menu-top-level-item-outer">
                <div class="menu-top-level-item category-tha1500">
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
                                <div class="menu-top-level-item-indicator-color-inner complex-engineering">
                                    <div class="menu-top-level-item-indicator-half red">
                                    </div>
                                    <div class="menu-top-level-item-indicator-half yellow">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-top-level-item-indicator-num">
                        <div class="menu-top-level-item-indicator-num-inner">
                            <p>5</p>
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
<!--		
        <div class="col-left-video">
            <div class="col-left-video-title">
                Помещение №4
            </div>
            <div class="col-left-video-video">
                <img src="http://10.12.0.202:81/video2.mjpg" />
            </div>
        </div>
-->		
    </div>
    <div class="col-right">
        <div class="col-right-inner">
            <div class="map-info-status-block">
                <div class="map-info-status-block-inner">
                    <div class="map-info-status-block-item">
                        <div class="map-info-status-block-item-inner">
                            <img src="/dozor_images/route.png"/>
                        </div>
                    </div>
                    <div class="map-info-status-block-item">
                        <div class="map-info-status-block-item-inner">
                            <img src="/dozor_images/alarm.png"/>
                        </div>
                    </div>
                    <div class="map-info-status-block-item">
                        <div class="map-info-status-block-item-inner">
                            <img src="/dozor_images/glaz.png"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-container">
                <div class="map-container-floors-outer">
                    <div class="map-container-floors">
                        <div class="map-container-floor-outer">
                            <div class="map-container-floor">
                                <div class="map-container-floor-inner">
                                    Цокольный этаж
                                </div>
                            </div>
                        </div>
                        <div class="map-container-floor-outer">
                            <div class="map-container-floor">
                                <div class="map-container-floor-inner">
                                    Первый этаж
                                </div>
                            </div>
                        </div>
                        <div class="map-container-floor-outer">
                            <div class="map-container-floor">
                                <div class="map-container-floor-inner">
                                    Второй этаж
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-container-map">
                    <div class="map-container-map-inner">
                        <div class="map-container-map-inner-img">
                            <div class="indicator-pic system_temperature system-temperature-0">
                                <div class="col-right-item-pic">
                                    <div class="col-right-item-pic-icon">
                                        <div>
                                            <!--<img src="/dozor_images/system_remote_access_control.png"/>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="window-pop-up">
                                <div class="window-pop-up-inner">
                                    <div class="item-room-and-exit">
                                        <div class="item-room-title">
                                            Помещение 032
                                        </div>
                                        <!--<div class="item-pop-up-exit">
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
                            <div class="indicator-pic indicator_temperature">
                                <div class="col-right-item-pic-indicator-temperature">
                                    <div class="col-right-item-pic-icon-indicator-temperature">
                                        <div class="in1">
                                            <div class="in2">
                                                <div class="col-right-item-pic-icon-indicator-temperature-inner">
                                                    <div class="col-right-item-pic-icon-indicator-temperature-inner-inner">
                                                        <div class="indicator-temperature-number-big">
                                                            80
                                                        </div>
                                                        <div class="indicator-temperature-small">
                                                            <div class="indicator-temperature-temperature-sign">
                                                                o
                                                            </div>
                                                            <div class="indicator-temperature-number-small">
                                                                .2
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
        </div>
    </div>

</body>