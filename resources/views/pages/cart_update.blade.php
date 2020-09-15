<div class="cart-body" id="result">
    <div class="cart-list">
    @foreach ($cart as $item)
    <div class="cart-item " data-product-id="142662358" data-item-id="248945226">
    <div class="cart-item-inner item ">
    
    <div class="item-image-wrapper">
    <div class="item-image-inner">
      <span class="item-image-link image-container is-square ">
        <a href="#"><img title="" src="{{ asset($item->options->image) }}" class="item-image"></a>
      </span>
    </div>
    </div>
    
    <div class="item-content">
    <div class="item-caption">
      <a href="/product/mastak-nabor-instrumentov-universalnyy-01-056C"><p class="item-title">
        {{ $item->name}}
      </p></a>
      
      <div class="item-sku" style="display: block;">
        Артикул : 01-056C
      </div>
      
    </div>
    
    <div class="item-prices is-total-price js-item-price hidden-xs">
        {{ $item->price }}.руб
    </div>
    <div class="item-counter ">
    <div class="counter js-variant-counter" > 
    
        <button type="submit"  id="minus" class="counter-button is-count-down"></button>
        <input type="hidden" class="id" value="{{ $item->rowId }}">
        <input type="text" value="{{ $item->qty }}" name="cart" id="count" class="counter-input "/>
        <button type="submit"  id="plus" class="counter-button is-count-up "></button>
    </div>
    </div>
    
    <div class="item-prices is-total-price js-item-total-price" >
        {{ $item->price * $item->qty }}.руб
    </div>
    <div class="item-delete">
        <a href="{{ url('remove/cart/' . $item->rowId) }}" class="button is-item-delete is-transparent">
        </a>
    </div>
    
    
    </div>
    </div>
    
    </div><!-- /.cart-item -->
    @endforeach
    
      
    </div>
    </div>