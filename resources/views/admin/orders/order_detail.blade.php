@extends('admin.admin_layouts')

@section('admin_content')

   <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Детали заказа №{{ $order->id }}</h6>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><strong>Данные покупателя</strong></div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                    <th>Имя:</th>
                                    <th>{{ $order->name }}</th>
                                    </tr>
                                    <tr>
                                    <th>Email:</th>
                                    <th>{{ $order->email }}</th>
                                    </tr>
                                    <tr>
                                    <th>Телефон:</th>
                                    <th>{{ $order->phone }}</th>
                                    </tr>
                                    <tr>
                                    <th>Сумма заказа:</th>
                                    <th>{{ $order->total_price }}.руб</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><strong>Товары в заказе</strong> </div>
                            <div class="card-body">
                                @foreach ($products as $product)
                                <table class="table">
                                    <tr>
                                    <th>Название:</th>
                                    <th>{{ $product->product_name }}</th>
                                    </tr>
                                    <tr>
                                    <th>Количество:</th>
                                    <th>{{ $product->quantity }}</th>
                                    </tr>
                                    <tr>
                                    <th>Итоговая цена:</th>
                                    <th>{{ $product->price }}.руб</th>
                                    </tr>
                                </table>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection