@php
    $categories = DB::table('categories')->get();
    $settings = DB::table('settings')->first();

@endphp
<!DOCTYPE html>
<html>
  <head>
    <meta data-config="{&quot;money_with_currency_format&quot;:{&quot;delimiter&quot;:&quot; &quot;,&quot;separator&quot;:&quot;.&quot;,&quot;format&quot;:&quot;%n %u&quot;,&quot;unit&quot;:&quot;руб&quot;,&quot;show_price_without_cents&quot;:1},&quot;currency_code&quot;:&quot;RUR&quot;,&quot;facebook&quot;:{&quot;pixelActive&quot;:false,&quot;currency_code&quot;:&quot;RUB&quot;,&quot;use_variants&quot;:null},&quot;vk&quot;:{&quot;pixel_active&quot;:null,&quot;price_list_id&quot;:null},&quot;new_ya_metrika&quot;:true,&quot;ecommerce_data_container&quot;:&quot;dataLayer&quot;,&quot;common_js_version&quot;:&quot;v2&quot;,&quot;vue_ui_version&quot;:null,&quot;account_id&quot;:697348,&quot;hide_items_out_of_stock&quot;:false,&quot;forbid_order_over_existing&quot;:true,&quot;minimum_items_price&quot;:null,&quot;enable_comparison&quot;:true,&quot;locale&quot;:&quot;ru&quot;,&quot;client_group&quot;:null,&quot;consent_to_personal_data&quot;:{&quot;active&quot;:true,&quot;obligatory&quot;:true,&quot;description&quot;:&quot;Настоящим подтверждаю, что я ознакомлен и согласен с условиями \u003ca href=&#39;/page/oferta&#39; target=&#39;blank&#39;\u003eоферты и политики конфиденциальности\u003c/a\u003e.&quot;},&quot;recaptcha_key&quot;:&quot;6Lc0T0YUAAAAAAVNiH-_bnSC4E-YHMFTeYOqZyRx&quot;,&quot;checkout_float_order_content_block&quot;:true}" name="shop-config" content="" /><meta name='yandex-map-api-key' content="6aa0bb7c-85ae-4738-9601-7f2272b2de08" /><meta name='google-map-api-key' content="AIzaSyBJUhzK6ljhWX9KJpzs26VlyrHszQ1EgxE" /><meta name='js-evnvironment' content='production' /><meta name='default-locale' content='ru' /><meta name='insales-redefined-api-methods' content="[]" /><script src="packs/js/shop_bundle-85647ffaea0c12ba3b42.js"></script><script type="text/javascript" src="https://assets3.insales.ru/assets/common-js/common.v2.17.3.js"></script>
  


    <!-- meta -->
<meta charset="UTF-8" />

@yield('seo')

<meta name="robots" content="index,follow" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<script>window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"fd0d8ed08d","applicationID":"40346406","transactionName":"c14IQRMOXV4EQR1DUF9BFRoTDl5GTlpcVF1ICw5cFT5CVxNFV0I=","queueTime":1,"applicationTime":35,"agent":""}</script>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<meta name="handle" content="[]"/ data-current-collection="[]">


<style>
  .menu:not(.insales-menu--loaded) {
    display: flex;
    list-style: none;
    margin-left: 0;
    padding-left: 0;
    box-shadow: none;
    width: auto;
    background: transparent;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .menu:not(.insales-menu--loaded) .menu-link {
    display: block;
  }

  .menu:not(.insales-menu--loaded) .menu,
  .menu:not(.insales-menu--loaded) .menu-marker,
  .menu:not(.insales-menu--loaded) .menu-icon {
    display: none;
  }

  @media only screen and (min-width: 975px) {
    #mobile-filter {
        display: none;
    }
    /* #mobile-search {
        display: none;
    } */
  
  }
</style>


<!-- canonical url-->
<!-- rss feed-->

<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:title" content="МАСТАК Ярославль" />
{{-- <meta property="og:image" content="https://assets3.insales.ru/assets/1/6410/1227018/1587841688/logotype.jpg" /> --}}
    
