$(document).ready(function () {
  $("select").select2();

  $(".checkbox-wrapper>.checkbox input").on("change", function () {
    $(this).closest(".checkbox-wrapper").toggleClass("toggled");
  });

  $(".site-header .site-header__item--search, .search-panel__close").click(
    function () {
      $(".search-panel").toggleClass("search-panel--toggled");
    }
  );

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

  //highlighted dates
  // var eventDates = {};
  // eventDates[new Date("12/12/2020")] = new Date("12/12/2020");
  // eventDates[new Date("01/01/2021")] = new Date("01/01/2021");
  // eventDates[new Date("01/13/2021")] = new Date("01/13/2021");

  var Event = function(text, className) {
    this.text = text; };
    var eventDates = {};
    eventDates[new Date("12/07/2020")] = new Event("Event01");
    eventDates[new Date("01/12/2021")] = new Event("Event02");
    eventDates[new Date("01/28/2021")] = new Event("Event02");

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
        var event = eventDates[new Date(inst.selectedYear, inst.selectedMonth, inst.selectedDay)];
        console.log(event);
        console.log(date);
        if (event) {
          alert("hello");
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

  $(".product__nav-button--next").on("click", function () {
    var date = $(".product__nav-input").datepicker("getDate");
    if (window.matchMedia("(max-width: 480px)").matches) {
      date.setDate(date.getDate() + 1);
    } else {
      date.setDate(date.getDate() + 7);
    }
    $(".product__nav-input").datepicker("setDate", date);

    changeTextWidth();
  });

  $(".product__nav-button--prev").on("click", function () {
    var date = $(".product__nav-input").datepicker("getDate");
    if (window.matchMedia("(max-width: 480px)").matches) {
      date.setDate(date.getDate() - 1);
    } else {
      date.setDate(date.getDate() - 7);
    }
    $(".product__nav-input").datepicker("setDate", date);

    changeTextWidth();
  });

  function changeTextWidth() {
    var inputs = document.getElementsByClassName("product__nav-input");
    for (var i = 0; i < inputs.length; i++) {
      var width = Math.floor(getTextWidth(inputs[i]));
      var widthInPx = width + 3 + "px";
      inputs[i].style.width = widthInPx;
    }
  }

  $("#search")
    .autocomplete({
      minLength: 0,
      appendTo: '.product__search',
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
      },
      close: function () {
        if ($("input#search").attr("rel") == "0") $("input#search").val("");
        $(".product__search-arrow").removeClass("rotate");
      //   if (!$("ul.ui-autocomplete").is(":visible")) {
      //     $("ul.ui-autocomplete").show();
      // } //make always visible for debugging
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
    })
    .autocomplete("instance")._renderMenu = function (ul, items) {
    var currentCategory = "";
    var currentSubcategory = "";

    $.each(items, function (index, item) {
      if (item.category != currentCategory) {
        ul.append(
          "<h2 class='autocomplete-category'>" + item.category + "</h2>"
        );
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
              "</span></label>"+
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
    var chooseText = $("<p class='ui-autocomplete-choose-text paragraph'>Pažymėkite vieną ar kelias paslaugas</p>")
    $(".ui-autocomplete").append(chooseBtn);
    $(chooseText).prependTo(".ui-autocomplete");
    
    chooseBtn.on("click", function() {
      input.autocomplete("close");
      input.blur();
      isVisible = false;
    })
  };

  // $(document).on("click", ".autocomplete-product-checkbox", function() {
  //   var attrOpacity = getComputedStyle(this,':after').opacity;
  // });

  $(document).on("click", ".autocomplete-product-button", function () {
    var description = $(this)
      .closest(".autocomplete-product")
      .find(".autocomplete-product-desc");
    description.toggleClass("hidden");
    $(this).html($(this).html() == "Uždaryti" ? "Plačiau" : "Uždaryti");
  });

  $(document).on("click", ".autocomplete-product-expand", function () {
    $(this).siblings(".autocomplete-product--choice, .autocomplete-product-duration").toggleClass("hidden");
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
    //   var checkBoxes = $(".checkbox").find("input");
    //   checkBoxes.each(function () {
    //   if ($(this).is(":checked")) {
    //     var li = $(this).siblings(".autocomplete-product-checkbox");
    //     li.children().clone().appendTo(".product__chosen").wrapAll("<li class='autocomplete-product'></li>");
    //   }
    // });
    input.parent().hide();
    $(".product__chosen").show();
  });

  $(".product__chosen-add").on("click", function() {
    input.parent().show();
  });

  $(".autocomplete-product-trash").on("click", function() {
    $(this).parent(".autocomplete-product").remove();
  });

    //making product search arrow work
  var isVisible = false;
  var input = $("#search");
  $(".product__search-arrow").click(function () {
    if (isVisible == true) {
      input.autocomplete("close");
      input.blur();
      isVisible = false;
    } else {
      input.focus();
      isVisible = true;
    }
  });

  // autocomplete results width fix
  jQuery.ui.autocomplete.prototype._resizeMenu = function () {
    this.menu.element.css("width", this.element.outerWidth());
  };

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
    //if you click on anything except the modal itself or the hamburger menu, close the modal
    if (
      !$(event.target).closest(".site-aside,.site-header__hamburger").length
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

      $('.ui-autocomplete').css('width', $('.product__search').width());
    }, 100);
  });

  $(".select2-selection").click(function () {
    $(this).find(".select2-selection__arrow b").toggleClass("rotate");
  });

  moveAction();
  moveOrder();
  changePadding();

  setTimeout(function () {
    changeTextWidth();
  }, 100);
});

function changePadding() {
  var windowWidth = $(window).width();
  var timeWidth = $(".calendar td").width();
  var margin =
    ($("div.page-content__wrapper").innerWidth() -
      $("div.page-content__wrapper").width()) /
    2;

  if (window.matchMedia("(max-width: 480px)").matches) {
    var timePadding = (windowWidth - 4.5 * timeWidth - margin) / 4;
    $(".calendar td").css("padding-right", timePadding);
  } else {
    $(".calendar td").css("padding-right", 10);
    $(".calendar td:last-of-type").css("padding-right", 0);
  }
}

function moveAction() {
  $(".product__block-info-actions").each(function () {
    if (window.matchMedia("(max-width: 480px)").matches) {
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
    if (window.matchMedia("(max-width: 480px)").matches) {
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

$(window).scroll(function () {
  var autocompleteHeight = $(".ui-autocomplete").height();
  var autocompleteOffsetTop = $(".ui-autocomplete").offset().top;

  if ($(this).scrollTop() > autocompleteHeight + autocompleteOffsetTop) {
    $("input#search").blur();
    $(".ui-autocomplete").hide();
  }

  if ($(this).scrollTop() > 300) {
    $(".breadcrumbs__more").removeClass("breadcrumbs__more--toggled");
    $(".breadcrumbs__more")
      .closest(".page-content")
      .find(".breadcrumbs__change")
      .removeClass("rotate");
  }

  if (
    $(this).scrollTop() >
    $("#ui-datepicker-div").offset().top + $("#ui-datepicker-div").height()
  ) {
    $(".product__nav-input").datepicker("hide");
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
