<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMepqcgw\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMepqcgw/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerMepqcgw.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerMepqcgw\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerMepqcgw\appProdProjectContainer(array(
    'container.build_hash' => 'Mepqcgw',
    'container.build_id' => 'd1849511',
    'container.build_time' => 1542638815,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerMepqcgw');
