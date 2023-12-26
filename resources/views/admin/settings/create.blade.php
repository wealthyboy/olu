@extends('admin.layouts.app')
@section('pagespecificstyles')
@stop
@section('content')
<div class="row">
    <form action="{{  null !== $setting ? route('settings.update',['setting'=>$setting->id ]) : route('settings.store')  }}" method="POST"  enctype="multipart/form-data" >
       @csrf

        @if (null !== $setting )
           @method('PATCH')
        @endif
       <div class="col-md-4">
            <div class="card card-profile">
               
            <legend>Add Logo</legend>
            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail">
                    <img src="{{ null !== $setting ? $setting->logo_path() : '/assets/img/image_placeholder.jpg'}}" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                <div>
                    <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" accept="image/*" name="image" />
                    </span>
                    <a href="extended.html#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
               </div>   
            </div>
        </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="fa fa-cog fw""></i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Settings - <small class="category">Complete your website settings</small></h4>
                    <fieldset>
                        <legend>General</legend>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Store Name</label>
                                    <input type="text" name="store_name" value="{{ null !== $setting ? $setting->store_name : old('store_name')   }}"  id="input-name" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Store Phone</label>
                                    <input type="text" name="store_phone" value="{{  null !== $setting ? $setting->store_phone : old('store_phone')  }}"  id="input-telephone" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Store Email Address</label>
                                    <input type="text" name="store_email" value="{{ null !== $setting  ? $setting->store_email : old('store_email')   }}" id="input-email" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Address</label>
                                    <input class="form-control" name="address" value="{{  null !== $setting ? $setting->address : old('address')  }}" type="text">
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Meta title</label>
                                    <input class="form-control" name="meta_title" value="{{  null !== $setting ? $setting->meta_title : old('meta_title')  }}" type="text">
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"> </label>
                                        <textarea name="meta_description" class="form-control" rows="5">{{  null !== $setting ? $setting->meta_description :  old('meta_description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Meta Tag Keywords </label>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"> </label>
                                        <textarea name="meta_tag_keywords" class="form-control" rows="5">{{  null !== $setting ? $setting->meta_tag_keywords :  old('meta_tag_keywords') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </fieldset> 
                        <fieldset>
                        <legend>Defaults</legend>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Alert Email </label>
                                    <input type="text" name="alert_email" value="{{  null !== $setting ? $setting->alert_email :  old('alert_email') }}" id="input-catalog-limit" class="form-control" />
                                </div>
                            </div>

                        </div>

                       
                      
                   </fieldset> 

                   
                    <button type="submit" class="btn btn-rose btn-round pull-right">Save</button>                      
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('pagespecificscripts')

@stop
@section('inline-scripts')    
function setFormValidation(id){
if(jQuery().validate) {
$(id).validate({
rules: {
name: {
required: true,
minlength: 3
},
},
highlight: function(element) {
$(element).closest('div').addClass('has-error');
},
});
}
}
$(document).ready(function(){
});
@stop