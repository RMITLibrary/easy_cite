<?php
include 'includes/functions.php';
include 'includes/menu_links.php';
include 'includes/render_menu.php';
include 'includes/navigation_buttons.php';
include 'includes/print_buttons.php';
$styleguide = filter_input(INPUT_GET, 'styleguide', FILTER_SANITIZE_SPECIAL_CHARS);
$show_guides = !empty($styleguide);
// Default title
$pageTitle = "Easy Cite referencing guide - Library - RMIT University";
if ($show_guides) {
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
	<link rel="icon" href="assets/favicon/favicon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="assets/favicon/favicon.png" type="image/x-icon" />
	<link rel="preconnect" href="https://www.googletagmanager.com">
	<link rel="preconnect" href="https://www.google-analytics.com">
	<link rel="preconnect" href="https://rmitlibrary.github.io">
	<link rel="preconnect" href="https://cdn.jsdelivr.net">
	<link rel="preconnect" href="https://apps.mypurecloud.com.au">
	<?php
	include 'includes/head_scripts.php';
	?>
</head>

<body>
	<?php
	include 'includes/body_scripts.php';
	?>
	<!-- START top nav -->
	<header>
		<a href="#page-content" class="visually-hidden-focusable" data-ga-event="skip_to_content">Skip to main content</a>
		<div class="top-navigation">
			<!-- START container -->
			<div class="container">
				<div class="row">
					<!-- START left hand column -->
					<div class="col-auto left-nav">
						<a aria-label="Royal Melbourne Institute of Technology University Logo" href="https://www.rmit.edu.au/">
							<div class="rmit-logo"><span class="visually-hidden">RMIT University logo</span></div>
						</a>
						<a href="./" tabindex="0" class="h2" data-ga-event="home_click">Easy Cite<span class="visually-hidden">homepage</span></a>
					</div>
					<!-- END left hand column -->
					<!-- START right hand column -->
					<div class="col">
						<ul>
							<li class="hide-xs">
								<a href="https://www.rmit.edu.au/library" data-ga-event="library_click">Library</a>
							</li>
							<li class="hide-sm">
								<a href="https://www.rmit.edu.au/library/study/referencing" data-ga-event="referencing_click">Referencing</a>
							</li>
							<li class="menu">
								<button id="menu-button"
									class="btn btn-primary collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#context-menu" data-bs-display="static" aria-expanded="false"
									aria-controls="context-menu" data-ga-event="main_menu_click">Click for main menu</button>
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
						<a href="https://www.rmit.edu.au/library" data-ga-event="library_additional_click">Library</a>
					</li>
					<li>
						<a href="https://www.rmit.edu.au/library/study/referencing" data-ga-event="referencing_additional_click">Referencing</a>
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

				<?php
				include 'includes/content_home_intro.php';
				?>
			<?php else: ?>
				<div id="nav-tabContent">
					<div>
						<div class="row ">
							<div class="col-lg-4 order-last">
								<div class="right-nav-simple--sticky">
									<nav class="right-nav-simple" aria-label="Section Menu">
										<h2 class="h1"><?php echo htmlspecialchars_decode($styleGuideTitle, ENT_QUOTES); ?> <span class="visually-hidden">chapters</span></h2>
										<div class="nav nav-tabs" role="tablist">
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
										</div>
									</nav>
									<?php /*
									<div class="right-nav--print">
										<button class="btn btn-print guideprint " type="button">Print full style guide <span class="visually-hidden">(opens new window)</span></button>
									</div>
									*/ ?>
								</div>
							</div>
							<div class="col-lg-8 order-first">
								<div class="tab-content">
									<?php $subtype_counter = 0; ?>
									<?php foreach ($extractedData['type_contents'] as $typeIndex => $typeContent): ?>
										<div class="tab-pane fade <?php echo $typeIndex === 0 ? 'show active' : ''; ?>"
											id="sgt-<?php echo $typeIndex; ?>"
											role="tabpanel"
											aria-labelledby="stn-<?php echo $typeIndex; ?>">
											<div class="tab-content" id="stnContent-<?php echo $typeIndex; ?>">
												<div id="printable-guide">
													<div class="page-heading">
														<h1 class="h6 page-heading--title"><?php echo htmlspecialchars_decode($styleGuideTitle, ENT_QUOTES); ?></h1>
													</div>
													<div class="page-title">
														<h2 class="h1"><?php echo htmlspecialchars_decode($typeContent['title'], ENT_QUOTES); ?></h2>
														<?php /*
														<button class="btn btn-print partprint" id="printthistype" type="button" tabindex="0">
															Print chapter<span class="visually-hidden"> - print this chapter of the style guide (opens new window)</span>
														</button>
														*/ ?>
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
																			data-bs-target="#subtype-<?php echo $subtype_counter; ?>"
																			aria-expanded="<?php echo $isIntroduction ? 'true' : 'false'; ?>"
																			aria-controls="subtype-<?php echo $subtype_counter; ?>"
																			id="heading-<?php echo $subtype_counter; ?>">
																			<?php echo htmlspecialchars_decode($item['title'], ENT_QUOTES); ?>
																		</button>
																	</h3>
																	<div class="accordion-collapse collapse <?php echo $isIntroduction ? 'show' : ''; ?>" id="subtype-<?php echo $subtype_counter; ?>" aria-labelledby="heading-<?php echo $subtype_counter; ?>">
																		<div class="accordion-body">
																			<?php echo $item['content']; ?>
																			<?php /*
																			<button class="btn btn-print sectionprint" type="button" tabindex="0">
																				Print section<span class="visually-hidden"> - print this section of the style guide (opens new window)</span>
																			</button>
																			*/ ?>
																		</div>
																	</div>
																</div>
																<?php
																$subtype_counter++;
																?>
															<?php endforeach; ?>
														</div>
													<?php endforeach; ?>
													<?php
													renderPrintButtons(htmlspecialchars_decode($styleGuideTitle, ENT_QUOTES), htmlspecialchars_decode($typeContent['title'], ENT_QUOTES));
													?>
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
				<div class="row ">
					<div class="col-xl-8">
						<?php
						include 'includes/theme_switcher.php';
						?>
					</div>
				</div>
			<?php endif; ?>

		</main>
	</div>
	<div class="wrapper  id=" wrapper-footer-colophon">
		<!-- START ask the librsary -->
		<div class="footer-container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="ask-container">
							<section class="ask-the-library"><a href="https://www.rmit.edu.au/library/about-and-contacts/ask-the-library"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/footer/ask-library-icon-round.svg" class="ask-logo" alt="">
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
								<div class="content"><img loading="lazy" alt="aboriginal flag" src="https://www.rmit.edu.au/content/dam/rmit/au/en/news/homepage/flag-red.png">
									<img loading="lazy" alt="torres strait flag" src="https://www.rmit.edu.au/content/dam/rmit/au/en/news/homepage/flag-green.png">
									<h2 class="h4 margin-top-zero">Acknowledgement of Country</h2>
									<p>RMIT University acknowledges the people of the Woi wurrung and Boon wurrung language groups of the eastern Kulin Nation on whose unceded lands we conduct the business of the University. RMIT University respectfully acknowledges their Ancestors and Elders, past and present. RMIT also acknowledges the Traditional Custodians and their Ancestors of the lands and waters across Australia where we conduct our business<span class="img-credit"> - Artwork 'Sentient' by Hollie Johnson, Gunaikurnai and Monero Ngarigo</span>.</p><a href="https://www.rmit.edu.au/about/our-values/respect-for-australian-indigenous-cultures" class="link-large">More information</a>
								</div>
								<div class="acknowledgement-image"><img loading="lazy" src="https://www.rmit.edu.au/content/dam/rmit/images/sentient-hollie-johnson.jpg" alt="Abstract artwork titled 'Sentient' by Hollie Johnson, features a complex pattern of intersecting blue, green, and yellow lines over a white background showing the journeys of life starting, finishing and intersecting. The colouring of the line work illustrates the evolution of nature through many First Nations stories: the sun, the giver of life (yellow), the creation of land (green), and the sea (blue). Red and black concentric diamond and semi-circle shapes symbolise men and women respectively, connecting them to Ancestors who gave birth to them. The artwork is also a representation of RMIT and the experience within our community, culture and pathways."></div>
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
								<div aria-hidden="true" class="logo"><span class="no-focus" tabindex="-1"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/image/svg/rmit-logo.svg" style="width:100px" alt="RMIT University logo"></span>
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
										<li>Copyright © <?php echo date('Y'); ?> RMIT University<span> | </span></li>
										<li><a href="https://www.rmit.edu.au/utilities/terms"><span class="no-focus" tabindex="-1">Terms</span></a><span> | </span></li>
										<li><a href="https://www.rmit.edu.au/utilities/privacy"><span class="no-focus" tabindex="-1">Privacy</span></a><span> | </span></li>
										<li><a href="https://www.rmit.edu.au/utilities/accessibility"><span class="no-focus" tabindex="-1">Accessibility</span></a><span> | </span></li>
										<?php /*
										<li><a data-analytics-type="footerlink" data-analytics-value="Website feedback" href="https://www.rmit.edu.au/utilities/website-feedback"><span class="no-focus" tabindex="-1">Website feedback</span></a><span> | </span></li>
										<li><a data-analytics-type="footerlink" data-analytics-value="Complaints" href="https://www.rmit.edu.au/utilities/complaints"><span class="no-focus" tabindex="-1">Complaints</span><span> | </span></a></li>
										*/ ?>
										<li>ABN 49 781 030 034<span> | </span></li>
										<li>CRICOS provider number: 00122A<span> | </span></li>
										<li>TEQSA provider number: PRV12145<span> | </span></li>
										<li>RTO Code: 3046<span> | </span></li>
										<li><a href="https://www.open.edu.au/courses/degrees/rmit"><span class="no-focus" tabindex="-1">Open Universities Australia</span></a></li>
									</ul>
								</div>
								<!-- END legal -->
								<!-- START social -->
								<div class="social-nav">
									<ul>
										<!-- START facebook -->
										<li><a aria-label="For Facebook" href="https://www.facebook.com/RMITuniversity/"> <span class="no-focus" tabindex="-1"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/image/svg/social/facebook.svg" alt="" /></span></a></li>
										<!-- END facebook -->
										<!-- START twitter/x -->
										<li><a aria-label="For Twitter" href="https://twitter.com/rmit"> <span class="no-focus" tabindex="-1"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/image/svg/social/twitter.svg" alt="" /></span></a></li>
										<!-- END twitter/x -->
										<!-- START insta -->
										<li><a aria-label="For Instagram" href="https://www.instagram.com/rmituniversity/"> <span class="no-focus" tabindex="-1"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/image/svg/social/instagram.svg" alt="" /></span> </a></li>
										<!-- END insta -->
										<!-- START LinkedIn -->
										<li><a aria-label="For LinkedIn" data-analytics-type="socialshare" data-analytics-value="LinkedIn" href="https://www.linkedin.com/school/rmit-university/"><span class="no-focus" tabindex="-1"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/image/svg/social/linkedin.svg" alt="" /></span></a></li>
										<!-- END LinkedIn -->
										<!-- START YouTube -->
										<li><a aria-label="For Youtube" href="https://www.youtube.com/user/rmitmedia"><span class="no-focus" tabindex="-1"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/image/svg/social/youtube.svg" alt="" /></span></a></li>
										<!-- END YouTube -->
										<!-- START Weibo -->
										<li><a aria-label="For Weibo" href="https://www.weibo.com/rmituni"> <span class="no-focus" tabindex="-1"><img loading="lazy" src="https://rmitlibrary.github.io/cdn/image/svg/social/weibo.svg" alt="" /></span></a></li>
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