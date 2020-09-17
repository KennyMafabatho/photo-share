@extends('layouts.app')

@section('content')
<div class="container">
   <form action ="/p/{{$post->id}}" enctype="multipart/form-data" method = "POST">
   @csrf
   @method('PUT')
            <div class = "row">
                  <div class="col-8 offset-2">
                            <div class="row">
                                <h1> <strong>Edit Post</strong></h1>
                            </div>
                                        <div class="form-group row">
                                                <label for="caption" class="col-md-4 col-form-label ">Caption</label>
                                                <input id="caption" 
                                                    type="text" class="form-control @error('caption') is-invalid @enderror" 
                                                    name = "caption"
                                                value="{{ old('caption')?? $post->caption }}"
                                                autocomplete="caption" autofocus>
                                                @error('caption')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror              
                                        </div> 
                                            <div class="row">
                                                <div class = "col-6">
                                                     <img src="/storage/{{$post->image}}" class="w-100">
                                                </div>   
                                            </div>
    
                                <div class="row pt-4">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
        
                         </div>
            </div>
        </form>
</div>
@endsection
