document.addEventListener('DOMContentLoaded', function () {
  // Function to check and redirect old URLs
  // issue with subtype naming convention changes

  // function redirectOldUrls() {
  //   const url = new URL(window.location.href);
  //   const hash = url.hash.substring(1); // Remove the '#' before processing

  //   if (hash.includes('#')) {
  //     const fragments = hash.split('#');
  //     const newParams = new URLSearchParams(url.search);

  //     fragments.forEach((fragment) => {
  //       if (fragment.startsWith('stn-')) {
  //         newParams.set('tab', fragment);
  //       } else if (fragment.startsWith('subtype-')) {
  //         newParams.set('accordion', fragment);
  //       }
  //     });

  //     // Construct new URL
  //     const newUrl = `${url.origin}${url.pathname}?${newParams.toString()}`;

  //     // Redirect to the new URL
  //     window.location.replace(newUrl);
  //   }
  // }

  // Dark Mode Functions
  const getStoredTheme = () => localStorage.getItem('theme');

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme();
    if (storedTheme) {
      return storedTheme;
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  };

  const setTheme = (theme) => {
    if (theme === 'auto') {
      document.documentElement.setAttribute('data-bs-theme', window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme);
    }
  };

  // Set the initial theme
  setTheme(getPreferredTheme());

  // Redirect old URLs if needed
  // redirectOldUrls();

  // Initialise URL parameters
  const params = new URLSearchParams(window.location.search);
  let styleguide = params.get('styleguide');
  let tabopen = params.get('tab') ? `#${params.get('tab')}` : '';
  let accordopen = params.get('accordion') ? `#${params.get('accordion')}` : '';

  // Add click event listeners to "Next" and "Previous" navigation buttons
  document.querySelectorAll('.btn-nav-container button').forEach((button) => {
    button.addEventListener('click', function () {
      // Retrieve tab index from the data attribute
      const tabIndex = this.getAttribute('data-tab-index');

      // Locate the corresponding tab button using the tab index
      const tabButton = document.querySelector(`.nav-link[data-bs-target="#sgt-${tabIndex}"]`);

      // Simulate a click on the corresponding tab button if it exists
      if (tabButton) {
        tabButton.click();
      }
    });
  });

  // Function to check if an element is in view considering sticky header
  function isElementTopInViewport(el) {
    const rect = el.getBoundingClientRect();
    const offsetHeight = getOffsetHeight();
    return rect.top >= offsetHeight && rect.top < (window.innerHeight || document.documentElement.clientHeight);
  }

  // Smoothly scroll to the target if needed
  function scrollToPageContentIfNeeded(target) {
    const pageContent = document.getElementById('page-content');
    if (pageContent && !isElementTopInViewport(target)) {
      pageContent.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      });
    }
  }

  // Helper function to calculate the total height of the header and submenu
  function getOffsetHeight() {
    const topNav = document.getElementById('top-navigation');
    const subMenu = document.getElementById('sub-menu');
    const topNavHeight = topNav ? topNav.offsetHeight : 0;
    const subMenuHeight = subMenu ? subMenu.offsetHeight : 0;
    return topNavHeight + subMenuHeight;
  }

  // Update tab and accordion from URL parameters
  function updateTabAndAccordionFromParams(setparam) {
    console.log('Processing tab or accordion state from params');
    let target = document.querySelector(setparam);
    if (target) {
      if (setparam.includes('stn')) {
        const instance = new bootstrap.Tab(target);
        instance.show();
      } else if (setparam.includes('subtype')) {
        const accordionItem = target.closest('.accordion-item');
        accordionItem.querySelector('.accordion-collapse').classList.add('show');
        accordionItem.querySelector('.accordion-button').classList.remove('collapsed');
        accordionItem.querySelector('.accordion-button').setAttribute('aria-expanded', 'true');
        target = accordionItem;
      }
      if (params.get('accordion')) {
        setTimeout(() => {
          console.log('Scrolling and focusing target');
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
          });
          target.querySelector('.accordion-button, .nav-link').focus();
        }, 500);
      }
    }
  }

  // Update query string and reload the page for style guide changes
  function updateQueryStringAndReload(event) {
    console.log('Updating query string and reloading for style guide change');
    event.preventDefault();
    const button = event.target.closest('a[data-styleguide]');
    if (!button) return;

    const newStyleguide = button.getAttribute('data-styleguide');
    if (newStyleguide) {
      params.set('styleguide', newStyleguide);
      params.delete('tab');
      params.delete('accordion');

      window.history.pushState({}, '', `${location.pathname}?${params.toString()}`);
      location.href = location.href;
    }
  }

  // Update URL parameters for tabs and accordions
  function updateParams(fragment, type) {
    console.log('Updating URL params');
    if (type === 'tab') {
      params.set('tab', fragment);
      params.delete('accordion'); // Clear accordion parameter when tab changes
    } else if (type === 'accordion') {
      params.set('accordion', fragment);

      // Update the tab parameter based on the currently active tab
      const activeTab = document.querySelector('.nav-link.active');
      if (activeTab) {
        const activeTabId = activeTab.getAttribute('id');
        params.set('tab', activeTabId);
      }
    }

    const orderedParams = new URLSearchParams();
    if (styleguide) orderedParams.set('styleguide', styleguide);
    if (params.get('tab')) orderedParams.set('tab', params.get('tab'));
    if (params.get('accordion')) orderedParams.set('accordion', params.get('accordion'));

    window.history.pushState({}, '', `${window.location.pathname}?${orderedParams.toString()}`);
  }

  // Add event listeners for navigation tab clicks
  const navTab = document.getElementById('nav-tab');
  if (navTab) {
    navTab.addEventListener('click', updateQueryStringAndReload);
  }

  // Add event listeners for home section menu clicks
  const homeSectionMenu = document.getElementById('home-section-menu');
  if (homeSectionMenu) {
    homeSectionMenu.addEventListener('click', updateQueryStringAndReload);
  }

  // Add event listeners for navigation tab clicks
  const menuTab = document.getElementById('context-menu');
  if (menuTab) {
    menuTab.addEventListener('click', updateQueryStringAndReload);
  }

  // Attach event listeners to tab navigation links
  document.querySelectorAll('.nav-link[data-bs-toggle="tab"]').forEach((button) => {
    button.addEventListener('click', function () {
      const setparam = this.getAttribute('id');
      updateParams(setparam, 'tab');
    });
  });

  // Attach event listeners to accordion buttons
  document.querySelectorAll('.accordion-button').forEach((button) => {
    button.addEventListener('click', function () {
      const setparam = this.getAttribute('data-bs-target').substring(1);
      updateParams(setparam, 'accordion');
    });
  });

  // Manage tab display and introduction accordion expansion
  document.querySelectorAll('[data-bs-toggle="tab"]').forEach((tab) => {
    tab.addEventListener('shown.bs.tab', function () {
      const targetPane = document.querySelector(this.getAttribute('data-bs-target'));

      if (targetPane) {
        scrollToPageContentIfNeeded(targetPane);

        // Expand the first accordion item containing "introduction" (case insensitive)
        const accordionHeaders = targetPane.querySelectorAll('.accordion-button');
        accordionHeaders.forEach((header) => {
          if (header.textContent.toLowerCase().includes('introduction')) {
            const accordionBody = header.closest('.accordion-item').querySelector('.accordion-collapse');
            header.classList.remove('collapsed');
            header.setAttribute('aria-expanded', 'true');
            accordionBody.classList.add('show');
          }
        });
      }
    });
  });

  // Initialise tab and accordion state from URL parameters
  if (tabopen) updateTabAndAccordionFromParams(tabopen);
  if (accordopen) updateTabAndAccordionFromParams(accordopen);

  // Printing functionality for guides
  function printThisGuide(elem) {
    const thisButtonClass = elem.className;
    let printDiv;

    if (thisButtonClass.includes('sectionprint')) {
      printDiv = elem.closest('.accordion-item');
      if (!printDiv) {
        console.error('Accordion section not found.');
        return;
      }
    } else if (thisButtonClass.includes('partprint')) {
      printDiv = elem.closest('.tab-pane');
      if (!printDiv) {
        console.error('Tab pane not found.');
        return;
      }
    } else if (thisButtonClass.includes('guideprint')) {
      printDiv = document.getElementById('nav-tabContent-0');
      if (!printDiv) {
        console.error('Printable guide not found.');
        return;
      }
    }

    if (printDiv) {
      const printTitle = document.querySelector('h1').textContent;
      const printContents = printDiv.innerHTML;

      const printWindow = window.open('', '', 'height=1200, width=800');
      if (printWindow) {
        printWindow.document.write('<html><head>');
        printWindow.document.write('<link href="css/printstyles.css" rel="stylesheet">');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<h1>RMIT Library: Easy Cite online referencing resource</h1>');
        printWindow.document.write('<h2>' + printTitle + ' Style Guide</h2>');
        printWindow.document.write('<div class="printsectionguide">' + printContents + '</div>');
        printWindow.document.close();

        setTimeout(() => {
          printWindow.print();
        }, 500);
      } else {
        console.error('Failed to open print window.');
      }
    }
  }

  // Add event listeners for print buttons
  document.querySelectorAll('.btn-print').forEach((button) => {
    button.addEventListener('click', function () {
      printThisGuide(this);
    });
  });
});