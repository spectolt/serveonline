var isVisible = false;
if ($("main.hasUiAutocomplete").length > 0) {
  var input = $("#search-specialist")
  input
    .autocomplete({
      minLength: 0,
      appendTo: $("#search-specialist").parent(),
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
        $("input#search-specialist").attr("rel", ui.item.label);
        // $("#ui-id-2").css("display", "none");
      },
      open: function () {
        $(".ui-autocomplete-wrapper").prepend("<p class='product__text'>Pažymėkite vieną ar kelias paslaugas <br/> Jūsų buvusios rezervacijos paryškintos</p>")
        $('.ui-autocomplete').append('<li><button class="product__choose-marked">Rinktis pažymėtas paslaugas</button></li>');

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
      },
      close: function (event, ui) {
        // $("#ui-id-1").show();
        if (!$(".ui-autocomplete").is(":visible")) {
          $(".ui-autocomplete").show();
        }
      },
      select: function (event, ui) {
        event.preventDefault();
        // $("input#search-product").val(ui.item.title);
        // $("#project").val(ui.item.label);
        // $("#project-id").val(ui.item.value);
        // $("#project-description").html(ui.item.desc);
        // $("#project-icon").attr("src", "images/" + ui.item.icon);

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

  $("#search-specialist").on("focus", function () {
    $(this).autocomplete("search", "");
  })
  // $("#search-specialist").on("focusout", function(event) {
  //   $(".ui-autocomplete").hide();
  // })

  $(document).on("click", ".autocomplete-product-button", function () {
    var description = $(this)
      .closest(".autocomplete-product")
      .find(".autocomplete-product-desc");
    description.toggleClass("hidden");
    // console.log(description);
    $(this).html($(this).html() == "Uždaryti" ? "Plačiau" : "Uždaryti");
  });

  $(document).on("click", ".product-expand", function () {
    $(this).siblings(" .autocomplete-product-duration").toggleClass("hidden");
    // $(this).toggleClass("rotate-arrow");
  });

  $(document).click(function (event) {
    //if you click on anything except the search box or results, close menu
    if (!$(event.target).closest(".product__search, .ui-autocomplete, .autocomplete-product").length) {
      $(".ui-autocomplete").css("display", "none");
      // $("input#search-specialist").val("");
      // $(".search-panel input").val("");
    } else {
      // $(".ui-autocomplete").css("display", "block");
    }
  });

  //make product search checkboxes work and choose product
  $(document)
    .on("click", ".autocomplete-product-checkbox", function (e) {
      var checkBoxes = $(this).closest(".checkbox").find("input");
      checkBoxes.prop("checked", !checkBoxes.prop("checked"));
      document.activeElement.blur();

      var title, subtitle;
      // if (checkBoxes.is(":checked")) {
        // $(".ui-autocomplete, #search-specialist, .ui-autocomplete-wrapper").css(
        //   "display",
        //   "none"
        // );
        // $(".search-container__submit span").html("Valyti");
        // $(".search-container__submit").addClass("change-search-icon");
        // if (checkBoxes.parents(".autocomplete-product--choice").length) {
        //   title = $(this)
        //     .closest(".autocomplete-product--choices")
        //     .find(".autocomplete-product-title")
        //     .contents()
        //     .get(0).nodeValue;
        //   subtitle = $(this)
        //     .find(".autocomplete-product-title")
        //     .contents()
        //     .get(0).nodeValue;
        //   $("<div class='product-chosen'>")
        //     .append(
        //       "<h3>" +
        //         title +
        //         "</h3><h4>" +
        //         subtitle +
        //         "</h4><button class='product-chosen__trash'></button>"
        //     )
        //     .appendTo(".product__search");
        // } else {
        //   title = $(this).find(".autocomplete-product-title").contents().get(0)
        //     .nodeValue;
        //   $("<div class='product-chosen'>")
        //     .append(
        //       "<h3>" +
        //         title +
        //         "</h3><button class='product-chosen__trash'></button>"
        //     )
        //     .appendTo(".product__search");
        // }
      // }
    })
    .on("click", ".autocomplete-product-button", function (e) {
      return false;
    });

  $(document).on("click", ".product__chosen-trash", function () {
    $(this).closest(".autocomplete-product").remove();
    // $("input#search-specialist").focus();
    // $(".search-container__submit span").html("Ieškoti");
    // $(".search-container__submit").removeClass("change-search-icon");
    // console.log($(".product__chosen .autocomplete-product").length)
    if ($(".product__chosen .autocomplete-product").length == 0) {
      $(".product__chosen").remove();
      $("#search-specialist").parent().show();
    // $("input#search-specialist").val("");
    } 
  });

  $(document).on("click", ".product__choose-marked", function (e) {
    // if($(".product__chosen .autocomplete-product").length) {
    input.parent().hide();
    $(".product__chosen").show();
    // }
  });
  
  $(".product__chosen-add").on("click", function () {
    var container = $(".ui-autocomplete");
    input.parent().show();
    // input.parent().css({height: "0", visibility: "hidden", marginBottom: "0"});
    // input.autocomplete("search", "");
    // container.insertAfter(".product__chosen");
    // container.css({display: "block", position: "static"});
  });

  // $(document).on("click", ".product__choose-marked", function() {
  //   $(this).closest(".ui-autocomplete").siblings("input#search-specialist").remove();
  //   $(this).closest(".ui-autocomplete").remove();

  // })

  var input = $("#search-specialist");
  if (!navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    $(document).on("click", ".ui-autocomplete-wrapper", function (e) {
      input.prop("readonly", true);
    });
    $(document).on("click", "#search-specialist", function () {
      input.prop("readonly", false);
    });
  }

  $("main").scroll(function () {
    if ($(".ui-autocomplete").is(":visible")) {
      if ($(this).scrollTop() > 100) {
        $("input#search-specialist").blur();
        $(".ui-autocomplete").css("display", "none");
        $("input#search-specialist").val("");
      }
    }
  });
}
