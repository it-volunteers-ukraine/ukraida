//jquery-ui-accordion
jQuery(document).ready(function ($) {
  $("#accordion").accordion({
    collapsible: true,
    active: false,
    heightStyle: "content",
    header: "h3",

    classes: {
      "ui-accordion-header": "faq-header",
    },
    activate: function (event, ui) {
      // Добавляем класс active к родителю, когда аккордеон открыт
      $(ui.newHeader).closest(".accordion-item").addClass("accordion-item-active");
    },
    beforeActivate: function (event, ui) {
      // Удаляем класс active с предыдущего открытого аккордеона
      $(ui.oldHeader).closest(".accordion-item").removeClass("accordion-item-active");
    },
  });
  $("#accordion h3 .ui-icon").remove();
});
