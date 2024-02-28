<?php

namespace App\Livewire;

use App\Models\Peserta;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class CertificateList extends Component
{
    use WithPagination;

    #[Title('List Sertifikat')]
    protected $paginationTheme = 'tailwind';

    public $prepareDelete = false;
    public function render()
    {
        return view('livewire.certificate-list',['pesertaList'=>$this->getPeserta()]);
    }

    public function getPeserta()
    {
        return Peserta::paginate(12);
    }

    public function prepareDelete($id)
    {
        $this->prepareDelete = true;
    }
}
