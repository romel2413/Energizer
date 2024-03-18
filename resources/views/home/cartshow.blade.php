<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Product & Checkout E-Commerce Template">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home1/css/main.css') }}">
    <link rel="shortcut icon" href="{{ asset('home/images/logst.png') }}" type="">
    <title>Energized</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    {{-- <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" /> --}}
</head>

<body>
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-menu" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M5.333 16h21.333"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M9.333 8h13.333"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M10.667 24h10.667"></path>
            </symbol>
            <symbol id="icon-search" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M14.667 25.333c5.891 0 10.667-4.776 10.667-10.667s-4.776-10.667-10.667-10.667c-5.891 0-10.667 4.776-10.667 10.667s4.776 10.667 10.667 10.667z">
                </path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M28 28l-5.8-5.8"></path>
            </symbol>
            <symbol id="icon-cart" viewBox="0 0 32 32">
                <path opacity="0.5" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4"
                    stroke-width="2.6667"
                    d="M20 29.333c-0.736 0-1.333-0.597-1.333-1.333s0.597-1.333 1.333-1.333c0.736 0 1.333 0.597 1.333 1.333s-0.597 1.333-1.333 1.333z">
                </path>
                <path opacity="0.5" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4"
                    stroke-width="2.6667"
                    d="M5.333 29.333c-0.736 0-1.333-0.597-1.333-1.333s0.597-1.333 1.333-1.333c0.736 0 1.333 0.597 1.333 1.333s-0.597 1.333-1.333 1.333z">
                </path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M30.667 1.333h-5.333l-3.573 17.853c-0.122 0.614-0.456 1.165-0.943 1.558s-1.098 0.601-1.723 0.589h-12.96c-0.626 0.012-1.236-0.197-1.723-0.589s-0.821-0.944-0.943-1.558l-2.133-11.187h22.667">
                </path>
            </symbol>
            <symbol id="icon-arrow-previous" viewBox="0 0 67 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="5.3333"
                    d="M64 16h-61.333"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="5.3333"
                    d="M16 29.333l-13.333-13.333 13.333-13.333"></path>
            </symbol>
            <symbol id="icon-close" viewBox="0 0 37 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="3.3684"
                    d="M34.17 29.543l-30.802-26.175"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="3.3684"
                    d="M34.169 3.368l-30.8 26.176"></path>
            </symbol>
            <symbol id="icon-star" viewBox="0 0 26 28">
                <path
                    d="M26 10.109c0 0.281-0.203 0.547-0.406 0.75l-5.672 5.531 1.344 7.812c0.016 0.109 0.016 0.203 0.016 0.313 0 0.406-0.187 0.781-0.641 0.781-0.219 0-0.438-0.078-0.625-0.187l-7.016-3.687-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641s0.625 0.344 0.766 0.641l3.516 7.109 7.844 1.141c0.375 0.063 0.875 0.25 0.875 0.719z">
                </path>
            </symbol>
            <symbol id="icon-star-half" viewBox="0 0 13 28">
                <path
                    d="M13 0.5v20.922l-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641v0z">
                </path>
            </symbol>
            <symbol id="icon-minus" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="3.2"
                    d="M6.667 16h18.667"></path>
            </symbol>
            <symbol id="icon-plus" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="3.2"
                    d="M16 6.667v18.667"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="3.2"
                    d="M6.667 16h18.667"></path>
            </symbol>
            <symbol id="icon-heart" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M27.787 6.147c-0.681-0.681-1.49-1.222-2.379-1.591s-1.844-0.559-2.807-0.559-1.917 0.19-2.807 0.559c-0.89 0.369-1.698 0.909-2.379 1.591l-1.413 1.413-1.413-1.413c-1.376-1.376-3.241-2.148-5.187-2.148s-3.811 0.773-5.187 2.148c-1.376 1.376-2.148 3.241-2.148 5.187s0.773 3.811 2.148 5.187l11.787 11.787 11.787-11.787c0.681-0.681 1.222-1.49 1.591-2.38s0.559-1.844 0.559-2.807-0.19-1.917-0.559-2.807c-0.369-0.89-0.909-1.699-1.591-2.38v0z">
                </path>
            </symbol>
            <symbol id="icon-facebook" viewBox="0 0 32 32">
                <path
                    d="M32 16c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 8 5.8 14.6 13.4 15.8v-11.2h-4v-4.6h4v-3.6c0-4 2.4-6.2 6-6.2 1.8 0 3.6 0.4 3.6 0.4v4h-2c-2 0-2.6 1.2-2.6 2.4v3h4.4l-0.8 4.6h-3.8v11.4c8-1.2 13.8-8 13.8-16z">
                </path>
            </symbol>
            <symbol id="icon-twitter" viewBox="0 0 39 32">
                <path
                    d="M39.385 3.692c-1.477 0.738-2.954 0.985-4.677 1.231 1.723-0.985 2.954-2.462 3.446-4.431-1.477 0.985-3.2 1.477-5.169 1.969-1.477-1.477-3.692-2.462-5.908-2.462-5.169 0-9.108 4.923-7.877 9.846-6.646-0.246-12.554-3.446-16.738-8.369-2.215 3.692-0.985 8.369 2.462 10.831-1.231 0-2.462-0.492-3.692-0.985 0 3.692 2.708 7.138 6.4 8.123-1.231 0.246-2.462 0.492-3.692 0.246 0.985 3.2 3.938 5.662 7.631 5.662-2.954 2.215-7.385 3.446-11.569 2.954 3.692 2.215 7.877 3.692 12.308 3.692 15.015 0 23.385-12.554 22.892-24.123 1.723-0.985 3.2-2.462 4.185-4.185z">
                </path>
            </symbol>
            <symbol id="icon-pinterest" viewBox="0 0 32 32">
                <path
                    d="M16 0c-8.8 0-16 7.2-16 16 0 6.6 4 12.2 9.6 14.6 0-1.2-0-2.4 0.2-3.6 0.4-1.4 2-8.8 2-8.8s-0.6-1-0.6-2.6c0-2.4 1.4-4.2 3-4.2 1.4 0 2.2 1 2.2 2.4s-1 3.6-1.4 5.6c-0.4 1.6 0.8 3 2.6 3 3 0 5-3.8 5-8.6 0-3.6-2.4-6.2-6.6-6.2-4.8 0-7.8 3.6-7.8 7.6 0 1.4 0.4 2.4 1 3.2 0.2 0.4 0.4 0.4 0.2 0.8 0 0.2-0.2 1-0.4 1.2-0.2 0.4-0.4 0.6-0.8 0.4-2.2-1-3.2-3.4-3.2-6.2 0-4.6 3.8-10 11.4-10 6.2 0 10.2 4.4 10.2 9.2 0 6.2-3.4 11-8.6 11-1.8 0-3.4-1-4-2 0 0-1 3.6-1.2 4.4-0.4 1.2-1 2.4-1.6 3.4 1.4 0.4 3 0.6 4.6 0.6 8.8 0 16-7.2 16-16 0.2-8-7-15.2-15.8-15.2z">
                </path>
            </symbol>
            <symbol id="icon-instagram" viewBox="0 0 34 32">
                <path
                    d="M17.804 2.892c4.241 0 4.819 0 6.554 0 1.542 0 2.313 0.386 2.892 0.578 0.771 0.386 1.349 0.578 1.928 1.157s0.964 1.157 1.157 1.928c0.193 0.578 0.385 1.349 0.578 2.892 0 1.735 0 2.12 0 6.554s0 4.819 0 6.554c0 1.542-0.386 2.313-0.578 2.892-0.386 0.771-0.578 1.349-1.157 1.928s-1.157 0.964-1.928 1.157c-0.578 0.193-1.349 0.385-2.892 0.578-1.735 0-2.12 0-6.554 0s-4.819 0-6.554 0c-1.542 0-2.313-0.386-2.892-0.578-0.771-0.386-1.349-0.578-1.928-1.157s-0.964-1.157-1.157-1.928c-0.193-0.578-0.386-1.349-0.578-2.892 0-1.735 0-2.12 0-6.554s0-4.819 0-6.554c0-1.542 0.386-2.313 0.578-2.892 0.386-0.771 0.578-1.349 1.157-1.928s1.157-0.964 1.928-1.157c0.578-0.193 1.349-0.386 2.892-0.578 1.735 0 2.313 0 6.554 0zM17.804 0c-4.434 0-4.819 0-6.554 0s-2.892 0.386-3.855 0.771c-0.964 0.386-1.928 0.964-2.892 1.928s-1.349 1.735-1.928 2.892c-0.386 0.964-0.578 2.12-0.771 3.855 0 1.735 0 2.313 0 6.554 0 4.434 0 4.819 0 6.554s0.386 2.892 0.771 3.855c0.386 0.964 0.964 1.928 1.928 2.892s1.735 1.349 2.892 1.928c0.964 0.385 2.12 0.578 3.855 0.771 1.735 0 2.313 0 6.554 0s4.819 0 6.554 0 2.892-0.386 3.855-0.771c0.964-0.386 1.928-0.964 2.892-1.928s1.349-1.735 1.928-2.892c0.385-0.964 0.578-2.12 0.771-3.855 0-1.735 0-2.313 0-6.554s0-4.819 0-6.554-0.386-2.892-0.771-3.855c-0.386-0.964-0.964-1.928-1.928-2.892s-1.735-1.349-2.892-1.928c-0.964-0.386-2.12-0.578-3.855-0.771-1.735 0-2.12 0-6.554 0z">
                </path>
                <path
                    d="M17.804 7.711c-4.627 0-8.289 3.663-8.289 8.289s3.663 8.289 8.289 8.289c4.627 0 8.289-3.663 8.289-8.289s-3.663-8.289-8.289-8.289zM17.804 21.398c-2.892 0-5.398-2.313-5.398-5.398 0-2.892 2.313-5.398 5.398-5.398 2.892 0 5.398 2.313 5.398 5.398 0 2.892-2.506 5.398-5.398 5.398z">
                </path>
                <path
                    d="M26.286 9.446c1.065 0 1.928-0.863 1.928-1.928s-0.863-1.928-1.928-1.928c-1.065 0-1.928 0.863-1.928 1.928s0.863 1.928 1.928 1.928z">
                </path>
            </symbol>
            <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M20 24l-8-8 8-8"></path>
            </symbol>
            <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M12 24l8-8-8-8"></path>
            </symbol>
            <symbol id="icon-percent" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M25.333 6.667l-18.667 18.667"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M8.667 12c1.841 0 3.333-1.492 3.333-3.333s-1.492-3.333-3.333-3.333c-1.841 0-3.333 1.492-3.333 3.333s1.492 3.333 3.333 3.333z">
                </path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="2.6667"
                    d="M23.333 26.667c1.841 0 3.333-1.492 3.333-3.333s-1.492-3.333-3.333-3.333c-1.841 0-3.333 1.492-3.333 3.333s1.492 3.333 3.333 3.333z">
                </path>
            </symbol>
            <symbol id="icon-tag" viewBox="0 0 32 32">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="3.2"
                    d="M27.453 17.88l-9.56 9.56c-0.248 0.248-0.542 0.445-0.866 0.579s-0.671 0.203-1.021 0.203c-0.35 0-0.697-0.069-1.021-0.203s-0.618-0.331-0.866-0.579l-11.453-11.44v-13.333h13.333l11.453 11.453c0.497 0.5 0.775 1.175 0.775 1.88s-0.279 1.38-0.775 1.88v0z">
                </path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" stroke-width="3.2"
                    d="M9.334 9.333h0.016"></path>
            </symbol>
        </defs>
    </svg>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

    </div>




</body>

<main class="main" style="padding-top:100px;">
    @if (session('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session('error') }}
        </div>
    @endif
    <section class="order">
        <div class="container">

            <div class="order-wrapper checkout-wrapper">

                <div class="left-main-wrapper">
                    <?php $totalprice = 0; ?>
                    <?php $totalquantity = 0; ?>
                    @foreach ($cart as $carts)
                        <form action="{{ url('/update_cart', $carts->id) }}" method="POST">
                            @csrf
                            <div class="order-item-wrapper">
                                <div class="order-detail-item-wrapper">

                                    <div class="order-detail-item">

                                        <figure class="order-detail-item-photo">
                                            <picture><img src="/product/{{ $carts->image }}" alt="Product Photo">
                                            </picture>
                                        </figure>
                                        <div class="order-detail-item-content">
                                            <div class="order-detail-item-content-title">{{ $carts->product_title }}
                                            </div>
                                            <div class="order-detail-item-content-color">
                                                <div class="order-detail-item-content-color-light">Product Name:</div>
                                                <div class="order-detail-item-content-color-dark">
                                                    {{ $carts->product_title }}</div>
                                            </div>
                                            <div class="order-detail-item-content-buttons">

                                                <input type="number" name="quantity" min="1"
                                                    max="{{ $carts->stock }}"
                                                    oninput="checkQuantity(this, {{ $carts->stock }}, 'quantityMessage{{ $carts->id }}', 'cashOnDeliveryBtn')"
                                                    id="quantityInput{{ $carts->id }}"
                                                    value="{{ $carts->quantity }}" class="form-control">
                                                    
                                                <a class="button button-secondary red"
                                                    onclick="return confirm('Are you to remove this product ')"
                                                    href="{{ url('/remove_cart', $carts->id) }}">
                                                    remove
                                                </a>
                                                <button style=""> <a
                                                        style=" width: 100%; text-align:center; color:skyblue; border-left: 1px solid rgba(var(--color-dark-rgb), .2);"
                                                        type="submit" class="button button-secondary"
                                                        required="">
                                                        Update Product
                                                    </a>

                                                </button>
                                            </div>

                                        </div>
                                        <div class="order-detail-item-content-color-light">Price: <br></div>
                                        <div class="order-detail-item-price">₱{{ $carts->price }}</div>
                                    </div>


                                </div>
                            </div>
                            <?php $totalprice = $totalprice + $carts->price; ?>
                            <?php $totalquantity = $totalquantity + $carts->quantity; ?>
                        </form>
                    @endforeach



                </div>
                <aside class="order-summary">
                    <div class="order-summary-wrapper">
                        <div class="order-summary-title">Order Summary</div>
                        <div class="order-summary-detail">
                            <div class="order-summary-item-wrapper">
                                <div class="order-summary-item">Price</div>
                                <div class="order-summary-item">{{ $totalprice }}</div>
                            </div>
                            <div class="order-summary-item-wrapper">
                                <div class="order-summary-item">Quantity</div>
                                <div class="order-summary-item">{{ $totalquantity }}</div>
                            </div>

                        </div>
                        <div class="order-summary-total">
                            <div class="order-summary-total-title">Total</div>
                            <div class="order-summary-total-price">Total</div>
                        </div>



                        <a style="margin-bottom: 1cm;" id="cashOnDeliveryBtn" title="proceed to checkout"
                            href="{{ url('cash_order') }}" class="button button-primary">proceed to checkout</a>

                    </div>
                </aside>
            </div>

        </div>
    </section>
</main>
<!-- jQery -->
<script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('home/js/popper.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('home/js/bootstrap.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('home/js/custom.js') }}"></script>
<script src="{{ asset('home1/js/main.js') }}"></script>
<script>
    function checkQuantity(input, availableStock, messageElementId, cashOnDeliveryBtnId) {
        var enteredQuantity = parseInt(input.value);
        var quantityMessage = document.getElementById(messageElementId);
        var cashOnDeliveryBtn = document.getElementById(cashOnDeliveryBtnId);

        if (enteredQuantity > availableStock) {
            input.value = availableStock; // Limit the input to available stock
            quantityMessage.textContent = 'Quantity exceeds available stock';
            cashOnDeliveryBtn.disabled = true; // Disable the "Cash On Delivery" button
        } else {
            quantityMessage.textContent = ''; // Clear the error message
            cashOnDeliveryBtn.disabled = false; // Enable the "Cash On Delivery" button
        }
    }

    function updateTotalPrice(input) {
        const priceElement = input.closest('.order-detail-item-content').querySelector('.order-detail-item-price');
        const originalPrice = parseFloat(priceElement.textContent.replace('₱', ''));
        const newQuantity = parseInt(input.value);

        if (!isNaN(originalPrice) && !isNaN(newQuantity)) {
            const newPrice = originalPrice * newQuantity;
            priceElement.textContent = '₱' + newPrice.toFixed(2);
        }
    }

    // Event delegation for quantity inputs
    document.addEventListener('input', function(event) {
        if (event.target.classList.contains('product-quantity-input-number')) {
            updateTotalPrice(event.target);
        }
    });
</script>

</html>
