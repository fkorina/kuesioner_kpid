<nav class="iq-sidebar-menu">
    <ul id="iq-sidebar-toggle" class="iq-menu">
        <li class="active">
            <a href="backend/index.html" class="svg-icon">
                <svg class="svg-icon" id="p-dash1" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
                <span class="ml-4">Beranda</span>
            </a>
        </li>
        <li class=" ">
            <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                <svg class="svg-icon" id="p-dash2" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                <span class="ml-4">Kelola Pengguna</span>
                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="10 15 15 20 20 15"></polyline>
                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                </svg>
            </a>
            <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li class="">
                    <a href="backend/page-list-product.html">
                        <i class="las la-minus"></i><span>Data Pengguna</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" ">
            <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                <svg class="svg-icon" id="p-dash3" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect x="9" y="9" width="13" height="13"
                        rx="2" ry="2"></rect>
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                </svg>
                <span class="ml-4"> Kelola Respondents</span>
                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="10 15 15 20 20 15"></polyline>
                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                </svg>
            </a>
            <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li class="">
                    <a href="{{ route('respondent.index') }}">
                        <i class="las la-minus"></i><span>Data Respondents</span>
                    </a>
                </li>
                <li class="">
                    <a href="backend/page-list-category.html">
                        <i class="las la-minus"></i><span>Jawaban Respondents</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" ">
            <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                <svg class="svg-icon" id="p-dash4" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                </svg>
                <span class="ml-4">Kuesioner</span>
                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="10 15 15 20 20 15"></polyline>
                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                </svg>
            </a>
            <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li class="">
                    <a href="backend/page-list-sale.html">
                        <i class="las la-minus"></i><span>Data Kuesioner</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" ">
            <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                <svg class="svg-icon" id="p-dash5" width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect x="1" y="4" width="22" height="16"
                        rx="2" ry="2"></rect>
                    <line x1="1" y1="10" x2="23" y2="10"></line>
                </svg>
                <span class="ml-4">Laporan</span>
</nav>
