<?php
require_once JPATH_BASE . '/vendor/autoload.php';

$container = \Joomla3\Glue\ORM::bootstrap();
$repository = $container->get('Repository')->forEntity('Article');

xdebug_var_dump($repository);
