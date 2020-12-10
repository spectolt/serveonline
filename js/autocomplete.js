var isVisible = false;
$("#search")
  .autocomplete({
    minLength: 0,
    appendTo: ".product__search",
    source: function (request, response) {
      $.ajax({
        url: "https://5fc0bc01cb4d020016fe5d12.mockapi.io/products",
        // dataType: "jsonp",
        // data: {
        //     term: request.term
        // },
        success: function (data) {
          response(data);
        },
      });
    },
    select: function (event, ui) {
      $("input#search").attr("rel", ui.item.label);
    },
    open: function () {
      if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
        $(".ui-autocomplete").off("menufocus hover mouseover");
      }

      $("input#search").attr("rel", 0);
      $(".product__search-arrow").addClass("rotate");

      //overriding default classes after putting in wrapper
      $(".ui-autocomplete-wrapper").removeClass("ui-menu-item");
      $("h2.ui-menu-item-wrapper, h3.ui-menu-item-wrapper").removeClass(
        "ui-menu-item-wrapper"
      );
      $("li.ui-menu-item-wrapper")
        .removeClass("ui-menu-item-wrapper")
        .addClass("ui-menu-item");
      $("div.autocomplete-product").addClass("ui-menu-item-wrapper");
      $(".ui-autocomplete-choose").removeClass("ui-menu-item");
      $(".ui-autocomplete-choose-text").removeClass("ui-menu-item-wrapper");
    },
    close: function () {
      if ($("input#search").attr("rel") == "0") $("input#search").val("");
      $(".product__search-arrow").removeClass("rotate");
    },
    select: function (event, ui) {
      event.preventDefault();
      $("#project").val(ui.item.label);
      $("#project-id").val(ui.item.value);
      $("#project-description").html(ui.item.desc);
      $("#project-icon").attr("src", "images/" + ui.item.icon);

      return false;
    },
  })
  .focus(function () {
    // The following works only once.
    // $(this).trigger('keydown.autocomplete');
    // As suggested by digitalPBK, works multiple times
    // $(this).data("autocomplete").search($(this).val());
    // As noted by Jonny in his answer, with newer versions use uiAutocomplete
    $(this).data("uiAutocomplete").search($(this).val());
    isVisible = true;
  })
  .autocomplete("instance")._renderMenu = function (ul, items) {
  var currentCategory = "";
  var currentSubcategory = "";

  $.each(items, function (index, item) {
    if (item.category != currentCategory) {
      currentCategory = item.category;
    }

    if (
      item.category == currentCategory &&
      item.subcategory != currentSubcategory
    ) {
      ul.append(
        "<h3 class='autocomplete-subcategory'>" + item.subcategory + "</h3>"
      );
      currentSubcategory = item.subcategory;
    }

    if (item.category && item.subcategory && item.checkbox) {
      return $("<li>")
        .append(
          "<div class='autocomplete-product'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
            item.index +
            "'><label class='autocomplete-product-checkbox' for='item-" +
            item.index +
            "'><span class='autocomplete-product-title'>" +
            item.title +
            "<button class='autocomplete-product-button'>Plačiau</button></span><span class='autocomplete-product-desc paragraph hidden'>" +
            item.about +
            "</span><span class='autocomplete-product-duration'>" +
            item.duration +
            "</span>" +
            "</label></div></div>"
        )
        .appendTo(ul);
    } else if (item.category && item.subcategory) {
      return $("<li>")
        .append(
          "<div class='autocomplete-product autocomplete-product--choices'>" +
            "<span class='autocomplete-product-expand'></span>" +
            "<span class='autocomplete-product-title'>" +
            item.title +
            "<button class='autocomplete-product-button'>Plačiau</button></span><span class='autocomplete-product-desc paragraph hidden'>" +
            item.about +
            // "</span><span class='autocomplete-product-duration'>" +
            // item.duration +
            "</span><div class='autocomplete-product autocomplete-product--choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
            item.index +
            "'><label class='autocomplete-product-checkbox' for='item-" +
            item.index +
            "'><span class='autocomplete-product-title'>" +
            item.choice1title +
            "</span><span class='autocomplete-product-duration'>" +
            item.choice1duration +
            "</span></label></div></div><div class='autocomplete-product autocomplete-product--choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
            item.index +
            "'><label class='autocomplete-product-checkbox' for='item-" +
            item.index +
            "'><span class='autocomplete-product-title'>" +
            item.choice2title +
            "</span><span class='autocomplete-product-duration'>" +
            item.choice2duration +
            "</span></label></div></div><div class='autocomplete-product autocomplete-product--choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
            item.index +
            "'><label class='autocomplete-product-checkbox' for='item-" +
            item.index +
            "'><span class='autocomplete-product-title'>" +
            item.choice3title +
            "</span><span class='autocomplete-product-duration'>" +
            item.choice3duration +
            "</span></label>" +
            "</div></div>"
        )
        .appendTo(ul);
    }
  });
  $(".ui-autocomplete")
    .children()
    .wrapAll("<div class='ui-autocomplete-wrapper'></div>");
  var chooseBtn = $(
    "<button class='ui-autocomplete-choose'>Rinktis pažymėtas paslaugas</button>"
  );
  var chooseText = $(
    "<p class='ui-autocomplete-choose-text paragraph'>Pažymėkite vieną ar kelias paslaugas</p>"
  );
  $(".ui-autocomplete").append(chooseBtn);
  $(chooseText).prependTo(".ui-autocomplete-wrapper");

  chooseBtn.on("click", function () {
    input.autocomplete("close");
    input.blur();
    isVisible = false;
  });
};

