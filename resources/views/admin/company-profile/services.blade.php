@extends('admin.layout')

@section('link')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('admin/plugins/codemirror/theme/monokai.css')}}">
@stop

@section('main')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">What we do!</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{URL('admin/dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{URL('admin/testimonial')}}">Testimonials</a></li>
                    <li class="breadcrumb-item"><a href="{{URL('admin/company-profile')}}">Basic Details</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" placeholder="Service">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="" placeholder="Icon Name">
                        </div>
                        <div class="form-group">
                            <textarea id="services" height></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Site Application</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Application Name</th>
                        <th>Path</th>
                        <th>Link Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="tag tag-danger">Denied</span></td>
                            <td>
                                <span class="fa fa-pen text-primary"></span>
                                <span class="fa fa-trash ml-2 text-danger"></span>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>

            </div>
          </div>
       
      </div>
    </section>

@stop

@section('script')
<!-- Summernote -->
<script src="{{URL::asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>




<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#services').summernote()
  })
</script>
@stop
