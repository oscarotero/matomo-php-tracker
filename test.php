<?php

require('vendor/autoload.php');

$request = Middlewares\Utils\Factory::createServerRequest('GET', 'http://tnyholm.se');

$tracker = new PiwikTracker($request, 'https://analytics.historia-arte.com', 1);
var_dump($tracker->getUrlTrackPageView('Ola'));