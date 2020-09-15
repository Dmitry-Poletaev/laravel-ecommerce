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
      <span class="breadcrumb-page">Каталог</span>
    </li>
 
</ul>

</div>

<div class="page-headding-wrapper">
<h1 class="page-headding">

  
    Каталог
  


</h1>
</div><!-- /.page_headding -->



<div class="collection-mix-description">


</div>

<div class="categories-subcollections">
<div class="row">

  <div class="category-subcollections cell-">
    <a href="https://mactak-yaroslavl.ru/collection/ruchnoy-instrument" class="category-inner">
      <div class="category-image-wrapper">
        <span class="category-image-inner image-container is-square  ">

          

          <img src="https://static-eu.insales.ru/images/collections/1/7202/2071586/large_menu-ruchnoy.png" class="category-image" title='Ручной инструмент'>
        </span>
      </div>

      <div class="category-caption">
        Ручной инструмент
      </div>

    </a>
  </div>

  {{-- <div class="category-subcollections cell-">
    <a href="https://mactak-yaroslavl.ru/collection/spetsinstrument" class="category-inner">
      <div class="category-image-wrapper">
        <span class="category-image-inner image-container is-square  ">

          

          <img src="https://static-eu.insales.ru/images/collections/1/7203/2071587/large_menu-special.png" class="category-image" title='Специнструмент'>
        </span>
      </div>

      <div class="category-caption">
        Специнструмент
      </div>

    </a>
  </div>

  <div class="category-subcollections cell-">
    <a href="https://mactak-yaroslavl.ru/collection/pnevmoinstrument" class="category-inner">
      <div class="category-image-wrapper">
        <span class="category-image-inner image-container is-square  ">

          

          <img src="https://static-eu.insales.ru/images/collections/1/7206/2071590/large_menu-pneumo.png" class="category-image" title='Пневмоинструмент'>
        </span>
      </div>

      <div class="category-caption">
        Пневмоинструмент
      </div>

    </a>
  </div>

  <div class="category-subcollections cell-">
    <a href="https://mactak-yaroslavl.ru/collection/elektrika-i-svet" class="category-inner">
      <div class="category-image-wrapper">
        <span class="category-image-inner image-container is-square  ">

          

          <img src="https://static-eu.insales.ru/images/collections/1/7210/2071594/large_menu-electro.png" class="category-image" title='Электрика и свет'>
        </span>
      </div>

      <div class="category-caption">
        Электрика и свет
      </div>

    </a>
  </div>

  <div class="category-subcollections cell-">
    <a href="https://mactak-yaroslavl.ru/collection/sistemy-hraneniya" class="category-inner">
      <div class="category-image-wrapper">
        <span class="category-image-inner image-container is-square  ">

          

          <img src="https://static-eu.insales.ru/images/collections/1/7211/2071595/large_menu-mebel.png" class="category-image" title='Системы хранения'>
        </span>
      </div>

      <div class="category-caption">
        Системы хранения
      </div>

    </a>
  </div>

  <div class="category-subcollections cell-">
    <a href="https://mactak-yaroslavl.ru/collection/avtoservisnoe-oborudovanie" class="category-inner">
      <div class="category-image-wrapper">
        <span class="category-image-inner image-container is-square  ">

          

          <img src="https://static-eu.insales.ru/images/collections/1/7212/2071596/large_menu-autoservice.png" class="category-image" title='Автосервисное оборудование'>
        </span>
      </div>

      <div class="category-caption">
        Автосервисное оборудование
      </div>

    </a>
  </div>

  <div class="category-subcollections cell-">
    <a href="https://mactak-yaroslavl.ru/collection/aktsii-i-skidki" class="category-inner">
      <div class="category-image-wrapper">
        <span class="category-image-inner image-container is-square  ">

          

          <img src="https://static-eu.insales.ru/images/products/1/4419/308425027/large_PNC-8343-8.jpg" class="category-image" title='Акции и скидки'>
        </span>
      </div>

      <div class="category-caption">
        Акции и скидки
      </div>

    </a>
  </div> --}}

</div>
</div>








        
      </div>

      <div class="cell-3 cell-4-md hidden-sm flex-first">
          

        @include('layouts.sidebar')
        </div>


    </div>
</div>
@endsection