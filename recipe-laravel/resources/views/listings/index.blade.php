<x-layout>
    
@include('partials._hero')    

<h1 class="text-md font-medium pb-[1rem] px-[17.5rem] mt-[4rem]">Latest Recipes</h1>
@unless(count($listings) == 0)
<div class="grid grid-cols-3 gap-[3rem] mx-auto max-w-[70vw] mb-[2rem]">
{{-- <div class="flex gap-[5rem] h-full justify-center"> --}}
@foreach($listings as $listing)

<x-listing-card :listing="$listing" />
 @endforeach

 @else
 <p>No listing found!</p>
 @endunless
</div>
{{-- </div> --}}

{{-- <div class=" px-[17.5rem] mb-[4rem]">
    {{$listings->links()}}
</div> --}}

</x-layout>