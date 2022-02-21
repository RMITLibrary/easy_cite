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
<!-- Core theme CSS (includes Bootstrap)-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

<style>
	body {margin:2rem;}
	.myleftpills {text-align: left;}
		h4{
			font-size: 1.2rem;
			font-weight: 700;
		}
		h5{
			font-size: 0.9rem;
			font-weight: 700;
		}
		blockquote{
			font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif" !important;
			margin-left: 30px;
		}
	
	</style>
<script>
//get window.location.hash and use it to open the correct pills and accordion
$(function(){
	//use this string after the URL to test -  #v-pills-2-tab#collapse-4
	if (location.hash !== null && location.hash !== "") { //check for hash
		var hash = window.location.hash; 
		var myArray = hash.split("#"); //split hash into two parts & save in an array
		var tabopen = myArray[1];  //first item of array
		tabopen && $('div.tab-pane #' + tabopen).tab('show'); //show pills tab
		var accordionopen = "#" + myArray[2];  //second item of array
       	$(accordionopen + ".collapse").collapse("show"); //show accordion
		//TBD - need to develop script to close the other accordion items in this visible pills area only (not all accordions in the page)
		console.log(tabopen);
		console.log(accordionopen);
     }
	else {
		$("#collapse-0.collapse").collapse("show"); //show accordion
	};
});
// button scripts to set URL hash to the correct visible pills and accordion
</script>
<script>
		
var globalpillshash = "#v-pills-0-tab";
	// create a global pills variable that will hold the value of the current pills even when the accordion item is clicked.
function myFunction(button, sethash){
	// then add the global pills variable to the accordion variable if selected to enable saving the correct pills/accordion position in the URL string.
	if (sethash.includes("v-pills")){
	   	var pillshash = sethash;
		globalpillshash = sethash;
		console.log(pillshash);
	   	window.location.hash = pillshash;
	}
	if (sethash.includes("collapse")){
		var accordionhash = sethash;
	   	window.location.hash = globalpillshash + accordionhash;
		console.log(globalpillshash + accordionhash);
	}
}
</script>	
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
		
// get the markdown content - which populates the page with content from a particular style guide
$rmitharvard = file_get_contents('rmitharvard.md');
$mylist = $parsedown->text($rmitharvard);
//need to develop an if/then script so that when the tabs are clicked, the different markdown files are loaded and parsedown to $mylist		

		
//replace heading tags with bootstrap layout
$mylist = preg_replace("/<h6>start-style-menu<\/h6>/", '<nav><div class="nav nav-tabs" id="nav-tab" role="tablist">', $mylist);
$mylist = preg_replace("/<h1>/", '<button class="nav-link" id="nav-xx-tab" data-bs-toggle="tab" data-bs-target="#nav-xx" type="button" role="tab" aria-controls="nav-xx" aria-selected="false">', $mylist);
$mylist = preg_replace("/<\/h1>/", '</button>', $mylist);
$mylist = preg_replace("/<h6>end-style-menu<\/h6>/", '</div></nav>', $mylist);
		
