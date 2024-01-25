<?php

namespace App\Livewire;

use App\Models\Peserta;
use Livewire\Component;

class CertificateCheck extends Component
{
    public $no_seri;
    public $certificate;
    public function render()
    {
        return view('livewire.certificate-check');
    }

    public function searchCertificate()
    {
        $this->validate(['no_seri'=>'required'],['no_seri.required'=>'Nomor Seri wajib di isi']);
        $this->certificate = Peserta::where('no_seri',$this->no_seri)->first();
    }
}
