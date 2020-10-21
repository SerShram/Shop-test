<div class="pagination-container">
    <ul class="pagination">
        <li class="pagination__item">
            <a href="#" class="pagination__link"><img src="/images/service-img/arrow-left-yellow.png" alt=""></a>
        </li>
        @foreach($data as $item)
            <li class="pagination__item">
                <a href="#" class="pagination__link js-pagination E14-bi C-7">{{ $item }}</a>
            </li>
        @endforeach
        <li class="pagination__item">
            <a href="#" class="pagination__link"><img src="/images/service-img/arrow-right-yellow.png" alt=""></a>
        </li>
    </ul>
</div>
