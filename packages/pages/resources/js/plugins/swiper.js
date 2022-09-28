export const swiperInit = (func) => {
    return `if (typeof Swiper == "undefined") {
        var script = document.createElement("script");
        var link = document.createElement("link");
        script.onload = ${func};
        link.type = "text/css";
        link.rel = "stylesheet";
        script.src = "/theme/frontend/js/swiper-bundle.min.js";
        link.href = "/theme/frontend/css/swiper-bundle.min.css";
        document.head.appendChild(link);
        document.head.appendChild(script);
    }else{
       ${func}() ;
    }`;
};
