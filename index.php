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

<!-- :: About -->
<section class="about py-100" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-box">
                    <div class="about-img">
                        <img class="img-fluid" src="assets/images/about/01_about.jpg" alt="01 About">
                    </div>
                    <div class="case-about">
                        <i class="flaticon-law-book"></i>
                        <div class="counter">3.850</div>
                        <h5>Case Won</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-box">
                    <div class="sec-title">
                        <h2>About Us</h2>
                        <h3>Preserving Relationships are the basis of success.</h3>
                        <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm, Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
                    </div>
                    <ul class="core-about">
                        <li><i class="fas fa-check"></i>
                            <h4>Practical Trade Solutions</h4>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h4>Serving 40 Years</h4>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h4>The Largest Law Firm</h4>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h4>And More...</h4>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="p-about">Lorem Ipsum is simply dummy text of the printing and typesetting industry simply.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="p-about">Lorem Ipsum is simply dummy text of the printing and typesetting industry simply.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn-1" href="01_about.html">More About Us</a>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center">
                            <img class="img-fluid sign-about" src="assets/images/sign.png" alt="Sign About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Practice Area -->
<section class="practice-area py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>Practice Area</h2>
                    <h3>What We Cover</h3>
                    <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm, Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <i class="flaticon-act"></i>
                    <div class="content">
                        <h4>Business Law</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_practice-areas.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <i class="flaticon-lawyer-1"></i>
                    <div class="content">
                        <h4>Family Law</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_practice-areas.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <i class="flaticon-folder"></i>
                    <div class="content">
                        <h4>Real Estate Law</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_practice-areas.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <i class="flaticon-libra"></i>
                    <div class="content">
                        <h4>Juricial Law</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_practice-areas.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <i class="flaticon-criminal"></i>
                    <div class="content">
                        <h4>criminal Law</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_practice-areas.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <i class="flaticon-jury"></i>
                    <div class="content">
                        <h4>Personal Injury</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                        <a href="01_practice-areas.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: History -->
<section class="history">
    <div class="bg-section">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>History</h2>
                    <h3>Timeline Company</h3>
                </div>
            </div>
        </div>
        <div class="history-line owl-carousel owl-theme">
            <div class="box-line">
                <div class="head">
                    <h4>Founding</h4>
                </div>
                <div class="down">
                    <span>2016</span>
                    <span>May, 5</span>
                </div>
            </div>
            <div class="box-line">
                <div class="head">
                    <h4>Serious Clients</h4>
                </div>
                <div class="down">
                    <span>2017</span>
                    <span>mar, 8</span>
                </div>
            </div>
            <div class="box-line">
                <div class="head">
                    <h4>human Rights</h4>
                </div>
                <div class="down">
                    <span>2018</span>
                    <span>April, 12</span>
                </div>
            </div>
            <div class="box-line">
                <div class="head">
                    <h4>Nominee Of The Year</h4>
                </div>
                <div class="down">
                    <span>2019</span>
                    <span>June, 19</span>
                </div>
            </div>
            <div class="box-line">
                <div class="head">
                    <h4>Best Firm Of the year</h4>
                </div>
                <div class="down">
                    <span>2020</span>
                    <span>may, 20</span>
                </div>
            </div>
        </div>
    </div>

    <!-- :: Quote -->
    <div class="quote">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="img-box">
                            <div class="quote-img">
                                <img class="img-fluid" src="assets/images/quote/01_quote.jpg" alt="01 Quote">
                            </div>
                            <div class="quote-info">
                                <i class="flaticon-call"></i>
                                <h4>+(002) 0121-2843-661</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="quote-box">
                            <div class="sec-title">
                                <h3>Get Every Updates</h3>
                                <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm, Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <input type="text" name="subject" placeholder="Enter Your Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <select>
                                            <option value="0">Practice Area</option>
                                            <option value="1">Business Law</option>
                                            <option value="2">Family Law</option>
                                            <option value="3">Real Estate Law</option>
                                            <option value="4">Juricial Law</option>
                                            <option value="5">Criminal Law</option>
                                            <option value="6">Personal Injury</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="quote-item">
                                        <div class="quote-item">
                                            <textarea placeholder="Leave Your Message Here....."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="quote-item">

                                        <a class="btn-1" href="#">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Sponsors -->
