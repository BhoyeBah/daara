<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPgRxw72\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPgRxw72/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPgRxw72.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPgRxw72\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPgRxw72\App_KernelDevDebugContainer([
    'container.build_hash' => 'PgRxw72',
    'container.build_id' => 'b20c628a',
    'container.build_time' => 1732134409,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPgRxw72');
