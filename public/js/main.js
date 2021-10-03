/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('js/sw.js').then(function (registration) {
    alert('Registrado com sucesso', registration.scope);
  })["catch"](function (err) {
    alert('Service worker falhou, erro: ', err);
  });
}
/******/ })()
;