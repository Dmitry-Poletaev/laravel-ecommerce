@extends('admin.admin_layouts')

@section('admin_content')

   <div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Разделы</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Список разделов
        <a href="{{ route('create.subcategory') }}" class="btn btn-sm btn-warning" style="float:right;">Создать раздел</a>
        </h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-5p">ID</th>
                <th class="wd-10p">Название</th>
                <th class="wd-10p">Категория</th>
                <th class="wd-10p">Дата создания</th>
                <th class="wd-10p">Дата изменения</th>
                <th class="wd-10p">Действие</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($subcat as $key) 
              <tr>
                <td>{{ $key->id }}</td>
                <td>{{ $key->name }}</td>
                <td>{{ $key->parent->name }}</td>
                <td>{{ $key->created_at }}</td>
                <td>{{ $key->updated_at }}</td>
                <td>
                    <a href="{{ URL::to('edit/subcategory/'. $key->id) }}" class="btn btn-sm btn-info">Редактировать</a>
                    <a href="{{ URL::to('delete/subcategory/'. $key->id) }}" class="btn btn-sm btn-danger" id="delete">Удалить</a>
                </td>
              </tr>
            @endforeach
             
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->

    </div><!-- sl-mainpanel -->
    <div id="modaldemo3" class="modal fade">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Создать раздел</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <form action="{{ route('store.subcategory') }}" method="POST">
              @csrf
              <div class="modal-body pd-20">
              <div class="form-group">
                <label for="exampleInputEmail1">Название раздела</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                placeholder="Раздел" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Категория</label>
                <select class="form-control" name="category_id">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              </div><!-- modal-body -->
              <div class="modal-footer">
              <button type="submit" class="btn btn-info pd-x-20">Создать</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Закрыть</button>
              </div>
          </form>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
@endsection