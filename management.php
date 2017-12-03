<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
<?
// ALTER TABLE  dozor_triggers ADD COLUMN  STATE_ACTIVE enum( 'Y', 'N') NOT NULL AFTER NAME;

/*$sql = "INSERT INTO bitrix_60.dozor_triggers (ID, NAME, STATE_ACTIVE ) VALUES (13591, 'name1', 'Y')";
$DB->Query($sql);*/

/*$sql = "INSERT INTO bitrix_60.dozor_triggers (ID, NAME, STATE_ACTIVE ) VALUES (13589, 'name1', 'Y')";
$DB->Query($sql);

$sql = "INSERT INTO bitrix_60.dozor_triggers (ID, NAME, STATE_ACTIVE ) VALUES (13563, 'name1', 'Y')";
$DB->Query($sql);

$sql = "INSERT INTO bitrix_60.dozor_triggers (ID, NAME, STATE_ACTIVE ) VALUES (13561, 'name1', 'Y')";
$DB->Query($sql);*/


/*$sql = "UPDATE bitrix_60.dozor_triggers
        SET NAME = 'верхний бак переполнен', STATE_ACTIVE = 'N'
        WHERE ID = 13591
";
$DB->Query($sql);

$sql = "UPDATE bitrix_60.dozor_triggers
        SET NAME = 'верхний бак пустой', STATE_ACTIVE = 'N'
        WHERE ID = 13589
";
$DB->Query($sql);

$sql = "UPDATE bitrix_60.dozor_triggers
        SET NAME = 't > 80', STATE_ACTIVE = 'N'
        WHERE ID = 13563
";
$DB->Query($sql);

$sql = "UPDATE bitrix_60.dozor_triggers
        SET NAME = 't > 50', STATE_ACTIVE = 'N'
        WHERE ID = 13561
";
$DB->Query($sql);*/

/*$sql = "INSERT INTO bitrix_60.dozor_items (ID, VALUE) VALUES (23675, 85.77)";
$DB->Query($sql);*/

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Кодировка веб-страницы -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
</head>
<body>
<!-- Подключаем jQuery -->
<script src="/dozor_js/jquery-1.11.2.min.js"></script>
<script src="/dozor_js/jquery.ba-throttle-debounce.min.js"></script>
<script src="/dozor_js/detectmobiledevice.js"></script>
<script src="/dozor_js/jquery.debounce-1.0.5.js"></script>
<!-- Подключаем плагин Popper (необходим для работы компонента Dropdown и др.) -->
<!--<script src="bootstrap/js/popper.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!-- Подключаем Bootstrap JS -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<!--<button type="button" class="btn btn-primary" data-toggle="popover"
        title="Сообщение" data-content="Ура, Bootstrap 4 работает">
    Поднеси ко мне курсор
</button>-->




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Панель управления</h1><br/>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 block">
            <h2>Температура</h2>
            <br/>
            <button type="button" class="btn  btn-bd-light temperature-sensor-red">
                Нагреть датчик до 85 градусов
            </button>
            <br/><br/>
            <button type="button" class="btn btn-bd-light temperature-sensor-yellow">
                Нагреть датчик до 55 градусов
            </button>
            <br/><br/>
            <button type="button" class="btn btn-bd-light temperature-sensor-green">
                Снять нагрев с датчика
            </button>
        </div>
        <div class="col-md-4 block">
            <h2>Вода</h2>
            <br/>
            <button type="button" class="btn  btn-bd-light water-sensor-red">
                Красный
            </button>
            <br/><br/>
            <button type="button" class="btn  btn-bd-light water-sensor-yellow">
                Желтый
            </button>
            <br/><br/>
            <button type="button" class="btn  btn-bd-light water-sensor-green">
                Зеленый
            </button>
            <br/><br/>

        </div>
    </div>
</div>
<!--<div class="container">
    <div class="row">
        <div class="col-md-12 block2">
            <h1>FOOTER</h1>
        </div>
    </div>
</div>-->

<!-- После подключения jQuery, Popper и Bootstrap JS -->
<script>
$(function () {
    $('[data-toggle="popover"]').popover({trigger:'hover'});
    $('.temperature-sensor-red').on('click', function(){
        console.log('');
        console.log('');
        console.log('CLICK RED');
        changeTemperatureSensorToRed();
    });
    $('.temperature-sensor-yellow').on('click', function(){
        console.log('');
        console.log('');
        console.log('CLICK YELLOW');
        changeTemperatureSensorToYellow();
    });
    $('.temperature-sensor-green').on('click', function(){
        console.log('');
        console.log('');
        console.log('CLICK GREEN');
        changeTemperatureSensorToGreen();
    });
    $('.water-sensor-red').on('click', function(){
        console.log('');
        console.log('');
        console.log('CLICK RED');
        changeWaterSensorToRed();
    });
    $('.water-sensor-yellow').on('click', function(){
        console.log('');
        console.log('');
        console.log('CLICK YELLOW');
        changeWaterSensorToYellow();
    });
    $('.water-sensor-green').on('click', function(){
        console.log('');
        console.log('');
        console.log('CLICK GREEN');
        changeWaterSensorToGreen();
    });
});

