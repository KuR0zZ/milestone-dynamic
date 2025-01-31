<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <div class="container">
            <a href="index.html" class="fs-4 navbar-brand fw-bold">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active fw-semibold" aria-current="page">Login/Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link fw-semibold">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex flex-fill justify-content-center align-items-center">
        <div class="col-md-4">
            <!-- Log In -->
            <div class="form-box shadow rounded-3 p-5" id="login-form">
                <div class="form-title text-center">
                    <h2 class="fw-bold mb-3">Login</h2>
                </div>
                <form method="POST" action="register.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button class="p-0 border-0 bg-transparent text-primary">Forgot password?</button>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="logIn">Log in</button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <span>Don't have an account?</span>
                    <button class="p-0 border-0 bg-transparent text-primary register-show">Register</button>
                </div>
            </div>

            <!-- Register -->
            <div class="form-box shadow rounded-3 p-5" id="register-form" style="display: none;">
                <div class="form-title text-center">
                    <h2 class="fw-bold mb-3">Register</h2>
                </div>
                <form method="POST" action="register.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Create a password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Confirm a password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="exampleInputPassword2" name="confPassword">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">I accept all terms & conditions</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="registerAcc">Register</button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <span>Already have an account?</span>
                    <button class="p-0 border-0 bg-transparent text-primary login-show">Log in</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center bg-dark py-3">
        <p class="text-white text-opacity-75 mb-0">@2024 Ferdinand Iskandar</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./assets/script.js"></script>
</body>
</html>