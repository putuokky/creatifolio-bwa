<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('My Orders') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <hr class="my-10">
        <div class="flex flex-col gap-y-5">
          @forelse ($orders as $order)
            <div class="flex flex-row items-center justify-between item-project">
              <div class="flex flex-row items-center gap-x-5">
                <div class="flex flex-col gap-y-1">
                  <h3 class="text-xl font-bold">
                    {{ $order->name }}
                  </h3>
                  <p class="text-sm text-slate-400">
                    {{ $order->category }}
                  </p>
                </div>
              </div>
              <h3 class="text-xl font-bold">
                {{ $order->budget }}
              </h3>
              <div class="flex flex-row items-center gap-x-2">
                <a href="{{ route('admin.project_orders.show', $order) }}"
                  class="px-5 py-3 text-white bg-indigo-500 rounded-full">
                  View Detail
                </a>
              </div>
            </div>
          @empty
            <p>Belum ada order tersedia.</p>
          @endforelse

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
