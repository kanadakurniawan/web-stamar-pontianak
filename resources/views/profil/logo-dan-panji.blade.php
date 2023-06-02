@extends('layouts.profil')
@section('judul')
Panji dan Logo
@endsection
@section('konten')
<div class="content col-lg-9">
    <!-- Blog -->
    <div id="blog" class="single-post">
        <div class="row">
        <!-- Post single item-->
            <div class="col-md-6">

                <p><img src="https://maritim.kalbar.bmkg.go.id/images/bmkg.png" style="display: block; margin-left: auto; margin-right: auto;" width="207" height="260">
                </p>
                <p><strong>Bentuk Logo</strong></p>
                <p>Logo Badan Meteorologi, Klimatologi, dan Geofisika berbentuk lingkaran dengan warna dasar biru, putih dan hijau, di tengah-tengah warna putih terdapat satu garis berwarna abu-abu. Dibawah logo yang berbentuk lingkaran terdapat tulisan BMKG.</p>
                <p><strong>Makna Logo</strong></p>
                <p>Makna dari logo BMKG menggambarkan bahwa BMKG berupaya semaksimal mungkin dapat menyediakan dan memberikan informasi meteorologi klimatologi dan geofisika dengan mengaplikasikan perkembangan ilmu pengetahuan dan teknologi terkini dan dapat berkembang secara dinamis sesuai kemajuan zaman. Dalam menjalankan fungsinya, BMKG berupaya memberikan yang terbaik dan penuh keikhlasan berdasarkan pancasila untuk bangsa dan tanah air Indonesia yang subur yang terletak di garis kathulistiwa.</p>
                <p><strong>Arti Logo</strong></p>
                <ul style="list-style-position:outside;text-indent:0px;">
                    <li>Bentuk lingkaran melambangkan BMKG sebagai institusi yang dinamis</li>
                    <li>5 (lima) garis di bagian atas melambangkan dasar Negara RI yaitu Pancasila</li>
                    <li>9 (sembilan) garis di bagian bawah merupakan angka tertinggi yang melambangkan hasil maksimal yang diharapkan</li>
                    <li>Gumpalan awan putih melambangkan meteorologi</li>
                    <li>Bidang warna biru bergaris melambangkan klimatologi</li>
                    <li>Bidang berwarna hijau bergaris patah melambangkan geofisika</li>
                    <li>1 (satu) garis melintang di tengah melambangkan garis kathulistiwa</li>
                </ul>
                <p><br><strong>Arti Warna Logo</strong></p>
                <ol class="b" style="list-style-position:outside;text-indent:0px;">
                    <li>Warna biru diartikan keagungan/ ketaqwaan.</li>
                    <li>Warna putih diartikan keikhlasan/ suci.</li>
                    <li>Warna hijau diartikan kesuburan.</li>
                    <li>Warna abu-abu diartikan bebas/ tidak ada batas administrasi.</li>
                </ol>
            </div>

            <div class="col-md-6">
                <p><img src="{{ asset('frontend/images/panji.jpg') }}" style="display: block; margin-left: auto; margin-right: auto;" width="400" height="268">
                </p>
                <p><strong>Bentuk Panji</strong></p>
                <p>Panji BMKG berbentuk empat persegi panjang dengan warna dasar biru (medium blue), dengan gambar lambang BMKG diletakkan di tengah, yang terdiri dari 8 (delapan) arah mata angin berwarna kuning keemasan (golden rod), bola dunia berwarna putih dengan 5 (lima) garis lintang, 17 (tujuh belas) butir padi dan 8 (delapan) butir kapas berwarna kuning keemasan (golden rod) dan pita berwarna biru (medium blue) bertuliskan BMKG yang berwarna kuning keemasan (golden rod).</p>
                <p><strong>Makna Panji</strong></p>	
                <p>BMKG sebagai instansi pemerintah yang melaksanakan penyelenggaraan meteorologi, klimatologi, dan geofisika dalam rangka meningkatkan kesejahteraan masyarakat.</p>
                <p><strong>Arti Panji</strong></p>
                <ul style="list-style-position:outside;text-indent:0px;">
                    <li>Padi dan kapas menggambarkan dukungan BMKG dalam mewujudkan kesejahteraan bagi masyarakat dan bangsa, serta menjelaskan tanggal dan bulan proklamasi kemerdekaan bangsa Indonesia.</li>
                    <li>Arah mata angin menggambarkan pengamatan meteorologi dan klimatologi yang dilakukan pada segala penjuru tanah air.</li>
                    <li>Garis lintang yang mengambarkan garis lintang utara dan lintang selatan serta ekuator pada bola dunia yang melambangkan penyelenggaraan kegiatan geofisika.</li>
                    <li>Sehelai pita yang bertulis BMKG menggambarkan instansi Badan, Meteorologi, dan Geofisika.</li>
                </ul>	
                <br>
                <p><strong>Arti Warna Panji</strong></p>
                <ol class="b" style="list-style-position:outside;text-indent:0px;">	
                    <li>Warna putih menggambarkan kesederhanaan dan suci.</li>
                    <li>Warna kuning keemasan (golden rod) menggambarkan kejayaan.</li>
                    <li>Warna biru (medium blue) sebagai warna dasar panji menggambarkan kepercayaan, kehandalan dan tanggung jawab.</li>
                </ol>
            </div>
        </div>	


        <!-- end: Post single item-->
    </div>
</div>
@endsection