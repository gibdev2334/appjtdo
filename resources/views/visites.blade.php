@extends('layouts.master')


@section('content')


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Visites</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Visites</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area --> 

<div class="container my-5">
    <div class="orders">
        <h2 class="text-center">Visites Details</h2>
        <div class="table-responsive order_details_table">
            <div class="d-flex justify-content-between my-5 px-5">
                <h4>
                    <i class="fas fa-receipt"></i>
                    Visite #4825
                </h4>
                <h4>Date : 22/06/2022</h4>

            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <td class="col">Vestige</td>
                        <td class="col">Nombre de visiteurs</td>
                        <td class="col">Total à payer</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vestige Name</td>
                        <td>x 1</td>
                        <td>€ 6</td>
                    </tr>
                    <tr>
                        <td><b>Subtotal</b></td>
                        <td></td>
                        <td>€ 6</td>
                    </tr>
                    <tr>
                        <td><b>Tax</b></td>
                        <td></td>
                        <td>€ 0.85</td>
                    </tr>
                    <tr>
                        <td><b>Total</b></td>
                        <td></td>
                        <td>€ 6.85</td>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>

</div>

@stop