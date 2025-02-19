<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class LihatTransaksi extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[On('lihat-transaksi')]
    public function render()
    {
        $data['transaksi'] = Transaksi::paginate(10);
        return view('livewire.lihat-transaksi', $data);
    }
    public function proses($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'status' => 'PROSES'
        ]);
        session()->flash('success', 'Berhasil simpan data!');
    }
    public function selesai($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'status' => 'SELESAI'
        ]);
        session()->flash('success', 'Berhasil simpan data!');
    }
}
