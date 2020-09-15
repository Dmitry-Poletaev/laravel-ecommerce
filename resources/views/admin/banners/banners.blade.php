@extends('admin.admin_layouts')

@section('admin_content')

   <div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Бренды</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Список баннеров
        <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#modaldemo3">Создать баннер</a>
        </h6>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-5p">ID</th>
                <th class="wd-15p">Изображение</th>
                <th class="wd-10p">Дата создания</th>
                <th class="wd-10p">Дата изменения</th>
                <th class="wd-10p">Действие</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($banners as $banner) 
              <tr>
                <td>{{ $banner->id }}</td>
                <td><img src="{{ URL::to($banner->image) }}" height="70px;" width="auto"></td>
                <td>{{ $banner->created_at }}</td>
                <td>{{ $banner->updated_at }}</td>
                <td>
                    <a href="{{ URL::to('edit/banner/'. $banner->id) }}" class="btn btn-sm btn-info">Редактировать</a>
                    <a href="{{ URL::to('delete/banner/'. $banner->id) }}" class="btn btn-sm btn-danger" id="delete">Удалить</a>
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
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Добавить баннер</h6>
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
        <form action="{{ route('store.banner') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-20">
            <div class="form-group">
                <label for="exampleInputEmail1">URL</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="URL" name="url">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Изображение</label>
                <input type="file" class="form-control"  aria-describedby="emailHelp" placeholder="Лого" name="logo">
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