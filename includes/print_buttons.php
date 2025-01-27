<?php
function renderPrintButtons($guideName, $chapterName)
{
    echo '<div class="print-buttons-wrapper">';
    echo '<button class="btn btn-print guideprint" type="button"><span>Print \'' . ($guideName) . '\'<span class="visually-hidden">style guide (opens new window)</span></span></button>';
    echo '<button class="btn btn-print partprint" type="button" tabindex="0"><span class="btn-print--content">Print \'<span class="text-truncate">'. ($chapterName) . '</span>\' chapter<span class="visually-hidden"> of the ' . htmlspecialchars($guideName) . ' style guide (opens new window)</span></span></button>';
    echo '</div>';
}
?>
