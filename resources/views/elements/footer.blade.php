<footer id="footer" class="inverted">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <div id="logo" >
                            <a href="{{ route('beranda') }}">
                                   <img style="height:90px;" alt="{{ env('NAMA_KANTOR') }}" src="{{ asset(env('LOGO_FOOTER')) }}" class="logo-default pb-4">
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title">LINK</div>
                                <ul class="list-icon list-icon-arrow list-icon-colored ">
                                    <li><a href="https://www.bmkg.go.id/">BMKG</a></li>
                                    <li><a href="https://www.wmo.int/pages/prog/amp/mmop/index_en.html">WMO</a></li>
                                    <li><a href="https://www.jcomm.info/">JCOMM</a></li>
                                    <li><a href="https://www1.kaiho.mlit.go.jp/TUHO/vpage/visualpage_en.html?type=212&tana=170656">Navigational Warnings by NAVAREA XI</a></li>
                                    <li><a href="https://www.gmdss.org/XI.html">Marine Weather Information by METAREA XI</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="widget" id="footer-background">
                                <div class="widget-title">Hubungi Kami</div>
                                <ul class="list-icon list-icon-colored">
                                    <li><i class="fa fa-map-marker"></i>Jalan Pelabuhan Komplek Pelabuhan Dwikora Pontianak</li>
                                    <li><i class="fas fa-brands fa-whatsapp"></i><a href="https://api.whatsapp.com/send?phone={{ env('WA') }}&text=Halo%20admin">{{ env('WA') }}</a></li>
                                    <li><i class="fa fa-phone"></i>{{ env('TELPON') }}</li>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:{{ env('EMAIL_KANTOR') }}">{{ env('EMAIL_KANTOR') }}</a></li>							
                                    <li><i class="fa fa-twitter"></i><a href="https://twitter.com/{{ env('TWITTER') }}">{{ env('TWITTER') }}</a></li>						
                                    <li><i class="fa fa-facebook-f"></i><a href="https://www.facebook.com/{{ env('FB') }}/">{{ env('FB') }}</a> </li>						
                                    <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/{{ env('IG') }}/">{{ env('IG') }}</a> </li>
        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; {{ date('Y') }} {{ env('COPYRIGHT') }}<a href="{{ env('DEVELOPER_URL') }}" target="_blank" rel="noopener"> {{ env('DEVELOPER_NAME') }}</a> </div>
        </div>
    </div>
</footer>