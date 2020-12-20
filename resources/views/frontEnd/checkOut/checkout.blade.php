@extends('frontEnd.app')
@section('title')
    CheckOut
@endsection
@section('style')
    <style>
        .StripeElement {
            box-sizing: border-box;

            height: 40px;


            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

    </style>
@endsection
@section('navbar')
    @include('frontEnd.layouts.navbar')
@endsection
@section('content')

    <div class="container">


{{--        <form action="/charge" method="post" class="colorlib-form" id="payment-form">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="amount" value="100">--}}
{{--            <div class="">--}}
{{--                <label for="card-element">--}}
{{--                    Credit or debit card--}}
{{--                </label>--}}
{{--                <div id="card-element">--}}
{{--                    <!-- A Stripe Element will be inserted here. -->--}}
{{--                </div>--}}

{{--                <!-- Used to display form errors. -->--}}
{{--                <div id="card-errors" role="alert"></div>--}}
{{--            </div>--}}

{{--            <button class="btn btn-primary mt-3">Submit Payment</button>--}}
{{--        </form>--}}
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form action="/charge" method="post" class="colorlib-form" id="payment-form">
                    @csrf
                    <h2>Billing Details</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Select Country</label>
                                <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="people" id="people" class="form-control">
                                        <option value="#">Select country</option>
                                        <option value="#">Alaska</option>
                                        <option value="#">China</option>
                                        <option value="#">Japan</option>
                                        <option value="#">Korea</option>
                                        <option value="#">Philippines</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Company Name</label>
                                <input type="text" id="companyname" class="form-control" placeholder="Company Name">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Address</label>
                                <input type="text" id="address" class="form-control" placeholder="Enter Your Address">
                            </div>
                            <div class="form-group">
                                <input type="text" id="address2" class="form-control" placeholder="Second Address">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Town/City</label>
                                <input type="text" id="towncity" class="form-control" placeholder="Town or City">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stateprovince">State/Province</label>
                                <input type="text" id="fname" class="form-control" placeholder="State Province">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Zip/Postal Code</label>
                                <input type="text" id="zippostalcode" class="form-control" placeholder="Zip / Postal">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="text" id="email" class="form-control" placeholder="State Province">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">Phone Number</label>
                                <input type="text" id="zippostalcode" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{--            <input type="hidden" name="amount" value="100">--}}
                                <div class="">
                                    <label for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div id="card-element" class="form-control">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>

                                <button class="btn btn-primary mt-3">Submit Payment</button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-detail">
                            <h2>Cart Total</h2>
                            <ul>
                                <li>

                                    <span>Subtotal</span> <span>${{ Cart::subtotal() }}</span>
                                    <ul>
                                        @foreach(Cart::instance('default')->content() as $item)
                                            <li><span>{{ $item->model->name }}</span> <span>${{$item->total()}}</span></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><span>Tax</span> <span>{{ Cart::tax() }}</span></li>
                                <li><span>Order Total</span> <span>${{ Cart::total() }}</span></li>

                            </ul>
                        </div>
                    </div>

                    <div class="w-100"></div>


                </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        window.onload = function () {
            var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
            var elements = stripe.elements();

            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };
            var card = elements.create('card', {style: style});
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.on('change', function (event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                stripe.createToken(card).then(function (result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        }
    </script>
@endsection
