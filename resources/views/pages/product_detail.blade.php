@extends('layouts.app')
@if (@isset($seo))
@section('seo')
<meta http-equiv="description" content="{{ $seo->description }}">
<meta name="keywords" content="{{ $seo->keywords }}"/>
<title>
     {{ $seo->title }}
</title>
@endsection
@endif
@section('content')

<div class="content-wrapper container fhg-content">

    <div class="row product-wrapper">
      <div class="product cell-9 cell-8-md cell-12-sm">
        


<div class="breadcrumb-wrapper">

<ul class="breadcrumb">

<li class="breadcrumb-item home">
<a class="breadcrumb-link home-icon" title="Главная" href="{{ url('/') }}">
</a>
</li>

      <li class="breadcrumb-item" data-breadcrumbs="2">
        <a class="breadcrumb-link" title="Акции и скидки" href="#">{{ $product->parentCategory->name }}</a>
      </li>

      <li class="breadcrumb-item" data-breadcrumbs="3">
        <a class="breadcrumb-link" title="ВЫГОДНЫЙ СТАРТ!" href="{{ url('product/all/' . $product->parentSubcat->id) }}">{{ $product->parentSubcat->name }}</a>
      </li>

</ul>

</div>


<div class="page-headding-wrapper">
<h1 class="page-headding"   value="{{ $product->id }}">
    <span name="name">{{ $product->name }}</span>

</h1>
</div><!-- /.page_headding -->

<div class="row">

<div class="product-gallery-wrapper cell-4 cell-6-md cell-12-sm">


<div class="product-gallery">
<div class="gallery-main-wrapper">


<a href="#" class="image-wrapper"  id="gallery"  title="Набор инструментов &quot;FOCUS&quot; в красной тележке, 188 предметов KING TONY 934-188AMR" data-gallery-count="1">
  <img src="{{ URL::to($product->image) }}" alt="" title="" class="slide-image" >
</a>
</div>
<!-- Для тыкалок js -->

<div class="gallery-thumbs-wrapper  hidden-sm">
  <div class="gallery-thumbs" data-slider="gallery-thumbs">
    

    
  </div>
</div>


<!-- Для планшетов -->

<div class="gallery-thumbs-wrapper mobile-wrapper hidden shown-sm">
  <div class="gallery-thumbs" data-slider="gallery-thumbs-mobile">

    <a href="{{ URL::to($product->image) }}" data-uk-lightbox title=""><img src="{{ URL::to($product->image) }}" alt="" title="Набор инструментов &quot;FOCUS&quot; в красной тележке, 188 предметов KING TONY 934-188AMR" class="slide-image"></a>

  </div>
</div>



</div>

</div>

<div class="cell-8 cell-6-md cell-12-sm" data-product-id="146578601" data-main-form>
<div class="top-panel-product">
  
    <div class="product-sku-wrapper js-product-sku-wrapper" style="display: none;">
      <span class="label-article">Артикул:</span>
      <span class="js-product-sku">934-188AMR</span>
    </div>
  
  
    <div class="product-available js-available">
      В наличии
    </div>
  
</div>
<div class="product-prices on-page">
    <div class="old-price js-product-old-price on-page">
      
    </div>
    @if ($product->sale == 0)
    <div class="price js-product-price on-page">{{ $product->selling_price }}.руб</div>
    @else
    <div class="price js-product-price on-page">{{ $product->discount_price }}.руб</div>
    @endif
</div>
{{-- <div class="product-introtext on-page editor"><p>Набор инструментов "FOCUS" в красной тележке, 188 предметов KING TONY 934-188AMR</p></div> --}}


 

  <div class="product-control on-page">

  <div class="counter js-variant-counter" >

  <button type="button"  id="minus" class="counter-button is-count-down "></button>

  <input type="text" value="1" id="qty" class="counter-input"/>

  <button type="button"  id="plus" class="counter-button is-count-up "></button>
  </div>


  <button class="product-button button is-primary  js-variant-shown" id="addcart" type="submit">
    <span class="button-text">
      В корзину
    </span>
  </button>

  <div class="product-order-variant variant-hidden js-variant-hidden" style="display: none;">
    <p class="notice notice-info">
      Товар отсутствует
    </p>
  </div>

{{-- <button class="product-button button is-primary js-variant-preorder "
  type="button">

  <span class="button-text">
    Предзаказ
  </span>
</button> --}}

  

</div>




</div>
</div>

<div class="product-content tab">

