<div class="big-image w-100 position-absolute"></div>
<div class="content-1 d-flex justify-content-center flex-column mx-0 px-2">
    <div class="hero d-flex justify-content-center mb-5 align-items-center">
        <h1 class="display-1 fw-bold text-custom hero-text">Fulla Cookies</h1>
    </div>
    <div class="sub container">
        <p class="mb-4 display-2 baloo text-custom fw-bold text-center sub-hero-text"><span class="text-c2">Solusi</span> tepat untuk masalah <span class="text-c2">perut kosong</span> anda.</p>
    </div>
</div>
<div class="px-4 pt-5 my-5 content-2 text-center">
    <div class="text-center mb-4 pb-3">
        <p class="border-bottom border-2 px-5 d-inline pb-2 lead fs-3">Kenapa memilih kami?</p>
    </div>
    <div class="container px-0 d-flex flex-wrap flex-lg-row-reverse">
        <img src="<?= asset_url() ?>/img/ngulen.jpg" class="img-fluid col-lg-8 rounded-3 mb-4" alt="Hero Imgae" width="700" height="500" loading="lazy">
        <div class="col-lg-4 ps-4 mt-4 fs-5 text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui explicabo aliquam totam, maiores quisquam sint labore recusandae velit obcaecati earum dolorum quas ratione in maxime nam, suscipit, doloribus odit cumque? Eum incidunt facere explicabo, atque et cumque odit ab necessitatibus, ex sint tenetur tempora voluptate esse, nobis quod? Explicabo quasi laboriosam delectus, perferendis optio placeat beatae nobis debitis, eos voluptatem aspernatur possimus fugit iusto dolores quidem odio ut porro at? Quae aliquid iste non commodi eius nihil nobis omnis ullam placeat eos amet quod, ea quis dolores qui asperiores sunt.</div>
    </div>
</div>
<style>
    .text-c2 {
        color: var(--bs-green);
    }
    .content-2 {
        background-image: url("<?=asset_url()?>/img/line.svg");
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .content-1>.hero {
        margin-top: 0rem;
    }

    .content-1>.sub {
        margin-top: 1rem;
    }

    .content-1 {
        min-height: 100vh !important;
    }

    .big-image {
        /* min-width: 500px; */
        z-index: -1;
        min-height: 100vh !important;
        background-image: url("<?=asset_url()?>/img/blob.svg");
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        transition: all .5s ease-in;
    }

    /* .hero-text {
        letter-spacing: -0.5em;
        -webkit-transform: translateZ(-800px);
        transform: translateZ(-800px);
        -webkit-filter: blur(12px);
        filter: blur(12px);
        opacity: 0;
    } */

    @media only screen and (min-width: 768px) {
        .sub.container {
            max-width: 50%;
        }
    }

    @-webkit-keyframes hero-show {
        100% {
            letter-spacing: normal;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-filter: blur(0);
            filter: blur(0);
            opacity: 1;
        }
    }

    @keyframes hero-show {
        100% {
            letter-spacing: normal;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-filter: blur(0);
            filter: blur(0);
            opacity: 1;
        }
    }

    .hero-text-show {
        animation: hero-show 0.8s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }
</style>
<script>
    function ready() {
        setTimeout(() => {
            window.scrollTo(0, 0)
            // document.querySelector(".hero-text").classList.add("hero-text-show")
            document.querySelector(".big-image").style.height = `${document.querySelector(".content-1").clientHeight}px`;
            console.log(document.querySelector(".content-1").clientHeight);
        }, 200);
    }
    window.onresize = function(){document.querySelector(".big-image").style.height = `${document.querySelector(".content-1").clientHeight}px`;}
</script>