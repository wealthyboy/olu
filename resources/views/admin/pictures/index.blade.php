@extends('admin.layouts.app')

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="text-right">
                <a href="{{ route('pictures.index') }}" rel="tooltip" title="Refresh" class="btn btn-primary btn-simple btn-xs">
                    <i class="material-icons">refresh</i>
                    Refresh
                </a>
                <a href="javascript:void(0)" onclick="confirm('Are you sure?') ? $('#form-videos').submit() : false;" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                    <i class="material-icons">close</i>
                    Remove
                </a>
            </div>                                                               
        </div>

       
        <div class="col-md-12">
           @include('includes.success')

            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Pictures</h4>
                    <div class="toolbar">
                        <!--  Here you can write extra buttons/actions for the toolbar -->
                    </div>
                    <div class="material-datatables">
                    <form  action="{{ route('pictures.destroy',['picture' => 1]) }}" method="post" enctype="multipart/form-data" id="form-videos">
                        @method('DELETE')
                        @csrf
                
                        <table id="datatables" class="table table-striped table-shopping table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>

                                <tr>
                                  <th>
                                    <div class="checkbox">
                                        <label>
                                            <input onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" type="checkbox" name="optionsCheckboxes" >
                                        </label>
                                    </div>
                                    </th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pictures as $picture) 
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="{{ $picture->id }}" name="selected[]" >
                                                </label>
                                            </div>
                                        </td>
                                        <!-- cart-active -->
                                        <!-- cart-sidebar-btn active -->
                                        <td>
                                           <a target="_blank" href="{{ route('pictures.show',['picture' => $picture->id ]) }}">{{ $picture->name }} {{ $picture->last_name }}</a>
                                        </td>
                                        <td>{{ $picture->email }}</td>
                                        <td class="td-actions">                     
                                            <a href="{{ route('pictures.edit',['picture'=>$picture->id] ) }}" rel="tooltip" title="Approve" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
                                                {{ $picture->is_approved ? 'Approved' : 'Approve'}}
                                            </a>
                                        </td>
                                    </tr>
                               @endforeach  
                            </tbody>
                         </table>
                        </form>
                    </div>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
@endsection
@section('inline-scripts')
$(document).ready(function() {
});
@stop







