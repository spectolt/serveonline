var isVisible = false;
if ($("main.hasUiAutocomplete").length > 0) {
  var input = $("#search-specialist").not(".js_ignore_mark");
  input
    .autocomplete({
      minLength: 0,
      appendTo: $("#search-specialist").parent(),
      menudocking: {
        menucorner: "right bottom",
        inputcorner: "right bottom",
        // collision: "none",
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
        $("input#search-specialist").attr("rel", ui.item.label);
      },
      open: function (event, ui) {
        $(".ui-autocomplete-wrapper").prepend(
          "<div class='product__notice'><p class='product__text'>Jūsų buvusios rezervacijos paryškintos</p><button class='product__close'></button></div>"
        );
        $(".ui-autocomplete").css("top", "+=1");

        if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
          $(".ui-autocomplete").off("menufocus hover mouseover");
        }

        $("input#search-specialist").attr("rel", 0);

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

        $(input).parent().find(".input-icon").addClass("rotate-arrow");

        var wrapper = $(".specialist .ui-autocomplete-wrapper")
        var wrapperHeight = $(window).height() - wrapper.offset().top
        $(wrapper).css("max-height", wrapperHeight)

        if($(".product__chosen").is(":visible")) {
          $(".specialist .ui-autocomplete").css("top", "0")
        }
      },
      close: function (event, ui) {
        if (!$(".ui-autocomplete").is(":visible")) {
          $(".ui-autocomplete").show();
        }
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
            "<div class='autocomplete-product active'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
              item.index +
              "'><label class='autocomplete-product-checkbox' for='item-" +
              item.index +
              "'><span class='autocomplete-product-title'>" +
              item.title +
              "<button class='autocomplete-product-button'>Plačiau</button></span><span class='autocomplete-product-desc paragraph hidden'>" +
              item.about +
              "</span>" +
              '<div class="product-action"><div class="product-action__info"><div class="product-action__duration">01:00</div>' +
              '<div class="product-action__price">45€<strike>60€</strike></div><div class="product-action__periodicity">6 sav.</div>' +
              "</div></div>" +
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
              "</span><div class='autocomplete-product autocomplete-product--choice product-choice hidden active'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
              item.index +
              "'><label class='autocomplete-product-checkbox' for='item-" +
              item.index +
              "'><span class='autocomplete-product-title'>" +
              item.choice1title +
              "</span>" +
              '<div class="product-action"><div class="product-action__info"><div class="product-action__duration">01:00</div>' +
              '<div class="product-action__price">45€<strike>60€</strike></div><div class="product-action__periodicity">6 sav.</div>' +
              "</div></div>" +
              "</label></div></div><div class='autocomplete-product autocomplete-product--choice product-choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
              item.index +
              "'><label class='autocomplete-product-checkbox' for='item-" +
              item.index +
              "'><span class='autocomplete-product-title'>" +
              item.choice2title +
              "</span>" +
              '<div class="product-action"><div class="product-action__info"><div class="product-action__duration">01:00</div>' +
              '<div class="product-action__price">45€<strike>60€</strike></div><div class="product-action__periodicity">6 sav.</div>' +
              "</div></div>" +
              "</label></div></div><div class='autocomplete-product autocomplete-product--choice product-choice hidden'><div class='checkbox'><input type='checkbox' class='autocomplete-product-input' id='item-" +
              item.index +
              "'><label class='autocomplete-product-checkbox' for='item-" +
              item.index +
              "'><span class='autocomplete-product-title'>" +
              item.choice3title +
              "</span>" +
              '<div class="product-action"><div class="product-action__info"><div class="product-action__duration">01:00</div>' +
              '<div class="product-action__price">45€<strike>60€</strike></div><div class="product-action__periodicity">6 sav.</div>' +
              "</div></div>" +
              "</label>" +
              "</div></div>"
          )
          .appendTo(ul);
      }
    });

    $("#ui-id-1")
      .children()
      .wrapAll("<div class='ui-autocomplete-wrapper'></div>");
  };

  $(input).prop("readonly", "readonly");

  $("#search-specialist").on("click", function () {
    $(this).autocomplete("search", "");
  });

  $(document).on("click", ".autocomplete-product-button", function () {
    var description = $(this)
      .closest(".autocomplete-product")
      .find(".autocomplete-product-desc");
    description.toggleClass("hidden");
    $(this).html($(this).html() == "Uždaryti" ? "Plačiau" : "Uždaryti");
  });

  $(document).on("click", ".product-expand", function () {
    $(this).siblings(" .autocomplete-product-duration").toggleClass("hidden");
  });

  $(document).click(function (event) {
    //if you click on anything except the search box or results, close menu
    if (
      !$(event.target).closest(
        ".product__search, .ui-autocomplete, .autocomplete-product"
      ).length ||
      $(event.target).closest(".product__close").length
      // || $(event.target).closest(".product__search .input-icon.rotate-arrow")
      //   .length
      // || $(event.target).closest(".autocomplete-product-checkbox").length
    ) {
      $(".ui-autocomplete").css("display", "none");
      $(input).parent().find(".input-icon").removeClass("rotate-arrow");
      if (!$(".specialist__overlay.hidden").length > 0) {
        $(".specialist__overlay").addClass("hidden");
      }
      $(".specialist__calendar-container").removeClass("overlay");
    } else {
      $(input).siblings(".input-icon").addClass("rotate-arrow");
      $(".ui-autocomplete").css("display", "block");
      $(".specialist__overlay").removeClass("hidden");
      $(".specialist__calendar-container").addClass("overlay");
    }
  });

  //make product search checkboxes work and choose product
  $(document)
    .on("click", ".autocomplete-product-checkbox", function (e) {
      $(".product__chosen").show();
      $(this).closest(".ui-menu-item").remove();
      $(input).css({"visibility": "hidden", "height": "0", "padding": "0", "margin": "0"});
      $(input).parent().addClass("hidden-icon");
      $(input).siblings(":not('.ui-autocomplete')").hide();

      var checkBoxes = $(this).closest(".checkbox").find("input");
      checkBoxes.prop("checked", !checkBoxes.prop("checked"));
      document.activeElement.blur();

      //autocomplete wrapper height and position
      $(".specialist .ui-autocomplete").css("top", "0")
      var wrapper = $(".specialist .ui-autocomplete-wrapper")
      var wrapperHeight = $(window).height() - $(wrapper).offset().top;
      wrapper.css("height", wrapperHeight)
    })
    .on("click", ".autocomplete-product-button", function (e) {
      $(this).toggleClass("rotate-arr");
      return false;
    });

  //remove product and restore input if no products left
  $(document).on("click", ".product__chosen-trash", function () {
    $(this).closest(".autocomplete-product").remove();
    if ($(".product__chosen .autocomplete-product").length == 0) {
      $(".product__chosen").remove();
      input.css({"visibility": "visible", "height": "", "padding": "", "margin": ""});
      input.siblings(":not('.ui-autocomplete')").show();
      $(input).parent().removeClass("hidden-icon");
    }
  });

  //show autocomplete list on add button
  $(".product__chosen-add").on("click", function () {
    input.autocomplete("search","")
  });


  // $("main").scroll(function () {
  //   if ($(".ui-autocomplete").is(":visible")) {
  //     if ($(this).scrollTop() > 100) {
  //       $("input#search-specialist").blur();
  //       $(".ui-autocomplete").css("display", "none");
  //       $("input#search-specialist").val("");
  //     }
  //   }
  // });
}
