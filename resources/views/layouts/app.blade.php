<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!-- Scripts -->

    {{--    datepicker--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    {{--    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>--}}
    <script src="{{ URL::asset('js/bootstrap-datepicker.js')}}"></script>
    {{--    datepicker--}}

    {{--    editor--}}
    <script type="text/javascript" src="{{ URL::asset('js/nicEdit.js') }}"></script>

    {{--                                Quiil editor                              --}}
    {{--                              Main Quill library                        --}}
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    {{--    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>--}}
    {{--                             Theme included stylesheets                 --}}
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    {{--          Core build with no theme, formatting, non-essential modules--}}
    <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
    {{--                                Quiil editor                              --}}

    {{--    editor--}}

    {{--    tables--}}
    {{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">--}}
    {{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>--}}
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    {{--    tables--}}

    {{--    Styles--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    Styles--}}

    {{--    images--}}
    <link href="{{asset('node_modules/lightbox2/dist/css/lightbox.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('node_modules/lightbox2/dist/js/lightbox.min.js')}}"></script>
    {{--    images--}}

    {{--    fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&display=swap&subset=greek" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:500&display=swap" rel="stylesheet">
    {{--    fonts--}}
</head>

<body class="welcome-layout">

<div class="header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                @yield('logo')
            </div>
            <div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Αρχική</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Εκθέσεις</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/pragmatognomosines">Δημιουργία</a></li>
                                    <li><a class="dropdown-item" href="/pragma_search">Αναζήτηση</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ereunes">Έρευνες</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Παθόντες /
                                    Υπαίτιοι</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/person">Δημιουργία</a></li>
                                    <li><a class="dropdown-item" href="/person/search">Αναζήτηση</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Εταιρείες</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Εταιρεία &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/company">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/company/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Πρακτορεία &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/praktoreiο">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/praktoreiο/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Συνεργείο</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/synergeio">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/synergeio/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Οχήματα</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Όχημα &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/oximata">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/oximata/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Ανταλλακτικά &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/parts">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/parts/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Εργασίες</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/ergasies">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/ergasies/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-danger" href="#" data-toggle="dropdown">Οικονομικά</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/timol_compl">Τιμολόγια Εταιρείας</a></li>
                                    <li><a class="dropdown-item" href="/eispr_compl">Είσπραξη Τιμολογίων Εταιρείας</a></li>
                                    <li><a class="dropdown-item" href="/cor_eispr_compl">Διόρθωση Είσπραξης Εταιρείας</a></li>
                                    <li><a class="dropdown-item" href="/timol_partner">Τιμολόγια Συνεργάτη</a></li>
                                    <li><a class="dropdown-item" href="/car_expen">Έξοδα Οχήματος</a></li>
                                    <li><a class="dropdown-item" href="/car_income">Έσοδα Οχήματος</a></li>
                                    <li><a class="dropdown-item" href="/expen_manage">Διαχείρισης Εξόδων</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-danger" href="#" data-toggle="dropdown">Εκτυπώσεις</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ελεγκτικές/Στατιστικές &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">Προς διεκπεραίωση</a>
                                                <ul class="submenu dropdown-menu">
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/entoli_etaireias">Εντολή Εταιρείας</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/anathesi_se_sinergati">Ανάθεση σε Συνεργάτη</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/anathesi_se_sinergates">Ανάθεση σε Συνεργάτες </a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/pros_elegxo">Προς Έλεγχο</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/pros_apostoli">Προς Αποστολή</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/oloklirothike">Ολοκληρώθηκε</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/sinolikes_ekkremotites">Συνολικές Εκκρεμότητες</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/sinolikes_ekkremotites_nomou">Συνολικές Εκκρεμότητες ανά Νομό</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/sinolikes_ekkremotites_eggrafon">Συνολικές Εκκρεμότητες Εγγράφων</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/ekkremotites_dikasimon">Εκκρεμότητες Δικασίμων</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/pros_diekpereosi/ekthesis_entolea">Εκθέσεις Εντολέα</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Εκπρόθεσμες</a>
                                                <ul class="submenu dropdown-menu">
                                                    <li><a class="dropdown-item" href="/reports/check_stats/ekprothesmes/entoli_etaireias">Εντολή Εταιρείας</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/ekprothesmes/anathesi_se_sinergati">Ανάθεση σε Συνεργάτη</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/ekprothesmes/anathesi_se_sinergates">Ανάθεση σε Συνεργάτες </a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/ekprothesmes/pros_elegxo">Προς Έλεγχο</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/ekprothesmes/pros_apostoli">Προς Αποστολή</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/ekprothesmes/oloklirothike">Ολοκληρώθηκε</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Στατιστικές</a>
                                                <ul class="submenu dropdown-menu">
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/plithos_ana_typo">Πλήθος Εκθέσεων ανά Τύπο</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/plithos_ana_katastasi">Πλήθος Εκθέσεων ανά Κατάσταση</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/plithos_ana_etaireia">Πλήθος Εκθέσεων ανά Εταιρεία</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/pososto_diekpereosis">Ποσοστό Διεκπεραίωσης</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/statistiko_ereunon">Στατιστικό Ερευνών</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/statistiko_ektheseon">Στατιστικό Εκθέσεων</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/sinolo_xiliometron">Σύνολο Χιλιομέτρων</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/lista_apestalmenon">Λίστα Απεσταλμένων</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/protokollo_ekserxomenon">Πρωτόκολλο Εξερχομένων</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/mo_ana_ekthesi_ana_comp">Μ.Ο. ανά Έκθεση ανά Εταιρεία</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/mo_ana_ekthesi_ana_typo">Μ.Ο. ανά Έκθεση ανά Τύπο</a></li>
                                                    <li><a class="dropdown-item" href="/reports/check_stats/statistikes/mo_ana_sinergati">Μ.Ο. ανά Συναργάτη</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Τιμολόγησης &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/parts">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/parts/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Οικονομικές Γραφείου &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/ergasies">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/ergasies/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Οικονομικές Εταιρειών &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/ergasies">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/ergasies/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Οικονομικές Συνεργατών &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/ergasies">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/ergasies/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Διάφορα &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="/ergasies">Δημιουργία</a></li>
                                            <li><a class="dropdown-item" href="/ergasies/search">Αναζήτηση</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/manage_keimena">Κείμενα</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Βοηθητικά</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/diakrisis">Τύπος Έκθεσης</a></li>
                                    <li><a class="dropdown-item" href="/nomoi">Νομοί</a></li>
                                    <li><a class="dropdown-item" href="/place">Τόπος Εξέτασης</a></li>
                                    <li><a class="dropdown-item" href="/arxi">Αρχή Εγγράφων</a></li>
                                    <li><a class="dropdown-item" href="/markes">Μάρκες</a></li>
                                    <li><a class="dropdown-item" href="/xrisi">Χρήση</a></li>
                                    <li><a class="dropdown-item" href="/cartype">Τύπος Οχήματος</a></li>
                                    <li><a class="dropdown-item" href="/paint">Βαφή</a></li>
                                    <li><a class="dropdown-item" href="/department">Τμήματα Εταιρείας</a></li>
                                    <li><a class="dropdown-item" href="/expense">Έξοδα</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </nav>
            </div>
            <div>
                @yield('header-right')
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container-fluid">
        <div class="row flex-container">
{{--            <div class="col-md-2 d-none d-md-block p-1 flex-item flex-item-grow1" id="lmenu">--}}
{{--                @yield('lmenu')--}}
{{--            </div>--}}
            <div class="col-md-12 d-none d-md-block p-2 flex-item flex-item-grow2">
                @yield('forms')
            </div>
        </div>
    </div>
</main>
<div class="footer">
    @yield('footer')
</div>
</body>
</html>
