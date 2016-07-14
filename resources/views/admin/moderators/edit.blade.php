@extends('layouts.admin')


@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add The Moderator</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ action('Admin\ModeratorsController@update',$moderator->id) }}" method="POST">
            {{ csrf_field() }} 
            {{ method_field('patch') }}
              
              <div class="box-body">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" value="$moderator->user->name">
              </div>

              
                <div class="form-group">
                  <label for="surname">Surname</label>
                  <input type="text" class="form-control" id="surname" value="$moderator->user->surname">
                </div>

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="$moderator->user->email">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" value="$moderator->user->password">
                </div>


                <div class="form-group">
                    <label for="birth_date">Birth date</label>
                    <input type="date" class="form-control" id="birth_date" value="$moderator->user->birth_date" >
                </div>

                

                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


@stop