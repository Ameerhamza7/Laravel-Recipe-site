@extends('layout')

@section('content')
@include('partials._hero')    

<h1 class="text-lg font-medium py-[1rem] px-[10rem]">Latest Recipes</h1>
@unless(count($listings) == 0)
<div class="flex gap-[5rem] h-full justify-center">
@foreach($listings as $listing)

<div class="relative flex w-[23rem] rounded-md p-[1.5rem] border-[1px] border-[#f8f3d4] bg-gradient-to-b from-[#fcf8e5] to-[#fcf4cb]">
  <div class="max-w-[84%]">
      <div class=" mb-2"><a href="./listings/{{$listing->id}}" class=" font-bold text-lg">{{$listing->title}}</a></div>
      <p class="bg-[#202020] font-semibold text-white rounded-[40px] py-2 px-4 mb-2 inline-flex"> {{$listing->category}}</p>
      <p><strong>Ingredient:</strong> {{$listing->ingredient}}</p>
    </div>
       <div class="overflow-hidden border-[2px] border-[#e9dc93] h-[9rem] w-[9rem] absolute right-[-4rem] top-[1.1rem] rounded-full shadow-lg shadow-[#ebe6ca]">
        <img src="images/dish1.jpg" alt="Image" class="scale-105 rounded-full w-full h-full object-cover bg-no-repeat bg-center" />
      </div> 
  </div>
 @endforeach

 @else
 <p>No listing found!</p>
 @endunless

@endsection
