@extends('layouts.app')

@section('content')
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
@endsection
