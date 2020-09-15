@extends('admin.admin_layouts')

@section('admin_content')
    
<div class="sl-mainpanel">

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Раздел</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Редактировать раздел
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
            <form action="{{ url('update/subcategory/' . $subcat->id) }}" method="POST">
                @csrf
                <div class="modal-body pd-20">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название раздела</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value="{{ $subcat->name }}" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Категория</label>
                    <select class="form-control" name="category_id">

                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" <?php if ($category->id == $subcat->category_id) {
                      echo "selected";} ?> >{{ $category->name }}</option>
                @endforeach
                    </select>
                </div>
                <h3>SEO</h3><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value="{{ $seo->title }}" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ключевые слова</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value="{{ $seo->keywords }}" name="keywords">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Описание</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                    value="{{ $seo->description }}" name="description">
                </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Сохранить</button>
                </div>
            </form>
        </div><!-- table-wrapper -->
      </div><!-- card -->


@endsection