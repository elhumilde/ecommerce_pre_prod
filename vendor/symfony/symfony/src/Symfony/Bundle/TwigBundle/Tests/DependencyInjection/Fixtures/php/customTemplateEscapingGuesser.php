<?php

$container->loadFromExtension('twig', array(
    'autoescape_service'        => 'my_project.some_bundle.template_escaping_guesser',
    'autoescape_service_method' => 'guess',
));
