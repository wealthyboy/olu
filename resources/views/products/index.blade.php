@extends('layouts.app')
@section('page-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.css" integrity="sha512-bbUR1MeyQAnEuvdmss7V2LclMzO+R9BzRntEE57WIKInFVQjvX7l7QZSxjNDt8bg41Ww05oHSh0ycKFijqD7dA==" crossorigin="anonymous" />
@endsection

@section('content')
<!--Page Body Content -->
<div id="products" class="page-container">
    @if( $allow_banner[$category->slug])
    <section class="breadcrumb justify-content-center">
        <div class="background-image" data-background="{{ isset($category) ? $category->image : '' }}" style='background-image: url({{ isset($category) ? $category->image : '' }}); background-position: center center;' data-bg-posx="center" data-bg-posy="center" data-bg-overlay="5"></div>
        <div class="container">
            <div class="row">
                <div class="col-3 col-lg-3 text-center">
                    <div class="img-container">
                        <img class="" src="/images/banners/ZgFSVgGHOUvQotouviJAqwJIqXDRC4J93p2DuqWQ.jpeg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        @if($breadcrumb == 'View Pictures')
                        <h1 class="breadcrumb-title"> Pictures</h1>

                        @elseif($breadcrumb == 'View Videos')
                        <h1 class="breadcrumb-title">Videos</h1>

                        @else
                        <h1 class="breadcrumb-title">{{ $breadcrumb  }}</h1>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <div class="bg--gray">
        @include('_partials.'.strtolower($category->slug),['category' => $category])
    </div>

</div>
<!--End Page Body Content -->
@endsection
@section('page-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.js" integrity="sha512-En/Po50Bl8kIECa2WkhxhdYeoKDcrJpBKMo9tmbuwbm9RxHWZV8/Y5xM9sh3QbrnFgM3hVR/2umJ33qGJk45pQ==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="{{ asset('store/js/jquery.validate.min.js') }}"></script>
<script src="/ckeditor/ckeditor.js"></script>


@stop

@section('inline-scripts')


Dropzone.autoDiscover = false;

jQuery(window).on('load', function(){

var tributes = $(".tributes")
var pictures = $(".pictures")
var videos = $(".videos")
var consolations = $(".consolations")


var m = tributes || pictures || videos || consolations;



var myDropzone;

$('.pictures-wrap').masonry({
// options
itemSelector: '.pictures',
});

if (m.length){
$('.tributes-wrap').masonry({
// options
itemSelector: '.tributes',
});

$('.pictures-wrap').masonry({
// options
itemSelector: '.pictures',
});

$('.consolations-wrap').masonry({
// options
itemSelector: '.consolations',
})
}

})
$(document).ready(function() {
var d = $("#Comments")
if (d.length){
CKEDITOR.replace('Comments',{
height: '300px',
toolbar: [
{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
'/',
{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
'/',
{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
{ name: 'about', items: [ 'About' ] }
]
})
}
var d = $("div#my-dropzone")
var vd = $("div#my-video-dropzone")



if (d.length){

myDropzone = new Dropzone("div#my-dropzone",{
url: "/file/uploads",
paramName: "file",
maxFilesize: 10,
timeout: 180000,
acceptedFiles: 'image/*',
addRemoveLinks: true,
uploadMultiple:true,
maxFiles: 1,

headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
init: function() {

$("#submit").on('click', function(e) {
if (!myDropzone.files || !myDropzone.files.length) {
$("div.error").html('Please add a picture..')
}
});
this.on("addedfile", function(file) { $("div.error").html('')});
}
})
}

if (vd.length){
myDropzone = new Dropzone("div#my-video-dropzone",
{
url: "/file/uploads/videos",
paramName: "file",
maxFilesize: 100,
maxFiles: 1,
timeout: 1440000,
acceptedFiles: ".mp4,.mkv,.avi",
addRemoveLinks: true,
uploadMultiple:true,

headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
init: function() {
$("#submit").on('click', function(e) {
if (!myDropzone.files || !myDropzone.files.length) {
$("div.error").html('Please add a picture..')
}
});
this.on("addedfile", function(file) { $("div.error").html('')});
}
}
);
}


var $validator = $('form.form-validate').validate({
rules: {
first_name: {
required: true,
},
last_name: {
required: true,
},
email: {
required: true,
email: true
},

relationship: {
required: true,
},

},
messages: {
email: {
required: "Please enter your email",
email: "Please enter a valid email"
},

},
submitHandler: function(form) {
//Check if dropzone is uploading
if(myDropzone){
myDropzone.on("uploadprogress", function(file) {
$("div.error").html('Please allow your image to finish uploading')
return false;
});
}


form.submit();
}

});

});

@stop