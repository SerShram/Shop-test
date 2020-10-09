<div class="tab-desc P14 C-11">
    <div class="tab-desc__text Mb-s">{{ $tab1['text1'] }}</div>
    <div class="tab-desc__row">

        @if(isset( $tab1['image'] ) && $tab1['image'])
            <div class="tab-desc__image My Mr Mr-s">
                <img src="{{ $tab1['image'] }}" alt="">
            </div>
        @endif
        <div class="tab-desc__text My My-s">{{ $tab1['text2'] }}</div>
        <div class="tab-desc__text My My-s">{{ $tab1['text3'] }}</div>
    </div>
</div>
