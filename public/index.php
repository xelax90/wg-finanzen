<?php
require_once(__DIR__.'/../src/Application.php');
require_once(__DIR__.'/../src/NavigationItem.php');
require_once(__DIR__.'/../src/Page/Example.php');
require_once(__DIR__.'/../src/Page/AddFlatMate.php');
require_once(__DIR__.'/../src/Page/AddPurchase.php');
require_once(__DIR__.'/../src/Page/ShowPurchases.php');
require_once(__DIR__.'/../src/Page/Balances.php');

$app = new \WGFinanzen\Application();

$examplePage = new \WGFinanzen\Page\Example();
$exampleNavigation = new \WGFinanzen\NavigationItem('Example', 'example');

$addMate = new \WGFinanzen\Page\AddFlatMate($app->getData());
$addMateNavigation = new \WGFinanzen\NavigationItem('Neuer Mitbewohner', 'addMate');
$addPurchase = new \WGFinanzen\Page\AddPurchase($app->getData());
$addPurchaseNavigation = new \WGFinanzen\NavigationItem('Neuer Kauf', 'addPurchase');
$showPurchases = new \WGFinanzen\Page\ShowPurchases($app->getData());
$showPurchasesNavigation = new \WGFinanzen\NavigationItem('Käufe', 'showPurchases');
$showBalances = new \WGFinanzen\Page\Balances($app->getData());
$showBalancesNavigation = new \WGFinanzen\NavigationItem('Bilanzen', 'balances');


$app->addPage('example', $examplePage);
$app->addPage('addMate', $addMate);
$app->addPage('addPurchase', $addPurchase);
$app->addPage('showPurchases', $showPurchases);
$app->addPage('balances', $showBalances);
$app->addNavigationItem($exampleNavigation);
$app->addNavigationItem($addMateNavigation);
$app->addNavigationItem($addPurchaseNavigation);
$app->addNavigationItem($showPurchasesNavigation);
$app->addNavigationItem($showBalancesNavigation);

$app->run();