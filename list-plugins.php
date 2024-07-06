<?php

$files = glob("plugins/*.php", GLOB_BRACE);
foreach ($files as $file) {
  $plugin = pathinfo($file, PATHINFO_FILENAME);
  echo "<p><button data-plugin='{$plugin}' type='button' class='plugin btn btn-secondary'>{$plugin}</button></p>";
  echo "<div id='{$plugin}-form' style='margin: 1em;'></div>";
  echo "<div id='{$plugin}-output' style='margin: 1em; padding: 1em; display: none;'></div>";
}

?>
