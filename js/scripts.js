$(document).ready(onDocumentReady, changeTextWidth());

function onDocumentReady(callback) {
  //removes ability to overscroll on ios
  document.body.addEventListener(
    "touchmove",
    function (e) {
      e.preventDefault();
    },
    false
  );
  $(document).on("dblclick", function (e) {
    e.preventDefault();
  });

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

  //rotate arrows of select containers
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

  //search container search select initialization
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
    //submit button
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
          } else {
            $(this).find("span").html("Ieškoti");
            $(".product-chosen").fadeOut(300);
            $("input#search-product").fadeIn(300);
          }
        }
        if ($(this).find("span").html() == "Ieškoti") {
          $("input#search-product").val("");
          $(".search-panel input").val("");
          $(this).removeClass("change-search-icon");
        }
      });

    //submit on enter
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

    //event dates
    var Event = function (text) {
      this.text = text;
    };
    var eventDates = {};
    eventDates[new Date("08/20/2021")] = new Event("Event01");
    eventDates[new Date("08/12/2021")] = new Event("Event02");
    eventDates[new Date("08/28/2021")] = new Event("Event02");

    var availableDates = {};
    availableDates[new Date("08/05/2021")] = new Date("08/05/2021");
    availableDates[new Date("08/12/2021")] = new Date("08/12/2021");
    availableDates[new Date("08/13/2021")] = new Date("08/13/2021");

    jQuery.datepicker._checkExternalClick = function (e) {
      if ($(e.target).closest(".ui-widget-overlay").length) {
        $(".hasDatepicker").datepicker("hide");
        $(".ui-datepicker-popup").fadeOut("300");
      }
    };

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

          if ($(".specialist__overlay")) {
            $(".specialist__overlay").removeClass("hidden");
          }

          // dpDivLeft = dpDiv.offset().left;
          // dpDivTop = dpDiv.offset().top;
        },

        beforeShowDay: function (date) {
          var available = availableDates[date];
          var highlight = eventDates[date];
          if (available && highlight) {
            // setTimeout(function () {
            //   $('<span class="flag"></span>').appendTo(
            //     ".ui-datepicker-highlight"
            //   );
            // }, 2);
            return [
              true,
              "ui-datepicker-available ui-datepicker-highlight",
              "",
            ];
          } else if (highlight) {
            // setTimeout(function () {
            //   $('<span class="flag"></span>').appendTo(
            //     ".ui-datepicker-highlight"
            //   );
            // }, 2);
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
            dpTop = $("#ui-datepicker-div").offset().top;

            if (window.matchMedia("(max-width: 900px)").matches) {
              $(inst.dpDiv).css({
                left: "50%",
                transform: "translateX(-50%)",
                top:
                  $(".js-datepicker").offset().top +
                  $(".js-datepicker").height() +
                  10,
              });
            } else {
              $(inst.dpDiv).css({
                top: offsetHeight.top + "px",
                left: offsetLeft.left + "px",
                transform: "translateX(0)",
              });
            }
          }, 1);
          $(
            '<div class="ui-widget-overlay" style="width: 100vw; height: 100vh; z-index: 1000; left:0; top:0; position :fixed"></div>'
          ).insertBefore("#ui-datepicker-div");
        },
        onClose: function (dateText, inst) {
          $(".ui-widget-overlay").remove();
        },
      })
      .datepicker("setDate", new Date());

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
          // dpDivLeft = dpDiv.offset().left;
          // dpDivTop = dpDiv.offset().top;
        },

        beforeShowDay: function (date) {
          var available = availableDates[date];
          var highlight = eventDates[date];
          if (available && highlight) {
            // setTimeout(function () {
            //   $('<span class="flag"></span>').appendTo(
            //     ".ui-datepicker-highlight"
            //   );
            // }, 2);
            return [
              true,
              "ui-datepicker-available ui-datepicker-highlight",
              "",
            ];
          } else if (highlight) {
            // setTimeout(function () {
            //   $('<span class="flag"></span>').appendTo(
            //     ".ui-datepicker-highlight"
            //   );
            // }, 2);
            return [true, "ui-datepicker-highlight", ""];
          } else if (available) {
            return [true, "ui-datepicker-available", ""];
          } else {
            return [true, "", ""];
          }
        },
        beforeShow: function (input, inst) {
          dpTop = $("#ui-datepicker-div").offset().top;
          var position = $(this).closest(".product__nav");

          window.setTimeout(function () {
            $("#ui-datepicker-div").position({
              my: "left top",
              at: "left bottom",
              of: position,
            });
          }, 1);

          $(
            '<div class="ui-widget-overlay" style="width: 2000px; height: 2000px; z-index: 1000; left:0; top:0; position :fixed"></div>'
          ).insertBefore("#ui-datepicker-div");
          setTimeout(function () {
            $("#ui-datepicker-div").css("z-index", 199999);
          }, 2);

          // dp = input;
          // dpDiv = inst.dpDiv;
        },
        onClose: function (dateText, inst) {
          $(".ui-widget-overlay").remove();
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

    $(".specialist__datepicker")
      .not(".js_ignore_mark")
      .datepicker("option", "showButtonPanel", false);

    //prevent ios from scrolling to input
    $(".js-datepicker")
      .not(".js_ignore_mark")
      .on("focus", function (e) {
        if (window.matchMedia("(min-width: 701px)").matches) {
          $("html, body").animate(
            {
              scrollTop: $(this).offset().top - 20,
            },
            300
          );
        } else {
          $("html, body").animate(
            {
              scrollTop: $(this).offset().top - 120,
            },
            300
          );
        }
        e.preventDefault();
        return false;
      });

    $(".product__nav-button--next")
      .not(".js_ignore_mark")
      .on("click", function () {
        var date = $(".product__nav-input").datepicker("getDate");
        if (window.matchMedia("(max-width: 900px)").matches) {
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
        if (window.matchMedia("(max-width: 900px)").matches) {
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
        $(".hasDatepicker").not(".js_ignore_mark").datepicker("hide");
      } else {
        $(".hasDatepicker")
          .not(".js_ignore_mark")
          .on("click", function () {
            $(this).datepicker("show");
          });
        // $(".hasDatepicker").datepicker("show");
      }
    });
  }

  if ($("main.hasTable").length > 0 || $("div.hasTable").length > 0) {
    $(".search-container__submit")
      .not(".js_ignore_mark")
      .unbind("click")
      .click(function (e) {
        if ($(this).find("span").html() == "Valyti") {
          $(".search-panel__select").val("").trigger("change");
          $(this).find("span").html("Ieškoti");
          $(this).removeClass("change-search-icon");
          $(".search-panel input").val("");
          $(".search-panel__select").select2("close");

          $(this).find("span").html("Ieškoti");
          $(this).removeClass("change-search-icon");
        } else {
          e.preventDefault();
          if (
            $(".search-panel__select").val() &&
            $(".search-panel input").length
          ) {
            $(this).find("span").html("Valyti");
            $(this).addClass("change-search-icon");
          } else {
            $(".search-panel__select").select2("open");
          }
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
      var wrapper = $(this).closest(".checkbox-wrapper");
      wrapper.toggleClass("toggled");
      wrapper.siblings(".checkbox-wrapper").removeClass("toggled");
    })
    .on("click", function () {
      var wrapper = $(this).closest(".checkbox-wrapper");
      if (wrapper.hasClass("toggled")) {
        wrapper.removeClass("toggled");
        wrapper.find(".radio input").prop("checked", false);
        wrapper.find(".services-list__blocks").addClass("hidden");
      }
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

      gotoTopPosition(document, window, $(".goto-top"), 40);
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
        $(".product-chosen").remove();
        $(".search-panel__select").val(null).trigger("change");
        $(".search-container__submit span").html("Ieškoti");
        $(".search-container__submit").removeClass("change-search-icon");
      }

      if ($(this).hasClass("site-header__item--search")) {
        $(
          '<span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>'
        ).appendTo(".select2-selection--multiple");

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
      $(".product-chosen").remove();
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
      vertSlideMobile();
      // highestSlide();
      // timetableLayout();
      aboutSpecialistLayout();
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

      $(".services-list__aside .radio input[name='service[]']:checked")
        .not(".js_ignore_mark")
        .each(function () {
          if (window.matchMedia("(max-width: 991px)").matches) {
            $(".services-list__blocks").insertAfter($(this).closest(".radio"));
          }
        });
      if (window.matchMedia("(min-width: 992px)").matches) {
        $(".services-list__blocks").insertAfter(".services-list__aside");
      }

      $(".vert-slider__slides").css({
        maxHeight: $(".vert-slider__slide.visible").height(),
      });
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
            $(this).css("color", "#0F1D5B");
          }
        });
      }
      inputs.css("background-color", color);
      inputs.css(
        "color",
        isDark($(this).css("background-color")) ? "white" : "#0F1D5B"
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
      if ($(this).closest(".services__table")) {
        $(this)
          .closest(".services__table")
          .next(".services__table")
          .find("tbody, tfoot")
          .removeClass("hidden");
      }

      if ($(this).closest(".services__table")) {
        $(".areas__table--menu tbody").removeClass("hidden");
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
    .css("fill", "#0F1D5B");

  $(".site-aside__datepicker")
    .not(".js_ignore_mark")
    .datepicker({
      showButtonPanel: true,
      orientation: "bottom",
      appendTo: ".site-aside__datepicker-container",
      beforeShow: function (input, inst) {
        dpTop = $("#ui-datepicker-div").offset().top;
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
        $(".company__header .company__header-top h2").html(
          $("input.company-name").val()
        );
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

      $(this).siblings(".company__trash").remove();
      $(this).remove();
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

  $(".sortable").sortable({
    tolerance: "pointer",
    disabled: true,
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
  $("button.switch-image")
    .not(".js_ignore_mark")
    .on("click", function () {
      var disabled = $(this)
        .siblings(".sortable")
        .sortable("option", "disabled");
      console.log(disabled);
      $(this).toggleClass("switch-image--toggled transparent");
      if (disabled) {
        $(this).siblings(".sortable").sortable("enable");
        $(".sortable").disableSelection();
      } else {
        $(this).siblings(".sortable").sortable("disable");
      }
    });

  $(document).on(
    "click",
    ".company__specialist-activate:not(.js_ignore_mark)",
    function () {
      if ($(this).html() == "Deaktyvuoti") {
        $(this).html("Aktyvuoti");
        $(this).addClass("transparent");
      } else {
        $(this).html("Deaktyvuoti");
        $(this).removeClass("transparent");
      }
    }
  );

  $(document).on(
    "click",
    ".company__button-order:not(.js_ignore_mark)",
    function () {
      $(this).toggleClass("transparent");
      if ($(this).hasClass("transparent")) {
        $(this).html("Galima rezervuoti tik telefonu arba atvykus į vietą");
      } else {
        $(this).html("Galima rezervuoti online");
      }
    }
  );

  $(".more-button")
    .not(".js_ignore_mark")
    .on("click", function () {
      if ($(this).html() == "Plačiau") {
        $(this).html("Uždaryti");
      } else {
        $(this).html("Plačiau");
      }
      if (
        $(this).parent().siblings(".product-choice.hidden").length > 0 &&
        $(this).parent().siblings(".more-description.hidden").length > 0
      ) {
        $(this).parent().siblings(".product-expand").trigger("click");
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

  $("input[name='after-discount']")
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
    });

  $(document).on("click", ".product-expand:not(.js_ignore_mark)", function () {
    $(this).toggleClass("rotate");
    $(this).siblings(".product-choice").toggleClass("hidden");
    if ($(this).siblings(".more-description.hidden").length == 0) {
      $(this).siblings().find(".more-button").trigger("click");
    }
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

      gotoTopPosition(document, window, $(".goto-top"), 40);
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

  $(".warning-popup__inputs-container select").select2({
    dropdownCssClass: "select2-container--warning",
  });

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

  var timer_id2;

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
        clearTimeout(timer_id2);
        timer_id2 = setTimeout(function () {
          $self.each(function () {
            $(this).siblings(".payment-plan__info").css({ display: "none" });
            $(this)
              .closest(".payment-plan")
              .siblings()
              .find(".payment-plan__info")
              .css("display", "none");
          });
        }, 300);
      } else {
        $self.prop("checked", true);
        $self
          .siblings(".payment-plan__info")
          .find("input")
          .prop("checked", false);
        $self.attr("checkstate", "true");
        $self.siblings(".payment-plan__info").css({ display: "block" });
        $self
          .closest(".payment-plan")
          .siblings()
          .find(".payment-plan__info")
          .css("display", "none");
        $("input[name='plan']:not(:checked)").attr("checkstate", "false");
      }
    });

  $(".input-container--password-eye > .input-icon")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).toggleClass("input-icon--toggled-eye");
      if ($(this).hasClass("input-icon--toggled-eye")) {
        $(this).siblings("input[type='password']").attr("type", "text");
      } else {
        $(this).siblings("input[type='text']").attr("type", "password");
      }
    });

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
    .click(function (e) {
      if (e.target !== this) return;
      if (!isDragging) {
        if ($(this).hasClass("top-arrow bottom-arrow")) {
          $(this).removeClass("top-arrow");
        } else if ($(this).hasClass("bottom-arrow")) {
          $(this).removeClass("bottom-arrow").addClass("top-arrow");
        } else if ($(this).hasClass("top-arrow")) {
          $(this).addClass("bottom-arrow");
        }
      }
    });

  var countAdmin;
  var countSpecialist = 0;
  var countSpecialistLabel = 0;
  $(document).on("click", ".js-create-admin:not(.js_ignore_mark)", function () {
    countAdmin++;
    newSpecialist($(this), countAdmin);
  });

  $(document).on(
    "click",
    ".js-create-specialist:not('.js_ignore_mark')",
    function () {
      countSpecialist++;
      countSpecialistLabel = countSpecialist + 1;
      newSpecialist($(this), countSpecialist, countSpecialistLabel);
    }
  );

  if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    )
  ) {
    $(".company__header--company ul.company__nav").addClass(
      "disable-scrollbars"
    );
    $(".controls__table tbody").addClass("disable-scrollbars");
    $(".timetable__week").addClass("disable-scrollbars");
  }

  $(document).on(
    "click",
    ".payment-plan__more:not(.js_ignore_mark)",
    function () {
      $(".payment-plan__details").removeClass("toggled");
      $(".payment-plan__more")
        .html("Plačiau")
        .removeClass("toggled")
        .addClass("untoggled");
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
    .on("click", function () {
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
                changeRowWidth();
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
                changeRowWidth();
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
    });

  $("input[name='phone']")
    .not(".js_ignore_mark")
    .on("input", function () {
      $(this).val(
        $(this)
          .val()
          .replace(/[^\d+]/g, "")
      );
    });

  $(".controls__button--activate, .controls__button--deactivate")
    .not(".js_ignore_mark")
    .on("click", function () {
      if ($(this).hasClass("controls__button--activate")) {
        $(this).html("Deaktyvuoti");
        $(this)
          .addClass("controls__button--deactivate")
          .removeClass("controls__button--activate");
      } else {
        $(this).html("Aktyvuoti");
        $(this)
          .addClass("controls__button--activate")
          .removeClass("controls__button--deactivate");
      }
    });

  $(".controls__group-btn")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).toggleClass("transparent");
      if ($(this).hasClass("controls__group-btn--city")) {
        $(this).html("Išgrupuoti miestus");
        if (!$(this).hasClass("transparent")) {
          $(this).html("Grupuoti miestus");
        }
      } else if ($(this).hasClass("controls__group-btn--company")) {
        $(this).html("Išgrupuoti įmones");
        if (!$(this).hasClass("transparent")) {
          $(this).html("Grupuoti įmones");
        }
      } else if ($(this).hasClass("controls__group-btn--profession")) {
        $(this).html("Išgrupuoti profesijas");
        if (!$(this).hasClass("transparent")) {
          $(this).html("Grupuoti profesijas");
        }
      } else if ($(this).hasClass("controls__group-btn--recipient")) {
        $(this).html("Išgrupuoti psl. gavėjus");
        if (!$(this).hasClass("transparent")) {
          $(this).html("Grupuoti psl. gavėjus");
        }
      } else if ($(this).hasClass("controls__group-btn--specialist")) {
        $(this).html("Išgrupuoti specialistus");
        if (!$(this).hasClass("transparent")) {
          $(this).html("Grupuoti specialistus");
        }
      }
    });

  //if specialist is searched, reveal rights and buttons
  $(document).on(
    "click",
    ".company__specialist-search:not(.js_ignore_mark)",
    function () {
      var specialist = $(this).closest(".company__specialist");
      if (
        $(this).siblings("input[name='name']").val().length > 0 &&
        $(this).siblings("input[name='phone']").val().length > 0
      ) {
        specialist
          .find(
            ".company__specialist-rights, .company__specialist-buttons, .company__specialist-inputs h4, .company__specialist-title"
          )
          .removeClass("hidden");
      } else {
        specialist
          .find(
            ".company__specialist-rights, .company__specialist-buttons, .company__specialist-inputs h4, .company__specialist-title"
          )
          .addClass("hidden");
      }
    }
  );

  //age datepicker
  var datepickerShow = false;

  $(".about-datepicker")
    .not(".js_ignore_mark")
    .datepicker({
      changeYear: true,
      changeMonth: true,
      orientation: "bottom",
      yearRange: "c-100:c",
      beforeShow: function (input, inst) {
        dpTop = $("#ui-datepicker-div").offset().top;
        $("#ui-datepicker-div").addClass("ui-datepicker--age");
        window.setTimeout(function () {
          $("#ui-datepicker-div").position({
            my: "top",
            at: "bottom",
            of: input,
          });
        }, 1);
        $(this).siblings(".input-arrow").addClass("rotate-arrow");
        datepickerShow = false;
        $(
          '<div class="ui-widget-overlay" style="width: 2000px; height: 2000px; z-index: 1000; left:0; top:0; position :fixed"></div>'
        ).insertBefore("#ui-datepicker-div");
        setTimeout(function () {
          $("#ui-datepicker-div").css("z-index", 199999);
        }, 2);
      },
      onClose: function (input, inst) {
        $(this).siblings(".input-arrow").removeClass("rotate-arrow");
        datepickerShow = true;
        $(".ui-widget-overlay").remove();
      },
    })
    .focus(function () {
      $(".ui-datepicker-year, .ui-datepicker-month").select2({
        minimumResultsForSearch: Infinity,
      });
    });

  $(".about-datepicker")
    .siblings(".input-arrow")
    .not(".js_ignore_mark")
    .on("click", function () {
      if (datepickerShow == false) {
        $(this).siblings(".about-datepicker").datepicker("show");
        datepickerShow = true;
      } else if (datepickerShow == true) {
        $(this).siblings(".about-datepicker").datepicker("hide");
        datepickerShow = false;
      }
    });

  $(".timetable__datepicker--from")
    .not(".js_ignore_mark")
    .datepicker({
      altField: "#timetable-from",
      altFormat: "yy M dd",
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
      beforeShow: function () {
        $(
          '<div class="ui-widget-overlay" style="width: 2000px; height: 2000px; z-index: 1000; left:0; top:0; position :fixed"></div>'
        ).insertBefore("#ui-datepicker-div");
        setTimeout(function () {
          $("#ui-datepicker-div").css("z-index", 199999);
        }, 2);
      },
      onClose: function (input, inst) {
        $(this).siblings(".input-arrow").removeClass("rotate-arrow");
        datepickerShow = true;
        $(".ui-widget-overlay").remove();
      },
    });

  $(".timetable__datepicker--until")
    .not(".js_ignore_mark")
    .datepicker({
      altField: "#timetable-until",
      altFormat: "yy M dd",
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
      beforeShow: function () {
        $(
          '<div class="ui-widget-overlay" style="width: 2000px; height: 2000px; z-index: 1000; left:0; top:0; position :fixed"></div>'
        ).insertBefore("#ui-datepicker-div");
        setTimeout(function () {
          $("#ui-datepicker-div").css("z-index", 199999);
        }, 2);
      },
      onClose: function (input, inst) {
        $(this).siblings(".input-arrow").removeClass("rotate-arrow");
        datepickerShow = true;
        $(".ui-widget-overlay").remove();
      },
    });

  $(".timetable__date-input").datepicker({
    beforeShow: function () {
      $(
        '<div class="ui-widget-overlay" style="width: 100vw; height: 100vh; z-index: 1000; left:0; top:0; position :fixed"></div>'
      ).insertBefore("#ui-datepicker-div");
      setTimeout(function () {
        $("#ui-datepicker-div").css("z-index", 199999);
      }, 2);
    },
    onClose: function () {
      $(".ui-widget-overlay").hide();
    },
  });

  $("#timetable-from").change(function () {
    $(".timetable__datepicker--from").datepicker("setDate", $(this).val());
  });

  $("#timetable-until").change(function () {
    $(".timetable__datepicker--until").datepicker("setDate", $(this).val());
  });

  $(".timetable .time-inputs input")
    .not(".js_ignore_mark")
    .on("change", function () {
      if ($(this).val().length > 0) {
        $(this).siblings("p").addClass("active");
      } else {
        $(this).siblings("p").removeClass("active");
      }
    });

  $(".photo-slider")
    .not(".js_ignore_mark")
    .not(".slick-initialized")
    .slick({
      infinite: true,
      slidesToShow: 1,
      centerMode: false,
      variableWidth: true,
      arrows: true,
      responsive: [
        {
          breakpoint: 700,
          settings: {
            centerPadding: "40px",
            slidesToShow: 1,
          },
        },
      ],
    });

  $(".product__block-slider")
    .not(".js_ignore_mark")
    .not(".slick-initialized")
    .slick({
      infinite: true,
      slidesToShow: 1,
      arrows: true,
    });

  $(".read-more__button")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this)
        .siblings(".read-more__text")
        .toggleClass("read-more__text--visible");
      if (!$(this).hasClass("rotate")) {
        $(this).html("Skaityti mažiau");
      } else {
        $(this).html("Skaityti daugiau");
      }
      $(this).toggleClass("rotate");
    });

  $(".change-login")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this)
        .siblings(".login-details--name, .login-details--old-pass")
        .addClass("hidden");
      $(this).siblings(".login-details--new-pass").removeClass("hidden");
      $(this).addClass("hidden");
    });

  $(".warning-popup .controls__table td")
    .not(".js_ignore_mark")
    .on("click", function () {
      var activeRow = $(this).closest("tr");
      activeRow.siblings("tr").removeClass("active");
      activeRow.addClass("active");
      $(".warning-popup__text-message textarea").val(
        activeRow.find("td .text").html()
      );
    });

  $(".cart__reserve")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).closest(".cart").find(".confirm-overlay").fadeIn(300);
    });

  slider = document.querySelector(".company__nav");
  slider2 = document.querySelector(".company__header--company .company__nav");

  if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    )
  ) {
  } else {
    sliderInit(slider);
    sliderInit(slider2);
  }

  sliderInit(document.querySelector(".timetable__container"));
  // sliderInit(document.querySelector(".details__item--languages h4"));

  $(".checkbox-children .radio label")
    .not(".js_ignore_mark")
    .on("click", function () {
      if ($(this).siblings("input:checked").length > 0) {
        $(this)
          .siblings("input")
          .on("click", function () {
            $(this).prop("checked", false);
            $(this)
              .closest(".radio")
              .siblings(".services-list__blocks")
              .addClass("hidden");
          });
      } else {
        $(this)
          .siblings("input")
          .on("click", function () {
            $(this).prop("checked", true);
            $(this)
              .closest(".radio")
              .siblings(".services-list__blocks")
              .removeClass("hidden");
          });
      }
      gotoTopPosition(document, window, $(".goto-top"), 40);
    });

  $(".company__nav li a")
    .not(".js_ignore_mark")
    .on("click", function () {
      if (
        $(this).offset().left + $(this).width() >
        $(this).closest(".company__nav").width()
      ) {
        $(this)
          .closest(".company__nav")
          .scrollLeft(
            $(this).closest(".company__nav").scrollLeft() + $(this).width()
          );
      } else if (
        $(this).offset().left < $(this).closest(".company__nav").offset().left
      ) {
        $(this)
          .closest(".company__nav")
          .scrollLeft(
            $(this).closest(".company__nav").scrollLeft() - $(this).width()
          );
      }
    });

  $(".statistics__datepicker")
    .not(".js_ignore_mark")
    .datepicker({
      showButtonPanel: true,
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
      beforeShow: function (input, inst) {
        // if (window.matchMedia("(max-width: 991px)").matches) {
        //   window.setTimeout(function () {
        //     inst.dpDiv.css({
        //       top: $(".statistics__datepicker"),
        //       left: "50%",
        //       transform: "translate(-50%, 10px)",
        //     });
        //   }, 1);
        // } else {
        window.setTimeout(function () {
          $(inst.dpDiv).position({
            my: "top",
            at: "bottom",
            of: input,
            collision: "none",
          });
        }, 1);
        // }

        $(
          '<div class="ui-widget-overlay" style="width: 2000px; height: 2000px; z-index: 1000; left:0; top:0; position :fixed"></div>'
        ).insertBefore("#ui-datepicker-div");
        setTimeout(function () {
          $("#ui-datepicker-div").css("z-index", 199999);
        }, 2);
      },
      onClose: function (dateText, inst) {
        $(".ui-widget-overlay").remove();
      },
    })
    .datepicker("setDate", new Date())
    .on("focus", function (e) {
      if (window.matchMedia("(min-width: 701px)").matches) {
        $("html, body").animate(
          {
            scrollTop: $(this).offset().top - 80,
          },
          300
        );
      } else {
        $("html, body").animate(
          {
            scrollTop: $(this).offset().top - 100,
          },
          300
        );
      }
      e.preventDefault();
      return false;
    });

  $(document).on(
    "click",
    ".ui-datepicker-close:not('.js_ignore_mark')",
    function () {
      $(".ui-datepicker").hide();
    }
  );

  //statistics charts
  var clientsChart = [
    {
      x: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
      y: [10, 20, 30, 30, 30, 25, 10, 20, 30, 30, 30, 25],
      type: "bar",
      displayModeBar: false,
      showlegend: false,
      marker: {
        color: "#0F1D5B",
      },
      hoverinfo: "none",
    },
  ];

  var config = {
    responsive: true,
    displayModeBar: false,
    margin: { t: 0, l: 0, r: 0, b: 0 },
    showlegend: true,
    yaxis: { fixedrange: true, showgrid: false },
    xaxis: { fixedrange: true },
    autosize: true,
  };

  clientsPlot = document.querySelector(".stat-grid__client-plot");
  if (clientsPlot) {
    Plotly.newPlot(clientsPlot, clientsChart, config);

    window.onresize = function () {
      Plotly.relayout(clientsPlot, {
        "xaxis.autorange": true,
        "yaxis.autorange": true,
      });
    };
  }

  // donutData3 = [
  //   {
  //     domain: { column: 2 },
  //     values: [60, 200],
  //     labels: ["Registravosi per <br /> Serve Online", "Registravosi per <br /> nuosavus kanalus"],
  //     type: "pie",
  //     textinfo: "none",
  //     hoverinfo: "label+value",
  //     automargin: true,
  //     hole: 0.6,
  //     marker: {
  //       colors: ["#5055be", "#c0c2e8", "#0F1D5B", "#ff9954", "#ffb35b"],
  //     },
  //   },
  // ];

  clients4 = document.querySelector(".stat-grid__client-donut--test");

  function getDomain(i) {
    var N = 3;
    var spacing = 0.15;

    return [
      (1 / N) * i + (i === 0 ? 0 : spacing / 2),
      (1 / N) * (i + 1) - (i === N - 1 ? 0 : spacing / 2),
    ];
  }

  var donutData4, donutLayout2;

  donutData4 = [
    {
      domain: { x: donutGridX(0), y: donutGridY(0) },
      values: [105, 155],
      labels: ["Sugrįžę<br>klientai", "Vienkartiniai<br>klientai"],
      type: "pie",
      textinfo: "label+value",
      texttemplate: "%{label}<br><b>%{value}</b>",
      textposition: "outside",
      automargin: true,
      hole: 0.7,
      hoverinfo: "none",
      automargin: true,
      // hoverinfo: "label+value",
      marker: {
        colors: ["#5055be", "#c0c2e8", "#0F1D5B", "#ff9954", "#ffb35b"],
        line: {
          color: "#f4f4f6",
          width: 1,
        },
      },
    },
    {
      domain: { x: donutGridX(1), y: donutGridY(1) },
      values: [20, 40, 60, 20, 20],
      labels: ["Vilnius", "Kaunas", "Klaipėda", "Panevėžys", "Kiti"],
      type: "pie",
      textinfo: "label+value",
      texttemplate: "%{label}<br><b>%{value}</b>",
      textposition: "outside",
      automargin: true,
      hole: 0.7,
      hoverinfo: "none",
      automargin: true,
      xaxis: "x2",
      yaxis: "y2",
      marker: {
        colors: ["#5055be", "#c0c2e8", "#0F1D5B", "#ff9954", "#ffb35b"],
        line: {
          color: "#f4f4f6",
          width: 1,
        },
      },
    },
    {
      domain: { x: donutGridX(2), y: donutGridY(2) },
      values: [60, 200],
      labels: [
        "Registravosi per <br /> Serve Online",
        "Registravosi per <br /> nuosavus kanalus",
      ],
      type: "pie",
      textinfo: "label+value",
      texttemplate: "%{label}<br><b>%{value}</b>",
      textposition: "outside",
      automargin: true,
      hole: 0.7,
      automargin: true,
      hoverinfo: "none",
      marker: {
        colors: ["#0F1D5B", "#ffb35b", "#c0c2e8"],
        line: {
          color: "#f4f4f6",
          width: 1,
        },
      },
    },
  ];

  donutLayout2 = {
    annotations: [
      {
        font: {
          size: 20,
          family: "Sen",
        },
        showarrow: false,
        text: "<b>260</b>",
        x: labelX(0),
        y: labelY(0),
        xanchor: "center",
      },
      {
        font: {
          size: 20,
          family: "Sen",
        },
        showarrow: false,
        text: "<b>260</b>",
        x: labelX(1),
        y: labelY(1),
        xanchor: "center",
      },
      {
        font: {
          size: 20,
          family: "Sen",
        },
        showarrow: false,
        text: "<b>260</b>",
        x: labelX(2),
        y: labelY(2),
        xanchor: "center",
      },
    ],
    showlegend: false,
    margin: { t: 0, b: 0, l: 0, r: 0 },
    font: {
      family: "Roboto",
      size: 16,
      color: "#040404",
    },
    hoverlabel: {
      bgcolor: "inherit",
      bordercolor: "white",
      font: {
        family: "Roboto",
        size: 16,
      },
    },
    horizontalspacing: 10,
    verticalspacing: 10,
  };

  var timer_id3;
  $(window).on("resize", function () {
    clearTimeout(timer_id3);
    timer_id3 = setTimeout(function () {
      donutData4 = [
        {
          domain: { x: donutGridX(0), y: donutGridY(0) },
          values: [105, 155],
          labels: ["Sugrįžę<br>klientai", "Vienkartiniai<br>klientai"],
          type: "pie",
          textinfo: "label+value",
          texttemplate: "%{label}<br><b>%{value}</b>",
          textposition: "outside",
          automargin: true,
          hole: 0.7,
          hoverinfo: "none",
          automargin: true,
          marker: {
            colors: ["#5055be", "#c0c2e8", "#0F1D5B", "#ff9954", "#ffb35b"],
            line: {
              color: "#f4f4f6",
              width: 1,
            },
          },
        },
        {
          domain: { x: donutGridX(1), y: donutGridY(1) },
          values: [20, 40, 60, 20, 20],
          labels: ["Vilnius", "Kaunas", "Klaipėda", "Panevėžys", "Kiti"],
          type: "pie",
          textinfo: "label+value",
          texttemplate: "%{label}<br><b>%{value}</b>",
          textposition: "outside",
          automargin: true,
          hole: 0.7,
          hoverinfo: "none",
          automargin: true,
          xaxis: "x2",
          yaxis: "y2",
          marker: {
            colors: ["#5055be", "#c0c2e8", "#0F1D5B", "#ff9954", "#ffb35b"],
            line: {
              color: "#f4f4f6",
              width: 1,
            },
          },
        },
        {
          domain: { x: donutGridX(2), y: donutGridY(2) },
          values: [60, 200],
          labels: [
            "Registravosi per <br /> Serve Online",
            "Registravosi per <br /> nuosavus kanalus",
          ],
          type: "pie",
          textinfo: "label+value",
          texttemplate: "%{label}<br><b>%{value}</b>",
          textposition: "outside",
          automargin: true,
          hole: 0.7,
          automargin: true,
          hoverinfo: "none",
          marker: {
            colors: ["#0F1D5B", "#ffb35b", "#c0c2e8"],
            line: {
              color: "#f4f4f6",
              width: 1,
            },
          },
        },
      ];
      donutLayout2 = {
        annotations: [
          {
            font: {
              size: 20,
              family: "Sen",
            },
            showarrow: false,
            text: "<b>260</b>",
            x: labelX(0),
            y: labelY(0),
            xanchor: "center",
          },
          {
            font: {
              size: 20,
              family: "Sen",
            },
            showarrow: false,
            text: "<b>260</b>",
            x: labelX(1),
            y: labelY(1),
            xanchor: "center",
          },
          {
            font: {
              size: 20,
              family: "Sen",
            },
            showarrow: false,
            text: "<b>260</b>",
            x: labelX(2),
            y: labelY(2),
            xanchor: "center",
          },
        ],
        showlegend: false,
        margin: { t: 0, b: 0, l: 0, r: 0 },
        font: {
          family: "Roboto",
          size: 16,
          color: "#040404",
        },
        hoverlabel: {
          bgcolor: "inherit",
          bordercolor: "white",
          font: {
            family: "Roboto",
            size: 16,
          },
        },
        horizontalspacing: 10,
        verticalspacing: 10,
      };
      if (clients4) {
        Plotly.purge(clients4);
        Plotly.newPlot(clients4, donutData4, donutLayout2, config);
        $(".pielayer .trace:last-of-type .slice:last-of-type g.slicetext")
          .not(".js_ignore_mark")
          .css("transform", "translateY(20px)");
      }
    }, 100);
  });

  function donutGridX(i) {
    var N = 3;
    if (window.matchMedia("(min-width: 992px)").matches) {
      return [(i * 1) / N, ((i + 1) * 1) / N];
    }
    // else
    // if (
    //   window.matchMedia("(min-width: 701px) and (max-width: 991px)").matches
    // ) {
    //   if (i == 0) {
    //     return [0, 0.5];
    //   } else if (i == 2) {
    //     return [0, 1];
    //   } else {
    //     return [0.5, 1];
    //   }
    // }
    else {
      return [0, 1];
    }
  }

  function donutGridY(i) {
    var N = 3;
    if (window.matchMedia("(max-width: 991px)").matches) {
      if (i == 0) {
        return [0.74, 1];
      } else if (i == 1) {
        return [0.37, 0.63];
      } else {
        return [0, 0.26];
      }
      // }
      // else if (
      //   window.matchMedia("(min-width: 701px) and (max-width: 991px)").matches
      // ) {
      //   if (i < 2) {
      //     return [0.55, 1];
      //   } else {
      //     return [0, 0.45];
      //   }
    } else {
      return [0, 0];
    }
  }

  function labelX(i) {
    if (window.matchMedia("(min-width: 992px)").matches) {
      if (i == 0) {
        return 0.166;
      } else if (i == 1) {
        return 0.5;
      } else {
        return 0.834;
      }
    }
    // else if (
    //   window.matchMedia("(min-width: 701px) and (max-width: 991px)").matches
    // ) {
    //   if (i == 0) {
    //     return 0.25;
    //   } else if (i == 2) {
    //     return 0.75;
    //   }
    // }
    else {
      return 0.5;
    }
  }

  function labelY(i) {
    if (window.matchMedia("(min-width: 991px)").matches) {
      return 0.5;
    }
    // else if (
    //   window.matchMedia("(min-width: 701px) and (max-width: 991px)").matches
    // ) {
    //   if (i == 0 || i == 2) {
    //     return 0.815;
    //   } else if (i == 1) {
    //     return 0.185;
    //   }
    // }
    else {
      if (i == 0) {
        return 0.105;
      } else if (i == 1) {
        return 0.5;
      } else {
        return 0.895;
      }
    }
  }

  if (clients4) {
    Plotly.newPlot(clients4, donutData4, donutLayout2, config);
    $(".pielayer .trace:last-of-type .slice:last-of-type g.slicetext")
      .not(".js_ignore_mark")
      .css("transform", "translateY(20px)");
  }

  // if ($(".specialist__datepicker")) {
  //   $(".specialist__datepicker .ui-datepicker-today")
  //     .not(".js_ignore_mark")
  //     .trigger("click");
  //   $(".specialist__overlay").addClass("hidden");
  // }

  //add or remove overlay on click
  $(".specialist__overlay")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).addClass("hidden");
      $(".specialist__calendar-container").removeClass("overlay");
    });
  $(".specialist #registruokis")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(".specialist__overlay").removeClass("hidden");
    });
  $("#search-specialist")
    .not(".js_ignore_mark")
    .on("focus", function () {
      $(".specialist__calendar-container").addClass("overlay");
    });

  //add active class to calendar in specialist page
  $(".specialist .calendar td p")
    .not(".js_ignore_mark")
    .on("click", function () {
      if ($(".product__chosen").is(":visible")) {
        $(this).addClass("active");
      }
    });

  //resize table column width on table header drag
  var pressed = false;
  var isDragging = false;
  var start;
  var tableCell;
  var startX, startWidth, startWidthAbove, resizedTh;
  var hasThAbove = false;

  // $(".controls__table th").on("mousedown touchstart", function (e) {
  //   start = $(this);
  //   tableCell = [];
  //   pressed = true;
  //   startX = e.pageX;
  //   startWidth = $(this).width();
  //   $(start).addClass("resizing");

  //   if (
  //     !$(this).closest(".controls__table").find("thead tr:nth-of-type(2)")
  //       .length
  //   ) {
  //     $(this)
  //       .closest(".controls__table")
  //       .find("td")
  //       .each(function () {
  //         if ($(this).offset().left == $(start).offset().left) {
  //           tableCell.push($(this));
  //         }
  //       });
  //   } else {
  //     //check if has th above
  //     if (start.closest("tr").index() == 0) {
  //       hasThAbove = false;
  //     } else {
  //       hasThAbove = true;
  //     }

  //     if (hasThAbove) {
  //       $(".controls__table thead tr:nth-of-type(2) th").each(function () {
  //         if ($(this).hasClass("resizing")) {
  //           resizedTh = $(this);
  //           $(this)
  //             .closest(".controls__table")
  //             .find("td")
  //             .each(function () {
  //               if (
  //                 startX >= $(this).offset().left &&
  //                 startX <= $(this).offset().left + $(this).width()
  //               ) {
  //                 tableCell.push($(this));
  //               }
  //             });
  //         }
  //       });
  //       $(".controls__table thead tr:nth-of-type(1) th").each(function () {
  //         if (
  //           resizedTh.offset().left >= $(this).offset().left &&
  //           resizedTh.offset().left <= $(this).offset().left + $(this).width()
  //         ) {
  //           startWidthAbove = $(this).width();
  //         }
  //       });
  //     } else {
  //       $(".controls__table thead tr:first-of-type th").each(function () {
  //         if ($(this).hasClass("resizing")) {
  //           resizedTh = $(this);
  //           $(this)
  //             .closest(".controls__table")
  //             .find("td")
  //             .each(function () {
  //               if (startX >= $(this).offset().left &&
  //               startX <= $(this).offset().left + $(this).width()) {
  //                 tableCell.push($(this));
  //               }
  //             });
  //         }
  //       });
  //     }
  //   }
  //   // }
  //   // else {
  //   //   tableCell = $(this)
  //   //     .closest(".controls__table")
  //   //     .find("td:nth-of-type(" + index + ")");
  //   //   console.log(tableCell);
  //   // }
  //   isDragging = false;
  // });

  // $(document).on("mousemove touchmove", function (e) {
  //   if (pressed) {
  //     isDragging = true;
  //     if (!hasThAbove) {
  //       $(start).css({ width: startWidth + (e.pageX - startX) });
  //       $(tableCell).each(function () {
  //         $(this).css({ width: startWidth + (e.pageX - startX) });
  //       });
  //     } else {
  //       $(".controls__table thead tr:first-of-type th").each(function () {
  //         if ($(this).offset().left == $(start).offset().left) {
  //           $(this).css({
  //             width: startWidthAbove + (e.pageX - startX - 2) * 2,
  //           });
  //         }
  //       });
  //       $(tableCell).each(function () {
  //         $(this).css({ width: startWidth + (e.pageX - startX) });

  //         $(this)
  //           .next()
  //           .css({ width: startWidth + (e.pageX - startX) });
  //       });
  //     }
  //   }
  // });

  // $(document).on("mouseup touchend", function () {
  //   if (pressed) {
  //     $(start).removeClass("resizing");
  //     pressed = false;
  //   }
  // });

  var resizableEl, hasThAbove;
  var hasThBelow = false;
  var resizableTd;
  $(".controls__table th").resizable({
    handles: "e",
    minWidth: 18,
    start: function () {
      resizableEl = $(this);
      resizableElWidth = $(this).width();
      resizableTd = [];

      if ($(this).closest("tr").index() == 0) {
        hasThAbove = false;
      } else {
        hasThAbove = true;
      }

      $(this)
        .closest("table")
        .find("tr:nth-of-type(2) th")
        .each(function () {
          if ($(this).offset().left == resizableEl.offset().left) {
            hasThBelow = true;
            return false;
          } else {
            hasThBelow = false;
          }
        });

      $(this)
        .closest(".controls__table")
        .find("td")
        .each(function () {
          if (
            $(this).offset().left - 5 <= resizableEl.offset().left &&
            $(this).offset().left + 5 >= resizableEl.offset().left
          ) {
            resizableTd.push($(this));
          }
        });
    },
    resize: function (event, ui) {
      if (!hasThAbove && !hasThBelow) {
        resizableTd.forEach(function (item) {
          item.css({ width: ui.size.width });
        });
      } else if (hasThBelow) {
        resizableTd.forEach(function (item) {
          item.css({ width: ui.size.width / 2 });
          item.next().css({ width: ui.size.width / 2 });
        });
      } else {
        resizableEl.css({ width: "" });
      }
    },
  });

  $("input:radio:checked").data("chk", true);

  $(".site-aside .radio input")
    .not(".js_ignore_mark")
    .on("click", function (e) {
      $(".radio input[name='" + $(this).attr("name") + "']:radio")
        .not(this)
        .removeData("chk");
      $(this).data("chk", !$(this).data("chk"));
      $(this).prop("checked", $(this).data("chk"));
    });

  //
  setTimeout(function () {
    $(".vert-slider__slides").css({
      maxHeight: $(".vert-slider__slide.visible").height(),
    });
  }, 100);

  if (window.matchMedia("(max-width: 600px)").matches) {
    $(".vert-slider__slide").not(".js_ignore_mark").removeClass("visible");
    $(".vert-slider .vert-slider__items li")
      .not(".js_ignore_mark")
      .removeClass("active");
  }

  $(".vert-slider .vert-slider__items li")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(this).addClass("active");
      $(this).siblings("li").removeClass("active");

      var index = $(this).index() + 1;
      var vertSlider = $(this).closest(".vert-slider");
      var slideContainer = $(vertSlider).find(".vert-slider__slides");
      var slide = $(vertSlider).find(
        ".vert-slider__slide:nth-of-type(" + index + ")"
      );

      // $(slideContainer).scroll()
      if (window.matchMedia("(max-width: 600px)").matches) {
        if (!$(this).next(".vert-slider__slide").hasClass("visible")) {
          $(".vert-slider__slide").removeClass("visible");
          $(this).next(".vert-slider__slide").addClass("visible");
        } else {
          $(".vert-slider__slide").removeClass("visible");
        }
      } else {
        // $(slideContainer).css({maxHeight: slide.height()})
        $(".vert-slider__slide").removeClass("visible");
        $(slide).addClass("visible");
        $(slideContainer).animate(
          {
            scrollTop: "+=" + slide.position().top,
            maxHeight: slide.height(),
          },
          300,
          "swing"
        );
      }
    });

  $(".calc__plan .expandable")
    .not(".js_ignore_mark")
    .on("click", function (e) {
      // e.preventDefault();
      // if (e.target != this) {
      //   return;
      // }
      $(this).find("p").toggleClass("rotate-arr");
      $(this).next("ul").toggleClass("expanded");
    });

  $(document).click(function (e) {
    if (!$(e.target).closest(".question-mark, .plan-desc").length) {
      $(".plan-desc").removeClass("visible");
    }
  });

  $(".question-mark")
    .not(".js_ignore_mark")
    .on("click", function () {
      var listItem = $(this).closest("li");
      var planDesc = $(listItem).find(".plan-desc");
      var qMark = $(this).closest("p").find(".question-mark");
      var leftOffset = $(qMark).position().left + $(qMark).width();

      $(".plan-desc").removeClass("visible");
      $(planDesc).toggleClass("visible");
      $(planDesc).css({
        left: leftOffset + 20,
        width: $(planDesc).find("h3").outerWidth() + 2,
        top: $(qMark).position().top,
      });
    });

  var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

  if (isSafari) {
    $(".about-us .background")
      .not(".professionals .background")
      .removeClass("parallax__layer parallax__layer--deeper")
      .css({ top: 0, height: "100%" });
    $(".about-us").children().removeClass("parallax__group");
    $(".opportunities__photo").removeClass(
      "parallax__layer parallax__layer--back"
    );
  }

  $(".calendar tbody td p")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(".calendar tbody td p").removeClass("active");
      $(this).addClass("active");
    });

  $(".site-header__item--cart-icon .cart-icon")
    .not(".js_ignore_mark")
    .on("click", function () {
      $(".my-cart-container").addClass("visible");
    });

  $(document).on(
    "click",
    ".my-cart-container:not('.js_ignore_mark')",
    function (e) {
      if (
        !$(e.target).closest(".my-cart").length ||
        $(e.target).closest(".product__close").length
      ) {
        $(".my-cart-container").removeClass("visible");
      }
    }
  );

  $(".calc__plan-order--main")
    .not(".js_ignore_mark")
    .on("click", function () {
      var y = $("main").scrollTop() - 70;
      $("html").css({ scrollBehavior: "unset" });
      $(".about-us").css({
        perspective: "none",
        overflowX: "visible",
        overflowY: "visible",
      });
      $(".calc").css({ overflow: "visible" });
      $(".calc .background").each(function () {
        this.style.setProperty("transform", "none", "important");
      });
      $(".ui-widget-overlay").removeClass("hidden");
      $(".join-and-try-container").removeClass("hidden");
      $("body,html").animate({ scrollTop: y }, 0);
    });

  $(document).on("click", function (e) {
    if (!$(e.target).closest(".try, .calc__plan-order--main").length) {
      $("html").css({ scrollBehavior: "smooth" });
      $(".about-us").css({
        perspective: "1px",
        overflowX: "hidden",
        overflowY: "auto",
      });
      $(".calc").css({ overflow: "visible" });
      $(".ui-widget-overlay").addClass("hidden");
      $(".join-and-try-container").addClass("hidden");
      $(".site-header").addClass("site-header--show");
    }
  });

  moveAction();
  moveOrder();
  changePadding();
  openTab();
  paymentLayout();
  // timetableLayout();
  aboutSpecialistLayout();
  vertSlideMobile();
  // highestSlide();

  setTimeout(function () {
    changeTextWidth();
  }, 100);

  $(document).on(
    "click",
    ".payment-plan__mobile label:not(.js_ignore_mark)",
    function () {
      $(this).addClass("active");
      var otherPlans = $(this).closest(".payment-plan__mobile").siblings();
      otherPlans.find("label").removeClass("active");
      otherPlans.find("input").prop("checked", false);
      otherPlans.find(".payment-plan__details").removeClass("toggled");
    }
  );

  // callback();
}

