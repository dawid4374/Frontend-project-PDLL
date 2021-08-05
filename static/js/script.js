$(window).on("load", function () {
  //---------slider-----------//
  $(".slider").slick({
    fade: true,
    speed: 700,
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: $(".btn_left"),
    nextArrow: $(".btn_right"),
    dots: false,
  });
  //---------cookies-----------//
  if (Cookies.get("cookie") == null) {
    $(".cookies").addClass("show");
    $(".cookies_main").addClass("show");
  }
  $(".close").click(function (e) {
    e.preventDefault();
    Cookies.set("cookie", "testCookie", { expires: 365 });
    $(".cookies").addClass("hide");
    $(".cookies_main").addClass("hide");
  });

  //---------Project description button toggle-----------//
  $(".description_enable").focusin(function (e) {
    e.preventDefault();
    $(this).closest(".project_description").addClass("border_show");
  });

  //---------FAQ button toggle-----------//
  $(".question_btn").click(function (e) {
    e.preventDefault();
    $(this).closest(".question").find(".question_content").slideToggle(300);

    const text = $(this).html();
    $(this).html(text == "zwiń" ? "rozwiń" : "zwiń");
  });

  //---------Projects list-----------//
  $(".list_item").click(function (e) {
    e.preventDefault();

    $(this)
      .closest(".projects_list")
      .find(".list_item")
      .removeClass("selected");

    console.debug($(this).closest(".projects_list").find(".list_item"));

    $(this).addClass("selected");

    let text = $(this).find("span").text();
    $(this)
      .closest(".choose_project")
      .find(".list_projects .list_projects_text")
      .html(text);
    $(this).closest(".choose_project").find(".projects_list").slideToggle(300);
    $(this)
      .closest(".choose_project")
      .find(".list_projects")
      .toggleClass("clicked");
  });

  $(".list_projects").click(function (e) {
    e.preventDefault();
    $(this).closest(".choose_project").find(".projects_list").slideToggle(100);
    $(this).toggleClass("clicked");
  });

  //---------menu links scroll-----------//
  $(".header_link_btn").on("click", function (e) {
    e.preventDefault();

    let data = $(this).data("section");
    let offsetTop = $(".section[data-section=" + data + "]").offset().top;

    $("body, html")
      .stop()
      .animate(
        { scrollTop: offsetTop - $("header").height() - 50 },
        500,
        "swing"
      );
  });

  //---------go_up-button-----------//
  $(".go_up").on("click", function (e) {
    $("body, html").stop().animate({ scrollTop: 0 }, 500, "swing");
  });

  //---------hamburger-menu-----------//
  $(".hamburger").click(function (e) {
    e.preventDefault();
    $(".hamburger_wrapper").toggleClass("open");
    $("body").toggleClass("hide_overflow");
    $(".nav").slideToggle(300);
  });

  //--------------------------Modal-----------------------//

  $('[data-toggle="modal"]').on("click", function (e) {
    e.preventDefault();

    //-----------check if modal is opened with specific package: start/pro/dedyk-------------------//

    let id = $(this).attr("id");

    if (id) {
      $(".col1_btn").removeClass("col1_btn_first_order");
    }

    $(".col1_btn").removeClass("active");
    $(`.${id}`).addClass("col1_btn_first_order");

    //-----------check if cart is empty - if not: show packages-------------------//

    if (!$(".col1_btn").hasClass("col1_btn_first_order")) {
      $(".col1_btn").addClass("active");
    }

    //--------------------get selected design-------------//

    let data = $(this).data("col");
    let title = $(".projects_list[data-col=" + data + "] .selected").data(
      "name"
    );
    let selectedImg = $(".projects_list[data-col=" + data + "] .selected").data(
      "img"
    );

    if (!(typeof title === "undefined")) {
      $(".main .col2 .col_title .title").html(title);
      $(".main .col2 .col_content .img_wrapper img").attr("src", selectedImg);
      $(".col2 .projects_list").hide();
    }

    //--------------------calc order price-------------//

    checkPrices();

    //--------------------madal operations-------------//

    if ($(this).data("target")) {
      $($(this).data("target")).trigger("modal:open");

      var modal = $(this).data("target");

      if ($(".modal_backdrop").length == 0) {
        $("body").append('<div class="modal_backdrop"></div>');
      }

      setTimeout(function () {
        $(".modal_backdrop").addClass("show");

        $("body").addClass("modal_on");

        $(modal).fadeIn(300, function () {
          $($(this).data("target")).trigger("modal:opened");
        });
      }, 10);
    }
  });

  //-------------------zmień btn col1-------------------//
  $(".col1 .change").on("click", function (e) {
    e.preventDefault();

    $(".col1_btn").toggleClass("active");
  });

  //-------------------modal col1 project btn-------------------//
  $(".col1 .col1_btn").on("click", function (e) {
    e.preventDefault();

    $(".col1_btn").removeClass("col1_btn_first_order");
    $(this).addClass("col1_btn_first_order");

    $(".col1_btn")
      .not(this)
      .each(function () {
        $(this).removeClass("active");
      });

    checkPrices();
  });

  //-------------------zmień btn col2-------------------//
  $(".col2 .projects_list").show();
  $(".col2 .change").on("click", function (e) {
    e.preventDefault();

    $(".col2 .projects_list").slideToggle(300);
  });

  $(".col2 .projects_list .list_item").on("click", function (e) {
    e.preventDefault();

    let txt = this.dataset.name;
    let img = this.dataset.img;

    $(".main .col2 .col_title .title").html(txt);
    $(".main .col2 .col_content .img_wrapper img").attr("src", img);

    $(".col2 .projects_list").slideToggle(300);
  });

  $('[data-close="modal"]').on("click", function (e) {
    e.preventDefault();

    $(".modal_backdrop").removeClass("show");

    $("body").removeClass("modal_on");

    $(this)
      .closest(".modal")
      .fadeOut(300, function () {
        $(".modal_backdrop").remove();
        $(this).closest(".modal").trigger("modal:closed");
      });
  });

  //--------------------------MODAL uslugi active-----------------------//

  $(".service_item").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("active");
    checkPrices();
  });

  //--------------------------FAQ title active-----------------------//

  $(window).scroll(function () {
    faqScroll();
  });

  //--------------------------Header links active-----------------------//

  function linksActive() {
    let sections = $(".section");
    let elemTop;
    let docViewTop = $(window).scrollTop();
    let docViewBottom = docViewTop + $(window).height();

    sections.removeClass("isVisible");

    sections.each(function () {
      elemTop = $(this).offset().top;
      elemBottom = elemTop + $(this).height;

      if (elemTop + 200 <= docViewBottom) {
        $(this).addClass("isVisible");
      } else {
        return;
      }
    });

    let data = $(".isVisible").last().data("section");

    $(".header_link_btn").removeClass("active");
    $(".header_link_btn[data-section=" + data + "]").addClass("active");
  }

  $(window).scroll(function () {
    if ($(window).scrollTop() > 1) {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(linksActive(), 100);
    }
  });

  //--------------------------smooth anchor scroll-----------------------//

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
});

