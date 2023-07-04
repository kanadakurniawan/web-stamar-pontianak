@extends('layouts.sidebar-left')
@section('judul')
Buletin
@endsection
@php
$sidebar = 'publikasi';
@endphp
@section('konten')

<div class="content col-lg-9">
				
				
    <label>
        <span>Edisi</span> 
        <select id="edisi" onchange="tampilkan()" name="dropdown">
          <option>Silakan pilih</option>
          <option value="1">Januari</option>
          <option value="2">Februari</option>
          <option value="3">Maret</option>					  
          <option value="4">April</option>					  
          <option value="5">Mei</option>						  
          <option value="6">Juni</option>					  
          <option value="7">Juli</option>					  
          <option value="8">Agustus</option>					  
          <option value="9">September</option>					  
          <option value="10">Oktober</option>				  
          <option value="11">November</option>				  
          <option value="12">Desember</option>
          
        </select>
    </label>
    <label>
        <span>Tahun</span> 
        <select id="thn" onchange="tampilkan()" name="dropdown">
          <option>Silakan pilih</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
        </select>
    </label>
    <!--<div id="containernye" style="width:100%; height:400px;"></div>
     Post item-->
    <?php
    if (isset($_POST['edisi'])) {
        $edisi = $_POST['edisi'];
    }
    if (isset($_POST['thn'])) {
        $thn = $_POST['thn'];
    }
    function ganti($bulan) {
        if ($bulan == 1) { return "Januari"; }
        elseif ($bulan == 2) { return "Februari"; }
        elseif ($bulan == 3) { return "Maret"; }
        elseif ($bulan == 4) { return "April"; }
        elseif ($bulan == 5) { return "Mei"; }
        elseif ($bulan == 6) { return "Juni"; }
        elseif ($bulan == 7) { return "Juli"; }
        elseif ($bulan == 8) { return "Agustus"; }
        elseif ($bulan == 9) { return "September"; }
        elseif ($bulan == 10) { return "Oktober"; }
        elseif ($bulan == 11) { return "November"; }
        elseif ($bulan == 12) { return "Desember"; }
    }
    include "opendata/elements/config-maritim-data.php";									
    $sqli = "SELECT * FROM buletin WHERE id_buletin IN (SELECT MAX(id_buletin) FROM buletin)";
    $resulti = $conn->query($sqli);
    $i = 1;
    if ($resulti->num_rows > 0) {
                                        
        // output data of each row
        while($rowi = $resulti->fetch_assoc()) {
            $link= $rowi["link"];
            $bulan = ganti($rowi["bulan"]);
            $judulnyaa = "Buletin Maritim Bulan " . $bulan . " Tahun " . $rowi["tahun"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    <h1 id="edi"> <?php echo "$judulnyaa";?> </h1>
    <div id="dissue">
    
    <iframe  src="<?php echo "$link";?>/preview" width="100%" height="850"></iframe>
    <br/><br/>
    <a id="ddissue" href="<?php echo "$link";?>/view?usp=sharing"><button type="button" class="btn">Download</button></a>
    
    </div>
    

    

</div>
        
@endsection