<!-- icons-->
{{-- <link rel="icon" type="image/png" sizes="16x16" href="#" /> --}}
{{-- <link rel="stylesheet" type="text/css"  href="https://assets3.insales.ru/assets/1/6410/1227018/1587841688/jquery.fancybox.min.css" /> --}}

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic,latin" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="https://assets3.insales.ru/assets/1/6410/1227018/1587841688/theme.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" /> 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap4/bootstrap.min.css') }}"> --}}

<style>
  body {
    display:inline;
  }
  footer {
    display:inline;
  }

  .search-widget-button:before {
   color:white!important; 
  }
  .filter-submit {
   color:white!important; 
  }
  .button-text {
   color:white; 
  }
  .co-tabs-node:hover {
   color:white; 
  }
  .co-tabs-node {
   color:white; 
  }  
  .co-toggable_field-input--radio {
    box-shadow: inset 0 0 0 6px black!important;
    background-color:black;
    margin:auto;
    width: 22px;
    min-width: 22px;
    max-width: 12px;
    height: 22px;
    border-radius: 16px;
  }
  .co-toggable_field-input--radio input:checked+span {
    box-shadow: inset 0 0 0 6px white!important;
    background-color:black;
    margin:auto;
  }
  #create_order:hover {
   color:white; 
  }
  .co-tabs-node:focus, .co-tabs-node:active, .co-tabs-node:hover {
   color:white!important; 
  }
   .co-delivery_method-input {
    background-color: black;
    width: 22px;
    min-width: 22px;
    max-width: 22px;
    height: 22px;
    border-radius: 16px;
   }
</style>

  </head>

<body class="fhg-body" style="opacity: 0;">



    <div class="body-wrapper">

      <noscript>
<div class="njs-alert-overlay">
  <div class="njs-alert-wrapper">
    <div class="njs-alert">
      <p>Включите в вашем браузере JavaScript!</p>
    </div>
  </div>
</div>
</noscript>


      <div class="top-panel-wrapper">
        <div class="container">
          <div class="top-panel row js-top-panel-fixed">
  {{-- <div class="top-menu-wrapper hidden-sm">
    <a class="client-account-link" href="https://mactak-yaroslavl.ru/client_account/login">
      
        <span>Вход / Регистрация</span>
      
    </a>
  </div> --}}
  <div class="top-menu-wrapper cell- hidden shown-sm">
    <button type="button" class="top-panel-open-sidebar button js-open-sidebar"></button>
  </div>
  <div class="hidden shown-sm">
    {{-- <button type="button" class="top-panel-open-search button js-open-search-panel shown-sm"></button> --}}
    <form class="search-widget in-header" action="{{ url('search/result/') }}" method="get">
      @csrf
      <input  name="search" id="mobile-search" class="search-widget-field" placeholder="Поиск" autocomplete="off">
      <button type="submit" class="search-widget-button button is-widget-submit"></button>
      <article class="search-suggestions"></article>
    </form>

  </div>

  <div class="top-menu-icons-block collapse-block hide show-sm cell-">
    <div class="contacts-top-menu hidden shown-sm">
    

      <button type="button" class="contacts-icon js-open-contacts"></button>

    
      <div class="contacts-top-menu-block cell-12 hidden">
        <div class="header-block js-contacts-header cell- ">


          <div class="email text-left ">
            
                <a href="mailto:{{ $settings->email }}" class="contact-link email">
                   {{ $settings->email }}
                </a>
              
          </div>

          <div class="phone text-left ">
            
                <a href="tel:{{ $settings->phone_one }}" class="contact-link tel">
                  {{ $settings->phone_one }}
                </a>
                <br>
                <a href="tel:{{ $settings->phone_two }}" class="contact-link tel">
                  {{ $settings->phone_two }}
                </a>
                </br><a href="#modal-feedback" uk-toggle>Обратный звонок</a>
              
          </div>

        </div>

      </div>
    </div>

    

    
      {{-- <div class="compares-widget is-top-panel cell- hidden shown-sm">
        <a href="#" class="compares-widget-link"  title="Сравнение">
          <span class="compare-widget-caption is-top-panel">
            <span class="compare-widget-icon-header"></span>
            <span class="compares-widget-count is-top-panel js-compares-widget-count"></span>
          </span>
        </a>
      </div>
     --}}

    <div class="shopcart-widget-wrapper is-top-panel cell-  hidden shown-sm">
      
