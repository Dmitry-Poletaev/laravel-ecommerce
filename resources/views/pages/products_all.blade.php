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
        

    <div class="row collection-wrapper">
      <div class="collection cell-9 cell-8-md cell-12-sm">
        

<div class="breadcrumb-wrapper">

    <ul class="breadcrumb">
  
      <li class="breadcrumb-item home">
      <a class="breadcrumb-link home-icon" title="Главная" href="{{ url('/') }}">
  
        </a>
      </li>
                <li class="breadcrumb-item" data-breadcrumbs="2">
                <a class="breadcrumb-link" title="Ручной инструмент" href="#">{{ $category->name }}</a>
                </li>

                  <li class="breadcrumb-item">
                    <span class="breadcrumb-page" value="{{ $subcat->id }}">{{ $subcat->name }}</span>
                  </li>
 
    </ul>
  
  </div>
  
  

  <div class="page-headding-wrapper">
    <h3 class="page-headding">



    </h3>
  </div><!-- /.page_headding -->
  
  
  
    <div class="collection-mix-description">
      
      
    </div>

  
      <div class="toolbar collection-toolbar at-top">
        <div class="toolbar-inner is-between">
  
            {{-- <div class="filter-collapse ">
              <button type="button" class="filter-panel-open-sidebar button is-primary js-open-filter" data-filter-caption="Фильтры">
                <span class="filter-collapse__label">
                  Фильтры</span>
              </button>
  
            </div>
   --}}
   <button class="uk-button uk-button-default uk-margin-small-right" id="mobile-filter"  type="button" uk-toggle="target: #modal-filter">Фильтры</button>

          
            <div class="collection-order-wrapper flex-end">
              

{{-- <div class="collection-order ">

  
    
      <label class="collection-order-row is-order  ">
        <span class="collection-order-label order-sort">
          Сортировка:
        </span>

          <select class="collection-order-field" name="order">
            <option>Сортировка</option>
            <option   id="asc_sorting" name="asc">по возрастанию цены</option>
            <option><button type="submit" id="desc_sorting" name="desc">по убыванию цены</button></option>
            <option  value='title'>по названию</option>
          </select>

      </label>
      


</div> --}}
<div class="uk-inline">
  <button class="uk-button uk-button-default" type="button">Сортировка</button>
  <div uk-dropdown>
      <ul class="uk-nav uk-dropdown-nav">
      <li><a href="{{ url('/product/all/' . $subcat->id) }}" id="asc_sorting" name="asc">по возрастанию цены</a></li>
          <li><a href="#" id="desc_sorting" name="desc">по убыванию цены</a></li>
      </ul>
  </div>
