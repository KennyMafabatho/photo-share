@extends('layouts.app')

@section('content')

<div class = "container">
                <div class="row">
                @foreach($posts as $post)
                        <div class="col-sm-6 col-md-2 pr-4 pb-4 " >
                            <div class="card border-0 shadow"  >
                                    <a href ="/profile/{{$post->user->id}}" > 
                                             <img src="/storage/{{$post->image}}" class ="rounded-top w-100">
                                    </a>
                                    <div class ="p-4">
                                        <span class="font-weight-bold">
                                             <a href="/profile/{{$post->user->id}}" >
                                                <span class="text-dark">{{$post->user->username}}</span>
                                             </a>
                                        </span>
                                        <p>{{$post->caption}}</p>
                                    </div>
                             </div>
                        </div>
                @endforeach    
                </div>
</div>
             


@endsection