<?php
/**
 * Autoload Inc
 * Include automatic inc files
 */
// $directories = array_diff(scandir(get_template_directory() . '/inc'), ['.', '..', 'autoload.php']);
$directories = array_diff(scandir(get_template_directory() . '/inc'), ['.', '..', 'autoload.php', 'customizer.php']);

foreach ($directories as $dir) {

  $files_folders = scandir(get_template_directory() . "/inc/{$dir}");
  unset($files_folders[0]);
  unset($files_folders[1]);
  
  foreach ($files_folders as $file) {
    require_once get_template_directory() . "/inc/{$dir}/{$file}";
  }
}