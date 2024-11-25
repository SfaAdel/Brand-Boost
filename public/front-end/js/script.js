// import { gsap } from "../../../node_modules/gsap/gsap-core.js";

gsap.registerPlugin(ScrollTrigger);

// Appearance
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

// Horizontal
const horizontalContents = gsap.utils.toArray("#horizontal #horizontalContent");
gsap.to(horizontalContents, {
    xPercent: -100 * (horizontalContents.length - 1),
    scrollTrigger: {
        trigger: "#horizontal",
        pin: true,
        scrub: 1,
    },
});

// Services
const services = gsap.utils.toArray("#service");
gsap.from(services, {
    scrollTrigger: {
        trigger: "#service",
        toggleActions: "restart pause resume none",
    },
    y: "-50%",
    opacity: 0,
    duration: 1.5,
    scrub: 1,
});
