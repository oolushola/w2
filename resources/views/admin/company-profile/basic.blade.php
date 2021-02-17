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
                <h1 class="m-0">Company Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{URL('admin/dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{URL('admin/services')}}">Services</a></li>
                    <li class="breadcrumb-item"><a href="{{URL('admin/testimonial')}}">Testimonials</a></li>
                    <li class="breadcrumb-item active">Basic Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
                @if(isset($recordInfo))
                <form method="POST" name="frmCompanyProfile" enctype="multipart/form-data" action="{{URL('admin/company-profile', $recordInfo->id)}}">
                {{ method_field('PATCH') }}
                @else
                <form method="POST" name="frmCompanyProfile" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" name="company_name" id="companyName" class="form-control" value="@if(isset($recordInfo)){{$recordInfo->company_name}}@else{{old('company_name')}}@endif" placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <input type="text" class="form-control" name="email_one" id="" value="@if(isset($recordInfo)){{$recordInfo->email_one}}@else{{old('email_one')}}@endif"  placeholder="Email (One)">
                            </div>
                            <div class="form-group col-md-4 ">
                                <input type="text" class="form-control" name="email_two" id="" value="@if(isset($recordInfo)){{$recordInfo->email_two}}@else{{old('email_two')}}@endif"  placeholder="Email Two (Optional)">
                            </div>
                            <div class="form-group col-md-3 ">
                                <input type="text" class="form-control" name="phone_no_one" id="" value="@if(isset($recordInfo)){{$recordInfo->phone_no_one}}@else{{old('phone_no_one')}}@endif"  placeholder="Phone No: 1">
                            </div>
                            <div class="form-group col-md-3 ">
                                <input type="text" class="form-control" name="phone_no_two" id="" value="@if(isset($recordInfo)){{$recordInfo->phone_no_two}}@else{{old('phone_no_two')}}@endif"  placeholder="Phone No: 2 (Optional)">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="file" name="logo" class="" id="" placeholder="" style="font-size:10px;" placholder="Logo!">
                            </div>
                            <div class="form-group col-md-3">
                                <textarea name="address" id="" class="form-control" placeholder="Address" rows="1">@if(isset($recordInfo)){{$recordInfo->address}}@else{{old('address')}}@endif</textarea>
                            </div>
                            <div class="form-group col-md-3 ">
                                <input type="text" class="form-control" name="facebook" id="" placeholder="Facebook Url" value="@if(isset($recordInfo)){{$recordInfo->facebook}}@else{{old('facebook')}}@endif" >
                            </div>
                            <div class="form-group col-md-3 ">
                                <input type="text" class="form-control" name="linkdin" id="" placeholder="LinkdIn Url" value="@if(isset($recordInfo)){{$recordInfo->linkdin}}@else{{old('linkdin')}}@endif" >
                            </div>
                            <div class="form-group col-md-3 ">
                                <input type="text" class="form-control" name="instagram" id="" placeholder="Instagram Url" value="@if(isset($recordInfo)){{$recordInfo->instagram}}@else{{old('instagram')}}@endif" >
                            </div>
                            <div class="form-group col-md-3 ">
                                <input type="text" class="form-control" name="twitter" id="" placeholder="Twitter Url" value="@if(isset($recordInfo)){{$recordInfo->twitter}}@else{{old('twitter')}}@endif">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label>Our History</label>
                                <textarea id="ourHistory" name="our_history">@if(isset($recordInfo)){{$recordInfo->our_history}}@else{{old('our_history')}}@endif</textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Mission Statement</label>
                                <textarea id="ourMission" name="our_mission">@if(isset($recordInfo)){{$recordInfo->our_mission}}@else{{old('our_mission')}}@endif</textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Vision Statement</label>
                                <textarea id="ourVision" name="our_vision">@if(isset($recordInfo)){{$recordInfo->our_vision}}@else{{old('our_vision')}}@endif</textarea>
                            </div>
                            
                        </div>
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
                    <div class="card-footer">
                        @if(!isset($recordInfo))
                        <button type="submit" class="btn btn-primary">Add</button>
                        @else
                        <button type="submit" class="btn btn-primary">Update</button>
                        @endif
                    </div>
                </form>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Company Brief</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                        <th>Company Info</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>
                                {{ $companyProfile->company_name }}
                                <span class="d-block">{{ $companyProfile->email_one }} | {{ $companyProfile->email_two }}</span>
                                <span class="d-block">{{ $companyProfile->phone_no_one }} | {{ $companyProfile->phone_no_two }}</span>
                            </td>
                            
                            <td>
                                <a href="{{URL('admin/company-profile/'.$companyProfile->id.'/edit')}}">
                                    <span class="fa fa-pen text-primary"></span>
                                </a>
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
    <script src="{{URL::asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script>
    $(function () {
        // Summernote
        $('#ourHistory, #ourMission, #ourVision').summernote()
    })
    </script>
@stop
