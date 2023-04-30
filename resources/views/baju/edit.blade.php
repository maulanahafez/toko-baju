<x-layout>
  @php
    // dump($pegawai);
  @endphp
  <div class="bg-light container my-5 p-4 shadow-lg">
    <div class="bread--crumb">
      <nav style="--bs-breadcrumb-divider: '>';"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ route('pegawai') }}><i class="fa-solid fa-house"></i></a></li>
          <li class="breadcrumb-item active"
            aria-current="page">Add Pegawai</li>
        </ol>
      </nav>
    </div>
    <form action={{ route('pegawai_update', ['pegawai' => $pegawai->id]) }}
      method="post"
      name="add_pegawai"
      style="width: 40%;"
      class="m-auto">
      @csrf
      <h2 class="mb-4 text-center">ADD PEGAWAI</h2>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="form-floating mb-3">
        <input type="text"
          class="form-control"
          id="nama"
          placeholder="Nama Lengkap"
          name="nama"
          value="{{ old('nama', $pegawai->nama) }}">
        <label for="nama">Nama Lengkap</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date"
          class="form-control"
          id="tanggal_lahir"
          placeholder="Tanggal Lahir"
          name="tanggal_lahir"
          value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}">
        <label for="tanggal_lahir">Tanggal Lahir</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control"
          style="height: 120px"
          placeholder="Alamat"
          id="alamat"
          placeholder="Alamat"
          name="alamat">{{ old('alamat', $pegawai->alamat) }}</textarea>
        <label for="alamat">Alamat</label>
      </div>
      <div class="mb-3">
        <label for="create_jabatan_pegawai"
          class="form-label">Jabatan Pegawai</label>
        <select class="form-select form-control py-2"
          id="create_jabatan_pegawai"
          aria-label=""
          name="jabatan">
          <option></option>
          @foreach ($jabatans as $jabatan)
            <option value="{{ $jabatan->slug }}"
              {{ $pegawai->jabatan->nama_jabatan == $jabatan->nama_jabatan ? 'selected' : null }}>
              {{ $jabatan->nama_jabatan }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="create_gaji_pegawai"
          class="form-label">Level Pengalaman</label>
        <select class="form-select form-control py-2"
          id="create_gaji_pegawai"
          aria-label=""
          name="gaji">
          <option></option>
          @foreach ($gajis as $gaji)
            <option value="{{ $gaji->level }}"
              {{ $pegawai->gaji->level == $gaji->level ? 'selected' : null }}>{{ $gaji->level }}</option>
          @endforeach
        </select>
      </div>
      <a href={{ route('pegawai') }}
        class="btn btn-secondary">Back</a>
      <button type="submit"
        class="btn btn-primary ms-2"
        name="insert">Save</button>
    </form>
  </div>
</x-layout>
