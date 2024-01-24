<?php

namespace App\Livewire;

use App\Models\Peserta;
use Livewire\Component;
use Livewire\WithPagination;

class CertificateList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public function render()
    {
        return view('livewire.certificate-list',['pesertaList'=>$this->getPeserta()]);
    }

    public function getPeserta()
    {
        return Peserta::paginate(12);
    }
}
