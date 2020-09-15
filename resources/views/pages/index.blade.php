@extends('layouts.app')
@section('seo')

<meta name="keywords" content="МАСТАК Ярославль"/>



  <title>
     Vorteil Technology - Оборудование для автосервиса, инструмент для автосервиса, доставка по всей России
  </title>

@endsection
@section('content')

<script type="text/javascript">
(function(){
    var _backcallForm = {
      form: {
        classes: 'is-backcall',
      },
      fields: [
        {
          title: 'Имя',
          name: 'content',
          required: true,
          type: "hidden",
          value: "Сообщение отправлено через форму 'Обратный звонок'"
        },
        {
          type: 'hidden',
          name: 'subject',
          value: 'Обратный звонок'
        },
        {
          title: 'Имя',
          name: 'from',
          required: true,
          type: "hidden",
          value: "sales@mactak-yaroslavl.ru"
        },
        {
          title: 'Имя',
          name: 'name'
        },
        {
          title: 'Телефон',
          name: 'phone',
          required: true
        },
      ],

      sendTo: Shop.sendMessage,
      onValid: function () {},
    };

  $(document).on('click', '.js-backcall-toggle', function (event) {
    event.preventDefault();

    alertify.modal({
      formDefination: _backcallForm
    }).set('title', 'Обратный звонок' );
  });
}());

</script>

 

    </div>

      <div class="content-wrapper container fhg-content">

        <div class="row index-wrapper">
          <div class="index cell-9 cell-8-md cell-12-sm">
            
  



  <div class="promo-slider-wrapper" data-slider="promo" >
    <div class="promo-slider-heading-wrapper">
      <div class="promo-slider-heading">
        Слайдер
      </div>
    </div>

    @foreach ($banners as $banner)
        
      <div class="promo-slide" data-slider-slide>
        
      <a class="promo-slide-inner" href="{{ $banner->url }}" >
        
          <img class="promo-slide-image" src="{{ URL::to($banner->image) }}"  alt="Слайдер Блок 17" />
        </a>
  
      </div>
    @endforeach
    
      {{-- <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" >
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/5250/12194946/original/P33431-050B.jpg"  alt="Слайдер Блок 16" />
        </a>
          
      </div>
    
      <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" >
      
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/2014/10823646/original/NC-4233QH.jpg"  alt="Слайдер Блок 14">
          </a>
        
      </div>
    
      <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" >
        
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/353/9806177/original/m7_logement.jpg"  alt="Слайдер Блок 11" >
        
          </a>
        
      </div>
    
      <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" >
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/354/9806178/original/moduli_instrumentov_king_tony.jpg"  alt="Слайдер Блок 12" />
        
          </a>
        
      </div>
    
      <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" >
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/352/9806176/original/logement_kingtony.jpg"  alt="Слайдер Блок 13" />
          </a>
        
      </div>
    
      <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" >
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/5900/10352396/original/servis_924bedded430086fd5314e90233d4ff1.jpg"  alt="Слайдер Блок 10" />
          </a>
        
      </div>
     --}}

    <div class="promo-slider-pagination" data-slider-pagination></div>

    <div data-slider-controls>
      <button class="promo-slider-prev" data-slider-prev></button>
      <button class="promo-slider-next" data-slider-next></button>
    </div>
  </div>


<div class="special-categories-wrapper">

