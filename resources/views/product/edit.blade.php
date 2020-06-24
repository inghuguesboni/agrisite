<?php
/**
 * Created by PhpStorm.
 * User: adiag
 * Date: 19-Jun-20
 * Time: 4:42 PM
 */
?>

@extends('layout.layout')

@section('content')

    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Toutes les catégories</span>
                        </div>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="#">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> -->
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">Chercher</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+229 96 11 18 88</h5>
                                <span>Disponible 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="row">
            <div class="col-md-12">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h1 class="display-3">Add a contact</h1>
                <div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('product.store') }}">
                        @csrf
                        <div class="form-group">    
                            <label for="sku">Sku:</label>
                            <input type="text" class="form-control" name="sku"/>
                        </div>

                        <div class="form-group">
                            <label for="title">Titre:</label>
                            <input type="text" class="form-control" name="title"/>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                        <div class="form-group">
                            <label for="quantity">City:</label>
                            <input type="text" class="form-control" name="quantity"/>
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" name="country"/>
                        </div>
                        <div class="form-group">
                            <label for="job_title">Job Title:</label>
                            <input type="text" class="form-control" name="job_title"/>
                        </div>                         
                        <button type="submit" class="btn btn-primary-outline">Add contact</button>
                    </form>
                </div>
                </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- Product Details Section End -->



@endsection