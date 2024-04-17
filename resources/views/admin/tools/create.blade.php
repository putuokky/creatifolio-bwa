<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('My Tools') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
      <div class="p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li class="py-5 font-bold text-white bg-red-700">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('admin.tools.store') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="flex flex-col gap-y-5">
            <h1 class="text-3xl font-bold text-indigo-950">
              Add New Tools
            </h1>
            <div class="flex flex-col gap-y-2">
              <h3>Name</h3>
              <input type="text" id="name" name="name">
            </div>
            <div class="flex flex-col gap-y-2">
              <h3>Tagline</h3>
              <input type="text" id="tagline" name="tagline">
            </div>
            <div class="flex flex-col gap-y-2">
              <h3>Logo</h3>
              <input type="file" id="logo" name="logo">
            </div>
            <button type="submit" class="w-full py-4 font-bold text-white rounded-full bg-violet-700">Upload
              Tool</button>

          </div>
        </form>

      </div>
    </div>
  </div>
</x-app-layout>
