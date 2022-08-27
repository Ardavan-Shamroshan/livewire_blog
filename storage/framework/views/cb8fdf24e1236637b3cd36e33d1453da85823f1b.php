<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- IMPORTANT!!! remember CSRF token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/fontawesome/css/all.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />

    <!-- sweetalert cdn -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php echo htmlScriptTagJsApi(); ?>

    <?php echo \Livewire\Livewire::styles(); ?>

    <title>آسان آموز برنامه نویسی</title>
</head>

<body dir="rtl">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header', [])->html();
} elseif ($_instance->childHasBeenRendered('wNEYndO')) {
    $componentId = $_instance->getRenderedChildComponentId('wNEYndO');
    $componentTag = $_instance->getRenderedChildComponentTagName('wNEYndO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wNEYndO');
} else {
    $response = \Livewire\Livewire::mount('header', []);
    $html = $response->html();
    $_instance->logRenderedChild('wNEYndO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php echo e($slot); ?>


    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer', [])->html();
} elseif ($_instance->childHasBeenRendered('9cNwF48')) {
    $componentId = $_instance->getRenderedChildComponentId('9cNwF48');
    $componentTag = $_instance->getRenderedChildComponentTagName('9cNwF48');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9cNwF48');
} else {
    $response = \Livewire\Livewire::mount('footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('9cNwF48', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/grid.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>


    <!-- Livewire Turbolinks/Turbo Plugin -->
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>

    <!-- livewire sweetalert -->
    <script>
        window.addEventListener('livewire:load', function() {
            livewire.on('sweet-alert', (icon, title, position = 'top-end',showConfirmButton = false, timer = 2500) => {
                Swal.fire({
                    position: position,
                    icon: icon,
                    title: title,
                    showConfirmButton: showConfirmButton,
                    timer: timer
                });
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\ARDAVAN\Desktop\live_blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>