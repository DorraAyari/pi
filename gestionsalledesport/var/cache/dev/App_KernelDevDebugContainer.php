<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVZzixbO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVZzixbO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVZzixbO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVZzixbO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVZzixbO\App_KernelDevDebugContainer([
    'container.build_hash' => 'VZzixbO',
    'container.build_id' => '10c02c50',
    'container.build_time' => 1677096802,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVZzixbO');