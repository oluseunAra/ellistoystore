<?php
ob_start();
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ellis Toy Store NG </title>
    <meta name="description"
        content="Ellis Toy Store is Nigeria's leading toy store with an amazing array of great quality toys for kids of all age range.">
    <meta name="keywords"
        content="Kiddies, Toys, Toy Store, Online Toy Store, Online Store, Toys for Kids, Safe Toys">
    <?php include __DIR__ . '/../config/pre-head.php'; ?>
</head>

<body>
    <?php include __DIR__ . '/../config/header.php'; ?>

    <section class="hero-section landing-hero primary-gradient-blur-bg w-100 d-flex overflow-hidden webQ_ani" data-animate="scale-up-center">
        <div class="d-flex w-100 p-0 flex-row card-2 flex-wrap justify-content-start align-items-center bring-forward">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner overflow-hidden p-1 pt-2 pb-2 p-sm-0">
                    <!-- Slide 1: Ellis Toy Store -->
                    <div class="carousel-item active overflow-hidden">
                        <div class="d-flex flex-column w-100 m-auto ms-0 bring-forward justify-content-center align-items-center h-100 top-to-bottom-trans-bg">
                            <div class="container d-flex flex-column h-100 justify-content-center align-items-center">
                                <div class="d-flex col-12 col-md-8 h-100 justify-content-center align-items-center m-auto">
                                    <div class="d-flex w-100 card-1 flex-column p-0 m-0 caption-container justify-content-end mt-5 pt-5">
                                        <!--div class="d-flex flex-column m-auto mt-0 mb-0 justify-content-center align-items-center p-0 gap-3">
                                            <h3 class="display-4 text-center mb-0 fw-bolder">Fun just got better</h3>
                                            <p class="mb-0 text-center reg-font fw-bold">Outdoors or Indoors, for fun or learning, we have it all! <br /> Get top quality toys for your kids now. We deliver nation wide.</p>
                                            <a href="#" class="btn primary m-auto mb-0 fw-bold">Shop now</a>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column w-100 position-absolute top-0 right-0 send-backward m-auto justify-content-center align-items-center card-2 p-0">
                            <picture class="w-100 h-100 object-fit-cover">
                                <source media="(min-width: 770px)"
                                    srcset="/assets/media-assets/img/Ellis-toy-store-cars-and-bicycles.avif">
                                <source media="(min-width: 451px)"
                                    srcset="/assets/media-assets/img/Ellis-toy-store-cars-and-bicycles.avif">
                                <source media="(max-width: 450px)"
                                    srcset="/assets/media-assets/img/Ellis-toy-store-cars-and-bicycles.avif">
                                <img src="/assets/media-assets/img/Ellis-toy-store-cars-and-bicycles.avif"
                                    alt="Ellis Toy Store" class="w-100 h-100 object-fit-cover">
                            </picture>
                        </div>
                    </div>
                    <!-- Slide 2: Ellis Toy Store -->
                    <div class="carousel-item active overflow-hidden">
                        <div class="d-flex flex-column w-100 m-auto ms-0 bring-forward justify-content-center align-items-center h-100 top-to-bottom-trans-bg">
                            <div class="container d-flex flex-column h-100 justify-content-center align-items-center">
                                <div class="d-flex col-12 col-md-8 h-100 justify-content-center align-items-center m-auto">
                                    <div class="d-flex w-100 card-1 flex-column p-0 m-0 caption-container justify-content-end mt-5 pt-5">
                                        <!--div class="d-flex flex-column m-auto mt-0 mb-0 justify-content-center align-items-center p-0 gap-3">
                                            <h3 class="display-4 text-center mb-0 fw-bolder">Fun just got better</h3>
                                            <p class="mb-0 text-center reg-font fw-bold">Outdoors or Indoors, for fun or learning, we have it all! <br /> Get top quality toys for your kids now. We deliver nation wide.</p>
                                            <a href="#" class="btn primary m-auto mb-0 fw-bold">Shop now</a>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column w-100 position-absolute top-0 right-0 send-backward m-auto justify-content-center align-items-center card-2 p-0">
                            <picture class="w-100 h-100 object-fit-cover">
                                <source media="(min-width: 770px)"
                                    srcset="/assets/media-assets/img/fluffy.jpg">
                                <source media="(min-width: 451px)"
                                    srcset="/assets/media-assets/img/fluffy.jpg">
                                <source media="(max-width: 450px)"
                                    srcset="/assets/media-assets/img/fluffy.jpg">
                                <img src="/assets/media-assets/img/fluffy.jpg"
                                    alt="Ellis Toy Store" class="w-100 h-100 object-fit-cover">
                            </picture>
                        </div>
                    </div>
                </div> <!-- carousel-inner -->
            </div> <!-- heroCarousel -->
        </div>
    </section>

    <section class="d-flex primary overflow-hidden">
        <div class="container d-flex flex-column pt-5 pb-5">
            <div class="d-flex w-100 overflow-hidden card primary border-0 full-radius position-relative mt-5 mb-5 dark">
                <div class="background-container card border-0">
                    <picture class="w-100 h-100 object-fit-cover">
                        <source media="(min-width: 770px)"
                            srcset="/assets/media-assets/img/toybikes-cars.jpg">
                        <source media="(min-width: 451px)"
                            srcset="/assets/media-assets/img/toybikes-cars.jpg">
                        <source media="(max-width: 450px)"
                            srcset="/assets/media-assets/img/toybikes-cars.jpg">
                        <img src="/assets/media-assets/img/toybikes-cars.jpg"
                            alt="Ellis Toys Store NG" class="w-100 h-100 object-fit-cover">
                    </picture>
                </div>
                <div class="d-flex w-100 h-100 position-relative bring-forward left-to-right-trans-bg p-5 flex-column justify-content-center align-items-start">
                    <h4 class="display-7 fw-light gap-1">Ellis Toys Store <br /> <span class="fw-bold display-6 fw-bold">More fun equals<br> More Magic</span> </h4>
                    <div class="d-flex w-100 justify-content-start align-items-start flex-column gap-1 md-font">
                        <!--span class="text-start mb-0 sm-font">Interested in securing your spot at NFE 2027?</span-->
                        <span class="text-start mb-0 sm-font">We are always adding to our collection of amazing toys, <br />books and outdoor games and puzzle. Time to take trip to adventure land</span>
                        <a href="#" class="d-flex w-auto secondary-gradient-blur-bg btn fw-bold m-auto ms-0 mt-3"> Shop New Arrivals
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex pt-5 pb-5 flex-column">
        <div class="container justify-content-center flex-column">
            <div class="w-100 d-flex flex-column p-0 gap-5 full-radius pageSliderContainer">
                <div class="d-flex flex-row flex-wrap justify-content-between align-items-start p-0 webQ_ani"
                    data-animate="scale-up-center">
                    <div class="d-flex col-8 flex-column justify-content-center align-items-start m-auto ms-0">
                        <h4 class="display-7 mb-0">New Arrivals</h4>
                    </div>
                    <div class="d-flex col-4 flex-wrap">
                        <span
                            class="d-flex w-auto m-auto me-0 justify-content-center align-items-center flex-row flex-wrap gap-2 trackerCont newTrendingTrackerCont"></span>
                    </div>
                </div>
                <div class="pageSlider">
                    <div class="d-flex newTrendingSliderContainer flex-row p-0 gap-4">
                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/greenandcream-backpack-2-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Backpack</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Green and cream backpack</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 30,290</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/Childrens-Pretend-Play-Kitchen-set-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Toys</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Childrens pretend play kitchen set</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 18,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/Avengers-Hero-Warrior-Spider-Man-Action-Figure-600x800-2.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Action Figures</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Avengers Hero Warrior Spider Man Action Figure</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 9,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 newTrendingSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex pt-5 pb-5 flex-column webQ_ani" data-animate="fade-in-bottom">
        <div class="container justify-content-center mt-5 mb-3 d-flex gap-3 flex-column">
            <div class="d-flex flex-row flex-wrap justify-content-between align-items-start p-0 webQ_ani"
                data-animate="scale-up-center">
                <div class="d-flex col-8 flex-column justify-content-center align-items-start m-auto ms-0 gap-1">
                    <h4 class="mb-0 display-7 fw-bold">Shop By category</h4>
                </div>
                <div class="d-flex col-4 flex-wrap">
                </div>
            </div>

            <div class="col_4by4 w-100 p-0 gap-3">
                <div class="grid-item full-radius micro-card overflow-hidden dark border-0 p-0">
                    <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward anchor-hover-view">
                        <div class="d-flex flex-column p-3 w-100 justify-content-between align-items-start gap-3 overflow-hidden h-100">
                            <h5 class="fw-bold mb-0 display-7">Electric Big Toys Cars & bikes</h5>
                            <a href="#" class="btn primary visible-hover hover-effect fade-in-bottom m-auto ms-0 mb-0">shop now</a>
                        </div>
                    </div>
                    <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden accent">
                        <div class="d-flex col-6 h-100 justify-content-end bring-forward p-0 align-items-end">
                            <img src="/assets/media-assets/img/babies-category.png" alt="Electric Big Toys Cars & bikes" class="w-100 h-100 object-fit-cover">
                        </div>
                        <?php include __DIR__ . '/../config/icon-group.php' ?>
                    </div>
                </div>

                <div class="grid-item full-radius micro-card overflow-hidden primary border-0 p-0">
                    <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward anchor-hover-view">
                        <div class="d-flex flex-column p-3 w-100 justify-content-between align-items-start gap-3 overflow-hidden h-100">
                            <h5 class="fw-bold mb-0 display-7">Montesorri Toys</h5>
                            <a href="#" class="btn primary visible-hover hover-effect fade-in-bottom m-auto ms-0 mb-0">shop now</a>
                        </div>
                    </div>
                    <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden secondary">
                        <div class="d-flex col-6 h-100 justify-content-end bring-forward p-0 align-items-end">
                            <img src="/assets/media-assets/img/girl-category-2.png" alt="Montesorri Toys" class="w-100 h-100 object-fit-cover">
                        </div>
                        <?php include __DIR__ . '/../config/icon-group.php' ?>
                    </div>
                </div>

                <div class="grid-item full-radius micro-card overflow-hidden primary border-0 p-0">
                    <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward anchor-hover-view">
                        <div class="d-flex flex-column p-3 w-100 justify-content-between align-items-start gap-3 overflow-hidden h-100">
                            <h5 class="fw-bold mb-0 display-7">Books</h5>
                            <a href="#" class="btn primary visible-hover hover-effect fade-in-bottom m-auto ms-0 mb-0">shop now</a>
                        </div>
                    </div>
                    <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden alternate">
                        <div class="d-flex col-6 h-100 justify-content-end bring-forward p-0 align-items-end">
                            <img src="/assets/media-assets/img/excited-kid.png" alt="Books" class="w-100 h-100 object-fit-cover">
                        </div>
                        <?php include __DIR__ . '/../config/icon-group.php' ?>
                    </div>
                </div>

                <div class="grid-item full-radius micro-card overflow-hidden primary border-0 p-0">
                    <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward anchor-hover-view">
                        <div class="d-flex flex-column p-3 w-100 justify-content-between align-items-start gap-3 overflow-hidden h-100">
                            <h5 class="fw-bold mb-0 display-7">Educational Resources</h5>
                            <a href="#" class="btn primary visible-hover hover-effect fade-in-bottom m-auto ms-0 mb-0">shop now</a>
                        </div>
                    </div>
                    <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden tertiary">
                        <div class="d-flex col-6 h-100 justify-content-end bring-forward p-0 align-items-end">
                            <img src="/assets/media-assets/img/young-boy.png" alt="Educational Resources" class="w-100 h-100 object-fit-cover">
                        </div>
                        <?php include __DIR__ . '/../config/icon-group.php' ?>
                    </div>
                </div>

                <div class="grid-item full-radius micro-card overflow-hidden primary border-0 p-0">
                    <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward anchor-hover-view">
                        <div class="d-flex flex-column p-3 w-100 justify-content-between align-items-start gap-3 overflow-hidden h-100">
                            <h5 class="fw-bold mb-0 display-7">Games & Puzzles</h5>
                            <a href="#" class="btn primary visible-hover hover-effect fade-in-bottom m-auto ms-0 mb-0">shop now</a>
                        </div>
                    </div>
                    <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden primary-gradient-blur-bg">
                        <div class="d-flex col-6 h-100 justify-content-end bring-forward p-0 align-items-end">
                            <img src="/assets/media-assets/img/cute-girl-in-glasses.png" alt="Games & Puzzles" class="w-100 h-100 object-fit-cover">
                        </div>
                        <?php include __DIR__ . '/../config/icon-group.php' ?>
                    </div>
                </div>

                <div class="grid-item full-radius micro-card overflow-hidden dark border-0 p-0">
                    <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward anchor-hover-view">
                        <div class="d-flex flex-column p-3 w-100 justify-content-between align-items-start gap-3 overflow-hidden h-100">
                            <h5 class="fw-bold mb-0 display-7">Building sets & Blocks</h5>
                            <a href="#" class="btn primary visible-hover hover-effect fade-in-bottom m-auto ms-0 mb-0">shop now</a>
                        </div>
                    </div>
                    <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden accent">
                        <div class="d-flex col-6 h-100 justify-content-end bring-forward p-0 align-items-end">
                            <img src="/assets/media-assets/img/happy-teen.png" alt="Building sets & Blocks" class="w-100 h-100 object-fit-cover">
                        </div>
                        <?php include __DIR__ . '/../config/icon-group.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include __DIR__ . '/../config/swirl-box.php' ?>
    </section>

    <section class="d-flex pt-5 pb-5 flex-column">
        <div class="container justify-content-center mt-5 mb-3">
            <div class="d-flex flex-wrap w-100 p-0">
                <div class="col_3by3 w-100">
                    <div class="grid-item">
                        <div class="d-flex flex-column gap-3 w-100">
                            <div class="d-flex w-100 card-1 p-0 accent-gradient-blur-bg full-radius p-0 flex-wrap overflow-hidden">
                                <div class="d-flex w-100 border-0 flex-column overflow-hidden gap-2 p-4">
                                    <h1 class="mb-0 display-6 fw-bolder">Shopping has never been more fun and magical</h1>
                                    <p class="mb-0 sm-font fw-bold">we've got all the best stuff, our goal is to help you and your kids take the fun home with you</p>
                                    <a href="#" class="btn primary m-auto ms-0 mt-0 fw-bold">Show now</a>
                                </div>
                                <div class="d-flex send-backward w-100 flex-column overflow-hidden">
                                    <img src="/assets/media-assets/img/toy-box.webp" alt="Ellis Toy Store" class="w-100 h-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="d-flex flex-column gap-3 w-100">
                            <div class="d-flex w-100 card-1 p-0 primary-gradient-blur-bg full-radius p-0 flex-wrap overflow-hidden">
                                <div class="d-flex w-100 border-0 flex-column overflow-hidden gap-2 p-4">
                                    <h1 class="mb-0 display-6 fw-bolder">Shop cool musical instruments</h1>
                                    <p class="mb-0 sm-font fw-bold">beautiful tunes and sweet melodies? we have just what you need</p>
                                    <a href="#" class="btn primary m-auto ms-0 mt-0 fw-bold">Show now</a>
                                </div>
                                <div class="d-flex send-backward w-100 flex-column overflow-hidden">
                                    <img src="/assets/media-assets/img/musicals.webp" alt="Ellis Toy Store" class="w-100 h-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="d-flex flex-column gap-3 w-100">
                            <div class="d-flex w-100 card-1 p-0 tertiary-gradient-blur-bg full-radius p-0 flex-wrap overflow-hidden">
                                <div class="d-flex w-100 border-0 flex-column overflow-hidden gap-2 p-4">
                                    <h1 class="mb-0 display-6 fw-bolder">Ready, Mount and Ride</h1>
                                    <p class="mb-0 sm-font fw-bold">shop beautiful, strong and lasting bikes for kids</p>
                                    <a href="#" class="btn primary m-auto ms-0 mt-0 fw-bold">Show now</a>
                                </div>
                                <div class="d-flex send-backward w-100 flex-column overflow-hidden">
                                    <img src="/assets/media-assets/img/power-bike.png" alt="Ellis Toy Store" class="w-100 h-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex pt-5 pb-5 flex-column">
        <div class="container justify-content-center flex-column">
            <div class="w-100 d-flex flex-column p-0 gap-5 full-radius pageSliderContainer">
                <div class="d-flex flex-row flex-wrap justify-content-between align-items-start p-0 webQ_ani"
                    data-animate="scale-up-center">
                    <div class="d-flex col-8 flex-column justify-content-center align-items-start m-auto ms-0">
                        <h4 class="display-7 mb-0">Top Sellers</h4>
                    </div>
                    <div class="d-flex col-4 flex-wrap">
                        <span
                            class="d-flex w-auto m-auto me-0 justify-content-center align-items-center flex-row flex-wrap gap-2 trackerCont topSellerTrackerCont"></span>
                    </div>
                </div>
                <div class="pageSlider">
                    <div class="d-flex topSellerSliderContainer flex-row p-0 gap-4">
                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/greenandcream-backpack-2-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Backpack</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Green and cream backpack</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 30,290</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/Childrens-Pretend-Play-Kitchen-set-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Toys</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Childrens pretend play kitchen set</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 18,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/Avengers-Hero-Warrior-Spider-Man-Action-Figure-600x800-2.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Action Figures</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Avengers Hero Warrior Spider Man Action Figure</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 9,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 topSellerSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex primary overflow-hidden">
        <div class="container d-flex flex-column pt-5 pb-5">
            <div class="d-flex w-100 overflow-hidden card primary border-0 full-radius position-relative mt-5 mb-5 dark">
                <div class="background-container card border-0">
                    <picture class="w-100 h-100 object-fit-cover">
                        <source media="(min-width: 770px)"
                            srcset="/assets/media-assets/img/pretend play-toys.jpg">
                        <source media="(min-width: 451px)"
                            srcset="/assets/media-assets/img/pretend play-toys.jpg">
                        <source media="(max-width: 450px)"
                            srcset="/assets/media-assets/img/pretend play-toys.jpg">
                        <img src="/assets/media-assets/img/pretend play-toys.jpg"
                            alt="Ellis Toys Store NG" class="w-100 h-100 object-fit-cover">
                    </picture>
                </div>
                <div class="d-flex w-100 h-100 position-relative bring-forward left-to-right-trans-bg p-5 flex-column justify-content-center align-items-start">
                    <h4 class="display-7 fw-light gap-1">Pretend Playtime <br /> <span class="fw-bold display-6 fw-bold">Let your imagination <br /> take you places</span> </h4>
                    <div class="d-flex w-100 justify-content-start align-items-start flex-column gap-1 md-font">
                        <span class="text-start mb-0 sm-font">From castles to kitchens and more <br />let your imagination come alive with our. Let's build a special world together</span>
                        <a href="#" class="d-flex w-auto secondary-gradient-blur-bg btn fw-bold m-auto ms-0 mt-3">Shop now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex pt-5 pb-5 flex-column">
        <div class="d-flex w-100 position-relative bring-forward flex-column">
            <div class="container justify-content-center mt-5 mb-3">
                <div class="d-flex flex-row flex-wrap justify-content-between align-items-start p-0 webQ_ani"
                    data-animate="scale-up-center">
                    <div class="d-flex col-8 flex-column justify-content-center align-items-start m-auto ms-0 gap-1">
                        <h4 class="mb-0 display-7 fw-bold">Shop By Age</h4>
                    </div>
                    <div class="d-flex col-4 flex-wrap">
                        <span
                            class="d-flex w-auto m-auto me-0 justify-content-center align-items-center flex-row flex-wrap gap-2 trackerCont shopByAgeTrackerCont"></span>
                    </div>
                </div>
            </div>
            <div class="pageSlider">
                <div class="d-flex shopByAgeSliderContainer flex-row p-0 gap-3">
                    <div class="d-flex flex-column overflow-hidden lg-sliderBox-1 shopByAgeSlider full-radius card dark border-0 p-0">
                        <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward">
                            <div class="d-flex flex-column p-4 w-100 justify-content-start align-items-start gap-0 overflow-hidden">
                                <h5 class="fw-bold mb-0 display-6">0-2</h5>
                                <p class="md-font m-0">years</p>
                            </div>
                        </div>
                        <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden accent">
                            <div class="d-flex w-100 h-100 justify-content-end bring-forward p-5 pb-0 pe-0 align-items-end">
                                <img src="/assets/media-assets/img/babies-category.png" alt="Kate Henshaw" class="w-100 h-100 object-fit-cover">
                            </div>
                            <?php include __DIR__ . '/../config/icon-group.php' ?>
                        </div>
                    </div>

                    <div class="d-flex flex-column overflow-hidden lg-sliderBox-1 shopByAgeSlider full-radius card primary border-0 p-0">
                        <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward">
                            <div class="d-flex flex-column p-4 w-100 justify-content-start align-items-start gap-0 overflow-hidden">
                                <h5 class="fw-bold mb-0 display-6">3-4</h5>
                                <p class="md-font m-0">years</p>
                            </div>
                        </div>
                        <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden secondary">
                            <div class="d-flex w-100 h-100 justify-content-end bring-forward p-5 pb-0 pe-0 align-items-end">
                                <img src="/assets/media-assets/img/girl-category-2.png" alt="Kate Henshaw" class="w-100 h-100 object-fit-cover">
                            </div>
                            <?php include __DIR__ . '/../config/icon-group.php' ?>
                        </div>
                    </div>

                    <div class="d-flex flex-column overflow-hidden lg-sliderBox-1 shopByAgeSlider full-radius card primary border-0 p-0">
                        <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward">
                            <div class="d-flex flex-column p-4 w-100 justify-content-start align-items-start gap-0 overflow-hidden">
                                <h5 class="fw-bold mb-0 display-6">5-7</h5>
                                <p class="md-font m-0">years</p>
                            </div>
                        </div>
                        <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden alternate">
                            <div class="d-flex w-100 h-100 justify-content-end bring-forward p-5 pb-0 pe-0 align-items-end">
                                <img src="/assets/media-assets/img/excited-kid.png" alt="Kate Henshaw" class="w-100 h-100 object-fit-cover">
                            </div>
                            <?php include __DIR__ . '/../config/icon-group.php' ?>
                        </div>
                    </div>

                    <div class="d-flex flex-column overflow-hidden lg-sliderBox-1 shopByAgeSlider full-radius card primary border-0 p-0">
                        <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward">
                            <div class="d-flex flex-column p-4 w-100 justify-content-start align-items-start gap-0 overflow-hidden">
                                <h5 class="fw-bold mb-0 display-6">8-10</h5>
                                <p class="md-font m-0">years</p>
                            </div>
                        </div>
                        <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden tertiary">
                            <div class="d-flex w-100 h-100 justify-content-end bring-forward p-5 pb-0 pe-0 align-items-end">
                                <img src="/assets/media-assets/img/young-boy.png" alt="Kate Henshaw" class="w-100 h-100 object-fit-cover">
                            </div>
                            <?php include __DIR__ . '/../config/icon-group.php' ?>
                        </div>
                    </div>

                    <div class="d-flex flex-column overflow-hidden lg-sliderBox-1 shopByAgeSlider full-radius card primary border-0 p-0">
                        <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward">
                            <div class="d-flex flex-column p-4 w-100 justify-content-start align-items-start gap-0 overflow-hidden">
                                <h5 class="fw-bold mb-0 display-6">11-12</h5>
                                <p class="md-font m-0">years</p>
                            </div>
                        </div>
                        <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden primary-gradient-blur-bg">
                            <div class="d-flex w-100 h-100 justify-content-end bring-forward p-5 pb-0 pe-0 align-items-end">
                                <img src="/assets/media-assets/img/cute-girl-in-glasses.png" alt="Kate Henshaw" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="ui-icons-page-elem-container send-backward">
                                <span class="material-symbols-outlined">
                                    child_care
                                </span>
                                <span class="material-symbols-outlined">
                                    toys
                                </span>
                                <span class="material-symbols-outlined">
                                    child_friendly
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_fan
                                </span>
                                <span class="material-symbols-outlined">
                                    child_hat
                                </span>
                                <span class="material-symbols-outlined">
                                    playground
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_and_games
                                </span>
                                <span class="material-symbols-outlined">
                                    brick
                                </span>
                                <span class="material-symbols-outlined">
                                    stroller
                                </span>
                                <span class="material-symbols-outlined">
                                    kid_star
                                </span>
                                <span class="material-symbols-outlined">
                                    crib
                                </span>
                                <span class="material-symbols-outlined">
                                    high_chair
                                </span>
                                <span class="material-symbols-outlined">
                                    pediatrics
                                </span>
                                <span class="material-symbols-outlined">
                                    smart_toy
                                </span>
                                <span class="material-symbols-outlined">
                                    playing_cards
                                </span>
                                <span class="material-symbols-outlined">
                                    robot
                                </span>
                                <span class="material-symbols-outlined">
                                    joystick
                                </span>
                                <span class="material-symbols-outlined">
                                    gamepad
                                </span>
                                <span class="material-symbols-outlined">
                                    celebration
                                </span>
                                <span class="material-symbols-outlined">
                                    roller_skating
                                </span>
                                <span class="material-symbols-outlined">
                                    sports_and_outdoors
                                </span>
                                <span class="material-symbols-outlined">
                                    festival
                                </span>
                                <span class="material-symbols-outlined">
                                    icecream
                                </span>
                                <span class="material-symbols-outlined">
                                    pool
                                </span>
                                <span class="material-symbols-outlined">
                                    attractions
                                </span>
                                <span class="material-symbols-outlined">
                                    joystick
                                </span>
                                <span class="material-symbols-outlined">
                                    gamepad
                                </span>
                                <span class="material-symbols-outlined">
                                    celebration
                                </span>
                                <span class="material-symbols-outlined">
                                    roller_skating
                                </span>
                                <span class="material-symbols-outlined">
                                    sports_and_outdoors
                                </span><span class="material-symbols-outlined">
                                    child_care
                                </span>
                                <span class="material-symbols-outlined">
                                    toys
                                </span>
                                <span class="material-symbols-outlined">
                                    child_friendly
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_fan
                                </span>
                                <span class="material-symbols-outlined">
                                    child_hat
                                </span>
                                <span class="material-symbols-outlined">
                                    playground
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_and_games
                                </span>
                                <span class="material-symbols-outlined">
                                    brick
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column overflow-hidden lg-sliderBox-1 shopByAgeSlider full-radius card primary border-0 p-0">
                        <div class="d-flex flex-column justify-content-start align-items-center w-100 p-3 h-100 bring-forward">
                            <div class="d-flex flex-column p-4 w-100 justify-content-start align-items-start gap-0 overflow-hidden">
                                <h5 class="fw-bold mb-0 display-6">13+</h5>
                                <p class="md-font m-0">years</p>
                            </div>
                        </div>
                        <div class="position-absolute w-100 h-100 top-0 left-0 send-backward p-0 justify-content-end align-items-end d-flex full-radius overflow-hidden accent-gradient-blur-bg">
                            <div class="d-flex w-100 h-100 justify-content-end bring-forward p-5 pb-0 pe-0 align-items-end">
                                <img src="/assets/media-assets/img/happy-teen.png" alt="Kate Henshaw" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="ui-icons-page-elem-container send-backward">
                                <span class="material-symbols-outlined">
                                    child_care
                                </span>
                                <span class="material-symbols-outlined">
                                    toys
                                </span>
                                <span class="material-symbols-outlined">
                                    child_friendly
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_fan
                                </span>
                                <span class="material-symbols-outlined">
                                    child_hat
                                </span>
                                <span class="material-symbols-outlined">
                                    playground
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_and_games
                                </span>
                                <span class="material-symbols-outlined">
                                    brick
                                </span>
                                <span class="material-symbols-outlined">
                                    stroller
                                </span>
                                <span class="material-symbols-outlined">
                                    kid_star
                                </span>
                                <span class="material-symbols-outlined">
                                    crib
                                </span>
                                <span class="material-symbols-outlined">
                                    high_chair
                                </span>
                                <span class="material-symbols-outlined">
                                    pediatrics
                                </span>
                                <span class="material-symbols-outlined">
                                    smart_toy
                                </span>
                                <span class="material-symbols-outlined">
                                    playing_cards
                                </span>
                                <span class="material-symbols-outlined">
                                    robot
                                </span>
                                <span class="material-symbols-outlined">
                                    joystick
                                </span>
                                <span class="material-symbols-outlined">
                                    gamepad
                                </span>
                                <span class="material-symbols-outlined">
                                    celebration
                                </span>
                                <span class="material-symbols-outlined">
                                    roller_skating
                                </span>
                                <span class="material-symbols-outlined">
                                    sports_and_outdoors
                                </span>
                                <span class="material-symbols-outlined">
                                    festival
                                </span>
                                <span class="material-symbols-outlined">
                                    icecream
                                </span>
                                <span class="material-symbols-outlined">
                                    pool
                                </span>
                                <span class="material-symbols-outlined">
                                    attractions
                                </span>
                                <span class="material-symbols-outlined">
                                    joystick
                                </span>
                                <span class="material-symbols-outlined">
                                    gamepad
                                </span>
                                <span class="material-symbols-outlined">
                                    celebration
                                </span>
                                <span class="material-symbols-outlined">
                                    roller_skating
                                </span>
                                <span class="material-symbols-outlined">
                                    sports_and_outdoors
                                </span><span class="material-symbols-outlined">
                                    child_care
                                </span>
                                <span class="material-symbols-outlined">
                                    toys
                                </span>
                                <span class="material-symbols-outlined">
                                    child_friendly
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_fan
                                </span>
                                <span class="material-symbols-outlined">
                                    child_hat
                                </span>
                                <span class="material-symbols-outlined">
                                    playground
                                </span>
                                <span class="material-symbols-outlined">
                                    toys_and_games
                                </span>
                                <span class="material-symbols-outlined">
                                    brick
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include __DIR__ . '/../config/swirl-box.php' ?>
    </section>


    <section class="d-flex pt-5 pb-5 flex-column">
        <div class="container justify-content-center flex-column">
            <div class="w-100 d-flex flex-column p-0 gap-5 full-radius pageSliderContainer">
                <div class="d-flex flex-row flex-wrap justify-content-between align-items-start p-0 webQ_ani"
                    data-animate="scale-up-center">
                    <div class="d-flex col-8 flex-column justify-content-center align-items-start m-auto ms-0">
                        <h4 class="display-7 mb-0">Best Deals</h4>
                    </div>
                    <div class="d-flex col-4 flex-wrap">
                        <span
                            class="d-flex w-auto m-auto me-0 justify-content-center align-items-center flex-row flex-wrap gap-2 trackerCont dealsTrackerCont"></span>
                    </div>
                </div>
                <div class="pageSlider">
                    <div class="d-flex dealsSliderContainer flex-row p-0 gap-4">
                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/greenandcream-backpack-2-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Backpack</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Green and cream backpack</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 30,290</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/Childrens-Pretend-Play-Kitchen-set-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Toys</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Childrens pretend play kitchen set</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 18,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/Avengers-Hero-Warrior-Spider-Man-Action-Figure-600x800-2.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Action Figures</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Avengers Hero Warrior Spider Man Action Figure</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 9,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column overflow-hidden lg-sliderBox-2 dealsSlider card-1 d-1 p-0 cart-item anchor-hover-view">
                            <div class=" d-flex flex-column justify-content-between align-items-center w-100 p-0 h-100 bring-forward primary">
                                <div class="visible-hover position-absolute bring-forward top-0 right-0 col-12 col-md-6 flex-column justify-content-center align-items-center gap-3 product-action-list">
                                    <i class="bi bi-eye shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-heart shwProfile" data-fetch="preview-product"></i>
                                    <i class="bi bi-search shwProfile" data-fetch="preview-product"></i>
                                </div>
                                <div class="d-flex w-100 mini-card p-0 justify-content-center align-items-center overflow-hidden radius img-container">
                                    <img src="/assets/media-assets/img/self-balancing-hoverboard-in-a-pink-camouflage-pattern-600x800.jpeg" alt="">
                                </div>
                                <div class="d-flex flex-column p-0 w-100 justify-content-center align-items-center gap-1 overflow-hidden">
                                    <a href="#">
                                        <p class="x-sm-font fw-bold mb-0 text-center">Hover board</p>
                                    </a>
                                    <a href="#">
                                        <span class="item-name mb-0 text-center">Self Balancing hoverboard in pink camouflage</span>
                                    </a>
                                    <h4 class="m-0 text-center"><span class="sm-font">&#8358;</span> 270,000</h4>
                                    <a href="" class="btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dark d-flex pt-5 pb-5 overflow-hidden">
        <div class="container d-flex flex-column gap-5 mt-5 mb-5 justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center col-12 col-md-6 flex-wrap">
                <h4 class="display-6 text-center mb-0">Your one-stop spot for Kids Toys and more</h4>
            </div>
            <div class="col_4by4 w-100">
                <div class="grid-item">
                    <div class="d-flex flex-column w-100 gap-1 jusitfy-content-start trans-bg micro-card full-radius  p-5 align-items-start">
                        <i class="bi bi-truck display-6 m-auto mb-0 mt-0 ms-0 text-gradient accent-text-gradient"></i>
                        <p class="display-7 mb-0 text-start">Fast Shipping & Delivery</p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="d-flex flex-column w-100 gap-1 jusitfy-content-start trans-bg micro-card full-radius p-5 align-items-start">
                        <i class="bi bi-person display-6 m-auto mb-0 mt-0 ms-0 text-gradient accent-text-gradient"></i>
                        <p class="display-7 mb-0 text-start">Excellent Customer Service</p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="d-flex flex-column w-100 gap-1 jusitfy-content-start trans-bg micro-card full-radius p-5 align-items-start">
                        <i class="bi bi-palette display-6 m-auto mb-0 mt-0 ms-0 text-gradient accent-text-gradient"></i>
                        <p class="display-7 mb-0 text-start">The Latest Toys</p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="d-flex flex-column w-100 gap-1 jusitfy-content-start trans-bg micro-card full-radius p-5 align-items-start">
                        <i class="bi bi-star display-6 m-auto mb-0 mt-0 ms-0 text-gradient accent-text-gradient"></i>
                        <p class="display-7 mb-0 text-start">5 Star Reputation</p>
                    </div>
                </div>
            </div>

            <img src="/assets/media-assets/img/logo.PNG" alt="Ellis Toy Store"
                class="d-flex logo w-auto m-auto black_white">
        </div>

        <?php include __DIR__ . '/../config/icon-group-big.php'; ?>
    </section>
    <?php include __DIR__ . '/../config/footer.php'; ?>
    <?php include __DIR__ . '/../config/mobile-menu.php'; ?>
    <?php include __DIR__ . '/../config/cart.php'; ?>
    <?php include __DIR__ . '/../config/whatsapp-connect.php'; ?>
</body>

</html>