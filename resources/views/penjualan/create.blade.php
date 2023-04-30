<x-layout>
  @php
    // dd($jenis_bajus, $ukuran);
  @endphp
  <div class="bg-light container my-5 p-4 shadow-lg">
    <div class="bread--crumb">
      <nav style="--bs-breadcrumb-divider: '>';"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ route('baju.index') }}><i class="fa-solid fa-house"></i></a></li>
          <li class="breadcrumb-item active"
            aria-current="page">Add Baju</li>
        </ol>
      </nav>
    </div>
    <form action={{ route('baju.store') }}
      method="post"
      name="add_baju"
      style="width: 40%;"
      class="m-auto">
      @csrf
      <h2 class="mb-4 text-center">ADD BAJU</h2>
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
          placeholder="Nama Baju"
          name="nama"
          value="{{ old('nama') }}">
        <label for="nama">Nama Baju</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text"
          class="form-control"
          id="harga"
          placeholder="Harga Baju"
          name="harga"
          value="{{ old('harga') }}">
        <label for="harga">Harga Baju</label>
      </div>
      <div class="mb-3">
        <label for="create_jenis_baju"
          class="form-label">Jenis Baju</label>
        <select class="form-select form-control py-2"
          id="create_jenis_baju"
          aria-label=""
          name="jenis_baju">
          <option></option>
          @foreach ($jenis_bajus as $jenis_baju)
            <option value="{{ $jenis_baju->jenis_baju }}">{{ $jenis_baju->jenis_baju }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="create_ukuran"
          class="form-label">Ukuran Baju</label>
        <select class="form-select form-control py-2"
          id="create_ukuran"
          aria-label=""
          name="ukuran">
          <option></option>
          @foreach ($ukuran as $u)
            <option value="{{ $u }}">{{ $u }}</option>
          @endforeach
        </select>
      </div>
      <a href={{ route('baju.index') }}
        class="btn btn-secondary">Back</a>
      <button type="submit"
        class="btn btn-primary ms-2"
        name="insert">Save</button>
    </form>
  </div>
</x-layout>
