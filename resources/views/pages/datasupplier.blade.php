@php
use App\Models\User;

$perusahaan_id = Auth::user()->perusahaan_id;

$users = User::where('perusahaan_id', $perusahaan_id)->get();
@endphp
<div class="col">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Profile</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $number = 1; // Inisialisasi nomor awal
                @endphp
                @foreach ($users as $user)
                @if ($user->id !== Auth::id())
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <img src="{{ asset('images/' . $user->foto_profile) }}" alt="Foto Profil" width="50" height="50">
                    </td>
                    <td>
                        @include('component.modal_edit_user')
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal{{ $user->id }}">Edit</a>
                        @include('component.modal_hapus_user')
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusUser{{ $user->id }}">Hapus</a>

                    </td>
                </tr>
                @php
                $number++;
                @endphp
                @endif
                @endforeach

                @if (count($users) === 1)
                <tr>
                    <td colspan="5">Data user kosong</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    @include('component.modal_tambah_user')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah User
    </button>

</div>