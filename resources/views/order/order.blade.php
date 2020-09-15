<ul class="cart_list">
    @foreach ($order as $item)
        
    <li class="cart_item clearfix">
    <div class="cart_item_image text-center"><br><img src="{{ asset($item->options->image) }}" style="height:100px; width:auto; " alt=""></div>
        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
            <div class="cart_item_name cart_info_col">
                <div class="cart_item_title">Название</div>
            <div class="cart_item_text">{{ $item->name}}</div>
            </div>
            <div class="cart_item_quantity cart_info_col">
                <div class="cart_item_title">Количество</div>
                <div class="cart_item_text">{{ $item->qty}} .шт</div>
                <br>
            </div>
            
            <div class="cart_item_price cart_info_col">
                <div class="cart_item_title">Цена за 1 е.д</div>
                <div class="cart_item_text">{{ $item->price }}.руб</div>  
            </div>
            <div class="cart_item_total cart_info_col">
                <div class="cart_item_title">Итоговая цена</div>
                <div class="cart_item_text">{{ $item->price * $item->qty }}.руб</div>
            </div>

        </div>
    </li>
    @endforeach
</ul>