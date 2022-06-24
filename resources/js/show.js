hljs.highlightAll();
hljs.initLineNumbersOnLoad();

const copyLink = document.querySelector("#copyLink");
const copyScript = document.querySelector("#copyScript");
const script = document.querySelector("#script");
const link = document.querySelector("#link");
let linvId, sinvId;

copyLink.addEventListener("click", () => {
    link.select();
    link.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(link.value);
    copyLink.innerHTML = "<i class='bx bx-check-circle' ></i>";
    if (linvId) {
        clearInterval(linvId);
    }
    linvId = setInterval(() => {
        copyLink.innerHTML = "<i class='bx bx-copy-alt' ></i>";
    }, 3000);
});

copyScript.addEventListener("click", () => {
    navigator.clipboard.writeText(script.value);
    if (sinvId) {
        clearInterval(sinvId);
    }
    copyScript.innerHTML = "Copied!";
    sinvId = setInterval(() => {
        copyScript.innerHTML = "Copy";
    }, 3000);
});
