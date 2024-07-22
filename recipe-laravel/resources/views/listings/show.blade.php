<x-layout>

@section('content')
<a href="/" class="flex items-center  px-[17.5rem] mt-[4rem] ">
  <svg class="text-[black]" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960" width="22px" fill="#000000"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>
  <h1 class="text-md font-medium ">Back</h1>
</a>

<div class="flex justify-center rounded-md p-[1.2rem] mx-[4rem] mb-[4rem] ">
    <div class=" overflow-hidden mb-5 rounded-[2rem] w-[30rem] h-[25rem] shadow-[#ebe6ca]">
     <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('/images/dish1.jpg')}}" alt="Image" class="w-full h-full object-cover bg-no-repeat bg-center" />
   </div> 
    <div class="w-[50rem] ml-[4rem]">
      <div class="flex items-center justify-between mb-4">
        <div class="font-bold text-2xl">{{$listing->title}}</div>
        <div class="flex">
        <a href="/listings/{{$listing->id}}/edit" class="bg-[white] flex items-center border-[1px] inline-flex px-4 py-[6px] rounded-[5px] shadow-md hover:bg-[orange] hover:text-[white] transition-all ease-in duration-75">
          <i class="fa-sharp fa-solid fa-pen fa-sm"></i>
          <div class=" ml-2">Edit</div>
        </a>    
        {{-- <form action="/listings/{{$listing->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="bg-[white] flex items-center border-[1px] inline-flex px-3 py-1 ml-3 rounded-[30px] shadow-md hover:bg-[#db3d3d] hover:text-[white] transition-all ease-in duration-75">
          <i class="fa-solid fa-trash fa-sm"></i>
          <p class=" ml-2">Delete</p>
        </button>
        </form> --}}
      </div>
      </div>
        <p class="bg-[#202020] font-semibold text-white rounded-[40px] py-2 px-4 mb-4 inline-flex"> {{$listing->category}}</p>
        <p class="mb-4"><strong>Ingredient:</strong> {{$listing->ingredient}}</p>
        <strong>How to cook:</strong>
        <p class=" text-justify mb-8">{{$listing->instruction}}</p>    
      </div>
    </div>

   
  </x-layout>