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
$mylist = preg_replace("/<h1>/", '<button class="nav-link active" id="nav-xx-tab" data-bs-toggle="tab" data-bs-target="#nav-xx" type="button" role="tab" aria-controls="nav-xx" aria-selected="false">', $mylist);
$mylist = preg_replace("/<\/h1>/", '</button>', $mylist);
$mylist = preg_replace("/<h6>endtabs<\/h6>/", '</div></nav>', $mylist);
$mylist = preg_replace("/<h6>startbodycontent<\/h6>/", '<p>&nbsp;</p>
	<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-xx" role="tabpanel" aria-labelledby="nav-xx-tab">', $mylist);	
$mylist = preg_replace("/<h6>startpills<\/h6>/", '<div class="d-flex align-items-start">
	<div class="row">
	<div class="col-2">
	<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">', $mylist);
$mylist = preg_replace("/<h2>/", '<button class="nav-link myleftpills" id="v-pills-yy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-yy" type="button" role="tab" aria-controls="v-pills-yy" aria-selected="false">', $mylist);
$mylist = preg_replace("/<\/h2>/s", '</button>', $mylist);
$mylist = preg_replace("/<h6>endpills<\/h6>/", '</div>
	</div>
	<div class="col-10">', $mylist);		
$mylist = preg_replace("/<h6>startaccordion<\/h6>/s", ' <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-yy" role="tabpanel" aria-labelledby="v-pills-yy-tab">
	<div class="accordion" id="accordionExample">', $mylist);
$mylist = preg_replace("/<h3>/s", '<div class="accordion-item">
    <h2 class="accordion-header" id="heading-zz">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">', $mylist);
$mylist = preg_replace("/<\/h3>/s", '</button>
    </h2>', $mylist);		
$mylist = preg_replace("/<h6>startaccordioncontent<\/h6>/s", '<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="heading-zz" data-bs-parent="#accordionExample">
      <div class="accordion-body">', $mylist);
$mylist = preg_replace("/<h6>endaccordioncontent<\/h6>/s", '</div>
    </div>', $mylist);
$mylist = preg_replace("/<h6>endaccordion<\/h6>/s", '</div></div>', $mylist);
$mylist = preg_replace("/<h6>endbodycontent<\/h6>/s", '</div>', $mylist);
		
//replace property for the first tab, pill, accordion only - to show, true or active
$mylist = preg_replace("/accordion-collapse collapse/", 'accordion-collapse collapse show', $mylist, 1);
$mylist = preg_replace("/aria-selected=\"false\"/", 'aria-selected="true"', $mylist, 1);
$mylist = preg_replace("/nav-link myleftpills/", 'nav-link myleftpills active', $mylist, 1);
$mylist = preg_replace("/aria-expanded=\"false\"/", 'aria-expanded="true"', $mylist, 1);

//loop through bootstrap classes to find and replace - to allocate a unique number to each iteration of that class so that bootstrap tabs, pills and accordians will work
// still working on it...
		//TABS (change xx to unique id number)
		//id="nav-xx-tab"
		//data-bs-target="nav-xx"
		//aria-controls="nav-xx"
		//id="nav-xx"
		//aria-labelledby="nav-xx-tab"
		//PILLS (change yy to unique id number)
		//id="v-pills-yy-tab"
		//data-bs-target="#v-pills-yy"
		//aria-controls="v-pills-yy"
		//id="v-pills-yy"
		//aria-labelledby="v-pills-yy-tab"
		//ACCORDION (change zz to unique id number)
		//id="heading-zz"
		//aria-labelledby="heading-zz"
		
		
echo($mylist);
		
		
?>
		
		
<!-- end page content-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../2022build/js/scripts.js"></script>
    </body>
</html>



