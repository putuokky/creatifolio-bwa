<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('My Projects') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-28">
        <a href="{{ route('admin.projects.create') }}"
          class="px-10 py-4 font-bold text-white rounded-full w-fit bg-indigo-950">
          Add New Project
        </a>
      </div>
    </div>
  </div>
</x-app-layout>
