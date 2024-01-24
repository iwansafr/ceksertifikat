<?php

namespace App\Livewire;

use App\Models\Peserta;
use Livewire\Component;

class AddCertificate extends Component
{
    public $no_seri;
    public $tahun;
    public $nama;
    public $instansi;
    public $email;
    public $no_wa;
    public $jenis_pelatihan;
    public $link;

    public $form;

    public function mount()
    {
        $this->form = [
            'no_seri'=>[
                'type'=>'number',
                'label'=>'No Seri'
            ],
            'tahun'=>[
                'type'=>'number',
                'label'=>'Tahun'
            ],
            'nama'=>[
                'type'=>'text',
                'label'=>'Nama Lengkap'
            ],
            'instansi'=>[
                'type'=>'text',
                'label'=>'Instansi / Sekolah'
            ],
            'email'=>[
                'type'=>'email',
                'label'=>'Email'
            ],
            'no_wa'=>[
                'type'=>'text',
                'label'=>'No Wa'
            ],
            'jenis_pelatihan'=>[
                'type'=>'text',
                'label'=>'Jenis Pelatihan'
            ],
            'link'=>[
                'type'=>'text',
                'label'=>'Link Sertifikat'
            ],
        ];
    }
    public function render()
    {
        return view('livewire.add-certificate');
    }

    public function save()
    {
        $input = $this->validate([
            'no_seri'=>'required',
            'tahun'=>'required',
            'nama'=>'required',
            'instansi'=>'required',
            'email'=>'required',
            'no_wa'=>'required',
            'jenis_pelatihan'=>'required',
            'link'=>'required',
        ]);

        Peserta::create($input);
        session()->flash('message','Berhasil Simpan Data Peserta');
        $this->resetExcept('form');
    }
}
