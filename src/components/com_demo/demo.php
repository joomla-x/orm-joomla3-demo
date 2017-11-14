<?php

use Joomla\ORM\Operator;

require_once JPATH_BASE . '/vendor/autoload.php';

JLoader::registerNamespace(
    'Joomla3\\Entity',
    JPATH_BASE . '/vendor/joomla-x/entities-joomla3/entities',
    false,
    false,
    'psr4'
);

$container = \Joomla3\Glue\ORM::bootstrap();

/** @var \Joomla\ORM\Repository\RepositoryInterface $repository */
$repository = $container->get('Repository')->forEntity('Article');

$articles = $repository->findAll()->getItems();

foreach ($articles as $article) {
    echo '<h1>' . $article->title . '</h1>';
    echo '<p>Written by ' . $article->author->name . '</p>';
    echo '<p>Other Articles by this author:</p>';
    echo '<ul>';
    $otherArticles = $article
        ->author
        ->articles
        ->findAll()
        ->with('id', Operator::NOT_EQUAL, $article->id)
        ->getItems()
    ;
    foreach ($otherArticles as $other) {
        echo '<li>' . $other->title . '</li>';
    }
    echo '</ul>';
}

