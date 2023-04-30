<x-layout>
  @php
    // dd($bajus);
  @endphp
  <div class="bg-light container my-5 p-4 shadow-lg">
    <div class="bread--crumb">
      <nav style="--bs-breadcrumb-divider: '>';"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ route('home') }}><i class="fa-solid fa-house"></i></a></li>
        </ol>
      </nav>
    </div>
    <div class="mb-3 text-center">
      <h1 class="mb-3">
        <i class="fa-solid fa-people-group"></i>
        <span class="ml-2">TABEL BAJU</span>
      </h1>
      <a href={{ route('baju.create') }}
        class="btn btn-sm btn-primary mb-2">
        Add New Baju
      </a>
    </div>
    @if (session('storesuccess'))
      <div class="alert alert-success"
        role="alert">
        {{ session('storesuccess') }}
      </div>
    @endif
    @if (session('updatesuccess'))
      <div class="alert alert-success"
        role="alert">
        {{ session('updatesuccess') }}
      </div>
    @endif
    @if (session('deletesuccess'))
      <div class="alert alert-success"
        role="alert">
        {{ session('deletesuccess') }}
      </div>
    @endif

    @php
      $i = 1;
    @endphp
    <table id="pegawai"
      class="table-striped table-hover table text-start align-middle">
      <thead>
        <tr>
          <th scope="col">#</th>
          <!-- <th scope="col">id</th> -->
          <th scope="col">Nama</th>
          <th scope="col">Jenis Baju</th>
          <th scope="col">Harga</th>
          <th scope="col">Ukuran</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bajus as $baju)
          <tr>
            <td>{{ $i++ }}</td>
            <!-- <td>
              {{-- {{ $baju->id }} --}}
            </td> -->
            <td>{{ $baju->nama }}</td>
            <td>{{ $baju->jenis_baju->jenis_baju }}</td>
            <td>Rp {{ $baju->harga }}</td>
            <td>{{ $baju->ukuran }}</td>
            <td>
              <div class="d-flex gap-1">
                {{-- <a href={{ route('baju.edit', ['baju' => $baju->id]) }}
                  class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                <form action={{ route('baju.destroy', ['baju' => $baju->id]) }}
                  method="post">
                  @csrf
                  @method('delete')
                  <button type="submit"
                    class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-layout>