<div class="special-categories">

  <!-- <div class="special-categories-heading-wrapper">
    <p class="special-categories-heading">Спец.категории 2</p>
  </div> -->

  <div class="row">
    
      <div class="special-category is-data-Спец.категории 2 cell-">
        <a href="https://mactak-yaroslavl.ru/collection/ruchnoy-instrument" class="category-inner">

          <div class="category-image-wrapper">
            <span class="category-image-inner image-container is-square ">

              <img src="https://static-eu.insales.ru/images/collections/1/7202/2071586/large_menu-ruchnoy.png" class="category-image" title='Ручной инструмент'>
            </span>
          </div>

          <div class="category-caption">
            Ручной инструмент
          </div>

        </a>
      </div>

    
      

      <div class="special-category is-data-Спец.категории 2 cell-">
        <a href="https://mactak-yaroslavl.ru/collection/spetsinstrument" class="category-inner">

          <div class="category-image-wrapper">
            <span class="category-image-inner image-container is-square ">

              

              <img src="https://static-eu.insales.ru/images/collections/1/7203/2071587/large_menu-special.png" class="category-image" title='Специнструмент'>
            </span>
          </div>

          <div class="category-caption">
            Специнструмент
          </div>

        </a>
      </div>

    
      

      <div class="special-category is-data-Спец.категории 2 cell-">
        <a href="https://mactak-yaroslavl.ru/collection/pnevmoinstrument" class="category-inner">

          <div class="category-image-wrapper">
            <span class="category-image-inner image-container is-square ">

              

              <img src="https://static-eu.insales.ru/images/collections/1/7206/2071590/large_menu-pneumo.png" class="category-image" title='Пневмоинструмент'>
            </span>
          </div>

          <div class="category-caption">
            Пневмоинструмент
          </div>

        </a>
      </div>

    

  </div>
</div>

</div>



<div class="special-categories-wrapper">

<div class="special-categories">

  <!-- <div class="special-categories-heading-wrapper">
    <p class="special-categories-heading">Спец.категории 3</p>
  </div> -->

  <div class="row">
    
      

      <div class="special-category is-data-Спец.категории 3 cell-">
        <a href="https://mactak-yaroslavl.ru/collection/elektrika-i-svet" class="category-inner">

          <div class="category-image-wrapper">
            <span class="category-image-inner image-container is-square ">

              

              <img src="https://static-eu.insales.ru/images/collections/1/7210/2071594/large_menu-electro.png" class="category-image" title='Электрика и свет'>
            </span>
          </div>

          <div class="category-caption">
            Электрика и свет
          </div>

        </a>
      </div>

    
      

      <div class="special-category is-data-Спец.категории 3 cell-">
        <a href="https://mactak-yaroslavl.ru/collection/sistemy-hraneniya" class="category-inner">

          <div class="category-image-wrapper">
            <span class="category-image-inner image-container is-square ">

              

              <img src="https://static-eu.insales.ru/images/collections/1/7211/2071595/large_menu-mebel.png" class="category-image" title='Системы хранения'>
            </span>
          </div>

          <div class="category-caption">
            Системы хранения
          </div>

        </a>
      </div>

    
      

      <div class="special-category is-data-Спец.категории 3 cell-">
        <a href="https://mactak-yaroslavl.ru/collection/avtoservisnoe-oborudovanie" class="category-inner">

          <div class="category-image-wrapper">
            <span class="category-image-inner image-container is-square ">

              

              <img src="https://static-eu.insales.ru/images/collections/1/7212/2071596/large_menu-autoservice.png" class="category-image" title='Автосервисное оборудование'>
            </span>
          </div>

          <div class="category-caption">
            Автосервисное оборудование
          </div>

        </a>
      </div>

    

  </div>
</div>

</div>



 

<div class="benefits-wrapper">

  <div class="benefits">
    <!-- <div class="benefits-heading-wrapper">
      <div class="benefits-heading">
        Преимущества компании
      </div>
    </div> -->

    <div class="benefits-list row">

      

        <span class="benefit cell-">

          <div class="benefit-inner">
            <div class="benefit-image">
              <div class="image-container is-square">
                <img src="https://static-eu.insales.ru/files/1/2068/9553940/original/benefit1.png" title="Удобная доставка" alt="Удобная доставка" />
              </div>
            </div>

            <div class="benefit-caption hidden-xs">
              Удобная доставка
            </div>
          </div>

        </span>

      

        <span class="benefit cell-">

          <div class="benefit-inner">
            <div class="benefit-image">
              <div class="image-container is-square">
                <img src="https://static-eu.insales.ru/files/1/2069/9553941/original/benefit2.png" title="Выгодные цены" alt="Выгодные цены" />
              </div>
            </div>

            <div class="benefit-caption hidden-xs">
              Выгодные цены
            </div>
          </div>

        </span>

      

        <span class="benefit cell-">

          <div class="benefit-inner">
            <div class="benefit-image">
              <div class="image-container is-square">
                <img src="https://static-eu.insales.ru/files/1/6751/9558623/original/benefit4.png" title="Пожизненная гарантия" alt="Пожизненная гарантия" />
              </div>
            </div>

            <div class="benefit-caption hidden-xs">
              Пожизненная гарантия
            </div>
          </div>

        </span>

      

    </div>
  </div>
