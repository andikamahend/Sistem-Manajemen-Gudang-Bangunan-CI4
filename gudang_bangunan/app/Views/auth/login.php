<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                    <?php if (session()->getFlashdata('error')): ?>
                        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
                    <?php endif; ?>
                    <form action="/login" method="post">
                        <?= csrf_field() ?>
                        <label for="username">Username:</label>
                        <input type="text" class="input" name="username" id="username" required>
                        <br>
                        <label for="password">Password:</label>
                        <input type="password" class="input" name="password" id="password" required>
                        <br>
                        <button id="loginButton" class="button" type="submit">
                            <span class="box">L</span>
                            <span class="box">O</span>
                            <span class="box">G</span>
                            <span class="box">I</span>
                            <span class="box">N</span>
                        </button>
                    </form>
                  </div>
                  <div class="flip-card__back">
                    <div class="title">Sign up</div>
                     <?php if (session()->getFlashdata('error')): ?>
                        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
                    <?php endif; ?>
                    <form action="/register" method="post">
                        <?= csrf_field() ?>
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="input" id="username" required>
                        <br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="input" id="password" required>
                        <br>
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" name="confirm_password" class="input" id="confirm_password" required>
                        <br>
                        <button id="registerButton" class="button" type="submit">
                            <span class="box1">R</span>
                            <span class="box1">E</span>
                            <span class="box1">G</span>
                            <span class="box1">I</span>
                            <span class="box1">S</span>
                            <span class="box1">T</span>
                            <span class="box1">E</span>
                            <span class="box1">R</span>
                        </button>
                    </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>
   <script>
    const toggle = document.querySelector('.toggle');
    const loginButton = document.getElementById('loginButton');
    const registerButton = document.getElementById('registerButton');

    toggle.addEventListener('change', function () {
        if (toggle.checked) {
            // Jika toggle aktif, sisi register terlihat
            loginButton.style.pointerEvents = 'none'; // Nonaktifkan tombol login
            registerButton.style.pointerEvents = 'auto'; // Aktifkan tombol register
        } else {
            // Jika toggle tidak aktif, sisi login terlihat
            loginButton.style.pointerEvents = 'auto'; // Aktifkan tombol login
            registerButton.style.pointerEvents = 'none'; // Nonaktifkan tombol register
        }
    });

    // Inisialisasi awal
    if (toggle.checked) {
        loginButton.style.pointerEvents = 'none';
        registerButton.style.pointerEvents = 'auto';
    } else {
        loginButton.style.pointerEvents = 'auto';
        registerButton.style.pointerEvents = 'none';
    }
</script>

<?= $this->endSection() ?>