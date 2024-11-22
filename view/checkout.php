<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/payment.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../view/shop.php">
            <i class="bi bi-arrow-left"></i> Back to shop
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </li>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-box-seam"></i> My Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="bg-success text-white py-3">
    <div class="container text-center">
        <h1>Your Website</h1>
    </div>
</header>

<main class="my-5">
    <div class="container">
        <section id="contact" class="shadow p-4 rounded bg-light">
            <h2 class="text-center text-success mb-4">Contact Us</h2>
            <form id="paymentForm">
                <div class="mb-3">
                    <label for="email-address" class="form-label">Email Address</label>
                    <input type="email" id="email-address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="tel" id="amount" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" id="first-name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" id="last-name" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" onclick="payWithPaystack()" class="btn btn-success btn-lg">Pay</button>
                </div>
            </form>
        </section>
    </div>
</main>

<footer class="bg-success text-white py-3">
    <div class="container text-center">
        <p>&copy; 2024 Your Website</p>
    </div>
</footer>

<!-- Paystack Script -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="../js/pay.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

</html>