</div>






  <div class="promo-slider-wrapper" data-slider="promo" >
    <div class="promo-slider-heading-wrapper">
      <div class="promo-slider-heading">
        Бренды
      </div>
    </div>

    @foreach ($brands as $brand)
    <div class="promo-slide" data-slider-slide> 
      <a class="promo-slide-inner" href="#" title="">
      <img class="promo-slide-image" src="{{ URL::to($brand->logo) }}" title="" alt="" height="350px;" width="350px"/>
      </a>
    </div>
    @endforeach
    {{-- <div class="promo-slide" data-slider-slide> 
      <a class="promo-slide-inner" href="#" title="">
      <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/7041/9567105/original/mactak.jpg" title="" alt=""/>
      </a>
  </div> --}}
    
      {{-- <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" title="">
        
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/7042/9567106/original/kingtony.jpg" title="" alt="" />
          </a>
        
      </div>
    
      <div class="promo-slide" data-slider-slide>
        
          <a class="promo-slide-inner" href="#" title="">
          <img class="promo-slide-image" src="https://static-eu.insales.ru/files/1/7043/9567107/original/mightyseven.jpg" title="" alt="" />
          </a>
        
      </div> --}}
    

    <div class="promo-slider-pagination" data-slider-pagination></div>

    <div data-slider-controls>
      <button class="promo-slider-prev" data-slider-prev></button>
      <button class="promo-slider-next" data-slider-next></button>
    </div>
  </div>




<!-- <div id="qunit"></div>
<div id="qunit-fixture"></div> -->

            
              
<div class="page-headding-wrapper">
  <h1 class="page-headding">
    
      Холдинг МАСТАК

    
  </h1>
</div><!-- /.page_headding -->


<div class="index-description editor">
    {{-- <p style="text-align: justify;">Компания МАСТАК работает на рынке профессионального автослесарного инструмента уже более 20 лет, а именно, производит и продает широкий спектр инструмента под одноименной торговой маркой и является официальным представителем в России всемирно известного производителя King Tony Group и торговых марок King Tony, Mighty Seven и Unison.</p>
  <p>&nbsp;</p>
  <p style="text-align: justify;">На данный момент компанией МАСТАК создана обширная региональная сеть фирменных магазинов и представительств. Сегодня инструмент всех представляемых компанией торговых марок доступен в большинстве регионов России. Мы постоянно расширяемся, ставя для себя цель: достичь не только максимального присутствия в каждом регионе России, но и обеспечить высочайший уровень сервиса и поддержки для каждого нашего клиента.</p> --}}
{!! $settings->description !!}
  </div>
            
          </div>

          
  <div class="cell-3 cell-4-md hidden-sm flex-first">
              
  @include('layouts.sidebar')
  </div>

  

    <div class="sidebar-block news-feed-wrapper">
      <div class="news-feed-inner">
        <div class="news-feed">
          {{-- <div class="product-slider-heading-wrapper">
              <a href="#" class="product-slider-heading">
                Новости
              </a>
          </div> --}}

            
  <div class="blog-slide special-products swiper-slide swiper-slide" >
                  

</div>
            
  <div class="blog-slide special-products swiper-slide swiper-slide" >
                  

<div class="article-preview">
  

  {{-- <div class="article-preview-caption in-sidebar">
    <div class="article-preview-heading-wrapper">
      <p class="article-preview-heading">
        <a href="#" class="article-preview-link">Идеи подарков на 23 февраля</a>
      </p>
    </div>

    <div class="article-preview-body">
      <div class="article-preview-introtext editor">
        
          Мы подготовили отличные варианты подарков на 23 февраля и скидки по промокоду для настоящих мужчин
        
      </div>
    </div>


  </div> --}}
</div>

              </div>
            
        </div>
      </div>
    </div>

            </div>
          

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            


@endsection