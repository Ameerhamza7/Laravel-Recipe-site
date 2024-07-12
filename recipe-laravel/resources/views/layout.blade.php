<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipes</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Header --}}
    <div class="h-[5rem] bg-[#fffceb] bg-gradient-to-b from-[#fffceb] to-[#fff8cf] shadow-md flex items-center justify-between px-[5rem]">
        <div class="flex items-center">
            <img src="/images/logo.png" class="h-[3rem]" alt="image">
            <h1 class="text-lg font-medium">TastyTreasures</h1>
        </div>
        <div class="flex">
         <div class="flex items-center hover:bg-[#7cacb8] duration-[0.08s] ease-in rounded px-5 py-2 bg-[#537b85] border-[1px]">
            <a href="" class="text-lg text-[white] ">Login</a></div>
            <a href="" class="text-lg ml-4 hover:bg-[#537b85] hover:text-[white] rounded px-5 py-2">Register</a>
    </div>
    </div>

    

    {{-- VIEW OUTPUT --}}
    <div>
        @yield('content')
    </div>
</body>

</html>