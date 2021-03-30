$(document).ready(onDocumentReady);

function onDocumentReady() {
  //today button sets the date
  $.datepicker._gotoToday = function (id) {
    var inst = this._getInst($(id)[0]);

    var date = new Date();
    this._selectDay(
      id,
      date.getMonth(),
      date.getFullYear(),
      inst.dpDiv.find("td.ui-datepicker-today")
    );
    changeTextWidth();
  };

  // Don't hide the date picker when clicking a date
  $.datepicker._selectDateOverload = $.datepicker._selectDate;
  $.datepicker._selectDate = function (id, dateStr) {
    var target = $(id);
    var inst = this._getInst(target[0]);
    inst.inline = true;
    $.datepicker._selectDateOverload(id, dateStr);
    inst.inline = false;
    this._updateDatepicker(inst);
  };

  $("select")
    .not(".js_ignore_mark")
    .select2()
    .on("select2:open", function () {
      $(this)
        .next(".select2-container")
        .find(".select2-selection__arrow b")
        .addClass("rotate");
    })
    .on("select2:close", function () {
      $(this)
        .next(".select2-container")
        .find(".select2-selection__arrow b")
        .removeClass("rotate");
    });

  var dropdownWidth;
  var searchValue;
  $(".search-panel__select")
    .not(".js_ignore_mark")
    .select2({
      multiple: false,
      // maximumSelectionLength: 2,
      placeholder: "Pasirinkite vietą paieškai",
      dropdownCssClass: "select2-dropdown--controls",
      dropdownParent: $(".search-container__select"),
      minimumResultsForSearch: Infinity,
      templateResult: hideSelected,
    })
    .on("select2:open", function (e) {
      dropdownWidth =
        parseInt(
          document.querySelector(".select2-dropdown--controls").style.width
        ) +
        1 +
        "px";
      $(".select2-results").css("width", dropdownWidth);
      searchValue = $(
        ".search-container--controls .select2-search__field"
      ).val();
    })
    .on("select2:select", function (e) {
      $(this)
        .siblings()
        .find(".select2-search")
        .css("caret-color", "transparent");
      $(this).siblings().find(".select2-search__field").val("");
      if (
        $(this).siblings().find(".select2-selection__rendered").find("li")
          .length > 0
      ) {
        $(this)
          .siblings()
          .find(".select2-search__field")
          .on("keydown", function (e) {
            if (
              e.keyCode == 8 ||
              e.keyCode == 46 ||
              $(this)
                .parent()
                .siblings(".select2-selection__rendered")
                .find("li").length == 0
            ) {
              return true;
            } else {
              return false;
            }
          });
      } else {
        $(this)
          .siblings()
          .find(".select2-search__field")
          .on("keydown", function (e) {
            return true;
          });
      }

      if ($(".search-panel input").val().length) {
        $(".search-container__submit").find("span").html("Valyti");
        $(".search-container__submit").addClass("change-search-icon");
      }
    })
    .on("select2:unselect", function () {
      $(this).siblings().find(".select2-search").css("caret-color", "inherit");
    })
    .on("select2:closing", function (e) {
      searchValue = $(".select2-search__field").val();
    })
    .on("select2:close", function (e) {
      $(this).siblings().find(".select2-search__field").val(searchValue);
    });

  if ($("main.hasUiAutocomplete").length > 0) {
    $(".search-container__submit")
      .not(".js_ignore_mark")
      .unbind("click")
      .click(function () {
        $(".ui-autocomplete").fadeOut(300);
        if (
          ($("input#search-product").length &&
            $("input#search-product").val().length) ||
          $(".search-panel input").val().length
        ) {
          if ($(this).find("span").html() == "Ieškoti") {
            $(this).find("span").html("Valyti");
            $(this).addClass("change-search-icon");
            // if (!$("main.hasTable").length > 0) {
            //   $(".search-clean").css("display", "flex");
            // }
          } else {
            $(this).find("span").html("Ieškoti");
            $(".product-header-chosen").fadeOut(300);
            $("input#search-product").fadeIn(300);
          }
        }
        if ($(this).find("span").html() == "Ieškoti") {
          $("input#search-product").val("");
          $(".search-panel input").val("");
          $(this).removeClass("change-search-icon");
        }
      });

    $("input#search, input#search-product")
      .not(".js_ignore_mark")
      .on("keydown", function search(e) {
        if (e.keyCode == 13) {
          $(".ui-autocomplete").fadeOut(300);
          $(".search-container__submit").find("span").html("Valyti");
          $(".search-container__submit").addClass("change-search-icon");
        }
      });

    // autocomplete results width fix
    jQuery.ui.autocomplete.prototype._resizeMenu = function () {
      this.menu.element.css("width", this.element.outerWidth());
    };
  }

  if ($("main.hasUiDatepicker").length > 0) {
    var Event = function (text) {
      this.text = text;
    };
    var eventDates = {};
    eventDates[new Date("12/31/2020")] = new Event("Event01");
    eventDates[new Date("01/12/2021")] = new Event("Event02");
    eventDates[new Date("01/28/2021")] = new Event("Event02");

    var availableDates = {};
    availableDates[new Date("01/05/2021")] = new Date("01/05/2021");
    availableDates[new Date("01/12/2021")] = new Date("01/12/2021");
    availableDates[new Date("01/13/2021")] = new Date("01/13/2021");

    $(".js-datepicker")
      .not(".js_ignore_mark")
      .datepicker({
        showButtonPanel: true,
        orientation: "bottom",
        buttonText: "Pasirinkti",
        minDate: "+0",
        defaultDate: "+1",
        dateFormat: "yy M dd",
        monthNamesShort: [
          "Sausio",
          "Vasario",
          "Kovo",
          "Balandžio",
          "Gegužės",
          "Birželio",
          "Liepos",
          "Rugpjūčio",
          "Rugsėjo",
          "Spalio",
          "Lapkričio",
          "Gruodžio",
        ],
        onSelect: function (date, inst) {
          var event =
            eventDates[
              new Date(inst.selectedYear, inst.selectedMonth, inst.selectedDay)
            ];
          if (event) {
            var selectedDate = $(".ui-datepicker-current-day");
            popup.show(300);
          }
          changeTextWidth();

          //main input sets date of all inputs, persons' inputs don't change main input
          var getDate = $(".product__nav-input:first").val();
          var getDate2 = $(this).val();
          $(".product__nav-input").datepicker("setDate", getDate);
          $(this).datepicker("setDate", getDate2);
          $(this).blur();
        },

        beforeShowDay: function (date) {
          var available = availableDates[date];
          var highlight = eventDates[date];
          if (available && highlight) {
            return [
              true,
              "ui-datepicker-available ui-datepicker-highlight",
              "",
            ];
          } else if (highlight) {
            return [true, "ui-datepicker-highlight", ""];
          } else if (available) {
            return [true, "ui-datepicker-available", ""];
          } else {
            return [true, "", ""];
          }
        },
        beforeShow: function (input, inst) {
          var offsetHeight = $(".product__list").offset();
          var offsetLeft = $(this).closest(".product__nav").offset();
          window.setTimeout(function () {
            if (window.matchMedia("(max-width: 600px)").matches) {
              $(inst.dpDiv).css({
                left: "50%",
                transform: "translateX(-50%)",
              });
            } else {
              $(inst.dpDiv).css({
                top: offsetHeight.top + "px",
                left: offsetLeft.left + "px",
                transform: "translateX(0)",
              });
            }
          }, 1);
        },
      });

    $(".product__nav-input")
      .not(".js_ignore_mark")
      .datepicker({
        showButtonPanel: true,
        orientation: "bottom",
        buttonText: "Pasirinkti",
        minDate: "+0",
        defaultDate: "+1",
        dateFormat: "yy M dd",
        monthNamesShort: [
          "Sausio",
          "Vasario",
          "Kovo",
          "Balandžio",
          "Gegužės",
          "Birželio",
          "Liepos",
          "Rugpjūčio",
          "Rugsėjo",
          "Spalio",
          "Lapkričio",
          "Gruodžio",
        ],

        onSelect: function (date, inst) {
          var event =
            eventDates[
              new Date(inst.selectedYear, inst.selectedMonth, inst.selectedDay)
            ];
          if (event) {
            var selectedDate = $(".ui-datepicker-current-day");
            popup.show(300);
          }
          changeTextWidth();

          //main input sets date of all inputs, persons' inputs don't change main input
          var getDate = $(".product__nav-input:first").val();
          var getDate2 = $(this).val();
          $(".product__nav-input").datepicker("setDate", getDate);
          $(this).datepicker("setDate", getDate2);
          $(this).blur();
        },

        beforeShowDay: function (date) {
          var highlight = eventDates[date];
          if (highlight) {
            return [true, "ui-datepicker-highlight", ""];
          } else {
            return [true, "", ""];
          }
        },
        beforeShow: function () {
          var position = $(this).closest(".product__nav");

          window.setTimeout(function () {
            $("#ui-datepicker-div").position({
              my: "left top",
              at: "left bottom",
              of: position,
            });
          }, 1);
        },
      })
      .datepicker("setDate", "+0");

    var popup = $(
      "<div class='ui-datepicker-popup'><div class='ui-datepicker-popup__header'>" +
        "<h3 class='ui-datepicker-popup__time'>" +
        "17:30 - 20:00" +
        "</h3>" +
        "<div class='ui-datepicker-popup__place'><h4>" +
        "East Islan SPA centras" +
        "</h4>" +
        "<p>" +
        "M. Valančiaus g. 23, Kaunas" +
        "</p></div>" +
        "<button class='ui-datepicker-popup__close'></button>" +
        "</div><ul>" +
        "<li class='autocomplete-product'><span class='autocomplete-product-title autocomplete-product-title--main'>" +
        "Moterų kirpimas" +
        "</span><span class='autocomplete-product-duration'>" +
        "01:00" +
        "</span><span class='autocomplete-product-price'>" +
        "45€" +
        "<strike>" +
        "60€" +
        "</strike></span></li>" +
        "<li class='autocomplete-product'><span class='autocomplete-product-title autocomplete-product-title--main'>" +
        `Plaukų atstatymo procedūra su "Nashi argan deep infusion" 
    su kauke` +
        "</span><span class='autocomplete-product-title autocomplete-product-title--sub'>" +
        "Trumpi plaukai" +
        "</span>" +
        "<span class='autocomplete-product-duration'>" +
        "01:00" +
        "</span><span class='autocomplete-product-price'>" +
        "45€" +
        "<strike>" +
        "60€" +
        "</strike></span></li>" +
        "</ul>" +
        "</div>"
    );
    $(popup).appendTo("body");
    $(".ui-datepicker-popup__close")
      .not(".js_ignore_mark")
      .on("click", function () {
        $(popup).fadeOut(300);
      });

    $(".product__nav-icon")
      .not(".js_ignore_mark")
      .unbind("click")
      .click(function () {
        $(this).next(".product__nav-input").datepicker("show");
      });

    //prevent ios from scrolling to input
    document
      .querySelector(".js-datepicker:not(.js_ignore_mark)")
      .addEventListener("focus", (e) => {
        e.preventDefault();
        setTimeout(() => {
          window.scroll(0, 100);
        }, 0);
      });

    $(".product__nav-button--next")
      .not(".js_ignore_mark")
      .on("click", function () {
        var date = $(".product__nav-input").datepicker("getDate");
        if (window.matchMedia("(max-width: 600px)").matches) {
          date.setDate(date.getDate() + 1);
        } else {
          date.setDate(date.getDate() + 7);
        }
        $(".product__nav-input")
          .not(".js_ignore_mark")
          .datepicker("setDate", date);

        changeTextWidth();
      });

    $(".product__nav-button--prev")
      .not(".js_ignore_mark")
      .on("click", function () {
        var date = $(".product__nav-input").datepicker("getDate");
        if (window.matchMedia("(max-width: 600px)").matches) {
          date.setDate(date.getDate() - 1);
        } else {
          date.setDate(date.getDate() - 7);
        }
        $(".product__nav-input").datepicker("setDate", date);

        changeTextWidth();
      });

    $(window).scroll(function () {
      if (
        $(this).scrollTop() >
        $("#ui-datepicker-div").not(".js_ignore_mark").offset().top +
          $("#ui-datepicker-div").not(".js_ignore_mark").height()
      ) {
        $(".product__nav-input").not(".js_ignore_mark").datepicker("hide");
      }
    });
  }

  if ($("main.hasTable").length > 0) {
    $(".search-container__submit")
      .not(".js_ignore_mark")
      .unbind("click")
      .click(function (e) {
        if ($(this).find("span").html() == "Valyti") {
          $(".search-panel__select").val("").trigger("change");
          // $(
          //   ".search-container__select .select2-selection__choice__remove"
          // ).trigger("click");
          $(this).find("span").html("Ieškoti");
          $(this).removeClass("change-search-icon");
          $(".search-panel input").val("");
          $(".search-panel__select").select2("close");

          $(this).find("span").html("Ieškoti");
          $(this).removeClass("change-search-icon");
        } else {
          e.preventDefault();
          // $(".search-container__select .select2-search__field").val("");
          if (
            $(".search-panel__select").val() &&
            $(".search-panel input").length
          ) {
            $(this).find("span").html("Valyti");
            $(this).addClass("change-search-icon");
          } else {
            $(".search-panel__select").select2("open");
          }

          // if (
          //   !$(
          //     ".search-container__select .select2-selection__rendered"
          //   ).children().length
          // ) {
          //   $(".search-panel__select").select2("open");
          //   $(this).find("span").html("Ieškoti");
          //   $(this).removeClass("change-search-icon");
          // } else {
          //   $(".search-container__submit").find("span").html("Valyti");
          //   $(".search-container__submit").addClass("change-search-icon");
          //   $(".search-panel__select").select2("close");
          // }
        }
      });

    tableHeight();
    changeRowWidth();
    getMaxHeight();
    $(window).resize(function () {
      setTimeout(function () {
        tableHeight();
        changeRowWidth();
        getMaxHeight();
      }, 100);
    });
  }

  $(".site-aside__filters .js-dropdown-placeholder")
    .not(".js_ignore_mark")
    .select2({
      minimumResultsForSearch: Infinity,
      placeholder: "Pasirinkti",
      allowClear: true,
      dropdownCssClass: "select2-dropdown--controls-side",
    });

  $(".checkbox-wrapper>.checkbox input, .checkbox-wrapper>.radio input")
    .not(".js_ignore_mark")
    .on("change", function () {
      $(this).closest(".checkbox-wrapper").toggleClass("toggled");
    });

  $(".checkbox-wrapper .radio input")
    .not(".js_ignore_mark")
    .on("change", function () {
      $(this)
        .closest(".checkbox-wrapper")
        .siblings()
        .find("input")
        .prop("checked", false);
      if ($(this).closest(".checkbox-children").length > 0) {
        $(this)
          .closest(".checkbox-wrapper")
          .find(".radio input")
          .first()
          .prop("checked", true);
      }
    });

  $(".site-header .site-header__item--search, .search-container__close")
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      $(".search-container").toggleClass("search-container--toggled");
      $(".site-header").toggleClass("hidden-visibility");
      window.setTimeout(function () {
        $("#search-product").focus();
      }, 100);
      if (
        !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
          navigator.userAgent
        )
      ) {
        $("html").toggleClass("toggle-scroll");
        $("main").toggleClass("toggle-scroll-page force-show-scrollbars");
      }

      if ($(".search-container").css("visibility") === "visible") {
        $(".goto-top").css("right", "40px");
      } else {
        var right = 1 + areScrollbarsVisible();
        $(".goto-top").css("right", "+=" + right);
      }

      if ($(this).hasClass("search-container__close")) {
        $("input#search-product").css("display", "block");
        $("input#search-product").val("");
        $(".search-panel input").val("");
        $(".ui-autocomplete").css("display", "none");
        $(".product-header-chosen").remove();
        $(".search-panel__select").val(null).trigger("change");
        $(".search-container__submit span").html("Ieškoti");
        $(".search-container__submit").removeClass("change-search-icon");
      }

      if ($(this).hasClass("site-header__item--search")) {
        $(
          '<span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>'
        ).appendTo(".select2-selection--multiple");

        // $(".search-container--controls .select2-search__field").prop("disabled", true);
        $(".search-container--controls .select2-search__field").addClass(
          "hide-disabled-gray"
        );
      }
    });

  $(".venue__slider").not(".slick-initialized").not(".js_ignore_mark").slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    // slides
  });
  $(".venue__description-more")
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      $(this)
        .closest(".venue__description")
        .addClass("venue__description--visible");
    });

  $(".calendar__more-button")
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      var times = $(this)
        .closest(".calendar")
        .children(".calendar__more-times");
      times.removeClass("calendar__more-times--hidden");
      $(this).removeClass("calendar__more-button");
      $(this).html("09:15");
    });

  $(".site-aside__block input")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(".search-clean").css("display", "flex");
    });

  $(".site-aside__item select")
    .not(".js_ignore_mark")
    .on("select2:select", function (e) {
      $(".search-clean").css("display", "flex");
      $(this).next(".select2").find("b").removeClass("rotate");
    });

  $(".search-clean")
    .not(".js_ignore_mark")
    .on("click", function () {
      $("#city").val($("#city option:first-child").val()).trigger("change");
      $("#time").val($("#time option:first-child").val()).trigger("change");
      $(".search-container__submit span").html("Ieškoti");
      $(".search-container__submit").removeClass("change-search-icon");
      $(".product-header-chosen").remove();
      $("#search-product").css("display", "block");
      $(".site-aside__block input").prop("checked", false);
      $("#distance_asc").prop("checked", true);
      $(".search-panel__select").val(null).trigger("change");
      $(this).fadeOut(300);
    });

  if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    )
  ) {
    $(".search-clean").css("left", "50%");
  }

  $(".breadcrumbs__change")
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      $(".breadcrumbs__more").toggleClass("breadcrumbs__more--toggled");
      $(this).toggleClass("rotate");
    });

  var likeBtn = $(".product__block-like");

  likeBtn
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      var like = $(this)
        .closest(".product__block-top")
        .find(".product__block-like-status");
      var product = $(this).closest(".product__block");

      like.toggleClass("hidden");
      $(this).toggleClass(
        "product__block-like--active product__block-like--greyed-out"
      );

      if ($(this).hasClass("product__block-like--active")) {
        var parent = $(".product__block-like--greyed-out:last").closest(
          ".product__block"
        );
        $(product).insertAfter(parent);
      } else {
        product.parent().prepend(product);
      }
    });

  var hamburgerBtn = $(".site-header__hamburger");

  hamburgerBtn
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      $(".site-aside-container").addClass("site-aside-container--toggled");
    });

  $(document).on("click", ":not(.js_ignore_mark)", function (event) {
    //if you click on anything except the menu or the hamburger menu, close the menu
    if (
      !$(event.target).closest(
        ".site-aside,.site-header__hamburger,.select2-search, button.ui-state-default"
      ).length
    ) {
      $("body")
        .find(".site-aside-container")
        .removeClass("site-aside-container--toggled");
    }
  });

  var timer_id;
  $(window).resize(function () {
    clearTimeout(timer_id);
    timer_id = setTimeout(function () {
      moveAction();
      moveOrder();
      changeTextWidth();
      changePadding();
      paymentLayout();
      var field = $(document.activeElement);
      if (field.is(".hasDatepicker")) {
        field.datepicker("hide").datepicker("show");
      }
      if ($(".select2-dropdown--controls").length > 0) {
        dropdownWidth =
          parseInt(
            document.querySelector(".select2-dropdown--controls").style.width
          ) +
          1 +
          "px";
      }
      $(".select2-results").css("width", dropdownWidth);
    }, 100);
  });

  $(".goto-top")
    .not(".js_ignore_mark")
    .on("click", function () {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      document.querySelector("main").scrollTop = 0;

      if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
        $("html,body,main").animate({ scrollTop: 0 }, 300);
        return false;
      }
    });

  $(".feature-screen__slides-container")
    .not(".js_ignore_mark")
    .not(".slick-initialized")
    .slick({
      arrows: true,
      dots: true,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 8000,
      appendDots: $(".feature-screen"),
    });

  $("#upload-icon")
    .not(".js_ignore_mark")
    .change(function (e) {
      for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        var file = e.originalEvent.srcElement.files[i];
        var img = document.createElement("img");
        var reader = new FileReader();
        reader.onloadend = function () {
          img.src = reader.result;
        };
        reader.readAsDataURL(file);
        $("#upload-icon").siblings("label").html(img);
        $(img).css("display", "none");
        setTimeout(function () {
          $(".areas__inputs img").css({ display: "unset", height: "20px" });
          $(".areas__inputs img").each(imgToSvg);
        }, 10);
      }
    });

  var color;
  $(".areas__color")
    .not(".js_ignore_mark")
    .each(function (index) {
      color = "#" + $(this).contents().get(0).nodeValue;
      $(this)
        .closest("tr")
        .find(".controls__item")
        .css("background-color", color);
    });

  $(".color-input")
    .not(".js_ignore_mark")
    .on("input click", function () {
      color = "#" + $(this).val();
      var inputs = $(this).closest("tr").find("td input, td label");
      if ($(this).val().length == 0) {
        color = "transparent";
        inputs.each(function () {
          if ($(this).val().length == 0) {
            $(this).removeClass("white-text");
            $(this).css("color", "#8d92a3");
          } else {
            $(this).css("color", "#101b51");
          }
        });
      }
      inputs.css("background-color", color);
      inputs.css(
        "color",
        isDark($(this).css("background-color")) ? "white" : "#101b51"
      );
      if (isDark($(this).css("background-color"))) {
        $(this).closest("tr").find("td input").addClass("white-text");
        $(".controls__item--profession").css("color", "#fff");
      }

      $(".controls__item--profession").css("background-color", color);
    });

  $(".languages li")
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      $(this).addClass("active");
      $(this).siblings().removeClass("active");
    });

  $(".controls__table .controls__item")
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      $(this).addClass("changed-bg");
      $(this)
        .closest(".controls__area")
        .siblings()
        .find(".controls__item")
        .removeClass("changed-bg");
      $(this).find("label").css("color", "unset");
      if ($(this).closest(".areas__table").hasClass("areas__table--main")) {
        $(this)
          .parent()
          .siblings()
          .find(".controls__item")
          .addClass("changed-bg");
        if ($(this).closest(".areas__inputs")) {
          $(this)
            .closest(".areas__inputs")
            .children()
            .children()
            .removeClass("changed-bg");
          $(this)
            .closest(".areas__inputs")
            .siblings()
            .find(".controls__item")
            .removeClass("changed-bg");
        }

        $(".controls__item--profession").css(
          "background-color",
          "#" +
            $(this).closest("tr").find(".areas__color").contents().get(0)
              .nodeValue
        );
      }
      // }
      if ($(this).closest(".services__table")) {
        $(this)
          .closest(".services__table")
          .next(".services__table")
          .find("tbody, tfoot")
          .removeClass("hidden");
      }

      if ($(this).closest(".services__table")) {
        $(".areas__table--menu tbody").removeClass("hidden");
        // $(".areas__table--main tbody tr td").removeClass("hidden-visibility");
      }
    });

  $(document).on(
    "input",
    "textarea[name='product-description']:not(.js_ignore_mark)",
    function () {
      $(this).css("height", "5px");
      $(this).css("height", $(this).prop("scrollHeight"));
    }
  );

  $(".controls__item--service-title")
    .not(".js_ignore_mark")
    .on("input", function () {
      if (!$(this).prop("checked")) {
        $(this)
          .closest("table")
          .next("table")
          .find(".controls__item input")
          .prop("checked", false);
      }
    });

  $(".feature-screen__slides-container")
    .not(".js_ignore_mark")
    .not(".slick-initialized")
    .slick({
      arrows: true,
      dots: true,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 8000,
      appendDots: $(".feature-screen"),
      adaptiveHeight: true,
    });

  $('.areas__area img[src$=".svg"]')
    .not(".js_ignore_mark")
    .each(imgToSvg)
    .css("fill", "#101b51");

  $(".site-aside__datepicker")
    .not(".js_ignore_mark")
    .datepicker({
      showButtonPanel: true,
      orientation: "bottom",
      appendTo: ".site-aside__datepicker-container",
      beforeShow: function (input, inst) {
        $("#ui-datepicker-div").addClass("ui-datepicker--filters");
        window.setTimeout(function () {
          $("#ui-datepicker-div").position({
            my: "top",
            at: "bottom",
            of: input,
          });
          inst.dpDiv.css({
            left: "0",
          });
        }, 1);
      },
    });

  var $group = $(
    '<div class="company__info">\
  <h3>Grupė</h3>\
  <div class="company__inputs-container company__inputs-group-owner">\
    <div class="input-container">\
      <input type="text" class="group-name" name="group-name" placeholder="Grupės pavadinimas">\
      <span class="input-icon"></span>\
      </div>\
    </div>\
  </div>'
  );

  $("button.js-create-company")
    .not(".js_ignore_mark")
    .one("click", function () {
      $(".company__group").removeClass("hidden").append($group);
      $(".company__header--main h2").html("GRUPĖS PAVADINIMAS");
    });

  $("input.company-name")
    .not(".js_ignore_mark")
    .on("input", function () {
      if ($("input.group-name").length == 0) {
        $(".company__header h2").html($("input.company-name").val());
        if ($("input.company-name").val().length == 0) {
          $(".company__header h2").html("Pavadinimas");
        }
      }
    });

  var companyName = $("input[name='company']:checked").next("label").html();
  $(".company__header--company h2").html(companyName);

  $("input[name='company']")
    .not(".js_ignore_mark")
    .on("change", function () {
      companyName = $(this).next("label").html();
      $(".company__header--company h2").html(companyName);
    });

  var count = 1;
  $(document).on(
    "click",
    "button.js-create-company:not(.js_ignore_mark)",
    function () {
      count += 1;
      var $company = $(
        '<div class="company__item"> \
    <h3>' +
          count +
          ' Įmonė</h3> \
        <div class="company__inputs-container company__inputs-companies">\
        <div class="input-container input-container--company">\
            <input type="text" class="company-name" name="title" placeholder="Įmonės pavadinimas">\
            <span class="input-icon"></span>\
        </div>\
        <select class="company__select">\
            <option></option>\
            <option data-image="../img/icons/clinic.svg">Klinikos ir estetinė medicina</option>\
            <option data-image="../img/icons/odontology.svg">Odontologijos klinikos</option>\
            <option data-image="../img/icons/beauty.svg">Grožio salonai ir kirpyklos</option>\
            <option data-image="../img/icons/spa.svg">SPA ir masažo salonai</option>\
            <option data-image="../img/icons/sport.svg">Sportas ir reabilitacija</option>\
            <option data-image="../img/icons/vet.svg">Veterinarijos klinikos</option>\
        </select>\
    </div>\
    <div class="company__buttons">\
    <button class="company__trash"></button>\
    <button class="js-create-company company__create-company"></button>\
    </div>\
</div>'
      );
      $(this).closest(".company__items").append($company);

      $(".company__select").select2({
        templateResult: formatOpt,
        templateSelection: formatOpt,
        minimumResultsForSearch: Infinity,
        placeholder:
          "<img src='../img/icons/clinic.svg' class='select-icons'>\
        <img src='../img/icons/odontology.svg' class='select-icons'>\
        <img src='../img/icons/beauty.svg' class='select-icons'>\
        <img src='../img/icons/spa.svg' class='select-icons'>\
        <img src='../img/icons/sport.svg' class='select-icons'>\
        <img src='../img/icons/vet.svg' class='select-icons'>",
        escapeMarkup: function (markup) {
          return markup;
        },
      });
      if ($("input.group-name").length > 0) {
        $(document).on("input", "input.group-name", function () {
          $(".company__header h2").html($("input.group-name").val());
          if ($("input.group-name").val().length == 0) {
            $(".company__header--main h2").html("GRUPĖS PAVADINIMAS");
          }
        });
      }
    }
  );

  $(".company__select")
    .not(".js_ignore_mark")
    .select2({
      templateResult: formatOpt,
      templateSelection: formatOpt,
      minimumResultsForSearch: Infinity,
      placeholder:
        "<img src='../img/icons/clinic.svg' class='select-icons'>\
    <img src='../img/icons/odontology.svg' class='select-icons'>\
    <img src='../img/icons/beauty.svg' class='select-icons'>\
    <img src='../img/icons/spa.svg' class='select-icons'>\
    <img src='../img/icons/sport.svg' class='select-icons'>\
    <img src='../img/icons/vet.svg' class='select-icons'>",
      escapeMarkup: function (markup) {
        return markup;
      },
    });

  $(".company__select-city").not(".js_ignore_mark").select2({
    placeholder: "Miestas",
    minimumResultsForSearch: Infinity,
  });
  $(".company__select-neighborhood").not(".js_ignore_mark").select2({
    placeholder: "Mikrorajonas",
    minimumResultsForSearch: Infinity,
  });

  $("input[type='number']")
    .not(".js_ignore_mark")
    .on("input", function () {
      $(this).val($(this).val().replace(/[^\d]/g, ""));
      var maxLength = $(this).attr("length");
      if ($(this).val().length > maxLength) {
        this.value = this.value.slice(0, this.maxLength);
      } else if ($(this).val().length == maxLength) {
        if ($(this).attr("name") == "hour") {
          $(this).siblings("input").focus().select();
        }
      }
    });
  $(".time-inputs input[type='number']")
    .not(".js_ignore_mark")
    .on("blur", function () {
      if (this.value.length == 1) {
        this.value = "0" + this.value;
      }
    });

  $(".time-inputs input[name='minute']")
    .not(".js_ignore_mark")
    .on("click", function () {
      if ($(this).siblings("input[name='hour']").val().length == 0) {
        $(this).blur();
        $(this).siblings("input[name='hour']").focus().select();
      }
    });

  var isSortable = true;
  $("button.switch-image")
    .not(".js_ignore_mark")
    .on("click", function () {
      if (isSortable) {
        $(this)
          .siblings(".sortable")
          .sortable({
            tolerance: "pointer",
            helper: "clone",
            sort: function (event, ui) {
              var $target = $(event.target);
              if (!/html|body/i.test($target.offsetParent()[0].tagName)) {
                var top =
                  event.pageY -
                  $target.offsetParent().offset().top -
                  ui.helper.outerHeight(true) / 2;
                ui.helper.css({ top: top + "px" });
              }
            },
          });
        $(".sortable").disableSelection();
        isSortable = false;
      } else {
        $(this).siblings(".sortable").sortable("disable");
        isSortable = true;
      }
    });

  $(document)
    .on("click", ".company__specialist-activate:not(.js_ignore_mark)", function () {
      if ($(this).html() == "Deaktyvuoti") {
        $(this).html("Aktyvuoti");
        $(this).addClass("transparent");
      } else {
        $(this).html("Deaktyvuoti");
        $(this).removeClass("transparent");
      }
    });

  $(document)
    .on("click", ".company__button-order:not(.js_ignore_mark)", function () {
      $(this).toggleClass("transparent");
      // $(this).siblings("button").toggleClass("transparent");
      if ($(this).hasClass("transparent")) {
        $(this).html("Galima rezervuoti tik telefonu arba atvykus į vietą");
      } else {
        $(this).html("Galima rezervuoti online");
      }
    });

  $(".more-button")
    .not(".js_ignore_mark")
    .on("click", function () {
      if ($(this).html() == "Plačiau") {
        $(this).html("Uždaryti");
      } else {
        $(this).html("Plačiau");
      }
      $(this).parent().siblings(".more-description").toggleClass("hidden");
    });

  $("input[name='before-discount'], input[name='after-discount']")
    .not(".js_ignore_mark")
    .on("click", function () {
      var lastChar = $(this).val().substr(-1);
      if (
        lastChar == "€" &&
        $(this).prop("selectionStart") == $(this).val().length
      ) {
        $(this).prop("selectionStart", $(this).val().length - 1);
        $(this).prop("selectionEnd", $(this).val().length - 1);
      }
    })
    .on("input", function () {
      if ($(this).val().indexOf("€") > 0) {
        $(this).val(
          $(this)
            .val()
            .substr(0, $(this).val().indexOf("€") + 1)
        );
      }
      $(this).val(
        $(this)
          .val()
          .replace(/[^\d€]/g, "")
      );
    });

  $("input[name='after-discount'")
    .not(".js_ignore_mark")
    .on("input", function () {
      if (parseInt($(this).val(), 10) > 0) {
        $(this)
          .siblings("input[name='before-discount']")
          .prop("readonly", true)
          .css({ color: "#fec288", "text-decoration": "line-through" });
      } else {
        $(this)
          .siblings("input[name='before-discount']")
          .prop("readonly", false)
          .css({ color: "#5999b4", "text-decoration": "none" });
      }
      if (
        parseInt($(this).val(), 10) >
        parseInt($(this).siblings("input[name='before-discount']").val(), 10)
      ) {
        $(this).val($(this).siblings("input[name='before-discount']").val());
      }
      // var lastChar = $(this).val().substr(-1);
      // if (lastChar == "€") {
      //   $(this).prop('selectionStart', 2)
      // }
    });

  $(document).on("click", ".product-expand:not(.js_ignore_mark)", function () {
    $(this).toggleClass("rotate-arrow");
    $(this).siblings(".product-choice").toggleClass("hidden");
  });

  $(".number-up")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).parent().siblings("input")[0].stepUp();
    });

  $(".number-down")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).parent().siblings("input")[0].stepDown();
    });

  // $(".payment-plan th:empty").on("click", function () {
  //   var checkbox = $(this)
  //     .closest(".payment-plan")
  //     .find("input[type='radio']");
  //   checkbox.prop("checked", false);
  // });

  //default plan selected
  $(".payment-plan__info")
    .find("td:nth-child(2), th:nth-child(2)")
    .addClass("active");
  $(".payment-plan__info table > tbody > tr:last-child")
    .find("td:nth-child(2)")
    .addClass("active-last");

  $(".payment-plan__info td, .payment-plan__info th")
    .not(".js_ignore_mark")
    .on("click", function () {
      var index = $(this).index() + 1;
      var column = $(this)
        .closest(".payment-plan__info")
        .find("td:nth-child(" + index + "), th:nth-child(" + index + ")");
      if (index > 1) {
        column.siblings().removeClass("active").removeClass("active-last");
        column.addClass("active");
        column.last().addClass("active-last");
      }
    });

  $(".services-list__aside .radio input[name='service[]']")
    .not(".js_ignore_mark")
    .on("change", function () {
      $(".services-list__blocks").removeClass("hidden");

      if (window.matchMedia("(max-width: 991px)").matches) {
        $(".services-list__blocks").insertAfter($(this).closest(".radio"));
      }
    });

  $("input[type='number']")
    .not(".js_ignore_mark")
    .on("input", function () {
      var inputValue = parseInt($(this).val());
      var max = parseInt($(this).attr("max"));
      var min = parseInt($(this).attr("min"));
      if (inputValue > max) {
        $(this).val(max);
      } else if (inputValue < min) {
        $(this).val(min);
      }
    });

  $(".discount-inputs input")
    .not(".js_ignore_mark")
    .on("change", function () {
      if ($(this).val().indexOf("€") <= -1 && $(this).val() != "") {
        $(this).val($(this).val() + "€");
      }
    });

  $("span.more-button")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).toggleClass("rotate-arr");

      if ($(this).closest(".company__services-block--choices").length > 0) {
        $(this)
          .closest(".company__services-block--choices")
          .find(".product-choice")
          .removeClass("hidden");
        $(this)
          .closest(".company__services-block--choices")
          .find(".product-expand")
          .addClass("rotate-arrow");
      }
    });

  $(document).on(
    "click",
    ".warning-popup-container:not(.js_ignore_mark)",
    function (e) {
      if (
        !$(e.target).closest(".warning-popup").length ||
        $(e.target).hasClass("warning-popup__close")
      ) {
        $(this).fadeOut(300);
      }
    }
  );

  $(".services-list__features input[name='feature']")
    .not(".js_ignore_mark")
    .on("change", function () {
      $(this)
        .closest(".services-list__features")
        .find("input, select")
        .prop(
          "disabled",
          !$(this)
            .closest(".services-list__features")
            .find("input")
            .attr("disabled")
        );
      if (
        !parseInt($("input[name='before-discount']").val()) ||
        parseInt($("input[name='before-discount']").val()) == 0
      ) {
        $(this)
          .closest(".services-list__features")
          .find("input[name='after-discount']")
          .prop("disabled", true);
      }
      $(this).prop("disabled", false);
      $(this)
        .closest(".services-list__features")
        .find(".time-inputs")
        .toggleClass("disabled");

      var block = $(this).closest(".services-list__block");
      if ($(this).prop("checked")) {
        $(".services-list__notice").after(block);
      } else if (block.hasClass("services-list__block--choices")) {
        //if all choices are unchecked
        if (
          $(this)
            .closest(".product-choice")
            .siblings()
            .find("input[name='feature']:checked").length == 0
        ) {
          $(".services-list__features input[name='feature']:checked")
            .last()
            .closest(".services-list__block")
            .after(block);
        }
      } else {
        $(".services-list__features input[name='feature']:checked")
          .last()
          .closest(".services-list__block")
          .after(block);
      }
    });

  $(".services-list__features input[name='before-discount']")
    .not(".js_ignore_mark")
    .on("input", function () {
      if (parseInt($(this).val()) > 0) {
        $(this)
          .siblings("input[name='after-discount']")
          .prop("disabled", false);
      }
    });

  $(".payment-plan__info").css("display", "none");
  $("input[name='plan'], ~ label, .payment-plan th:empty")
    .not(".js_ignore_mark")
    .on("click", function () {
      var $self = $(this).closest(".payment-plan").find("input[name='plan']");
      if ($self.attr("checkstate") == "true") {
        $self.prop("checked", false);
        $self.each(function () {
          $self.attr("checkstate", "false");
        });
        clearTimeout(timer_id);
        timer_id = setTimeout(function () {
          $self.each(function () {
            $(this).siblings(".payment-plan__info").css({ display: "none" });
            $(this).closest(".payment-plan").siblings().find(".payment-plan__info").css("display", "none")
          });
        }, 300);
      } else {
        $self.prop("checked", true);
        $self
          .siblings(".payment-plan__info")
          .find("input")
          .prop("checked", false);
        // $self
          // .siblings(".payment-plan__info")
          // .find("input[data-name='Mini'], input#Mini")
          // .prop("checked", true);
        $self.attr("checkstate", "true");
        $self.siblings(".payment-plan__info").css({ display: "block" });
        $self.closest(".payment-plan").siblings().find(".payment-plan__info").css("display", "none")
        $("input[name='plan']:not(:checked)").attr("checkstate", "false");
      }
    });  

  // $(".input-container--password-eye > .input-icon").on("click", function() {
  //   $(this).toggleClass("input-icon--toggled-eye");
  //   if ($(this).hasClass("input-icon--toggled-eye")) {
  //     $(this).siblings("input[type='password']").attr("type", "text");
  //   } else {
  //     $(this).siblings("input[type='text']").attr("type", "password");
  //   }
  // })

  if (
    navigator.userAgent.match(
      /Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i
    )
  ) {
    $(".company__header--company").css("width", "calc(100vw - 20px)");
  }

  $("thead th")
    .not(".js_ignore_mark")
    .unbind("click")
    .click(function () {
      if ($(this).hasClass("top-arrow bottom-arrow")) {
        $(this).removeClass("top-arrow");
      } else if ($(this).hasClass("bottom-arrow")) {
        $(this).removeClass("bottom-arrow").addClass("top-arrow");
      } else if ($(this).hasClass("top-arrow")) {
        $(this).addClass("bottom-arrow");
      }
    });

  var countAdmin;
  var countSpecialist = 0;
  var countSpecialistLabel = 0;
  $(document).on("click", ".js-create-admin:not(.js_ignore_mark)", function () {
    countAdmin++;
    newSpecialist($(this), countAdmin);
  });

  $(document).on("click", ".js-create-specialist:not('.js_ignore_mark')", function() {
    countSpecialist++;
    countSpecialistLabel = countSpecialist + 1;
    newSpecialist($(this), countSpecialist, countSpecialistLabel);
  })

  // $(".company__login-search")
  //   .not(".js_ignore_mark")
  //   .each(function () {
  //     var id = $(this).closest(".company__admin").attr("id");
  //     $(this).autocomplete({
  //       source: ["Saulė Braškinienė", "Romas Dimša", "Ramunė Varnaliauskienė"],
  //       appendTo: "#" + id + " .company__login-left",
  //       select: function (event, ui) {
  //         event.stopPropagation();
  //         $(this)
  //           .closest(".company__login-left")
  //           .find(".company__login-photo")
  //           .css("background-image", "url('../img/1.jpg')");
  //       },
  //     });
  //   });

  // $(".company__header--company").on("scroll", function () {
  //   // .css('top', $(window).scrollTop());
  //   $(this)
  //     .find("h2")
  //     .css({
  //       left: $(this).scrollLeft(), //Use it later
  //     });
  // });

  if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    )
  ) {
    $(".company__header--company ul.company__nav").addClass(
      "disable-scrollbars"
    );
    $(".controls__table tbody").addClass("disable-scrollbars");
  }

  $(document).on(
    "click",
    ".payment-plan__more:not(.js_ignore_mark)",
    function () {
      $(".payment-plan__details").removeClass("toggled");
      // $(this).closest(".payment-plan__mobile").find(".payment-plan__details").addClass("toggled");
      // $(this).closest(".payment-plan__mobile").find(".payment-plan__details").addClass("toggled");
      // $(this).closest(".payment-plan__mobile").siblings().find(".payment-plan__details").removeClass("toggled");
      $(".payment-plan__more")
        .html("Plačiau")
        .removeClass("toggled")
        .addClass("untoggled");
      // $(this).html("Uždaryti").removeClass("untoggled").addClass("toggled");
      if (
        $(this)
          .closest(".payment-plan__details-label")
          .siblings(".payment-plan__details")
          .height() > 0
      ) {
        $(this)
          .closest(".payment-plan__details-label")
          .siblings(".payment-plan__details")
          .removeClass("toggled");
        $(this).html("Plačiau");
        $(this).removeClass("toggled").addClass("untoggled");
      } else {
        $(this)
          .closest(".payment-plan__details-label")
          .siblings(".payment-plan__details")
          .addClass("toggled");
        $(this).removeClass("untoggled").addClass("toggled");
        $(this).html("Uždaryti");
      }
    }
  );

  $(document).on(
    "click",
    ".payment-plan__details-label:not(.js_ignore_mark)",
    function () {
      var otherPlans = $(this).closest(".payment-plan__mobile").siblings();
      otherPlans.find(".payment-plan__details").removeClass("toggled");
      otherPlans
        .find(".payment-plan__more")
        .removeClass("toggled")
        .addClass("untoggled")
        .html("Plačiau");
    }
  );

  $(".expand-button")
    .not(".js_ignore_mark")
    // .unbind("click")
    .on("click", function () {
      // $(this)
      //   .closest(".controls")
      //   .find("tbody")
      //   .css({ transition: "height .3s ease-in-out" });
      var interval = setInterval(tableHeight, 0);
      if (!$(this).hasClass("rotate-arr")) {
        $(this)
          .closest(".controls")
          .find(".controls__header")
          .addClass("controls__header--hidden")
          .animate(
            { "max-height": "0" },
            {
              duration: 300,
              complete: function () {
                clearInterval(interval);
              },
            }
          );
      } else {
        $(this)
          .closest(".controls")
          .find(".controls__header")
          .removeClass("controls__header--hidden")
          .animate(
            { "max-height": "300px" },
            {
              duration: 150,
              complete: function () {
                clearInterval(interval);
              },
            }
          );
      }
      $(this).toggleClass("rotate-arr");
    });

  $(".controls__switch")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).toggleClass("controls__switch--active");
      if ($(this).hasClass("controls__switch--active")) {
        $(this).closest("tbody").next("tbody").sortable();
      } else {
        $(this).closest("tbody").next("tbody").sortable("disable");
      }
    });

  $(".search-panel")
    .not(".js_ignore_mark")
    .on("submit", function (e) {
      e.preventDefault();
    });

  $(".search-container--controls .search-panel")
    .not(".js_ignore_mark")
    .on("keydown focusout", function (e) {
      if (e.type == "keydown") {
        if (
          e.keyCode == 13 &&
          !$(
            ".search-container__select .select2-selection__rendered"
          ).children().length
        ) {
          $(".search-panel__select").select2("open");
        } else if (
          e.keyCode == 13 &&
          $(".search-container__select .select2-selection__rendered").children()
            .length
        ) {
          $(".search-container__submit").find("span").html("Valyti");
          $(".search-container__submit").addClass("change-search-icon");
          $(this).find("input").blur();
        }
      }
      // else if(e.type == "focusout") {
      //   if (
      //     !$(
      //       ".search-container__select .select2-selection__rendered"
      //     ).children().length
      //   ) {
      //     $(".search-panel__select").select2("open");
      //   } else if (
      //     $(".search-container__select .select2-selection__rendered").children()
      //       .length
      //   ) {
      //     $(".search-container__submit").find("span").html("Valyti");
      //     $(".search-container__submit").addClass("change-search-icon");
      //     $(this).find("input").blur();
      //   }
      // }
    });

  $("input[name='phone']").not(".js_ignore_mark").on("input", function () {
    $(this).val(
      $(this)
        .val()
        .replace(/[^\d+]/g, "")
    );
  });

  $(".controls__button--activate, .controls__button--deactivate").not(".js_ignore_mark").on("click", function() {
    if ($(this).hasClass("controls__button--activate")) {
      $(this).html("Deaktyvuoti");
      $(this).addClass("controls__button--deactivate").removeClass("controls__button--activate")
    } else {
      $(this).html("Aktyvuoti");
      $(this).addClass("controls__button--activate").removeClass("controls__button--deactivate")

    }
  });

  $(".controls__group-btn").not(".js_ignore_mark").on("click", function() {
    $(this).toggleClass("transparent");
    if($(this).hasClass("controls__group-btn--city")) {
      $(this).html("Išgrupuoti pagal miestus");
      if(!$(this).hasClass("transparent")) {
        $(this).html("Grupuoti pagal miestus")
      }
    } else if($(this).hasClass("controls__group-btn--company")) {
      $(this).html("Išgrupuoti pagal įmonių grupes");
      if(!$(this).hasClass("transparent")) {
        $(this).html("Grupuoti pagal įmonių grupes")
      }
    }
  })

  //if specialist is searched, reveal rights and buttons
  $(document).on("click", ".company__specialist-search:not(.js_ignore_mark)", function() {
    var specialist = $(this).closest(".company__specialist");
    if($(this).siblings("input[name='name']").val().length > 0 && $(this).siblings("input[name='phone']").val().length > 0) {
      specialist.find(".company__specialist-rights, .company__specialist-buttons, .company__specialist-inputs h4, .company__specialist-title").removeClass("hidden");
    } else {
      specialist.find(".company__specialist-rights, .company__specialist-buttons, .company__specialist-inputs h4, .company__specialist-title").addClass("hidden");
    }
  })

  moveAction();
  moveOrder();
  changePadding();
  openTab();
  paymentLayout();
  // tableWidths($(".profiles table"));

  setTimeout(function () {
    changeTextWidth();
  }, 100);

  
  $(document).on("click", ".payment-plan__mobile label:not(.js_ignore_mark)", function() {
    $(this).addClass("active");
    var otherPlans = $(this).closest(".payment-plan__mobile").siblings();
    otherPlans.find("label").removeClass("active");
    otherPlans.find("input").prop("checked", false);
    otherPlans.find(".payment-plan__details").removeClass("toggled");
  })
}

