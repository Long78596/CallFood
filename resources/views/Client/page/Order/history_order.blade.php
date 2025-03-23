@extends('Client.Share.master')
@section('content')

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Account</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white"
                                    href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <div class="my__account--section__inner">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="account__wrapper account__wrapper--style4 border-radius-10">
                            <div class="account__content">
                                <h2 class="account__content--title h3 mb-20">Orders History</h2>
                                <div class="account__table--area">
                                    <table class="account__table">
                                        <thead class="account__table--header">
                                            <tr class="account__table--header__child">
                                                <th class="account__table--header__child--items">Order</th>
                                                <th class="account__table--header__child--items">Date</th>
                                                <th class="account__table--header__child--items">Payment Status</th>
                                                <th class="account__table--header__child--items">Fulfillment Status</th>
                                                <th class="account__table--header__child--items">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="account__table--body mobile__none">
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">#2014</td>
                                                <td class="account__table--body__child--items">February 06, 2022</td>
                                                <td class="account__table--body__child--items">Paid</td>
                                                <td class="account__table--body__child--items">Unfulfilled</td>
                                                <td class="account__table--body__child--items">$40.00 USD</td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">#2024</td>
                                                <td class="account__table--body__child--items">February 06, 2022</td>
                                                <td class="account__table--body__child--items">Paid</td>
                                                <td class="account__table--body__child--items">Fulfilled</td>
                                                <td class="account__table--body__child--items">$44.00 USD</td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">#2164</td>
                                                <td class="account__table--body__child--items">February 06, 2022</td>
                                                <td class="account__table--body__child--items">Paid</td>
                                                <td class="account__table--body__child--items">Unfulfilled</td>
                                                <td class="account__table--body__child--items">$36.00 USD</td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">#2345</td>
                                                <td class="account__table--body__child--items">February 06, 2022</td>
                                                <td class="account__table--body__child--items">Paid</td>
                                                <td class="account__table--body__child--items">Unfulfilled</td>
                                                <td class="account__table--body__child--items">$87.00 USD</td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">#1244</td>
                                                <td class="account__table--body__child--items">February 06, 2022</td>
                                                <td class="account__table--body__child--items">Paid</td>
                                                <td class="account__table--body__child--items">Fulfilled</td>
                                                <td class="account__table--body__child--items">$66.00 USD</td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">#3455</td>
                                                <td class="account__table--body__child--items">February 06, 2022</td>
                                                <td class="account__table--body__child--items">Paid</td>
                                                <td class="account__table--body__child--items">Fulfilled</td>
                                                <td class="account__table--body__child--items">$55.00 USD</td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">#4566</td>
                                                <td class="account__table--body__child--items">February 06, 2022</td>
                                                <td class="account__table--body__child--items">Paid</td>
                                                <td class="account__table--body__child--items">Unfulfilled</td>
                                                <td class="account__table--body__child--items">$87.00 USD</td>
                                            </tr>
                                        </tbody>
                                        <tbody class="account__table--body mobile__block">
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">
                                                    <strong>Order</strong>
                                                    <span>#2014</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Date</strong>
                                                    <span>February 06, 2022</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Payment Status</strong>
                                                    <span>Paid</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Fulfillment Status</strong>
                                                    <span>Unfulfilled</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Total</strong>
                                                    <span>$40.00 USD</span>
                                                </td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">
                                                    <strong>Order</strong>
                                                    <span>#2014</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Date</strong>
                                                    <span>February 06, 2022</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Payment Status</strong>
                                                    <span>Paid</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Fulfillment Status</strong>
                                                    <span>Unfulfilled</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Total</strong>
                                                    <span>$40.00 USD</span>
                                                </td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">
                                                    <strong>Order</strong>
                                                    <span>#2014</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Date</strong>
                                                    <span>February 06, 2022</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Payment Status</strong>
                                                    <span>Paid</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Fulfillment Status</strong>
                                                    <span>Unfulfilled</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Total</strong>
                                                    <span>$40.00 USD</span>
                                                </td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">
                                                    <strong>Order</strong>
                                                    <span>#2014</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Date</strong>
                                                    <span>February 06, 2022</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Payment Status</strong>
                                                    <span>Paid</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Fulfillment Status</strong>
                                                    <span>Unfulfilled</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Total</strong>
                                                    <span>$40.00 USD</span>
                                                </td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">
                                                    <strong>Order</strong>
                                                    <span>#2014</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Date</strong>
                                                    <span>February 06, 2022</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Payment Status</strong>
                                                    <span>Paid</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Fulfillment Status</strong>
                                                    <span>Unfulfilled</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Total</strong>
                                                    <span>$40.00 USD</span>
                                                </td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">
                                                    <strong>Order</strong>
                                                    <span>#2014</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Date</strong>
                                                    <span>February 06, 2022</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Payment Status</strong>
                                                    <span>Paid</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Fulfillment Status</strong>
                                                    <span>Unfulfilled</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Total</strong>
                                                    <span>$40.00 USD</span>
                                                </td>
                                            </tr>
                                            <tr class="account__table--body__child">
                                                <td class="account__table--body__child--items">
                                                    <strong>Order</strong>
                                                    <span>#2014</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Date</strong>
                                                    <span>February 06, 2022</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Payment Status</strong>
                                                    <span>Paid</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Fulfillment Status</strong>
                                                    <span>Unfulfilled</span>
                                                </td>
                                                <td class="account__table--body__child--items">
                                                    <strong>Total</strong>
                                                    <span>$40.00 USD</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="account__details">
                            <h4 class="account__details--title">Account details</h4>
                            <p class="account__details--desc">Admin <br> Dhaka <br> Dhaka 12119 <br> Bangladesh</p>
                            <a class="account__details--link" href="my-account-2.html">View Addresses (1)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->

    <!-- Start shipping section -->
    <section class="shipping__section2 shipping__style3">
        <div class="container">
            <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping1.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Shipping</h2>
                        <p class="shipping__items2--content__desc">From handpicked sellers</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping2.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Payment</h2>
                        <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping3.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Return</h2>
                        <p class="shipping__items2--content__desc">30 day guarantee</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping4.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Support</h2>
                        <p class="shipping__items2--content__desc">Support every time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->

</main>
@endsection
