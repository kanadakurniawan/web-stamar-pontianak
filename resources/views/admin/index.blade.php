@extends('layouts.admin')
@section('judul')
Dashboard
@endsection
@section('script-tambahan-head')
@endsection
@section('vendors-js')
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
@endsection
@section('custom-js')
    <script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/new-target.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
@endsection
@section('konten')
@endsection