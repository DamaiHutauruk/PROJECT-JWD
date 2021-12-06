@extends('layouts.master')
@section('header')
<section class="client_section">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Selamat Datang Di<br>
            Website PPDB Online
          </h3>
          <h1>
            PKBM KITA BERSAMA
          </h1>
          <p>
            PKBM Kita Bersama menyelenggarakan pendidikan kesetaraan paket A/B/C & Kursus Komputer <br>
            Daftarkan diri anda sekarang juga.
          </p>
          <div class="hero_btn-continer">
            <a href="/pesdik/form_daftar" class="call_to-btn btn_white-border">
              <span>
                Daftar Sekarang
              </span>
              <!-- <img src="/template/images/right-arrow.png" alt=""> -->
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="/template/images/unnamed.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

@endsection

@section('content')
 
    <!-- about section -->
    <section class="client_section layout_padding">
        <div class="container">
        <h2 class="main-heading ">
            Tentang PKBM
        </h2>
        <p class="text-center">
            PKBM Kita Bersama merupakan adalah lembaga yang dibentuk oleh masyarakat untuk masyarakat yang bergerak dalam bidang pendidikan Non Formal. PKBM ini masih berada di bawah pengawasan dan bimbingan dari Dinas Pendidikan Nasional. Sebagai salah satu satuan pendidikan non formal, PKBM diharapkan dapat menjadi wadah bagi kegiatan masyarakat untuk lebih meningkatkan potensi diri dan keterampilan.
        </p>
        
        <div class="about_img-box ">
            <img src="/template/images/dokumentasi1.jpg" alt="" class="img-fluid w-100">
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="/template/images/dokumentasi1.jpg" target="_blank" class="call_to-btn  ">

            <span>
                Lihat Detail 
            </span>
            <img src="/template/images/right-arrow.png" alt="">
            </a>
        </div>
        </div>
    </section>

@endsection