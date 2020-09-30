@extends('layouts.app')
@section('content')
{{-- @php
  dd(Cart::content()->count());
@endphp --}}
<div class="row cart-wrapper">
    <div class="cart cell-12">
        
<div class="page-headding-wrapper">
<br>
<h1 class="page-headding">
Корзина

</h1>
</div><!-- /.page_headding -->

@if (Cart::content()->count() == 0)
<div class="notice is-info text-center js-cart-empty">
        Ваша корзина пуста
</div>
</div>
</div>
@elseif (Cart::content()->count() > 1)
<div class="cart-body">
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
    <a href="#"><p class="item-title">
      {{ $item->name}}
    </p></a>
    
    
  </div>
  
  <div class="item-prices is-total-price js-item-price hidden-xs">
      {{ $item->price }}.руб
  </div>
  
  <div class="item-counter ">
  
  <form action="{{ route('cart.update') }}" method="POST">
    @csrf
  <div class="counter js-variant-counter"> 
      <button type="submit"  name="minus" value="minus" class="counter-button is-count-down"></button>
      <input type="hidden" name="id" value="{{ $item->rowId }}">
      <input type="text" value="{{ $item->qty }}" name="qty" class="counter-input "/>
      <button type="submit"  name="plus" value="plus" class="counter-button is-count-up "></button>
  </div>
  </form>
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
  
  <div class="cart-footer row flex-between">
  
  <div class="cell-4 cell-6-md cell-12-sm">
    
  <div id="js-coupon-wrapper" class="discount-wrapper">
  
  <div class="discounts-notice notice is-error hidden">
  
  </div>
  </div>
  
  
  
  </div>
    
          <div class="cell-4 cell-6-md cell-12-sm flex-start-sm cart-block-checkout">
            <div class="cart-total js-shopcart-total-summ"></div>
            <h3>{{ Cart::subtotal() }}.руб</h3>
            <button type="submit" class="cart-checkout button is-primary" data-cart-submit>
              <a href="{{ url('cart/checkout') }}">
              <span class="button-text">
                Оформить заказ
              </span>
              </a>
            </button>
          </div>
    
        </div>
       
      </div>  
@else
<div class="cart-body">
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
  <a href="#"><p class="item-title">
    {{ $item->name}}
  </p></a>
  
  
</div>

<div class="item-prices is-total-price js-item-price hidden-xs">
    {{ $item->price }}.руб
</div>

<div class="item-counter ">

<form action="{{ route('cart.update') }}" method="POST">
  @csrf
<div class="counter js-variant-counter"> 
    <button type="submit"  name="minus" value="minus" class="counter-button is-count-down"></button>
    <input type="hidden" name="id" value="{{ $item->rowId }}">
    <input type="text" value="{{ $item->qty }}" name="qty" class="counter-input "/>
    <button type="submit"  name="plus" value="plus" class="counter-button is-count-up "></button>
</div>
</form>
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

<div class="cart-footer row flex-between">

<div class="cell-4 cell-6-md cell-12-sm">
  
<div id="js-coupon-wrapper" class="discount-wrapper">

<div class="discounts-notice notice is-error hidden">

</div>
</div>



</div>
  
        <div class="cell-4 cell-6-md cell-12-sm flex-start-sm cart-block-checkout">
          <div class="cart-total js-shopcart-total-summ"></div>
          <h3>{{ Cart::subtotal() }}.руб</h3>
          <button type="submit" class="cart-checkout button is-primary" data-cart-submit>
            <a href="{{ url('cart/checkout') }}">
            <span class="button-text">
              Оформить заказ
            </span>
            </a>
          </button>
        </div>
  
      </div>
     
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@endif

@endsection