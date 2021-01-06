$(document).ready(onDocumentReady);

function onDocumentReady() {
  if ($("main.hasUiAutocomplete").length > 0) {
    $(".search-container__submit").click(function () {
      $(".ui-autocomplete").fadeOut(300);
      if (
        $("input#search-product").val().length ||
        $(".search-panel input").val().length
      ) {
        if ($(this).find("span").html() == "Ieškoti") {
          $(this).find("span").html("Valyti");
          $(this).addClass("change-search-icon");
          $(".search-clean").css("display", "flex");
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

    // autocomplete results width fix
    jQuery.ui.autocomplete.prototype._resizeMenu = function () {
      this.menu.element.css("width", this.element.outerWidth());
    };
  }

  if ($("main.hasUiDatepicker").length > 0) {
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

    $(".js-datepicker").datepicker({
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
          console.log(selectedDate);
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
          return [true, "ui-datepicker-available ui-datepicker-highlight", ""];
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
            console.log(selectedDate);
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
    $(".ui-datepicker-popup__close").on("click", function () {
      $(popup).fadeOut(300);
    });

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

    $(".product__nav-icon").click(function () {
      $(this).next(".product__nav-input").datepicker("show");
    });

    //prevent ios from scrolling to input
    document.querySelector(".js-datepicker").addEventListener("focus", (e) => {
      e.preventDefault();
      setTimeout(() => {
        window.scroll(0, 100);
      }, 0);
    });

    $(".product__nav-button--next").on("click", function () {
      var date = $(".product__nav-input").datepicker("getDate");
      if (window.matchMedia("(max-width: 600px)").matches) {
        date.setDate(date.getDate() + 1);
      } else {
        date.setDate(date.getDate() + 7);
      }
      $(".product__nav-input").datepicker("setDate", date);

      changeTextWidth();
    });

    $(".product__nav-button--prev").on("click", function () {
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
        $("#ui-datepicker-div").offset().top + $("#ui-datepicker-div").height()
      ) {
        $(".product__nav-input").datepicker("hide");
      }
    });
  }

  $("select").select2();

  $(".checkbox-wrapper>.checkbox input").on("change", function () {
    $(this).closest(".checkbox-wrapper").toggleClass("toggled");
  });

  $(".site-header .site-header__item--search, .search-container__close").click(
    function () {
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
    }
  );

  $(".search-container__close").click(function () {
    $("input#search-product").css("display", "block");
    $("input#search-product").val("");
    $(".search-panel input").val("");
    $(".ui-autocomplete").css("display", "none");
    $(".product-header-chosen").remove();
  });

  $(".venue__slider").slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    // slides
  });
  $(".venue__description-more").click(function () {
    $(this)
      .closest(".venue__description")
      .addClass("venue__description--visible");
  });

  $(".calendar__more-button").click(function () {
    var times = $(this).closest(".calendar").children(".calendar__more-times");
    times.removeClass("calendar__more-times--hidden");
    $(this).removeClass("calendar__more-button");
    $(this).html("09:15");
  });

  $(".site-aside__block input").on("click", function () {
    $(".search-clean").css("display", "flex");
  });

  $("select").on("select2:select", function (e) {
    $(".search-clean").css("display", "flex");
    $(this).next(".select2").find("b").removeClass("rotate");
  });

  $(".search-clean").on("click", function () {
    $("#city").val($("#city option:first-child").val()).trigger("change");
    $("#time").val($("#time option:first-child").val()).trigger("change");
    $(".search-container__submit span").html("Ieškoti");
    $(".search-container__submit").removeClass("change-search-icon");
    $(".product-header-chosen").remove();
    $("#search-product").css("display", "block");
    $(".site-aside__block input").prop("checked", false);
    $("#distance_asc").prop("checked", true);
    $(this).fadeOut(300);
  });

  if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    )
  ) {
    $(".search-clean").css("left", "50%");
  }

  $(".breadcrumbs__change").click(function () {
    $(".breadcrumbs__more").toggleClass("breadcrumbs__more--toggled");
  });

  var likeBtn = $(".product__block-like");

  likeBtn.click(function () {
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

  hamburgerBtn.click(function () {
    $(".site-aside-container").addClass("site-aside-container--toggled");
  });

  $(document).click(function (event) {
    //if you click on anything except the menu or the hamburger menu, close the menu
    if (
      !$(event.target).closest(".site-aside,.site-header__hamburger").length &&
      $(event.target).length != $(".select2-search").length
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
      var field = $(document.activeElement);
      if (field.is(".hasDatepicker")) {
        field.datepicker("hide").datepicker("show");
      }
    }, 100);
  });

  $(".select2-selection").click(function () {
    $(this).find(".select2-selection__arrow b").toggleClass("rotate");
  });

  $(".goto-top").on("click", function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    document.querySelector("main").scrollTop = 0;

    if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
      $("html,body,main").animate({ scrollTop: 0 }, 300);
      return false;
    }
  });

  $(".feature-screen__slides-container").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 8000,
    appendDots: $(".feature-screen"),
  });

  $("#upload-icon").change(function (e) {
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
        $(".areas__inputs img").css({"display": "unset", "height": "20px"});
        $(".areas__inputs img").each(imgToSvg);
      }, 10);
    }
  });

  var color;
  $(".areas__color").each(function (index) {
    color = "#" + $(this).contents().get(0).nodeValue;
    $(this).closest("tr").find("td p, td img").css("background-color", color);
  });

  $(".color-input").on("input", function () {
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
      //inputs.css("color", '#8d92a3');
    }
    inputs.css("background-color", color);
    inputs.css(
      "color",
      isDark($(this).css("background-color")) ? "white" : "#101b51"
    );
    if (isDark($(this).css("background-color"))) {
      $(this).closest("tr").find("td input").addClass("white-text");
    }
  });

  $(".areas__languages li").click(function () {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
  });

  $(".areas__item").click(function () {
    $(this).addClass("changed-bg");
    $(this).parent().siblings().find(".areas__item").addClass("changed-bg");
    $(this).parent().siblings().find("svg path").addClass("changed-bg");
    $(this)
      .closest(".areas__area")
      .siblings()
      .find(".areas__item")
      .removeClass("changed-bg");

    if ($(this).closest(".areas__inputs")) {
      $(this)
        .closest(".areas__inputs")
        .children()
        .children()
        .removeClass("changed-bg");
    }
  });

  $('.areas__area img[src$=".svg"]').each(imgToSvg);

  moveAction();
  moveOrder();
  changePadding();

  setTimeout(function () {
    changeTextWidth();
  }, 100);
}

