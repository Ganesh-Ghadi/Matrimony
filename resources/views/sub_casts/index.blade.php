<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot> --}}

    @if (session('sub_cast'))
                   <div
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-green-500">
                                {{ session('sub_cast') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

    <div class="flex justify-end my-10 mx-20 items-center">
        <a  class="px-4 w-48 py-1 text-white bg-gray-800 rounded" href="{{ route('sub_cast.create') }}">Create Task</a>
    </div>
    
    <div class="overflow-x-auto">
     <table class="table-auto w-full">
        <thead class="">
          <tr class="">
            <th class="">id</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="text-center">
            @foreach($sub_casts as $sub_cast)
            <tr class="">
                <td>{{@$sub_cast->id}}</td>
                <td>{{@$sub_cast->name}}</td>
                <td>
                    <li style="display: inline-block;vertical-align:top;">
                        <a class="bg-yellow-500 px-4 py-1 rounded" href="{{ route('sub_cast.edit', ['id'=>$sub_cast->id]) }}">Edit</a>
                    </li>
                    <form method="post" action="{{ route('sub_cast.delete', ['id'=>$sub_cast->id]) }}">
                        <li style="display: inline-block;vertical-align:top;">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="bg-red-500 px-4 py-1 rounded">Delete</button>
                        </li>
                    </form>
                </td>
              </tr> 
            @endforeach
        </tbody>
      </table>
    </div>
    
</x-admin-layout>
