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
                @if(isset($testimonial))
                <form method="POST" enctype="multipart/form-data" action="{{URL('admin/testimonial', $testimonial->id)}}">
                {{ method_field('PATCH') }}
                @else
                <form method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="full_name" id="" placeholder="Full Name" value="@if(isset($testimonial)){{$testimonial->full_name}}@else{{old('full_name')}}@endif">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="designation" id="" placeholder="Designation" value="@if(isset($testimonial)){{$testimonial->designation}}@else{{old('designation')}}@endif">
                        </div>
                        
                        <div class="form-group">
                            <textarea id="" class="form-control" name="comment" placeholder="Comment">@if(isset($testimonial)){{$testimonial->comment}}@else{{old('comment')}}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="photo" class="" id="" placeholder="">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            @if(isset($testimonial))Update @else Add @endif
                        </button>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                    <thead class="table-success">
                        <tr>
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($testimonials))
                            @foreach($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->full_name }}<span class="d-block">{{ $testimonial->designation }}</span></td>
                                <td>{{ $testimonial->comment }}</td>
                                <td>
                                    <a href="{{URL('admin/testimonial/'.$testimonial->id.'/edit')}}">
                                        <span class="fa fa-pen text-primary"></span>
                                    </a>
                                    <span class="fa fa-trash ml-2 text-danger"></span>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="5">No record found</td>
                        </tr>
                        @endif
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