/*function getArrIterativeChangeTemperature(initial, final){
    var stepTemperature = 2;
    var delta = Math.ceil(Math.abs(final - initial)/stepTemperature)+3;
    console.log('initial '+ initial +' final '+ final +' delta ' + delta);
    var current = initial;
    var arrTemperatures = [];
    for(var i=0; i<delta; i++){
        if(initial < final) {
            current += 1.8 + Math.random() * 0.2;
            if((current < final) || (current - final >= 0 && current - final <= stepTemperature * 1.1)){
                arrTemperatures[i] = current;
                //console.log('current ' + current);
            }
        }else{
            current -= 1.8 + Math.random() * 0.2;
            //console.log('current ' + current);
            if(current > final){
                arrTemperatures[i] = current;
                //console.log('current ' + current);
            }else if(final - current >= 0 && final - current <= stepTemperature * 1.1){
                if(arrTemperatures[i-1] != final) {
                    arrTemperatures[i] = final;
                }
            }
        }
    }
    console.log(arrTemperatures);
    return arrTemperatures;
}*/

function modifyTemperatureAndTriggersInDb(params_temperature){
    console.log('modifyTemperatureAndTriggersInDb in ');
    console.log(params_temperature);
    var i = params_temperature['index'];
    var arrTemperatures = params_temperature['arr_temperature'];
    $.ajax({
        url: 'dozor_ajax/setdata.php',
        method: "POST",
        data: {
            action: "temperature-change",
            value: params_temperature
        },
        success: function (data) {}
    });

    var current_state_trigger_red = params_temperature['trigger_red_state'];
    var current_state_trigger_yellow = params_temperature['trigger_yellow_state'];
    setTriggersState(params_temperature);
}

function modifyTemperatureTriggersInDb(trigger_red, trigger_yellow){
    $.ajax({
     url: 'dozor_ajax/setdata.php',
     method: "POST",
     data: {
        action: "temperature-triggers-modify",
        trigger_red: trigger_red,
        trigger_yellow: trigger_yellow
     },
     success: function (data) {

     }
     });
}

function setTriggersState(current_temperature, current_state_trigger_red, current_state_trigger_yellow){
    var trigger_red, trigger_yellow;
    var modify = 0;
    if(current_temperature >= 85 && (current_state_trigger_yellow != 'Y' || current_state_trigger_red != 'Y')){
        trigger_red = 'Y';
        trigger_yellow = 'Y';
        modify = 1;
    }else if(current_temperature >= 55 && current_state_trigger_yellow != 'Y'){
        trigger_red = 'N';
        trigger_yellow = 'Y';
        modify = 1;
    }else if(current_state_trigger_yellow != 'N' || current_state_trigger_red != 'N'){
        trigger_red = 'N';
        trigger_yellow = 'N';
        modify = 1;
    }else{}

    //conso
    if(modify == 1) {
        console.log('setTriggersState current_temperature' +current_temperature );
        console.log('setTriggersState current_state_trigger_red ' +current_state_trigger_red );
        console.log('setTriggersState current_state_trigger_yellow ' +current_state_trigger_yellow );

        modifyTemperatureTriggersInDb(trigger_red, trigger_yellow);
    }
}

function getTemperatureCurrent(){
    $.ajax({
     url: 'dozor_ajax/getdata.php',
     method: "POST",
     data: {
        action: "temperature-get-current"
     },
     success: function (data) {
        console.log(data);
        return data;
     }
     });
}
function next(i, data){
    console.log('in NEXT');
    console.log('i ' + i);
    console.log(data);
    i = i + 1;
    if(i < data['arr_temperatures_length']){
       // setTimeout('newModifyTemperature', 1000, i, data);
        setTimeout(function(){
            newModifyTemperature(i, data);
        }, 2000);
    }
}

function newModifyTemperature(i, data){
    console.log('newModifyTemperature');
    console.log(i);
    console.log(data);
    var arrTemperatures = data['arr_temperatures'];
    $.ajax({
        url: 'dozor_ajax/setdata.php',
        method: "POST",
        data: {
            action: "temperature-change",
            value: data['arr_temperatures'][i]
        },
        success: function (result) {
            newSetTriggerState(i, data);
        }
    });


}

function newSetTriggerState(i, data){
    var modify = 0;
    console.log('in newSetTriggerState');
    console.log(data);
    console.log(i);
    console.log(data['arr_temperatures'][i]);
    if(data['arr_temperatures'][i] >= 85){
        if(data['trigger_red_state'] != 'Y')
        {
            data['trigger_red_state'] = 'Y';
            data['trigger_yellow_state'] = 'Y';
            modify = 1;
        }
    }else if(data['arr_temperatures'][i] >= 55){
        if(data['trigger_red_state'] == 'Y' || data['trigger_yellow_state'] == 'N') {
            data['trigger_red_state'] = 'N';
            data['trigger_yellow_state'] = 'Y';
            modify = 1;
        }
    }else{
        if(data['trigger_yellow_state'] == 'Y' || data['trigger_red_state'] == 'Y') {
            data['trigger_red_state'] = 'N';
            data['trigger_yellow_state'] = 'N';
            modify = 1;
        }else {
            console.log('else');
        }
    }

    //conso
    if(modify == 1) {
        console.log('newSetTriggerState current_temperature' + data['arr_temperatures'][i] );
        console.log('newSetTriggerState current_state_trigger_red ' + data['trigger_red_state'] );
        console.log('newSetTriggerState current_state_trigger_yellow ' + data['trigger_yellow_state'] );

        newModifyTriggers(i, data);
    }else{
        next(i, data);
    }
}

