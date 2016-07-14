@extends('layouts.admin')

@section('content')
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With list of moderators</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Birthday</th>
                  <th>uha</th>
                  <th>haha</th>
                  
                </tr>
                </thead>
                <tbody>

                @foreach ($moderators as $moderator)
                <tr>
                  <td>$moderator->user->name</td>
                  <td>$moderator->user->surname</td>
                  <td>$moderator->user->email</td>
                  <td>$moderator->user->password</td>
                  <td>$moderator->user->birth_date</td>
                  <td class="btn btn-success" href="{{ action('Admin\ModeratorsController@edit',$moderator->user_id) }} ">Edit </td>
                  <td  class="btn btn-danger" href="{{ action('Admin\ModeratorsController@destroy',$moderator->user_id) }} ">Delete </td>
                </tr>
                
              @endforeach
                </tbody>

                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  <th>asas</th>
                  <th><a class="btn btn-success" href="/moderators/edit ">Edit </a></th>
                  <th><a  class="btn btn-danger" href="/moderators/delete ">Delete </a></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
             <a class="btn btn-primary" href="{{ action('Admin\ModeratorsController@create') }} " style="float: right"> Add new Moderator  </a>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


@stop