function hideSelected(value) {
  if ($(".select2-selection__rendered").html() != value.text) {
    return $("<span>" + value.text + "</span>");
  }
}

function changeTextWidth() {
  var inputs = $(".product__nav-input").not(".js_ignore_mark");
  for (var i = 0; i < inputs.length; i++) {
    var width = Math.floor(getTextWidth(inputs[i]));
    var widthInPx = width + 3 + "px";
    inputs[i].style.width = widthInPx;
  }
}

function isDark(color) {
  var match = /rgb\((\d+).*?(\d+).*?(\d+)\)/.exec(color);
  return (
    parseFloat(match[1]) + parseFloat(match[2]) + parseFloat(match[3]) <
    (3 * 256) / 2
  ); // r+g+b should be less than half of max (3 * 256)
}
function getTextWidth(el) {
  // uses a cached canvas if available
  var canvas =
    getTextWidth.canvas ||
    (getTextWidth.canvas = document.createElement("canvas"));
  var context = canvas.getContext("2d");
  // get the full font style property
  let style = window.getComputedStyle(el, null);
  let font = style.getPropertyValue("font");
  // var font = window.getComputedStyle(el, null).getPropertyValue("font");
  const fontStyle = style.getPropertyValue("font-style");
  const fontVariant = style.getPropertyValue("font-variant");
  const fontWeight = style.getPropertyValue("font-weight");
  const fontSize = style.getPropertyValue("font-size");
  const fontFamily = style.getPropertyValue("font-family");

  font = (
    fontStyle +
    " " +
    fontVariant +
    " " +
    fontWeight +
    " " +
    fontSize +
    " " +
    fontFamily
  )
    .replace(/ +/g, " ")
    .trim();
  var text = el.value;
  // set the font attr for the canvas text
  context.font = font;
  var textMeasurement = context.measureText(text);
  return textMeasurement.width;
}

