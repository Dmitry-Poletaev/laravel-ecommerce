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
          <span class="breadcrumb-page">Условия обмена и возврата</span>
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
            Условия обмена и возврата
        </h1>
      </div><!-- /.page_headding -->

      <div class="editor">
        <p>&nbsp;</p>
    <p style="text-align: justify;">Наш интернет-магазин работает в строгом соответствии с <strong>Законом &laquo;О защите прав потребителей&raquo;</strong>.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Согласно ст. 25 Закона &laquo;О защите прав потребителей&raquo;, вы можете вернуть или обменять товар <strong>надлежащего</strong> качества, приобретённый в розничном магазине, в течение 14 дней, не считая дня покупки.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Согласно ст. 26.1 Закона &laquo;О защите прав потребителей&raquo;, вы вправе вернуть <strong>любой</strong> товар, приобретённый в интернет-магазине, в течение семи дней после получения товара без указания причин возврата.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Возврат товара надлежащего качества возможен в случае, если <strong>сохранены его товарный вид, потребительские свойства, а также документ, подтверждающий факт и условия покупки указанного товара</strong>. Отсутствие у потребителя документа, подтверждающего факт и условия покупки товара, не лишает его возможности ссылаться на другие доказательства приобретения товара у данного продавца.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Потребитель не вправе отказаться от товара надлежащего качества, имеющего индивидуально-определенные свойства, если указанный товар может быть использован исключительно приобретающим его потребителем (<em>прим.: если товар изготовлен на заказ</em>).</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">При отказе потребителя от товара продавец должен возвратить ему денежную сумму, уплаченную потребителем по договору, за исключением расходов продавца на доставку от потребителя возвращенного товара, не позднее чем через десять дней со дня предъявления потребителем соответствующего требования.</p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;"><em><strong>----</strong></em></p>
    <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">Контакты для связи с магазином по вопросам обмена или возврата товаров:</p>
    <p style="text-align: justify;">Email:&nbsp;sales@vorteil-technology.ru</p>
    <p style="text-align: justify;">Телефон:&nbsp;+7 (4852) 68-33-96</p>
    <p style="text-align: justify;">Адрес: 150044, Ярославская обл., г. Ярославль, Ленинградский пр-т, д. 27Б, стр. 2, оф. 1</p>
    <p>&nbsp;</p>
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