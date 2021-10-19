@extends('Frontend.Layouts.master')
@section('body')
<div id="latest-offer-front">  
    <div class="row breadcrumb-layer">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb my-2">
              <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Offers</a></li>
            </ol>
          </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="offer-poster">
                    <img src="{{ asset('/Frontend/assets') }}/img/offerposter1.jpg" alt="#">
                    <ul class="offer-poster-nav">
                        <li class="ml-0">
                            <i class="fas fa-tasks"></i>
                            1 Jul 2021 - 20 Jul 2021
                        </li>
                        <li>
                            <i class="fas fa-home"></i>
                                Online
                        </li>
                    </ul>
                    <h4 class="title">Microsoft Better Together Bundle Offer</h4>
                    <p>Save up to 40% on Microsoft Bundle Packages !!!</p>
                    <button class="btn btn-danger"><a href="{{ url('/showBlog1') }}">View Details</a></button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="offer-poster">
                    <img src="{{ asset('/Frontend/assets') }}/img/offerposter2.jpg" alt="#">
                    <ul class="offer-poster-nav">
                        <li class="ml-0">
                            <i class="fas fa-tasks"></i>
                            26 Apr 2021 - 15 Jul 2021
                        </li>
                        <li>
                            <i class="fas fa-home"></i>
                            All Branch
                        </li>
                    </ul>
                    <h4 class="title">Gigabyte Aorus Monitor Offer!!</h4>
                    <p>Buy Aorus Monitor and Outrider Game!</p>
                    <button class="btn btn-danger"><a href="{{ url('/showBlog2') }}">View Details</a></button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="offer-poster">
                    <img src="{{ asset('/Frontend/assets') }}/img/offerposter3.jpg" alt="#">
                    <ul class="offer-poster-nav">
                        <li class="ml-0">
                            <i class="fas fa-tasks"></i>
                            01 Jul 2021 - 20 Jul 2021
                        </li>
                        <li>
                            <i class="fas fa-home"></i>
                                All
                        </li>
                    </ul>
                    <h4 class="title">bKash Cashback Offer!!!</h4>
                    <p>Pay With bKash & Get 10% Cashback!</p>
                    <button class="btn btn-danger"><a href="{{ url('/showBlog3') }}">View Details</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection