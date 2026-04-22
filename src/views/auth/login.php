<?php require __DIR__ . '/../layouts/header.php'; ?>


<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="glass-card" style="width: 350px;">

        <div class="login-icon">🔐</div>

        <h4 class="text-center mb-3">Welcome Back</h4>

        <form action="index.php?action=doLogin" method="POST">
            <input class="form-control mb-2" type="text" name="username" placeholder="Username" required>

            <div class="position-relative">
                <input id="password" class="form-control mb-3 pe-5" 
                       type="password" name="password" placeholder="Password" required>

                <span id="togglePassword" 
                      style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;">
                    👁️
                </span>
            </div>

            <button class="btn glass-btn w-100">Login</button>
        </form>
    </div>
</div>

<script>
const toggle = document.getElementById('togglePassword');
const password = document.getElementById('password');

toggle.addEventListener('click', () => {
    const type = password.type === 'password' ? 'text' : 'password';
    password.type = type;
    toggle.textContent = type === 'password' ? '👁️' : '🙈';
});
</script>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
