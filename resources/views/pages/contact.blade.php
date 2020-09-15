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
          <span class="breadcrumb-page">Контакты</span>
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
            Контакты
        </h1>
      </div><!-- /.page_headding -->

      <div class="contact">
		<div class="contact-map">
			<h3>Схема проезда:</h3>
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897.1245873430441!2d39.82181032950721!3d57.670007175623844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85ac44ca0051812e!2z0JLQvtGA0YLQtdC50Lsg0KLQtdGF0L3QvtC70L7QtNC20LggKNCe0LHQvtGA0YPQtNC-0LLQsNC90LjQtSDQtNC70Y8g0LDQstGC0L7RgdC10YDQstC40YHQvtCyKQ!5e0!3m2!1sru!2sru!4v1569417113526!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<br>
		<h4>РЕКВИЗИТЫ</h4>
		<h4>Общество с ограниченной ответственностью</h4>
		<h4>"ВОРТЕЙЛ ТЕХНОЛОДЖИ"</h4>
		<p>Юридический адрес: 150044, Ярославская обл., г. Ярославль, Ленинградский пр-т, д. 27Б, стр. 2, оф. 1<br>
		Фактический адрес: 150044, Ярославская обл., г. Ярославль, Ленинградский пр-т, д. 27Б, стр. 2, оф. 1</p>
		<br>
		<p>ИНН 7602110370<br>
			КПП 760201001<br>
			ОГРН 1147602007904<br>
			Расчетный счет 40702810802000011067<br>
			Банк: ЯРОСЛАВСКИЙ Ф-Л ОАО «ПРОМСВЯЗЬБАНК» г. Ярославль<br>
			БИК 047888760<br>
			К/сч 30101810300000000760<br></p>
			<br>
		<p>Телефоны:</p>
		<ul>
			<li>+7 (4852) 68-33-96</li>
			<li>+7 (4852) 90-33-96</li>
			<li>+7 (4852) 68-34-96 (Сервисная служба)</li>
		</ul>
		<br>
		<p>Email:</p>
		<ul>
			<li>sales@vorteil-technology.ru</li>
			<li>service@vorteil-technology.ru (Сервисная служба)</li>
		</ul>
		<br>
		<p>Режим работы:
		Пн. – Пт.: с 9:00 до 18:00</p>


</div>
 
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


@endsection