//---------header scroll function-----------//

$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 1 || window.matchMedia("(max-width: 991px)").matches) {
    $("header").addClass("affix");
    $(".cookies").addClass("cookies_affix");
    $(".cookie_icon").removeClass("cookie_black").addClass("cookie_white");
    $(".cookie_check_icon").removeClass("check_black").addClass("check_xs");
  } else {
    $("header").removeClass("affix");
    $(".cookies").removeClass("cookies_affix");
    $(".cookie_icon").removeClass("cookie_white").addClass("cookie_black");
    $(".cookie_check_icon").removeClass("check_xs").addClass("check_black");
    $(".header_link_btn").removeClass("active");
  }
});

checkPrices = function () {
  let projectPrice = $(".col1_btn_first_order").data("price");

  if (typeof projectPrice === "string") {
    $(".footer .content .dedyk").text(`${projectPrice}`);
    $(".footer .content .number").hide();
    $(".footer .content .price_secoundary").hide();
  } else {
    let projectPrice = parseInt($(".col1_btn_first_order").data("price"));
    let additionalPrices = $(".col_content .active");
    let sum = 0;
    let additionalPricesSum = 0;

    for (i = 0; i < additionalPrices.length; i++) {
      additionalPricesSum += parseInt($(additionalPrices[i]).data("price"));
    }

    sum = projectPrice + additionalPricesSum;

    $(".footer .content .dedyk").text(``);
    $(".footer .content .number").show();
    $(".footer .content .price_secoundary").show();
    $(".footer .content .title span").text(`${sum}`);
    $(".footer .content .price_secoundary span").text(
      `(${Math.round((sum * 1.23 + Number.EPSILON) * 100) / 100}`
    );
  }
};

function faqScroll() {
  let questionsLength = $(".title_content").data("questions");
  let questions = [];
  let viewportOffset = [];
  let top = [];

  for (i = 0; i <= questionsLength - 1; i++) {
    questions[i] = document.querySelector(`#question${i}`);
    viewportOffset[i] = questions[i].getBoundingClientRect();
    top[i] = viewportOffset[i].top;
  }

  for (i = 0; i <= 7; i++) {
    if (top[i] > -$(`#question${i}`).height() - 20 && top[i] < 20) {
      $(".title_content" + i).addClass("active");
    } else {
      $(".title_content" + i).removeClass("active");
    }
  }
}

function isScrolledIntoView(elem, margin = 0) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return elemTop + margin <= docViewBottom;
  //return elemBottom <= docViewBottom && elemTop >= docViewTop;
  //&& elemBottom >= docViewTop
}

var scrollTimeout;
