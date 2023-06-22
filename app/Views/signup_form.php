<!-- Bagian Views/signup_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }

        .check-group {
            margin-top: 10px;
        }

        .checkbox-group label {
            display: inline-block;
            margin-right: 10px;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Signup Form</h1>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <?= $error ?> <br>
            <?php endforeach ?>
    <?php endif ?>

    <form action="<?= site_url('signup')?>" method="POST" id="signup-form">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="<?= old('nama')?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= old('email')?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="checkbox-group">
            <label for="agreement">
                <input type="checkbox" name="agreement" id="agreement">
                Saya menyetujui syarat dan ketentuan yang berlaku.
            </label>
        </div>
        <button type="submit">Sign Up</button>
    </form>
    <script>
        // validasi form signup 

        const signupForm = document.getElementById('signup-form');
        signupForm.addEventListener('submit', function(event) {
            const namaInput = document.getElementById('nama');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('pasword');
            const agreementCheckbox = document.getElementById('agreement');

            if (!isValidName(namaInput.value)) {
                alert('Nama lengkap harus diisi dan minimal 3 karakter');
                namaInput.focus();
                event.preventDefault();
                return false;
            }

            if (!isValidEmail(emailInput.value)) {
                alert('Email tidak valid');
                emailInput.focus();
                event.preventDefault();
                return false;
            }

            if (!isValidPassword(passwordInput.value)) {
                alert('Password minimal 8 karakter');
                passwordInput.focus();
                event.preventDefault();
                return false;
            }

            if (!agreementCheckbox.checked) {
                alert('Anda harus menyetujui syarat dan ketentuan');
                event.preventDefault();
                return false;
            }
        });

        // validasi nama
        function isValidName(nama) {
            return nama.length >= 3;
        }

        // validasi email
        function isValidEmail(email) {
            // Regex untuk validasi email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // validasi password
        function isValidPassword(password) {
            return password.length >= 8;
        }
    </script>
</body>
</html>