@extends('layouts.main')
@section('content')
    <section class="py-5">
        <div class="left-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="/visualisasi-level-stock" target="_blank" style="text-decoration: none">
                            <button class="btn-card">
                                <img src="{{ asset('dashboard-assets/assets/img/icons/statistics.png') }}" alt="" />
                                Level Stock Material
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/shortage-app" target="_blank" style="text-decoration: none">
                            <button class="btn-card">
                                <img src="{{ asset('dashboard-assets/assets/img/icons/report.png') }}" alt=""
                                    style="height:95px; width: 95px;" />
                                Material Shortage Report
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->
                        <button class="btn-card">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/master.png') }}" alt=""
                                style="height:75px; width: 75px;" />
                            Master Part List
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952; ">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/plan.png') }}" alt=""
                                style="height:90px; width: 95px; margin-top: -15px;" />
                            Planning
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/pie.png') }}" alt=""
                                style="width: 75px;" />
                            Usage
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/plane2.png') }}" alt=""
                                style="width: 70px;" />
                            Air Freight Report
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->
                        <button class="btn-card" style="background-color: #EEEDED; color: #071952; margin: top 40px;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/debit.png') }}" alt=""
                                style=" height:85px; width:95px; margin-top: 10px;" />
                            Control AFAP For Debit Note
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->


                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/stok3.png') }}" alt=""
                                style="width: 75px; height: 75px;" />
                            Balance Out
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->

                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/whs-icon.png') }}" alt=""
                                style="width: 90px; height:80px" />
                            Schedule Incoming Warehouse
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->


                        <button class="btn-card">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/control.png') }}"
                                alt=""style='height:70px; width:60px;padding-top: 10px;' />
                            4M Kontrol Transisi, License dan Absensi
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->


                        <button class="btn-card" style="background-color: #EEEDED; color: #071952; margin: top 20px">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/calendar2.png') }}" alt=""
                                style="height: 85px; padding-top: 10px;" />
                            Visualisasi Daily Check Material
                        </button>
                        <!-- </a> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <a href=""> -->

                        <button class="btn-card" style="background-color: #EEEDED; color: #071952;">
                            <img src="{{ asset('dashboard-assets/assets/img/icons/whs.png') }}" alt=""
                                style="width: 56;" />
                            WHS OT Report
                        </button>

                        <!-- </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
