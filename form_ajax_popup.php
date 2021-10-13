<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<script type="text/javascript" src="/bitrix/js/main/ajax.js"></script>

    <?$APPLICATION->IncludeComponent(
        "custom.form:main.feedback", 
        "feedback-form-popup", 
        array(
            "USE_CAPTCHA" => "Y",
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "EMAIL_TO" => "1rustamnew1@gmail.com",
            "REQUIRED_FIELDS" => array(
            ),
            "EVENT_MESSAGE_ID" => array(
            ),
            //"COMPONENT_TEMPLATE" => "feedback-form-popup",
            "SUBMIT_TEXT" => $arItem["PROPERTIES"]["text"]["VALUE"],
            "AJAX_MODE" => "Y",  // режим AJAX
            //"AJAX_OPTION_SHADOW" => "Y", // затемнять область
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y", // подключать стили
            "AJAX_OPTION_HISTORY" => "N",
        ),
        false
    );?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>