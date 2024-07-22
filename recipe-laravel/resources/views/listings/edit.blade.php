<x-layout>

    <div class="flex flex-col items-center mt-16">
        <div class="bg-[#fbfbfb] border border-gray-200 shadow-lg rounded-lg w-full max-w-lg p-8">
            <h1 class="text-2xl mb-1 font-semibold text-center text-gray-700">Edit Recipe</h1>
            <h1 class="text-xl mb-8 text-center text-gray-700">{{$listing->title}}</h1>
            <form class="space-y-6" action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="space-y-1">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title*</label>
                    <input type="text" name="title" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter category of recipe" value="{{$listing->title}}" />
                    @error('title')
                    <p class="text-[red] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category*</label>
                    <input type="text" name="category" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter category of recipe" value="{{$listing->category}}" />
                    @error('category')
                    <p class="text-[red] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="ingredient" class="block text-sm font-medium text-gray-700">Ingredient*</label>
                    <input type="text" name="ingredient" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter ingredient of recipe" value="{{$listing->ingredient}}" />
                    @error('ingredient')
                    <p class="text-[red] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="instruction" class="block text-sm font-medium text-gray-700">Instruction*</label>
                    <textarea name="instruction" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Instruction about recipe" >{{$listing->instruction}}</textarea>
                    @error('instruction')
                    <p class="text-[red] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1 mb-8">
                    <label for="image" class="block text-sm font-medium text-gray-700">Upload Image*</label>
                    <input type="file" name="image" class="border border-gray-300 bg-white px-4 py-2 rounded-md w-full" />
                    <div class=" overflow-hidden mb-5 rounded-[2rem] w-1/2 shadow-[#ebe6ca]">
                        <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('/images/dish1.jpg')}}" alt="Image" class="w-full h-full object-cover bg-no-repeat bg-center" />
                      </div>
                    @error('image')
                    <p class="text-[red] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="text-center">
                    <button class="bg-[#ff9833] text-white font-semibold py-2 px-6 rounded-[5px] hover:bg-[#f8b572] ">Update</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>