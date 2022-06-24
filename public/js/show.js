/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/show.js ***!
  \******************************/
hljs.highlightAll();
hljs.initLineNumbersOnLoad();
var copyLink = document.querySelector("#copyLink");
var copyScript = document.querySelector("#copyScript");
var script = document.querySelector("#script");
var link = document.querySelector("#link");
var linvId, sinvId;
copyLink.addEventListener("click", function () {
  link.select();
  link.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(link.value);
  copyLink.innerHTML = "<i class='bx bx-check-circle' ></i>";

  if (linvId) {
    clearInterval(linvId);
  }

  linvId = setInterval(function () {
    copyLink.innerHTML = "<i class='bx bx-copy-alt' ></i>";
  }, 3000);
});
copyScript.addEventListener("click", function () {
  navigator.clipboard.writeText(script.value);

  if (sinvId) {
    clearInterval(sinvId);
  }

  copyScript.innerHTML = "Copied!";
  sinvId = setInterval(function () {
    copyScript.innerHTML = "Copy";
  }, 3000);
});
/******/ })()
;