$mylist = preg_replace("/<h6>start-style-guide<\/h6>/", '<p>&nbsp;</p>
	<div class="tab-content" id="nav-tabContent-xx">
	<div class="tab-pane fade" id="nav-xx" role="tabpanel" aria-labelledby="nav-xx-tab"><div class="d-flex align-items-start"><div class="row">', $mylist);	
$mylist = preg_replace("/<h6>start-type-menu<\/h6>/", '<div class="col-sm-3">
	<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">', $mylist);
$mylist = preg_replace("/<h2>/", '<button class="nav-link myleftpills" id="v-pills-yy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-yy" type="button" role="tab" aria-controls="v-pills-yy" aria-selected="false" onclick="myFunction(this, \'thishash1\')">', $mylist);
$mylist = preg_replace("/<\/h2>/s", '</button>', $mylist);
$mylist = preg_replace("/<h6>end-type-menu<\/h6>/", '</div><p>&nbsp;</p></div>', $mylist);	
$mylist = preg_replace("/<h6>start-content-area<\/h6>/", '<div class="col-sm-9 col-12"><div class="tab-content" id="v-pills-tabContent-yy">', $mylist);
$mylist = preg_replace("/<h6>start-type-content<\/h6>/", '<div class="tab-pane fade" id="v-pills-yy" role="tabpanel" aria-labelledby="v-pills-yy-tab">', $mylist);	
$mylist = preg_replace("/<h6>start-subtype<\/h6>/s", '<div class="accordion" id="accordionExample-zz">', $mylist);
$mylist = preg_replace("/<h6>start-subtype-item<\/h6>/s", '<div class="accordion-item">', $mylist);
$mylist = preg_replace("/<h3>/s", '<h2 class="accordion-header" id="heading-zz"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-zz" aria-expanded="false" aria-controls="collapse-zz" onclick="myFunction(this, \'thishash2\')">', $mylist);
$mylist = preg_replace("/<\/h3>/s", '</button>
    </h2>', $mylist);		
$mylist = preg_replace("/<h6>start-subtype-content<\/h6>/s", '<div class="accordion-collapse collapse" id="collapse-zz" aria-labelledby="heading-zz" data-bs-parent="#accordionExample-zz">
      <div class="accordion-body">', $mylist);
$mylist = preg_replace("/<h6>end-subtype-content<\/h6>/s", '</div></div>', $mylist);
$mylist = preg_replace("/<h6>end-subtype-item<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>end-subtype<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>end-type-content<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>end-content-area<\/h6>/s", '</div></div>', $mylist);
$mylist = preg_replace("/<h6>end-style-guide<\/h6>/s", '</div></div></div></div>', $mylist);
		
//replace property for the first tab, pill, accordion only - to show, true or active
$mylist = preg_replace("/nav-link/", 'nav-link active', $mylist, 1);
$mylist = preg_replace("/class=\"tab-pane fade\" id=\"nav/", 'class="tab-pane fade show active" id="nav', $mylist, 1);
$mylist = preg_replace("/class=\"tab-pane fade\" id=\"v/", 'class="tab-pane fade show active" id="v', $mylist, 1);
$mylist = preg_replace("/<!-- first accordion item -->\s<div class=\"accordion-collapse collapse/", '<!-- first accordion item --><div class="accordion-collapse collapse show', $mylist);
$mylist = preg_replace("/aria-selected=\"false\"/", 'aria-selected="true"', $mylist, 1);
$mylist = preg_replace("/nav-link myleftpills/", 'nav-link myleftpills active', $mylist, 1);
$mylist = preg_replace("/aria-expanded=\"false\"/", 'aria-expanded="true"', $mylist, 1);

//loop through bootstrap classes to allocate unique identifyers to each iteration of that class so that bootstrap tabs, pills and accordians will match and work
//set unique class names for TABS
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
//set unique class names for ACCORDION
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
preg_match_all("/data-bs-target=\"#collapse-zz\"/", $mylist, $matches12 );
foreach($matches12[0] as $titles12){
	$mylist = preg_replace("/data-bs-target=\"#collapse-zz\"/", "data-bs-target=\"#collapse-$counter12\"", $mylist, 1);
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
preg_match_all("/id=\"collapse-zz\"/", $mylist, $matches15 );
foreach($matches15[0] as $titles15){
	$mylist = preg_replace("/id=\"collapse-zz\"/", "id=\"collapse-$counter15\"", $mylist, 1);
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
	$mylist = preg_replace("/thishash2/", "#collapse-$counter19", $mylist, 1);
	++$counter19;
}

// ISSUES TO BE RESOLVED
// accordion width - can we set a minimum width for desktop view and not mobile view?
// need to strip all comments out of $mylist after all replaces are done
// need to close the first accordion for the pill if accessed via hash string
// DONE!! need to set hash string for all pills and accordion clicks. if you click on a pill - it defaults to the first accordion item (how to get that ID???)
 
		
echo($mylist);
	
?>
	
	
<!-- end page content-->

	
    </body>
</html>



