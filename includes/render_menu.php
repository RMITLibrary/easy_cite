<?php
function render_menu($menu_links, $link_class = 'nav-link')
{
    // Loop through the array and output the list items
    foreach ($menu_links as $link) {
        $navId = $link['id'];
        $styleGuide = 'styleguide-' . $navId;
        // Check if class
        $classAttribute = $link_class ? ' class="' . htmlspecialchars($link_class) . '"' : '';

        echo '<li><a id="nav-link-' . $navId . '"' . $classAttribute .
            ' href="#" tabindex="0" data-bs-target="#nav-' . $navId .
            '" aria-controls="nav-' . $navId .
            '" data-styleguide="' . $styleGuide . '">' .
            $link['label'] . '</a></li>';
    }
}
