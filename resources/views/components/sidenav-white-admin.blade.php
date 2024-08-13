<nav
    class="navbar navbar-expand-lg blur border-radius-sm top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-1">
        <a class="navbar-brand font-weight-bolder ms-lg-0 " href="../pages/dashboard.html">
            <img src="../assets/img/logo.jpg" alt="Logo Desa" class="logo-image"
                style="width: 40px; height: 40px; margin-left: 10px; margin-right: 10px;">
            Desa Ngijo
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto ms-xl-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center me-3 " href="{{ route('layanan') }}">
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="opacity-6 me-1">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <div style="font-weight: bold; text-align: center; margin-top: 2px;">Layanan</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center me-3 " href="{{ route('kritik') }}">
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="opacity-6 me-1">
                            <path fill-rule="evenodd"
                                d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <div style="font-weight: bold; text-align: center; margin-top: 2px;">Kritik & Saran</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center me-3 " href="{{ route('data_admin') }}">
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class=" text-dark  me-1">
                            <path fill-rule="evenodd"
                                d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z"
                                clip-rule="evenodd" />
                        </svg>
                        <div style="font-weight: bold; text-align: center; margin-top: 2px;">Data</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .form-select-no-border {
        border: none;
        background: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 0;
        outline: none;
        font-size: inherit;
        color: inherit;
    }

    .custom-text15 {
        color: rgb(0, 0, 0, 0.65);
        font-size: 15px;
        font-weight: bold;
        font-family: Perpetua;
        text-align: center;
        white-space: nowrap;
    }
</style>
