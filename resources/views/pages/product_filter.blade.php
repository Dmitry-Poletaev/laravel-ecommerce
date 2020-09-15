<div class="products-list is-collection row" id="result">
    @foreach ($products as $product)

    <div class="product-card-wrapper in-collection cell-3 cell-4-md cell-6-xs cell-12-mc">
        <div class="product-card ">
            <div class="product-card-inner">
              <a href="{{ url('product/details/' . $product->id) }}" class="product-card-photo image-container is-square ">
                <img src="{{ URL::to($product->image) }}"  title="" alt="" class="product-card-image">
              </a>
          <div class="product-card-form_block">
              <div class="product-card-price product-prices in-card">
                <div class="price in-card">
                  
                    @if ($product->sale == 0)
                        {{ $product->selling_price }} .руб
                    @else
                        {{ $product->discount_price }} .руб
                    @endif
          
                </div>
              </div>
          
            <form class="product-cart-control" action="{{ url('add/to/cart/' . $product->id) }}" method="GET">
              @csrf
              <input type="hidden"  name="qty" value="1" class="counter-input input-number input-field" value="{{ $product->id }}"/>
          
                <!-- Если больше 1 модификации -->
                
                  <div class="buy text-right-xl more-info">
                    <button class="button button-buy is-primary" type="submit" id="addcart">
                    </button>
                  </div><!-- /.buy -->
          
                <!-- product.quantity == 0 -->
                
          
              </form><!-- /.product-control -->
              </div>

                <a href="{{ url('product/details/' . $product->id) }}" class="product-link">
                    {{ $product->name }}
                </a>
            </div>

          </div>
        
    </div>
    @endforeach

</div>


  <div class="toolbar collection-toolbar at-bottom">
    <div class="toolbar-inner">
      <div class="collection-order-wrapper hide-sm">
        




      </div>



</div>
</div>