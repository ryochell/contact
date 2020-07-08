<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php echo e(Form::open(['url' => 'contact/confirm',
                                'class' => 'form-horizontal'])); ?>


                    <div class="form-group<?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
                        <?php echo e(Form::label('type', 'お問い合わせ種類:', ['class' => 'col-sm-2 control-label'])); ?>

                        <div class="col-sm-10">
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="checkbox-inline">
                                    <?php echo e(Form::checkbox('type[]', $value)); ?>

                                    <?php echo e($value); ?>

                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if($errors->has('type')): ?>
                                <span class="help-block">
                                <strong><?php echo e($errors->first('type')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <?php echo e(Form::label('name', 'お名前:', ['class' => 'col-sm-2 control-label'])); ?>

                        <div class="col-sm-10">
                            <?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>


                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <?php echo e(Form::label('email', 'メールアドレス:', ['class' => 'col-sm-2 control-label'])); ?>

                        <div class="col-sm-10">
                            <?php echo e(Form::email('email', null, ['class' => 'form-control'])); ?>

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
                        <?php echo e(Form::label('gender', '性別:', ['class' => 'col-sm-2 control-label'])); ?>

                        <div class="col-sm-10">
                            <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="checkbox-inline">
                                    <?php echo e(Form::radio('gender', $value)); ?>

                                    <?php echo e($value); ?>

                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if($errors->has('gender')): ?>
                                <span class="help-block">
                            <strong><?php echo e($errors->first('gender')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                        <?php echo e(Form::label('body', '内容:', ['class' => 'col-sm-2 control-label'])); ?>

                        <div class="col-sm-10">
                            <?php echo e(Form::textarea('body', null, ['class' => 'form-control'])); ?>

                            <?php if($errors->has('body')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('body')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <?php echo e(Form::submit('確認', ['class' => 'btn btn-primary'])); ?>

                        </div>
                    </div>

                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryo/Desktop/ContactForm/ContactForm/resources/views/contacts/index.blade.php ENDPATH**/ ?>