<!-- Bagian Views/login_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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

    <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
    <?php endif; ?>

    <form action="<?= base_url('/login')?>" method="POST" id="login-form">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="<?= old('nama')?>" required>
        </div>
        <!-- <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div> -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="<?= old('password')?>" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>