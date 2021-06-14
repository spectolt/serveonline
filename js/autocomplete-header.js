var isVisible = false;
if ($("main.hasUiAutocomplete").length > 0) {
  $("#search-product")
    .autocomplete({
      minLength: 3,
      appendTo: ".search-container",
      menudocking: {
        menucorner: "right bottom",
        inputcorner: "right bottom",
        collision: "none",
      },
      source: function (request, response) {
        $.ajax({
          url: "https://5fc0bc01cb4d020016fe5d12.mockapi.io/products",
          success: function (data) {
            response(data);
          },
        });
      },
      select: function (event, ui) {
        $("input#search-product").attr("rel", ui.item.label);
        $("#ui-id-2").css("display", "none");
      },
      open: function () {
        if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
          $(".ui-autocomplete").off("menufocus hover mouseover");
        }

        $("input#search-product").attr("rel", 0);

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
      close: function (event, ui) {
        $("#ui-id-1").show();
      },
      select: function (event, ui) {
        event.preventDefault();
        return false;
      },
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
              "</span>" +
              "</label></div></div>"
          )
          .appendTo(ul);
      } else if (item.category && item.subcategory) {
        return $("<li>")
          .append(
            "<div class='autocomplete-product autocomplete-product--choices'>" +
              "<span class='product-expand'></span>" +
              "<span class='autocomplete-product-title autocomplete-product-title--main'>" +
              item.title +
              "<button class='autocomplete-product-button'>Plačiau</button></span><span class='autocomplete-product-desc paragraph hidden'>" +
              item.about +
              "</span><div class='autocomplete-product autocomplete-product--choice product-choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
              item.index +
              "'><label class='autocomplete-product-checkbox' for='item-" +
              item.index +
              "'><span class='autocomplete-product-title'>" +
              item.choice1title +
              "</span></label></div></div><div class='autocomplete-product autocomplete-product--choice product-choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
              item.index +
              "'><label class='autocomplete-product-checkbox' for='item-" +
              item.index +
              "'><span class='autocomplete-product-title'>" +
              item.choice2title +
              "</span></label></div></div><div class='autocomplete-product autocomplete-product--choice product-choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
              item.index +
              "'><label class='autocomplete-product-checkbox' for='item-" +
              item.index +
              "'><span class='autocomplete-product-title'>" +
              item.choice3title +
              "</span></label>" +
              "</div></div>"
          )
          .appendTo(ul);
      }
    });
    $("#ui-id-1")
      .children()
      .wrapAll("<div class='ui-autocomplete-wrapper'></div>");
  };

  $(document).on("click", ".autocomplete-product-button", function () {
    var description = $(this)
      .closest(".autocomplete-product")
      .find(".autocomplete-product-desc");
    description.toggleClass("hidden");
    console.log(description);
    $(this).html($(this).html() == "Uždaryti" ? "Plačiau" : "Uždaryti");
  });

  $(document).on("click", ".product-expand", function () {
    $(this).siblings(" .autocomplete-product-duration").toggleClass("hidden");
  });

  $(document).click(function (event) {
    //if you click on anything except the search box or results, close menu
    if (!$(event.target).closest(".search-container,.ui-autocomplete").length) {
      $(".ui-autocomplete").css("display", "none");
      $("input#search-product").val("");
      $(".search-panel input").val("");
    }
  });

  //make product search checkboxes work and choose product
  $(document)
    .on("click", ".autocomplete-product-checkbox", function (e) {
      var checkBoxes = $(this).closest(".checkbox").find("input");
      checkBoxes.prop("checked", !checkBoxes.prop("checked"));
      document.activeElement.blur();

      var title, subtitle;
      if (checkBoxes.is(":checked")) {
        $(".ui-autocomplete, #search-product, .ui-autocomplete-wrapper").css(
          "display",
          "none"
        );
        $(".search-container__submit span").html("Valyti");
        $(".search-container__submit").addClass("change-search-icon");
        if (checkBoxes.parents(".autocomplete-product--choice").length) {
          title = $(this)
            .closest(".autocomplete-product--choices")
            .find(".autocomplete-product-title")
            .contents()
            .get(0).nodeValue;
          subtitle = $(this)
            .find(".autocomplete-product-title")
            .contents()
            .get(0).nodeValue;
          $("<div class='product-chosen'>")
            .append(
              "<h3>" +
                title +
                "</h3><h4>" +
                subtitle +
                "</h4><button class='product-chosen__trash'></button>"
            )
            .appendTo(".product__search");
        } else {
          title = $(this).find(".autocomplete-product-title").contents().get(0)
            .nodeValue;
          $("<div class='product-chosen'>")
            .append(
              "<h3>" +
                title +
                "</h3><button class='product-chosen__trash'></button>"
            )
            .appendTo(".product__search");
        }
      }
    })
    .on("click", ".autocomplete-product-button", function (e) {
      return false;
    });

  $(document).on("click", ".product-header-chosen__trash", function () {
    $(this).closest(".product-header-chosen").remove();
    $("#search-product").fadeIn(300);
    $("input#search-product").val("");
    $("input#search-product").focus();
    $(".search-container__submit span").html("Ieškoti");
    $(".search-container__submit").removeClass("change-search-icon");
  });

  $(document).on("click", ".ui-autocomplete-choose", function (e) {
    if ($(".product__chosen .autocomplete-product").length) {
      input.parent().hide();
      $(".product__chosen").show();
    }
  });

  var input = $("#search-product");
  if (!navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    $(document).on("click", ".ui-autocomplete-wrapper", function (e) {
      input.prop("readonly", true);
    });
    $(document).on("click", "#search-product", function () {
      input.prop("readonly", false);
    });
  }

  $("main").scroll(function () {
    if ($(".ui-autocomplete").is(":visible")) {
      if ($(this).scrollTop() > 100) {
        $("input#search-product").blur();
        $(".ui-autocomplete").css("display", "none");
        $("input#search-product").val("");
      }
    }
  });

  var searchTerms = [
    "Romas Dimša",
    "Romanas Kareivis",
    "Saulė Romikienė",
    "Saulė Romikienė",
    "Saulė Romikienė",
    "Saulė Romikienė",
    "Saulė Romikienė",
    "Saulė Romikienė",
    "Saulė Romikienė",
    "Saulė Romikienė",
  ];

  $(".search-panel input").autocomplete({
    minLength: 0,
    appendTo: ".search-container",
    source: searchTerms,
    position: { my: "left top", at: "left bottom" },
    close: function (event, ui) {
      if (window.matchMedia("(min-width: 700px)").matches) {
        $("#ui-id-2").show();
      }
    },
    open: function (event, ui) {
      if (window.matchMedia("(min-width: 700px)").matches) {
        $("#ui-id-1").css("display", "block");
      }
    },
    select: function (event, ui) {
      $("#ui-id-1").css("display", "none");
      $("#ui-id-2").css("display", "none");
      $(".search-container__submit span").html("Valyti");
      $(".search-container__submit").addClass("change-search-icon");
    },
  });
}
