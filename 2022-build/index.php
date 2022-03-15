<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
<title>EasyCite</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="../2022-build/assets/favicon.ico" />
<!-- Core theme CSS, JS & JQUERY (includes Bootstrap)-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<style>
	body {margin:2rem;}
	.myleftpills {
		text-align: left;
	}
	h4{
		font-size: 1.2rem;
		font-weight: 700;
	}
	h5{
		font-size: 1.2rem;
		font-weight: 700;
	}
	blockquote{
		font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif" !important;
		margin-left: 30px;
	}
	.accordion-button{
		background-color: #e3e5e0 !important;
	}
	.collapsed {
		background-color: #f8f8fa !important;
		
	}
	.rmitbutton {
		border: hidden;
		padding: 10px 24px;
		border-radius: 36px;
		background: #000054;
		color: #ffffff;
		font-size: 0.9rem;
		transition-duration: 0.4s;
	}
	.rmitbutton:hover{
		background: #fac800;
		color: #000054;	
	}
	.rmitbutton:focus {
		background-color: #fac800 !important;
		color: #000058 !important;
 	}
	.notabutton{
		border: hidden;
		background: #ffffff;
		color: #000054;
		font-size: 0.9rem;
		transition-duration: 0.2s;
	}
	.notabutton:hover{
		color: #E61E2A;	
	}
	.notabutton:focus {
		color: #E61E2A;
 	}

</style>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">EasyCite</a>
  		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
 				<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
 						<li><hr class="dropdown-divider" /></li>
 						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<p>&nbsp;</p>
<!-- Page content--> 
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
//get the correct markdown content
if ($whichstyleguide == "styleguide-0"){
	$thestyleguide = file_get_contents('rmitharvard.md');
}	else if ($whichstyleguide == "styleguide-1"){
	$thestyleguide = file_get_contents('aglc4.md');
}	else if ($whichstyleguide == "styleguide-2"){
	$thestyleguide = file_get_contents('apa7thed.md');
}	else if ($whichstyleguide == "styleguide-3"){
	$thestyleguide = file_get_contents('chicago.md');
}	else if ($whichstyleguide == "styleguide-4"){
	$thestyleguide = file_get_contents('ieee.md');
}	else if ($whichstyleguide == "styleguide-5"){
	$thestyleguide = file_get_contents('vancouver.md');
}	else {
	$thestyleguide = file_get_contents('rmitharvard.md');
}
// get the markdown content - which populates the page with content from a particular style guide	
//$thestyleguide = file_get_contents('rmitharvard.md');
$mylist = $parsedown->text($thestyleguide);
//need to develop an if/then script so that when the tabs are clicked, the different markdown files are loaded and parsedown to $mylist		
	
