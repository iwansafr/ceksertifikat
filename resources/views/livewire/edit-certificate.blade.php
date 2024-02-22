<div>
    <h1 class="text-3xl text-black pb-6">Form Peserta</h1>
    <form class="space-y-6 mb-5" wire:submit="save" wire:loading.remove wire:target="save">
        @if (session()->has('message'))
            <div>
                <p class="text-white bg-green-500 p-5 rounded">
                    <i class="fa fa-check"></i>
                    {{ session('message') }}
                </p>
            </div>
        @endif
            @foreach ($form as $key => $item)
                <div class="mb-3">
                    <label for="{{ $key }}" class="block text-sm font-medium leading-6 text-gray-900">
                        {{ $item['label'] }}
                    </label>
                    <div class="mt-2">
                        <input id="{{ $key }}" wire:model="{{ $key }}" name="{{ $key }}"
                            type="{{ $item['type'] }}" autocomplete="{{ $key }}"
                            class="@error($key) border-red-500 border @enderror block w-full rounded-md p-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error($key)
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            @endforeach
            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Save
                </button>
            </div>
    </form>
</div>
