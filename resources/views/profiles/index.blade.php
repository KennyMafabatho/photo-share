@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
         <div class="col-3 p-5">
            <img height ="80" src="https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" class = "rounded-circle " >
         </div>
         <div class ="col-9 pt-5">  
             <div class ="d-flex justify-content-between align-items-baseline"> 
                 <h1>{{$user->username}}</h1> 
             <a href ="/p/create">Add New Post </a> 
             </div>
             <div class = "d-flex" >
                 <div class="pr-3"><strong>100</strong>Posts</div>
                 <div class="pr-3"><strong>10</strong>Followers</div>
                 <div class="pr-3"><strong>500k</strong>Following</div>
            </div>
            <div class ="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div> {{$user->profile->description}}</strong> </div>
            <div> <a href="#">{{$user->profile->url ??'N/A'}} </a> </div>
        </div> 
     </div>

    <div class ="row pt-5">
         @foreach ($user->posts as $post)
        <div class ="col-4">
            <img src ="/storage/{{$post->image}}" class ="w-100" >
         </div>
        @endforeach  
        
    </div>
         
</div>
@endsection
