<main class="main container-fluid">

    <!-- -------------------- top banner ------------------------- -->
    <div class=" row top_header_banner align-items-center justify-content-center">
        <div
            class="bg_blur_light p-4 bg_blur_light rounded_5 d-none d-md-block animate__animated animate__fadeInDown animate__delay-1s ">
            <h3 class="text-center text-dark">خیلی زود مسیر برنامه نویسی رو پیدا کن</h1>
        </div>
        <div class="row col-12 col-md-10 justify-content-center article_goup">

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('blog.search', $category)); ?>" class="p-4 col-11 col-md-4 animate__animated animate__fadeInDown">
                <div class="p-3 cursor_pointer_shadow rounded bg_blur_light text-center border_2 border_white">
                    <i class="<?php echo e($category->icon); ?> fa-3x"></i>
                    <h4 class="text-center "><?php echo e($category->title); ?></h4>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    <!-- -------------------- best article ------------------------- -->
    <div id="bestArticles" class="row justify-content-center col-12 col-lg-10 m-auto">

        <div class="col-12 text-right">
            <h4 class="pt-4 pb-1 text-info">مهمترین مقالات</h4>
            <hr class="bg-light w-25 h_0_5 m-0 rounded_5">
        </div>

        <div class="row justify-content-center align-items-center">

            <?php $__currentLoopData = $bestArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $best): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('index.article-card', ['article' => $best])->html();
} elseif ($_instance->childHasBeenRendered('l3174766965-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3174766965-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3174766965-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3174766965-0');
} else {
    $response = \Livewire\Livewire::mount('index.article-card', ['article' => $best]);
    $html = $response->html();
    $_instance->logRenderedChild('l3174766965-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>

    <!-- -------------------- new article ------------------------- -->
    <div id="newArticles" class="row justify-content-center col-12 col-lg-10 m-auto">

        <div class="col-12 text-right">
            <h4 class="pt-4 pb-1 text-info">جدید ترین مقالات</h4>
            <hr class="bg-light w-25 h_0_5 m-0 rounded_5">
        </div>


        <div class="row justify-content-center align-items-center">
            <?php $__currentLoopData = $newArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('index.article-card', ['article' => $new])->html();
} elseif ($_instance->childHasBeenRendered('l3174766965-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3174766965-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3174766965-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3174766965-1');
} else {
    $response = \Livewire\Livewire::mount('index.article-card', ['article' => $new]);
    $html = $response->html();
    $_instance->logRenderedChild('l3174766965-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>

</main>
<?php /**PATH C:\Users\ARDAVAN\Desktop\live_blog\resources\views/livewire/index/index.blade.php ENDPATH**/ ?>