</div>
  
  
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
            

  {{-- <form class="collection-order " action="" method="get">
  
      
      <label class="collection-order-row is-page-size  ">
        <span class="collection-order-label">
          Показывать по:
        </span>
        <div class="styled-select-wrapper">
          <select class="collection-order-field page-size" name="page_size">
            <option  value='12'>12</option>
            <option  value='24'>24</option>
            <option  value='48'>48</option>
            <option  value='96'>96</option>
          </select>
        </div>
      </label>
      

  </form> --}}
  

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
    
    {{-- <div class="collection-description is-seo editor">
        <p>&nbsp;</p>
  <h3><strong>Готовые решения: комплекты инструментов в тележках</strong></h3>
  <p style="text-align: justify;">Инструментальные тележки с комплектами инструментов широко используются в автосервисах, в мастерских, на производствах. В нашем магазине можно подобрать инструментальные тележки разных типов и наполнения. По всем вопросам обращайтесь +7 (4852) 66-30-73 или sales@mactak-yaroslavl.ru и мы поможем подобрать решение которое подходит именно Вам.</p>
      </div> --}}

    </div>
    <div class="cell-3 cell-4-md hidden-sm flex-first">
        <div class="sidebar-block">
          
        <form class="filter sidebar-filter "  data-filter="sidebar-filter">


            <div class="filter-heading">
              Фильтры
            </div>
          
            <div class="filter-section" data-filter-section="false">
          
              <div class="filter-section-control">
                <button class="filter-section-toggle is-filter-section-toggle" type="button" data-filter-section-toggle>
                  <span class="filter-section-name">
                    Цена
                  </span>
                  <sup class="filter-section-count"></sup>
                  <span class="sidebar-menu-marker filter-marker menu-marker level-1">
                  </span>
                </button>
          
                <button class="filter-section-clear button is-filter-section-clear" type="button" data-filter-section-clear></button>
              </div>
          
              <div class="filter-items-wrapper" data-filter-section-items>
                <div class="filter-items">
                  <div class="filter-item is-range-slider" data-filter-section-item>
                    <div
                      data-min="67100"
                      data-max="142200"
                      data-from=""
                      data-to=""
                      data-range-slider="price">
                    </div>
                  </div>
                </div>
          

              </div>
          
            </div>
          

          
              <div class="filter-section" data-filter-section="false">
          
                <div class="filter-section-control">
                  <button class="filter-section-toggle is-filter-section-toggle" type="button" data-filter-section-toggle>
                    <span class="filter-section-name">Производитель</span>
                    <sup class="filter-section-count"></sup>
                    <span class="sidebar-menu-marker filter-marker menu-marker level-1">
                    </span>
                  </button>
          
                  <button class="filter-section-clear button is-filter-section-clear" type="button" data-filter-section-clear></button>
                </div>
          
                <div class="filter-items-wrapper" data-filter-section-items>
          
                    <ul class="filter-items-list">
                      
                        @foreach ($brands as $brand)
                        <li class="filter-item" data-filter-section-item>
                          <label class="filter-field">
                            <input class="brand-filter" type="checkbox" value="{{ $brand->id }}"  name="filter"/>
                            <span class="filter-field-marker"></span>
                            <span class="filter-field-caption">{{ $brand->name }}</span>
                          </label>
                        </li>
                        @endforeach
                    </ul>
          
          
                </div>
          
              </div>

          </form>
        </div>
    @include('layouts.sidebar')

    </div>
    {{-- <script type="text/template" data-modal="collection-filter"> --}}
    <div data-modal="collection-filter">
        <div class="sidebar">
          <div class="sidebar-block">
            <!-- This is the modal -->
<div id="modal-filter" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <form class="filter sidebar-filter"  data-filter="sidebar-filter">


      <div class="filter-heading">
        Фильтры
      </div>
    
      <div class="filter-section" data-filter-section="false">
    
        <div class="filter-section-control">
          <button class="filter-section-toggle is-filter-section-toggle" type="button" data-filter-section-toggle>
            <span class="filter-section-name">
              Цена
            </span>
            <sup class="filter-section-count"></sup>
            <span class="sidebar-menu-marker filter-marker menu-marker level-1">
            </span>
          </button>
    
          <button class="filter-section-clear button is-filter-section-clear" type="button" data-filter-section-clear></button>
        </div>
    
        <div class="filter-items-wrapper" data-filter-section-items>
          <div class="filter-items">
            <div class="filter-item is-range-slider" data-filter-section-item>
              <div
                data-min="67100"
                data-max="142200"
                data-from=""
                data-to=""
                data-range-slider="price">
              </div>
            </div>
          </div>
    

        </div>
    
      </div>
    

    
        <div class="filter-section" data-filter-section="false">
    
          <div class="filter-section-control">
            <button class="filter-section-toggle is-filter-section-toggle" type="button" data-filter-section-toggle>
              <span class="filter-section-name">Производитель</span>
              <sup class="filter-section-count"></sup>
              <span class="sidebar-menu-marker filter-marker menu-marker level-1">
              </span>
            </button>
    
            <button class="filter-section-clear button is-filter-section-clear" type="button" data-filter-section-clear></button>
          </div>
    
          <div class="filter-items-wrapper" data-filter-section-items>
    
              <ul class="filter-items-list">
                
                  @foreach ($brands as $brand)
                  <li class="filter-item" data-filter-section-item>
                    <label class="filter-field">
                      <input class="brand-filter" type="checkbox" value="{{ $brand->id }}"  name="filter"/>
                      <span class="filter-field-marker"></span>
                      <span class="filter-field-caption">{{ $brand->name }}</span>
                    </label>
                  </li>
                  @endforeach
              </ul>
    
    
          </div>
    
        </div>
    
    </form>
