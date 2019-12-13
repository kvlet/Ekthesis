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
                        <li class="nav-item"><a class="nav-link py-0" href="/synergeia"><span>Συνεργεία</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/reports/diafora/tilephonikoscatetaireion"><span>Τηλεφωνικός Κατάλογος Εταιρειών</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/reports/diafora/tilephonikoscatsinergaton"><span>Τηλεφωνικός Κατάλογος Συνεργατών</span></a></li>
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
            <a class="nav-link collapsed text-truncate" href="#submenu4" data-toggle="collapse" data-target="#submenu4"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Διαχείριση Οικονομικών</span></a>
                <div class="collapse" id="submenu4" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        <li class="nav-item"><a class="nav-link py-0" href="/timolcomp"><span>Τιμολόγια Εταιρείας</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/eisprcomp"><span>Είσπραξη Τιμολογίων Εταιρειας</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/coreisprcomp"><span>Διόρθωση Εισπραξης Εταιρείας</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/timolpartner"><span>Τιμολόγια Συναργάτη</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/carexpen"><span>Εξόδα Οχήματος</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/carincome"><span>Έσοδα Οχήματος</span></a></li>
                        <li class="nav-item"><a class="nav-link py-0" href="/expenmanage"><span>Διαχείριση Εξόδων</span></a></li>
                    </ul>
                </div>
        </li>
        <li class="nav-item">
                <a class="nav-link text-truncate" href="/managekeimena"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Διαχείριση Κειμένων</span></a>
        </li>
        <li class="nav-item">
                <a class="nav-link collapsed text-truncate" href="#submenu5" data-toggle="collapse" data-target="#submenu5"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Εκτυπώσεις</span></a>
                    <div class="collapse" id="submenu5" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                             <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Ελεγκτικές/Στατιστικές</span></a>
                                    <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                        <ul class="flex-column nav pl-4">
                                            <a class="nav-link collapsed py-1" href="#submenu1sub1_1" data-toggle="collapse" data-target="#submenu1sub1_1"><span>Προς διεκπεραίωση</span></a>
                                            <div class="collapse" id="submenu1sub1_1" aria-expanded="false">
                                                <ul class="flex-column nav pl-4">
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/entolietaireias">
                                                        <i class="fa fa-fw fa-clock-o"></i>Εντολή Εταιρείας </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/anathesisesinergati">
                                                        <i class="fa fa-fw fa-dashboard"></i> Ανάθεση σε Συνεργάτη </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/anathesisesinergates">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Ανάθεση σε Συνεργάτες </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/proselegxo">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Προς Έλεγχο </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/prosapostoli">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Προς Αποστολή </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/oloklirothike">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Ολοκληρώθηκε </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/sinolikesekkremotites">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Συνολικές Εκκρεμότητες </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/sinolikesekkremotitesnomou">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Συνολικές Εκκρεμότητες ανά Νομό </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/sinolikesekkremotiteseggrafon">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Συνολικές Εκκρεμότητες Εγγράφων </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/ekkremotitesdikasimon">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Εκκρεμότητες Δικασίμων </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/prosdiekpereosi/ekthesisentolea">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Εκθέσεις Εντολέα </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="nav-link collapsed py-1" href="#submenu1sub1_2" data-toggle="collapse" data-target="#submenu1sub1_2"><span>Εκπρόθεσμες</span></a>
                                            <div class="collapse" id="submenu1sub1_2" aria-expanded="false">
                                                <ul class="flex-column nav pl-4">
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/entolietaireias">
                                                        <i class="fa fa-fw fa-clock-o"></i>Εντολή Εταιρείας </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/anathesisesinergati">
                                                        <i class="fa fa-fw fa-dashboard"></i> Ανάθεση σε Συνεργάτη </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/anathesisesinergates">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Ανάθεση σε Συνεργάτες </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/proselegxo">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Προς Έλεγχο </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/prosapostoli">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Προς Αποστολή </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/oloklirothike">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Ολοκληρώθηκε </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="nav-link collapsed py-1" href="#submenu1sub1_3" data-toggle="collapse" data-target="#submenu1sub1_3"><span>Στατιστικές</span></a>
                                            <div class="collapse" id="submenu1sub1_3" aria-expanded="false">
                                                <ul class="flex-column nav pl-4">
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/plithosanatypo">
                                                        <i class="fa fa-fw fa-clock-o"></i>Πλήθος Εκθέσεων ανά Τύπο </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/plithosanakatastasi">
                                                        <i class="fa fa-fw fa-dashboard"></i>  Πλήθος Εκθέσεων ανά Κατάσταση </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/plithosanaetaireia">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Πλήθος Εκθέσεων ανά Εταιρεία </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/posostodiekpereosis">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Ποσοστό Διεκπεραίωσης </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/statistikoereunon">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Στατιστικό Ερευνών </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/statistikoektheseon">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Στατιστικό Εκθέσεων </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/sinoloxiliometron">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Σύνολο Χιλιομέτρων </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/listapestalmenon">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Λίστα Απεσταλμένων </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/protokolloekserxomenon">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Πρωτόκολλο Εξερχομένων </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/moanaekthesianacomp">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Μ.Ο. ανά Έκθεση ανά Εταιρεία </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/moanaekthesianatipo">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Μ.Ο. ανά Έκθεση ανά Τύπο </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-1" href="/reports/checkstats/statistikes/moanasinergati">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Μ.Ο. ανά Συναργάτη </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </div>
                                </li>
                        </ul>
                        <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                   <a class="nav-link collapsed py-1" href="#submenu1sub2" data-toggle="collapse" data-target="#submenu1sub2"><span>Τιμολόγησης</span></a>
                                       <div class="collapse" id="submenu1sub2" aria-expanded="false">
                                           <ul class="flex-column nav pl-4">
                                                <a class="nav-link collapsed py-1" href="#submenu1sub2_1" data-toggle="collapse" data-target="#submenu1sub2_1"><span>Προς Τιμολόγηση</span></a>
                                                <div class="collapse" id="submenu1sub2_1" aria-expanded="false">
                                                    <ul class="flex-column nav pl-4">
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/timologisi/prostimologisi/listaprostimologisinoproasf">
                                                            <i class="fa fa-fw fa-clock-o"></i> Λίστα προς Τιμολόγηση(όχι Προασφ.) </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/timologisi/prostimologisi/listaprostimologisiproasf">
                                                            <i class="fa fa-fw fa-dashboard"></i> Λίστα προς Τιμολόγηση Προασφαλιστικός </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/timologisi/prostimologisi/timologisiekthesisnoproasf">
                                                            <i class="fa fa-fw fa-bar-chart"></i> Τιμολόγηση Έκθεσης(όχι Προασφ) </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/timologisi/prostimologisi/timologisiekthesisproasf">
                                                            <i class="fa fa-fw fa-bar-chart"></i> Τιμολόγηση Έκθεσης Προασφαλιστικός </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/timologisi/prostimologisi/episinaptomenilista">
                                                            <i class="fa fa-fw fa-bar-chart"></i> Επισυναπτώμενη Λίστα </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/timologisi/prostimologisi/listaprostimologisinoproasfcomp">
                                                            <i class="fa fa-fw fa-bar-chart"></i> Λίστα προς Τιμολόγηση(όχι Προασφ) Εταιρείας </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="nav-link collapsed py-1" href="#submenu1sub2_2" data-toggle="collapse" data-target="#submenu1sub2_2"><span>Τιμολογημένες</span></a>
                                                <div class="collapse" id="submenu1sub2_2" aria-expanded="false">
                                                    <ul class="flex-column nav pl-4">
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/entolietaireias">
                                                            <i class="fa fa-fw fa-clock-o"></i>Εντολή Εταιρείας </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/anathesisesinergati">
                                                            <i class="fa fa-fw fa-dashboard"></i> Ανάθεση σε Συνεργάτη </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/anathesisesinergates">
                                                            <i class="fa fa-fw fa-bar-chart"></i> Ανάθεση σε Συνεργάτες </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/proselegxo">
                                                            <i class="fa fa-fw fa-bar-chart"></i> Προς Έλεγχο </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-1" href="/reports/checkstats/ekprothesmes/prosapostoli">
                                                            <i class="fa fa-fw fa-bar-chart"></i> Προς Αποστολή </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                           </ul>
                                       </div>
                                   </li>
                           </ul>
                           <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                   <a class="nav-link collapsed py-1" href="#submenu1sub3" data-toggle="collapse" data-target="#submenu1sub3"><span>Οικονομικές Γραφείου</span></a>
                                       <div class="collapse" id="submenu1sub3" aria-expanded="false">
                                           <ul class="flex-column nav pl-4">
                                               <li class="nav-item">
                                                    <a class="nav-link p-1" href="#">
                                                       <i class="fa fa-fw fa-clock-o"></i> Βεβαιώσεις φόρου </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link p-1" href="#">
                                                       <i class="fa fa-fw fa-dashboard"></i> Έσοδα </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link p-1" href="#">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Έξοδα </a>
                                               </li>
                                           </ul>
                                       </div>
                                   </li>
                           </ul>
                           <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                   <a class="nav-link collapsed py-1" href="#submenu1sub4" data-toggle="collapse" data-target="#submenu1sub4"><span>Οικονομικές Εταιρειών</span></a>
                                       <div class="collapse" id="submenu1sub4" aria-expanded="false">
                                           <ul class="flex-column nav pl-4">
                                               <li class="nav-item">
                                                    <a class="nav-link p-1" href="#">
                                                       <i class="fa fa-fw fa-clock-o"></i> Εκκαθάριση Τιμολογίων </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link p-1" href="#">
                                                       <i class="fa fa-fw fa-dashboard"></i> Έλεγχος Τιμολογίων </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link p-1" href="#">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Υπόλοιπα </a>
                                               </li>
                                           </ul>
                                       </div>
                                   </li>
                           </ul>
                           <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                   <a class="nav-link collapsed py-1" href="#submenu1sub5" data-toggle="collapse" data-target="#submenu1sub5"><span>Οικονομικές Συνεργατών</span></a>
                                       <div class="collapse" id="submenu1sub5" aria-expanded="false">
                                           <ul class="flex-column nav pl-4">
                                               <li class="nav-item">
                                                    <a class="nav-link p-1" href="#">
                                                       <i class="fa fa-fw fa-clock-o"></i> Εκκαθάριση Συναργάτη </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link p-1" href="#">
                                                       <i class="fa fa-fw fa-dashboard"></i> Έλεγχος Τιμολογίων </a>
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
