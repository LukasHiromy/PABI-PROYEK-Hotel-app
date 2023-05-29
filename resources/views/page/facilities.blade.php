@extends('layout/app')

@section('content')
    <!-- kode program navbar di atas -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Facilities</h2>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <table class="table table-striped facilities">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Facility Name</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Kolam renang</td>
              <td>Terletak di lantai atas hotel dengan pemandangan yang indah</td>
              {{-- gambarnya belum tersedia --}}
              <img src="img_1.jpg" alt="Gambar hotel dengan kolam renang di lantai atas">
            </tr>

            {{-- tabelnya masih kurang gambar --}}
            <tr>
              <th scope="row">2</th>
              <td>Spa</td>
              <td>Menawarkan berbagai perawatan tubuh dan kecantikan</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Gym</td>
              <td>Dilengkapi dengan alat-alat fitness modern dan instruktur profesional</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Restoran</td>
              <td>Menyajikan masakan internasional dan lokal dengan citarasa yang lezat</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Bar</td>
              <td>Menyediakan berbagai minuman dan camilan ringan</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Ruang pertemuan</td>
              <td>Dapat menampung hingga 100 orang untuk berbagai acara bisnis atau pribadi</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Layanan kamar</td>
              <td>Tersedia 24 jam dengan pilihan menu yang beragam</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Wi-Fi gratis</td>
              <td>Tersedia di seluruh area hotel dan kamar</td>
            </tr>
          </tbody>
        </table>

    @endsection