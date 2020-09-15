@extends('admin.admin_layouts')

@section('admin_content')

   <div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Товары</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Список товаров
        <a href="{{ route('create.product') }}" class="btn btn-sm btn-warning" style="float:right;">Добавить товар</a>
        </h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-5p">ID</th>
                <th class="wd-5p">Название</th>
                <th class="wd-10p">Изображение</th>
                <th class="wd-10p">Категория</th>
                <th class="wd-10p">Раздел</th>
                <th class="wd-10p">Бренд</th>
                <th class="wd-10p">Количество</th>
                <th class="wd-10p">Статус</th>
                <th class="wd-10p">Действие</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $product) 
              <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td><img src="{{ URL::to($product->image) }}" height="70px;" width="80px"></td>
                <td>{{ $product->parentCategory->name }}</td>
                <td>{{ $product->parentSubcat->name }}</td>
                <td>{{ $product->parentBrand->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                  @if ($product->status == 1)
                  <span class="badge badge-success">Активен</span>
                  @else
                  <span class="badge badge-danger">Неактивен</span>
                  @endif
                </td>
                <td>
                    <a href="{{ URL::to('edit/product/'. $product->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <a href="{{ URL::to('delete/product/'. $product->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
             
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->



@endsection