<div class="shopcart-widget is-top-panel ">
  <a href="{{ route('cart') }}" title="Корзина" class="shopcart-widget-link ">
    <span class="shopcart-widget-icon">
        <span class="shopcart-widget-count js-shopcart-widget-count is-top-panel">{{ Cart::count() }}</span>
    </span>
    <span class="shopcart-widget-data">
      <span class="shopcart-widget-caption">
      Корзина
      </span>

      <span class="shopcart-widget-amount js-shopcart-widget-amount hidden-md"></span>
    </span>
  </a>

</div>




</div>
  </div>

  <div class="block-top-panel hidden-sm" >
    
  </div>

</div>

        </div>
      </div>

      <div class="container header-wrapper">
        <header class="header">
  <div class="header-inner row flex-between flex-center-sm flex-middle ">
    <div class="left-blocks cell-">
      <div class="left-blocks-inner row flex-middle">

        <div class="header-block js-contacts-header cell-4 hidden-sm ">

          <div class="email text-left hidden-sm">
            
                <a href="mailto:{{ $settings->email }}" class="contact-link email">{{ $settings->email }}</a>
              
          </div>
          <div class="phone text-left text-center-sm hidden-sm">
            
                  <a href="tel:{{ $settings->phone_one }}" class="contact-link tel">{{ $settings->phone_one }}</a><br>
                  <a href="tel:{{ $settings->phone_two }}" class="contact-link tel">{{ $settings->phone_two }}</a>
                  <br>
                  </br><a href="#modal-feedback" uk-toggle>Обратный звонок</a>
 
          </div>

        </div>
    <div class="logotype-wrapper cell-4 cell-7-md cell-12-sm ">
          <div class="logotype text-center-sm">
            
            <a  href="{{ url('/')}}" class="logotype-link">
            <img src="{{ URL::to($settings->logo) }}" class="logotype-image" alt="МАСТАК Ярославль" title="МАСТАК Ярославль" />
            </a>
          </div>
        </div>

          <div class="header-info header-block hidden-sm cell-4 cell-7-md cell-12-sm">
            <div class="header-block header-compare">

              
              <div class="compares-widget  ">
                {{-- <a href="https://mactak-yaroslavl.ru/compares" class="compares-widget-link" title="Сравнение">
                  <span class="compare-widget-caption ">
                    <span class="compare-widget-icon-header"></span>
                    <span class="compares-widget-count js-compares-widget-count"></span>
                  </span>
                </a> --}}
              </div>
              

              <div class="shopcart-widget-wrapper  hidden-sm">
                <div class="shopcart-widget in-header">
                  <a href="{{ route('cart') }}" title="Корзина" class="shopcart-widget-link ">
                    <span class="shopcart-widget-icon">
                        <span class="shopcart-widget-count js-shopcart-widget-count">{{ Cart::count() }}</span>
                    </span>
                    <span class="shopcart-widget-data">
                      <span class="shopcart-widget-caption">
                      Корзина:{{ Cart::subtotal() }}.руб
                      </span>

                      <span class="shopcart-widget-amount js-shopcart-widget-amount hidden-sm"></span>
                    </span>
                  </a>

                    <div class="cart-widget-dropdown hidden hidden-sm">
                      <form action="index.html" method="post" class="shopping-cart js-cart-widget-empty" >
                        <div class="cart-body">
                          <div class="cart-list js-cart-dropdown">

                          </div>
                        </div>

                        <div class="cart-footer row flex-between ">

                          <div class=" cart-block-checkout is-cart-dropdown">
                            <div class="cart-total js-shopcart-total-summ"></div>

                            <a class="cart-checkout button is-primary is-cart-dropdown" href="#">
                              <span class="button-text">
                                Оформить
                              </span>
                            </a>
                          </div>

                        </div>
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="make_order" value="">
                        <input type="hidden" name="lang" value="ru"/>

                      </form>
                      

                      <div class="notice notice-info text-center js-cart-empty ">
                        Ваша корзина пуста
                      </div>

                      
                    </div>
                  </div>
              </div>
            </div>
          </div>

      </div>
    </div>


  </div>

<!-- Завершение заказа -->
  @if(Session::has('messege'))
  <div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ Session::get('messege') }}</p>
</div>
  @endif
<!---->

  <div class="main-menu-wrapper hidden-sm">
      

  <ul class="main-menu menu level-1" data-menu-id="main-menu">
    
      <li class="main-menu-item menu-item">
        <div class="main-menu-item-controls menu-item-controls">
          

          <a href="{{ url('/credit') }}" class="main-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
            Рассрочка
          </a>
        </div>
      </li>
      <li class="main-menu-item menu-item">
        <div class="main-menu-item-controls menu-item-controls">
          

          <a href="{{ url('/about') }}" class="main-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
            О компании
          </a>
        </div>
      </li>


      <li class="main-menu-item menu-item">
        <div class="main-menu-item-controls menu-item-controls">
      
          <a href="{{ url('/contact') }}" class="main-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
            Контакты
          </a>
        </div>
      </li>

      <li class="main-menu-item menu-item">
        <div class="main-menu-item-controls menu-item-controls">
          <a href="{{ url('/delivery') }}" class="main-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
            Доставка
          </a>
        </div>
      </li>


      <li class="main-menu-item menu-item">
        <div class="main-menu-item-controls menu-item-controls">
        
          <a href="{{ url('/warranty') }}" class="main-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
            Гарантия
          </a>
        </div>
      </li>

      <li class="main-menu-item menu-item">
        <div class="main-menu-item-controls menu-item-controls">
          

          <a href="#" class="main-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
            Сервис
          </a>
        </div>
      </li>

    
  </ul>

  <form class="search-widget in-header " action="{{ url('search/result/') }}" method="get">
    @csrf
    <input  name="search" id="search" class="search-widget-field" placeholder="Поиск" autocomplete="off">
      <button type="submit" class="search-widget-button button is-widget-submit"></button>
      <article class="search-suggestions"></article>
  </form>
 


</div>
</header>


@yield('content')
  </div>

</div>


<div class="footer-wrapper">
  <div class="container">
 
<!-- Форма обратного звонка -->
<div id="modal-feedback" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <h2 class="uk-modal-title">Обратный звонок</h2>
    @if ($errors->any())
      <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
      @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
      </div>
      @endif
    <form action="{{ url('send/notification/') }}" method="POST" class="uk-grid-small" uk-grid>
      @csrf
        <div class="uk-width-1-2@s">
            <input class="uk-input" name="name" type="text" placeholder="Имя">
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" name="phone" type="text" placeholder="Телефон">
        </div>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
          <label><input class="uk-checkbox" name="policy" type="checkbox"> Настоящим подтверждаю, что я ознакомлен и согласен с условиями оферты и политики конфиденциальности.</label>
      </div>
      <button type="submit" class="uk-button uk-button-primary">Отправить</button>
    </form>
    </div>
  </div>
  <!---->
<footer class="footer ">

    <div class="footer-menu-wrapper is-vertical cell-12 cell-12-sm text-center">
    <ul class="footer-menu menu level-1" data-menu-id="footer-menu">
      

        

        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

          <a href="{{ url('/policy') }}" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Политика конфиденциальности и оферта
            </a>
          </div>
        </li>



        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="{{ url('/agreement') }}" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Пользовательское соглашение
            </a>
          </div>
        </li>


        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="{{ url('/exchange') }}" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Условия обмена и возврата
            </a>
          </div>
        </li>

      

        

        {{-- <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="#" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Обратная связь
            </a>
          </div>
        </li> --}}

      

        

        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="{{ url('/delivery') }}" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Оплата и доставка
            </a>
          </div>
        </li>

      

        

        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="{{ url('/warranty') }}" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Гарантия
            </a>
          </div>
        </li>

      

        

        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="{{ url('/contact') }}" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Контакты
            </a>
          </div>
        </li>

      

        

        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="{{ url('/credit') }}" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Рассрочка
            </a>
          </div>
        </li>

      
      

        

        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="#" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Новости
            </a>
          </div>
        </li>

      

        

        <li class="footer-menu-item menu-item">
          <div class="footer-menu-item-controls menu-item-controls">
            

            <a href="#" class="footer-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Сервис
            </a>
          </div>
        </li>

      
    </ul>
  </div>



