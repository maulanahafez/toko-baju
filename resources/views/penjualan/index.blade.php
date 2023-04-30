<x-layout>
  @php
    // dd($penjualans);
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
        <span class="ml-2">TABEL PENJUALAN</span>
      </h1>
      {{-- <a href={{ route('penjualan.create') }}
        class="btn btn-sm btn-primary mb-2">
        Add New Penjualan
      </a> --}}
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
          <th scope="col">Baju</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jumlah Terjual</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($penjualans as $penjualan)
          <tr>
            <td>{{ $i++ }}</td>
            <!-- <td>
              {{-- {{ $penjualan->id }} --}}
            </td> -->
            <td>{{ $penjualan->bajus_id }}</td>
            <td>{{ $penjualan->tanggal }}</td>
            <td>{{ $penjualan->jumlah_terjual }}</td>
            <td>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-layout>
