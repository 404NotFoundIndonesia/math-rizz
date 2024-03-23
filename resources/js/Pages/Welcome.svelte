<script>

</script>

<section id="hero">
    <div class="container-md pb-5 pt-3 mt-md-4 bg-dark rounded-4 content">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <h1 class="poppins-bold h1-large">Welcome to Math Rizz</h1>
                <p>Buka pintu kekuatan matematika dengan Math Rizz, platform e-learning ultimat untuk siswa SMA. Jelajahi dunia pelajaran interaktif, tantangan yang menarik, dan pengalaman belajar kolaboratif yang dirancang untuk membuat matematika menyenangkan dan mudah dipahami untuk semua orang.</p>

                <a href="/" class="btn btn-primary btn-lg my-3">Masuk</a>
            </div>
            <div class="d-none d-sm-flex col-12 col-md-6 col-lg-4 hero-image-container">
                <img class="hero-image" src="https://www.gvclearn.com/documents/185112/0/001+%281%29.png/3c0e4119-d5ea-d994-6820-93748d7b7593?t=1608961060520" alt="Person who study math">
            </div>
        </div>
    </div>
</section>

<section id="pathway">
    <div class="container">
        <h1 class="h1-large poppins-semibold">Rute Belajar</h1>
        <p>Merupakan urutan materi pembelajaran yang disusun secara terstruktur untuk membantu kamu memahami topik-topik matematika dengan mudah. Dengan mengikuti rute pembelajaran, kamu dapat belajar matematika dari yang dasar hingga yang lebih kompleks dengan langkah-langkah yang terarah sesuai dengan Kurikulum Merdeka.</p>
        <div class="row mt-5">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
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

                <a href="/" class="text-light poppins-regular mb-3 d-block">Meluncur ke TKP</a>
            </div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="container text-light mb-5">
        <hr class="mb-5">
        <div class="row w-100">
            <div class="col-12 col-md-5">
                <div class="">
                    <h3 class="poppins-light">Math Rizz</h3>
                    <p class="poppins-extralight">Math Rizz bertujuan untuk merevolusi pendidikan matematika bagi siswa SMA dengan menyediakan lingkungan belajar yang dinamis dan interaktif. Ini memberdayakan siswa untuk unggul dalam matematika dan mempersiapkan mereka untuk sukses akademis dan masa depan yang gemilang.</p>
                </div>
            </div>
        </div>
        <p class="mt-5">Copyright © 2024 404 Not Found Indonesia</p>
    </div>
</section>

<style>
    section#pathway {
        color: white;
        margin-top: 60px;
        margin-bottom: 100px;
    }

    section#hero > .content {
        /* margin: 0 150px; */
        color: white;
        padding: 50px;
        background: radial-gradient( rgba(0, 9, 56, 0.65), rgba(0, 9, 56, 0.75), rgba(1,2,3,0.95) ), url('https://w0.peakpx.com/wallpaper/870/749/HD-wallpaper-math-blackboard-texture-background-with-geometric-shapes-math-background-math-texture-geometric-lines-shapes-texture-mathematics-background.jpg');
        background-size: contain;
        /* filter: brightness(50%); */
    }

    section#hero p {
        font-size: 18px;
    }

    .hero-image-container {
        text-align: right;
        flex-direction: row;
        align-items: end;
        justify-content: end;
    }

    .hero-image {
        width: 100%;
    }

    .hexagon-wrapper {
        display: flex;
        text-align: initial;
        width: 150px;
        height: 150px;
        cursor: pointer;
    }

    .hexagon {
        position: relative;
        width: 46%;
        height: 80%;
        margin: auto;
        color: white;
        background: linear-gradient(-180deg, white, #e6e6e6);
        display: flex;
        align-content: center;
        justify-content: center;
        transition: 0.5s;
    }

    .hexagon img {
        z-index: 1;
        margin: auto;
        width: 100%;
    }

    .hexagon:before,
    .hexagon:after {
        position: absolute;
        content: "";
        background: inherit;
        height: 100%;
        width: 100%;
        border-radius: 0;
        transition: 0.5s;
        transform-origin: center;
    }
    .hexagon:before {
        transform: rotateZ(60deg);
    }
    .hexagon:after {
        transform: rotateZ(-60deg);
    }
    .hexagon:hover {
        border-radius: 50px;
        transition: 0.5s;
    }
    .hexagon:hover:before {
        border-radius: 50px;
        transition: 0.5s;
        }
    .hexagon:hover:after {
        border-radius: 50px;
        transition: 0.5s;
    }
</style>
