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
            <button type="button" class="btn  btn-bd-light">
                Включить насос
            </button>

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
            changeTemperatureSensorToRed();
        });
        $('.temperature-sensor-yellow').on('click', function(){
            changeTemperatureSensorToYellow();
        });
        $('.temperature-sensor-green').on('click', function(){
            changeTemperatureSensorToGreen();
        });
    });

    function getArrIterativeChangeTemperature(initial, final){
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
    }

    function addTemperatureToDb(i, arrTemperatures){
        console.log('from func ' + i + '   ' + arrTemperatures[i]);
        $.ajax({
            url: 'dozor_ajax/setdata.php',
            method: "POST",
            data: {
                action: "temperature-incremental",
                value: arrTemperatures[i]
            },
            success: function (data) {}
        });
    }

    function startCyclicTimer(delay, arrTemperatures){
        var i = 0;
        setTimeout(function run() {
            i++;
            if(typeof arrTemperatures[i] !== "undefined"){
                /*$.ajax({
                    url: 'dozor_ajax/setdata.php',
                    method: "POST",
                    data: {
                        action: "temperature-incremental",
                        value: temperature_current
                    },
                    success: function (data) {

                    }
                });*/
                addTemperatureToDb(i, arrTemperatures);
                setTimeout(run, delay);
            }
           
        }, delay);
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

    function changeTemperatureSensorToRed() {
        var temperature_start = 20.1;
        var temperature_final = 85;
        var arrTemperatures = getArrIterativeChangeTemperature(temperature_start, temperature_final);
        startCyclicTimer(2000, arrTemperatures);
    }

    function changeTemperatureSensorToYellow() {
        var temperature_start = 20.1;
        var temperature_final = 55;
        var arrTemperatures = getArrIterativeChangeTemperature(temperature_start, temperature_final);
        startCyclicTimer(2000, arrTemperatures);
    }

    function changeTemperatureSensorToGreen() {
        $.ajax({
            url: 'dozor_ajax/getdata.php',
            method: "POST",
            data: {
                action: "temperature-get-current"
            },
            success: function (data) {
                console.log(data);
                var temperature_current = parseFloat(data);
                var temperature_normal = 20.1;
                console.log('temperature_current ' + temperature_current + ' temperature_normal ' + temperature_normal);
                var arrTemperatures = getArrIterativeChangeTemperature(temperature_current, temperature_normal);
                startCyclicTimer(2000, arrTemperatures);
            }
        });




        /*$.ajax({
            url: 'dozor_ajax/setdata.php',
            method: "POST",
            data: {
                action: "temperature-sensor-green",
                location: "Boston"
            },
            success: function (data) {

            }
        });*/
    }
</script>

</body>
</html>

