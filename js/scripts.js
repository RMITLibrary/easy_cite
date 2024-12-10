
		// --------------------------
		// URL STRING IMPLEMENTATION
		// script to find the URL hash string and split it 
		// to identify which pill and which accordion item need to open
		var tabopen;
		var accordopen;
		if (location.hash !== null && location.hash !== "") { //check for hash
			var hash = window.location.hash;
			var myArray = hash.split("#"); //split hash into two parts & save in an array
			tabopen = myArray[1]; //first item of array after the hash which is zero position
			accordopen = myArray[2]; //second item of array after the hash

		} else {
			// else default to the first pill and accordion item
			tabopen = "#stn-0";
			accordopen = "#subtype-0";
		}
		var globalpillshash = tabopen;
		// create a global pills variable that will hold the value of the current pills 
		// even when the accordion item is clicked.
		function globalHashFunction(button, sethash) {
			// then add the global pills variable to the accordion variable if selected 
			// to enable saving the correct pills/accordion position in the URL string.
			if (sethash.includes("stn")) {
				var pillshash = sethash;
				globalpillshash = sethash;
				//console.log(pillshash);
				window.location.hash = pillshash;
			}
			if (sethash.includes("subtype")) {
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
		function outputQueryStringFunction(button, thisquery) {
			if (thisquery.includes("styleguide")) {
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

					console.log('Parsed hash:', {
						tabopen,
						accordionopen
					});

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
		for (let p = 0; p < mylist.length; p++) {
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
		for (let q = 0; q < acclist.length; q++) {
			const acbuttons = acclist[q].getElementsByClassName("accordion-button");
			acbuttons[0].classList.remove("collapsed");
			// console.log(acbuttons[0].className);
		}

		// OR
		// Use this code to only open the first accordion subtype in a style guide
		// only run this code if there are accordions - i.e. not the "Using Easy Cite" tab.
		var thisstatus = '<?= $showInfobox ?>';
		if (thisstatus == "none") {
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
			if (thisbutton.includes("sectionprint")) {
				// if this is a sectionprint button, find the great-grandparent node to print the section only
				var thisdiv = elem.parentNode.parentNode.parentNode.parentNode.id;
			} else if (thisbutton.includes("partprint")) {
				// if this is a partprint button, find the grandparent node to print the part
				var thisdiv = elem.parentNode.parentNode.id;
			} else if (thisbutton.includes("guideprint")) {
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
			a.document.write('<div class="printsectionguide">' + divContents + '</div>');
			a.document.write('</body></html>');
			a.document.close();
			// open print dialogue with a slight delay to allow the CSS to load first
			var timesRun = 0;
			var interval = setInterval(function() {
				timesRun += 1;
				if (timesRun === 1) {
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
		if (menuCover) menuButton.addEventListener("click", showHideMenu);
		// If menu is hidden, bootstrap wll show it, hide page content.
		// If it's displayed, bottstrap will hide it, show the content.

		function showHideMenu() {
			if (menuDisplay == false) {
				menuDisplay = true;
				scrollPosition = window.scrollY;
				pageContent.style.display = "none";
			} else {
				menuDisplay = false;
				pageContent.style.display = "block";

				// Change scroll behaviour, jump to where the user had scrolled to on the page, then revert to smooth scrolling again.
				document.documentElement.style.scrollBehavior = "auto";
				window.scroll(0, scrollPosition);
				document.documentElement.style.scrollBehavior = "smooth";
			}
		}
		//END HAMBURGER MENU 
