@extends('layouts.app')
@include('layouts._partials.header')
@include('layouts._partials.menu')

@section('content')
    <div class="menu">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 collapse show d-md-flex bg-light pt-2 pl-0 min-vh-100" id="sidebar">
                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                <li class="nav-item">
                                    <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Overview</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Reports</span></a>
                                    <div class="collapse" id="submenu1" aria-expanded="false">
                                        <ul class="flex-column pl-2 nav">
                                            <li class="nav-item"><a class="nav-link py-0" href="#"><span>Orders</span></a></li>
                                            <li class="nav-item">
                                                <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Customers</span></a>
                                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                                    <ul class="flex-column nav pl-4">
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="#">
                                                                <i class="fa fa-fw fa-clock-o"></i> Daily </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="#">
                                                                <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="#">
                                                                <i class="fa fa-fw fa-bar-chart"></i> Charts </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="#">
                                                                <i class="fa fa-fw fa-compass"></i> Areas </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Analytics</span></a></li>
                                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Export</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    </div>
@endsection

