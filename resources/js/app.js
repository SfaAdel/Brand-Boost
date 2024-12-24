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

    const heroTexts = document.querySelectorAll(".heroText");
    const groupSize = 3;
    let currentIndex = 0;

    function animateGroup() {
        const currentGroup = Array.from(heroTexts).slice(
            currentIndex,
            currentIndex + groupSize
        );

        // Show the current group
        const showGroup = gsap.timeline();
        showGroup.to(currentGroup, {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power2.out",
            stagger: 0.5,
        });

        // Hide the current group and move to the next group
        showGroup.to(currentGroup, {
            opacity: 0,
            duration: 1,
            delay: 3, // Keep the group visible for 3 seconds
            onComplete: () => {
                currentIndex = (currentIndex + groupSize) % heroTexts.length;
                animateGroup();
            },
        });
    }

    tl.to("#loader", {
        opacity: 0,
        onComplete: () => {
            document.querySelector("#loader").style.display = "none";
            animateGroup();

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
        ".contact-info-item",
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

    const tiltCards = document.querySelectorAll(".card");
    tiltCards.forEach((card) => {
        card.addEventListener("mousemove", (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width;
            const y = (e.clientY - rect.top) / rect.height;
            const rotateX = (y - 0.5) * 20; // Adjust for tilt intensity
            const rotateY = (x - 0.5) * -20;

            card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        card.addEventListener("mouseleave", () => {
            card.style.transform = "rotateX(0deg) rotateY(0deg)";
        });
    });

    //dashboard
    gsap.fromTo(
        ".table-row",
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
        ".dashboard-link",
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
        ".dashboard-field",
        { opacity: 0, yPercent: 100 },
        {
            opacity: 1,
            yPercent: 0,
            duration: 1,
            ease: "power1.out",
            stagger: { each: 0.2, from: "start" },
        }
    );

    //faqs

    const accordions = document.querySelectorAll(".accordion");

    accordions.forEach((accordion) => {
        const toggle = accordion.querySelector(".accordion-toggle");
        const content = accordion.querySelector(".accordion-content");
        const icon = toggle.querySelector(".icon");
        const heading = toggle.querySelector("h5");

        toggle.addEventListener("click", () => {
            const isOpen = accordion.classList.contains("active");

            if (isOpen) {
                gsap.to(content, {
                    maxHeight: 0,
                    duration: 0.5,
                    ease: "power3.out",
                });
                gsap.to(icon, {
                    rotate: 360,
                    duration: 0.3,
                    ease: "power1.out",
                });
                accordion.classList.remove("active");
            } else {
                accordions.forEach((otherAccordion) => {
                    const otherContent =
                        otherAccordion.querySelector(".accordion-content");
                    const otherIcon = otherAccordion.querySelector(".icon");
                    otherAccordion.classList.remove("active");
                    gsap.to(otherContent, {
                        maxHeight: 0,
                        duration: 0.5,
                        ease: "power3.out",
                    });
                    gsap.to(otherIcon, {
                        rotate: 0,
                        duration: 0.3,
                        ease: "power1.out",
                    });
                });

                // Open the current accordion
                gsap.to(content, {
                    maxHeight: content.scrollHeight,
                    duration: 0.5,
                    ease: "power3.out",
                });
                gsap.to(icon, {
                    rotate: 180,
                    duration: 0.3,
                    ease: "power1.out",
                });
                accordion.classList.add("active");
            }

            // Update styles based on active state
            if (accordion.classList.contains("active")) {
                heading.style.color = "#4f46e5"; // Indigo color
                icon.style.stroke = "#4f46e5";
            } else {
                heading.style.color = "#1f2937"; // Default gray color
                icon.style.stroke = "#1f2937";
            }
        });
    });
});
