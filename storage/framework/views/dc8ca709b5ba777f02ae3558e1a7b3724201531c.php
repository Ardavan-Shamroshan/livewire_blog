<main class="main container">

    <div class="row justify-content-center align-items-center" wire:submit.prevent="register">
        <form action="" class="bg_blur_light p-4 col-12 col-md-6 my-5 shadow ">
            <i class="fas fa-user-lock fa-3x d-block text-center my-3"></i>
            <h5 class="text-center">فرم ثبت نام</h5>
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
                <input type="text" class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="ایمیل"
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
                <input type="password" class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="کلمه عبور"
                    name="password" wire:model="data.password">
            </div>
            <div class="form-group row justify-content-center">
                <?php $__errorArgs = ['data.password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="d-block text-danger w-100 text-center"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="password" class="form-control rounded_5 col-10 col-md-8  shadow"
                    placeholder="تکرار کلمه عبور" name="password_confirmation" wire:model="data.password_confirmation">
            </div>
            <div class="form-group row justify-content-center">
                <?php $__errorArgs = ['data.policy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="d-block text-danger w-100 text-center"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="checkbox" class="form-control outline_0 box_shadow_0 border-0 h-auto" name="policy"
                    wire:model="data.policy">
                <a href="#" class="text-info mx-2">قوانین</a> را مطالعه کرده ام
            </div>
            <div class="form-group row justify-content-center">
                <button class="btn btn-success rounded_5 px-5 shadow-sm" type="submit">ثبت نام</button>
            </div>
        </form>

    </div>

</main>
<?php /**PATH C:\Users\ARDAVAN\Desktop\live_blog\resources\views/livewire/auth/register.blade.php ENDPATH**/ ?>