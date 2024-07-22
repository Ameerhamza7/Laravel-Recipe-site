<x-layout>

    <div class="flex flex-col items-center mt-16">
        <div class="bg-[#fbfbfb] border border-gray-200 shadow-lg rounded-lg w-full max-w-lg p-8">
            <h1 class="text-2xl font-semibold text-center text-gray-700">Register</h1>
            <h1 class="text-lg mb-8 text-center text-gray-700">Create an account to post recipe!</h1>
            <form class="space-y-6" action="/users" method="POST">
                @csrf
                <div class="space-y-1">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter complete name" value="{{old('name')}}" />
                    @error('name')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter valid email" value="{{old('email')}}" />
                    @error('email')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Enter password (min. 6 characters)" value="{{old('password')}}" />
                    @error('password')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="border border-gray-300 px-4 py-2 rounded-md w-full" placeholder="Confirm password" value="{{old('password_confirmation')}}" />
                    @error('password_confirmation')
                    <p class="text-[#db3d3d] text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                
                <div>
                    <h1 class=" mb-8 text-center text-gray-700">Already have an account?
                        <a href="/login" class="text-[#db3d3d] font-semibold">Login</a>
                    </h1>
                </div>

                <div class="text-center">
                    <button class="bg-[#ff9833] text-white font-semibold py-2 px-6 rounded-[5px] hover:bg-[#f8b572] ">Register</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>