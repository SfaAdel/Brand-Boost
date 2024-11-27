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

// //////////////////////////////////////////

document.addEventListener("click", (event) => {
    const target = event.target;

    // Open modal
    if (target.dataset.modalOpen) {
        const modalId = target.dataset.modalOpen;
        document.getElementById(modalId).classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
    }

    // Close modal
    if (target.dataset.modalClose) {
        const modalId = target.dataset.modalClose;
        document.getElementById(modalId).classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    }

    // Close modal by clicking outside the modal content
    if (target.classList.contains("modal-overlay")) {
        target.classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    }
});
