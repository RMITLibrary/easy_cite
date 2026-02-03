<?php
function render_menu($menu_links, $link_class = 'nav-link')
{
    // Get styleguide from URL parameters
    $get_styleguide = filter_input(INPUT_GET, 'styleguide', FILTER_SANITIZE_SPECIAL_CHARS);

    // Loop through the array and output the list items
    foreach ($menu_links as $link) {
        $navId = $link['id'];
        $styleGuide = 'styleguide-' . $navId;

        // Determine if this is the active style guide
        $isActive = ($get_styleguide === $styleGuide);
        $activeClass = $isActive ? ' selected' : '';

        // Check if class
        $classAttribute = $link_class ? ' class="' . htmlspecialchars($link_class . $activeClass) . '"' : '';

        // Sanitize label for use in data-ga-event attribute
        $sanitizedLabel = htmlspecialchars(str_replace(' ', '_', strtolower($link['label'])));
        $dataGaEvent = 'data-ga-event="menu_link_' . $sanitizedLabel . '"';

        echo '<li><a  ' . $classAttribute . ' href="#" tabindex="0" ' . $dataGaEvent . ' data-styleguide="' . $styleGuide . '"><span>' . $link['label'] . '</span></a></li>';
    }
}
