@extends('layouts.main')
@section('content')
    <section class="py-5">
        <div class="left-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                            <button class="btn-card">
                                <img src="{{ asset('dashboard-assets/assets/img/icons/statistics.png') }}"
                                    alt="" />
                                Level Stock Material
                            </button>
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
                            <img src="{{ asset('dashboard-assets/assets/img/icons/master.png') }}" alt=""  style="height:75px; width: 75px;" />
                            Master Part List
                                       </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/plan.png') }}" alt=""  style="height:95px; width: 95px;"  />
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
                            <img src="{{ asset('dashboard-assets/assets/img/icons/debit.png') }}" alt="" style=" height:90px; width:85px;"  />
                            Control AFAP For Debit Note
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/whouse.png') }}" alt="" style="width: 75px; height: 80px;" />
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
                            <img src="{{ asset('dashboard-assets/assets/img/icons/control.png') }}" alt=""style='height:70px; width:60px;padding-top: 10px;' />
                            4M Transisi, Kontrol License dan Absensi
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/calendar2.png') }}" alt="" style="height: 70px;"/>
                            Visualisasi Daily Check Material
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/whs.png') }}" alt="" />
                            WHS OT Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
