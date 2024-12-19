const navContainer = document.querySelector(".nav-container");
const navbarButton = document.querySelector(".nav-toggle-button");
const navbarLogo = document.querySelector("#navbar-logo");
const listItems = document.querySelectorAll(".nav-container ul li");
const navbarLg = document.getElementById("navbar-lg");
const navbar = document.getElementById("navbar");
const heroSection = document.getElementById("hero");

function animateNavContainer(show) {
    if (show) {
        navContainer.style.transform = "translateY(0%)";
        navContainer.style.opacity = "1";
        listItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.transform = "translateX(0)";
                item.style.opacity = "1";
                item.style.transition = `transform 0.5s ease-out ${
                    index * 0.1
                }s, opacity 0.5s ease-out ${index * 0.1}s`;
            }, 1000);
        });
    } else {
        navContainer.style.transform = "translateY(-100%)";
        navContainer.style.opacity = "0";
        listItems.forEach((item) => {
            item.style.transform = "translateX(-100%)";
            item.style.opacity = "0";
            item.style.transition = "none";
        });
    }
}

navbarButton.addEventListener("click", (e) => {
    const button = e.currentTarget;
    const isActive = button.dataset.active === "true";

    if (!isActive) {
        button.dataset.active = "true";
        navbar.classList.remove("bg-pr");
        animateNavContainer(true);
    } else {
        button.dataset.active = "false";
        animateNavContainer(false);
    }
});

let lastScrollTop = 0;
window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY;
    navbarLg.classList.add("bg-pr");
    if (navbarButton.dataset.active === "false") {
        navbar.classList.add("bg-pr");
    }

    if (scrollTop > lastScrollTop) {
        navbarLg.classList.add("-translate-y-full");
        navbar.classList.add("-translate-y-full");
    } else {
        navbarLg.classList.remove("-translate-y-full");
        navbar.classList.remove("-translate-y-full");
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});

document.addEventListener("click", (event) => {
    const target = event.target;

    // Open modal
    if (target.dataset.modalOpen) {
        const modalId = target.dataset.modalOpen;
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
        }
    }

    // Close modal
    if (target.dataset.modalClose) {
        const modalId = target.dataset.modalClose;
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }
    }

    // Close modal by clicking outside the modal content
    if (
        target.classList.contains("modal-overlay") &&
        !target.contains(event.target.closest(".modal-content"))
    ) {
        target.classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    }
});

function truncateText(paragraph, maxLength) {
    const text = paragraph.textContent;
    if (text.length > maxLength) {
        paragraph.textContent = text.slice(0, maxLength) + "...";
    }
}

document.querySelectorAll("#service-offer-description").forEach((paragraph) => {
    truncateText(paragraph, 180);
});

document.querySelectorAll("#service-description").forEach((paragraph) => {
    truncateText(paragraph, 300);
});

document.querySelectorAll("#freelancer-description").forEach((paragraph) => {
    truncateText(paragraph, 150);
});

document.querySelectorAll("#dashboardOrderDescription").forEach((paragraph) => {
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

////////////////////////////////////

const button = document.getElementById("follow-button");
const followText = document.getElementById("follow-text");
const followIcon = document.getElementById("follow-icon");

button.addEventListener("click", async function () {
    const isFollowing = button.getAttribute("data-following") === "true";

    if (isFollowing) {
        followText.textContent = "Follow";
        followIcon.src = "/front-end/SVGs/heart.svg";
        button.setAttribute("data-following", "false");
    } else {
        followText.textContent = "Unfollow";
        followIcon.classList.add("animate-ping");
        followIcon.src = "/front-end/SVGs/heart-fill.svg";
        button.setAttribute("data-following", "true");
    }
});

// ////////////////////////////////////
