@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class = "col-6">
           <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                 <div class="d-flex align-items-centre">
                 <div class= "pr-3">
                      <img src ="{{$post->user->profile->profileImage()}}" class ="rounded-circle w-100" style="max-width: 40px;">
                  </div> 
                   <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                 <span class="text-dark">{{$post->user->username}}</span>
                                </a> |
                                
                            </div>
                  </div>
                </div>
                         <hr>
                 <p ><span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                    <span class="text-dark">{{$post->user->username}}</span></a>
                      </span>
                      {{$post->caption}}
      
            
                                 <a href="/p/{{$post->id}}/edit" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit Post</a>  
                        
                </p>
                    <form action="/p/{{$post->id}}" method="POST">
                            @method('delete')
                            @csrf 
                            <button class="btn btn-primary btn-sm my-2" type="submit">Delete</button>
                        
                    </form>
                    
            </div>
        </div>
    </div>  
</div>
@endsection