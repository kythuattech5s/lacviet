export const initWowJs = `
if (typeof window["initAnimation"] == "undefined") {
    var initAnimation = () => {
        var width_ = window.innerWidth;
        if (width_ > 1023) {
            var wow = new WOW();
            wow.init();
        }
    };
}

if (typeof WOW == "undefined") {
    var script = document.createElement("script");
    script.setAttribute('defer','');
    const link = document.createElement("link");
    link.rel = "";

    script.onload = initAnimation;
    document.head.appendChild(script);
    link.type = "text/css";
    link.rel = "stylesheet";
    script.src = "/theme/frontend/js/wow.min.js";
    link.href = "/theme/frontend/css/animate.min.css";
    document.head.appendChild(link);
    document.head.appendChild(script);
} else if(typeof window["initAnimation"] == 'undefined') {
    initAnimation();
}
`;