function changeTextWidth() {
  var inputs = document.getElementsByClassName("product__nav-input");
  for (var i = 0; i < inputs.length; i++) {
    var width = Math.floor(getTextWidth(inputs[i]));
    var widthInPx = width + 3 + "px";
    inputs[i].style.width = widthInPx;
  }
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
  $(".product__block-info-actions").each(function () {
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
  $(".product-action__order").each(function () {
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
  el.toggleClass("rotate");
};

$(".breadcrumbs__change").on("click", function () {
  rotateBtn($(this));
});

$(window)
  .scroll(function () {
    // sliding menu active on scroll
    if (!$(".sliding-menu").length) return;

    var scrollDistance = $(window).scrollTop();

    $("*[data-nav-section]").each(function (i) {
      if ($(this).position().top <= scrollDistance) {
        $(".sliding-menu li").removeClass("active");
        $(".sliding-menu li").eq(i).addClass("active");
      }
    });
  })
  .scroll();

$("main").scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".goto-top").fadeIn(300);
  } else {
    $(".goto-top").fadeOut(300);
  }

  $(".breadcrumbs__more").removeClass("breadcrumbs__more--toggled");
  $(".breadcrumbs__more")
    .closest(".page-content")
    .find(".breadcrumbs__change")
    .removeClass("rotate");
});

$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".goto-top").fadeIn(300);
  } else {
    $(".goto-top").fadeOut(300);
  }
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
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $(".site-header").addClass("site-header--show");
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
