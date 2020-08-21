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
     <div class ="row pt-5">
        <div class ="col-3">
            <img src ="https://instagram.fjnb6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.12.775.775a/s240x240/117904071_586448102051174_5646477369680450633_n.jpg?_nc_ht=instagram.fjnb6-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=x7JJ5dVeg_EAX9rFO4a&oh=776aeff202f9dc47587382b60d6483c5&oe=5F684029" class = "w-100" >
        </div>
        <div class ="col-3">
            <img src ="https://instagram.fjnb6-1.fna.fbcdn.net/v/t51.2885-15/e35/c127.0.495.495a/s150x150/100950429_172849147497410_8469189274443807895_n.jpg?_nc_ht=instagram.fjnb6-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=Rb0KLYXLQ7QAX-p_G-m&oh=c7a1258993d99a8b3c4f05918e3a6d7d&oe=5F69DFE2" class = "w-100" >
        </div>
        <div class ="col-3">
            <img src ="https://instagram.fjnb6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.107.924.924a/s240x240/101418871_149220720095600_2797518877581952974_n.jpg?_nc_ht=instagram.fjnb6-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=EwJhywm2w_0AX-Iihth&oh=7f5aa4ec2cb59ee17d131a89cc3732b5&oe=5F662009" class = "w-100" >
        </div>
        
     </div>
</div>
@endsection
