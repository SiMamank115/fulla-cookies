function sidebar(e) {
    if (e == "show") {
        document.querySelector(".sidebar").classList.toggle("sidebar-show")
    }
}
const classBreaker = (e = "") => e.split(" ")
document.onreadystatechange = () => {
    if (document.readyState == "complete") {
        document.body.classList.remove("d-none")
        setTimeout(() => {
            if(typeof ready == "function") {
                ready()
            }
            document.body.classList.add("d-flex")
            document.querySelector(".navbar-brand").classList.add("navbar-brand-show");
            if(typeof pillNum != "undefined"){
                setTimeout(() => {
                    document.querySelector(".nav-top").children[pillNum - 1].classList.add(...classBreaker("uc-active disabled"))
                }, 400);
                document.querySelector(".nav-sidebar").children[pillNum - 1].classList.add(...classBreaker("uc-active disabled"))
                document.querySelector(".nav-bottom").children[pillNum - 1].classList.add(...classBreaker("fw-bold nav-link-custom"))
                document.querySelector(".nav-bottom").children[pillNum - 1].setAttribute("style","pointer-events: none;cursor: default;")
            }
        }, 100);
    }
}
document.onscroll = () => {
    if(window.scrollY > 0) {
        document.querySelector(".nav-custom > div").classList.add("line-bottom");
        document.querySelector(".nav-custom").classList.add("bg-light");
    } else {
        document.querySelector(".nav-custom > div").classList.remove("line-bottom");
        document.querySelector(".nav-custom").classList.remove("bg-light");
    }
}