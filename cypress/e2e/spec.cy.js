describe('Easy Cite Website Tests', () => {
  // Set viewport for desktop
  beforeEach(() => {
    cy.viewport(1280, 720);
  });

  it('should verify the homepage title', () => {
    cy.visit('/');
    cy.title().should('eq', 'Easy Cite referencing guide - Library - RMIT University');
  });

  it('should ensure the video is embedded', () => {
    cy.visit('/');
    cy.get('iframe[src*="youtube.com"]').should('exist');
  });

  const guides = [
    { linkText: 'AGLC4', styleguide: 'styleguide-2' },
    { linkText: 'APA 7th Edition', styleguide: 'styleguide-3' },
    { linkText: 'Chicago A', styleguide: 'styleguide-4' },
    { linkText: 'Chicago B', styleguide: 'styleguide-5' },
    { linkText: 'IEEE', styleguide: 'styleguide-6' },
    { linkText: 'RMIT Harvard', styleguide: 'styleguide-1' },
    { linkText: 'Vancouver', styleguide: 'styleguide-7' },
  ];

  guides.forEach((guide) => {
    it(`should test ${guide.linkText} page`, () => {
      cy.visit('/?styleguide=styleguide-2');

      // Make menu button visible if needed
      cy.get('li.menu').invoke('css', 'display', 'block');
      cy.get('#menu-button').click();

      cy.contains('.nav-link', guide.linkText).click({ force: true });

      // Verify URL change
      cy.url().should('include', guide.styleguide);

      // Test each tab
      cy.get('.nav-link[data-bs-toggle="tab"]').each(($tab) => {
        const target = $tab.attr('data-bs-target');
        cy.wrap($tab).click();
        cy.wrap($tab).should('have.class', 'active');
        cy.get(target).should('have.class', 'show').and('have.class', 'active');
      });

      // Expand all accordion items except the first
      cy.get('.accordion-button').each(($accordion, index) => {
        const parentTabPane = $accordion.closest('.tab-pane');

        if (index === 0) {
          if ($accordion.attr('aria-expanded') === 'true') {
            cy.wrap($accordion).click({ force: true });
            cy.wrap($accordion).should('have.attr', 'aria-expanded', 'false');
          }
        } else if (parentTabPane && parentTabPane.hasClass('show')) {
          cy.wrap($accordion).click({ force: true });
          cy.wrap($accordion).should('have.attr', 'aria-expanded', 'true');
          cy.wrap($accordion).closest('.accordion-item').find('.accordion-collapse').should('have.class', 'show');
        }
      });

      // Check if external links are functioning
      cy.get('a[target="_blank"]').each(($link) => {
        cy.request($link.prop('href')).its('status').should('eq', 200);
      });

      // Engage print buttons without error
      cy.window().then((win) => cy.stub(win, 'open').as('windowOpen'));

      cy.get('.btn-print').each(($button) => {
        cy.wrap($button).click({ force: true });
        cy.get('@windowOpen').should('be.called');
      });
    });
  });
});
