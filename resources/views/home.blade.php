<x-layout>
  <div class="bg-light container my-5 p-4 text-center shadow-lg">
    <h3 class="text-secondary">Selamat Datang di</h3>
    <h1 class="fw-bold"><i class="fa-solid fa-school me-2"></i> Pengelolaan Toko Baju</h1>
    <div class="row justify-content-center align-items-stretch mt-4 align-middle">
      <div class="col-3 card mx-2 p-2 pt-5 shadow-sm">
        <img src={{ asset('static-assets/1.svg') }}
          alt=""
          class="w-75 mx-auto">
        <div class="card-body mt-4">
          <a href={{ route('baju.index') }}
            class="btn btn-primary">
            Data Baju
          </a>
        </div>
      </div>
      <div class="col-3 card mx-2 p-2 pt-5 shadow-sm">
        <img src={{ asset('static-assets/2.svg') }}
          alt=""
          class="w-75 mx-auto">
        <div class="card-body mt-4">
          <a href={{ route('jenisbaju.index') }}
            class="btn btn-primary">
            Data Jenis Baju
          </a>
        </div>
      </div>
      <div class="col-3 card mx-2 p-2 pt-5 shadow-sm">
        <img src={{ asset('static-assets/3.svg') }}
          alt=""
          class="w-75 mx-auto">
        <div class="card-body mt-4">
          <a href={{ route('penjualan.index') }}
            class="btn btn-primary">
            Data Penjualan
          </a>
        </div>
      </div>
    </div>
  </div>
</x-layout>
