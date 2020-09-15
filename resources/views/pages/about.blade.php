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
          <span class="breadcrumb-page">О компании</span>
        </li>
 
    </ul>
  
  </div>

  <div class="page-headding-wrapper">
    <h3 class="page-headding">

    </h3>
  </div><!-- /.page_headding -->
  
  
    <div class="collection-mix-description">
      
      
    </div>


      <div class="page-headding-wrapper">
        <h1 class="page-headding">        
            О компании
        </h1>
      </div><!-- /.page_headding -->


      <p>
        <span>Компания «ВОРТЕЙЛ ТЕХНОЛОДЖИ» является поставщиком оборудования для ремонта и обслуживания автомобилей. Мы предлагаем широкий спектр решений для задач любого уровня.Нам важен каждый клиент, от частной мастерской до дилерского центра. Наши специалисты готовы подключиться к проекту на любом его этапе – от стадии проектирования до стадии обслуживания. Мы желаем успехов и процветания Вам и Вашему бизнесу и сделаем все возможное чтобы Ваши дела шли как можно лучше.&nbsp; 
               </p>		
       <p>
       
                   Компания «ВОРТЕЙЛ ТЕХНОЛОДЖИ» работает по следующим направлениям: 
               </p>
               <ol>
                   <li>Поставки оборудования для ремонта и обслуживания автомобилей.</li>
                   <li>Монтаж и пуско-наладочные работы по оборудованию.</li>
                   <li>Гарантийное и послегарантийное обслуживание оборудования.</li>
                   <li>Проектирование и экономическое обоснование.</li>
                   <li>Помощь в подборе дополнительных услуг в действующих предприятиях.</li>
                </ol>
 
      <div class="toolbar collection-toolbar at-bottom">
        <div class="toolbar-inner">
          <div class="collection-order-wrapper hide-sm">
            

          </div>
  
  

    </div>
    </div>
    
  
    </div>
    <div class="cell-3 cell-4-md hidden-sm flex-first">

    @include('layouts.sidebar')

    </div>
    

</div>
</div>
</div>

@endsection