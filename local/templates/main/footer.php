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
                                
                                <?$path = CFile::GetPath($GLOBALS['global_info']['footer_logo']);?>
                                <?if (stristr($path, '.svg')):?>
                                    <?
                                    $img_file = $path;

                                    $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                    if($svg['id']){
                                        $img_grup = $img_file.'#'.$svg['id'];
                                    }

                                    $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                    print_r($svg_file);
                                    ?>
                                <?else:?>
                                    <img class="img-fluid" src=<?=$path?> alt="footer Logo">
                                <?endif;?>

                                <p><?=$GLOBALS["global_info"]["footer_description"]["TEXT"];?></p>
                                
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
                                        "IBLOCK_ID" => $GLOBALS["codingart_block_id"]["settings_main_id"],
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
                                        "PAGER_TITLE" => "??????????????",
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

                        <?if($GLOBALS["global_info"]["footer_show_menu1"]):?>
                            <div class="col-sm-6 col-md-6 col-lg-2">
                                <div class="footer-title">
                                    <h4>
                                        <?=$GLOBALS["global_info"]["footer_title_menu1"];?>
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
                        <?endif;?> 

                        <?if($GLOBALS["global_info"]["footer_show_menu2"]):?>
                            <div class="col-sm-6 col-md-6 col-lg-2">
                                <div class="footer-title">
                                    <h4>
                                        <?=$GLOBALS["global_info"]["footer_title_menu2"];?>
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
                        <?endif;?> 

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="footer-title">
                                <h4>
                                    <?=$GLOBALS["global_info"]["footer_title_contacts"];?>
                                </h4>
                            </div>
                            
                            <?if($GLOBALS['global_info']['contacts_address_show']):?>
                                <h4><?=$GLOBALS['global_info']['footer_title_address']?></h4>
                                <p>
                                    <?=$GLOBALS['global_info']['contacts_address1']?>
                                    <br>
                                    <?=$GLOBALS['global_info']['contacts_address2']?>
                                </p>
                            <?endif;?>

                            <?if($GLOBALS['global_info']['contacts_phone_show']):?>
                                <h4><?=$GLOBALS['global_info']['footer_title_phone']?></h4>
                                <p>
                                    <a href="tel:<?=$GLOBALS['global_info']['contacts_phone1']?>">
                                        <?=$GLOBALS['global_info']['contacts_phone1']?>
                                    </a>
                                    <br>
                                    <a href="tel:<?=$GLOBALS['global_info']['contacts_phone2']?>">
                                        <?=$GLOBALS['global_info']['contacts_phone2']?>
                                    </a>
                                </p>
                            <?endif;?>

                            <?if($GLOBALS['global_info']['contacts_email_show']):?>
                                <h4><?=$GLOBALS['global_info']['footer_title_email']?></h4>
                                <p>
                                    <a href="mailto:<?=$GLOBALS['global_info']['contacts_email1']?>">
                                        <?=$GLOBALS['global_info']['contacts_email1']?>
                                    </a>
                                    <br>
                                    <a href="mailto:<?=$GLOBALS['global_info']['contacts_email2']?>">
                                        <?=$GLOBALS['global_info']['contacts_email2']?>
                                    </a>
                                </p>
                            <?endif;?>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p><?=$GLOBALS['global_info']['footer_copyright'];?></p>
                        
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

        <!--popup form-->
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.feedback", 
            "feedback-form-popup", 
            array(
                "USE_CAPTCHA" => "Y",
                "OK_TEXT" => "??????????????, ???????? ?????????????????? ??????????????.",
                "EMAIL_TO" => "1rustamnew1@gmail.com",	
                "REQUIRED_FIELDS" => array(	
                    0 => "NAME",
                ),
                "EVENT_MESSAGE_ID" => "",
            ),
            false
        );?>
        

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

        <!-- Fancybox-->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/jquery.fancybox-1.3.4.pack.js')?>"></script>
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/fancybox.umd.js')?>"></script>
        
        <!-- :: Main JS -->
        <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH. '/assets/js/main.js')?>"></script>
    </body>
</html>