@extends('admin.layouts.app')

@section('content')

<div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                </div>

                @include('errors.errors')
                
                <div class="card-content">
                    <h4 class="card-title">Videos</h4>
                    <form enctype="multipart/form-data" action="{{ route('videos.update',['video'=>$video->id])  }}" method="post">
                        @method('PATCH')
                        @csrf

                     <div class="form-group">
                        <label for="title" class="col-sm-2 control-label"> Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" value="{{ !empty(  $video->title )  ? $video->title : old('title')   }}" class="form-control" id="title" placeholder="title">
                        </div>
                     </div>
                    
                     <div class="form-group">
                        <label for="link" class="col-sm-2 control-label">Iframe Embed code</label>
                        <div class="col-sm-10">
                           <input required="required" type="text" name="link"  value="{{ $video->link }}" class="form-control" id="link" placeholder="link">
                        </div>
                     </div>                    
                    
                     <!-- /.box-body -->
                     <div class="box-footer">
                        <button type="submit" class="btn btn-info btn-round pull-right">Submit</button>
                     </div>
                     <!-- /.box-footer -->
                  </form>
                  
                </div>
            </div>
        </div>
       
    </div>

@endsection

@section('inline-scripts')
   
  


@stop

@section('pagespecificscripts')
@stop





