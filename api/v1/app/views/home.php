<?php
$date = new DateTime();
$this_date = $date->format("Y-m-d");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section hero p-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="hero-title text-light">DRIVE IN STYLE WITH OUR PREMIUM <br>CAR RENTAL SERVICES.</p>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->


    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <div class="row bg-light box">
                <div class="col">
                    <div class="row p-3 d-flex justify-content-center">
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">Car</span>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option value="sedan">Inova</option>
                                <option value="suv">Br-v</option>
                                <option value="mpv">Ertiga</option>
                                <option value="mpv">Jazz</option>
                                <option value="mpv">Brio</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">Merk</span>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option value="honda">Honda</option>
                                <option value="toyota">Toyota</option>
                                <option value="suzuki">Suzuki</option>
                                <option value="wuling">Wuling</option>
                                <option value="daihatsu">Daihatsu</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">Start Date</span>
                            <input type="date" name="" id="" class="form-control mt-2" value="<?= $this_date; ?>">
                        </div>
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">End Date</span>
                            <input type="date" name="" id="" class="form-control mt-2" value="<?= $this_date; ?>">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary w-10"><i class="fa-solid me-2 fa-magnifying-glass" style="color: #f6f7f9;"></i>Search Car</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Of Search Section -->


    <!-- Book section -->
    <section class="book-section">
        .<div class="container">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <p class="title-book">Book Your Premuim Car <img src="public/images/stars.png" width="32" class="img-fluid" alt=""></p>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product1.jpg" class="card-img-top" alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 1</h5>
                                        <p class="card-text">Description of product 1</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product1.jpg" class="card-img-top" alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 1</h5>
                                        <p class="card-text">Description of product 1</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product1.jpg" class="card-img-top" alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 1</h5>
                                        <p class="card-text">Description of product 1</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product1.jpg" class="card-img-top" alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 1</h5>
                                        <p class="card-text">Description of product 1</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more product cards here -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product4.jpg" class="card-img-top" alt="Product 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 4</h5>
                                        <p class="card-text">Description of product 4</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product4.jpg" class="card-img-top" alt="Product 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 4</h5>
                                        <p class="card-text">Description of product 4</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product4.jpg" class="card-img-top" alt="Product 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 4</h5>
                                        <p class="card-text">Description of product 4</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="product4.jpg" class="card-img-top" alt="Product 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Product 4</h5>
                                        <p class="card-text">Description of product 4</p>
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more product cards here -->
                        </div>
                    </div>
                    <!-- Add more carousel items here -->
                </div>
                <button class="carousel-control-prev" type="button" style="background-color: #0c6efd; width: 15px;" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" style="background-color: #0c6efd; width: 15px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End Of Book section -->

<!--My Reservation Section-->
    <section class="reservation mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="title-book">My Reservation <img src="public/images/reserve.png" alt="" width="32"></p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Car</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="">1</th>
                            <td class=""> Jazz</td>
                            <td class="">Honda</td>
                            <td>01-05-2023</td>
                            <td>10-05-2023</td>
                            <td>Rp.1.500.000</td>
                            <td class="text-success">On Process</td>
                            <td>
                                <button class="btn btn-primary bg-transparent"><img src="public/images/edit.png" alt="" width="20"></button>
                                <button class="btn btn-primary bg-transparent"><img src="public/images/trash.png" alt="" width="20"></button>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="">2</th>
                            <td class="">Ertiga</td>
                            <td class="">Suzuki</td>
                            <td>01-05-2023</td>
                            <td>03-05-2023</td>
                            <td>Rp.500.000</td>
                            <td class="text-primary">Finished</td>
                            <td>
                                <button class="btn btn-primary bg-transparent"><img src="public/images/edit.png" alt="" width="20"></button>
                                <button class="btn btn-primary bg-transparent"><img src="public/images/trash.png" alt="" width="20"></button>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<!--End My Reservation Section-->
</body>

</html>