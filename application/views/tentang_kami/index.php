<!-- file_exists(getcwd() . "/assets/img/indo.svg") -->
<div class="container mt-5 pt-5 text-center">
    <div class="mb-4 pb-5">
        <p class="hero-text d-inline pb-2 display-6 text-custom text-center fw-bold">Tentang Kami!</p>
    </div>
    <div class="container px-0 d-flex flex-wrap flex-lg-row-reverse">
        <div class="ps-4 mt-4 justify-content-center d-flex flex-wrap">
            <p class="tentang-text text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate non incidunt possimus repudiandae nam, labore nesciunt, optio beatae, temporibus eos molestias ullam? Consectetur dicta dolor nostrum adipisci iste itaque sapiente dolores ea voluptas modi. Iste cum, saepe doloremque aspernatur labore expedita reiciendis harum enim, atque quasi libero sit commodi neque.</p>
            <button class="btn btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#maps" aria-expanded="false" aria-controls="maps">
                Maps!
            </button>
        </div>
        <div class="collapse w-100 mt-5" id="maps">
            <img src="<?= asset_url() ?>/img/indo.svg" class="img-fluid col-12 rounded-3 mb-4" alt="Hero Imgae" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>
<style>
    .hero-text {
        padding-left: 5%;
        padding-right: 5%;
        border-bottom: 3px solid var(--bs-light);
        font-size: calc(1rem + 2vw);
    }

    .hero-text-show {
        animation: hero-show-phone 0.7s cubic-bezier(0.175, 0.885, 0.5, 2) both;
    }
    .tentang-text {
        font-size: 1rem;
    }
    @media only screen and (min-width: 768px) {
        .hero-text {
            padding-left: 10rem;
            padding-right: 10rem;
            font-size: calc(1.375rem + 1.5vw);
        }
        .tentang-text {
            font-size: 1.25rem;
        }
        .hero-text-show {
        animation: hero-show 0.7s cubic-bezier(0.175, 0.885, 0.5, 2) both;
        }
    }

    @keyframes hero-show-phone {
        100% {
            border-bottom: 3px solid #dee2e6;
            padding-left: 10%;
            padding-right: 10%;
        }
    }
    
    @keyframes hero-show {
        100% {
            border-bottom: 3px solid #dee2e6;
            padding-left: 3rem;
            padding-right: 3rem;
        }
    }
</style>
<script>
    function ready() {
        setTimeout(() => {
            document.querySelector(".hero-text").classList.add("hero-text-show")
        }, 200);
    }
</script>