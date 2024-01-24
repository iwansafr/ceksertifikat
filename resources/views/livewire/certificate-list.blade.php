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
                        <td class="w-1/3 text-left py-3 px-4">{{ $item->no_seri }}</td>
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