function sliderInit(slider) {
  if ($(slider).length > 0) {
    lastPos = 0;
    var mouseDown = false;
    var startX, scrollLeft, scrollTop;
    var scrollTopFinal, scrollLeftFinal;
    var x, y, scrollX, scrollY;
    var time1;

    var startDragging = function (e) {
      mouseDown = true;
      time1 = new Date().getTime();

      startX = e.pageX - slider.offsetLeft;
      startY = e.pageY - slider.offsetTop;
      scrollLeft = slider.scrollLeft;
      scrollTop = slider.scrollTop;
    };

    var startDraggingMobile = function (e) {
      mouseDown = true;
      time1 = new Date().getTime();

      startX = e.touches[0].pageX - slider.offsetLeft;
      startY = e.touches[0].pageY - slider.offsetTop;
      scrollLeft = slider.scrollLeft;
      scrollTop = slider.scrollTop;
    };

    slider.addEventListener(
      "mousemove",
      function (e) {
        e.preventDefault();

        if (!mouseDown) {
          return;
        }

        x = e.pageX - slider.offsetLeft;
        y = e.pageY - slider.offsetTop;
        scrollX = x - startX;
        scrollY = y - startY;
        let scrollXMod = scrollX;
        let scrollYMod = scrollY;

        // window.setTimeout(function () {
        if (scrollY < 0) {
          scrollYMod = scrollY * -1;
        }

        if (scrollX < 0) {
          scrollXMod = scrollX * -1;
        }

        if (scrollXMod <= scrollYMod) {
          scrollTopFinal = scrollTop - scrollY;
          slider.scrollTop = scrollTopFinal;
        } else {
          scrollLeftFinal = scrollLeft - scrollX;
          slider.scrollLeft = scrollLeftFinal;
        }
        // }, 10);

        lastPos = slider.scrollLeft;
      },
      false
    );

    slider.addEventListener(
      "touchmove",
      function (e) {
        e.preventDefault();

        if (!mouseDown) {
          return;
        }

        x = e.touches[0].pageX - slider.offsetLeft;
        y = e.touches[0].pageY - slider.offsetTop;
        scrollX = x - startX;
        scrollY = y - startY;
        let scrollXMod = scrollX;
        let scrollYMod = scrollY;

        // window.setTimeout(function () {
        if (scrollY < 0) {
          scrollYMod = scrollY * -1;
        }

        if (scrollX < 0) {
          scrollXMod = scrollX * -1;
        }

        if (scrollXMod <= scrollYMod) {
          scrollTopFinal = scrollTop - scrollY;
          slider.scrollTop = scrollTopFinal;
        } else {
          scrollLeftFinal = scrollLeft - scrollX;
          slider.scrollLeft = scrollLeftFinal;
        }
        // }, 10);

        lastPos = slider.scrollLeft;
        console.log(scrollY);
      },
      false
    );

    var stopDragging = function (event) {
      mouseDown = false;
      var time2 = new Date().getTime();
      var timeDiff = time2 - time1;
      var speedY = (scrollTopFinal - scrollTop) / timeDiff;
      var speedX = (scrollLeftFinal - scrollLeft) / timeDiff;

      if (speedX < 0) {
        speedX = speedX * -1;
      }

      if (speedY < 0) {
        speedY = speedY * -1;
      }

      $(slider).animate(
        {
          scrollTop: "-=" + speedY * scrollY,
          scrollLeft: "-=" + speedX * scrollX,
        },
        { duration: 300, easing: "easeOutCubic" }
      );
    };

    // Add the event listeners
    slider.addEventListener("mousedown", startDragging, false);
    slider.addEventListener("touchstart", startDraggingMobile, false);

    slider.addEventListener("mouseup", stopDragging, false);
    slider.addEventListener("touchend", stopDragging, false);

    // slider.addEventListener("mouseleave", stopDragging, false);
  }
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
  if (!$("section.specialist").length) {
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
    } else if (window.matchMedia("(max-width: 900px)").matches) {
      timePadding = (windowWidth - 6.5 * timeWidth - margin) / 6;
      $(".calendar td").css("padding-right", timePadding);
    } else {
      $(".calendar td").css("padding-right", 10);
      $(".calendar td:last-of-type").css("padding-right", 0);
    }
  }
}