function changePadding() {
  var windowWidth = $(window).width();
  var timeWidth = $(".calendar td").width();
  var timePadding;
  var margin =
    ($("div.page-content__wrapper").innerWidth() -
      $("div.page-content__wrapper").width()) /
    2;

  if (window.matchMedia("(max-width: 420px)").matches) {
    timePadding = (windowWidth - 4.5 * timeWidth - margin) / 4;
    $(".calendar td").css("padding-right", timePadding);
  } else if (window.matchMedia("(max-width: 500px)").matches) {
    timePadding = (windowWidth - 5.5 * timeWidth - margin) / 5;
    $(".calendar td").css("padding-right", timePadding);
  } else if (window.matchMedia("(max-width: 600px)").matches) {
    timePadding = (windowWidth - 6.5 * timeWidth - margin) / 6;
    $(".calendar td").css("padding-right", timePadding);
  } else {
    $(".calendar td").css("padding-right", 10);
    $(".calendar td:last-of-type").css("padding-right", 0);
  }
}

function moveAction() {
  $(".product__block-info-actions")
    .not(".js_ignore_mark")
    .each(function () {
      if (window.matchMedia("(max-width: 600px)").matches) {
        var calendar = $(this)
          .closest(".product__block-person")
          .next(".calendar-container");
        $(this).insertAfter(calendar);
      } else {
        var initial = $(this)
          .closest(".product__block-top")
          .find(".product__block-distance");
        $(this).insertAfter(initial);
      }
    });
}

