document.addEventListener("DOMContentLoaded", () => {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.querySelector("h1").innerText);

    document.querySelector("#whatsapp").href = `https://api.whatsapp.com/send?text=${title} - ${url}`;
    document.querySelector("#twitter").href = `https://twitter.com/intent/tweet?text=${title}&url=${url}`;
    document.querySelector("#linkedin").href = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
    document.querySelector("#facebook").href = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
});

document.querySelectorAll(".fade-in").forEach(img => {
    img.addEventListener("load", () => img.classList.add("loaded"));
});