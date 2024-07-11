
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
    <title>EasyCite</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
	<!-- Google Tag Manager 
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MBF5VGG');</script>
	--><!-- End Google Tag Manager -->
	
<script>
//Tracking script
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91234614-1', 'auto');
  ga('send', 'pageview');
</script>
	
    <!-- Core theme CSS, JS & JQUERY (includes Bootstrap)-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link href="css/main-new.css" rel="stylesheet">
	
	<!-- removing jquery as it's throwing up errors, but jQuery functions don't work - rewrite? -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	
</head>
<body>
<!-- START top nav -->
<header>
	<a href="#main-content" class="visually-hidden">Skip to main content</a>
	<div class="top-navigation">
		<!-- START container -->
		<div class="container">
			<div class="row">
				<!-- START left hand column -->
				<div class="col-auto left-nav">
					<div class="rmit-logo"><span class="visually-hidden">RMIT University logo</span></div>
					<a href="#" id="nav-link-0" tabindex="0" data-bs-target="#nav-0" aria-controls="nav-0" onclick="outputQueryStringFunction(this, 'styleguide-0')" class="h2">Easy Cite<span class="visually-hidden">homepage</span></a>
				</div>
				<!-- END left hand column -->
				<!-- START right hand column -->
				<div class="col">
					<ul>
						<li class="hide-md">
						<a href="https://www.rmit.edu.au/library">Library</a>
                        </li>
                        <li class="hide-md">
                            <a href="https://www.rmit.edu.au/library/study/referencing">Referencing</a>
                        </li>
						<li class="menu">
							<button id="menu-button" 
							class="btn btn-primary collapsed" type="button" data-bs-toggle="collapse" 
							data-bs-target="#context-menu" data-bs-display="static" aria-expanded="false" 
							aria-controls="context-menu">Click for main menu</button>
						</li>
					</ul> 
				</div>
				<!-- END right hand column -->
			</div>
		</div>
		<!-- END container -->
	</div>
    <!-- START expanded styles hamburger menu -->
    <div id="context-menu" class="collapse">
		<!-- START container -->
		<div class="container nav-container">
            <nav aria-label="Main Menu">
                <ul class="link-list-white">
                    <li><a id="nav-linkh-2" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-2" aria-controls="nav-2" onclick="outputQueryStringFunction(this, 'styleguide-2')">AGLC4</a></li>
                    <li><a id="nav-linkh-3" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-3" aria-controls="nav-3" onclick="outputQueryStringFunction(this, 'styleguide-3')">APA 7th edition</a></li>
                    <li><a id="nav-linkh-4" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-4" aria-controls="nav-4" onclick="outputQueryStringFunction(this, 'styleguide-4')">Chicago A</a></li>
                    <li><a id="nav-linkh-5" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-5" aria-controls="nav-5" onclick="outputQueryStringFunction(this, 'styleguide-5')">Chicago B</a></li>
                    <li><a id="nav-linkh-6" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-6" aria-controls="nav-6" onclick="outputQueryStringFunction(this, 'styleguide-6')">IEEE</a></li>
                    <li><a id="nav-linkh-1" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-1" aria-controls="nav-1" onclick="outputQueryStringFunction(this, 'styleguide-1')">RMIT Harvard</a></li>
                    <li><a id="nav-linkh-7" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-7" aria-controls="nav-7" onclick="outputQueryStringFunction(this, 'styleguide-7')">Vancouver</a></li>
                </ul>
            </nav>
            <ul class="additional-links">
                <li>
                    <a href="https://www.rmit.edu.au/library">Library</a>
                </li>
                <li>
                    <a href="https://www.rmit.edu.au/library/study/referencing">Referencing</a>
                </li>
            </ul>
		</div>
		<!-- END container -->
	</div>
    <!-- END expanded hamburger menu -->
    
    <!-- START styles menu desktop only -->
	<div id="sub-menu">    
		<div class="container">
			<nav aria-label="Main Menu">
				<ul class="nav" id="nav-tab">
					<li><a id="nav-link-2" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-2" role="tab" aria-controls="nav-2" onclick="outputQueryStringFunction(this, 'styleguide-2')">AGLC4</a></li>
					<li><a id="nav-link-3" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-3" role="tab" aria-controls="nav-3" onclick="outputQueryStringFunction(this, 'styleguide-3')">APA 7th edition</a></li>
					<li><a id="nav-link-4" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-4" role="tab" aria-controls="nav-4" onclick="outputQueryStringFunction(this, 'styleguide-4')">Chicago A</a></li>
					<li><a id="nav-link-5" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-5" role="tab" aria-controls="nav-5" onclick="outputQueryStringFunction(this, 'styleguide-5')">Chicago B</a></li>
					<li><a id="nav-link-6" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-6" role="tab" aria-controls="nav-6" onclick="outputQueryStringFunction(this, 'styleguide-6')">IEEE</a></li>
					<li><a id="nav-link-1" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-1" role="tab" aria-controls="nav-1" onclick="outputQueryStringFunction(this, 'styleguide-1')">RMIT Harvard</a></li>
                    <li><a id="nav-link-7" class="nav-link" href="#" tabindex="0" data-bs-target="#nav-7" role="tab" aria-controls="nav-7" onclick="outputQueryStringFunction(this, 'styleguide-7')">Vancouver</a></li>
				</ul>
			</nav>
		</div>		
	</div>
	<!-- END submenu desktop only -->
</header>
<!-- END top nav -->
	
