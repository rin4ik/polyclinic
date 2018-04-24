@extends('admin.layouts.layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="/admin/posts/create" class="btn btn-primary">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nomi</th>
                  <th>Kategoriyasi</th> 
                  <th>Rasmi</th>
                  <th>Xarakat</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->title}}
                  </td>
                  <td>{{$post->getCategoryTitle()}}</td> 
                  <td>
                    <img src="{{$post->getImage()}}" alt="" width="100">
                  </td>
                  <td><a href="{{route('posts.edit',$post)}}" class="fa fa-pencil"></a> 
                    <form action="{{route('posts.destroy',$post)}}" method="POST">
                        {{ csrf_field() }} {{ method_field('DELETE') }}
                     <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">
                            <i  class="fa fa-remove"></i> 
                     </button>
                </form>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection