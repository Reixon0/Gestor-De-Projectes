<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN0wdvqk\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN0wdvqk/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerN0wdvqk.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerN0wdvqk\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerN0wdvqk\appDevDebugProjectContainer(array(
    'container.build_hash' => 'N0wdvqk',
    'container.build_id' => 'cf4448e0',
    'container.build_time' => 1519747706,
));