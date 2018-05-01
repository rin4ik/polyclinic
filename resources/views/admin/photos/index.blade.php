@extends('admin.layouts.layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
 
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <a href="/admin/photos/create" class="btn btn-primary">Qo'shish</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr> 
                      <th>Rasm</th>
                      <th>Xarakat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($photos as $photo)
                        <tr>  
                        <td>
                            <img src="{{$photo->getImage()}}" alt="" width="100">
                        </td>
                        <td> 
                            <form action="{{route('photos.destroy',$photo)}}" method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                        <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">
                        <i  class="fa fa-remove"></i> 
                        </button>
                        </form>
                        </tr>
                    @endforeach
                </tbody> 
              </table>
            </div> 
          </div> 
          {{$photos->links()}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection