/******/ (() => { // webpackBootstrap
/*!********************************************************************!*\
  !*** ./platform/packages/revision/resources/assets/js/revision.js ***!
  \********************************************************************/
$(document).ready(function () {
  $.each($('.html-diff-content'), function (index, item) {
    $(item).html(htmldiff($(item).data('original'), $(item).html()));
  });
});
/******/ })()
;