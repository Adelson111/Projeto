<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYUkG0ql\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYUkG0ql/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYUkG0ql.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYUkG0ql\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYUkG0ql\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YUkG0ql',
    'container.build_id' => '498df582',
    'container.build_time' => 1575922160,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYUkG0ql');
