<div class="big-image w-100 position-absolute shadow"></div>
<div class="content-1 mx-0 px-2">
    <div class="hero d-flex justify-content-center mb-5 align-items-center">
        <h1 class="display-4 fw-bold text-custom hero-text">Fulla Cookies</h1>
    </div>
    <div class="sub container-md">
        <p class="fs-4 mb-4 text-center sub-hero-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium optio dignissimos molestiae ut nisi doloribus cupiditate obcaecati atque debitis odit sequi fuga, magni nam temporibus! Molestias magnam sequi minus non officia repellendus sint atque! Veniam, ipsum. Itaque magnam commodi delectus, quaerat quo provident, consequuntur, eveniet fugiat cumque quibusdam enim tenetur.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        </div>
    </div>
</div>
<div class="px-4 pt-5 my-5 text-center">
    <div class="text-center mb-4 pb-3"><p class="border-bottom border-2 px-5 d-inline pb-2 lead fs-3">Kenapa memilih kami?</p></div>
    <div class="container px-0 d-flex flex-wrap flex-lg-row-reverse">
        <img src="<?= asset_url() ?>/img/ngulen.jpg" class="img-fluid col-lg-8 rounded-3 mb-4" alt="Hero Imgae" width="700" height="500" loading="lazy">
        <div class="col-lg-4 ps-4 mt-4 fs-5 text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui explicabo aliquam totam, maiores quisquam sint labore recusandae velit obcaecati earum dolorum quas ratione in maxime nam, suscipit, doloribus odit cumque? Eum incidunt facere explicabo, atque et cumque odit ab necessitatibus, ex sint tenetur tempora voluptate esse, nobis quod? Explicabo quasi laboriosam delectus, perferendis optio placeat beatae nobis debitis, eos voluptatem aspernatur possimus fugit iusto dolores quidem odio ut porro at? Quae aliquid iste non commodi eius nihil nobis omnis ullam placeat eos amet quod, ea quis dolores qui asperiores sunt.</div>
    </div>
</div>
<style>
    .content-1>.hero {
        margin-top: 6rem;
    }

    .content-1>.sub {
        margin-top: 7rem;
    }
    .content-1 {
        min-height: 100vh !important;
    }
    .sub-hero-text {
        color: #522500;
        text-shadow: 0 0 10px #ede0d4;
    }

    .big-image {
        z-index: -1;
        min-height: 100vh !important;
        background: url("<?= asset_url() ?>/img/bread.jpg");
        background-size: cover;
        background-position: center center;
        transition: all .5s ease-in;
    }

    .hero-text {
        letter-spacing: -0.5em;
        -webkit-transform: translateZ(-800px);
        transform: translateZ(-800px);
        -webkit-filter: blur(12px);
        filter: blur(12px);
        opacity: 0;
    }

    @media only screen and (min-width: 768px) {
        .content-1 {
            padding-left: 3rem !important;
            padding-right: 3rem !important;
        }

        .sub-hero-text {
            padding-left: 10rem !important;
            padding-right: 10rem !important;
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

            document.querySelector(".hero-text").classList.add("hero-text-show")
            document.querySelector(".big-image").style.height = `${document.querySelector(".content-1").clientHeight}px`;
            console.log(document.querySelector(".content-1").clientHeight);
        }, 200);
    }
</script>