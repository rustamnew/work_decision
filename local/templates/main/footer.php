<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
            <!-- :: Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="logo">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/logo_footer.php"
                                    )
                                );?>
                                <?$APPLICATION->IncludeFile(SITE_DIR."include/footer_description.php", 
                                    array(), 
                                    array("MODE" => "html"));?>
                                
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list", 
                                    "social", 
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
                                        "IBLOCK_ID" => "1",
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
                                            0 => "link_Facebook",
                                            1 => "link_Instagram",
                                            2 => "link_Twitter",
                                            3 => "link_Youtube",
                                            4 => "link_Vk",
                                            5 => "",
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
                                        "COMPONENT_TEMPLATE" => "social"
                                    ),
                                    false
                                );?>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-6 col-lg-2">
                            <div class="footer-title">
                                <h4>
                                    <?$APPLICATION->IncludeFile(SITE_DIR."include/footer_title1.php", 
                                        array(), 
                                        array("MODE" => "html"));?>
                                </h4>
                            </div>

                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu", 
                                "menu_footer", 
                                array(
                                    "COMPONENT_TEMPLATE" => "menu_footer",
                                    "ROOT_MENU_TYPE" => "bottom1",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </div>


                        <div class="col-sm-6 col-md-6 col-lg-2">
                            <div class="footer-title">
                                <h4>
                                    <?$APPLICATION->IncludeFile(SITE_DIR."include/footer_title2.php", 
                                        array(), 
                                        array("MODE" => "html"));?>
                                </h4>
                            </div>

                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu", 
                                "menu_footer", 
                                array(
                                    "COMPONENT_TEMPLATE" => "menu_footer",
                                    "ROOT_MENU_TYPE" => "bottom2",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </div>


                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="footer-title">
                                <h4>
                                    <?$APPLICATION->IncludeFile(SITE_DIR."include/footer_title3.php", 
                                        array(), 
                                        array("MODE" => "html"));?>
                                </h4>
                            </div>
                            
                            <?$APPLICATION->IncludeFile(SITE_DIR."include/footer_text.php", 
                                array(), 
                                array("MODE" => "html"));?>
                            
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <?$APPLICATION->IncludeFile(SITE_DIR."include/footer_copyright.php", 
                            array(), 
                            array("MODE" => "html"));?>
                        
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:menu", 
                                "menu_footer", 
                                array(
                                    "COMPONENT_TEMPLATE" => "menu_footer",
                                    "ROOT_MENU_TYPE" => "bottom3",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                    </div>
                </div>
            </footer>
            
            <!-- :: Button Dark Mode -->
            <div class="dark-mode-decision">
                <i class="fas fa-moon"></i>
            </div>

            <!-- :: Scroll UP -->
            <div class="scroll-up">
                <a href="#page" class="move-section">
                    <i class="fas fa-long-arrow-alt-up"></i>
                </a>
            </div>

        </div>

        <!-- :: jQuery JS -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/jquery-3.5.1.min.js')?>"></script>

        <!-- :: Popper JS -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/popper.min.js')?>"></script>

        <!-- :: BootStrap JS -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/bootstrap.min.js')?>"></script>

        <!-- :: OWL Carousel -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/owl.carousel.min.js')?>"></script>

        <!-- :: Nice Select -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/jquery.nice-select.min.js')?>"></script>

        <!-- :: Waypoints -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/jquery.waypoints.min.js')?>"></script>

        <!-- :: CounterUp -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/jquery.counterup.min.js')?>"></script>

        <!-- :: Lity -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/lity.min.js')?>"></script>
        
        <!-- :: Main JS -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/main.js')?>"></script>
    </body>
</html>