<div class="sponsors">
    <div class="container">
        <div class="sponsors-box owl-carousel owl-theme">
            <div class="sponsors-box-item">
                <img class="img-fluid" src="assets/images/sponsors/01_sponsors.png" alt="01 Sponsors">
            </div>
            <div class="sponsors-box-item">
                <img class="img-fluid" src="assets/images/sponsors/02_sponsors.png" alt="02 Sponsors">
            </div>
            <div class="sponsors-box-item">
                <img class="img-fluid" src="assets/images/sponsors/03_sponsors.png" alt="03 Sponsors">
            </div>
            <div class="sponsors-box-item">
                <img class="img-fluid" src="assets/images/sponsors/04_sponsors.png" alt="04 Sponsors">
            </div>
        </div>
    </div>
</div>

<!-- :: Case Study -->
<section class="case-study py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>What we do</h2>
                    <h3>Our Case Studies</h3>
                    <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm, Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="case-study-item">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/case-study/01_case-study.jpg" alt="01 Case Study">
                    </div>
                    <div class="hover-box">
                        <div class="text-box">
                            <div class="tags"><a href="01_single-case-study.html">Law Services</a></div>
                            <h4><a href="01_single-case-study.html">Personal Injury</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="case-study-item">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/case-study/02_case-study.jpg" alt="02 Case Study">
                    </div>
                    <div class="hover-box">
                        <div class="text-box">
                            <div class="tags"><a href="01_single-case-study.html">General</a></div>
                            <h4><a href="01_single-case-study.html">Competition Law</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="case-study-item">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/case-study/03_case-study.jpg" alt="03 Case Study">
                    </div>
                    <div class="hover-box">
                        <div class="text-box">
                            <div class="tags"><a href="01_single-case-study.html">Business</a></div>
                            <h4><a href="01_single-case-study.html">Business Accounting</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="case-study-item">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/case-study/04_case-study.jpg" alt="04 Case Study">
                    </div>
                    <div class="hover-box">
                        <div class="text-box">
                            <div class="tags"><a href="01_single-case-study.html">General</a></div>
                            <h4><a href="01_single-case-study.html">Accident Case</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="case-study-item">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/case-study/05_case-study.jpg" alt="05 Case Study">
                    </div>
                    <div class="hover-box">
                        <div class="text-box">
                            <div class="tags"><a href="01_single-case-study.html">Criminal</a></div>
                            <h4><a href="01_single-case-study.html">Criminal Issue</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="case-study-item">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/case-study/06_case-study.jpg" alt="06 Case Study">
                    </div>
                    <div class="hover-box">
                        <div class="text-box">
                            <div class="tags"><a href="01_single-case-study.html">Corporate</a></div>
                            <h4><a href="01_single-case-study.html">General Services</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Contact -->
<section class="contact py-100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="sec-title text-center">
                    <h3>Are You Looking For a Consultation?</h3>
                    <p>Stop Worrying about technology problems. let us provide the support you deserve.</p>
                    <a class="btn-1 btn-3" href="01_contact.html">Make An Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Advisors -->
<section class="advisors py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>Team</h2>
                    <h3>Our Advisors</h3>
                    <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm, Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="advisors-box">
                    <div class="img-box">
                        <img class="img-fluid" src="assets/images/advisors/01_advisors.jpg" alt="01 advisors">
                        <div class="img-box-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-box text-center">
                        <h5>Anwar Ramadan</h5>
                        <span>Civil Lawyer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="advisors-box">
                    <div class="img-box">
                        <img class="img-fluid" src="assets/images/advisors/02_advisors.jpg" alt="02 advisors">
                        <div class="img-box-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-box text-center">
                        <h5>Osama Bakri</h5>
                        <span>Business Lawyer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="advisors-box">
                    <div class="img-box">
                        <img class="img-fluid" src="assets/images/advisors/03_advisors.jpg" alt="03 advisors">
                        <div class="img-box-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-box text-center">
                        <h5>Sana El-Shamy</h5>
                        <span>Criminal Defence</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Provide -->
