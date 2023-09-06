<?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list.ex", 
	"template1", 
	array(
		"ADDITIONAL_SIGHTS" => array(
		),
		"BEHAVIOUR" => "SIMPLE",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DATE_TIME_FORMAT" => "d.m.Y",
		"DETAIL_SLIDE_SHOW_URL" => "slide_show.php?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
		"DETAIL_URL" => "detail.php?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_AS_RATING" => "rating",
		"DRAG_SORT" => "Y",
		"ELEMENTS_LAST_TIME_FROM" => "",
		"ELEMENTS_LAST_TIME_TO" => "",
		"ELEMENT_LAST_TYPE" => "none",
		"ELEMENT_SORT_FIELD" => "SORT",
		"ELEMENT_SORT_FIELD1" => "SHOW_COUNTER",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER1" => "asc",
		"GALLERY_SIZE" => "",
		"GALLERY_URL" => "gallery.php?USER_ALIAS=#USER_ALIAS#",
		"GROUP_PERMISSIONS" => array(
		),
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"MAX_VOTE" => "5",
		"NAME_TEMPLATE" => "#NOBR##LAST_NAME# #NAME##/NOBR#",
		"PAGE_ELEMENTS" => "1",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"PATH_TO_USER" => "/company/personal/user/#USER_ID#",
		"PICTURES_SIGHT" => "real",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"RATING_MAIN_TYPE" => "",
		"SEARCH_URL" => "search.php",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_COMMENTS" => "Y",
		"SHOW_LOGIN" => "Y",
		"SHOW_PAGE_NAVIGATION" => "bottom",
		"SHOW_RATING" => "Y",
		"SHOW_SHOWS" => "Y",
		"THUMBNAIL_SIZE" => "80",
		"USER_ALIAS" => $_REQUEST["USER_ALIAS"],
		"USE_COMMENTS" => "N",
		"USE_DESC_PAGE" => "Y",
		"USE_PERMISSIONS" => "N",
		"VOTE_NAMES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "",
		),
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>