@extends('admin.layouts.layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Rasm qo'shish 
      </h1>
    </section>

    <!-- Main content -->
<section class="content">
<form action="/admin/photos" method="POST" enctype="multipart/form-data">
    <!-- Default box -->
    {{csrf_field()}}
         <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Rasm qoshish</h3>
                </div>
                    <div class="box-body">
                        <div class="form-group">
                        <label for="exampleInputFile">Surat qoshing</label>
                        <input type="file" id="exampleInputFile" name="image" >

                        <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        <div class="form-group danger">
                                <p class="text-danger">{{ $errors->first('image') }}</p>
                        </div>
                        </div> 
                    </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <b><a href="/admin/photos" >Назад</a></b>
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