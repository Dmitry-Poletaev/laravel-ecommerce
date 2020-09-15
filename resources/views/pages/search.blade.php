@extends('layouts.app')

@section('content')

<div class="content-wrapper container fhg-content">

    <div class="row collection-wrapper">
      <div class="collection cell-9 cell-8-md cell-12-sm">
        

<div class="breadcrumb-wrapper">

    <ul class="breadcrumb">
  
      <li class="breadcrumb-item home">
      <a class="breadcrumb-link home-icon" title="Главная" href="{{ url('/') }}">
  
        </a>
      </li>

        <li class="breadcrumb-item">
          <span class="breadcrumb-page">Поиск</span>
        </li>
 
    </ul>
  
  </div>

  <div class="page-headding-wrapper">
    <h3 class="page-headding">

    </h3>
  </div><!-- /.page_headding -->
  
  
    <div class="collection-mix-description">
      
      
    </div>

      {{-- <div class="toolbar collection-toolbar at-top">
        <div class="toolbar-inner is-between">
  
            <div class="filter-collapse ">
              <button type="button" class="filter-panel-open-sidebar button is-primary js-open-filter" data-filter-caption="Фильтры">
                <span class="filter-collapse__label">
                  Фильтры</span>
              </button>
  
            </div>
    
            <div class="collection-order-wrapper flex-end">
  
            </div>
          
        </div>
      </div> --}}
      <div class="page-headding-wrapper">
        <h1 class="page-headding">        
            Поиск
        </h1>
      </div><!-- /.page_headding -->
      
      <div class="search-results-toolbar toolbar at-top">
        <div class="toolbar-inner">
          <div class="search-widget-wrapper flex-end">
            <form class="search-widget in-page" action="{{ url('search/result/') }}" method="get">
              @csrf
              <input type="text" name="search"  class="search-widget-field" placeholder="Поиск" autocomplete="off">
              </input>
              <button type="submit" class="search-widget-button button is-widget-submit"> </button>
              <article class="search-suggestions"></article>
            </form>
            
      
      
          </div>
        </div>
      </div>

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
              
                  <form class="product-cart-control ">
              
                    <input type="hidden" name="variant_id" value="254605987">
                    <input type="hidden" name="quantity" id="qty" class="counter-input input-number input-field" value="1"/>
              
                    <!-- Если больше 1 модификации -->
                    
                      <div class="buy text-right-xl more-info">
                        <button class="button button-buy is-primary" type="submit" id="addcart" data-item-add>
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
  
    <div class="pagination-wrapper">
            
  
    <ul class="pagination">
      
        
          <li class="pagination-item is-current">
            <span class="pagination-link">
            {{ $products->links() }}
            </span>
          </li>
        
      
    </ul>
    
    
        </div>

    </div>
    </div>
    
  
    </div>
    <div class="cell-3 cell-4-md hidden-sm flex-first">

    @include('layouts.sidebar')

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

<script type="text/javascript">
    
   $(document).ready(function(){
     $('#addcart').on('click', function(){
        let id = $('.page-headding').attr('value');
        if (id) {
          let qty = 1;
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
            alert('danger');
        }
     });

   });


</script>

@endsection