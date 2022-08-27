<main class="main container">

    <div class="row justify-content-center align-items-center">
        <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow" wire:submit.prevent="login">
            <i class="fas fa-user-check fa-3x d-block text-center my-3"></i>
            <h5 class="text-center">فرم ورود</h5>
            <div class="form-group row justify-content-center">
                <?php $__errorArgs = ['data.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="d-block text-danger w-100 text-center"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="text" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="ایمیل"
                    name="email" wire:model="data.email">
            </div>
            <div class="form-group row justify-content-center">
                <?php $__errorArgs = ['data.password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="d-block text-danger w-100 text-center"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="text" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="کلمه عبور"
                    name="password" wire:model="data.password">
            </div>
            <div class="form-group row justify-content-center">
                <?php $__errorArgs = ['data.remember'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="d-block text-danger w-100 text-center"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="checkbox" class="form-control outline_0 box_shadow_0 h-auto" name="remember"
                    wire:model="data.remember">
                مرا بخاطر بسپار
            </div>
            <div class="form-group row justify-content-center">
                <button class="btn btn-success rounded_5 px-5 shadow-sm">ورود</button>
            </div>
        </form>

    </div>

</main>
<?php /**PATH C:\Users\ARDAVAN\Desktop\live_blog\resources\views/livewire/auth/login.blade.php ENDPATH**/ ?>