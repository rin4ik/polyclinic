@extends('admin.layouts.layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить статью
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
<form action="/admin/posts" method="POST" enctype="multipart/form-data">
         <!-- Default box -->
    {{csrf_field()}}
         <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Yangilik qoshish</h3>
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Nomi</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('title')}}">
              <div class="form-group danger">
                    <p class="text-danger">{{ $errors->first('title') }}</p>
              </div>
            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Surat qoshing</label>
              <input type="file" id="exampleInputFile" name="image" >

              <p class="help-block">Какое-нибудь уведомление о форматах..</p>
              <div class="form-group danger">
                    <p class="text-danger">{{ $errors->first('image') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label>Kategoriya</label>
              <select class="form-control select2" name="category_id">
                   <option  value="">Birorta kategoriya tanlang...</option>
                        @if ($categories->count())
                    
                            @foreach($categories as $category)
                                <option  value="{{ $category->id }}">{{ $category->title }}</option>    
                            @endforeach
                        @endif
                    
                    </select>
                    <div class="form-group danger">
                      <p class="text-danger">{{ $errors->first('category_id') }}</p>
                </div>
            </div>
            
       
 
          </div>
      
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Полный текст</label>
              <textarea name="content" id="" cols="30" rows="10" class="form-control" >{{old('content')}}</textarea>
              <div class="form-group danger">
                  <p class="text-danger">{{ $errors->first('content') }}</p>
            </div>
          </div>
        </div>
      </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <b><a href="/admin/posts" >Назад</a></b>
          <button type="submit" class="btn btn-success pull-right">Добавить</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
</form>
 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection