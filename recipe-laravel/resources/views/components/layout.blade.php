<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TastyTreasures</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
</head>

<body>
    {{-- Header --}}
    <div class="h-[5rem] bg-[#fffceb] bg-gradient-to-b from-[#fffceb] to-[#fff8cf] shadow-md flex items-center justify-between px-[5rem]">
        <a href="/">
        <div class="flex items-center">
            <img src="/images/logo.png" class="h-[3rem]" alt="image">
            <h1 class="text-lg font-medium">TastyTreasures</h1>
        </div>
    </a>
        <div class="flex">
            @auth

            <div class="flex items-center px-4 py-2">
               <span class="text-[17px] font-medium">Welcome {{auth()->user()->name}}</span>
           </div>
           <div class="ml-1 flex items-center hover:bg-[#ffd078] transition-all duration-[0.08s] ease-in rounded px-4 py-2 ">
               <i class="fa-solid fa-gear fa-sm"></i>
               <a href="/listings/manage" class="text-lg ml-2 ">Manage Listings</a>
            </div>
           <form method="POST" action="/logout" class="inline ml-1 hover:bg-[#ffd078] transition-all duration-[0.08s] ease-in rounded px-4 py-2 ">
            @csrf
            <button type="submit" class="flex items-center">
                <i class="fa-solid fa-arrow-right-from-bracket "></i>
                <p class="text-lg ml-2 ">Logout</p>
            </button>
            </form>

               @else

         <div class="flex items-center text-[white]  hover:bg-[#8ed63c] transition-all duration-[0.08s] ease-in rounded px-4 py-2 bg-[#7cb839] border-[1px]">
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <a href="/login" class="ml-2 text-lg">Login</a>
        </div>
        <div class="ml-1 flex items-center hover:bg-[#494949] hover:text-[#ffffff] transition-all duration-[0.08s] ease-in rounded px-4 ">
            <i class="fa-solid fa-user fa-sm"></i>
            <a href="/register" class="text-lg ml-2 ">Register</a>
         </div>

            @endauth
    </div>
    </div>

    {{-- View outpur --}}
    <div>
        {{$slot}}
    </div>

    {{-- Recipe added successfuly --}}
    <x-flash-message/>

</body>

</html>