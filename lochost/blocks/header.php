<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Все для IT</h5>
  <nav class="my-2 my-md--0 mr-md-3">
    <a class="p-2 text-dark" href="/">Головна</a>
    <a class="p-2 text-dark" href="about.php">Контакти</a>
  </nav>
  <?php
    if($_COOKIE['user'] == 'Так'):
  ?>
    <a class="btn btn-outline-primary" href="auth.php">Кабінет користувача</a>
    <?php else: ?>
    <a class="btn btn-outline-primary" href="auth.php">Увійти</a>
    <?php endif; ?>
</div>