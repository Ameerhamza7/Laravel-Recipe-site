<x-layout>
    <h1 class="mt-[6rem] text-center text-2xl">Manage Listings</h1>
    <div class="container mx-auto mt-10">
            <table class="w-full bg-white rounded my-6">
                <tbody>
                    @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        
                    <tr class="border-b-[1px] border-t-[1px]">
                        <td class="py-6 px-2 text-lg border-gray-200">{{$listing->title}}</td>
                        <td class="py-6 px-2 border-b border-gray-200 text-right">
                            <div class="flex flex-row-reverse ">
                                <form action="/listings/{{$listing->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-[white] flex items-center border-[1px] inline-flex px-4 py-2 ml-3 rounded-[5px] shadow-md hover:bg-[#db3d3d] hover:text-[white] transition-all ease-in duration-75">
                                  <i class="fa-solid fa-trash fa-sm"></i>
                                  <p class=" ml-2">Delete</p>
                                </button>
                                </form>
                                <a href="/listings/{{$listing->id}}/edit" class="bg-[white] flex items-center border-[1px] inline-flex px-4 py-2 rounded-[5px] shadow-md hover:bg-[orange] hover:text-[white] transition-all ease-in duration-75">
                                  <i class="fa-sharp fa-solid fa-pen fa-sm"></i>
                                  <div class=" ml-2">Edit</div>
                                </a>    
                              </div>
                        </td>
                    </tr>               
                                  
                    @endforeach

                    @else
                    <tr class="border-b-[1px] border-t-[1px]">
                        <td class="py-6 text-lg text-center border-gray-200">
                            <p>No Listings Found!</p>
                        </td>
                        
                    </tr> 
                    
                    @endunless
                </tbody>
            </table>
    </div>
       
</x-layout>