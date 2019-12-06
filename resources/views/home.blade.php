@extends('layouts.app')
@include('layouts._partials.header')


@section('lmenu')
    <ul class="nav flex-column flex-nowrap overflow-hidden">
        <li class="nav-item">
            <a class="nav-link text-truncate" href="/pragmatognomosines"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Πραγματογνωμοσύνες</span></a>
        </li>
        <li class="nav-item">
                <a class="nav-link text-truncate" href="/ereunes"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Έρευνες</span></a>
         </li>
         <li class="nav-item">
                <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Πρόσωπα</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="/pathon"><span>Παθόντες/Υπαίτιοι</span></a></li>
                            <li class="nav-item"><a class="nav-link py-0" href="/synergeia"><span>Συνεργεία</span></a></li>
                            <li class="nav-item"><a class="nav-link py-0" href="/usersview"><span>Χρήστες</span></a></li>
                        </ul>
                    </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed text-truncate" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Εταιρείες</span></a>
                <div class="collapse" id="submenu2" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        <li class="nav-item"><a class="nav-link py-0" href="/company"><span>Εταιρείες</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/praktoreia"><span>Πρακτορεία</span></a></li>
                    </ul>
                </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed text-truncate" href="#submenu3" data-toggle="collapse" data-target="#submenu3"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Οχήματα</span></a>
                <div class="collapse" id="submenu3" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        <li class="nav-item"><a class="nav-link py-0" href="/oximata"><span>Οχήματα</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/parts"><span>Ανταλλακτικά</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/jobs"><span>Εργασίες</span></a></li>
                    </ul>
                </div>
    </li>
        <li class="nav-item">
                <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Διαχείριση Οικονομικών</span></a>
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
        <li class="nav-item">
                <a class="nav-link text-truncate" href="/pragmatognomosines"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Διαχείριση Κειμένων</span></a>
        </li>
        <li class="nav-item">
                <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Εκτυπώσεις</span></a>
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
    </ul>
@endsection

@section('rmenu')
    <p>Εδω τα κουμπια</p>
@endsection