function newModifyTriggers(i, data){
    console.log('in newModifyTriggers');
    $.ajax({
        url: 'dozor_ajax/setdata.php',
        method: "POST",
        data: {
            action: "temperature-triggers-modify",
            trigger_red: data['trigger_red_state'],
            trigger_yellow: data['trigger_yellow_state']
        },
        success: function (result) {
            next(i, data);
        }
    });
}

function changeWaterSensorToRed() {
    var params;
    params = {
        'time_step'  : 4,
        'delay_before_update' : 500,
    };
    var WaterRed = new Event('water', params);
}

function changeWaterSensorToYellow() {
    var params;
    params = {
        'time_step'  : 4,
        'delay_before_update' : 500,
    };
    var WaterYellow = new Event('water', params);
}

function changeWaterSensorToGreen() {
    $.ajax({
        url: 'dozor_ajax/getdata.php',
        method: "POST",
        data: {
            action: "temperature-get-current"
        },
        success: function (data) {
            var params;
            params = {
                'temperature_start' : parseFloat(data),
                'temperature_final' : 20.1,
                'temperature_step'  : 6,
                'delay_before_update' : 500,
            };
            var WaterGreen = new Event('water', params);
        }
    });
}

function changeTemperatureSensorToRed() {
    var params;
    params = {
        'temperature_start' : 20.1,
        'temperature_final' : 85,
        'temperature_step'  : 4,
        'delay_before_update' : 500,
    };
    var TemperatureRed = new Event('temperature', params);
}

function changeTemperatureSensorToYellow() {
    var params;
    params = {
        'temperature_start' : 20.1,
        'temperature_final' : 55,
        'temperature_step'  : 4,
        'delay_before_update' : 500,
    };
    var TemperatureYellow = new Event('temperature', params);
}

function changeTemperatureSensorToGreen() {
    $.ajax({
        url: 'dozor_ajax/getdata.php',
        method: "POST",
        data: {
            action: "temperature-get-current"
        },
        success: function (data) {
            var params;
            params = {
                'temperature_start' : parseFloat(data),
                'temperature_final' : 20.1,
                'temperature_step'  : 6,
                'delay_before_update' : 500,
            };
            var TemperatureGreen = new Event('temperature', params);
        }
    });
}



function getArrIterativeChangeTemperature(params){
    console.log('getArrIterativeChangeTemperature');
    console.log(params);
    var initial = params['temperature_start'];
    var final = params['temperature_final'];
    var stepTemperature = params['temperature_step'];
    var delta = Math.ceil(Math.abs(final - initial)/stepTemperature)+3;
    console.log('4initial '+ initial +' final '+ final +' delta ' + delta);
    var current = initial;
    var arrTemperatures = [];
    for(var i=0; i<delta; i++){
        if(initial < final) {
            current += 0.9 * stepTemperature + Math.random() * stepTemperature * 0.1;
            if((current < final) || (current - final >= 0 && current - final <= stepTemperature * 1.1)){
                arrTemperatures[i] = current;
            }
        }else{
            current -= 0.9 * stepTemperature + Math.random() * stepTemperature * 0.1;
            if(current > final){
                arrTemperatures[i] = current;
            }else if(final - current >= 0 && final - current <= stepTemperature * 1.1){
                if(arrTemperatures[i-1] != final) {
                    arrTemperatures[i] = final;
                }
            }
        }
    }
    params['arr_temperatures'] = arrTemperatures;
    console.log('getArrIterativeChangeTemperature finish params');
    console.log(params);
    return params;
}

function start(type, params){
    $.ajax({
        url: 'dozor_ajax/getdata.php',
        method: "POST",
        async: false,
        data: {
            action: "temperature-get-state-triggers"
        },
        success: function (request) {
            console.log('getStateTriggers');
            /*this.triggers_state = JSON.parse(data);
             console.log(this.triggers_state);*/
            request = JSON.parse(request);
            console.log(request);
            console.log('');
            console.log('');
            console.log(params);
            params['trigger_red_state'] = request['red'];
            params['trigger_yellow_state'] = request['yellow'];


            params = getArrIterativeChangeTemperature(params);
            console.log('');
            console.log('');

            var i = 0;
            params['arr_temperatures_length'] = params['arr_temperatures'].length;
            console.log(params);
            next(i, params);
        }
    });

    //alert(request);
    /*console.log('request');
     console.log(request);
     this.triggers_state = JSON.parse(request);
     this.getArrIterativeChangeTemperature();*/
}



function Event(type, params){
    this.type = type;
    this.params = params;
    if(this.type == 'temperature'){



        start(type, params);


    }
}





</script>

</body>
</html>

