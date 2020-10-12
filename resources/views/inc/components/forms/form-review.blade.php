<div class="Bg-grey-lt Px-l Py-l Px-s Py-s P14 C-6">
    <form action="" method="" class="form-review">
        <div class="P24-b Mb">Оставить отзыв</div>
        <div class="form-review__row">
            <label class="form-review__label">
                <span class="Mb-s">Ваше имя</span>
                <input type="text" name="name" placeholder="Михаил">
            </label>
            <label class="form-review__label">
                <span class="Mb-s">Ваше имя</span>
                <input type="email" name="email" placeholder="mikel87@gmail.com">
            </label>
            <div class="form-review__block-rating">
                <div class="P14 Mb-s">Оценка товара</div>
                <div class="form-review__rating Py">
                    <input type="radio" name="rating" value="5" id="5" /><label for="5"></label>
                    <input type="radio" name="rating" value="4" id="4" /><label for="4"></label>
                    <input type="radio" name="rating" value="3" id="3" /><label for="3"></label>
                    <input type="radio" name="rating" value="2" id="2" /><label for="2"></label>
                    <input type="radio" name="rating" value="1" id="1" /><label for="1"></label>
                </div>
            </div>
        </div>
        <label class="form-review__textarea Mb Mb-s">
            <span class="Mb-s">Ваш отзыв</span>
            <textarea name="review" minlength="5" maxlength="300" placeholder="Оставьте свой отзыв"></textarea>
        </label>
        <div class="form-review__button">
            @include('inc.components.button', ['classBtn'=>'review', 'path'=>'#', 'nameBtn'=>'Написать отзыв'])
        </div>
    </form>
</div>
