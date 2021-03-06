@extends('admin.layouts.app')

@section('main-content')
<form role="form" action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
            </div>

            @if (count($errors)>0)
             @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error}}</p>
              @endforeach
             @endif
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
              	<div class="col-lg-6">

              	</div>
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                
                 <div class="form-group">
                  <label for="title">Post Sub</label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle">
                </div>
             

              



              <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="subtitle">
                </div>


                	<div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image">
                </div>



                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"> Publish
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

             
          
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              
                <textarea class="textarea" name="body" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>


                           <div class="box-footer">
              
              </div>
              
            
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
    <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
  </div>

</form>
@endsection