<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Order Details') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
      <div class="p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">

        <div class="flex flex-row items-center gap-x-5">
          <div class="flex flex-col gap-y-1">
            <h3 class="text-xl font-bold">
              {{ $projectOrder->name }}
            </h3>
            <p class="text-sm text-slate-400">
              {{ $projectOrder->email }}
            </p>
          </div>
        </div>

        <hr class="my-10">

        <h3 class="text-xl font-bold text-indigo-950">Brief</h3>

        <p>{{ $projectOrder->brief }}</p>

        <p>{{ $projectOrder->category }}</p>

        <p>${{ $projectOrder->budget }}</p>

      </div>
    </div>
  </div>
</x-app-layout>
