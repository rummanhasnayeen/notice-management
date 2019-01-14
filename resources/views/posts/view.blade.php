@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row" >
        <div class="col-md-8 col-md-offset-2" >
             
            <div class="panel panel-default" id="shadow">
                <div class="panel-heading">Post View</div>

                <div class="panel-body">
                   <div class="col-md-4">
                    <ul class="list-group-item">
                     
                        @if(count($categories)> 0)
                            @foreach($categories->all() as  $category)
                             <li><a href='{{ url("category/{$category->id}") }}'>{{$category->category}}</a> </li>
                            @endforeach

                        @else
                        <p> No Category Found..!</p>

                        @endif
                        
                    </ul>
                    
                  
                       
                   </div>
                   <div class="col-md-8">
                       
                     
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
