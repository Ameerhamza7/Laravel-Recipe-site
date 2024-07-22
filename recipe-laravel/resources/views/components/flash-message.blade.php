@if(session()->has('message'))
<div x-data='{show: true}' x-init='setTimeout(() => show = false, 3000)' x-show='show' class="fixed top-[8rem] right-0 bg-[#7cb839] text-[#ffffff] text-lg px-[3rem] py-[1rem] rounded-l-[5px] border-l-[4px] border-[#ffffff] transition-all ease-in-out duration-700">
<p>
    {{session('message')}}
</p>
</div>

@endif