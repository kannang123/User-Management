<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

  <div class="container">
    <div class="card register">
      <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <?php endif; ?>

      <?php if(session('error')): ?>
      <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

      </div>
      <?php endif; ?>
      <h2>Register</h2>
      <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
    <div class="separator"></div>

  </div>
</body>

<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #ffffff;
    font-family: 'Arial', sans-serif;
    margin: 0;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 800px;
  }

  .card {
    width: 45%;
    margin: 0 10px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    box-sizing: border-box;
    height: 350px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .separator {
    width: 5px;
    background: linear-gradient(to bottom, #ffcc00, #ffcc00);
  }

  h2 {
    margin-bottom: 20px;
    color: #333;
  }

  form {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    justify-content: space-between;
  }

  input {
    margin-bottom: 15px;
    padding: 10px;
    border: none;
    border-bottom: 2px solid #ffcc00;
    font-size: 16px;
    background: none;
  }

  input:focus {
    outline: none;
    border-bottom-color: #ff9900;
  }

  button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #ffcc00;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #ff9900;
  }

  .alert-danger {
    --tblr-alert-color: #d63939;
  }

  .alert {
    background: #ffffff;
    border: 1px solid rgba(98, 105, 118, 0.16);
    border-left: 0.25rem solid var(--tblr-alert-color);
    box-shadow: rgba(30, 41, 59, 0.04) 0 2px 4px 0;
  }
</style><?php /**PATH /var/www/html/user-registration/resources/views/user/register.blade.php ENDPATH**/ ?>