function moveOrder() {
  $(".product-action__order")
    .not(".js_ignore_mark")
    .each(function () {
      if (window.matchMedia("(max-width: 600px)").matches) {
        var actionInfo = $(this).prev(".product-action__info");
        $(actionInfo).append($(this));
      } else {
        var initial = $(this).closest(".product-action__info");
        $(this).insertAfter(initial);
      }
    });
}

var rotateBtn = function (el) {
  el.not(".js_ignore_mark").toggleClass("rotate");
};

$(".breadcrumbs__change")
  .not(".js_ignore_mark")
  .on("click", function () {
    rotateBtn($(this));
  });

$(window)
  .scroll(function () {
    // sliding menu active on scroll
    if (!$(".sliding-menu").length) return;

    var scrollDistance = $(window).scrollTop();

    $("*[data-nav-section]")
      .not(".js_ignore_mark")
      .each(function (i) {
        if ($(this).position().top <= scrollDistance) {
          $(".sliding-menu li").removeClass("active");
          $(".sliding-menu li").eq(i).addClass("active");
        }
      });
  })
  .scroll();

$("main").scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".goto-top").not(".js_ignore_mark").fadeIn(300);
  } else {
    $(".goto-top").not(".js_ignore_mark").fadeOut(300);
  }

  gotoTopPosition(this, this);

  $(".breadcrumbs__more").removeClass("breadcrumbs__more--toggled");
  $(".breadcrumbs__more")
    .closest(".page-content")
    .find(".breadcrumbs__change")
    .removeClass("rotate");
});

