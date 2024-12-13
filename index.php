<?php
include 'includes/menu_links.php';
include 'includes/render_menu.php';
include 'includes/navigation_buttons.php';
$styleguide = filter_input(INPUT_GET, 'styleguide', FILTER_SANITIZE_SPECIAL_CHARS);
$show_guides = !empty($styleguide);

// Default title
$pageTitle = "Easy Cite referencing guide - Library - RMIT University";
if ($show_guides){
	include 'includes/markdown_abstraction.php';
}

// Update title based on style guide
if ($show_guides && !empty($extractedData['type_contents'])) {
    $pageTitle = htmlspecialchars_decode(strip_tags($styleGuideTitle), ENT_QUOTES) . " style guide - $pageTitle";
}

?>
<!DOCTYPE html>
<html lang="en" class="nav-fixed">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="language" content="en" />
	<title><?php echo $pageTitle; ?></title>
	<!-- Favicon -->
  	<link rel="icon" href="assets/favicon/favicon.png" type="image/x-icon"/>
  	<link rel="shortcut icon" href="assets/favicon/favicon.png" type="image/x-icon"/>

	<?php
	include 'includes/head_tracking.php';
	include 'includes/head_scripts.php';
	?>
</head>

<body>

	<!-- START top nav -->
	<header>
		<a href="#page-content" class="visually-hidden">Skip to main content</a>
		<div class="top-navigation">
			<!-- START container -->
			<div class="container">
				<div class="row">
					<!-- START left hand column -->
					<div class="col-auto left-nav">
						<div class="rmit-logo"><span class="visually-hidden">RMIT University logo</span></div>
						<a href="./" tabindex="0" class="h2">Easy Cite<span class="visually-hidden">homepage</span></a>
					</div>
					<!-- END left hand column -->
					<!-- START right hand column -->
					<div class="col">
						<ul>
							<li class="hide-xs">
								<a href="https://www.rmit.edu.au/library">Library</a>
							</li>
							<li class="hide-sm">
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
						<?php
						render_menu($menu_links);
						?>
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
						<?php
						render_menu($menu_links);
						?>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END submenu desktop only -->
	</header>
	<!-- END top nav -->


	<div id="page-content">
		<main class="container main-content">
			<?php if (!$show_guides): ?>
				<div class="row ">
					<!-- START right nav -->
					<div class="col-xl-4 order-last">

					</div>
					<!-- END right nav -->
					<!-- START content columns -->
					<div class="col-xl-8 order-first">
						<h1 class="home-title">Welcome to Easy Cite</h1>
						<p class="lead">Easy Cite lets you look up referencing tips and examples in a selection of common
							styles used at RMIT.</p>
						<p>Easy Cite includes as many examples of reference types as possible. If the style guides shown
							here do not include your specific reference or citation type, consider applying the format from
							similar types within Easy Cite for your reference and citation, or check the relevant style
							manual.</p>
						<p>Easy Cite is intended as a guide only and some styles are open to interpretation. You should
							always check with your instructor to ensure you are using the correct style for your assignments
							and assessment tasks.</p>

						<nav id="home-section-menu" aria-label="Section Menu">
							<h2 class="h3">Select a style guide</h2>
							<ul class="link-list">
								<?php
								render_menu($menu_links, "");
								?>
							</ul>
						</nav>

						<figure class="video img-left">
							<div class="responsive-video">
								<iframe src="https://www.youtube.com/embed/60J55xXbu8o" frameborder="0"
									allowfullscreen=""></iframe>
							</div>
							<!-- START accordion item -->
							<div class="accordion-item transcript">
								<p class="accordion-header" id="Transcript-headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#Transcript-collapseTwo" aria-expanded="false"
										aria-controls="Transcript-collapseTwo">
										Transcript
									</button>
								</p>
								<div id="Transcript-collapseTwo" class="accordion-collapse collapse"
									aria-labelledby="Transcript-headingTwo">
									<div class="accordion-body">
										<p>
											Easy Cite is an online tool that provides examples and referencing tips for a
											wide range of styles used at RMIT.
										</p>
										<p>
											Easy Cite is intended as a guide only and some styles are open to
											interpretation. You should always check with your teacher or lecturer to ensure
											you are using the correct style for your assessment tasks. 
										</p>
										<p>
											The Easy Cite web page has four sections: 
										</p>
										<p>
											A navigation menu at the top of the screen links to the “How to use Easy Cite”
											pop-down area. Instructions for using the Easy Cite tool can be found here. You
											can open or close this area at any time. 
										</p>
										<p>
											A style guide tab menu sits under the navigation menu. This is where you select
											the correct style guide for your assignment or task. 
										</p>
										<p>
											A source type menu is on the left side of the screen. This is where you select
											the different types of sources that you need to reference. You may be
											referencing books, journal articles, websites, audiovisual media such as
											podcasts or YouTube, or many other types of sources. 
										</p>
										<p>
											The details of the referencing source sub-type sit in the main body of the
											screen. This provides detailed options about your source material. For example:
											it shows how to cite a book with multiple authors, or how to cite figures /
											photos or diagrams you might use in your assignment.
										</p>
										<p>
											Note that each referencing style outlines the general principles of how to use
											that style. This ‘Using’ tab explains important information about the style. It
											gives general rules for in-text and reference list citations, and an example of
											a reference list. Please read these rules carefully.
										</p>
										<p>
											Each sub-type category provides examples of both in-text and reference list
											citations.  
										</p>
										<p>
											When using information from a source text, you can express it as a direct quote
											or a paraphrase.
											When directly quoting, you must use the exact words of the author and put them
											in quotation marks.
											Be sure to keep direct quotes to a minimum.  
											The paraphrase in-text example will be suitable if you’re using your own words
											to express an author’s idea. Paraphrasing is the preferred method of citing
											information.
										</p>
										<p>
											If writing a reference list citation, you must have bibliographic details such
											as author names, year of publication, book title and publisher details.
										</p>
										<p>
											Each different referencing style requires different elements and formatting.
											Make sure to pay close attention to the order of these elements.
										</p>
										<p>
											Pay attention to the use of capitalisation, italics, commas, and colons, as well
											as formatting such as hanging indents. These are just as important for
											presenting the citation accurately.
										</p>
										<p>
											There are three options for printing all or any part of the Easy Cite style
											guide: print the whole guide for your referencing style; print only the source
											type that you need, or you can just print the sub-type of your source type
											material.
										</p>
										<p>
											You can send your selection to a printer for a hard copy or choose to save it as
											a PDF file for off-line access.
										</p>
										<p>
											You can also send feedback about Easy Cite via the link at the bottom of the
											page.
										</p>
										<p>
											If you need more help, please visit Ask the Library or the Referencing section
											of the Learning Lab. </p>
									</div>
								</div>
							</div>
							<!-- END accordion item -->
						</figure>

						<blockquote class="complex">
							<a href="https://learninglab.rmit.edu.au/content/referencing" target="_blank" aria-label="Referencing tutorial on Learning Lab. Opens in a new tab.">
								<div class="content">
									<p class="category">Learning lab</p>
									<h3>Referencing tutorial</h3>
									<p>Find out how to correctly use different referencing styles in academic writing to
										avoid plagiarism and get better marks.</p>
								</div>
							</a>
						</blockquote>
					</div>
					<!-- END content columns -->
				</div>
			<?php else: ?>
		
				<div id="nav-tabContent-0">
					<div class="tab-pane fade show active" id="nav-0" role="tabpanel" aria-labelledby="nav-0-tab">

						<div class="row ">

							<div class="col-xl-4 order-last">
								<nav class="right-nav-simple" aria-label="Section Menu">
									<h1 class="h1"><?php echo htmlspecialchars_decode($styleGuideTitle, ENT_QUOTES); ?></h1>
									<nav class="nav nav-tabs" role="tablist">
										<?php foreach ($extractedData['menu'] as $index => $title): ?>

											<button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
												id="stn-<?php echo $index; ?>"
												data-bs-toggle="tab"
												data-bs-target="#sgt-<?php echo $index; ?>"
												type="button" role="tab"
												aria-controls="sgt-<?php echo $index; ?>"
												aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
												<?php echo htmlspecialchars_decode($title, ENT_QUOTES); ?>
											</button>
										<?php endforeach; ?>
									</nav>
								</nav>
								<div class="right-nav--print">
									<button class="btn btn-print guideprint " type="button">Print full style guide <span class="visually-hidden">(opens new window)</span></button>

								</div>

							</div>

							<div class="col-xl-8 order-first">
								<div class="tab-content">
									<?php foreach ($extractedData['type_contents'] as $typeIndex => $typeContent): ?>
										<div class="tab-pane fade <?php echo $typeIndex === 0 ? 'show active' : ''; ?>"
											id="sgt-<?php echo $typeIndex; ?>"
											role="tabpanel"
											aria-labelledby="stn-<?php echo $typeIndex; ?>">

											<div class="tab-content" id="stnContent-<?php echo $typeIndex; ?>">
												<?php /*<h2 class="h1 mobile-title"><?php echo htmlspecialchars($styleGuideTitle); ?></h2>*/?>
												<div id="printable-guide">
													<div class="page-title">
														<h2 class="h1"><?php echo htmlspecialchars_decode($typeContent['title'], ENT_QUOTES); ?></h2>
														<button class="btn btn-print partprint" id="printthistype" type="button" tabindex="0">
															Print chapter<span class="visually-hidden"> - print this chapter of the style guide (opens new window)</span>
														</button>

													</div>

													<?php foreach ($typeContent['subtypes'] as $subtypeIndex => $subtype): ?>
														<div class="accordion" id="accordionExample-<?php echo $typeIndex; ?>">
															<?php
															$totalItems = count($subtype['items']);
															foreach ($subtype['items'] as $itemIndex => $item):

																// Check if the title contains 'Introduction' (case insensitive)
																$isIntroduction = stripos($item['title'], 'introduction') !== false || ($totalItems === 1);
															?>
																<div class="accordion-item">
																	<h3 class="accordion-header">
																		<button class="accordion-button easyaccbutton <?php echo $isIntroduction ? '' : 'collapsed'; ?>"
																			type="button" tabindex="0"
																			data-bs-toggle="collapse"
																			data-bs-target="#subtype-<?php echo $typeIndex . '-' . $itemIndex; ?>"
																			aria-expanded="<?php echo $isIntroduction ? 'true' : 'false'; ?>"
																			aria-controls="subtype-<?php echo $typeIndex . '-' . $itemIndex; ?>">
																			<?php echo htmlspecialchars_decode($item['title'], ENT_QUOTES); ?>
																		</button>
																	</h3>
																	<div class="accordion-collapse collapse <?php echo $isIntroduction ? 'show' : ''; ?>"
																		id="subtype-<?php echo $typeIndex . '-' . $itemIndex; ?>"
																		aria-labelledby="heading-<?php echo $typeIndex . '-' . $itemIndex; ?>">
																		<div class="accordion-body">
																			<?php echo $item['content']; ?>
																			<button class="btn btn-print sectionprint" type="button" tabindex="0">
																				Print section<span class="visually-hidden"> - print this section of the style guide (opens new window)</span>
																			</button>
																		</div>
																	</div>
																</div>
															<?php endforeach; ?>
														</div>
													<?php endforeach; ?>

													<?php


													renderNavigationButtons($typeIndex, $extractedData['menu']);




													?>

												</div>
											</div>
										</div>



									<?php endforeach; ?>


								</div>


							</div>


						</div>
					</div>
				</div>
			<?php endif; ?>
		</main>
	</div>
	<div class="wrapper  id="wrapper-footer-colophon">
		<!-- START ask the librsary -->
		<div class="footer-container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="ask-container">
							<section class="ask-the-library"><a href="https://www.rmit.edu.au/library/about-and-contacts/ask-the-library"><img src="https://rmitlibrary.github.io/cdn/footer/ask-library-icon-round.svg" class="ask-logo" alt="">
									<div class="ask-text">
										<h2 class="h3 margin-top-zero">Ask the library</h2>
										<p>Study support, one-on-one consultations and peer mentoring at your fingertips!</p>
									</div>
								</a></section>
						</div>
					</div>
				</div>
			</div>
			<!-- START acknowledgement -->
			<div class="acknowledgement">
				<div class="container">
					<div class="row">
						<div class="col">
							<section class="acknowledgement-container">
								<div class="content"><img alt="aboriginal flag" src="https://www.rmit.edu.au/content/dam/rmit/au/en/news/homepage/flag-red.png">
									<img alt="torres strait flag" src="https://www.rmit.edu.au/content/dam/rmit/au/en/news/homepage/flag-green.png">
									<h2 class="h4 margin-top-zero">Acknowledgement of Country</h2>
									<p>RMIT University acknowledges the people of the Woi wurrung and Boon wurrung language groups of the eastern Kulin Nation on whose unceded lands we conduct the business of the University. RMIT University respectfully acknowledges their Ancestors and Elders, past and present. RMIT also acknowledges the Traditional Custodians and their Ancestors of the lands and waters across Australia where we conduct our business<span class="img-credit"> - Artwork 'Sentient' by Hollie Johnson, Gunaikurnai and Monero Ngarigo</span>.</p><a href="#" class="link-large">More information</a>
								</div>
								<div class="acknowledgement-image"><img src="https://www.rmit.edu.au/content/dam/rmit/images/sentient-hollie-johnson.jpg" alt=""></div>
							</section>
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
							<a aria-label="Royal Melbourne Institute of Technology University Logo"
								href="https://www.rmit.edu.au/">
								<div aria-hidden="true" class="logo"><span class="no-focus" tabindex="-1"><img src="https://rmitlibrary.github.io/cdn/image/svg/rmit-logo.svg" style="width:100px" alt=""></span>
								</div>
							</a>
							<!-- END logo -->
							<!-- START links -->
							<div class="footer-info">
								<p>Easy Cite referencing guide by <a href="https://www.rmit.edu.au/library"
										target="_blank" class="modallinks">RMIT University Library</a> is licensed under
									<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"
										class="modallinks">Creative Commons CC BY-NC-SA 4.0</a>.
								</p>
								<p>This resource is derived from a work by <a
										href="https://www.swinburne.edu.au/library" target="_blank"
										class="modallinks">Swinburne University Library</a>, based on an original work
									by <a href="https://www.griffith.edu.au/library" target="_blank"
										class="modallinks">Griffith University Library</a>.</p>
								<p>(links open in new tabs)</p>
							</div>
							<ul class="footer-links">
								<li><a href="https://www.rmit.edu.au/library/study/referencing/easy-cite-feedback"
										target="_blank">Send us feedback</a></li>
							</ul>

							<!-- END links -->
							<!-- START legal-social -->
							<div class="footerlegalShareItems">
								<!-- START legal -->
								<div class="footer-legal">
									<ul>
										<li>Copyright © 2024 RMIT University<span> | </span></li>
										<li><a href="https://www.rmit.edu.au/utilities/terms"><span class="no-focus" tabindex="-1">Terms</span></a><span> | </span></li>
										<li><a href="https://www.rmit.edu.au/utilities/privacy"><span class="no-focus" tabindex="-1">Privacy</span></a><span> | </span></li>
										<li><a href="https://www.rmit.edu.au/utilities/accessibility"><span class="no-focus" tabindex="-1">Accessibility</span></a><span> | </span></li>
										<li><a data-analytics-type="footerlink" data-analytics-value="Website feedback" href="https://www.rmit.edu.au/utilities/website-feedback"><span class="no-focus" tabindex="-1">Website feedback</span></a><span> | </span></li>
										<li><a data-analytics-type="footerlink" data-analytics-value="Complaints" href="https://www.rmit.edu.au/utilities/complaints"><span class="no-focus" tabindex="-1">Complaints</span><span> | </span></a>
										</li>
										<li>ABN 49 781 030 034<span> | </span></li>
										<li>CRICOS provider number: 00122A<span> | </span></li>
										<li>TEQSA provider number: PRV12145<span> | </span></li>
										<li>RTO Code: 3046<span> | </span></li>
										<li><a href="https://www.open.edu.au/online-courses/rmit-university"><span class="no-focus" tabindex="-1">Open Universities Australia</span></a></li>
									</ul>
								</div>
								<!-- END legal -->
								<!-- START social -->
								<div class="social-nav">
									<ul>
										<!-- START facebook -->
										<li><a aria-label="For Facebook"
												href="https://www.facebook.com/RMITuniversity/"> <span class="no-focus"
													tabindex="-1"><img
														src="https://rmitlibrary.github.io/cdn/image/svg/social/facebook.svg"
														alt="" /></span></a></li>
										<!-- END facebook -->
										<!-- START twitter/x -->
										<li><a aria-label="For Twitter" href="https://twitter.com/rmit"> <span
													class="no-focus" tabindex="-1"><img
														src="https://rmitlibrary.github.io/cdn/image/svg/social/twitter.svg"
														alt="" /></span></a></li>
										<!-- END twitter/x -->
										<!-- START insta -->
										<li><a aria-label="For Instagram"
												href="https://www.instagram.com/rmituniversity/"> <span class="no-focus"
													tabindex="-1"><img
														src="https://rmitlibrary.github.io/cdn/image/svg/social/instagram.svg"
														alt="" /></span> </a></li>
										<!-- END insta -->
										<!-- START LinkedIn -->
										<li><a aria-label="For LinkedIn" data-analytics-type="socialshare"
												data-analytics-value="LinkedIn"
												href="https://www.linkedin.com/school/rmit-university/"><span
													class="no-focus" tabindex="-1"><img
														src="https://rmitlibrary.github.io/cdn/image/svg/social/linkedin.svg"
														alt="" /></span></a></li>
										<!-- END LinkedIn -->
										<!-- START YouTube -->
										<li><a aria-label="For Youtube" href="https://www.youtube.com/user/rmitmedia">
												<span class="no-focus" tabindex="-1"><img
														src="https://rmitlibrary.github.io/cdn/image/svg/social/youtube.svg"
														alt="" /></span></a></li>
										<!-- END YouTube -->
										<!-- START Weibo -->
										<li><a aria-label="For Weibo" href="https://www.weibo.com/rmituni"> <span
													class="no-focus" tabindex="-1"><img
														src="https://rmitlibrary.github.io/cdn/image/svg/social/weibo.svg"
														alt="" /></span></a></li>
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
	</div>
	<!-- START footer -->

	<?php
	include 'includes/footer_scripts.php';
	?>
</body>

</html>