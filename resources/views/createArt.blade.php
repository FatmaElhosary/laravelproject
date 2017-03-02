@extends('layout.app')

@section('content')
<h1>make </h1>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-heading">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="post"action="{{route(createArt)}}">
                    {{csrf_field()}}
                         <div class="form-group{{$errors->has('title')?'has error':''}}">
                             <label class="col-md-4 control-label" for="title">title:</label>
                             <div class="col-md-6">
                        <input type="text" name="title" id="title"class="form-control" value="{{old('title')}}"required>
                        @if($errors->has('title'))
                        <span class="help-block">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                       @endif
                    </div>
</div>
                             
                             <div class="form-group">
                                 <div class="col-md-8">
                                     <button type="submit" class="btn btn-default btn-block">
                                         makeArticle
                                     </button>
                                 </div>
                                 
                             </div>                    
                </form>
                
                
            </div>
            
            
        </div>   
   
    </div>
    
    
</div>
    
@stop