$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".goto-top").not(".js_ignore_mark").fadeIn(300);
  } else {
    $(".goto-top").not(".js_ignore_mark").fadeOut(300);
  }

  gotoTopPosition(document, window);

  if ($(this).scrollTop() > 300) {
    $(".breadcrumbs__more").removeClass("breadcrumbs__more--toggled");
    $(".breadcrumbs__more")
      .closest(".page-content")
      .find(".breadcrumbs__change")
      .removeClass("rotate");
  }
});

function hasScrolled() {
  var st = $(this).scrollTop();

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta) return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $(".site-header").removeClass("site-header--show");

    $(".controls__table tbody")
      .not(".js_ignore_mark")
      .each(function () {
        if (
          $(this)
            .closest(".controls__table-container-wrapper")
            .find(".expand-button")
            .hasClass("rotate-arr")
        ) {
          $(this).height("calc(100vh - 150px)");
          $(".services__table tbody .fixed-row").parent().css("height", "auto");
          $(".services__table tbody .fixed-row")
            .parent()
            .css("min-height", "0");
        }
      });
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $(".site-header").addClass("site-header--show");

      tableHeight();
    }
  }

  lastScrollTop = st;
}

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 70;
var navbarHeight = $(".site-header").outerHeight();

$(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function gotoTopPosition(el, element) {
  const footer = $("footer");
  const scrollBtn = $(".goto-top");
  var rightPos;
  var distanceFromBottom;
  if (window.matchMedia("(max-width: 600px)").matches) {
    if (
      scrollBtn.offset().top + scrollBtn.height() >=
      footer.offset().top + 45
    ) {
      if (el == document) {
        rightPos = 40 - footer.offset().left + "px";
      } else {
        rightPos = 24 - footer.offset().left + "px";
      }
      scrollBtn.css({ position: "absolute", right: rightPos, top: "30px" });
    }
    if ($(document).scrollTop() + window.innerHeight < footer.offset().top + 95)
      scrollBtn.css({ position: "fixed", right: "40px", top: "auto" });
  } else {
    if (el == document) {
      distanceFromBottom = Math.floor(
        $(el).height() - $(el).scrollTop() - $(window).height()
      );
      if (distanceFromBottom <= footer.outerHeight()) {
        scrollBtn.css("bottom", footer.outerHeight() - distanceFromBottom + 40);
      } else if (distanceFromBottom <= 0) {
        scrollBtn.css("bottom", footer.outerHeight() + 40);
      } else {
        scrollBtn.css("bottom", 40);
      }
    } else {
      distanceFromBottom = Math.floor(
        $(el).prop("scrollHeight") - $(el).scrollTop() - $(window).height()
      );
      if (distanceFromBottom <= footer.outerHeight()) {
        scrollBtn.css("bottom", footer.outerHeight() - distanceFromBottom);
      } else {
        scrollBtn.css("bottom", 40);
      }
    }
  }
}

function areScrollbarsVisible() {
  var scrollableElem = document.createElement("div"),
    innerElem = document.createElement("div");
  scrollableElem.style.width = "30px";
  scrollableElem.style.height = "30px";
  scrollableElem.style.overflow = "scroll";
  scrollableElem.style.borderWidth = "0";
  innerElem.style.width = "30px";
  innerElem.style.height = "60px";
  scrollableElem.appendChild(innerElem);
  document.body.appendChild(scrollableElem); // Elements only have width if they're in the layout
  var diff = scrollableElem.offsetWidth - scrollableElem.clientWidth;
  document.body.removeChild(scrollableElem);
  return diff;
}

function imgToSvg() {
  var $img = jQuery(this);
  var imgURL = $img.attr("src");
  var attributes = $img.prop("attributes");

  $.get(
    imgURL,
    function (data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find("svg");

      // Remove any invalid XML tags
      $svg = $svg.removeAttr("xmlns:a");

      // Loop through IMG attributes and apply on SVG
      $.each(attributes, function () {
        $svg.attr(this.name, this.value);
      });

      // Replace IMG with SVG
      $img.replaceWith($svg);
    },
    "xml"
  );
}

function tableHeight(el) {
  var $table = $(".controls__table");
  var tablePos;
  var $clone, $cloneFooter;
  $table.each(function () {
    var $wrap = $("<div />").appendTo($(this));
    $wrap.css({
      position: "absolute !important",
      visibility: "hidden !important",
      display: "block !important",
    });

    $clone = $(this).find(".fixed-row").clone().appendTo($wrap);
    $cloneFooter = $(this).find("tfoot tr").clone().appendTo($wrap);
    tablePos =
      $(".controls__table-container").offset().top + $("th").outerHeight() + 8;

    if ($clone.length > 0) {
      tablePos += $clone.height();
    }

    if ($(this).find("tfoot").length > 0) {
      tablePos += $cloneFooter.outerHeight(true);
    }

    $wrap.remove();
    $(this)
      .find("tbody")
      .css(
        "height",
        "calc(" + $(window).innerHeight() + "px - " + tablePos + "px)"
      );
  });
  if (window.matchMedia("(max-width: 600px)").matches) {
    var mainTableHeight = $(".areas__table--main tbody").outerHeight();
    $(".areas__table--menu tbody").css("height", mainTableHeight);
  }
  $(".controls__table tbody .fixed-row").parent().css("height", "auto");
  $(".controls__table tbody .fixed-row").parent().css("min-height", "0");
}

(function ($) {
  $.fn.hasScrollBar = function () {
    return this.get(0).scrollHeight > this.get(0).clientHeight;
  };
})(jQuery);

function changeRowWidth() {
  var $table = $(".controls__table-container table tbody");
  var $row = $(
    ".controls__table-container thead tr, .controls__table-container tfoot tr"
  );
  if ($table.hasScrollBar()) {
    $row.css("width", "calc(100% - 8px)");
  } else {
    $row.css("width", "100%");
  }
}

function getMaxHeight() {
  if (!!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)) {
    $(".controls__item").css("height", "auto");
    var tallest = 0;
    $(".areas__table tbody tr").each(function () {
      tallest = 0;
      $(this)
        .find("td")
        .each(function () {
          if (tallest < $(this).height()) {
            tallest = $(this).height();
          }
          $(this).find(".controls__item").css("height", tallest);
        });
    });
  }
}

