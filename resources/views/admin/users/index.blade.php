@extends('admin.layouts.layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Ismi</th>
                  <th>E-mail</th> 
                  <th>Admin</th>
                  <th>Xarakat</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->is_admin? 'xa admin' : 'yoq admin emas'}}</td>
                  
                  <td> 
                    <form action="{{route('users.destroy',$user)}}" method="POST">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                         <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">
                                <i  class="fa fa-remove"></i> 
                         </button>
                    </form>
                    </td>
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