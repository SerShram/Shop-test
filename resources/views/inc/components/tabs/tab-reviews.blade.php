<div class="row">
    <div class="col-xxl-6 col-xl-5 col-lg-4 col-12">
        <div class="reviews-block">
            @foreach($tab3['reviews'] as $item)
            <div class="review Mb Mb-s">
                <div class="review__row Mb Mb-s">
                    <div class="P17 C-6">{{ $item['name'] }}</div>
                    <div class="P12 C-11">{{ $item['date'] }}</div>
                </div>
                <div class="review__rating P14 C-10 Mb Mb-s">
                    @include('inc.components.widgets.star-rating', ['rating' => $item['rating']])
                </div>
                <div class="review__text P14 C-11 Mb Mb-s">{{ $item['text'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-xxl-6 col-xl-7 col-lg-8 col-12">
        @include('inc.components.forms.form-review')
    </div>
</div>
