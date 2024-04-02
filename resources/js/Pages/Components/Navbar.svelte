<script>
    import { page } from '@inertiajs/svelte'

    const route = $page.props.route;
</script>

<nav class="navbar navbar-expand fixed-bottom sticky-sm-top bg-light" data-bs-theme="">
    <div class="container-fluid container-md">
        <a class="navbar-brand d-none d-sm-block poppins-bold fs-5" href="/">Math Rizz</a>
        <div class="navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto w-100 justify-content-around justify-content-sm-start mb-lg-0">
                <a class="nav-link d-flex flex-column align-items-center justify-content-center" class:active={route === 'dashboard'} aria-current="page" href="/dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home d-block d-sm-none" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                    </svg>
                    <span>Beranda</span>
                </a>
                <a class="nav-link d-flex flex-column align-items-center justify-content-center" class:active={route === 'pathway'} href="/pathway">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-route d-block d-sm-none" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M19 7a2 2 0 1 0 0 -4a2 2 0 0 0 0 4z" />
                        <path d="M11 19h5.5a3.5 3.5 0 0 0 0 -7h-8a3.5 3.5 0 0 1 0 -7h4.5" />
                    </svg>
                    <span>Rute Belajar</span>
                </a>
            </div>

            <!-- TODO: insert some avatar, profile, setting, and logout. Wrap it with div, make sure it hidden when navbar is on the bottom of page -->
        </div>
    </div>
</nav>

<style>
    :root {
        --inactive: #000000A6;
        --active: #000;
    }

    .icon-tabler {
        stroke: var(--inactive);
    }

    a.nav-link.active > span {
        font-weight: 500;
    }

    a.nav-link.active > .icon-tabler {
        stroke:var(--active);
    }
</style>