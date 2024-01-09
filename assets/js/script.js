function pop() {
  let popapp = document.querySelector("#popapp");
  let pop__close = document.querySelector(".popin__close");
  let popin = document.querySelector(".popin");
  popapp.onclick = () => {
    popin.classList.add("open2");
    document.body.style.overflow = "hidden";
  };

  popin.onclick = (e) => {
    if (!e.target.closest(".preFooter__phone")) {
      popin.classList.remove("open2");
      document.body.style.overflow = "visible";
    }
  };

  //   pop__close.onclick = () => {
  //     popin.classList.remove("open2");
  //     document.body.style.overflow = "visible"
  //   };
}

pop();

function open1() {
  // let natureBtn = document.querySelectorAll('#more')
  // let natureCard = document.querySelectorAll('.nature__card')
  // let natureList = document.querySelectorAll(".nature__card h2")
  // natureBtn.forEach((item, index) => {
  //     item.onclick = () => {
  //         natureBtn.forEach((item2, index2) => {
  //             if (index2 == index) {
  //                 if (natureList[index2].classList.contains("open2")) {
  //                     natureList[index2].classList.remove("open2")
  //                     natureCard[index2].classList.remove("overlay2")
  //                 } else {
  //                     natureList[index2].classList.add("open2")
  //                     natureCard[index2].classList.add("overlay2")
  //                 }
  //             } else {
  //                 natureList[index2].classList.remove("open2")
  //                 natureCard[index2].classList.remove("overlay2")
  //             }
  //         })
  //     }
  // })
  // let expertBtn = document.querySelectorAll("№more");
  // let expertList = document.querySelectorAll(".nature__card h2");
  // let expertCard = document.querySelectorAll(".nature__card");
  // expertCard.forEach((item, index) => {
  //   item.onclick = () => {
  //     expertCard.forEach((item2, index2) => {
  //       if (index2 == index) {
  //         if (expertList[index2].classList.contains("open2")) {
  //           expertCard[index2].classList.remove("overlay2");
  //           expertList[index2].classList.remove("open2");
  //         } else {
  //           expertCard[index2].classList.add("overlay2");
  //           expertList[index2].classList.add("open2");
  //         }
  //       } else {
  //         expertCard[index2].classList.remove("overlay2");
  //         expertList[index2].classList.remove("open2");
  //       }
  //     });
  //   };
  // });
}

open1();

function open() {
  // let expertBtn = document.querySelectorAll('.experts__btn');
  // let expertList = document.querySelectorAll('.export__list');
  // let expertCard = document.querySelectorAll('.expert__card')
  // expertBtn.forEach((item, index) => {
  //     item.onclick = () => {
  // expertBtn.forEach((item2, index2) => {
  //     if (item.innerText == "Развернуть") {
  //         item.innerText = "Свернуть"
  //     } else {
  //         item.innerText = "Развернуть"
  //     }
  //     if (index2 == index) {
  //         if (expertList[index2].classList.contains("open")) {
  //             expertCard[index2].classList.remove("overlay")
  //             expertList[index2].classList.remove("open")
  //         } else {
  //             expertCard[index2].classList.add("overlay")
  //             expertList[index2].classList.add("open")
  //         }
  //     } else {
  //         expertCard[index2].classList.remove("overlay")
  //         expertList[index2].classList.remove("open")
  //     }
  // })
  //     }
  // })

  let expertBtn = document.querySelectorAll(".experts__btn");
  let expertList = document.querySelectorAll(".export__list");
  let expertCard = document.querySelectorAll(".expert__card");
  expertCard.forEach((item, index) => {
    item.onclick = () => {
      if (expertBtn[index].innerText == "Развернуть") {
        expertBtn[index].innerText = "Свернуть";
      } else {
        expertBtn[index].innerText = "Развернуть";
      }
      expertCard.forEach((item2, index2) => {
        if (index2 == index) {
          if (expertList[index2].classList.contains("open")) {
            expertCard[index2].classList.remove("overlay");
            expertList[index2].classList.remove("open");
          } else {
            expertCard[index2].classList.add("overlay");
            expertList[index2].classList.add("open");
          }
        } else {
          expertCard[index2].classList.remove("overlay");
          expertList[index2].classList.remove("open");
        }
      });
    };
  });
}

open();

function circleDotes() {
  let dote = document.querySelectorAll(".circle4__child img");
  let fix = 0;
  dote.forEach((item) => {
    fix += 6;
    item.style.transform = `rotate(${fix}deg)`;
  });
}

circleDotes();

function checkNumber(el) {
  let number = document.querySelectorAll(`.${el}`);
  let fix = 0;
  number.forEach((item) => {
    if (fix < 9) item.innerHTML = `0${++fix}`;
    else item.innerHTML = ++fix;
  });
}

checkNumber("swiper__numeratic");

// function stepMargin() {
//   let mountainSubtext = document.querySelectorAll(
//     ".maountain__group .mountain__subtext"
//   );
//   let mountainSubcards1 = mountainSubtext[0].querySelectorAll(
//     ".mountain__subcards"
//   );
//   let mountainSubcards2 = mountainSubtext[1].querySelectorAll(
//     ".mountain__subcards"
//   );
//   let marginLeftPX = 0;
//   let fix = (mountainSubtext[0].clientWidth / 100) * 50;

