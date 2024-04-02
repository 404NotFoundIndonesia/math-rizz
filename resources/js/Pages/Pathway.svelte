<script>
    import Footer from "./Components/Footer.svelte";
    import Navbar from "./Components/Navbar.svelte";

</script>

<Navbar />

<main class="main-container mb-md-0 mt-3">

    <div class="container-md w-100 h-50 text-light">
        <h1 class="">Rute Belajar</h1>
        <p class="">Urutan materi pembelajaran yang disusun secara terstruktur untuk membantu kamu memahami topik-topik matematika dengan mudah. Dengan mengikuti rute pembelajaran, kamu dapat belajar matematika dari yang dasar hingga yang lebih kompleks dengan langkah-langkah yang terarah sesuai dengan Kurikulum Merdeka.</p>

        <h5 class="text-decoration-underline mt-5">Kelas X</h5>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 position-relative">
                <div class="hexagon-lock" class:d-none={true}>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                </div>
                <div class="hexagon-wrapper mb-4">
                    <div class="hexagon">
                        <img src="https://cdn-icons-png.flaticon.com/512/2106/2106489.png" alt="Logaritma">
                    </div>
                </div>
                <h3 class="poppins-regular">Eksponen dan Logaritma</h3>
                <p class="poppins-extralight">Kelas X Bab I<span class="mx-2">●</span>2 Subbab<span class="ms-2 badge text-bg-light align-middle poppins-light">+400 XP</span></p>
                <p class="poppins-extralight">
                    Kamu bisa pakai eksponen dan logaritma untuk memahami kekuatan perhitungan pangkat dan melacak relasi antara bilangan dengan basisnya secara mendalam lho.
                </p>

                <div class="progress" role="progressbar" aria-label="pathway progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="bg-primary progress-bar progress-bar-striped progress-bar-animated" style="width: 75%">
                        <span class="poppins-bold">75%</span>
                    </div>
                </div>

                <a href="/" class="text-light poppins-regular my-4 d-block">Lanjutkan →</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 position-relative">
                <div class="hexagon-lock" class:d-none={true}>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                </div>
                <div class="hexagon-wrapper mb-4">
                    <div class="hexagon">
                        <img src="https://images.vexels.com/media/users/3/206175/isolated/preview/88a500f4193fa6fbe06b2fd507c06d02-quadratic-function-graph.png" alt="Fungsi Kuadrat">
                    </div>
                </div>
                <h3 class="poppins-regular">Fungsi Kuadrat</h3>
                <p class="poppins-extralight">Kelas X Bab VI<span class="mx-2">●</span>3 Subbab<span class="ms-2 badge text-bg-light align-middle poppins-light">+600 XP</span></p>
                <p class="poppins-extralight">
                    Baru mengenal fungsi kuadrat? Rute pembelajaran ini mencakup semua yang Anda butuhkan untuk memulai memahami fungsi kuadrat secara mendalam.
                </p>

                <a href="/" class="text-light poppins-regular my-4 d-block">Mulai Belajar →</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 position-relative">
                <div class="hexagon-lock" class:d-none={!true}>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                    <p>Dapatkan minimal 700xp</p>
                </div>
                <div class="hexagon-wrapper mb-4">
                    <div class="hexagon">
                        <img src="https://png.pngtree.com/png-vector/20220706/ourmid/pngtree-stats-business-graph-png-image_5705173.png" alt="Logaritma">
                    </div>
                </div>
                <h3 class="poppins-regular">Statistika</h3>
                <p class="poppins-extralight">Kelas X Bab VII<span class="mx-2">●</span>5 Subbab<span class="ms-2 badge text-bg-light align-middle poppins-light">+1000 XP</span></p>
                <p class="poppins-extralight">
                    Jelajahi keajaiban statistika untuk memahami dunia sekitar dengan sudut pandang yang analitis, membuka pintu pemahaman mendalam tentang data dan pola.
                </p>
            </div>
        </div>

        <h5 class="text-decoration-underline mt-5">Kelas XI</h5>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 position-relative">
                <div class="hexagon-lock" class:d-none={!true}>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                </div>
                <div class="hexagon-wrapper mb-4">
                    <div class="hexagon">
                        <img src="https://www.sfu.ca/math-coursenotes/Math%20157%20Course%20Notes/images/inverse2.svg" alt="Logaritma">
                    </div>
                </div>
                <h3 class="poppins-regular">Komposisi Fungsi dan Fungsi Invers</h3>
                <p class="poppins-extralight">Kelas XI Bab I<span class="mx-2">●</span>3 Subbab<span class="ms-2 badge text-bg-light align-middle poppins-light">+900 XP</span></p>
                <p class="poppins-extralight">
                    Telusuri keindahan Komposisi Fungsi dan Fungsi Invers untuk menguak rahasia hubungan matematis yang kompleks dan mengembangkan kemampuan analitis yang kuat.
                </p>
            </div>
        </div>

        <h5 class="text-decoration-underline mt-5">Kelas XII</h5>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 position-relative">
                <div class="hexagon-lock" class:d-none={!true}>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="72" height="72" viewBox="0 0 24 24" stroke-width="2" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                </div>
                <div class="hexagon-wrapper mb-4">
                    <div class="hexagon">
                        <img src="https://www.sfu.ca/math-coursenotes/Math%20157%20Course%20Notes/images/inverse2.svg" alt="Logaritma">
                    </div>
                </div>
                <h3 class="poppins-regular">Transformasi Fungsi</h3>
                <p class="poppins-extralight">Kelas XII Bab I<span class="mx-2">●</span>5 Subbab<span class="ms-2 badge text-bg-light align-middle poppins-light">+2000 XP</span></p>
                <p class="poppins-extralight">
                    Telusuri keindahan Komposisi Fungsi dan Fungsi Invers untuk menguak rahasia hubungan matematis yang kompleks dan mengembangkan kemampuan analitis yang kuat.
                </p>
            </div>
        </div>
    </div>
    
    <Footer />
</main>

<style>
    main.main-container {
        margin-bottom: 100px;
    }
</style>

