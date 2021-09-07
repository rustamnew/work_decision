<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_NAME" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_NAME"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),


	"NAME" => Array(
		"NAME" => 'Название блока',
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"TITLE" => Array(
		"NAME" => 'Заголовок блока',
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"BACKGROUND_IMAGE" => Array(
		"NAME" => 'Фоновое изображение блока',
		"TYPE" => "FILE",
		"FD_TARGET" => "F",
		"FD_EXT" => 'jpg,gif,bmp,png,jpeg,webp',
		"FD_UPLOAD" => true,
		"FD_USE_MEDIALIB" => true,
		"FD_MEDIALIB_TYPES" => Array(
			'image',
		),
		"DEFAULT" => '',
	),
	"SHOW_TIMELINE" => Array(
		"NAME" => 'Отображать Таймлайн',
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"SHOW_FORM" => Array(
		"NAME" => 'Отображать форму',
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"FORM_TITLE" => Array(
		"NAME" => "Заголовок формы",
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"FORM_SUBTITLE" => Array(
		"NAME" => "Подзаголовок формы",
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"FORM_IMAGE" => Array(
		"NAME" => 'Изображение формы',
		"TYPE" => "FILE",
		"FD_TARGET" => "F",
		"FD_EXT" => 'jpg,gif,bmp,png,jpeg,webp',
		"FD_UPLOAD" => true,
		"FD_USE_MEDIALIB" => true,
		"FD_MEDIALIB_TYPES" => Array(
			'image',
		),
		"DEFAULT" => '',
	),
	"FORM_PHONE" => Array(
		"NAME" => 'Телефон',
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"FORM_PHONE_ICON" => Array(
		"NAME" => 'Иконка у номера телефона',
		"TYPE" => "FILE",
		"FD_TARGET" => "F",
		"FD_EXT" => 'jpg,gif,bmp,png,jpeg,webp,svg',
		"FD_UPLOAD" => true,
		"FD_USE_MEDIALIB" => true,
		"FD_MEDIALIB_TYPES" => Array(
			'image',
		),
		"DEFAULT" => '',
	),
);
?>
