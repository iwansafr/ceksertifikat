<div>
    <div class="bg-white overflow-auto">
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
                            <a href="{{ url('certificate-edit/'.$item->id) }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mr-2 mb-2 dark:focus:ring-yellow-900">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
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
</div>
