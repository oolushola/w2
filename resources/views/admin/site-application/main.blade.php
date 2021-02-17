@extends('admin.layout')


@section('main')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Site Application</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Site Application</li>
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
          <form method="POST" @if(isset($recordInfo)) action="{{URL('admin/site-application/'.$recordInfo->id.'')}}" @endif>
            @csrf
            @if(isset($recordInfo))
              {{ method_field('PATCH') }}
            @endif
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Application Name</label>
                <input type="text" class="form-control" id="applicationName" name="application_name" placeholder="Site Application" value="@if(isset($recordInfo)){{$recordInfo->application_name}}@endif">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">URL</label>
                <input type="text" class="form-control" id="url" name="url_path" placeholder="/site-application" value="@if(isset($recordInfo)){{$recordInfo->url_path}}@endif">
              </div>
              
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="menu_link"@if(isset($recordInfo) && $recordInfo->menu_link == 1) checked @endif>
                <label class="form-check-label" for=" main link">Main Link?</label>

                <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1" name="footer_link"@if(isset($recordInfo) && $recordInfo->footer_link == 1) checked @endif>
                <label class="form-check-label ml-4" for="footer link">Footer Link?</label>
              </div>
            </div>

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
                  @if(count($siteApplications))
                  <?php $counter = 0; ?>
                  @foreach($siteApplications as $siteApplication)
                  <?php 
                    $counter++; 
                    $menuStatus = $siteApplication->menu_link === 1 ? 'Menu': ' ';
                    $footerStatus = $siteApplication->footer_link === 1 ? 'Footer' : '';
                  ?>
                    <tr>
                        <td>{{ $counter }}</td>
                        <td>{{ $siteApplication->application_name }}</td>
                        <td>{{ $siteApplication->url_path }}</td>
                        <td><span class="tag tag-danger">{{ $menuStatus }} {{ $footerStatus }}</span></td>
                        <td>
                          <a href="{{URL('admin/site-application/'.$siteApplication->id.'/edit')}}">
                            <span class="fa fa-pen text-primary"></span>
                          </a>
                            <span class="fa fa-trash ml-2 text-danger"></span>
                        </td>
                    </tr>
                  @endforeach
                  @else
                    <tr>
                        <td colspan="6" class="text-danger">No record found!</td>
                        
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
