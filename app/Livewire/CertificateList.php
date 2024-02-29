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
    public $no_seri;

    public $pesertaId;

    public function render()
    {
        return view('livewire.certificate-list',['pesertaList'=>$this->getPeserta()]);
    }

    public function getPeserta()
    {
        return Peserta::paginate(12);
    }

    public function setDelete($id)
    {
        $this->prepareDelete = true;
        $this->no_seri = Peserta::findOrFail($id)->no_seri;
        $this->pesertaId = $id;
    }
    public function cancelDelete()
    {
        $this->prepareDelete = false;
    }
    public function delete($id)
    {
        Peserta::findOrFail($id)->delete();
        $this->prepareDelete = false;
        return session()->flash('message','Data Berhasil dihapus');
    }
}
