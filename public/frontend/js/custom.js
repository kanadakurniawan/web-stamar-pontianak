var offset = 0;
function calcOffset() {
    var xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    xmlhttp.open("HEAD.html", "http://jam.bmkg.go.id/", false);
    xmlhttp.send();

    var dateStr = xmlhttp.getResponseHeader('Date');
    var serverTimeMillisGMT = Date.parse(new Date(Date.parse(dateStr)).toUTCString());
    var localMillisUTC = (new Date()).getTime();

    offset = serverTimeMillisGMT -  localMillisUTC;
}

function getServerTime() {
    var date = new Date();
    date.setTime(date.getTime() + offset);
    return date;
}

function showLocalTime(a, b, c, d) {
    if (document.getElementById && document.getElementById(a)) {
        this.container = document.getElementById(a), this.displayversion = d;
        this.localtime = this.serverdate = getServerTime(), this.localtime.setTime(this.serverdate.getTime() + 60 * c * 1e3), this.updateTime(), this.updateContainer()
    }
}

function formatField(a, b) {
    if ("undefined" != typeof b) {
        var c = a > 12 ? a - 12 : a;
        return 0 == c ? 12 : c
    }
    return a <= 9 ? "0" + a : a
}
var minggutxt = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
    weekdaystxt = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    bulantxt = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    monthstxt = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
showLocalTime.prototype.updateTime = function() {
    var a = this;
    this.localtime.setSeconds(this.localtime.getSeconds() + 1), setTimeout(function() {
        a.updateTime()
    }, 1e3)
}, showLocalTime.prototype.updateContainer = function() {
    var a = this;
    if ("long" == this.displayversion) this.container.innerHTML = this.localtime.toLocaleString();
    else {
        var b = this.localtime.getHours(),
            c = this.localtime.getMinutes(),
            d = this.localtime.getSeconds(),
            k = (this.localtime.getDate(), this.localtime.getUTCDate(), minggutxt[this.localtime.getDay()], bulantxt[this.localtime.getMonth()], weekdaystxt[this.localtime.getUTCDay()], monthstxt[this.localtime.getUTCMonth()], b + 1);
        k >= 24 && (k -= 24);
        var l = b + 2;
        l >= 24 && (l -= 24);
        var m = b - 7;
        m < 0 && (m += 24);
        this.container.innerHTML = "<span class='hari-digit hidden-sm text-light'><a href='http://jam.bmkg.go.id/' target='_blank'>STANDAR WAKTU INDONESIA</a> </span><span class='FontDigit text-success'>" + formatField(b) + ":" + formatField(c) + ":" + formatField(d) + " WIB / </span><span class='FontDigit text-success'>" + formatField(m) + ":" + formatField(c) + ":" + formatField(d) + " UTC</span>"
    }
    setTimeout(function() {
        a.updateContainer()
    }, 1e3)
};

function show_hari() 
{
	//membuat variabel bertipe array untuk nama hari
	var NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
	"Sabtu");
	//membuat variabel bertipe array untuk nama bulan
	var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei",
	"Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	var sekarang = new Date();
	var HariIni = NamaHari[sekarang.getDay()];
	var BulanIni = NamaBulan[sekarang.getMonth()];
	var tglSekarang = sekarang.getDate();
	var TahunIni = sekarang.getFullYear();
	document.write(HariIni + ", " + tglSekarang + " " + BulanIni + " " + TahunIni);
}
	
function show_tanggal() 
{
    //membuat variabel bertipe array untuk nama bulan
    var NamaBulan = new Array("Januari", "Februari", "Maret", "April", "Mei",
    "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    var sekarang = new Date();
    var BulanIni = NamaBulan[sekarang.getMonth()];
    var tglSekarang = sekarang.getDate();
    var TahunIni = sekarang.getFullYear();
    document.write(tglSekarang + " " + BulanIni + " " + TahunIni);
}

function tampilkan(){
 
    var edisi=document.getElementById("edisi").value;
    var thn=document.getElementById("thn").value;
    var news=thn+edisi;
    var issue=document.getElementById("issue");
    var ddissue=document.getElementById("ddissue");
    //var data=tahun+edisi;
    if (edisi=="Januari" && thn=="2019")
      {
              issue.setAttribute("src","https://drive.google.com/file/d/1TGp2GW7qGtsV8TPFtQrJqZ62sCZd-sIC/preview");
              ddissue.setAttribute("href","https://drive.google.com/file/d/1TGp2GW7qGtsV8TPFtQrJqZ62sCZd-sIC/view?usp=sharing");
              document.getElementById("edi").innerHTML = "Buletin Maritim Edisi " + edisi +" Tahun "+ thn;
      }
    }
