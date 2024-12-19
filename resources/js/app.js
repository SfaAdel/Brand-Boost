import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// import { gsap } from "gsap";
// import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM fully loaded and parsed");
    //Loader
    var tl = gsap.timeline();
    tl.from("#loader h4", {
        x: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.5,
    });

    tl.to("#loader h4", {
        opacity: 0,
        x: -50,
        stagger: 0.2,
    });

    tl.to("#loader", {
        opacity: 0,
        onComplete: () => {
            document.querySelector("#loader").style.display = "none";
            // Hero
            gsap.to("#hero-content-text", {
                opacity: 1,
                duration: 1,
            });

            gsap.to("#hero-content-image", {
                opacity: 1,
                duration: 1,
            });
        },
    });

    // Appearance
    var appearanceTl = gsap.timeline({
        scrollTrigger: {
            trigger: "#apperance",
            scrub: 3,
            toggleActions: "restart pause resume none",
        },
    });

    gsap.fromTo(
        ".shot-item-left",
        { opacity: 0, yPercent: 100 },
        {
            opacity: 1,
            yPercent: 0,
            duration: 1,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "#shots",
                start: "top 100%",
                end: "bottom 80%",
                scrub: true,
                markers: false,
            },
        }
    );

    gsap.fromTo(
        ".shot-item-right",
        { opacity: 0, xPercent: 100 },
        {
            opacity: 1,
            xPercent: 0,
            duration: 1,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "#shots",
                start: "top 100%",
                end: "bottom 80%",
                scrub: true,
                markers: false,
            },
        }
    );

    // Horizontal
    const horizontalContents = gsap.utils.toArray(
        "#horizontal #horizontalContent"
    );
    gsap.to(horizontalContents, {
        xPercent: -100 * (horizontalContents.length - 1),
        scrollTrigger: {
            trigger: "#horizontal",
            pin: true,
            scrub: 1,
        },
    });

    const talentCards = gsap.utils.toArray(
        "#talents-container #horizontalTalentCard"
    );
    gsap.to(talentCards, {
        xPercent: -100 * (talentCards.length - 1),
        scrollTrigger: {
            trigger: "#talents-container",
            pin: true,
            scrub: 1,
        },
    });

    const cards = document.querySelectorAll("#talents-cards-container #card");
    gsap.fromTo(
        cards,
        { opacity: 0, yPercent: 100 },
        {
            opacity: 1,
            yPercent: 0,
            duration: 1,
            ease: "power1.out",
            stagger: { each: 0.3, from: "start" },
            scrollTrigger: {
                trigger: "#talents-cards-container",
                start: "top 80%",
                end: "bottom 60%",
                scrub: true,
                markers: false,
            },
        }
    );

    gsap.fromTo(
        "#contact-input",
        { opacity: 0, yPercent: 100 },
        {
            opacity: 1,
            yPercent: 0,
            duration: 0.5,
            ease: "power1.out",
            stagger: { each: 0.25, from: "start" },
        }
    );

    gsap.fromTo(
        "#blog-item",
        { opacity: 0, yPercent: 100 },
        {
            opacity: 1,
            yPercent: 0,
            duration: 1,
            ease: "power1.out",
            stagger: { each: 0.2, from: "start" },
        }
    );

    gsap.fromTo(
        "#service-card-inpage",
        { opacity: 0, yPercent: 100 },
        {
            opacity: 1,
            yPercent: 0,
            duration: 1,
            ease: "power1.out",
            stagger: { each: 0.2, from: "start" },
        }
    );

    gsap.fromTo(
        "#freelancer-card-inpage",
        { opacity: 0, yPercent: 100 },
        {
            opacity: 1,
            yPercent: 0,
            duration: 1,
            ease: "power1.out",
            stagger: { each: 0.2, from: "start" },
        }
    );

    function truncateText(paragraph, maxLength) {
        const text = paragraph.textContent.trim();
        if (text.length > maxLength) {
            paragraph.textContent = text.slice(0, maxLength) + "...";
        }
    }

    document
        .querySelectorAll("#service-offer-description")
        .forEach((paragraph) => {
            truncateText(paragraph, 180);
        });

    document.querySelectorAll("#service-description").forEach((paragraph) => {
        truncateText(paragraph, 30);
    });

    document
        .querySelectorAll(".freelancer-description")
        .forEach((paragraph) => {
            truncateText(paragraph, 25);
        });

    document
        .querySelectorAll("#dashboardOrderDescription")
        .forEach((paragraph) => {
            truncateText(paragraph, 100);
        });

    document
        .querySelectorAll("#dashboardProjectDescription")
        .forEach((paragraph) => {
            truncateText(paragraph, 100);
        });

    document.querySelectorAll("#dashboardProjectName").forEach((paragraph) => {
        truncateText(paragraph, 100);
    });

    document.querySelectorAll("#dashboardServiceName").forEach((paragraph) => {
        truncateText(paragraph, 100);
    });

    document.querySelectorAll("#blogDescription").forEach((paragraph) => {
        truncateText(paragraph, 100);
    });
});
