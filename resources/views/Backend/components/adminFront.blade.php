@extends('Backend.master')
@section('content')
    <div class="container-fluid">
        <div class="front-page-top-layer">
            <div class="row mb-2">
                <h4>INCOME AND EXPENSES SUMMARY</h4>
                <div class="col-4 ml-0 mt-2">
                    <div class="check">
                        <div class="myCheck"></div>
                        <p>Total Income</p>
                    </div>
                    <h2>$ 00</h2>
                </div>
                <div class="col-4 ml-0 mt-2">
                    <div class="check">
                        <div class="myCheck"></div>
                        <p>Total Expense</p>
                    </div>
                    <h2>$ 00</h2>
                </div>
            </div>
        </div>
        <div class="front-page-top-layer-2">
            <div class="row mb-2">
                <span class="summary-span">
                    <h4>REPORT SUMMARY</h4>
                    <p class="text-muted">Updated Report &nbsp;<i class="fas fa-users"></i></p>
                </span>
                <div class="col-12">
                    <ul class="summary-icons">
                        <li class="summary-icon">
                            <div><span>Deposit</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-success"><i class="fa fa-rocket" aria-hidden="true"></i></div></div>
                        </li>
                        <li class="summary-icon">
                            <div><span>Saving</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-primary"><i class="fas fa-briefcase"></i></div></div>
                        </li>
                        <li class="summary-icon">
                            <div><span>Income</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-warning"><i class="fas fa-globe"></i></div></div>
                        </li>
                        <li class="summary-icon">
                            <div><span>Expense</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-danger mr-2"><i class="fas fa-gem"></i></div></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="front-page-top-layer-3">
            <h4>Quick Status</h4>
            <div class="row">
                <div class="col-6">
                    <div>
                        <div class="layer-3-icon">
                            <i class="fab fa-google-wallet"></i>
                        </div>
                    </div>
                    <div>
                        <p>My Wallet</p>
                        <span>$ 0.00</span>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <div class="layer-3-icon">
                            <i class="fas fa-shopping-basket"></i>
                        </div>
                    </div>
                    <div>
                        <p>Revenue</p>
                        <span>$ 0.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection