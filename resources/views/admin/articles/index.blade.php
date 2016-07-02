@extends('app')  
@section('content') 
<div class="container">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
            <div class="panel-heading">Manage Articles</div>
            <div class="panel-body">
               <a href="{{ URL('admin/articles/create') }}" class="btn btn-lg btnprimary">Create New Article</a>  
               @foreach ($articles as $article)             
               <hr>
               <div class="page">
                  <h4>{{ $article->title }}</h4>
                  <div class="content">
                     <p>                   {{ $article->body }}                 </p>
                  </div>
               </div>
               <a href="{{ URL('admin/articles/'.$article->id.'/edit') }}" class="btn btn-success">Edit</a>  
               <form action="{{ URL('admin/articles/'.$article->id) }}" method="POST" style="display: inline;">               
               <input name="_method" type="hidden" value="DELETE">              
                <input type="hidden" name="_token" value="{{ csrf_token() }}">             
                  <button type="submit" class="btn btn-danger">Delete</button>           
                    </form>
               @endforeach  
            </div>
         </div>
      </div>
   </div>
</div>
@endsection