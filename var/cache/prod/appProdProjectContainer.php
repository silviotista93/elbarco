<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container47v8ajp\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container47v8ajp/appProdProjectContainer.php') {
    touch(__DIR__.'/Container47v8ajp.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container47v8ajp\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container47v8ajp\appProdProjectContainer([
    'container.build_hash' => '47v8ajp',
    'container.build_id' => '06fd7e49',
    'container.build_time' => 1560976880,
], __DIR__.\DIRECTORY_SEPARATOR.'Container47v8ajp');
