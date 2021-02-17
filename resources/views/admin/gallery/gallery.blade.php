@extends('admin.layout')

@section('main')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Gallery Setup</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{URL('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Gallery</li>
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
          <form method="POST" enctype="multipart/form-data" @if(isset($recordInfo)) action="{{URL('admin/site-application/'.$recordInfo->id.'')}}" @endif>
            @csrf
            @if(isset($recordInfo))
              {{ method_field('PATCH') }}
            @endif
            <div class="card-body">
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" value="1" id="exampleCheck1" name="image_for"@if(isset($recordInfo) && $recordInfo->image_for == 1) checked @endif>
                    <label class="form-check-label" for=" main link">Slider</label>

                    <input type="radio" class="form-check-input ml-2" value="2" id="exampleCheck1" name="image_for"@if(isset($recordInfo) && $recordInfo->image_for == 2) checked @endif>
                    <label class="form-check-label ml-4" for="footer link">Photo Ops</label>
                </div>
                <div class="form-group">
                    <label for="headline">Headline</label>
                    <input type="text" class="form-control" name="headline" placeholder="Headline" value="@if(isset($recordInfo)){{$recordInfo->headline}}@else{{old('headline')}}@endif">
                </div>
                <div class="form-group">
                    <label for="caption">Caption</label>
                    <textarea name="caption" id="" class="form-control">@if(isset($recordInfo)){{$recordInfo->caption}}@else{{old('caption')}}@endif</textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo">
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
              @if(isset($recordInfo))
              <button type="submit" class="btn btn-primary">Update</button>
              @else
              <button type="submit" class="btn btn-primary">Add</button>                  
              @endif
            </div>
          </form>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Site Applications</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                  <tr class="table-success">
                    <th>SN</th>
                    <th>Application Name</th>
                    <th>Path</th>
                    <th>Link Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 
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
