<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Clause - Payment API Integration Project</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/345587e4ce.js" crossorigin="anonymous"></script>

</head>
<?php

            $cust_id ="CC1078";
            $amount=4000;
    ?>
<body>


    <section class="wrap" style="background-image: url(img/body-img.png);">
        <!-- nav bar start -->
        <nav class="navbar navbar-expand-lg ms-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="img/codeclause.png" class="img-fluid ml-5 logo"
                        alt="CodeClause"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="nav-btn"></span>
                </button>
                <div class="collapse navbar-collapse ml-25" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#course">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#course">Service</a>
                        </li>

                        <li class="nav-item pe-2">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                    </ul>
                </div>
                <span class="me-4"><i class="fa-solid fa-user me-1"></i>CC1078</span>
            </div>
        </nav>
        
        <!-- nav bar end  -->
        <div class="row ms-4 mt-30 main-row">
            <div class="col-5 main-col">
                <h6 class="text-light">WELCOME TO CodeClause</h6>
                <h2>Best Online Education <br> Expertise</h2>
                <p class="text-light mob-res">Far far away, behind the word mountains, far from the countries Vokalia
                    and Consonantia, there live the blind texts.</p>
                <div class="btn-div">
                    <a href="#course" role="button" class="main-col-btn-1 btn">GET STARTED NOW!</a>
                    <a href="#course" role="button" class="main-col-btn-2 btn aqua-text ms-4">VIEW COURSE</a>
                </div>
            </div>
        </div>
    </section>


    <main id="course">
        <h4 class="text-center aqua-text mt-4">OUR COURSES</h4>
        <h2 class="text-center text-dark">Explore Our Popular Online Courses</h2>
        <div class="my-container">
            <div class="row card-section">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-img-1.png" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Basic Fundamentals for Software Engineering</h5>
                            <p class="text-muted">by John <span class="aqua-text"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
                            <div class="container-fluid card-price aqua-text">
                                <p class="ms-3">Rs.4000 All Course</p>
                            </div>
                            <!-- <a href="#" class="btn mt-2 btn-primary btn-block card-btn">Enroll Now</a> -->
                            <form method="post" action="PaytmKit/pgRedirect.php">
                                <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                                    autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999);?>">
                                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="<?php echo  $cust_id?>">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB">
                                <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="4000">
                                <input value="Enroll Now" type="submit" onclick="" class="btn mt-2 btn-primary btn-block card-btn">
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-img-2.png" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HTML, CSS, and Javascript for Web Developers</h5>
                            <p class="text-muted">by John Singh <span class="aqua-text"><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i></span></p>
                            <div class="container-fluid card-price aqua-text">
                                <p class="ms-3">Rs.4000 All Course</p>
                            </div>
                            <!-- <a href="#" class="btn mt-2 btn-primary btn-block card-btn">Enroll Now</a> -->
                            <form method="post" action="PaytmKit/pgRedirect.php">
                                <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                                    autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999);?>">
                                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="<?php echo  $cust_id?>">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB">
                                <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="4000">
                                <input value="Enroll Now" type="submit" onclick="" class="btn mt-2 btn-primary btn-block card-btn">
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-img-3.png" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Full Stack Java Developer</h5>
                            <p class="text-muted">by Mark <span class="aqua-text"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
                            <div class="container-fluid card-price aqua-text">
                                <p class="ms-3">Rs.4000 All Course</p>

                            </div>
                            <!-- <a href="#" class="btn mt-2 btn-primary btn-block card-btn">Enroll Now</a> -->
                            <form method="post" action="PaytmKit/pgRedirect.php">
                                <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                                    autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999);?>">
                                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="<?php echo  $cust_id?>">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB">
                                <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="4000">
                                <input value="Enroll Now" type="submit" onclick="" class="btn mt-2 btn-primary btn-block card-btn">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row card-section mt-4">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-img-4.png" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Certification Program in Artificial Intelligence</h5>
                            <p class="text-muted">by Eleon <span class="aqua-text"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
                            <div class="container-fluid card-price aqua-text">
                                <p class="ms-3">Rs.4000 All Course</p>
                            </div>
                            <!-- <a href="#" class="btn mt-2 btn-primary btn-block card-btn">Enroll Now</a> -->
                            <form method="post" action="PaytmKit/pgRedirect.php">
                                <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                                    autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999);?>">
                                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="<?php echo  $cust_id?>">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB">
                                <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="4000">
                                <input value="Enroll Now" type="submit" onclick="" class="btn mt-2 btn-primary btn-block card-btn">
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-img-5.png" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Start a career in Data Science</h5>
                            <p class="text-muted">by Ravi Verma <span class="aqua-text"><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i></span></p>
                            <div class="container-fluid card-price aqua-text">
                                <p class="ms-3">Rs.4000 All Course</p>
                            </div>
                            <!-- <a href="#" class="btn mt-2 btn-primary btn-block card-btn">Enroll Now</a> -->
                            <form method="post" action="PaytmKit/pgRedirect.php">
                                <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                                    autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999);?>">
                                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="<?php echo  $cust_id?>">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB">
                                <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="4000">
                                <input value="Enroll Now" type="submit" onclick="" class="btn mt-2 btn-primary btn-block card-btn">
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-img-6.png" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Introduction to Cyber Security</h5>
                            <p class="text-muted">by Mark <span class="aqua-text"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
                            <div class="container-fluid card-price aqua-text">
                                <p class="ms-3">Rs.4000 All Course</p>


                            </div>
                            <!-- <a href="#" class="btn mt-2 btn-primary btn-block card-btn">Enroll Now</a> -->
                            <form method="post" action="PaytmKit/pgRedirect.php">
                                <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                                    autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999);?>">
                                <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID"
                                    autocomplete="off" value="<?php echo  $cust_id?>">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                                    name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                    autocomplete="off" value="WEB">
                                <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="4000">
                                <input value="Enroll Now" type="submit" onclick="" class="btn mt-2 btn-primary btn-block card-btn">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-4" id="footer">
        <div class="container">
            <div class="row ms-2">
                <div class="col-md-4 mt-4">
                    <h3 class="text-dark">CodeClause</h3>
                    <p class="aqua-text">ONLINE EDUCATION & LEARNING</p>

                </div>
                <div class="col-md-4 mt-4">
                    <h3 class="aqua-text">Service</h3>
                    <p>Data & Analytics</p>
                    <p>Internet of Things (IoT)</p>
                    <p>Software Development</p>
                    <p>Web Development</p>

                </div>
                <div class="col-md-4 mt-4">
                    <h3 class="aqua-text">Have a Questions?</h3>
                    <p class="mt-4">
                    <p><span class="aqua-text me-2"><i class="fa-solid fa-location-dot"></i></span> 203 Fake St.
                        Mountain View, San Francisco, California, USA</p>
                    </p>
                    <p class="mt-2">
                    <p><span class="aqua-text me-2"><i class="fa-solid fa-phone"></i></span> +2 392 3929 210
                    </p>
                    </p>
                    <p class="mt-2">
                    <p><span class="aqua-text me-2"><i class="fa-brands fa-telegram"></i></span>info@codeclause.com</p>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>