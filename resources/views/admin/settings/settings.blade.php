@extends('admin.admin_layouts')


@section('admin_content')


    

  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <span class="breadcrumb-item active">Настройки</span>
    </nav>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Настройки</h6>
@if (isset($settings))
    
        <form action="{{ route('edit.settings') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-layout">
                  <div class="row mg-b-25">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="email" name="email" value="{{ $settings->email }}" placeholder="Email">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Телефон 1: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="phone_one" value="{{ $settings->phone_one }}" placeholder="Телефон 1">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Телефон 2: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="phone_two" value="{{ $settings->phone_two }}" placeholder="Телефон 2">
                      </div>
                    </div><!-- col-4 -->
                    <br>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Изображение: <span class="tx-danger">*</span></label>
                        <br>
                        <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="logo" onchange="readURL(this);">
                        <span class="custom-file-control"></span>
                        <br>
                        <img src="#"  id="image">
                        <input type="hidden" name="old_logo" value="{{ $settings->logo }}">
                        <img src="{{ URL::to($settings->logo) }}" height="80px;" width="auto">
                      </div>
                      <br>
                    </div><!-- col-4 -->
                    <div class="col-lg-10">
                      <div class="form-group">
                      <div class="summernote">
                        <label class="form-control-label">Описание компании: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" id="summernote" name="description">
                          {{ $settings->description}}
                        </textarea>
                      </div>

                  <br>
                  <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Редактировать</button>
                    <button class="btn btn-secondary">Отмена </button>
                  </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
              </div><!-- card -->

        </form>

    </div>

      
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@else
<form action="{{ route('save.settings') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-layout">
      <div class="row mg-b-25">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
          <input class="form-control" type="email" name="email" value="" placeholder="Email">
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Телефон 1: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="phone_one" value="" placeholder="Телефон 1">
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Телефон 2: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="phone_two" value="" placeholder="Телефон 2">
          </div>
        </div><!-- col-4 -->
        <br>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Логотип: <span class="tx-danger">*</span></label>
            <br>
            <label class="custom-file">
            <input type="file" id="file" class="custom-file-input" name="logo" onchange="readURL(this);">
            <span class="custom-file-control"></span>
            <br>
            <img src="#" id="image">
            </label>
          </div>
          <br>
        </div><!-- col-4 -->
        <div class="col-lg-10">
          <div class="form-group">
          <div class="summernote">
            <label class="form-control-label">Описание компании: <span class="tx-danger">*</span></label>
            <textarea class="form-control" id="summernote" name="description">
            </textarea>
          </div>

      <br>
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
@endif
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