//replace heading tags with bootstrap layout
// NAV TABS
$mylist = preg_replace("/<h6>start-style-menu<\/h6>/", '<nav><div class="nav nav-tabs" id="nav-tab" role="tablist">', $mylist);
$mylist = preg_replace("/<h1>/", '<button id="nav-xx-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-xx" type="button" role="tab" aria-controls="nav-xx" aria-selected="false" onclick="myFunction2(this, \'thisstyleguide\')">', $mylist);
$mylist = preg_replace("/<\/h1>/", '</button>', $mylist);
$mylist = preg_replace("/<h6>end-style-menu<\/h6>/", '</div></nav>', $mylist);
//PILLS
$mylist = preg_replace("/<h6>start-style-guide<\/h6>/", '<p>&nbsp;</p>
	<div class="tab-content" id="nav-tabContent-xx">
	<div class="tab-pane fade" id="nav-xx" role="tabpanel" aria-labelledby="nav-xx-tab"><div class="d-flex align-items-start"><div class="row">', $mylist);	
$mylist = preg_replace("/<h6>start-type-menu<\/h6>/", '<div class="col-sm-3">
	<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">', $mylist);
$mylist = preg_replace("/<h2>/", '<button class="nav-link myleftpills" id="v-pills-yy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-yy" type="button" role="tab" aria-controls="v-pills-yy" aria-selected="false" onclick="myFunction(this, \'thishash1\')">', $mylist);
$mylist = preg_replace("/<\/h2>/s", '</button>', $mylist);
$mylist = preg_replace("/<h6>end-type-menu<\/h6>/", '<button class="nav-link myleftpills guideprint" id="v-pills-print-tab" type="button" onclick="printThisGuide(this);">Print this style guide</button></div><p>&nbsp;</p></div>', $mylist);	
// ACCORDIONS
$mylist = preg_replace("/<h6>start-content-area<\/h6>/", '<div class="col-sm-9 col-12"><div id="printable-guide"><div class="tab-content" id="v-pills-tabContent-yy">', $mylist);
$mylist = preg_replace("/<h6>start-type-content<\/h6>/", '<div class="tab-pane fade" id="v-pills-yy" role="tabpanel" aria-labelledby="v-pills-yy-tab"><div class="d-md-flex justify-content-md-end"><button class="notabutton bi bi-printer partprint" id="printthistype" type="button" onclick="printThisGuide(this);">Print this part of the style guide <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></button></div>', $mylist);	
// ACCORDION ITEMS
$mylist = preg_replace("/<h6>start-subtype<\/h6>/s", '<div class="accordion" id="accordionExample-zz">', $mylist);
$mylist = preg_replace("/<h6>start-subtype-item<\/h6>/s", '<div class="accordion-item">', $mylist);
$mylist = preg_replace("/<h3>/s", '<h2 class="accordion-header" id="heading-zz"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#subtype-zz" aria-expanded="false" aria-controls="collapse-zz" onclick="myFunction(this, \'thishash2\')">', $mylist);
$mylist = preg_replace("/<\/h3>/s", '</button>
    </h2>', $mylist);		
$mylist = preg_replace("/<h6>start-subtype-content<\/h6>/s", '<div class="accordion-collapse collapse" id="subtype-zz" aria-labelledby="heading-zz" data-bs-parent="#accordionExample-0">
      <div class="accordion-body">', $mylist);
$mylist = preg_replace("/<h6>end-subtype-content<\/h6>/s", '<div class="d-md-flex justify-content-md-end"><button class="notabutton bi bi-printer sectionprint" onClick="printThisGuide(this)">Print this section only <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></button></div></div></div>', $mylist);
$mylist = preg_replace("/<h6>end-subtype-item<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>end-subtype<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>end-type-content<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>end-content-area<\/h6>/s", '</div></div></div>', $mylist);
$mylist = preg_replace("/<h6>end-style-guide<\/h6>/s", '</div></div></div></div>', $mylist);
// END CONTENT
// REPLACE FOR FIRST
//replace property for the first tab, pill, accordion only - to show, true or active
//$mylist = preg_replace("/nav-link/", 'nav-link active', $mylist, 1); //FIXED THIS so the correct tab is active, not the first one
$mylist = preg_replace("/class=\"tab-pane fade\" id=\"nav/", 'class="tab-pane fade show active" id="nav', $mylist, 1);
$mylist = preg_replace("/class=\"tab-pane fade\" id=\"v/", 'class="tab-pane fade show active" id="v', $mylist, 1);
// first accordion button remove collapsed
$mylist = preg_replace("/<!-- first accordion item -->\s<div class=\"accordion-collapse collapse/", '<!-- first accordion item --><div class="accordion-collapse collapse show', $mylist);
$mylist = preg_replace("/aria-selected=\"false\"/", 'aria-selected="true"', $mylist, 1);
$mylist = preg_replace("/nav-link myleftpills/", 'nav-link myleftpills active', $mylist, 1);
$mylist = preg_replace("/aria-expanded=\"false\"/", 'aria-expanded="true"', $mylist, 1);
// COUNTERS
//loop through bootstrap classes to allocate unique identifyers to each iteration of that class so that bootstrap tabs, pills and accordians will match and work
//set unique id names for TABS
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
//set unique class names for PILLS
$counter60 = 0;
preg_match_all("/id=\"v-pills-tabContent-yy\"/", $mylist, $matches60 );
foreach($matches60[0] as $titles60){
	$mylist = preg_replace("/id=\"v-pills-tabContent-yy\"/", "id=\"v-pills-tabContent-$counter60\"", $mylist, 1);
	++$counter60;
}		
$counter6 = 0;
preg_match_all("/id=\"v-pills-yy-tab\"/", $mylist, $matches6 );
foreach($matches6[0] as $titles6){
	$mylist = preg_replace("/id=\"v-pills-yy-tab\"/", "id=\"v-pills-$counter6-tab\"", $mylist, 1);
	++$counter6;
}

$counter7 = 0;
preg_match_all("/data-bs-target=\"#v-pills-yy\"/", $mylist, $matches7 );
foreach($matches7[0] as $titles7){
	$mylist = preg_replace("/data-bs-target=\"#v-pills-yy\"/", "data-bs-target=\"#v-pills-$counter7\"", $mylist, 1);
	++$counter7;
}
$counter8 = 0;
preg_match_all("/aria-controls=\"v-pills-yy\"/", $mylist, $matches8 );
foreach($matches8[0] as $titles8){
	$mylist = preg_replace("/aria-controls=\"v-pills-yy\"/", "aria-controls=\"v-pills-$counter8\"", $mylist, 1);
	++$counter8;
}
$counter9 = 0;
preg_match_all("/id=\"v-pills-yy\"/", $mylist, $matches9 );
foreach($matches9[0] as $titles9){
	$mylist = preg_replace("/id=\"v-pills-yy\"/", "id=\"v-pills-$counter9\"", $mylist, 1);
	++$counter9;
}
$counter10 = 0;
preg_match_all("/aria-labelledby=\"v-pills-yy-tab\"/", $mylist, $matches10 );
foreach($matches10[0] as $titles10){
	$mylist = preg_replace("/aria-labelledby=\"v-pills-yy-tab\"/", "aria-labelledby=\"v-pills-$counter10-tab\"", $mylist, 1);
	++$counter10;
}		
//set unique id names for ACCORDION
$counter16 = 0;
preg_match_all("/id=\"accordionExample-zz\"/", $mylist, $matches16 );
foreach($matches16[0] as $titles16){
	$mylist = preg_replace("/id=\"accordionExample-zz\"/", "id=\"accordionExample-$counter16\"", $mylist, 1);
	++$counter16;
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
	$mylist = preg_replace("/thishash1/", "#v-pills-$counter18-tab", $mylist, 1);
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
	//console.log("styleguide-$counter20");
}
		
//make the correct styleguide tab active
if ($whichstyleguide == "styleguide-0"){
	$mylist = preg_replace("/id=\"nav-0-tab\" class=\"nav-link\"/", 'id="nav-0-tab" class="nav-link active"', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-1"){
	$mylist = preg_replace("/id=\"nav-1-tab\" class=\"nav-link\"/", 'id="nav-1-tab" class="nav-link active"', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-2"){
	$mylist = preg_replace("/id=\"nav-2-tab\" class=\"nav-link\"/", 'id="nav-2-tab" class="nav-link active"', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-3"){
	$mylist = preg_replace("/id=\"nav-3-tab\" class=\"nav-link\"/", 'id="nav-3-tab" class="nav-link active"', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-4"){
	$mylist = preg_replace("/id=\"nav-4-tab\" class=\"nav-link\"/", 'id="nav-4-tab" class="nav-link active"', $mylist, 1); 
}	else if ($whichstyleguide == "styleguide-5"){
	$mylist = preg_replace("/id=\"nav-5-tab\" class=\"nav-link\"/", 'id="nav-5-tab" class="nav-link active"', $mylist, 1); 
}	else {
	$mylist = preg_replace("/id=\"nav-0-tab\" class=\"nav-link\"/", 'id="nav-0-tab" class="nav-link active"', $mylist, 1); 
}

// ISSUES TO BE RESOLVED / Development to-do list
// change the code from PHP to Javascript to show first accordion item in an accordion maybe?? thenwon't need the comment in  markdown
// accordion WIDTH - can we set a minimum width for desktop view and not mobile view?
// DONE!! PRINT - buttons/links to print format for accordion item / whole accordion / whole style guide
// Format print window content and hide buttons - can we make an external style sheet for this?
// create a FOOTER area with links to feedback form, learning lab, other...
// Top of page INSTRUCTIONS - show/hide with cookies/session data
// STYLE: CSS for Bootstrap - RMIT branding
// need to strip all COMMENTS out of $mylist after all replaces are done	
// DONE!! focus the correct tab depending on the query string.
// DONE!! need to close the first accordion for the pill if accessed via hash string
// DONE!! need to highlight the first accordion button/item in each accordion because we removed all the highlights - remove "collapsed" from the first accordion button
// DONE!! need to set hash string for all pills and accordion clicks. if you click on a pill - it defaults to the first accordion item (how to get that ID???)
// DONE!! solve the praent - child data-bs-parent value to enable one selected accordion-collapse to be opened in each accordion, and the others to close.

//OUTPUT THE PARSED CONTENT TO HTML
echo($mylist);
?>
<!-- end page content-->
		
<script>
// URL STRING TO SAVE AND SHOW CORRECT CONTENT
//jQuery: get URL location.hash and use it to open the correct pills and accordion
$(function(){
	if (location.hash !== null && location.hash !== "") { //check for hash
		var hash = location.hash; 
		var myArray = hash.split("#"); //split hash into two parts & save in an array
		var tabopen = myArray[1];  //first item of array - not including the first hash
		tabopen && $('div.tab-pane #' + tabopen).tab('show'); //show correct pills tab
		var accordionopen = myArray[2];  //second item of array
		accordionopen && $('#' + accordionopen).collapse('show'); //show correct accordion-collapse
		//TBD - need to develop script to 'hide' the other accordion items 
		// in this visible pills area only - not all accordions in the page
		// depends on the grand-parent div ID
		console.log(tabopen);
		console.log(accordionopen);
     }
	else {
		$("#subtype-0").collapse("show"); // default show first accordion-collapse
	};
});
</script>
<script type="application/javascript">
// URL STRING TO SAVE AND SHOW CORRECT CONTENT
// script to find the URL hash string and split it 
// to identify which pill and which accordion item need to open
var tabopen;
var accordopen;
if (location.hash !== null && location.hash !== "") { //check for hash
		var hash = window.location.hash; 
		var myArray = hash.split("#"); //split hash into two parts & save in an array
		tabopen = myArray[1];  //first item of array
		accordopen = myArray[2];  //first item of array
		
} else {
	// else default to the first pill and accordion item
	tabopen = "#v-pills-0-tab";
	accordopen = "#subtype-0";
}
var globalpillshash = tabopen;
	// create a global pills variable that will hold the value of the current pills 
	// even when the accordion item is clicked.
function myFunction(button, sethash){
	// then add the global pills variable to the accordion variable if selected 
	// to enable saving the correct pills/accordion position in the URL string.
	if (sethash.includes("v-pills")){
	   	var pillshash = sethash;
		globalpillshash = sethash;
		//console.log(pillshash);
	   	window.location.hash = pillshash;
	}
	if (sethash.includes("subtype")){
		var accordionhash = sethash;
	   	window.location.hash = globalpillshash + accordionhash;
		//console.log(globalpillshash + accordionhash);
	}
}

// this function takes the info from the tab button to output a query string 
// that PHP can pick up to load the correct markdown file
function myFunction2(button, thisquery){
	if (thisquery.includes("styleguide")){
		const params = new URLSearchParams(location.search);
		params.set('styleguide', thisquery);
		params.toString(); // => styleguide=styleguide-3
		//console.log(params.toString());
		window.history.pushState({}, '', `${location.pathname}?${params.toString()}`);
	}
	//refresh the page...
	location.reload();
	//window.scrollToTop(0,0); //need to scroll window to top of page but not working 	
}
// --------------------------
// ACCORDION FAMILIES
// this function dynamically allocates the parent accordion div of the accordion-item 
// to the children's (accordion-collapse) data-bs-parent value 
// so that selecting one accordion will close the others in the group.
//find all the accordion-item divs
const mylist = document.getElementsByClassName("accordion-item"); 
	//loop through all the accordion-item divs
	for (let p = 0; p < mylist.length; p++){
		//console.log(mylist[p].id);
		//find all the children with the class name accordion-collapse
		const nodes = mylist[p].getElementsByClassName("accordion-collapse");
		//loop through the children
		for (let i = 0; i < nodes.length; i++) { 
			//set the children's value for data-bs-parent to the "grandparent" div ID name
			nodes[i].setAttribute("data-bs-parent", "#" + mylist[p].parentElement.id); 
			//console.log(nodes[i].getAttribute("data-bs-parent"));
		}
	}
// remove the "collapsed" class from the first accordion button in each accordion so it's in its "open" state
const acclist = document.getElementsByClassName("accordion");
	for (let q = 0; q < acclist.length; q++){
		const acbuttons = acclist[q].getElementsByClassName("accordion-button");
		acbuttons[0].classList.remove("collapsed");
		//console.log(acbuttons[0].className);
	}
// -----------------------------
// PRINT SCRIPT
// this script controls the method for printing a section, part or whole guide depending on the button selected
function printThisGuide(elem) {
	// get the button class name attribute
	var thisbutton = elem.className;
	// create variable to hold the correct div id for printing
	var thisdiv;
	console.log(thisbutton);
	if (thisbutton.includes("sectionprint")){ 
		// if this is a sectionprint button, find the great-grandparent node to print the section only
		var thisdiv = elem.parentNode.parentNode.parentNode.id;
	} else if (thisbutton.includes("partprint")){
		// if this is a partprint button, find the grandparent node to print the part
		var thisdiv = elem.parentNode.parentNode.id;
	} else if (thisbutton.includes("guideprint")){
		// if this is a guideprint button, find the printable-guide div to print the whole guide
		var thisdiv = document.getElementById("printable-guide").id;
	}
	console.log(thisdiv);
	//put the HTML contents of the div for printing into a new variable
    var divContents = document.getElementById(thisdiv).innerHTML;
	//open a window, add contents
    var a = window.open('', '', 'height=1200, width=800');
    a.document.write('<html><head>');
	// link to the external stylesheet - change the stylesheet CSS file to change the appearance of the HTML
	a.document.write('<link href="css/printstyles.css" rel="stylesheet">');
	a.document.write('</head>');
    a.document.write('<body> <h1>Easy Cite style guides resource</h1><h2>RMIT Library</h2>');
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
	}, 300); 
}
</script>
</body>
</html>