<button class="tab-toggle" data-target="#product-description" data-toggle="tabs">
  <p class="tab-toggle-caption">Описание</p>
</button>

<div id="product-description" class="tab-block">
  <div class="tab-block-inner editor">
    {!! $product->description !!}
  </div>
</div><!-- /#product-description -->



<button class="tab-toggle" data-target="#product-characteristics" data-toggle="tabs">
  <p class="tab-toggle-caption">Характеристики</p>
</button>

<div id="product-characteristics" class="tab-block">
  <div class="tab-block-inner editor">
    <table class="table table-bordered table-striped table-hover">
        {!! $product->specification !!}

    </table>
  </div>
</div><!-- /#product-characteristics -->



<button class="tab-toggle" data-target="#product-comment" data-toggle="tabs">
  <p class="tab-toggle-caption">Отзывы</p>
</button>

<div id="product-comment" class="tab-block">
  <div class="tab-block-inner">
    <div data-comments-list data-comments-moderated="true">

</div>

    <div class="reviews-wrapper">
<button type="button" class="button is-reviews-toggle is-unchecked js-reviews-toggle">

<span class="button-text">
  Оставить отзыв
</span>
</button>

<div class="reviews-form">
<div class="notice is-success js-reviews-notice-success hidden">
  
    Отзыв успешно отправлен.<br/> Он будет проверен администратором перед публикацией.
  
</div>


  <div class="notice is-info icon-warning js-comments-toggle-notice">
    Перед публикацией отзывы проходят модерацию
  </div>


</div>

</div>

{{-- <script type="text/javascript">
(function(){
var _reviewForm = {
  form: {
    classes: 'is-reviews',
  },
  fields: [
    {
      title: 'Оценка',
      name: 'rating',
      type: 'rating',
      rating: 5
    },
    {
      title: 'Текст',
      type: 'textarea',
      name: 'content',
      required: true,
    },
    {
      title: 'Имя',
      name: 'author',
      required: true,
    },
    {
      title: 'Email',
      name: 'email',
      required: true
    },
    
  ],
  

    sendToOptions: {
      id: 146578601 // product id
    },

  

  sendTo: Shop.sendReview,
  messages: {
    success: 'Отзыв успешно отправлен'
  },
  onValid: function (response, form) {
    var $notice = $('.js-reviews-notice-success');
    var $commentsList = $('[data-comments-list]');
    // alertify.success('Отзыв успешно отправлен');
    $notice.removeClass('hidden');
    setTimeout(function () {
      $notice.addClass('hidden');
    }, 10000);

    form.clear();

    if (!$commentsList.data('commentsModerated')) {
      $commentsList.load(document.location.pathname + ' [data-comments-list] > div' );
      $(document).ajaxSuccess(function() {
        $(function () {
            $('[data-product-rating]').each(function () {
              var _node = $(this);
              var _rating = _node.data('productRating');
              var _maxRating = _node.data('productMaxRating') || 5;
type="text/javascript"
              _node.html(Template.render({
                rating: _rating,
                max: _maxRating
              }, 'system-review-rating'));
            });
        })
      });
    }
  },
  onError: function (response, form) {
    form.markErrors(response.errors);
  }
};

$(document).on('click', '.js-reviews-toggle', function (event) {
event.preventDefault();

alertify.modal({
  formDefination: _reviewForm
}).set('title', 'Оставить отзыв' );
});
}());

</script> --}}

  </div>
</div><!-- /#product-comment -->


</div>

</div>
<div class="cell-3 cell-4-md hidden-sm flex-first">
    @include('layouts.sidebar')
</div>
</div>
</div>
{{-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> --}}

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
           $(document).ready(function() {
            $('#minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                $('#qty').attr('value', count);
                return false;
            });
            $('#plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                $('#qty').attr('value', $input.val());
                return false;
            });
        });
</script>

<script type="text/javascript">
    
   $(document).ready(function(){
     $('#addcart').on('click', function(){
        let id = $('.page-headding').attr('value');
        let qty = $('#qty').attr('value');
        console.log(qty);
        if (id) {
            $.ajax({
                url: " {{ url('/add/to/cart/') }}/"+id,
                type:"GET",
                datType:"json",
                data:{ qty:qty },
                success:function(data){
             const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                })

             if ($.isEmptyObject(data.error)) {
                Toast.fire({
                  icon: 'success',
                  title: data.success
                })
                location.reload(false);
             }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                })
             }
 
            },
            });

        }else{
            console.log(id);
            alert('danger');
        }

     });

   });


</script>


@endsection