<div>
    @if ($prepareDelete)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Konfirmasi Hapus</div>
                <p class="text-gray-700 text-base">
                    Apakah Anda yakin ingin menghapus data dengan nomor seri <span
                        class="font-bold">{{ $no_seri ?? '' }}</span> tersebut ?
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button wire:click="delete({{ $pesertaId ?? 0 }})"
                    class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mr-2 mb-2 dark:focus:ring-red-900">
                    <i class="fa fa-trash"></i> Hapus</button>
                <button wire:click="cancelDelete"
                    class="focus:outline-none text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-grey-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mr-2 mb-2 dark:focus:ring-blue-900">
                    <i class="fa fa-sync"></i> Batal</button>

            </div>
        </div>
    @else
        <div class="bg-white overflow-auto">
            @if (session()->has('message'))
                <div>
                    <p class="text-white bg-green-500 p-5 rounded">
                        <i class="fa fa-check"></i>
                        {{ session('message') }}
                    </p>
                </div>
            @endif
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">No Seri</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tahun</td>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Instansi</td>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No Wa</td>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jenis Pelatihan</td>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Link</td>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($pesertaList as $item)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">
                                <a href="{{ url('certificate-edit/' . $item->id) }}"
                                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mr-2 mb-2 dark:focus:ring-yellow-900">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <button wire:click="setDelete({{ $item->id }})"
                                    class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mr-2 mb-2 dark:focus:ring-red-900">
                                    <i class="fa fa-trash"></i></button>
                                {{ $item->no_seri }}
                            </td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->nama }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->tahun }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->instansi }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->email }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->no_wa }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->jenis_pelatihan }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $item->link }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pesertaList->links() }}
        </div>
    @endif
</div>
