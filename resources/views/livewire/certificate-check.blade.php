<div>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Cek Sertifikat
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            @if (session()->has('message'))
                <div>
                    <p class="text-white bg-red-500 p-5 rounded">
                        <i class="fas fa-warning"></i>
                        {{ session('message') }}
                    </p>
                </div>
            @endif
            <div wire:loading wire:target="searchCertificate">
                Loading ...
            </div>
            <form class="space-y-6" wire:submit="searchCertificate" wire:loading.remove wire:target="searchCertificate">
                <div>
                    <label for="no_seri" class="block text-sm font-medium leading-6 text-gray-900">
                        Nomor Seri
                    </label>
                    <div class="mt-2">
                        <input id="no_seri" placeholder="Masukkan Nomor Seri" wire:model="no_seri" name="no_seri"
                            type="no_seri" autocomplete="no_seri"
                            class="@error('no_seri') border-red-500 border @enderror block w-full rounded-md p-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('no_seri')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <p>
                            <i class="fa fa-search"></i>
                        </p>
                        Cari
                    </button>
                </div>
            </form>

            @if (!empty($certificate))    
                <div class="bg-white overflow-auto mt-5">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th colspan="2" class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Data Peserta</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">No Seri</td>
                                <td class="w-1/3 text-left py-3 px-4">: {{ $certificate->no_seri }}</td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Nama</td>
                                <td class="w-1/3 text-left py-3 px-4">: {{ $certificate->nama }}</td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Instansi</td>
                                <td class="w-1/3 text-left py-3 px-4">: {{ $certificate->instansi }}</td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Jenis Pelatihan</td>
                                <td class="w-1/3 text-left py-3 px-4">: {{ $certificate->jenis_pelatihan }}</td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Tahun</td>
                                <td class="w-1/3 text-left py-3 px-4">: {{ $certificate->tahun }}</td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Link Sertifikat</td>
                                <td class="w-1/3 text-left py-3 px-4">: <a class="hover:text-blue-500 text-blue-400" href="{{ $certificate->link }}" target="_blank">Buka Link</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
