<?php

require_once 'lib/fabpot-Twig-b01da99/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates/');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache/',
));

$pages = array();
$first_page_file = 'greeting.tpl';
$iterator = new DirectoryIterator('templates/pages/');
foreach ($iterator as $fileinfo) {
  if ($fileinfo->isFile()) {
    $filename = $fileinfo->getFilename();
    $page = $twig->render('pages/' . $filename);
    if($filename == $first_page_file)
      array_unshift($pages, $page);
    else
      $pages[] = $twig->render('pages/' . $fileinfo->getFilename());
  }
}

echo $twig->render('app.tpl', array('pages' => $pages));

?>
