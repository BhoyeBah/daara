<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX2xmdxm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX2xmdxm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX2xmdxm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX2xmdxm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX2xmdxm\App_KernelDevDebugContainer([
    'container.build_hash' => 'X2xmdxm',
    'container.build_id' => '732283e3',
    'container.build_time' => 1737035304,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX2xmdxm');
