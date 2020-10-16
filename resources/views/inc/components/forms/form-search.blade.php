<form action="#" method="get" class="form-search">
    <label>
        <input type="search" name="" class="form-search__input R14 Bg-grey-lt C-4" placeholder="Поиск по сайту">
        <span></span>
    </label>
    <div class="form-search__decor">
        <select name="name" class="form-search__select R14 Bg-grey-lt C-5">
            <option value="" selected>Все категории</option>
            <option value="">Категория</option>
        </select>
    </div>
    @include('inc.components.button', ['classBtn'=>'search R16-bup', 'path'=>'#', 'nameBtn'=>'поиск'])
</form>