<!-- Page content--> 		
<!-- style guides content--> 	
<div class="container p-1"> <!-- 1 -->
<!-- padding for content https://getbootstrap.com/docs/5.1/utilities/spacing/-->
<?php 
// include the parsedown code
require_once 'Parsedown.php';
$parsedown = new Parsedown();
// get the query string from the current URL as a text string - this part not yet working...
$queryString = $_SERVER['QUERY_STRING'];
$thisQuery = htmlentities($queryString);
// Use parse_str() function to parse the text string as an array
parse_str($thisQuery, $params); 
// save the result in a variable
$whichstyleguide = $params['styleguide'];
$showInfobox ='block'; 
//get the correct markdown content
if ($whichstyleguide == "styleguide-0"){
	$thestyleguide = file_get_contents('markdown/infotab.md');
	$thestyleguidetitle = "Using Easy Cite";
	$showInfobox ='block'; 
}	else if ($whichstyleguide == "styleguide-1"){
	$thestyleguide = file_get_contents('markdown/rmitharvard.md');
	$thestyleguidetitle = "RMIT Harvard";
	$showInfobox ='none'; 
}	else if ($whichstyleguide == "styleguide-2"){
	$thestyleguide = file_get_contents('markdown/aglc4.md');
	$thestyleguidetitle = "AGLC4";
	$showInfobox ='none'; 
}	else if ($whichstyleguide == "styleguide-3"){
	$thestyleguide = file_get_contents('markdown/apa7thed.md');
	$thestyleguidetitle = "APA 7<sup>th</sup> Edition";
	$showInfobox ='none'; 
}	else if ($whichstyleguide == "styleguide-4"){
	$thestyleguide = file_get_contents('markdown/chicagoa.md');
	$thestyleguidetitle = "Chicago A";
	$showInfobox ='none'; 
}	else if ($whichstyleguide == "styleguide-5"){
	$thestyleguide = file_get_contents('markdown/chicagob.md');
	$thestyleguidetitle = "Chicago B";
	$showInfobox ='none'; 
}	else if ($whichstyleguide == "styleguide-6"){
	$thestyleguide = file_get_contents('markdown/ieee.md');
	$thestyleguidetitle = "IEEE";
	$showInfobox ='none'; 
}	else if ($whichstyleguide == "styleguide-7"){
	$thestyleguide = file_get_contents('markdown/vancouver.md');
	$thestyleguidetitle = "Vancouver";
	$showInfobox ='none'; 
}	else {
	$thestyleguide = file_get_contents('markdown/infotab.md');
	$thestyleguidetitle = "Using Easy Cite";
	$showInfobox ='block'; 
}

