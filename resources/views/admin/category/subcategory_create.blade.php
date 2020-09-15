@extends('admin.admin_layouts')

@section('admin_content')
    
<div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Раздел</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Создать раздел
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
            <form action="{{ route('store.subcategory') }}" method="POST">
                @csrf
                <div class="modal-body pd-20">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название раздела</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                     name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Категория</label>
                    <select class="form-control" name="category_id">

                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                    </select>
                </div>
                <h3>SEO</h3><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                     name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ключевые слова</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                     name="keywords">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Описание</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                     name="description">
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Сохранить</button>
                </div>
            </form>
        </div><!-- table-wrapper -->
      </div><!-- card -->


@endsection