<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
global $DB;
/*echo '<br/> $_POST '. __LINE__.'* ' .  __FILE__ . ' <pre>';
print_r($_POST);
echo '</pre>';*/
if(isset($_POST["action"]) && $_POST["action"] == "temperature-sensor-red"){
    $sql = "UPDATE bitrix_60.dozor_triggers
        SET STATE_ACTIVE = 'Y'
        WHERE ID = 13563
    ";
    $DB->Query($sql);
}elseif(isset($_POST["action"]) && $_POST["action"] == "temperature-sensor-yellow"){
    //echo 'yellow';
    $sql = "UPDATE bitrix_60.dozor_triggers
        SET STATE_ACTIVE = 'Y'
        WHERE ID = 13561
    ";
    $DB->Query($sql);
}elseif(isset($_POST["action"]) && $_POST["action"] == "temperature-sensor-green"){
    //echo 'green';
    $sql = "UPDATE bitrix_60.dozor_triggers
        SET STATE_ACTIVE = 'N'
        WHERE ID IN(13561, 13563)
    ";
    $DB->Query($sql);
    $sql = "UPDATE bitrix_60.dozor_items
        SET VALUE = 20.1
        WHERE ID = 23675
    ";
    $DB->Query($sql);
}elseif(isset($_POST["action"]) && $_POST["action"] == "temperature-change"){

    $sql = "UPDATE bitrix_60.dozor_items
        SET VALUE = ".$_POST["value"]."
        WHERE ID = 23675
    ";
    $DB->Query($sql);

}elseif(isset($_POST["action"]) && $_POST["action"] == "temperature-triggers-modify"){
    //red
    $sql = "UPDATE bitrix_60.dozor_triggers
        SET STATE_ACTIVE = '".$_POST["trigger_red"]."'
        WHERE ID = 13563
    ";
    $DB->Query($sql);
    //yellow
    $sql = "UPDATE bitrix_60.dozor_triggers
        SET STATE_ACTIVE = '".$_POST["trigger_yellow"]."'
        WHERE ID = 13561
    ";
    $DB->Query($sql);
}elseif(isset($_POST["action"]) && $_POST["action"] == "water-triggers-modify"){
    //red
    $sql = "UPDATE bitrix_60.dozor_triggers
        SET STATE_ACTIVE = '".$_POST["trigger_red"]."'
        WHERE ID = 13591
    ";
    $DB->Query($sql);
    //yellow
    $sql = "UPDATE bitrix_60.dozor_triggers
        SET STATE_ACTIVE = '".$_POST["trigger_yellow"]."'
        WHERE ID = 13589
    ";
    $DB->Query($sql);
} else{

}