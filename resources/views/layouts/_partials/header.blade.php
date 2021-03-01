@section('title')
    Εκθέσεις Πραγματογνωμοσύνης
@endsection

@section('logo')
    <a href="https://www.ksoftdev.gr" target="_blank"><img src="/images/logo.jpg" width="25" height="25" alt="K Software Development" />K Software Development</a>
@endsection

@section('header-right')
    @auth
        <nav class="navbar navbar-expand p-0">
            <div class="navbar-collapse collapse order-3">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item position-relative">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->F_name . ' ' .  auth()->user()->L_name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/settings">Ρυθμίσεις</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/logout') }}"> Αποσύνδεση </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    @endauth
@endsection


@section('footer')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            Έκδοση: v.1.0
        </div>
        <div class="text-center">
            © 2019 Copyright: K Software Development
        </div>
        <div>
            Υποστήριξη: <a href="mailto:support@ksoftdev.gr" alt="send mail to suppport">support@ksoftdev.gr</a>
        </div>
    </div>

@endsection
