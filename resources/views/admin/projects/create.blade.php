<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('My Projects') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
      <div class="p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">

        <form action="">
          <div class="flex flex-col gap-y-5">
            <h1 class="text-3xl font-bold text-indigo-950">
              Add New Project
            </h1>
            <div class="flex flex-col gap-y-2">
              <h3>Name</h3>
              <input type="text" id="name" name="name">
            </div>
            <div class="flex flex-col gap-y-2">
              <h3>Category</h3>
              <select name="category" id="category">
                <option value="">Choose Category below</option>
                <option value="Website Development">Website Development</option>
                <option value="App Development">App Development</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Digital Marketing">Digital Marketing</option>
              </select>
            </div>
            <div class="flex flex-col gap-y-2">
              <h3>Cover Image</h3>
              <input type="file" id="cover" name="cover">
            </div>
            <div class="flex flex-col gap-y-2">
              <h3>About</h3>
              <textarea name="about" id="about" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="w-full py-4 font-bold text-white rounded-full bg-violet-700">Upload
              Project</button>

          </div>
        </form>

      </div>
    </div>
  </div>
</x-app-layout>