function moveAction() {
  $(".product__block-info-actions")
    .not(".js_ignore_mark")
    .each(function () {
      if ($(this).closest(".product__block--company").length < 1) {
        if (window.matchMedia("(max-width: 700px)").matches) {
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
      }
    });
}

function moveOrder() {
  $(".product-action__order")
    .not(".js_ignore_mark")
    .each(function () {
      if (window.matchMedia("(max-width: 700px)").matches) {
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

// $(window)
//   .scroll(function () {
//     // sliding menu active on scroll
//     if (!$(".sliding-menu").length) return;

//     var scrollDistance = $(window).scrollTop();

//     $("*[data-nav-section]")
//       .not(".js_ignore_mark")
//       .each(function (i) {
//         if ($(this).position().top <= scrollDistance) {
//           $(".sliding-menu li").removeClass("active");
//           $(".sliding-menu li").eq(i).addClass("active");
//         }
//       });
//   })
//   .scroll();

$("main").scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".goto-top").not(".js_ignore_mark").fadeIn(300);
  } else {
    $(".goto-top").not(".js_ignore_mark").fadeOut(300);
  }

  gotoTopPosition(this, this, $(".goto-top"), 40);

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

  gotoTopPosition(document, window, $(".goto-top"), 40);

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
    if (!$("section.specialist").length) {
      $(".site-header").removeClass("site-header--show");
    }

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
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 50);

function gotoTopPosition(el, element, scrollBtn, pixels, yPos = "bottom") {
  const footer = $("footer");
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
        if (yPos == "bottom") {
          scrollBtn.css(
            yPos,
            footer.outerHeight() - distanceFromBottom + pixels
          );
        } else {
          scrollBtn.css(
            yPos,
            -footer.outerHeight() + pixels + distanceFromBottom
          );
        }
      } else if (distanceFromBottom <= 0) {
        if (yPos == "bottom") {
          scrollBtn.css(yPos, footer.outerHeight() + pixels);
        } else {
          scrollBtn.css(yPos, pixels);
        }
      } else {
        scrollBtn.css(yPos, pixels);
      }
    } else {
      distanceFromBottom = Math.floor(
        $(el).prop("scrollHeight") - $(el).scrollTop() - $(window).height()
      );
      if (distanceFromBottom <= footer.outerHeight()) {
        scrollBtn.css(yPos, footer.outerHeight() - distanceFromBottom);
      } else {
        scrollBtn.css(yPos, pixels);
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
  if (
    $table.hasScrollBar() &&
    !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    )
  ) {
    $row.css("width", "calc(100% - 8px)");
    if ($table.parent("table.profiles__table--specialists").length > 0) {
      $table
        .parent("table")
        .find("thead tr th:last-of-type")
        .css("width", "48px");
    }
  } else {
    $row.css("width", "100%");
    if ($table.parent("table.profiles__table--specialists").length > 0) {
      $table
        .parent("table")
        .find("thead tr th:last-of-type")
        .css("width", "40px");
    }
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
      gotoTopPosition(document, window, $(".goto-top"), 40);
      tableHeight();

      if ($("body").height() < $(window).height()) {
        $(".site-header").addClass("site-header--show");
      }
    });
  });
}

