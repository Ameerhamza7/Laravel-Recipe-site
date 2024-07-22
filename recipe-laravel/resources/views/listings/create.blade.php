<x-layout>

    <div class="flex flex-col items-center mt-16">
        <div class="bg-[#fbfbfb] border border-gray-200 shadow-lg rounded-lg w-full max-w-lg p-8">
            <h1 class="text-2xl font-semibold text-center text-gray-700">Recipe Form</h1>
            <h1 class="text-xl mb-8 text-center text-gray-700">Post your own recipe!</h1>
            <form class="space-y-6" action="/listings" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-1">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title*</label>
                    <input type="text" name="title" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter category of recipe" value="{{old('title')}}" />
                    @error('title')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category*</label>
                    <input type="text" name="category" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter category of recipe" value="{{old('category')}}" />
                    @error('category')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="ingredient" class="block text-sm font-medium text-gray-700">Ingredient*</label>
                    <input type="text" name="ingredient" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter ingredient of recipe" value="{{old('ingredient')}}" />
                    @error('ingredient')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="instruction" class="block text-sm font-medium text-gray-700">Instruction*</label>
                    <textarea name="instruction" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Instruction about recipe" >{{old('instruction')}}</textarea>
                    @error('instruction')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1 mb-8">
                    <label for="image" class="block text-sm font-medium text-gray-700">Upload Image*</label>
                    <input type="file" name="image" class="border border-gray-300 bg-white px-4 py-2 rounded-md w-full"  value="{{old('image')}}" />
                    @error('image')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="text-center">
                    <button class="bg-[#ff9833] text-white font-semibold py-2 px-6 rounded-[5px] hover:bg-[#f8b572] ">Submit</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>