<div class="footer-bottom-wrapper row">
  <div class="footer-block js-contacts-header  cell-4 cell-12-sm">
    <div class="phone text-left text-center-sm">
      
            <a href="tel:{{ $settings->phone_one }}" class="contact-link tel">{{ $settings->phone_one }}</a><br>
            <a href="tel:{{ $settings->phone_two }}" class="contact-link tel">{{ $settings->phone_two }}</a>
        
    </div>

    <div class="email text-left text-center-sm ">
      
          <a href="mailto:{{ $settings->email }}" class="contact-link email">{{ $settings->email }}</a>
        
    </div>
  </div>
  
  <div class="social-link-wrapper cell-4 cell-12-sm cell-12-xs flex-first-sm ">
    

  </div>
  

</div>
<button class="js-arrow-up">
</button>

</footer>

        </div>
      </div>
    </div>
  
    <div itemscope itemtype="http://schema.org/Organization" style="display: none;">
      <meta itemprop="name" content="Мастак-Ярославль"/>
      <link itemprop="url" href="index.html"/>
      <link itemprop="image" href="https://assets3.insales.ru/assets/1/6410/1227018/1587841688/Mactak_yar.jpg"/>
      <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <meta itemprop="streetAddress" content="Московский проспект, д. 97, помещение 19"/>
        <meta itemprop="postalCode" content="150030"/>
        <span itemprop="addressLocality" content="Ярославль"/>
      </div>
      <meta itemprop="telephone" content="+7 4852 66-30-73"/>
      <meta itemprop="telephone" content="+7 965 726-30-73"/>
      <meta itemprop="email" content="sales@mactak-yaroslavl.ru"/>
    </div>

</body>
  <script>
 
    $(document).ready(function(){
  $('body').css('opacity', '1');
});
  
  </script>


@include('layouts.sidebar_mobile')

<script type="text/template" data-modal="collection-filter">
  <div class="sidebar">
    <div class="sidebar-block">


<div style="margin-bottom: -2rem;"></div>


<form class="filter is-modal-filter hidden" action="index.html" method="get" data-filter="is-modal-filter">

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
            data-min="0"
            data-max="0"
            data-from=""
            data-to=""
            data-range-slider="price">
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


  <div class="filter-controls">
    
      <button type="submit" class="filter-submit button is-primary is-filter-submit" data-filter-submit>
        Применить
      </button>
    

    <a href="index.html" class="filter-clear button is-secondary is-sfilter-clear" data-filter-clear>
      Сбросить
    </a>
  </div>

    <input type="hidden" name="q" value=""/>
  

</form>


<style>
  [data-filter-submit] {
    display: none;
  }
</style>

<script>
  $(document).on('change', '[data-filter-section-item], .filter-field-input', function() {
    /*
    $('[data-range-slider] input').each(function() {
      const min = $(this).closest('.filter-items').attr('min');
      const max = $(this).closest('.filter-items').attr('max');
      if ($(this).attr('data-range-slider-input') === 'from' && +$(this).val() > min) {
        $(this).removeAttr('disabled');
      } else if ($(this).attr('data-range-slider-input') === 'to' && +$(this).val() < max) {
        $(this).removeAttr('disabled');
      }
    });
    */
    const ser = $(this).closest('form').serialize();
    location.href = `?${ser}`;
  });
</script>
    </div>
  </div>
</script>


  

 <script type="text/template" hidden data-template-id="cart-widget-dropdown">
  <% _.forEach( obj.order_lines, function (item) { %>
    <div class="cart-item is-cart-dropdown" data-product-id="<%= item.product.id %>" data-item-id="<%= item.id %>">
      <div class="cart-item-inner item is-cart-dropdown">

        <div class="item-image-wrapper is-cart-dropdown">
          <div class="item-image-inner">
            <a href="https://mactak-yaroslavl.ru/&lt;%=&#32;item.product.url&#32;%&gt;" title="<%= item.title %>" class="item-image-link image-container is-square  ">
              <img title="<%= item.title %>" alt="<%= item.title %>" src="https://mactak-yaroslavl.ru/&lt;%=&#32;item.first_image.small_url&#32;%&gt;" class="item-image">
            </a>
          </div>
        </div>

        <div class="item-content">
          <div class="item-caption">
            <a href="https://mactak-yaroslavl.ru/&lt;%=&#32;item.product.url&#32;%&gt;" class="item-title">
              <%= item.title %>
            </a>
          </div>
    <div class="item-numbers">
      <div class="item-prices ">
        <%= item.quantity %> x
      </div>

      <div class="item-prices is-total-price js-item-total-price">
        <%= item.total_price %>
      </div>
    </div>

      <div class="item-delete">
        <button type="submit" class="button is-item-delete is-transparent" data-item-delete="<%= item.id %>">

      </button>
    </div>

        </div>
      </div>

    </div>

  <% }); %>