//   if (document.body.getBoundingClientRect().width >= 1441) {
//     marginLeftPX = 25;
//   } else if (document.body.getBoundingClientRect().width >= 1201) {
//     marginLeftPX = 20;
//   } else if (document.body.getBoundingClientRect().width >= 1025) {
//     marginLeftPX = 15;
//   } else if (document.body.getBoundingClientRect().width >= 769) {
//     marginLeftPX = 10;
//   } else if (document.body.getBoundingClientRect().width >= 669) {
//     marginLeftPX = 10;
//   } else if (document.body.getBoundingClientRect().width >= 569) {
//     marginLeftPX = 10;
//   } else if (document.body.getBoundingClientRect().width <= 568) {
//     marginLeftPX = 0;
//   }
//
//   mountainSubcards1.forEach((item) => {
//     fix -= (mountainSubtext[0].clientWidth / 100) * marginLeftPX;
//     item.style.marginLeft = `${fix}px`;
//   });
//   let fax = (mountainSubtext[1].clientWidth / 100) * 50;
//   mountainSubcards2.forEach((item) => {
//     fax -= (mountainSubtext[1].clientWidth / 100) * marginLeftPX;
//     item.style.marginLeft = `${fax}px`;
//   });
// }

// stepMargin();

function send() {
  let form = document.querySelector("#send");
  let check = true;

  form.onsubmit = (e) => {
    e.preventDefault();
    let formInput = e.target.querySelectorAll("input");
    console.log(b);
    for (let key of b) {
      if (!!key.value) {
        check = false;
      } else {
        check = true;
        break;
      }
    }

    formInput.forEach((item) => {
      item.value = "";
    });

    if (check) {
      window.location.href = "./404.html";
    } else {
      window.location.href = "./thanks.html";
    }
  };
}

send();

var swiper = new Swiper(".investerSwiper", {
  slidesPerView: 3,
  width: 1440,
  loop: true,
  breakpoints: {
    1440: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 4,
    },
    668: {
      slidesPerView: 3,
    },
    568: {
      slidesPerView: 3,
    },
    425: {
      slidesPerView: 4,
    },
    375: {
      slidesPerView: 4,
    },
    320: {
      width: 375,
      slidesPerView: 4,
    },
  },
  pagination: {
    el: ".investers .swiper-pagination",
    renderBullet: (e, g) => {
      return `<span class="${g}">${e < 9 ? 0 : ""}${e + 1}</span>`;
    },
  },
  navigation: {
    nextEl: ".investers .swiper-button-next",
    prevEl: ".investers .swiper-button-prev",
  },
});

var swiper = new Swiper(".videoSlide", {
  slidesPerView: 4,
  breakpoints: {
    1440: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 3,
    },
    668: {
      slidesPerView: 3,
    },
    425: {
      slidesPerView: 1.5,
    },
    320: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".video__btns .swiper-button-next",
    prevEl: ".video__btns .swiper-button-prev",
  },
  pagination: {
    el: ".video__btns .swiper-pagination",
    renderBullet: (e, g) => {
      return `<span class="${g}">${e < 9 ? 0 : ""}${e + 1}</span>`;
    },
  },
});

var swiper = new Swiper(".messageSlide", {
  slidesPerView: 4,
  breakpoints: {
    1440: {
      slidesPerView: 2.5,
    },
    1200: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    668: {
      slidesPerView: 2,
    },
    568: {
      slidesPerView: 1.5,
    },
    425: {
      slidesPerView: 1.5,
    },
    320: {
      slidesPerView: 1.5,
    },
  },
  navigation: {
    nextEl: ".message__btns .swiper-button-next",
    prevEl: ".message__btns .swiper-button-prev",
  },
  pagination: {
    el: ".message__btns .swiper-pagination",
    renderBullet: (e, g) => {
      return `<span class="${g}">${e < 9 ? 0 : ""}${e + 1}</span>`;
    },
  },
});

var swiper = new Swiper(".bookSlider", {
  slidesPerView: 4,
  breakpoints: {
    1440: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 3,
    },
    668: {
      slidesPerView: 3,
    },
    568: {
      slidesPerView: 3,
    },
    425: {
      slidesPerView: 2,
    },
    320: {
      slidesPerView: 1.5,
    },
  },
  navigation: {
    nextEl: ".books__btns .swiper-button-next",
    prevEl: ".books__btns .swiper-button-prev",
  },
  pagination: {
    el: ".books__btns .swiper-pagination",
    renderBullet: (e, g) => {
      return `<span class="${g}">${e < 9 ? 0 : ""}${e + 1}</span>`;
    },
  },
});

var swiper = new Swiper(".smmSlider", {
  slidesPerView: 3,
  loop: true,
  breakpoints: {
    1440: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
    668: {
      slidesPerView: 3,
    },
    320: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".smi__btns .swiper-button-next.active",
    prevEl: ".smi__btns .swiper-button-prev.active",
  },
  pagination: {
    el: ".smi__btns .swiper-pagination.active",
    renderBullet: (e, g) => {
      return `<span class="${g}">${e < 9 ? 0 : ""}${e + 1}</span>`;
    },
  },
});
