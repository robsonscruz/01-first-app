<?php
$list = glob('/var/www/alunos/*', GLOB_ONLYDIR);
foreach($list as $folder) {
    $folder = basename($folder);
    echo "<li><a href=\"/$folder\" target=\"_parent\">$folder</li>";
}
echo (count($list) === 0) ? 'No projects found :(' : '';