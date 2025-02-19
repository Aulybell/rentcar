<div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
      <div class="col-sm-12 col-xl-12">
         <div class="bg-light rounded h-100 p-4">
         @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success')}}
                        </div>
                        @endif
                      <h6 class="mb-4">Data Mobil</h6>
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No polisi</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">jenis</th>
                                        <th>Harga</th>
                                        <th>Kapasitas</th>
                                        <th>Foto</th>
                                        <th>
                                            proses
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mobil as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nopolisi }}</td>
                                        <td>{{ $data->merk }}</td>
                                        <td>{{ $data->jenis }}</td>
                                        <td>{{ $data->harga }}</td>
                                        <td>{{ $data->kapasitas }}</td>
                                        <td>
                                            <img src="{{ asset('storage/mobil/' . $data->foto) }}" style="width: 150px" alt="{{ $data->merk }}">
                                        </td>
                                        <td>
                                            <button class="btn btn-info" wire:click="edit({{ $data->id }})">Edit</button>
                                            <button class="btn btn-danger" wire:click="destroy({{ $data->id}})">Delete</button>
                                       </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">Data mobil belum ada!</td>
                                    </tr>
                                       @endforelse
                                </tbody>
                            </table>
                            {{ $mobil->links() }}
                            <button  wire:click="create({{ $data->mobil_id }})" class="btn btn-primary">Tambah</button>
                   </div>
              </div>
          </div>
</div>
 @if ($addPage)
@include('mobil.create')
@endif
@if ($editPage)
@include('mobil.edit')
@endif
</div>

