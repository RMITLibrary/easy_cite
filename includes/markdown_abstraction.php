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