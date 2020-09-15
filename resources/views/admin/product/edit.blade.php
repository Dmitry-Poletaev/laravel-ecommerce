@extends('admin.admin_layouts')


@section('admin_content')

  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <span class="breadcrumb-item active">Изменение товара</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Изменить товар</h6>
  
        <form action="{{ url('update/product/' . $product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-layout">
                  <div class="row mg-b-25">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Название: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">URL: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="slug" value="{{ $product->slug }}">
                        </div>
                      </div><!-- col-4 -->
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label">Количество: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="quantity" value="{{ $product->quantity }}">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Категория: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Выберете категорию" name="category_id">
                          <option label="Выберете категорию"></option>
                          @foreach ($categories as $category)
                          <option value="{{ $category->id }}" <?php if ($category->id == $product->category_id) {
                            echo "selected";} ?>>{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Раздел: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" name="subcategory_id">
                            @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}" <?php if ($subcategory->id == $product->subcategory_id) {
                              echo "selected";} ?>>{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Бренд: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                          <option label="Выберете бренд"></option>
                          @foreach ($brands as $brand)
                          <option value="{{ $brand->id }}" <?php if ($brand->id == $product->brand_id) {
                            echo "selected";} ?>>{{ $brand->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Цена продажи: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="selling_price" value="{{ $product->selling_price }}">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Скидка: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="sale" value="{{ $product->sale }}">
                      </div>
                    </div><!-- col-4 -->
                    <br>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Изображение: <span class="tx-danger">*</span></label>
                        <br>
                        <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this);">
                        <span class="custom-file-control"></span>
                        <br>
                        <img src="#"  id="image">
                        <input type="hidden" name="old_image" value="{{ $product->image }}">
                        <img src="{{ URL::to($product->image) }}" height="100px;" width="100px">
                        </div>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-10">
                      <br>
                      <div class="form-group">
                        <label class="form-control-label">Описание: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" id="summernote" name="description"> 
                            {{ $product->description}}
                        </textarea>
                        <br>
                        <label class="form-control-label">Технические характеристики: <span class="tx-danger">*</span></label>
                        <textarea id="editor" name="specification">
                            {{ $product->specification }}
                        </textarea>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                      <label class="ckbox" value="{{ $product->status }}">
                        <input type="checkbox" name="status">
                        <span>Активность</span>
                      </label>
                    </div><!-- col-4 -->
                    <br>
                    <br>
                    <div class="col-lg-8">
                      <h3>SEO</h3>
                    </div>
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                      <input class="form-control" value="{{ $seo->title }}" type="text" name="title" placeholder="Title">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label">Ключевые слова: <span class="tx-danger">*</span></label>
                        <input class="form-control" value="{{ $seo->keywords }}" type="text" name="keywords" placeholder="Ключевые слова">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                        <input class="form-control" value="{{ $seo->description }}" type="text" name="description" placeholder="Description">
                      </div>
                    </div><!-- col-4 -->
                  </div><!-- row -->
      
                  <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Сохранить</button>
                    <button class="btn btn-secondary">Отмена </button>
                  </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
              </div><!-- card -->
             
        </form>

    </div>

      
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea#editor',
      menubar: false
    });
  </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function(){
   $('select[name="category_id"]').on('change',function(){
        let category_id = $(this).val();
        if (category_id ) {
          
          $.ajax({
            url: "{{ url('get/subcategory/') }}/"+category_id,
            type:"GET",
            dataType:"json",
            success:function(data) { 
            let d =$('select[name="subcategory_id"]').empty();
            $.each(data, function(key, value){
            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.name + '</option>');
            });
            },
          });

        }else{
          alert('danger');
        }

          });
    });

</script>

<script type="text/javascript">
function readURL(input){
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = function(e) {
      $('#image')
      .attr('src', e.target.result)
      .width(100)
      .height(100);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
@endsection
