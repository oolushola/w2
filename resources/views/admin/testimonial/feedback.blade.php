@extends('admin.layout')


@section('main')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Testimonial</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{URL('admin/dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{URL('admin/services')}}">Services</a></li>
                    <li class="breadcrumb-item"><a href="{{URL('admin/company-profile')}}">Basic Details</a></li>
                    <li class="breadcrumb-item active">Testimonials</li>
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
                            <input type="email" class="form-control" id="" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="" placeholder="Designation">
                        </div>
                        
                        <div class="form-group">
                            <textarea name="" id="" class="form-control" placeholder="Comment"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="" id="" placeholder="">
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
