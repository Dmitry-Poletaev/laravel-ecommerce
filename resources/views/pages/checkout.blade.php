@extends('layouts.app')
@section('content')
@if ($errors->any())
<div class="uk-alert-danger" uk-alert>
  <a class="uk-alert-close" uk-close></a>
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<br>
<form action="{{ route('checkout.save') }}" method="POST">
@csrf
  <fieldset class="uk-fieldset">

      <legend class="uk-legend">Оформление заказа</legend>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-large" name="name" type="text" placeholder="Имя">
    </div>
    <div class="uk-margin">
        <input class="uk-input uk-form-width-large" name="email" type="email" placeholder="Email">
    </div>
    <div class="uk-margin">
        <input class="uk-input uk-form-width-large" name="phone" type="phone" placeholder="Телефон">
    </div>

  </fieldset>
  <legend class="uk-legend">Товары в заказе</legend>
  <hr>
  <div class="cart-list">
    @foreach ($order as $item)
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
        {{ $item->qty }}.шт
    </div>
     
    <div class="item-prices is-total-price js-item-total-price" >
        {{ $item->price * $item->qty }}.руб
    </div>

    </div>
    </div>
    
    </div><!-- /.cart-item -->
    @endforeach
    <hr>
    <h3>Итого:{{ Cart::subtotal() }}.руб</h3>
    <button type="submit" class="uk-button uk-button-primary uk-button-large">Подтвердить заказ</button>
    <hr>

</form>

@endsection