function formatOpt(opt) {
  if (!opt.id) {
    return opt.text;
  }
  var optimage = $(opt.element).data("image");
  if (!optimage) {
    return opt.text;
  } else {
    var $opt = $(
      '<span><img src="' +
        optimage +
        '" class="select-icons" /> ' +
        opt.text +
        "</span>"
    );
    return $opt;
  }
}

function openTab() {
  $(".company__nav li a").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();
      $(this).parent().siblings().removeClass("active");
      $(this).parent().addClass("active");
      var href = $(this).attr("href");
      if ($(this).closest("#imoniu-profiliai").length == 0) {
        $(".group__tab").each(function () {
          if ("#" + $(this).attr("id") == href) {
            $(this).removeClass("hidden");
          } else {
            $(this).addClass("hidden");
          }
        });
        $(".company__tab").addClass("hidden");
        $(".company__tab#imones-bendra-informacija").removeClass("hidden");
        $(".company__nav").eq(1).find("li").removeClass("active");
        $(".company__nav:last-of-type")
          .find("li a[href='#imones-bendra-informacija']")
          .parent()
          .addClass("active");
      } else {
        $(".company__tab").each(function () {
          if ("#" + $(this).attr("id") == href) {
            $(this).removeClass("hidden");
          } else {
            $(this).addClass("hidden");
          }
        });
      }
    });
  });
}

