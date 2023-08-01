@extends('dashboard-layout.main')
@section('content')
    <section class="py-5">
        <div class="left-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="/" target="_blank" style="text-decoration: none;">
                            <button class="btn-card">
                                <img src="{{ asset('dashboard-assets/assets/img/icons/statistics.png') }}"
                                    alt="" />
                                Level Stock Material
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/report.png') }}"
                                alt="" style="height:95px; width: 95px;" />
                            Material Shortage Report
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/box.png') }}" alt=""  style="height:65px; width: 70px;" />
                            Master Part List
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/planning.png') }}" alt=""  style="height:85px; width: 95px;"  />
                            Planning
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/pie.png') }}" alt="" style="width: 75px;" />
                            Usage
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/plane2.png') }}" alt="" style="width: 70px;" />
                            Air Freight Report
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/moneyy.png') }}" alt="" style=" height:80px; width:78px;"  />
                            Control AFAP For Debit Note
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/whs.png') }}" alt="" style="width: 70px; height: 80px;" />
                            Balance Out
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/docs.png') }}" alt="" style="width: 90px; height:80px"/>
                            SoC Report
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952; margin: top 20px;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/license.png') }}" alt=""style='height:70px; width:80px;padding-top: 10px;' />
                            4M Transisi, Kontrol License dan Absensi
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/calendar.png') }}" alt="" style="height: 65px;"/>
                            Visualisasi Daily Check Material
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/wh.png') }}" alt="" />
                            WHS OT Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