$(document).on("click", ".autocomplete-product-button", function () {
  var description = $(this)
    .closest(".autocomplete-product")
    .find(".autocomplete-product-desc");
  description.toggleClass("hidden");
  $(this).html($(this).html() == "Uždaryti" ? "Plačiau" : "Uždaryti");
});

$(document).on("click", ".autocomplete-product-expand", function () {
  $(this)
    .siblings(".autocomplete-product--choice, .autocomplete-product-duration")
    .toggleClass("hidden");
  $(this).toggleClass("rotate-arrow");
});

//to make product search checkboxes work
$(document)
  .on("click", ".autocomplete-product-checkbox", function (e) {
    var checkBoxes = $(this).closest(".checkbox").find("input");
    checkBoxes.prop("checked", !checkBoxes.prop("checked"));
  })
  .on("click", ".autocomplete-product-button", function (e) {
    return false;
  });

$(document).on("click", ".ui-autocomplete-choose", function (e) {
  if($(".product__chosen .autocomplete-product").length) {
  input.parent().hide();
  $(".product__chosen").show();
  }
});

$(".product__chosen-add").on("click", function () {
  var container = $(".ui-autocomplete");
  input.parent().show();
  input.parent().css({height: "0", visibility: "hidden", marginBottom: "0"});
  input.autocomplete("search", "");
  container.insertAfter(".product__chosen");
  container.css({display: "block", position: "static"});
});

$(".autocomplete-product-trash").on("click", function () {
  $(this).parent(".autocomplete-product").remove();

  if (!$(".product__chosen .autocomplete-product").length) {
    $(".product__chosen").hide();
    input.parent().show();
    input.parent().removeAttr("style");
    input.blur();
  }
});

//making product search arrow work
var input = $("#search");
$(".product__search-arrow").click(function () {
  if (isVisible == true) {
    input.autocomplete("close");
    input.blur();
    isVisible = false;
  } else {
    $("html, body").animate(
      { scrollTop: $("#search").offset().top - 10 },
      300
    );
    input.autocomplete("search", "");
    isVisible = true;
  }
});

//on iphone, after pressing "done", keep results open
//bug - after selecting product, input regains focus, losing selection and opening up keyboard
if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
  var container = $(".ui-autocomplete");
  document.addEventListener("focusout", function (e) {
    if (e.relatedTarget == null) {
      $(".product__search-arrow").addClass("rotate");
      container.css("display", "block");
      isVisible = true;
    }
  });
  $(document).on("click", function (e) {
    if (!container.is(e.target) && container.has(e.target).length === 0 && !input.is(e.target) && input.has(e.target).length === 0 ) {
      container.hide();
      $(".product__search-arrow").removeClass("rotate");
    }
  });
}

//scroll to input after click
$("#search").focus(function () {
  $("html, body").animate(
    { scrollTop: $("#search").offset().top - 10 },
    300
  );
});

if (!navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {  
  $(document).on("click", ".ui-autocomplete-wrapper", function (e) {
    input.prop("readonly", true);
  });
  $(document).on("click", "#search", function () {
    input.prop("readonly", false);
  });
}