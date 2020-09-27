<div class="header-mane Mb-l Mb-m">
    <div class="wrapper">
        <div class="row">
            <div class="col-xxl-3">
                @include("inc.components.image-link", [
    'class' => 'logo',
    'href' => '#',
    'classImage' => 'logo__image',
    'src' => '/images/service-img/logo-yellow.png',
    'classSpan' => 'logo__text R-12 C-8',
    'text' => ''
])
            </div>
            <div class="col-xxl-9 col-md-12">
                <div class="header-mane__right">
                    @include('inc.components.block-callback')
                    @include('inc.components.block-counter')
                </div>
            </div>
        </div>
    </div>
</div>
