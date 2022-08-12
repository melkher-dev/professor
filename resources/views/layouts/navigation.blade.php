<header class="header">
    <nav class="navbar navbar-expand-lg navigation">
        <div class="container">
            <div class="logo-block">
                <a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse nav-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav">
                    <li class="nav-item logo-box">
                        <a class="login" href="{{ route('login') }}">login</a>
                    </li>
                    <li class="nav-item border-none">
                        <a class="login sign-up" href="{{ route('register') }}">signup</a>
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
                        <li><a href="{{ route('home') }}"><strong>Home</strong></a></li>
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
                                    <input type="text" class="form-control" placeholder="Search Teachers/Schools...">
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
