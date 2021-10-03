var isOpen = false;

if ($("main.hasUiAutocomplete").length > 0) {
  var input = $("#search-specialist").not(".js_ignore_mark");

  $(input).prop("readonly", "readonly");
  $(input).siblings(".ui-autocomplete").css("display", "none")

  $(input).on("click", function () {
    if (!isOpen) {
      // $(this).autocomplete("search", "");
      $(this).siblings(".ui-autocomplete").show();
      isOpen = true;
    } else {
      // $(this).autocomplete("close");
      $(this).siblings(".ui-autocomplete").hide();

      isOpen = false;
    }
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
      $(".ui-autocomplete").hide();
      $(input).parent().find(".input-icon").removeClass("rotate-arrow");
      $(".specialist__calendar-container").removeClass("overlay");
      isOpen = false;
    } else {
      $(".specialist__calendar-container").removeClass("overlay");
    }
  });

  //make product search checkboxes work and choose product
  $(document)
    .on("click", ".autocomplete-product-checkbox", function (e) {
      $(".product__chosen").show();
      $(this).closest(".ui-menu-item").remove();
      $(input).css({
        visibility: "hidden",
        height: "0",
        padding: "0",
        margin: "0",
      });
      $(input).parent().addClass("hidden-icon");
      $(input).parent().css("height", "0");
      $(input).siblings().hide();

      var checkBoxes = $(this).closest(".checkbox").find("input");
      checkBoxes.prop("checked", !checkBoxes.prop("checked"));
      document.activeElement.blur();

      //autocomplete wrapper height and position
      $(".specialist .ui-autocomplete").css("top", "0");
      var wrapper = $(".specialist .ui-autocomplete-wrapper");
      var wrapperHeight =
        $(window).height() - wrapper[0].getBoundingClientRect().top;
      wrapper.css("height", wrapperHeight);
    })
    .on("click", ".autocomplete-product-button", function (e) {
      $(this).toggleClass("rotate-arr");
      return false;
    });

  //remove product and restore input if no products left
  $(document).on("click", ".product__chosen-trash", function () {
    $(this).closest(".autocomplete-product").remove();
    var wrapper = $(".specialist .ui-autocomplete-wrapper");
    var wrapperHeight =
      $(window).height() - wrapper[0].getBoundingClientRect().top;
    wrapper.css("height", wrapperHeight);

    if ($(".product__chosen .autocomplete-product").length == 0) {
      $(".product__chosen").remove();
      input.css({ visibility: "visible", height: "", padding: "", margin: "" });
      input.siblings(":not('.ui-autocomplete')").show();
      input.parent().css("height", "")
      $(input).parent().removeClass("hidden-icon");

      if (window.matchMedia("(max-width: 700px)").matches) {
        $(".specialist .ui-autocomplete").css({ top: "34px" });
      } else {
        $(".specialist .ui-autocomplete").css({ top: "54px" });
      }
    }
  });

  //show autocomplete list on add button
  $(".product__chosen-add").on("click", function () {
    input.autocomplete("search", "");
    
  });
}
