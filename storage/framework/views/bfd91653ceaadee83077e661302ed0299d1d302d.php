<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo e(config('app.name')); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php if(auth()->guard()->check()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('registration')); ?>">Registration</a>
          </li>
        <?php endif; ?>
      </ul>
      <span class="navbar-text">
        <?php if(auth()->guard()->check()): ?><?php echo e(auth()->user()->name); ?><?php endif; ?>
      </span>
    </div>
  </div>
</nav><?php /**PATH C:\Users\anvla\OneDrive\Υπολογιστής\JAVASCRIPT_PROJECTS--COURSE--\LARAVEL\my_first_laravel_app\resources\views/include/header.blade.php ENDPATH**/ ?>