</div>

 
</div>
      
      {{-- <form class="filter is-modal-filter" id="mobile-filter" data-filter="is-modal-filter">
      
        <div class="filter-heading">
          Фильтры
        </div>
      
      
        <div class="filter-section" data-filter-section="false">
      
          <div class="filter-section-control">
            <button class="filter-section-toggle is-filter-section-toggle" type="button" data-filter-section-toggle>
              <span class="filter-section-name">
                Цена
              </span>
              <sup class="filter-section-count"></sup>
              <span class="sidebar-menu-marker filter-marker menu-marker level-1">
              </span>
            </button>
      
            <button class="filter-section-clear button is-filter-section-clear" type="button" data-filter-section-clear></button>
          </div>
      
          <div class="filter-items-wrapper" data-filter-section-items>
            <div class="filter-items">
              <div class="filter-item is-range-slider" data-filter-section-item>
                <div
                  data-min="67100"
                  data-max="142200"
                  data-from=""
                  data-to=""
                  data-range-slider="price">
                </div>
              </div>
            </div>
      
          </div>
      
        </div>
      
          <div class="filter-section" data-filter-section="false">

      
            <div class="filter-items-wrapper" data-filter-section-items>
      
              
                <div class="filter-items">
                  <div class="filter-item is-range-slider" data-filter-section-item>
                    <div
                      data-min="173"
                      data-max="327"
                      data-from=""
                      data-to=""
                      data-range-slider="22952491">
                    </div>
                  </div>
                </div>
      
              <div class="filter-section-toolbar">
                <button type="button" class="filter-section-submit button is-filter-section-submit" data-filter-submit>
                  Применить
                </button>
              </div>
      
            </div>
      
          </div>
          
      
          
          <div class="filter-section" data-filter-section="false">
      
            <div class="filter-section-control">
              <button class="filter-section-toggle is-filter-section-toggle" type="button" data-filter-section-toggle>
                <span class="filter-section-name">Производитель</span>
                <sup class="filter-section-count"></sup>
                <span class="sidebar-menu-marker filter-marker menu-marker level-1">
                </span>
              </button>
      
              <button class="filter-section-clear button is-filter-section-clear" type="button" data-filter-section-clear></button>
            </div>
      
            <div class="filter-items-wrapper" data-filter-section-items>
      
              
                <ul class="filter-items-list">
      
                  @foreach ($brands as $brand)
                  <li class="filter-item" data-filter-section-item>
                    <label class="filter-field">
                      <input class="brand-filter" type="checkbox" value="{{ $brand->id }}"  name="filter"/>
                      <span class="filter-field-marker"></span>
                    <span class="filter-field-caption" name="subcat_id" value="{{ $subcat->id }}">{{ $brand->name }}</span>
                    </label>
                  </li>
                  @endforeach
                  
                </ul>

      
            </div>
      
          </div>

      
      </form> --}}
      
      
{{--       
      <style>
        [data-filter-submit] {
          display: none;
        }
      </style> --}}
      
      
          </div>
        </div>
      {{-- </script> --}}
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
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}

<script type="text/javascript">
      $(document).ready(function(){
        let subcategory_id = $('.breadcrumb-page').attr('value');
            
            $('.brand-filter').click(function(){

                let brand =[];
                $('.brand-filter').each(function (){
                    if($(this).is(":checked")){
                        brand.push($(this).val());
                    }   
                });

                if($('.brand-filter').is(":checked")){

                    brand = brand.toString();
                    $.ajax({
                    url: "{{ url('product/filter/') }}",
                    type:"GET",
                    dataType:"html",
                    data: {brand:brand, subcategory:subcategory_id},
                    success:function(response) { 
                        $('#result').html(response);
                    }
                    });

                } else {
                    location.reload(false);
                }
            });
                    

            $('#desc_sorting').click(function(){
                let desc = 'on';
                $.ajax({
                    url: "{{ url('product/filter/') }}",
                    type:"GET",
                    dataType:"html",
                    data:{subcategory:subcategory_id, desc:desc},
                    success:function(response) { 
                        $('#result').html(response);
                    }
                });
            });

            $('#asc_sorting').click(function(){
                let asc = 'on';
                $.ajax({
                    url: "{{ url('product/filter/') }}",
                    type:"GET",
                    dataType:"html",
                    data:{subcategory:subcategory_id, asc:asc},
                    success:function(response) { 
                        $('#result').html(response);
                    }
                });
            });


    });



</script>
@endsection