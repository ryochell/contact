<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <?php $__env->startSection('content'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">お問い合わせ</div>
                    <div class="panel-body">
                        <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>
    
                        <table class="table">
                            <tr>
                                <th>お問い合わせ種類</th>
                                <td><?php echo e($type); ?></td>
                            </tr>
                            <tr>
                                <th>お名前</th>
                                <td><?php echo e($contact->name); ?></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><?php echo e($contact->email); ?></td>
                            </tr>
                            <tr>
                                <th>性別</th>
                                <td><?php echo e($contact->gender); ?></td>
                            </tr>
                            <tr>
                                <th>内容</th>
                                <td><?php echo e($contact->body); ?></td>
                            </tr>
                        </table>
    
                        <?php echo Form::open(['url' => 'contact/complete',
                                        'class' => 'form-horizontal',
                                        'id' => 'post-input']); ?>

    
                        <?php $__currentLoopData = $contact->getAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($value)): ?>
                                <?php if(is_array($value)): ?>
                                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input name="<?php echo e($key); ?>[]" type="hidden" value="<?php echo e($subValue); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <?php echo Form::hidden($key, $value); ?>

                                <?php endif; ?>
    
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                        <?php echo Form::submit('戻る', ['name' => 'action', 'class' => 'btn']); ?>

                        <?php echo Form::submit('送信', ['name' => 'action', 'class' => 'btn btn-primary']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryo/Desktop/ContactForm/ContactForm/resources/views/contacts/confirm.blade.php ENDPATH**/ ?>