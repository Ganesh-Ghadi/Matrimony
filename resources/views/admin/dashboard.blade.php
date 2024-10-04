<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    @if (session('login'))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ session('login') }}
                </div>
            </div>
        </div>
    </div>
@endif

   <div class="w-full">
     <div class=" w-full flex">
        <div class="sidebox  bg-red-500 min-h-screen">
          <h1 class="text-white">red</h1>
        </div>
        <div class="main-content">

        </div>
     </div>

   </div>

   <div class="w-full">
    <div class="w-full flex">
        <div class="sidebox bg-red-500 min-h-screen flex items-center justify-center">
            <h1 class="text-black">red</h1>
        </div>
        <div class="main-content flex-grow bg-gray-100">
            <!-- Main content goes here -->
        </div>
    </div>
</div>

    
</x-app-layout>
