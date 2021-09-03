<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

<?$APPLICATION->IncludeComponent("bitrix:news.list", "features", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	
		"ADD_SECTIONS_CHAIN" => "N",	
		"AJAX_MODE" => "N",	
		"AJAX_OPTION_ADDITIONAL" => "",	
		"AJAX_OPTION_HISTORY" => "N",	
		"AJAX_OPTION_JUMP" => "N",	
		"AJAX_OPTION_STYLE" => "N",	
		"CACHE_FILTER" => "N",	
		"CACHE_GROUPS" => "Y",	
		"CACHE_TIME" => "36000000",	
		"CACHE_TYPE" => "A",	
		"CHECK_DATES" => "Y",	
		"DETAIL_URL" => "",	
		"DISPLAY_BOTTOM_PAGER" => "N",	
		"DISPLAY_DATE" => "N",	
		"DISPLAY_NAME" => "N",	
		"DISPLAY_PICTURE" => "N",	
		"DISPLAY_PREVIEW_TEXT" => "N",	
		"DISPLAY_TOP_PAGER" => "N",	
		"FIELD_CODE" => array(	
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	
		"IBLOCK_ID" => "3",	
		"IBLOCK_TYPE" => "content",	
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	
		"INCLUDE_SUBSECTIONS" => "N",	
		"MESSAGE_404" => "",	
		"NEWS_COUNT" => "3",	
		"PAGER_BASE_LINK_ENABLE" => "N",	
		"PAGER_DESC_NUMBERING" => "N",	
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	
		"PAGER_SHOW_ALL" => "N",	
		"PAGER_SHOW_ALWAYS" => "N",	
		"PAGER_TEMPLATE" => ".default",	
		"PAGER_TITLE" => "Новости",	
		"PARENT_SECTION" => "",	
		"PARENT_SECTION_CODE" => "",	
		"PREVIEW_TRUNCATE_LEN" => "",	
		"PROPERTY_CODE" => array(	
			0 => "title",
			1 => "description",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",	
		"SET_LAST_MODIFIED" => "N",	
		"SET_META_DESCRIPTION" => "N",	
		"SET_META_KEYWORDS" => "N",	
		"SET_STATUS_404" => "N",	
		"SET_TITLE" => "N",	
		"SHOW_404" => "N",	
		"SORT_BY1" => "SORT",	
		"SORT_BY2" => "SORT",	
		"SORT_ORDER1" => "ASC",	
		"SORT_ORDER2" => "ASC",	
		"STRICT_SECTION_CHECK" => "N",	
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"services-list", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "[icon]",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "services-list",
		"NAME" => "Услуги",
		"TITLE" => "Что мы можем предложить",
		"SUBTITLE" => "Решения принимаются профессионалами. Мы гарантируем высокое качество оказания услуг."
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"about", 
	array(
		"COMPONENT_TEMPLATE" => "about",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "14",
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "",
		"SORT_ORDER2" => "",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "title",
			1 => "case_title",
			2 => "case_number",
			3 => "case_show",
			4 => "subtitle",
			5 => "text",
			6 => "sign",
			7 => "case_icon",
			8 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "features2", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	
		"ADD_SECTIONS_CHAIN" => "N",	
		"AJAX_MODE" => "N",	
		"AJAX_OPTION_ADDITIONAL" => "",	
		"AJAX_OPTION_HISTORY" => "N",	
		"AJAX_OPTION_JUMP" => "N",	
		"AJAX_OPTION_STYLE" => "Y",	
		"CACHE_FILTER" => "N",	
		"CACHE_GROUPS" => "Y",	
		"CACHE_TIME" => "36000000",	
		"CACHE_TYPE" => "A",	
		"CHECK_DATES" => "Y",	
		"DETAIL_URL" => "",	
		"DISPLAY_BOTTOM_PAGER" => "N",	
		"DISPLAY_DATE" => "N",	
		"DISPLAY_NAME" => "N",	
		"DISPLAY_PICTURE" => "N",	
		"DISPLAY_PREVIEW_TEXT" => "N",	
		"DISPLAY_TOP_PAGER" => "N",	
		"FIELD_CODE" => array(	
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	
		"IBLOCK_ID" => "15",	
		"IBLOCK_TYPE" => "content",	
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	
		"INCLUDE_SUBSECTIONS" => "N",	
		"MESSAGE_404" => "",	
		"NEWS_COUNT" => "1",	
		"PAGER_BASE_LINK_ENABLE" => "N",	
		"PAGER_DESC_NUMBERING" => "N",	
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	
		"PAGER_SHOW_ALL" => "N",	
		"PAGER_SHOW_ALWAYS" => "N",	
		"PAGER_TEMPLATE" => ".default",	
		"PAGER_TITLE" => "Новости",	
		"PARENT_SECTION" => "",	
		"PARENT_SECTION_CODE" => "",	
		"PREVIEW_TRUNCATE_LEN" => "",	
		"PROPERTY_CODE" => array(	
			0 => "title",
			1 => "video_show",
			2 => "features_show",
			3 => "subtitle",
			4 => "features1_title",
			5 => "features1_icon",
			6 => "features1_description",
			7 => "features2_title",
			8 => "features2_icon",
			9 => "features2_description",
			10 => "features3_title",
			11 => "features3_icon",
			12 => "features3_description",
			13 => "features4_title",
			14 => "features4_icon",
			15 => "features4_description",
			16 => "video_url",
			17 => "video_background",
			18 => "",
		),
		"SET_BROWSER_TITLE" => "N",	
		"SET_LAST_MODIFIED" => "N",	
		"SET_META_DESCRIPTION" => "N",	
		"SET_META_KEYWORDS" => "N",	
		"SET_STATUS_404" => "N",	
		"SET_TITLE" => "N",	
		"SHOW_404" => "N",	
		"SORT_BY1" => "SORT",	
		"SORT_BY2" => "",	
		"SORT_ORDER1" => "ASC",	
		"SORT_ORDER2" => "",	
		"STRICT_SECTION_CHECK" => "N",	
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "partners", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	
		"ADD_SECTIONS_CHAIN" => "N",	
		"AJAX_MODE" => "N",	
		"AJAX_OPTION_ADDITIONAL" => "",	
		"AJAX_OPTION_HISTORY" => "N",	
		"AJAX_OPTION_JUMP" => "N",	
		"AJAX_OPTION_STYLE" => "Y",	
		"CACHE_FILTER" => "N",	
		"CACHE_GROUPS" => "Y",	
		"CACHE_TIME" => "36000000",	
		"CACHE_TYPE" => "A",	
		"CHECK_DATES" => "Y",	
		"DETAIL_URL" => "",	
		"DISPLAY_BOTTOM_PAGER" => "N",	
		"DISPLAY_DATE" => "N",	
		"DISPLAY_NAME" => "N",	
		"DISPLAY_PICTURE" => "N",	
		"DISPLAY_PREVIEW_TEXT" => "N",	
		"DISPLAY_TOP_PAGER" => "N",	
		"FIELD_CODE" => array(	
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	
		"IBLOCK_ID" => "16",	
		"IBLOCK_TYPE" => "content",	
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	
		"INCLUDE_SUBSECTIONS" => "N",	
		"MESSAGE_404" => "",	
		"NEWS_COUNT" => "10",	
		"PAGER_BASE_LINK_ENABLE" => "N",	
		"PAGER_DESC_NUMBERING" => "N",	
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	
		"PAGER_SHOW_ALL" => "N",	
		"PAGER_SHOW_ALWAYS" => "N",	
		"PAGER_TEMPLATE" => ".default",	
		"PAGER_TITLE" => "Новости",	
		"PARENT_SECTION" => "",	
		"PARENT_SECTION_CODE" => "",	
		"PREVIEW_TRUNCATE_LEN" => "",	
		"PROPERTY_CODE" => array(	
			0 => "url",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	
		"SET_LAST_MODIFIED" => "N",	
		"SET_META_DESCRIPTION" => "N",	
		"SET_META_KEYWORDS" => "N",	
		"SET_STATUS_404" => "N",	
		"SET_TITLE" => "N",	
		"SHOW_404" => "N",	
		"SORT_BY1" => "SORT",	
		"SORT_BY2" => "NAME",	
		"SORT_ORDER1" => "ASC",	
		"SORT_ORDER2" => "ASC",	
		"STRICT_SECTION_CHECK" => "N",	
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"projects", 
	array(
		"COMPONENT_TEMPLATE" => "projects",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "11",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "created_date",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "position",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"NAME" => "Проекты",
		"TITLE" => "Наши проекты",
		"SUBTITLE" => "Решения принимаются профессионалами. Мы гарантируем высокое качество оказания услуг."
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"team-list-slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "12",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "title",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "team-list-slider",
		"NAME" => "Команда",
		"TITLE" => "Наши специалисты",
		"SUBTITLE" => "Решения принимаются профессионалами. Мы гарантируем высокое качество оказания услуг."
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews", 
	array(
		"COMPONENT_TEMPLATE" => "reviews",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "position",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"NAME" => "Отзывы",
		"TITLE" => "Что говорят наши клиенты",
		"SUBTITLE" => "Решения принимаются профессионалами. Мы гарантируем высокое качество оказания услуг.",
		"MINIMIZE_TITLE" => "N"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"blog-feed", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "TAGS",
			1 => "DATE_CREATE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "created_date",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "blog-feed",
		"NAME" => "Новости",
		"TITLE" => "Лента новостей",
		"SUBTITLE" => "Решения принимаются профессионалами. Мы гарантируем высокое качество оказания услуг.",
		"MINIMIZE_TITLE" => "N"
	),
	false
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>