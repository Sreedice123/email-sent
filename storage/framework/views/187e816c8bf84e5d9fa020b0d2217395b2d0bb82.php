<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Welcome!Thanks for using our product.we will comeback soon with what you need.</div>
                   <div class="card-body">
                    <?php if(session('resent')): ?>
                         <div class="alert alert-success" role="alert">
                            <?php echo e(__('A fresh mail has been sent to your email address.')); ?>

                        </div>
                    <?php endif; ?>
                    <?php echo $content; ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\Laravel CRUD\sendmail_app\resources\views/email-template.blade.php ENDPATH**/ ?>