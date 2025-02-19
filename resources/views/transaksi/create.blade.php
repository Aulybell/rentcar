<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
<div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Transaksi</h6>
                            <form>
                            <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" wire:model="nama" id="nama" value="{{ @old('nama') }}">
                                    @error('nama')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="ponsel" class="form-label">No Ponsel</label>
                                    <input type="text" class="form-control" wire:model="ponsel" id="ponsel" value="{{ @old('ponsel') }}">
                                    @error('ponsel')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" wire:model="alamat" id="alamat" value="{{ @old('alamat') }}">
                                    @error('alamat')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="lama" class="form-label">Lama Sewa</label>
                                    <input type="number" class="form-control" wire:change="hitung" wire:model="lama" id="lama" value="{{ @old('lama') }}">
                                    @error('lama')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Pesan</label>
                                    <input type="date" class="form-control" wire:model="tanggal" id="tanggal" value="{{ @old('tanggal') }}">
                                    @error('tanggal')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                     Total : {{ $total }}
                                </div>
                                <button type="button" wire:click="store" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
</div>
</div>
