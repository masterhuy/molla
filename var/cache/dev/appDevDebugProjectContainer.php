<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIibxrht\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIibxrht/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIibxrht.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIibxrht\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerIibxrht\appDevDebugProjectContainer([
    'container.build_hash' => 'Iibxrht',
    'container.build_id' => '031afde8',
    'container.build_time' => 1595413616,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIibxrht');