</script>

<script type="text/template" hidden data-template-id="view_products">
  <div class="views-tovar-heading">
    Просмотренные товары
  </div>
  <div class="product-slider is-reviews" data-slider="reviews-products">

    <div  class="product-slider-controls" data-slider-controls>
      <button class="product-slider-prev reviews-products-button" data-slider-prev></button>
      <button class="product-slider-next reviews-products-button" data-slider-next></button>
    </div>
  <% _.forEach( obj, function(item, key) { %>

<div class="reviews-products" data-slider-slide>
    <div class="product-card " >
      <div class="product-card-inner">

        <a href="https://mactak-yaroslavl.ru/&lt;%=&#32;item.url&#32;%&gt;"class="product-card-photo image-container is-square " title="<%= item.title %>">
            <img src="https://mactak-yaroslavl.ru/&lt;%=&#32;item.first_image.large_url&#32;%&gt;"   alt="<%= item.title %>" class="product-card-image">
        </a>


      <div class="product-card-form_block">
        <div class="product-card-price product-prices in-card">
          <div class="price in-card">
              <%= Shop.money.format(item.price_min) %>
          </div>
        </div>

      <form class="product-cart-control" method="post">

          <div class="more-info">
            <a class="button button-buy is-primary button-more" href="https://mactak-yaroslavl.ru/&lt;%=&#32;item.url&#32;%&gt;" title='<%= item.title %>'>
            </a>
          </div>

        </form><!-- /.product-control -->
        </div>
        <a  href="https://mactak-yaroslavl.ru/&lt;%=&#32;item.url&#32;%&gt;" class="product-link">
        <%= item.title %>
        </a>
      </div>
    </div>
  </div>
  <% }); %>
</div>
</script>

<script src="{{ asset('js/shop_bundle-85647ffaea0c12ba3b42.js')}}"></script>
<script src="{{ asset('js/shop_bundle-5ac1444dd041802b79fd.js')}}"></script>
<script src="{{ asset('js/shop_bundle-c4180c8f40f71160cda9.js')}}"></script>


<script type="text/javascript">
  Site = _.merge({}, Site, {
    template: 'index',

    menuConfig: {
      'top-menu': {
        levels: {
          1: ['horizontal'],
        }
      },
      'catalog-menu': {
        levels: {
          1: ['horizontal'],
          2: ['vertical', 'drop', 'down'],
          default: ['vertical', 'drop', 'right'],
        }
      },
      'mega-menu': {
        levels: {
          1: ['vertical'],
          2: ['vertical', 'drop', 'right'],
          3: ['vertical'],
          default: ['vertical', 'collapse']
        }
      },
      'sidebar-menu': {
        levels: {
          default: ['vertical', 'collapse']
        }
      },
      'mobile-sidebar-menu': {
        levels: {
          default: ['vertical', 'collapse']
        }
      }
    },
    filterConfig: {
      'sidebar-filter': {
        submitOnChange: false,
        collapse: true,
        openActive: true,
      },
      'is-modal-filter': {
        collapse: true,
        openActive: true,
      }
    },
    alertifyConfig :{
      glossary: {
        modal: {
          ok: 'Отправить',
          cancel: 'Отмена',
        },
        cart: {
          item_added: 'Товар добавлен в корзину',
          item_removed: 'Товар удален из корзины'
        },
        compares: {
          product_added: 'Товар добавлен в сравнение',
          product_removed: 'Товар удален из сравнения',
          overload: 'Достигнуто максимальное количество сравниваемых товаров'
        }
      }
    },
    messages: {
      field_name: 'Имя',
      field_email: 'Email',
      field_message: 'Сообщение',
      label_product: 'Товар',
      label_variant: 'Вариант',

      preorder: 'Предзаказ',
      button_submit: 'Отправить'
    }
  });




  Products.setConfig({});

  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };
</script>


<!--
<script src="https://assets3.insales.ru/assets/1/6410/1227018/1587841688/insales.ui.range-slider.js"></script> -->
<script src="https://assets3.insales.ru/assets/1/6410/1227018/1587841688/plugins.js"></script>

<script src="https://assets3.insales.ru/assets/1/6410/1227018/1587841688/theme.js" charset="utf-8"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

{{-- <script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- jQuery library -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  //Живой поиск
  $(document).ready(function(){
  
    $( "#search" ).autocomplete({
      source: function( request, response ) {
        // Fetch data
        $.ajax({
          url:"{{ url('search/autocomplete') }}",
          type: 'get',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
      select: function (event, ui) {
        // Set selection
        $('#search').val(ui.item.label); 
        return false;
      }
    });
  
  });
</script>
<script type="text/javascript">
  //Живой поиск
  $(document).ready(function(){
  
    $( "#mobile-search" ).autocomplete({
      source: function( request, response ) {
        // Fetch data
        $.ajax({
          url:"{{ url('search/autocomplete') }}",
          type: 'get',
          dataType: "json",
          data: {
            search: request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
      select: function (event, ui) {
        // Set selection
        $('#mobile-search').val(ui.item.label); 
        return false;
      }
    });
  
  });
</script>

 
<script>
  @if(Session::has('messege'))

    // var type="{{Session::get('alert-type','info')}}"
    // console.log('{{ Session::get('messege') }}');
    // toastr.success("{{ Session::get('messege') }}");
    // switch(type){
    //     case 'info':
    //          toastr.info("{{ Session::get('messege') }}");
    //          break;
    //     case 'success':
    //         toastr.success("{{ Session::get('messege') }}");
    //         break;
    //     case 'warning':
    //        toastr.warning("{{ Session::get('messege') }}");
    //         break;
    //     case 'error':
    //         toastr.error("{{ Session::get('messege') }}");
    //         break;
    // }
  @endif
</script>

<script>
  $(() => {
    const suggest = debounce((str, input) => {
      if (!str) {
        $('.search-suggestions').hide().empty();
        return;
      }

      $.get(`/search.json?q=${str}`)
      .then(products => {

        $('.search-suggestions').empty();

        if (!products.length) {
          $('.search-suggestions').hide();
          return;
        }

        const productsToRender = products.slice(0, 10);
        const regex = new RegExp(`(${str})`, 'gi');

        productsToRender.forEach(product => {
          const productTitle = product.title.replace(regex, '<strong>$1</strong>');

          const $link = $('<a>', { class: 'search-suggestions_link', href: product.url }).appendTo('.search-suggestions');
          const $title = $('<span>', { class: 'search-suggestions_title', html: productTitle }).appendTo($link);
          const $price = $('<span>', { class: 'search-suggestions_price', text: Shop.money.format(product.variants[0].price) }).appendTo($link);
        });

        $(input).find('~ .search-suggestions').show();
      });
    }, 250);

    $(document).on('input', '.search-widget-field', function(evt) {
      const str = $(this).val();
      suggest(str, evt.target);
    });

    $(document).on('click', evt => {
      $('.search-suggestions').hide();
      if ($(evt.target).closest('.search-widget-field').length && $('.search-suggestions').first().children().length) {
        $(evt.target).find('~ .search-suggestions').show();
      }
    });

    $(document).on('keydown', evt => {
      if (!'ArrowUp ArrowDown'.includes(evt.key)) return;

      const $form = $(evt.target).closest('form');
      const $suggestions = $form.find('.search-suggestions');

      if ($(evt.target).hasClass('search-widget-field') && evt.key === 'ArrowDown' && $suggestions.is(':visible')) {
        evt.preventDefault();
        $suggestions.find('.search-suggestions_link').first().focus();
      }

      if ($(evt.target).hasClass('search-suggestions_link') && evt.key === 'ArrowDown') {
        evt.preventDefault();
        $(evt.target).next().focus();
      }

      if ($(evt.target).hasClass('search-suggestions_link') && evt.key === 'ArrowUp') {
        evt.preventDefault();
        $(evt.target).prev().focus();
      }
    });
  });
</script>

</html>