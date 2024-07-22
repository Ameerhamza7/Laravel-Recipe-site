@props(['listing'])
<div class="relative flex w-[23rem] rounded-[10px] p-[1.5rem] border-[1px] border-[#f8f3d4] bg-gradient-to-b from-[#fcf8e5] to-[#fcf4cb]">
    <div class="max-w-[84%]">
        <div class=" mb-2"><a href="./listings/{{$listing->id}}" class=" font-bold text-lg">{{$listing->title}}</a></div>
        <p class="bg-[#202020] font-semibold text-white rounded-[40px] py-2 px-4 mb-2 inline-flex"> {{$listing->category}}</p>
        <p class="truncate max-w-[90%] overflow-hidden whitespace-nowrap mb-2"><strong>Ingredient:</strong> {{$listing->ingredient}}</p>
        <a href="./listings/{{$listing->id}}"><button class="bg-[#7cb839] rounded-full text-[red] w-[24px] h-[24px] flex justify-center items-center inline-flex"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg></button></a>
        
      </div>
         <div class="overflow-hidden border-[2px] border-[#e9dc93] h-[9rem] w-[9rem] absolute right-[-4rem] top-[1.55rem] rounded-full shadow-lg shadow-[#ebe6ca]">
          <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('/images/dish1.jpg')}}" alt="Image" class="scale-105 rounded-full w-full h-full object-cover bg-no-repeat bg-center" />
        </div> 
    </div>