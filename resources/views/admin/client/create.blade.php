@extends('admin.page')

@section('title', 'Add Client')

@section('content_header')
    <h1>Add Client</h1>
@stop

@section('content')

@parent

<a href="{{ route('client-list') }}" class="btn btn-info btn-xs">	 Back </a>

   

 <div class="modal-dialog modal-lg">

       {!! Form::open(["files"=>true]) !!}  
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title">Add Client</h4>
      </div>

      <div class="modal-body">
       
      @include("admin.client.form")



      </div>
      <div class="modal-footer">
       {!! Form::submit("Save",["class"=>"btn btn-success"]) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>




@stop

@section('js')
  @parent
<script src="{{ URL('cskeditor/ckeditor.js')}}"></script>



<script>
$(document).ready(function(){

  CKEDITOR.replace( 'editor' ); 
     CKEDITOR.replace( 'editor2' ); 
        
       
})
</script>
@stop