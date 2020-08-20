@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
         <div class="col-3 p-5">
            <img height ="80" src= "https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" class = "rounded-circle " >
    
         </div>
         <div class ="col-9 pt-5">  
             <div> <h1> PhotoShare </h1> </div>
             <div class = "d-flex" >
                 <div class = "pr-3"><strong>100</strong> Posts</div>
                 <div class = "pr-3"><strong>10</strong> Followers</div>
                 <div class = "pr-3"><strong>500k</strong> Following</div>
            </div>
            <div class = "pt-4 font-weight-bold"> PhotoShare.com </div>
            <div> We are the best !! <strong> If you know, you know !! </strong> </div>
            <div> <a href="#"> www.freecodecamp.org </a> </div>
        </div> 
     </div>
</div>
@endsection
