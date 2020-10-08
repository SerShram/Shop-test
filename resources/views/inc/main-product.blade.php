@php
    $product = config('mock.product');
@endphp
<div class="main-product">
    <div class="wrapper">
        <div class="row">
            <div class="col-xxl-5 col-xl-4 col-lg-3"></div>
            <div class="col-xxl-7 col-xl-8 col-lg-9 col-12">
                {{ Breadcrumbs::render('product', $product['title']) }}
            </div>
        </div>

       @include('inc.components.product-card')
    </div>
</div>
