@extends('admin.admin_layouts')

@section('admin_content')
    
<div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Категории</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Редактировать категорию
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
            <form action="{{ url('update/category/' . $category->id) }}" method="POST">
                @csrf
                <div class="modal-body pd-20">
                <div class="form-group">
                <label for="exampleInputEmail1">Название категории</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                value="{{ $category->name }}" name="name">
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Сохранить</button>
                </div>
            </form>
        </div><!-- table-wrapper -->
      </div><!-- card -->


@endsection