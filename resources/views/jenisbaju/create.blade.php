<x-layout>
  @php
    // dd($jenis_bajus, $ukuran);
  @endphp
  <div class="bg-light container my-5 p-4 shadow-lg">
    <div class="bread--crumb">
      <nav style="--bs-breadcrumb-divider: '>';"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ route('jenisbaju.index') }}><i class="fa-solid fa-house"></i></a></li>
          <li class="breadcrumb-item active"
            aria-current="page">Add Baju</li>
        </ol>
      </nav>
    </div>
    <form action={{ route('jenisbaju.store') }}
      method="post"
      name="add_jenis_baju"
      style="width: 40%;"
      class="m-auto">
      @csrf
      <h2 class="mb-4 text-center">ADD JENIS BAJU</h2>
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
          id="jenis_baju"
          placeholder="jenis_baju"
          name="jenis_baju"
          value="{{ old('jenis_baju') }}">
        <label for="jenis_baju">Jenis Baju</label>
      </div>
      <a href={{ route('baju.index') }}
        class="btn btn-secondary">Back</a>
      <button type="submit"
        class="btn btn-primary ms-2"
        name="insert">Save</button>
    </form>
  </div>
</x-layout>
