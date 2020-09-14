@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
         <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" >
         </div>
         <div class="col-9 pt-5">  
             <div class ="d-flex justify-content-between align-items-baseline"> 
                   <div class="d-flex align-items-center pb-4" >
                           <div class="h4">
                                    {{$user->username}}
                           </div> 
                            @if (auth()->user()->id !== $user->id)
                                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                            @endif
                            
                    </div>
                    @can('update',$user->profile)
                    <a href="/p/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add New Post</a>
                
                    @endcan
             </div>
             @can('update',$user->profile)
                   <a href="/profile/{{$user->id}}/edit">Edit Profile</a> 
                    @endcan
             <div class="d-flex" >
                 <div class="pr-2">
                        <strong class="pr-2">{{$postCount}}</strong>Posts
                </div>
                <div class="pr-2">
                        <strong class="pr-2">{{$followersCount}}</strong>Followers
                </div>
                <div class="pr-2">
                        <strong class="pr-2">{{$followingCount}}</strong>Following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div> {{$user->profile->description}}</strong> </div>
            <div> <a href="#">{{$user->profile->url ??'N/A'}} </a> </div>
        </div> 
     </div>

    <div class ="row pt-5">
         @foreach ($user->posts as $post)
        <div class ="col-4 pb-4">
           <a href ="/p/{{$post->id}}" >
           <img src ="/storage/{{$post->image}}" class ="w-100" >
           </a> 
        </div>
         @endforeach  
        
    </div>
         
</div>
@endsection
