<div>
  <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
      <div class="col-sm-12 col-xl-12">
         <div class="bg-light rounded h-100 p-4">
         @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
         @endif
          <h6 class="mb-4">Data User</h6>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th>Proses</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $data)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->role }}</td>
                  <td>
                    <!-- Cek apakah pengguna saat ini bukan admin -->
                    @if (auth()->user()->role !== 'admin')
                      <button class="btn btn-info" wire:click="edit({{ $data->id }})">Edit</button>
                      <button class="btn btn-danger" wire:click="destroy({{ $data->id}})">Delete</button>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $user->links() }}
          
          <!-- Cek apakah pengguna saat ini bukan admin -->
          @if (auth()->user()->role !== 'admin')
            <button wire:click="create" class="btn btn-primary">Tambah</button>
          @endif
         </div>
      </div>
    </div>
  </div>

  @if ($addPage)
    @include('users.create')
  @endif

  @if ($editPage)
    @include('users.edit')
  @endif
</div>
