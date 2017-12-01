<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
global $DB;
/*echo '<pre>';
print_r($GLOBALS);
echo '</pre>000';*/

/*$str = '{"trigger":{"135892":{"triggerid":"135892","description":"\u0412\u0435\u0440\u0445\u043d\u0438\u0439 \u0431\u0430\u043a \u043f\u0443\u0441\u0442\u043e\u0439","priority":"1"},"13599":{"triggerid":"13599","description":"Test_stas temperature sensor high","priority":"4"},"13575":{"triggerid":"13575","description":"Dozor agent on {HOST.NAME} is unreachable for 5 minutes","priority":"3"}},"items":{"23675":{"itemid":"23675","lastvalue":"85.7194"}}}';
$arr = json_decode($str, true);*/

// echo '<pre>';
// print_r($arr);
// echo '</pre>';
/*echo '<pre>';
print_r($GLOBALS);
echo '</pre>000';*/
//$arr["trigger"][13591] = array('trigger_id' => 1, '3' => 3);
//$arr["trigger"][13589] = array('trigger_id' => 1, '3' => 3);
//$arr["trigger"][13563] = array('trigger_id' => 1, '3' => 3);
//$arr["trigger"][13561] = array('trigger_id' => 1, '3' => 3);
/*
*/
if(isset($_POST["action"]) && $_POST["action"] == "temperature-get-current") {
    $sql = "SELECT * FROM bitrix_60.dozor_items WHERE ID = 23675";
    $res = $DB->Query($sql);
    while ($ar_fields = $res->GetNext()) {
        /*echo '<br/> dozor_items '. __LINE__.'* ' .  __FILE__ . ' <pre>';
        print_r($ar_fields);
        echo '</pre>';*/
        /*$arResult["items"]["23675"]["itemid"] = "23675";
        $arResult["items"]["23675"]["lastvalue"] = $ar_fields["VALUE"];*/
        $current_temperature = $ar_fields["VALUE"];
    }
    echo $current_temperature;
    /*$str = json_encode($current_temperature);
    echo $str;*/
}elseif(isset($_POST["action"]) && $_POST["action"] == "temperature-get-state-triggers"){
    $sql = "SELECT * FROM bitrix_60.dozor_triggers WHERE ID IN (13563, 13561)";
    $res = $DB->Query($sql);
    $arResult = array();
    while ($ar_fields = $res->GetNext()) {
        if($ar_fields["ID"] == 13563){
            $arResult["red"] = $ar_fields["STATE_ACTIVE"];
        }
        if($ar_fields["ID"] == 13561){
            $arResult["yellow"] = $ar_fields["STATE_ACTIVE"];
        }
    }
    $str = json_encode($arResult);
    echo $str;
}else {


    $arResult = array();

    /*$arResult["items"]["23675"]["itemid"] = "23675";
    $arResult["items"]["23675"]["lastvalue"] = "85.7194";*/

    $sql = "SELECT * FROM bitrix_60.dozor_items WHERE ID = 23675";
    $res = $DB->Query($sql);
    while ($ar_fields = $res->GetNext()) {
        /*echo '<br/> dozor_items '. __LINE__.'* ' .  __FILE__ . ' <pre>';
        print_r($ar_fields);
        echo '</pre>';*/
        $arResult["items"]["23675"]["itemid"] = "23675";
        $arResult["items"]["23675"]["lastvalue"] = $ar_fields["VALUE"];
    }


    $sql = "SELECT * FROM bitrix_60.dozor_triggers";
    $res = $DB->Query($sql);
    while ($ar_fields = $res->GetNext()) {
        /*echo '<br/> $ar_fields '. __LINE__.'* ' .  __FILE__ . ' <pre>';
        print_r($ar_fields);
        echo '</pre>';*/
        if ($ar_fields["STATE_ACTIVE"] == 'Y') {
            $arResult["trigger"][$ar_fields["ID"]] = array('trigger_id' => 1, '3' => 3);
        }
    }


    $str = json_encode($arResult);
    echo $str;

}