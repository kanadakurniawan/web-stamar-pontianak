@extends('layouts.sidebar-left')
@section('judul')
Tarif Produk
@endsection
@php
$sidebar = 'layanan-publik';
@endphp
@section('konten')
<div class="content col-lg-9">
    <!-- Blog -->
    <div id="blog" class="single-post">
        <!-- Post single item-->	
        <h5>Produk dan tarif sesuai <a href="https://cdn.bmkg.go.id/Web/5701PP_Nomor_47_Tahun_2018.pdf" target="_blank" rel="noopener"><span class="">PP No. 47 Tahun 2018</span></a> tentang Jenis dan tarif penerimaan Negara bukan pajak yang berlaku di BMKG.</h4>
        <br>
        <h5>I. INFORMASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th valign="top"><div class="text-center">JENIS PENERIMAAN NEGARA BUKAN PAJAK</div></th>
                    <th valign="top"><div class="text-center">SATUAN</div></th>
                    <th valign="top"><div class="text-center">TARIF</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td valign="top"><strong>A. Informasi Khusus Meteorologi, Klimatologi, dan Geofisika</strong></td>
                        <td valign="top"></td>
                        <td valign="top">PP No. 47 Tahun 2018</td>
                    </tr>
                    <tr>
                        <td valign="top"><div>1. Informasi Cuaca untuk Pelayaran</div></td>
                        <td valign="top"><div class="text-center">per <em>route</em> per hari</div></td>
                        <td valign="top"><div class="text-right">Rp 250.000,00</div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>2. Informasi Cuaca untuk Pelabuhan</div></td>
                        <td valign="top"><div class="text-center">per lokasi per hari</div></td>
                        <td valign="top"><div class="text-right">Rp 225.000,00</div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>3. Informasi Cuaca untuk Pengeboran Lepas Pantai</div></td>
                        <td valign="top"><div class="text-center">per dokumen per lokasi per hari</div></td>
                        <td valign="top"><div class="text-right">Rp 330.000,00</div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>4. Informasi Meteorologi, Klimatologi, dan Geofisika untuk Keperluan Klaim Asuransi</div></td>
                        <td valign="top"></td>
                        <td valign="top"></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>-- Informasi Meteorologi</div></td>
                        <td valign="top"><div class="text-center">per lokasi per hari</div></td>
                        <td valign="top"><div class="text-right">Rp 175.000,00</div></td>
                    </tr>
                    <tr>
                        <td valign="top"><strong>B. Informasi Khusus Meteorologi, Klimatologi, dan Geofisika Sesuai Permintaan</strong></td>
                        <td valign="top"></td>
                        <td valign="top"></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>1. Informasi Meteorologi</div></td>
                        <td valign="top"></td>
                        <td valign="top"></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>-- a. Informasi Cuaca Khusus untuk Kegiatan Olah Raga</div></td>
                        <td valign="top"><div class="text-center">per lokasi per hari</div></td>
                        <td valign="top"><div class="text-right">Rp 100.000,00</div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>-- b. Informasi Cuaca Khusus untuk Kegiatan Komersial <em>Outdoor/Indoor</em></div></td>
                        <td valign="top"><div class="text-center">per lokasi per hari</div></td>
                        <td valign="top"><div class="text-right">Rp 100.000,00</div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>2. Informasi Klimatologi</div></td>
                        <td valign="top"></td>
                        <td valign="top"></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>-- a. Informasi Iklim Maritim</div></td>
                        <td valign="top"></td>
                        <td valign="top"></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>----- 1. Peta Spasial Informasi Maritim</div></td>
                        <td valign="top"><div class="text-center">per peta per bulan</div></td>
                        <td valign="top"><div class="text-right">Rp 300.000,00</div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div>----- 2. Informasi Tabular dan Grafik Maritim</div></td>
                        <td valign="top"><div class="text-center">per tabel per bulan</div></td>
                        <td valign="top"><div class="text-right">Rp 350.000,00</div></td>
                    </tr>
                </tbody>
            </table>    
        <!-- end: Post single item-->
        </div>
    </div>
</div>
@endsection