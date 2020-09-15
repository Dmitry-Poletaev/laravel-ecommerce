@extends('admin.admin_layouts')

@section('admin_content')
    
<div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Бренды</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Редактировать баннер
        </h6>
        <div class="table-wrapper">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ url('update/banner/' . $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body pd-20">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название бренда</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value="{{ $banner->url }}" name="url">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Логотип</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value="{{ $banner->image }}" name="logo">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Старый логотип</label>
                    <img src="{{ URL::to($banner->image) }}" height="70px;" width="90px">
                    <input type="hidden" name="old_logo" value="{{ $banner->image }}">
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Сохранить</button>
                </div>
            </form>
        </div><!-- table-wrapper -->
      </div><!-- card -->


@endsection