// get the markdown content - populates the page with content from a particular style guide	
$mylist = $parsedown->text($thestyleguide);
	

	
//START STYLE GUIDE
$mylist = preg_replace("/<h6>start-style-guide<\/h6>/", '
<div id="page-content"><!-- 2 -->
<main class="container main-content">
<div id="nav-tabContent-xx"><!-- 3 -->
<div class="tab-pane fade" id="nav-xx" role="tabpanel" aria-labelledby="nav-xx-tab"><!-- 4 -->
<div class="row "><!-- 5 -->

<!-- START right nav -->
<div class="col-xl-4 order-last" id="pills-tab" role="tablist"><!-- 6 -->
<nav class="right-nav-simple" aria-label="Section Menu">', $mylist);
//DESKTOP TITLE top of SIDEBAR
$mylist = preg_replace("/<h6>start-desktop-title<\/h6>/", ' ', $mylist);
$mylist = preg_replace("/<h6>end-desktop-title<\/h6>/", ' ', $mylist);
	
//SIDEBAR	
$mylist = preg_replace("/<h6>start-type-menu<\/h6>/", '
<!-- START sidebar nav -->', $mylist);
$mylist = preg_replace("/<h2>/", '
<button class="nav-link" id="stn-yy" data-bs-toggle="pill" data-bs-target="#sgt-yy" type="button" role="tab" tabindex="0" aria-controls="sgt-yy" aria-selected="false" onclick="globalHashFunction(this, \'thishash1\')">', $mylist); 

$mylist = preg_replace("/<\/h2>/s", '
</button>', $mylist);
	
$mylist = preg_replace("/<h6>end-type-menu<\/h6>/", '
</nav>
</div><!-- -6 -->
<!-- END right nav -->', $mylist);	
	
	
//MOBILE TITLE - title part only visible in mobile view
$mylist = preg_replace("/<h6>start-mobile-title<\/h6>/", '
<!-- START content columns -->
<div class="col-xl-8 order-first"><!-- 7 -->				
<!-- START tab-content stnContent-0 -->
<div class="tab-pane fade" id="sgt-yy" role="tabpanel" aria-labelledby="stn-yy"><!-- 8 -->
<div class="tab-content" id="stnContent-yy"><!-- 9 -->', $mylist);
$mylist = preg_replace("/<h6>end-mobile-title<\/h6>/", '<!-- end mobile title -->', $mylist);	

// ACCORDIONS
$mylist = preg_replace("/<h6>start-content-area<\/h6>/", '
<!-- START printable guide div -->
<div id="printable-guide"><!-- 10 -->', $mylist);
	
// PRINTABLE SECTION	
$mylist = preg_replace("/<h6>start-type-content<\/h6>/", '
<!-- start type content -->', $mylist);	
//<div class="tab-pane fade" id="sgt-yy" role="tabpanel" aria-labelledby="stn-yy"><!-- 11 -->
//TYPE TITLE
$mylist = preg_replace("/<h6>start-type-title<\/h6>/", '
<div class="page-title"><!-- 12 -->', $mylist);
$mylist = preg_replace("/<h6>end-type-title<\/h6>/", '
<button class="btn btn-print partprint" id="printthistype" type="button" tabindex="0" onclick="printThisGuide(this);">Print<span class="visually-hidden"> this part of the style guide (opens new window)</span></button></div><!-- -12 -->', $mylist);	


	
// ACCORDION ITEMS
$mylist = preg_replace("/<h6>start-subtype<\/h6>/s", '', $mylist);
$mylist = preg_replace("/<h6>start-subtype-item<\/h6>/s", '
<div class="accordion" id="accordionExample-zz"><!-- 13 -->
<div class="accordion-item" id="accordion-item-zz"><!-- 14 -->', $mylist);
$mylist = preg_replace("/<h3>/s", '
<h3 class="accordion-header mt-1" id="heading-zz">
<button class="accordion-button easyaccbutton collapsed" type="button" tabindex="0" data-bs-toggle="collapse" data-bs-target="#subtype-zz" aria-expanded="false" aria-controls="collapse-zz" onclick="globalHashFunction(this, \'thishash2\')">', $mylist);
$mylist = preg_replace("/<\/h3>/s", '
</button></h3>', $mylist);		
$mylist = preg_replace("/<h6>start-subtype-content<\/h6>/s", '
<div class="accordion-collapse collapse" id="subtype-zz" aria-labelledby="heading-zz" data-bs-parent="#accordionExample-0"><!-- 15 -->
<div class="accordion-body"><!-- 16 -->', $mylist);
$mylist = preg_replace("/<h6>end-subtype-content<\/h6>/s", '
<button class="btn btn-print sectionprint" type="button" tabindex="0" onclick="printThisGuide(this);">Print this section<span class="visually-hidden"> (opens new window)</span></button>
</div><!-- -16 -->
</div><!-- -15 -->
', $mylist);
$mylist = preg_replace("/<h6>end-subtype-item<\/h6>/s", '
</div><!-- -14 -->
</div><!-- -13 -->', $mylist);
$mylist = preg_replace("/<h6>end-subtype<\/h6>/s", '
', $mylist);
// END ACCORDION ITEMS
	
$mylist = preg_replace("/<h6>end-type-content<\/h6>/s", '', $mylist);
//</div><!-- -11 -->
	
$mylist = preg_replace("/<h6>end-content-area<\/h6>/s", '
</div><!-- -10 -->
</div><!-- -9 -->
</div><!-- -8 -->
</div><!-- -7 -->
<!-- END content columns -->', $mylist);
	
$mylist = preg_replace("/<h6>end-style-guide<\/h6>/s", '
</div><!-- -5 -->
</div><!-- -4 -->
</div><!-- -3 -->
<div id="print-title"><!-- 17 -->
<button class="btn btn-print guideprint" id="sgt-print-tab" type="button" tabindex="0" onclick="printThisGuide(this);">Print the entire style guide<span class="visually-hidden"> (opens new window)</span>
</button>
</div><!-- -17 -->
</main>
</div><!-- -2 -->
', $mylist);
	
// CUSTOM TAGS TO CLASSES
// these custom tags are used in the markdown (.md) files where markdown limitations required inventing 
// tags that could then be replaced with <p> or <div> and classes that have specific styles in the CSS
// HANGING INDENTS
$mylist = preg_replace("/{.hanging-indent}/s", '<div class="hanging-indent">', $mylist);
$mylist = preg_replace("/{\/.hanging-indent}/s", '</div>', $mylist);
// FOOTNOTE INDENTS
$mylist = preg_replace("/{.footnote-indent}/s", '<div class="footnote-indent">', $mylist);
$mylist = preg_replace("/{\/.footnote-indent}/s", '</div>', $mylist);
// IEEE reference list
$mylist = preg_replace("/{.ieee-refs}/s", '<div class="ieee-refs">', $mylist);
$mylist = preg_replace("/{\/.ieee-refs}/s", '</div>', $mylist);
// CENTRE ALIGN TEXT
$mylist = preg_replace("/{.centre-align}/s", '<p class="centre-align">', $mylist);
$mylist = preg_replace("/{\/.centre-align}/s", '</p>', $mylist);
// FIGURE TEXT
$mylist = preg_replace("/{.figure-text}/s", '<p class="figure-text">', $mylist);
$mylist = preg_replace("/{\/.figure-text}/s", '</p>', $mylist);
// GREY BACKGROUND FOR TABLE CELL CONTENT
$mylist = preg_replace("/<grey>/s", '<div class="grey">', $mylist);
$mylist = preg_replace("/<\/grey>/s", '</div>', $mylist);
//CUSTOM TITLES
$mylist = preg_replace("/{.desktop-title}/s", '<h1>', $mylist);
$mylist = preg_replace("/{\/.desktop-title}/s", '</h1>', $mylist);
$mylist = preg_replace("/{.mobile-title}/s", '<h1 class="mobile-title">', $mylist);
$mylist = preg_replace("/{\/.mobile-title}/s", '</h1>', $mylist);
$mylist = preg_replace("/{.type-title}/s", '<h2 class="h1">', $mylist);
$mylist = preg_replace("/{\/.type-title}/s", '</h2>', $mylist);
//REMOVE EMPTY <P>
$mylist = preg_replace("/<p><h1/s", '<h1', $mylist);
$mylist = preg_replace("/<\/h1><\/p>/s", '</h1>', $mylist);
$mylist = preg_replace("/<p><h2/s", '<h2', $mylist);
$mylist = preg_replace("/<\/h2><\/p>/s", '</h2>', $mylist);
// END CONTENT
	
	
// REPLACE FOR FIRST
//replace property for the first tab, pill, accordion only - to show, true or active
$mylist = preg_replace("/class=\"tab-pane fade\" id=\"nav/", 'class="tab-pane fade show active" id="nav', $mylist, 1);
$mylist = preg_replace("/class=\"tab-pane fade\" id=\"s/", 'class="tab-pane fade show active" id="s', $mylist, 1);
// first accordion button remove collapsed
$mylist = preg_replace("/<!-- first accordion item -->\s<div class=\"accordion-collapse collapse/", '<!-- first accordion item --><div class="accordion-collapse collapse show', $mylist, 1); //remove number "1" to open all first accordion items

//$mylist = preg_replace("/class=\"accordion-button easyaccbutton collapsed\"", 'class="accordion-button easyaccbutton"', $mylist, 1);	
$mylist = preg_replace("/aria-selected=\"false\"/", 'aria-selected="true"', $mylist, 1);
$mylist = preg_replace("/nav-link myleftpills/", 'nav-link myleftpills active', $mylist, 1);
$mylist = preg_replace("/aria-expanded=\"false\"/", 'aria-expanded="true"', $mylist, 1);
	
// COUNTERS
//loop through bootstrap classes to allocate unique identifyers to each iteration of that class 
// so that bootstrap tabs, pills and accordians will match and work
//set unique ID names for TABS
$counter0 = 0;
preg_match_all("/id=\"nav-tabContent-xx\"/", $mylist, $matches0 );
foreach($matches0[0] as $titles0){
	$mylist = preg_replace("/id=\"nav-tabContent-xx\"/", "id=\"nav-tabContent-$counter0\"", $mylist, 1);
	++$counter0;
}	
$counter1 = 0;
preg_match_all("/id=\"nav-xx-tab\"/", $mylist, $matches1 );
foreach($matches1[0] as $titles1){
	$mylist = preg_replace("/id=\"nav-xx-tab\"/", "id=\"nav-$counter1-tab\"", $mylist, 1);
	++$counter1;
}
$counter111 = 0;
preg_match_all("/id=\"nav-link-xx\"/", $mylist, $matches111 );
foreach($matches111[0] as $titles111){
	$mylist = preg_replace("/id=\"nav-link-xx\"/", "id=\"nav-link-$counter111\"", $mylist, 1);
	++$counter111;
}
$counter2 = 0;
preg_match_all("/data-bs-target=\"#nav-xx\"/", $mylist, $matches2 );
foreach($matches2[0] as $titles2){
	$mylist = preg_replace("/data-bs-target=\"#nav-xx\"/", "data-bs-target=\"#nav-$counter2\"", $mylist, 1);
	++$counter2;
}
$counter3 = 0;
preg_match_all("/aria-controls=\"nav-xx\"/", $mylist, $matches3 );
foreach($matches3[0] as $titles3){
	$mylist = preg_replace("/aria-controls=\"nav-xx\"/", "aria-controls=\"nav-$counter3\"", $mylist, 1);
	++$counter3;
}
$counter4 = 0;
preg_match_all("/id=\"nav-xx\"/", $mylist, $matches4 );
foreach($matches4[0] as $titles4){
	$mylist = preg_replace("/id=\"nav-xx\"/", "id=\"nav-$counter4\"", $mylist, 1);
	++$counter4;
}
$counter5 = 0;
preg_match_all("/aria-labelledby=\"nav-xx-tab\"/", $mylist, $matches5 );
foreach($matches5[0] as $titles5){
	$mylist = preg_replace("/aria-labelledby=\"nav-xx-tab\"/", "aria-labelledby=\"nav-$counter5-tab\"", $mylist, 1);
	++$counter5;
}
//set unique ID names for PILLS
$counter60 = 0;
preg_match_all("/id=\"stnContent-yy\"/", $mylist, $matches60 );
foreach($matches60[0] as $titles60){
	$mylist = preg_replace("/id=\"stnContent-yy\"/", "id=\"stnContent-$counter60\"", $mylist, 1);
	++$counter60;
}		
$counter6 = 0;
preg_match_all("/id=\"stn-yy\"/", $mylist, $matches6 );
foreach($matches6[0] as $titles6){
	$mylist = preg_replace("/id=\"stn-yy\"/", "id=\"stn-$counter6\"", $mylist, 1);
	++$counter6;
}

$counter7 = 0;
preg_match_all("/data-bs-target=\"#sgt-yy\"/", $mylist, $matches7 );
foreach($matches7[0] as $titles7){
	$mylist = preg_replace("/data-bs-target=\"#sgt-yy\"/", "data-bs-target=\"#sgt-$counter7\"", $mylist, 1);
	++$counter7;
}
$counter8 = 0;
preg_match_all("/aria-controls=\"sgt-yy\"/", $mylist, $matches8 );
foreach($matches8[0] as $titles8){
	$mylist = preg_replace("/aria-controls=\"sgt-yy\"/", "aria-controls=\"sgt-$counter8\"", $mylist, 1);
	++$counter8;
}
$counter9 = 0;
preg_match_all("/id=\"sgt-yy\"/", $mylist, $matches9 );
foreach($matches9[0] as $titles9){
	$mylist = preg_replace("/id=\"sgt-yy\"/", "id=\"sgt-$counter9\"", $mylist, 1);
	++$counter9;
}
$counter10 = 0;
preg_match_all("/aria-labelledby=\"stn-yy\"/", $mylist, $matches10 );
foreach($matches10[0] as $titles10){
	$mylist = preg_replace("/aria-labelledby=\"stn-yy\"/", "aria-labelledby=\"stn-$counter10\"", $mylist, 1);
	++$counter10;
}		
//set unique ID names for ACCORDIONS
$counter16 = 0;
preg_match_all("/id=\"accordionExample-zz\"/", $mylist, $matches16 );
foreach($matches16[0] as $titles16){
	$mylist = preg_replace("/id=\"accordionExample-zz\"/", "id=\"accordionExample-$counter16\"", $mylist, 1);
	++$counter16;
}
$counter110 = 0;
preg_match_all("/id=\"accordion-item-zz\"/", $mylist, $matches110 );
foreach($matches110[0] as $titles110){
	$mylist = preg_replace("/id=\"accordion-item-zz\"/", "id=\"accordion-item-$counter110\"", $mylist, 1);
	++$counter110;
}	
$counter11 = 0;
preg_match_all("/id=\"heading-zz\"/", $mylist, $matches11 );
foreach($matches11[0] as $titles11){
	$mylist = preg_replace("/id=\"heading-zz\"/", "id=\"heading-$counter11\"", $mylist, 1);
	++$counter11;
}	
$counter12 = 0;
preg_match_all("/data-bs-target=\"#subtype-zz\"/", $mylist, $matches12 );
foreach($matches12[0] as $titles12){
	$mylist = preg_replace("/data-bs-target=\"#subtype-zz\"/", "data-bs-target=\"#subtype-$counter12\"", $mylist, 1);
	++$counter12;
}
$counter13 = 0;
preg_match_all("/aria-controls=\"collapse-zz\"/", $mylist, $matches13 );
foreach($matches13[0] as $titles13){
	$mylist = preg_replace("/aria-controls=\"collapse-zz\"/", "aria-controls=\"collapse-$counter13\"", $mylist, 1);
	++$counter13;
}
$counter14 = 0;
preg_match_all("/aria-labelledby=\"heading-zz\"/", $mylist, $matches14 );
foreach($matches14[0] as $titles14){
	$mylist = preg_replace("/aria-labelledby=\"heading-zz\"/", "aria-labelledby=\"heading-$counter14\"", $mylist, 1);
	++$counter14;
}
$counter17 = 0;
preg_match_all("/data-bs-parent=\"#accordionExample-zz\"/", $mylist, $matches17 );
foreach($matches17[0] as $titles17){
	$mylist = preg_replace("/data-bs-parent=\"#accordionExample-zz\"/", "data-bs-parent=\"#accordionExample-$counter17\"", $mylist, 1);
	++$counter17;
}
$counter15 = 0;
preg_match_all("/id=\"subtype-zz\"/", $mylist, $matches15 );
foreach($matches15[0] as $titles15){
	$mylist = preg_replace("/id=\"subtype-zz\"/", "id=\"subtype-$counter15\"", $mylist, 1);
	++$counter15;
}
// REPLACE pills buttons javascript with unique ID
$counter18 = 0;
preg_match_all("/thishash1/", $mylist, $matches18 );
foreach($matches18[0] as $titles18){
	$mylist = preg_replace("/thishash1/", "#stn-$counter18", $mylist, 1);
	++$counter18;
}
// REPLACE accordion buttons javascript with unique ID
$counter19 = 0;
preg_match_all("/thishash2/", $mylist, $matches19 );
foreach($matches19[0] as $titles19){
	$mylist = preg_replace("/thishash2/", "#subtype-$counter19", $mylist, 1);
	++$counter19;
}
// REPLACE top tab buttons javascript with unique ID
$counter20 = 0;
preg_match_all("/thisstyleguide/", $mylist, $matches20 );
foreach($matches20[0] as $titles20){
	$mylist = preg_replace("/thisstyleguide/", "styleguide-$counter20", $mylist, 1);
	++$counter20;
}
//make the correct styleguide tab active
if ($whichstyleguide == "styleguide-0"){
	$mylist = preg_replace("/id=\"nav-link-0\" class=\"nav-link/", 'id="nav-link-0" class="nav-link selected', $mylist, 1); 
	$mylist = preg_replace("/id=\"nav-linkh-0\" class=\"nav-link/", 'id="nav-link-0" class="nav-link selected', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-1"){
	$mylist = preg_replace("/id=\"nav-link-1\" class=\"nav-link/", 'id="nav-link-1" class="nav-link selected', $mylist, 1); 
	$mylist = preg_replace("/id=\"nav-linkh-1\" class=\"nav-link/", 'id="nav-link-1" class="nav-link selected', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-2"){
	$mylist = preg_replace("/id=\"nav-link-2\" class=\"nav-link/", 'id="nav-link-2" class="nav-link selected', $mylist, 1);  
	$mylist = preg_replace("/id=\"nav-linkh-2\" class=\"nav-link/", 'id="nav-link-2" class="nav-link selected', $mylist, 1);  
}	else if ($whichstyleguide == "styleguide-3"){
	$mylist = preg_replace("/id=\"nav-link-3\" class=\"nav-link/", 'id="nav-link-3" class="nav-link selected', $mylist, 1);  
	$mylist = preg_replace("/id=\"nav-linkh-3\" class=\"nav-link/", 'id="nav-link-3" class="nav-link selected', $mylist, 1);  
}	else if ($whichstyleguide == "styleguide-4"){
	$mylist = preg_replace("/id=\"nav-link-4\" class=\"nav-link/", 'id="nav-link-4" class="nav-link selected', $mylist, 1);  
	$mylist = preg_replace("/id=\"nav-linkh-4\" class=\"nav-link/", 'id="nav-link-4" class="nav-link selected', $mylist, 1);  
}	else if ($whichstyleguide == "styleguide-5"){
	$mylist = preg_replace("/id=\"nav-link-5\" class=\"nav-link/", 'id="nav-link-5" class="nav-link selected', $mylist, 1);  
	$mylist = preg_replace("/id=\"nav-linkh-5\" class=\"nav-link/", 'id="nav-link-5" class="nav-link selected', $mylist, 1);  
}	else if ($whichstyleguide == "styleguide-6"){
	$mylist = preg_replace("/id=\"nav-link-6\" class=\"nav-link/", 'id="nav-link-6" class="nav-link selected', $mylist, 1);  
	$mylist = preg_replace("/id=\"nav-linkh-6\" class=\"nav-link/", 'id="nav-link-6" class="nav-link selected', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-7"){
	$mylist = preg_replace("/id=\"nav-link-7\" class=\"nav-link/", 'id="nav-link-6" class="nav-link selected', $mylist, 1); 
	$mylist = preg_replace("/id=\"nav-linkh-7\" class=\"nav-link/", 'id="nav-link-6" class="nav-link selected', $mylist, 1); 
}	else {
	$mylist = preg_replace("/id=\"nav-link-0\" class=\"nav-link/", 'id="nav-link-0" class="nav-link selected', $mylist, 1);  
	$mylist = preg_replace("/id=\"nav-linkh-0\" class=\"nav-link/", 'id="nav-link-0" class="nav-link selected', $mylist, 1);  
}
	
// ISSUES TO BE RESOLVED / Development to-do list
// change the code from PHP to Javascript to show first accordion item in an accordion then won't need the comment in  markdown
// need to strip all COMMENTS out of $mylist after all replaces are done	
// change layout - make first tab the "Using Easy Cite" tab so style guides are not selected by default. remove how to from banner.
	
	
//OUTPUT THE PARSED CONTENT TO HTML
echo($mylist);
?>


<!-- start info box-->
<div id="ecinfopane" style="display: <?= $showInfobox?>">
	<h3><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2.033 16.01c.564-1.789 1.632-3.932 1.821-4.474.273-.787-.211-1.136-1.74.209l-.34-.64c1.744-1.897 5.335-2.326 4.113.613-.763 1.835-1.309 3.074-1.621 4.03-.455 1.393.694.828 1.819-.211.153.25.203.331.356.619-2.498 2.378-5.271 2.588-4.408-.146zm4.742-8.169c-.532.453-1.32.443-1.761-.022-.441-.465-.367-1.208.164-1.661.532-.453 1.32-.442 1.761.022.439.466.367 1.209-.164 1.661z"/></svg>&nbsp;How to use the Easy Cite referencing tool</h3>
    <div class="d-flex flex-row flex-wrap">
        <div class="col-12 col-sm-6 colpad">
            <h5>Easy Cite lets you look up referencing tips and examples in a selection of common styles used at RMIT.</h5>
			<p>The styles included are RMIT Harvard, AGLC4, APA, Chicago A: footnotes and bibliography, Chicago B: author-date, IEEE, and Vancouver.</p>
            <p>Easy Cite includes as many examples of reference types as possible. If the style guides shown here do not include your specific reference or citation type, consider applying the format from similar types within Easy Cite for your reference and citation, or check the relevant style manual.</p>
            <p>Easy Cite is intended as a guide only and some styles are open to interpretation. You should always check with your instructor to ensure you are using the correct style for your assignments and assessment tasks.</p>
			<p>Visit the <a href="https://emedia.rmit.edu.au/learninglab/content/referencing" target="_blank">Learning Lab Referencing Tutorial (opens in a new tab)</a> and find out how to correctly use different referencing styles in academic writing to avoid plagiarism and get better marks.</p>
        </div>
		<div class="col-12 col-sm-6 colpad">	
			<h5>Select a style guide from the tabs above to start using Easy Cite.</br>
           Or view this instructional video first...</h5>
		
            <p>&nbsp;</p>
            <p><a href="transcripts/EasyCite-video-transcript.rtf">Video transcript (RTF)</a></p>
        </div>
    </div>
</div>
<!-- end info box-->	
<!-- end padding for content -->
<!-- end page content-->
</div><!-- -1 -->
<!-- end container p-1-->
<!-- START footer -->	
<!-- START ask the library -->
<div class="footer-container">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- START ask the library -->
					<div class="ask-container">

						<div class="ask-the-library">
							<a href="https://www.rmit.edu.au/library/about-and-contacts/ask-the-library">
								<img src="https://rmitlibrary.github.io/cdn/image/svg/ask-the-library.svg" class="ask-logo" alt="Ask the library" />
								<div class="ask-text">
									<p class="lead">Still can't find what you need?</p>
									<p>The RMIT University Library provides study support, one-on-one consultations and peer mentoring to RMIT students.</p>
								</div>
							</a>
						</div>

					</div>
					<!-- END ask the library -->
				</div>
			</div>
		</div>
		<!-- START acknowledgement -->
		    <div class="acknowledgement">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="acknowledgement-container">
							<div class="acknowledgement-image">
								<img src="https://www.rmit.edu.au/content/dam/rmit/images/luwaytini.png" alt="" />
							</div>

							<div class="content">
								<img alt="aboriginal flag" src="https://www.rmit.edu.au/content/dam/rmit/au/en/news/homepage/flag-red.png" />
								<img alt="torres strait flag" src="https://www.rmit.edu.au/content/dam/rmit/au/en/news/homepage/flag-green.png">

								<h2 class="h4 margin-top-zero">Acknowledgement of Country</h2>
								<p>RMIT University acknowledges the people of the Woi wurrung and Boon wurrung language groups of the eastern Kulin Nation on whose unceded lands we conduct the business of the University. RMIT University respectfully acknowledges their Ancestors and Elders, past and present. RMIT also acknowledges the Traditional Custodians and their Ancestors of the lands and waters across Australia where we conduct our business - Artwork 'Luwaytini' by Mark Cleaver, Palawa.</p>
								<a href="#" class="link-large">More information</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>    
		<!-- END acknowledgement -->
		<!-- START footer -->
		<footer>
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- START logo -->    
					<a aria-label="Royal Melbourne Institute of Technology University Logo" href="https://www.rmit.edu.au/">
						<div aria-hidden="true" class="logo"><span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/rmit-logo.svg" style="width: 100px" alt="" /></span>
						</div>
					</a>
					<!-- END logo -->
					<!-- START links -->
					<div class="footer-info">
						<p>Easy Cite referencing guide by <a href="https://www.rmit.edu.au/library" target="_blank" class="modallinks">RMIT University Library</a> is licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank" class="modallinks">Creative Commons CC BY-NC-SA 4.0</a>. </p>
					 	<p>This resource is derived from a work by <a href="https://www.swinburne.edu.au/library" target="_blank" class="modallinks">Swinburne University Library</a>, based on an original work by <a href="https://www.griffith.edu.au/library" target="_blank" class="modallinks">Griffith University Library</a>.</p>
					 	<p>(links open in new tabs)</p>
					</div>
					<ul class="footer-links"><li><a href="https://www.rmit.edu.au/library/study/referencing/easy-cite-feedback" target="_blank">Send us feedback</a></li></ul>
					
					<!-- END links -->
					<!-- START legal-social -->
					<div class="footerlegalShareItems">
						<!-- START legal -->
						<div class="footer-legal">
						<ul>
							<li>Copyright © 2024 RMIT University<span> | </span></li>
							<li><a href="https://www.rmit.edu.au/utilities/terms"><span class="no-focus" tabindex="-1">Terms</span></a><span> | </span></li>
							<li><a href="https://www.rmit.edu.au/utilities/privacy"><span class="no-focus" tabindex="-1">Privacy</span></a><span> | </span></li>
							<li><a href="https://www.rmit.edu.au/utilities/accessibility"><span class="no-focus" tabindex="-1">Accessibility</span></a> <span> | </span></li>
							<li><a data-analytics-type="footerlink" data-analytics-value="Website feedback" href="https://www.rmit.edu.au/utilities/website-feedback"><span class="no-focus" tabindex="-1">Website feedback</span></a><span> | </span></li>
							<li><a data-analytics-type="footerlink" data-analytics-value="Complaints" href="https://www.rmit.edu.au/utilities/complaints"><span class="no-focus" tabindex="-1">Complaints</span></a><span> | </span></li>
							<li>ABN 49 781 030 034<span> | </span></li>
							<li>CRICOS provider number: 00122A<span> | </span></li>
							<li>TEQSA provider number: PRV12145<span> | </span></li>
							<li>RTO Code: 3046<span> | </span></li>
							<li><a href="https://www.open.edu.au/online-courses/rmit-university"><span class="no-focus" tabindex="-1">Open Universities Australia</span></a> </li>
						  </ul>
						</div>
						<!-- END legal -->
						<!-- START social -->
						<div class="social-nav">
						<ul> 
							<!-- START facebook -->
							<li><a aria-label="For Facebook"  href="https://www.facebook.com/RMITuniversity/"> <span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/social/facebook.svg" alt="" /></span></a></li>
							<!-- END facebook -->
							<!-- START twitter/x -->
							<li><a aria-label="For Twitter" href="https://twitter.com/rmit"> <span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/social/twitter.svg" alt="" /></span></a></li>
							<!-- END twitter/x -->
							<!-- START insta -->
							<li><a aria-label="For Instagram" href="https://www.instagram.com/rmituniversity/"> <span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/social/instagram.svg" alt="" /></span> </a></li>
							<!-- END insta -->              
							<!-- START LinkedIn -->
							<li><a aria-label="For LinkedIn" data-analytics-type="socialshare" data-analytics-value="LinkedIn" href="https://www.linkedin.com/school/rmit-university/"><span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/social/linkedin.svg" alt="" /></span></a></li>
							<!-- END LinkedIn -->
							<!-- START YouTube -->
							<li><a aria-label="For Youtube" href="https://www.youtube.com/user/rmitmedia"> <span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/social/youtube.svg" alt="" /></span></a></li>
							<!-- END YouTube -->     
							<!-- START Weibo -->          
							<li><a aria-label="For Weibo" href="https://www.weibo.com/rmituni"> <span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/social/weibo.svg" alt="" /></span></a></li>
							<!-- END Weibo -->                
						</ul>
						</div>
						<!-- END social -->
					</div>
					<!-- END legal-social -->
				</div>
			</div>
		</div>
		</footer>
		<!-- END footer -->
	</div>
	
<!-- END footer -->	


<script type="application/javascript">
// --------------------------
// URL STRING IMPLEMENTATION
// script to find the URL hash string and split it 
// to identify which pill and which accordion item need to open
var tabopen;
var accordopen;
if (location.hash !== null && location.hash !== "") { //check for hash
		var hash = window.location.hash; 
		var myArray = hash.split("#"); //split hash into two parts & save in an array
		tabopen = myArray[1];  //first item of array after the hash which is zero position
		accordopen = myArray[2];  //second item of array after the hash
		
} else {
	// else default to the first pill and accordion item
	tabopen = "#stn-0";
	accordopen = "#subtype-0";
}
var globalpillshash = tabopen;
	// create a global pills variable that will hold the value of the current pills 
	// even when the accordion item is clicked.
function globalHashFunction(button, sethash){
	// then add the global pills variable to the accordion variable if selected 
	// to enable saving the correct pills/accordion position in the URL string.
	if (sethash.includes("stn")){
	   	var pillshash = sethash;
		globalpillshash = sethash;
		//console.log(pillshash);
	   	window.location.hash = pillshash;
	}
	if (sethash.includes("subtype")){
		var accordionhash = sethash;
	   	window.location.hash = globalpillshash + accordionhash;
		console.log(globalpillshash + accordionhash);
	}
	//keep page scrolled to the top - avoids the content jumping around when selecting vertical pills
	//document.body.scrollTop = 0; // For Safari - not working
  	//document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera - is working
}

// this function takes the info from the tab button to output a query string 
// that PHP can pick up to load the correct markdown file
function outputQueryStringFunction(button, thisquery){
	if (thisquery.includes("styleguide")){
		const params = new URLSearchParams(location.search);
		params.set('styleguide', thisquery);
		params.toString(); // => styleguide=styleguide-3;
		console.log(params.toString());
		window.history.pushState({}, '', `${location.pathname}?${params.toString()}#stn-0#subtype-0`);
	}
	// refresh the page...
	location.reload();
	// window.scroll(0,0); //need to scroll window to top of page but not working 	
	document.getElementById("nav-tab").focus();
	// document.body.scrollTop = 0; // For Safari
  	// document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
// END URL STRING IMPLEMENTATION
// --------------------------
// URL STRING TO SAVE AND SHOW CORRECT CONTENT
document.addEventListener("DOMContentLoaded", function() {
    function showTab(tabId) {
        var tabElement = document.querySelector('[data-bs-target="#' + tabId + '"]');
        if (tabElement) {
            console.log('Tab element found:', tabElement);
            try {
                var tabInstance = new bootstrap.Tab(tabElement);
                tabInstance.show(); // Show the correct tab
            } catch (error) {
                console.error('Error showing tab:', error);
            }
        } else {
            console.error('Tab element not found:', tabId); // this line throwing errors
        }
    }

    function showAccordion(accordionId) {
        var accordionElement = document.getElementById(accordionId);
        if (accordionElement) {
            console.log('Accordion element found:', accordionElement);
            try {
                var collapseInstance = new bootstrap.Collapse(accordionElement, {
                    toggle: true
                });
            } catch (error) {
                console.error('Error showing accordion:', error);
            }
        } else {
            console.error('Accordion element not found:', accordionId);
        }
    }

    function parseHash() {
        var hash = location.hash;
        if (hash) {
            var myArray = hash.split("#"); // Split the hash into parts
            var tabopen = myArray[1]; // First part of the array
            var accordionopen = myArray[2]; // Second part of the array

            console.log('Parsed hash:', { tabopen, accordionopen });

            if (tabopen) {
                console.log('Attempting to show tab:', tabopen);
                showTab(tabopen);
            }

            if (accordionopen) {
                console.log('Attempting to show accordion:', accordionopen);
                showAccordion(accordionopen);
            }
        } else {
            console.log('No hash found, showing default tab and accordion');
            showAccordion("subtype-0"); // Default show first accordion
            showTab("sgt-0"); // Default show first tab
        }
    }

    // Run the parseHash function after the DOM is fully loaded
    parseHash();
});
// END URL STRING TO SAVE AND SHOW CORRECT CONTENT
// --------------------------	
// ACCORDION FAMILIES
// this function dynamically allocates the parent accordion div of the accordion-item 
// to the children's (accordion-collapse) data-bs-parent value 
// so that selecting one accordion will close the others in the group.
// find all the accordion-item divs
const mylist = document.getElementsByClassName("accordion-item"); 
	// loop through all the accordion-item divs
	for (let p = 0; p < mylist.length; p++){
		// console.log(mylist[p].id);
		// find all the children with the class name accordion-collapse
		const nodes = mylist[p].getElementsByClassName("accordion-collapse");
		// loop through the children
		for (let i = 0; i < nodes.length; i++) { 
			// set the children's value for data-bs-parent to the "grandparent" div ID name
			nodes[i].setAttribute("data-bs-parent", "#" + mylist[p].parentElement.id); 
			// console.log(nodes[i].getAttribute("data-bs-parent"));
		}
	}
// remove the "collapsed" class from the first accordion button in each accordion so it's in its "open" state
// Use this code to open all accordions first sub-type in a style guide
const acclist = document.getElementsByClassName("accordion");
	for (let q = 0; q < acclist.length; q++){
		const acbuttons = acclist[q].getElementsByClassName("accordion-button");
		acbuttons[0].classList.remove("collapsed");
		// console.log(acbuttons[0].className);
	}

// OR
// Use this code to only open the first accordion subtype in a style guide
// only run this code if there are accordions - i.e. not the "Using Easy Cite" tab.
var thisstatus = '<?= $showInfobox?>';
if (thisstatus == "none"){
	const acbuttons = document.getElementsByClassName("accordion-button");
	acbuttons[0].classList.remove("collapsed");
}
// END ACCORDION FAMILIES
// -----------------------------
// PRINT SCRIPT
// this script controls the method for printing a section, part or whole guide depending on the button selected
function printThisGuide(elem) {
	// get the button class name attribute
	var thisbutton = elem.className;
	// create variable to hold the correct style guide title
	var thistitle = document.getElementById("print-title").id;
	// create variable to hold the correct div id for printing
	var thisdiv;
	console.log(thisbutton);
	if (thisbutton.includes("sectionprint")){ 
		// if this is a sectionprint button, find the great-grandparent node to print the section only
		var thisdiv = elem.parentNode.parentNode.parentNode.parentNode.id;
	} else if (thisbutton.includes("partprint")){
		// if this is a partprint button, find the grandparent node to print the part
		var thisdiv = elem.parentNode.parentNode.id;
	} else if (thisbutton.includes("guideprint")){
		// if this is a guideprint button, find the printable-guide div to print the whole guide
		var thisdiv = document.getElementById("printable-guide").id;
	}
	console.log(thisdiv);
	// put the print title into a new variable
	var printTitle = document.getElementById(thistitle).innerHTML;
	// put the HTML contents of the div for printing into a new variable
    var divContents = document.getElementById(thisdiv).innerHTML;
	// open a window, add contents
    var a = window.open('', '', 'height=1200, width=800');
    a.document.write('<html><head>');
	// link to the external stylesheet - change the stylesheet CSS file to change the appearance of the HTML
	a.document.write('<link href="css/printstyles.css" rel="stylesheet">');
	a.document.write('</head>');
    a.document.write('<body> <h1>RMIT Library: Easy Cite online referencing resource</h1>');
	a.document.write('<h2>' + printTitle + '</h2>');
    a.document.write('<div class="printsectionguide">'+ divContents + '</div>');
    a.document.write('</body></html>');
    a.document.close();
	// open print dialogue with a slight delay to allow the CSS to load first
	var timesRun = 0;
	var interval = setInterval(function(){
    	timesRun += 1;
    	if(timesRun === 1){
        	clearInterval(interval);
    	}
    a.print();
	}, 500); 
	a.document.close();
   a.focus();
}
// END PRINT SCRIPT
// -----------------------------
// INSTRUCTIONS TOGGLE
// toggle the instructions box text - open/close
/*function textToggle(elem){
	var thiscol = document.getElementById('collapseExample');
	var colstatus = thiscol.getAttribute('aria-expanded');
	if (colstatus == 'false'){
		document.getElementById('textoggle').innerHTML = "close";
		thiscol.setAttribute("aria-expanded", "true");
		console.log("open");
	} else if (colstatus == 'true') {
		document.getElementById('textoggle').innerHTML = "close";	
		thiscol.setAttribute("aria-expanded", "false");
		console.log("close");
	}
}*/
// END INSTRUCTIONS TOGGLE
// -----------------------------
// START HAMBURGER MENU 
// If true, menu covers content
// If false, menu pushes content down
var menuCover = true;   
// Grab both the menu button and the page content
var menuButton = document.getElementById("menu-button");
var pageContent = document.getElementById("page-content");
// Store content scroll position
var scrollPosition;
// Store display status of menu
var menuDisplay = false;
// Listen for click */
if(menuCover) menuButton.addEventListener("click", showHideMenu);
// If menu is hidden, bootstrap wll show it, hide page content.
// If it's displayed, bottstrap will hide it, show the content.

function showHideMenu() {
    if(menuDisplay == false)
    {
        menuDisplay = true;
        scrollPosition = window.scrollY;    
        pageContent.style.display = "none"; 
    }
    else
    {
        menuDisplay = false;
        pageContent.style.display = "block";
        
        // Change scroll behaviour, jump to where the user had scrolled to on the page, then revert to smooth scrolling again.
        document.documentElement.style.scrollBehavior = "auto";
        window.scroll(0, scrollPosition);
        document.documentElement.style.scrollBehavior = "smooth";
    }
}
//END HAMBURGER MENU 
</script>
</body>
</html>
