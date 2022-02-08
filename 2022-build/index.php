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


<style>
	body {margin:2rem;}
	.myleftpills {text-align: left;}
	
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

require_once 'Parsedown.php';
$parsedown = new Parsedown();

//$toplevel = file_get_contents('easycite.md');
//$apa = file_get_contents('apa.md');
$rmitharvard = file_get_contents('rmitharvard.md');

//echo $parsedown->text($toplevel);
//echo $parsedown->text($apa);
//echo $parsedown->text($rmitharvard);
		
$mylist = $parsedown->text($rmitharvard);
		
//preg_match('/<h2>(.*?)<\/h2>/s', $mylist, $match);
//echo $match[1];	
//$pattern = "/<h2>(.*?)<\/h2>/s";
//if(preg_match_all($pattern, $mylist, $matches)) {
//  print_r($matches);
//}		
//$pattern2 = "/<h3>(.*?)<\/h3>/s";
//if(preg_match_all($pattern2, $mylist, $matches2)) {
//  print_r($matches);
//}

//replace heading tags with bootstrap layout
$mylist = preg_replace("/<h6>starttabs<\/h6>/", '<nav><div class="nav nav-tabs" id="nav-tab" role="tablist">', $mylist);
$mylist = preg_replace("/<h1>/", '<button class="nav-link" id="nav-xx-tab" data-bs-toggle="tab" data-bs-target="#nav-xx" type="button" role="tab" aria-controls="nav-xx" aria-selected="false">', $mylist);
$mylist = preg_replace("/<\/h1>/", '</button>', $mylist);
$mylist = preg_replace("/<h6>endtabs<\/h6>/", '</div></nav>', $mylist);
$mylist = preg_replace("/<h6>startbodycontent<\/h6>/", '<p>&nbsp;</p>
	<div class="tab-content" id="nav-tabContent-xx">
	<div class="tab-pane fade" id="nav-xx" role="tabpanel" aria-labelledby="nav-xx-tab">', $mylist);	
$mylist = preg_replace("/<h6>startpills<\/h6>/", '<div class="d-flex align-items-start">
	<div class="row">
	<div class="col-2">
	<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">', $mylist);
$mylist = preg_replace("/<h2>/", '<button class="nav-link myleftpills" id="v-pills-yy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-yy" type="button" role="tab" aria-controls="v-pills-yy" aria-selected="false">', $mylist);
$mylist = preg_replace("/<\/h2>/s", '</button>', $mylist);
$mylist = preg_replace("/<h6>endpills<\/h6>/", '</div>
	</div>', $mylist);	
$mylist = preg_replace("/<h6>startpillscontent<\/h6>/", '<div class="col-10"><div class="tab-content" id="v-pills-tabContent-yy">
    <div class="tab-pane fade active" id="v-pills-yy" role="tabpanel" aria-labelledby="v-pills-yy-tab">', $mylist);	
$mylist = preg_replace("/<h6>startaccordion<\/h6>/s", '<div class="accordion" id="accordionExample">', $mylist);
$mylist = preg_replace("/<h3>/s", '<div class="accordion-item">
    <h2 class="accordion-header" id="heading-zz">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-zz" aria-expanded="false" aria-controls="collapse-zz">', $mylist);
$mylist = preg_replace("/<\/h3>/s", '</button>
    </h2>', $mylist);		
$mylist = preg_replace("/<h6>startaccordioncontent<\/h6>/s", '<div id="collapse-zz" class="accordion-collapse collapse" aria-labelledby="heading-zz" data-bs-parent="#accordionExample">
      <div class="accordion-body">', $mylist);
$mylist = preg_replace("/<h6>endaccordioncontent<\/h6>/s", '</div>
    </div>', $mylist);
$mylist = preg_replace("/<h6>endaccordion<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>endpillscontent<\/h6>/s", '</div>', $mylist);
$mylist = preg_replace("/<h6>endbodycontent<\/h6>/s", '</div></div><div class="tab-pane fade" id="nav-xx" role="tabpanel" aria-labelledby="nav-xx-tab"><p>this content will be replaced by a link to the APA page</p></div>
  <div class="tab-pane fade" id="nav-xx" role="tabpanel" aria-labelledby="nav-xx-tab"><p>this content will be replaced by a link to the Chivago page</p></div></div>', $mylist);
		
//replace property for the first tab, pill, accordion only - to show, true or active
$mylist = preg_replace("/nav-link/", 'nav-link active', $mylist, 1);
$mylist = preg_replace("/tab-pane fade/", 'tab-pane fade show active', $mylist, 1);
$mylist = preg_replace("/tab-pane fade active/", 'tab-pane fade show active', $mylist, 1);
$mylist = preg_replace("/accordion-collapse collapse/", 'accordion-collapse collapse show', $mylist, 1);
$mylist = preg_replace("/aria-selected=\"false\"/", 'aria-selected="true"', $mylist, 1);
$mylist = preg_replace("/nav-link myleftpills/", 'nav-link myleftpills active', $mylist, 1);
$mylist = preg_replace("/aria-expanded=\"false\"/", 'aria-expanded="true"', $mylist, 1);

//loop through bootstrap classes to find and replace - to allocate a unique number to each iteration of that class so that bootstrap tabs, pills and accordians will work
	
//set unique class names for TABS
//id="nav-tabContent-xx"
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
		//id="v-pills-tabContent-yy"
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
$counter15 = 0;
preg_match_all("/id=\"collapse-zz\"/", $mylist, $matches15 );
foreach($matches15[0] as $titles15){
	$mylist = preg_replace("/id=\"collapse-zz\"/", "id=\"collapse-$counter15\"", $mylist, 1);
	++$counter15;
}
//solve the problem of the second pills content area not having the first accordion showing - nested loop?? or different variable name??
		
		
echo($mylist);
		
		
?>
		
		
<!-- end page content-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../2022build/js/scripts.js"></script>
    </body>
</html>



