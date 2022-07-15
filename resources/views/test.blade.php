<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/bootstrap.min.css')
    @vite('resources/css/style.css')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Проффесор</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navigation">
            <div class="container">
               <div class="logo-block">
                  <a class="navbar-brand" href="http://developertester.in/rate-your-professor/"><img src="../../images/logo.png"
                        alt="logo"></a>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                  aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
               </button>
               <div class="collapse navbar-collapse nav-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav">
                     <li class="nav-item logo-box">
                        <a class="login" href="#">login</a>
                     </li>
                     <li class="nav-item border-none">
                        <a class="login sign-up" href="#">signup</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
    </header>
    <section class="banner">
        <!----banner-->
        <div class="container">
            <!----container---->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-content">
                        <ul class="breadcrumb bnr-list">
                            <li><a href="#"><strong>Home</strong></a></li>
                            <li><a href="#">Review</a></li>
                        </ul>
                        <h4>Offer users the ability to lookup </h4>
                        <h1>Reviews of college professors and secondary school teachers</h1>
                        <div class="row select-option-div">
                            <div class=" col-md-12">
                                <form class="Form-block">
                                    <div class="select-box">
                                        <select title="Pick a number" class="selectpicker">
                                            <option>All Categories</option>
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </select>
                                    </div>
                                    <div class="input-group Search-box">
                                        <input type="text" class="form-control"
                                            placeholder="Search Teachers/Schools...">
                                        <div class="input-group-append Search-icon">
                                            <button class="search-btn" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----banner-->
    <section class="grading-section">
        <div class="container">
            <h2 class="border-gray">Stephne Benaroya </h2>
            <div class="row grading-row">
                <div class="col-md-4 gray-col">
                    <div class="gray-box">
                        <h4>Overall Grade</h4>
                        <p class="blue">B+</p>
                        <img class="star" src="../../images/star.png" alt="stars">
                        <p class="smal-para">Based on 40 reviews</p>
                    </div>
                    <p class="Correction">I’m Stephne Benaroya
                        Submit a Correction
                    </p>
                </div>
                <div class="col-md-8 progress-col">
                    <div class="wrapper-progress">
                        <div class="top-num-option">
                            <p>0.0</p>
                            <p>1.0</p>
                            <p>1.0</p>
                            <p>3.0</p>
                            <p>4.0</p>
                            <p>5.0</p>
                        </div>
                        <div class="progress-block">
                            <div class="progress-content">
                                <h5>overall</h5>
                            </div>
                            <div class="progress progress-style">
                                <div class="progress-bar" style="width:70%"></div>
                            </div>
                            <div class="progress-content-right">
                                <h5><span class="b-red">B+ </span><span class="numeric-l">(3.3)</span></h5>
                            </div>
                        </div>
                        <div class="progress-block">
                            <div class="progress-content">
                                <h5>Clarity</h5>
                            </div>
                            <div class="progress progress-style">
                                <div class="progress-bar" style="width:85%"></div>
                            </div>
                            <div class="progress-content-right">
                                <h5><span class="b-red">C+</span><span class="numeric-l">(2.2)</span></h5>
                            </div>
                        </div>
                        <div class="progress-block">
                            <div class="progress-content">
                                <h5>Availability</h5>
                            </div>
                            <div class="progress progress-style">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <div class="progress-content-right">
                                <h5><span class="b-red">A </span><span class="numeric-l">(4.4)</span></h5>
                            </div>
                        </div>
                        <div class="progress-block">
                            <div class="progress-content">
                                <h5>Knowledgeability</h5>
                            </div>
                            <div class="progress progress-style">
                                <div class="progress-bar" style="width:68%"></div>
                            </div>
                            <div class="progress-content-right">
                                <h5><span class="b-red">b</span><span class="numeric-l">(3.2)</span></h5>
                            </div>
                        </div>
                        <div class="not-challenging">
                            <div class="top-num-option">
                                <h5>Not Challenging</h5>
                                <h5>Very Challenging</h5>
                            </div>
                            <div class="progress-block">
                                <div class="progress-content">
                                    <h5>Challenging?</h5>
                                </div>
                                <div class="progress progress-style">
                                    <div class="progress-bar" style="width:30%"></div>
                                </div>
                                <div class="progress-content-right">
                                    <h5><span class="check"><img src="../../images/check-copy.png" alt="check"></span><span
                                            style="padding-left: 11px;" class="numeric-l">(2.9) / 5.0</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="not-challenging">
                            <div class="top-num-option">
                                <h5>Not Challenging</h5>
                                <h5> Definitely Recommended</h5>
                            </div>
                            <div class="progress-block">
                                <div class="progress-content">
                                    <h5>Recommended?
                                    </h5>
                                </div>
                                <div class="progress progress-style">
                                    <div class="progress-bar" style="width:74%"></div>
                                </div>
                                <div class="progress-content-right">
                                    <h5><span class="check"><img src="../../images/check-copy.png" alt="check"></span><span
                                            style="padding-left: 11px;" class="numeric-l">(2.9) / 5.0</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Upper-box-progrss-end--------->
            </div>
    </section>
    <section class="rating-section">
        <div class="container">
            <div class="row border-gray rating-b">
                <!---row---->
                <div class="col-md-6 left-box">
                    <h3>40 Student Ratings</h3>
                </div>
                <div class="col-md-6 right-box">
                    <div class="drop-select">
                        <select title="Pick a number" class="course-pic">
                            <option>All Courses</option>
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/green.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Melissa</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <div class="like-users">
                                <a href="#"><i class="fa fa-thumbs-up"></i> <span class="numeric">2,</span>000</a>
                                <a class="thum-border" href="#"><i class="fa fa-thumbs-down"></i> <span class="numeric">
                                        2,</span>000 </a>
                            </div>
                            <!-- <img class="thumbs"src="../../images/thumbs.png" alt="thumbs"> -->
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/irabge.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Jmohn Bernier</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <div class="like-users">
                                <a href="#"><i class="fa fa-thumbs-up"></i> <span class="numeric">2,</span>000</a>
                                <a class="thum-border" href="#"><i class="fa fa-thumbs-down"></i> <span class="numeric">
                                        2,</span>000 </a>
                            </div>
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/green.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Melissa</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <img class="thumbs" src="../../images/thumbs.png" alt="thumbs">
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/irabge.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Jmohn Bernier</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <div class="like-users">
                                <a href="#"><i class="fa fa-thumbs-up"></i> <span class="numeric">2,</span>000</a>
                                <a class="thum-border" href="#"><i class="fa fa-thumbs-down"></i> <span class="numeric">
                                        2,</span>000 </a>
                            </div>
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/green.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Melissa</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <div class="like-users">
                                <a href="#"><i class="fa fa-thumbs-up"></i> <span class="numeric">2,</span>000</a>
                                <a class="thum-border" href="#"><i class="fa fa-thumbs-down"></i> <span class="numeric">
                                        2,</span>000 </a>
                            </div>
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/irabge.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Jmohn Bernier</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <div class="like-users">
                                <a href="#"><i class="fa fa-thumbs-up"></i> <span class="numeric">2,</span>000</a>
                                <a class="thum-border" href="#"><i class="fa fa-thumbs-down"></i> <span class="numeric">
                                        2,</span>000 </a>
                            </div>
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/green.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Melissa</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <div class="like-users">
                                <a href="#"><i class="fa fa-thumbs-up"></i> <span class="numeric">2,</span>000</a>
                                <a class="thum-border" href="#"><i class="fa fa-thumbs-down"></i> <span class="numeric">
                                        2,</span>000 </a>
                            </div>
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="row rating-grid">
                <!---row---->
                <div class="col-md-1"><img class="profile-dp" src="../../images/irabge.png">
                </div>
                <div class="col-md-11  profil-content">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="content-inner-date">
                                <h4>Jmohn Bernier</h4>
                                <div class="rviw-date">
                                    <img class="star-start" src="../../images/review-star.png" alt="stars">
                                    <p class="date">17 March 2022</p>
                                </div>
                            </div>
                            <div class="like-users">
                                <a href="#"><i class="fa fa-thumbs-up"></i> <span class="numeric">2,</span>000</a>
                                <a class="thum-border" href="#"><i class="fa fa-thumbs-down"></i> <span class="numeric">
                                        2,</span>000 </a>
                            </div>
                        </div>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken. In addition, Professor Benaroya is kind and
                            flexible. If you want a professor who will help you after the course is finished, sign up
                            for his
                            class.</p>
                    </div>
                </div>
            </div>
            <div class="blue-button">
                <a class="blue-btn" href="#">Load More Ratings</a>
            </div>
        </div>
    </section>
    <!--blog-start-------->
    <section class="game-section">
        <div class="container">
            <div class="game-box">
                <div class="blog-wrap"><a href="#"><img width="100%" src="../../images/get-game.jpg" alt="game"></a></div>
                <a href="#">
                    <div class="blog-post">
                        <h4>Get Game Ready | Best Deals & Offers On Electronics | Croma</h4>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="post-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="post-blog">
                        <div class="blog-wrap">
                            <a href="#"><img src="../../images/system.jpg" alt="system"></a>
                        </div>
                        <a href="#">
                            <div class="blog-content">
                                <h4>Unslod Laptop Are Being Sold for Almost Nathing</h4>
                                <p class="graya-para">laptops | Search Ads</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post-blog">
                        <div class="blog-wrap"><a href="#"><img src="../../images/job.jpg" alt="system"></a></div>
                        <a href="#">
                            <div class="blog-content">
                                <h4>Unslod Laptop Are Being Sold for Almost Nathing</h4>
                                <p class="graya-para">laptops | Search Ads</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <section class="game-section crom-section">
        <div class="container">
            <div class="game-box">
                <div class="blog-wrap"><a href="#"><img width="100%" src="../../images/croma-get.jpg" alt="game"></a></div>
                <a href="#">
                    <div class="blog-post">
                        <h4>Get Game Ready | Best Deals & Offers On Electronics | Croma</h4>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="game-section last-section">
        <div class="container">
            <div class="game-box">
                <div class="blog-wrap"><a href="#"><img width="100%" src="../../images/croma.jpg" alt="game"></a></div>
                <a href="#">
                    <div class="blog-post">
                        <h4>Get Game Ready | Best Deals & Offers On Electronics | Croma</h4>
                        <p>A very nice professor who teaches you practical business skills. I would say this is one of
                            the
                            most useful college courses I have ever taken.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <footer class="footer">
        <!---footer---->
        <div class="container">
            <div class="row">
                <div class="col-md-6 copy-left">
                    <p>© 2022 Professor Grades, Inc. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 socil-right">
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    @vite('resources/js/bootstrap.min.js')
    {{-- <script src="../../js/bootstrap.min.js"></script> --}}
</body>

</html>
