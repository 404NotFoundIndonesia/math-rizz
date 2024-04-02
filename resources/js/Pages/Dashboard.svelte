<script>
    import { onMount } from "svelte";
    import { Chart } from "chart.js/auto";

    import Footer from "./Components/Footer.svelte";
    import Navbar from "./Components/Navbar.svelte";

    let chart = null;

    onMount(() => {
        chart = new Chart(document.getElementById('chartProgress'), {
                type: 'doughnut',
                data: {
                    labels: ['Diselesaikan', 'Belum Dipelajari'],
                    datasets: [
                        {
                            label: 'Persentase',
                            data: [25, 75],
                            backgroundColor: ['#99FF99', '#eee'],
                        },
                    ]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                        }
                    }
                }
            }
        );
    })
</script>

<Navbar />

<main class="main-container mb-md-0">

    <section id="hero" class="text-light">

        <div class="container-md py-5">
            <div class="d-flex justify-content-between">
                <div class="flex-fill">
                    <h1 class="poppins-bold h1-large">Hai, Fulan!</h1>
                    <p class="">Kamu udah berusaha sampai sejauh ini, ayo kita lanjutkan perjalanan!</p>

                    <div class="d-flex w-100 mt-5">
                        <div class="level-badge px-4 me-3">
                            <h1 class="level-symbol">
                                <sup>lv.</sup><span class="h1-large poppins-bold ">12</span>
                            </h1>
                            <small class="w-100 text-end">100/200</small>
                            <div class="progress w-100 mb-2" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped bg-secondary" style="width: 10%"></div>
                            </div>
                        </div>
                        <div class="flex-fill">
                            <h5 class="mb-4">Lencanaku</h5>
                            <div class="row">
                                <div class="col-4 col-sm-2 col-xl-1">
                                    <img class="w-100 mb-3" src="https://camo.githubusercontent.com/377db1e303a8ed9960613167f01ee9134373e51aaedecdeebf667a31527b6763/68747470733a2f2f6769746875622e6769746875626173736574732e636f6d2f696d616765732f6d6f64756c65732f70726f66696c652f616368696576656d656e74732f68656172742d6f6e2d796f75722d736c656576652d64656661756c742e706e67" alt="">
                                </div>
                                <div class="col-4 col-sm-2 col-xl-1">
                                    <img class="w-100 mb-3" src="https://camo.githubusercontent.com/2707c37fdc92995dbe3f3c0c4420caf856000dd08c4e09e867845cb620bdf87d/68747470733a2f2f6769746875622e6769746875626173736574732e636f6d2f696d616765732f6d6f64756c65732f70726f66696c652f616368696576656d656e74732f67616c6178792d627261696e2d64656661756c742e706e67" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <img width="360px" height="100%" class="d-none d-lg-block" src="https://cdn.dribbble.com/users/4214751/screenshots/10503785/media/8ddd53e41258703dc23cc8bd3ca68afd.png" alt="study">
            </div>
        </div>

    </section>

    <section id="progress" class="text-light py-3">
        <div class="container-md w-100 h-50">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Progres</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="m-3 mt-5 text-center">
                                        <canvas id="chartProgress" class="mb-2"></canvas>
                                        <p>25%</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    test
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <Footer />
</main>

<style>
    .level-badge {
        background-color: black;
        border-radius: 15px;
        width: 150px;
        height: 175px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    main.main-container {
        margin-bottom: 100px;
    }

    section#hero {
        /* background-image: url('https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/dashboard-home-illustration.png'),linear-gradient(218.23deg,#055472 20.4%,#033e5e 77.97%);
        background-repeat: no-repeat; */
        background:  radial-gradient( rgba(0, 9, 56, 0.65), rgba(0, 9, 56, 0.75), rgba(1,2,3,0.95) ), url('https://w0.peakpx.com/wallpaper/870/749/HD-wallpaper-math-blackboard-texture-background-with-geometric-shapes-math-background-math-texture-geometric-lines-shapes-texture-mathematics-background.jpg');
        background-size: contain;
    }
</style>

