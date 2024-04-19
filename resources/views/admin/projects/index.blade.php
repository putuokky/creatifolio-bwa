<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('My Projects') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <a href="{{ route('admin.projects.create') }}"
          class="px-10 py-4 font-bold text-white rounded-full w-fit bg-indigo-950">
          Add New Project
        </a>
        <hr class="my-10">
        <div class="flex flex-col gap-y-5">
          @forelse ($projects as $project)
            <div class="flex flex-row items-center justify-between item-project">
              <div class="flex flex-row items-center gap-x-5">
                <img src="{{ Storage::url($project->cover) }}" alt=""
                  class="object-cover w-[120px] h-[90px] rounded-2xl">
                <div class="flex flex-col gap-y-1">
                  <h3 class="text-xl font-bold">
                    {{ $project->name }}
                  </h3>
                  <p class="text-sm text-slate-400">
                    {{ $project->category }}
                  </p>
                </div>
              </div>
              <div class="flex flex-row items-center gap-x-2">
                <a href="{{ route('admin.project.assign.tool', $project) }}"
                  class="px-5 py-3 text-white rounded-full bg-indigo-950">
                  Add Tools
                </a>
                <a href="{{ route('admin.project_screenshots.create', $project) }}"
                  class="px-5 py-3 text-white rounded-full bg-indigo-950">
                  Add Screenshot
                </a>
              </div>
              <div class="flex flex-row items-center gap-x-2">
                <a href="{{ route('admin.projects.edit', $project) }}"
                  class="px-5 py-3 text-white bg-indigo-500 rounded-full">
                  Edit
                </a>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="px-5 py-3 text-white bg-red-500 rounded-full">
                    Delete
                  </button>
                </form>
              </div>
            </div>
          @empty
            <p>Belum ada Project tersedia.</p>
          @endforelse

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
