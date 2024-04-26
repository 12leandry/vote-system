<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        .carousel-item img {
            height: 400px;
            width: 100px;
            object-fit: cover;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Shopping Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <!-- First Div: Carousel and Text Display -->
            <div class="col-md-6">
                <div id="tshirtCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#tshirtCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#tshirtCarousel" data-slide-to="1"></li>
                        <!-- Add indicators for additional carousel items -->
                    </ol>
                    <div class="carousel-inner">
                        <!-- Carousel Item 1 -->
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/400x200" class="d-block w-100" alt="T-Shirt 1">
                        </div>
                        <!-- Carousel Item 2 -->
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/400x200" class="d-block w-100" alt="T-Shirt 2">
                        </div>
                        <!-- Add more carousel items -->
                    </div>
                    <!-- Add your carousel controls here -->
                    <a class="carousel-control-prev" href="#tshirtCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#tshirtCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="alert alert-info" role="alert">
                    <strong>Note:</strong> Contestants must purchase a T-shirt to qualify.
                </div>
            </div>
            <!-- End First Div: Carousel and Text Display -->

            <!-- Second Div: Shop Section -->

            <!-- T-Shirt 1 -->
            <div class="col-md-4 mb-4 mt-5">
                <div class="card ">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="T-Shirt 1">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt 1</h5>
                        <p class="card-text">Description of T-Shirt 1.</p>
                        <p class="card-text">$20</p>
                        <a href="{{ route('checkout') }}?name=T-Shirt%201&description=Description%20of%20T-Shirt%201.&price=20"
                            class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End T-Shirt 1 -->

            <!-- T-Shirt 2 -->
            <div class="col-md-4 mb-4 mt-5">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="T-Shirt 2">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt 2</h5>
                        <p class="card-text">Description of T-Shirt 2.</p>
                        <p class="card-text">$25</p>
                        <a href="{{ route('checkout') }}?name=T-Shirt%202&description=Description%20of%20T-Shirt%202.&price=25"
                            class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End T-Shirt 2 -->

            <!-- T-Shirt 3 -->
            <div class="col-md-4 mb-4 mt-5">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="T-Shirt 3">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt 3</h5>
                        <p class="card-text">Description of T-Shirt 3.</p>
                        <p class="card-text">$30</p>
                        <a href="{{ route('checkout') }}?name=T-Shirt%203&description=Description%20of%20T-Shirt%203.&price=30"
                            class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End T-Shirt 3 -->

            <!-- End T-Shirt 3 -->

            <!-- End Second Div: Shop Section -->
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
        // Custom JavaScript logic
    </script>
</body>

</html>
