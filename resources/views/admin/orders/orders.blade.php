@extends('admin.admin_layouts')

@section('admin_content')

   <div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Заказы</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Список заказов</h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-5p">ID</th>
                <th class="wd-10p">Имя</th>
                <th class="wd-10p">Email</th>
                <th class="wd-10p">Телефон</th>
                <th class="wd-10p">Сумма заказа</th>
                <th class="wd-10p">Дата</th>
                <th class="wd-10p">Действие</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order) 
              <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->total_price }}.руб</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <a href="{{ URL::to('order/view/'. $order->id) }}" class="btn btn-sm btn-info">Подробнее</a>
                    <a href="{{ URL::to('order/delete/'. $order->id) }}" class="btn btn-sm btn-danger" id="delete">Удалить</a>
                </td>
              </tr>
            @endforeach
             
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->

    </div><!-- sl-mainpanel -->
   
@endsection