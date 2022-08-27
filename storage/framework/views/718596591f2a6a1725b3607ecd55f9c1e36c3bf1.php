<main class="main container-fluid">
    <div id="searchedArticles" class="row justify-content-center col-12 m-auto px-0">

        <div class="col-12 row justify-content-center align-items-center mt-3 py-2">
            <div class="col-12 col-md-6 form-group search_box">
                <input type="text" class="form-control rounded_5 placeholder_gray shadow-sm h_2_5" placeholder="عنوان رو وارد کن" wire:model.lazy="search" />
                <a href="<?php echo e(route('blog.search', ['category' => $this->category,  'search' => $this->search ])); ?>" class="fas fa-search search_btn"></a>
            </div>
            <div class="col-12 col-md-6 form-group search_box">
                <select name="" id="" class="rounded_5 outline_0 h_2_5 border-0 form-control" wire:model="category" />
                    <option value="">انتخاب بر اساس گروه</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="col-12 text-right">
            <h4 class="pt-4 pb-1 text-info"><?php echo e($articles->count()); ?> مقالات یافت شده </h4>
            <hr class="bg-light w-25 h_0_5 m-0 rounded_5">
        </div>

        <div class="row col-12 col-md-12 align-items-center">

            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('index.article-card', ['article' => $article])->html();
} elseif ($_instance->childHasBeenRendered('l2007648197-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2007648197-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2007648197-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2007648197-0');
} else {
    $response = \Livewire\Livewire::mount('index.article-card', ['article' => $article]);
    $html = $response->html();
    $_instance->logRenderedChild('l2007648197-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</main>
<?php /**PATH C:\Users\ARDAVAN\Desktop\live_blog\resources\views/livewire/search/search.blade.php ENDPATH**/ ?>