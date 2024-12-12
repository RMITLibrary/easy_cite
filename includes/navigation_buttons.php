<?php
function renderNavigationButtons($currentIndex, $menu)
{
  $totalTabs = count($menu);
  $prevIndex = $currentIndex > 0 ? $currentIndex - 1 : null;
  $nextIndex = $currentIndex < $totalTabs - 1 ? $currentIndex + 1 : null;

  echo '<nav class="btn-nav-container" aria-label="Previous and next sections">';

  if ($prevIndex !== null) {
    $prevTitle = htmlspecialchars_decode($menu[$prevIndex], ENT_QUOTES);
    echo "<div class=\"btn-nav-prev\">
            <button data-tab-index=\"$prevIndex\">
              <span class=\"visually-hidden\">Go to the previous chapter: </span>
              $prevTitle
            </button>
          </div>";
  }

  if ($nextIndex !== null) {
    $nextTitle = htmlspecialchars_decode($menu[$nextIndex], ENT_QUOTES);
    echo "<div class=\"btn-nav-next\">
            <button data-tab-index=\"$nextIndex\">
              <span class=\"visually-hidden\">Go to the next chapter: </span>
              $nextTitle
            </button>
          </div>";
  }

  echo '</nav>';
}