function paymentLayout() {
  var index, column, columnChecked, columnDesc, price, headerClone, active;
  active = $(".payment-plan__info table td.active, .payment-plan__info table .th.active, .payment-plan__info table td.active-last");
  if (!$(".payment-plan__mobile").length) {
    if (window.matchMedia("(max-width: 1050px)").matches) {
      $(".payment-plan__info table").each(function (i) {
        $(this)
          .find("thead th:nth-of-type(n+2)")
          .each(function () {
            index = $(this).index();
            childIndex = index + 1;
            column = $(this)
              .closest("table")
              .find("td:nth-of-type(" + childIndex + ")");
            columnChecked = column.closest(
              "td:not('.checked'):not('.unchecked'):not('.payment-plan__price'), .checked"
            );
            headerClone = $(this)
              .clone()
              .appendTo($(this).closest(".payment-plan__info"));
            price = column
              .closest("td.payment-plan__price")
              .clone()
              .appendTo($(this).closest(".payment-plan__info"));
            columnDesc = columnChecked
              .closest("tr")
              .find("td:first-of-type")
              .clone()
              .appendTo($(this).closest(".payment-plan__info"));

            $(headerClone)
              .nextAll(columnDesc)
              .addBack()
              .wrapAll("<div class='payment-plan__mobile' />");
            // $(
            //   "<input type='radio' name='plan-details"+i+"' id=" +
            //     $(this).html() +
            //     i +
            //     " data-name =" +
            //     $(this).html() +
            //     ">"
            // ).prependTo(headerClone.closest(".payment-plan__mobile"));
            $(headerClone)
              .nextUntil(columnDesc)
              .addBack()
              .wrapAll(
                "<label class='payment-plan__details-label' for=" +
                  $(this).html() +
                  i +
                  " />"
              );
            columnDesc
              .find(".payment-plan__main-functions")
              .appendTo(headerClone.closest("label"))
              .append("<span class='payment-plan__more'>Plačiau</span>");
            columnDesc.wrapAll("<div class='payment-plan__details' />");
            price.wrapAll("<div class='payment-plan__price-mobile' />");

            if( active.index() > 0) {
              $(".payment-plan__mobile input").prop("checked", false);
              $(".payment-plan__mobile:nth-of-type("+ active.index() +") label").addClass("active");
            }
          });
      });

      $(".payment-plan .payment-plan__info table").hide();

      $(".payment-plan__mobile th").replaceWith(function () {
        return "<h2>" + this.innerHTML + "</h2>";
      });
      $(".payment-plan__mobile td").replaceWith(function () {
        return "<p>" + this.innerHTML + "</p>";
      });

      $(".payment-plan__mobile p").each(function () {
        if ($.trim($(this).text()) == "") {
          $(this).remove();
        }
      });
    }
  } else if (window.matchMedia("(min-width: 1050px)").matches) {
    $(".payment-plan .payment-plan__info table").show();
    $(".payment-plan__mobile").remove();
  }
}

