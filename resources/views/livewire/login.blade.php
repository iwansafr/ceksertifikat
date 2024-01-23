<div>
    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-key mr-3"></i> Login
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" wire:submit="login">
                <p class="text-lg text-gray-800 font-medium pb-4">Login</p>
                @if (session()->has('message'))    
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Login failed!</strong>
                        <span class="block sm:inline"> {{ session('message') }}.</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <i class="fas fa-exclamation-circle"></i>
                        </span>
                    </div>
                @endif
                <div class="mt-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email:
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight @error('email') focus:outline-none focus:shadow-outline border-red-500 @enderror"
                        id="email" type="email" wire:model="email" placeholder="Enter your email">
                    <p class="text-red-500 text-xs italic mt-1">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="mt-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password:
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight @error('password') focus:outline-none focus:shadow-outline border-red-500 @enderror"
                        id="password" type="password" wire:model="password" placeholder="Enter your password">
                    <p class="text-red-500 text-xs italic mt-1">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="mt-2">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">
                        <i class="fas fa-sign-in-alt mr-2"></i> Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