<section class="provide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="text-box">
                    <div class="sec-title">
                        <h2>Why Choose Us</h2>
                        <h3>We are top lawyers with 40 years os experience</h3>
                        <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm, Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
                    </div>
                    <div class="content-box">
                        <div class="content-item">
                            <i class="flaticon-books"></i>
                            <div class="box">
                                <h4>Our Success Cases</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="content-item">
                            <i class="flaticon-lawyer"></i>
                            <div class="box">
                                <h4>Professional Attorneys</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="content-item">
                            <i class="flaticon-portfolio"></i>
                            <div class="box">
                                <h4>Long Experience</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <div class="img-provide"></div>
                    <div class="statistic-owl owl-carousel owl-theme">
                        <div class="statistic-item">
                            <i class="flaticon-lawyer"></i>
                            <div class="content-box">
                                <span class="counter">950</span>
                                <div class="name-content">Trusted Clients</div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                        <div class="statistic-item">
                            <i class="flaticon-gavel"></i>
                            <div class="content-box">
                                <span class="counter">908</span>
                                <div class="name-content">Solved Cases</div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="presentation-box">
        <a href="https://youtu.be/TKnufs85hXk" class="pulse" data-lity>
            <i class="fas fa-play"></i>
        </a>
    </div>
</section>

<!-- :: Testimonial -->
<section class="testimonial py-100">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="owl-testimonial owl-carousel owl-theme">
                    <div class="item-box">
                        <div class="text-box">Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results.</div>
                        <div class="item-name text-center">
                            <i class="flaticon-quote"></i>
                            <h5>Osama Bakri</h5>
                            <span>NiftyTheme Agency</span>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="text-box">Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results.</div>
                        <div class="item-name text-center">
                            <i class="flaticon-quote"></i>
                            <h5>Nour Ramadan</h5>
                            <span>AR-Coder Agency</span>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="text-box">Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results.</div>
                        <div class="item-name text-center">
                            <i class="flaticon-quote"></i>
                            <h5>Hani Yousef</h5>
                            <span>Civil Lawyer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Blog -->
<section class="bolg py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>blog</h2>
                    <h3>News Feeds</h3>
                    <p>Decision Are A Professional Attorney &amp; Lawyers Services Provider Institutions. Suitable For Law Firm, Injury Law, Traffic Ticket Attorney, Legacy And More.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="img-box">
                        <a href="02_blog.html" class="open-post">
                            <img class="img-fluid" src="assets/images/blog/01_blog.jpg" alt="01 Blog">
                        </a>
                        <ul>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">,</a></li>
                            <li><a href="#">Legal Advice</a></li>
                        </ul>
                    </div>
                    <div class="text-box">
                        <span class="blog-date">Jan 20, 2019</span>
                        <a href="02_blog.html" class="title-blog">
                            <h5>What you must know about financial law changes</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
                        <a href="02_blog.html" class="link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="img-box">
                        <a href="02_blog.html" class="open-post">
                            <img class="img-fluid" src="assets/images/blog/02_blog.jpg" alt="02 Blog">
                        </a>
                        <ul>
                            <li><a href="#">Law</a></li>
                            <li><a href="#">,</a></li>
                            <li><a href="#">Articles</a></li>
                        </ul>
                    </div>
                    <div class="text-box">
                        <span class="blog-date">Jan 25, 2019</span>
                        <a href="02_blog.html" class="title-blog">
                            <h5>Keep away from drugs, the penalty is 20 years</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
                        <a href="02_blog.html" class="link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="img-box">
                        <a href="02_blog.html" class="open-post">
                            <img class="img-fluid" src="assets/images/blog/03_blog.jpg" alt="03 Blog">
                        </a>
                        <ul>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">,</a></li>
                            <li><a href="#">Law</a></li>
                        </ul>
                    </div>
                    <div class="text-box">
                        <span class="blog-date">Jan 30, 2019</span>
                        <a href="02_blog.html" class="title-blog">
                            <h5>All you want to know about industrial laws</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
                        <a href="02_blog.html" class="link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>