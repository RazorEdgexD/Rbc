<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF5xf0zh\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF5xf0zh/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerF5xf0zh.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerF5xf0zh\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerF5xf0zh\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'F5xf0zh',
    'container.build_id' => '8b1a697e',
    'container.build_time' => 1546220974,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerF5xf0zh');
