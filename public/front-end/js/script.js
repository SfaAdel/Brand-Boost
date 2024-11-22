// import { gsap } from "../../../node_modules/gsap/gsap-core.js";

gsap.registerPlugin(ScrollTrigger);

gsap.from("#leftImgs", {
    scrollTrigger: {
        trigger: "#leftImgs",
        toggleActions: "restart pause resume none",
    },
    x: "-50%",
    y: "-50%",
    opacity: 0,
    duration: 1,
});
gsap.from("#rightImgs", {
    scrollTrigger: {
        trigger: "#leftImgs",
        toggleActions: "restart pause resume none",
    },
    x: "50%",
    y: "50%",
    opacity: 0,
    duration: 1,
});

const horizontalContents = gsap.utils.toArray("#horizontal #horizontalContent");
gsap.to(horizontalContents, {
    xPercent: -100 * (horizontalContents.length - 1),
    scrollTrigger: {
        trigger: "#horizontal",
        pin: true,
        scrub: 1,
    },
});
