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
            <form  method="POST">
            {{ csrf_field() }}

              
              <div class="box-body">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="email" class="form-control" id="name" placeholder="Enter name">
              </div>

              
                <div class="form-group">
                  <label for="surname">Surname</label>
                  <input type="email" class="form-control" id="surname" placeholder="Enter surname">
                </div>

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>


                <div class="form-group">
                    <label for="birth_date">Birth date</label>
                    <input type="date" class="form-control" id="birth_date" >
                </div>

                

                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


@stop