function paymentLayout() {
  var index, column, columnChecked, columnDesc, price, headerClone, active;
  active = $(
    ".payment-plan__info table td.active, .payment-plan__info table .th.active, .payment-plan__info table td.active-last"
  );
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

            if (active.index() > 0) {
              $(".payment-plan__mobile input").prop("checked", false);
              $(
                ".payment-plan__mobile:nth-of-type(" +
                  active.index() +
                  ") label"
              ).addClass("active");
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

function newSpecialist(button, countAdmin, countSpecialistLabel) {
  var newSpecialist = button.closest(".company__specialist").clone();
  var rights = newSpecialist.find(".company__specialist-rights .checkbox");
  var specialistLabelFirst = button
    .closest(".company__specialists")
    .find(".company__specialist")
    .first()
    .find(".company__specialist-info h5")
    .html()
    .split(" ");
  rights.each(function () {
    var labelFirst = $(".company__specialist")
      .first()
      .find("label")
      .prop("for");
    var label = $(this).find("label").prop("for");
    countLabel = parseInt(labelFirst.split("_")[1]) + countAdmin;
    newLabel =
      label.split("_")[0] + "_" + countLabel + "_" + label.split("_")[2];
    $(this).find("label").prop("for", newLabel);
    $(this).find("input").prop("id", newLabel);
    $(this).find("input").prop("checked", false);
  });
  newSpecialist.appendTo(button.closest(".company__specialists"));
  newSpecialist.find(".company__specialist-inputs input").val("");
  newSpecialist.find(".company__specialist-search").trigger("click");
  newSpecialist
    .find(".company__specialist-info .company__specialist-number")
    .html(specialistLabelFirst[0] + " " + countSpecialistLabel);
  newSpecialist.find(".company__specialist-buttons").removeClass("hidden");
  button.hide();
}

var isResized = false;
function aboutSpecialistLayout() {
  if (window.matchMedia("(max-width: 991px)").matches) {
    if (!isResized) {
      $(".company__nav a[href='#registruokis']").trigger("click");
      $(".specialist #apie-specialista").addClass("hidden");
    }
    isResized = true;
  } else {
    $(".specialist #apie-specialista").removeClass("hidden");
    $(".specialist #registruokis").removeClass("hidden");
    isResized = false;
  }
}

function highestSlide() {
  //finding highest slide
  // var highestSlide = null;
  // var hi = 0;
  // var height = 0;
  // $(".vert-slider__slide")
  //   .not(".js_ignore_mark")
  //   .each(function () {
  //     $(this).removeAttr("style");
  //     height = $(this).prop("scrollHeight");
  //     if (height > hi) {
  //       highestSlide = $(this);
  //       hi = height;
  //     }
  //   });
  // if (window.matchMedia("(min-width: 601px)").matches) {
  //   $(".vert-slider__slide")
  //     .not(".js_ignore_mark")
  //     .each(function () {
  //       $(this).css({ height: hi });
  //     });
  // }
  // $(".vert-slider__slides").not(".js_ignore_mark").css({ maxHeight: hi });
}

var tabs = document.querySelectorAll(".vert-slider__items li");
var tabContents = document.querySelectorAll(".vert-slider__slide");
var isTabVisible;

function vertSlideMobile() {
  // var asideItems = $(".vert-slider__items li:not('.js_ignore_mark')");
  // var slides = $(".vert-slider__slide:not('.js_ignore_mark')");

  // if (window.matchMedia("(max-width: 600px)").matches) {
  //   asideItems.each(function (index) {
  //     $(slides[index]).insertAfter($(this));
  //   });
  // } else {
  //   $(slides).each(function () {
  //     $(this).appendTo($(".vert-slider__slides"));
  //   });
  // }

  if (window.matchMedia("(max-width: 600px)").matches) {
    tabContents.forEach((element, index) => {
      tabs[index].insertAdjacentElement("afterEnd", element);
      // element.addEventListener("click", function(e) {
      // 	e.stopPropagation()
      // })
    });
    // tabs.forEach( (tab, index) => {
    //   tab.addEventListener("click", function() {
    //     // if (this.nextElementSibling.classList.contains('visible')) {
    //     //   isTabVisible = true
    //     // } else {
    //     //   isTabVisible = false
    //     // }

    //     console.log(this.nextElementSibling.classList)

    //     if (!this.nextElementSibling.classList.contains('visible')) {
    //       tabContents.forEach((element, index) => {
    //         element.classList.remove('visible')
    //       })

    //       this.nextElementSibling.classList.add('visible')
    //       // isTabVisible = true
    //     } else {
    //       this.nextElementSibling.classList.remove('visible')
    //       // isTabVisible = false
    //     }
    //   })
    // })
  } else {
    tabContents.forEach((element, index) => {
      document
        .querySelector(".vert-slider__slides")
        .insertAdjacentElement("beforeEnd", element);
    });
    // $(slideContainer).animate(
    //   {
    //     scrollTop: "+=" + slide.position().top,
    //     maxHeight: slide.height(),
    //   },
    //   300,
    //   "swing"
    // );
  }
}