// function tableWidths($table) {
//   var indexes = [];
//   var widths = [];
//   $table.find("thead th").each(function () {
//     indexes.push($(this).index());
//     widths.push($(this).outerWidth());
//   });
//   $table.find("tbody tr, tfoot tr").each(function () {
//     $(this)
//       .find("td")
//       .each(function (i) {
//         $(this).css("width", widths[i]);
//       });
//   });

//   // if ($table.hasScrollBar()) {
//   //   $table.find("tfoot tr").css("width", "calc(100% - 8px)");
//   // }
// }



function newSpecialist(button, countAdmin, countSpecialistLabel) {
  var newSpecialist = button.closest(".company__specialist").clone();
    var rights = newSpecialist.find(".company__specialist-rights .checkbox")
    var specialistLabelFirst = button.closest(".company__specialists").find(".company__specialist").first().find(".company__specialist-info h5").html().split(" ");
    rights.each(function() {
      var labelFirst = $(".company__specialist").first().find("label").prop("for");
      var label = $(this).find("label").prop("for");
      countLabel = parseInt(labelFirst.split("_")[1]) + countAdmin
      newLabel = label.split("_")[0] + "_" + countLabel + "_" + label.split("_")[2];
      $(this).find("label").prop("for", newLabel);
      $(this).find("input").prop("id", newLabel);
      $(this).find("input").prop("checked", false);
    })
    newSpecialist.appendTo(button.closest(".company__specialists"));
    newSpecialist.find(".company__specialist-inputs input").val("");
    newSpecialist.find(".company__specialist-search").trigger("click");
    newSpecialist.find(".company__specialist-info .company__specialist-number").html(specialistLabelFirst[0] + " " + countSpecialistLabel);
    newSpecialist.find(".company__specialist-buttons").removeClass("hidden");
    button.hide();
}