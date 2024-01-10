if (document.querySelector('.loading-div')) {
  const UIloadingDiv = document.querySelector('.loading-div');
  window.addEventListener('load', () => {
    setTimeout(() => {
      UIloadingDiv.remove();
      document.querySelector('body').classList.remove('toggle-body-overflowY');
    }, 2000);
  });
}

if (document.querySelector('[data-aos]')) {
  AOS.init();
}

// handle scrolling
const UIheaderLg = document.querySelector('.header-lg');
const UIheaderMd = document.querySelector('.header-md');

window.addEventListener('scroll', () => {
  if (window.scrollY >= 10) {
    setTimeout(() => {
      UIheaderMd.classList.add('toggle-header-md');
      UIheaderLg.classList.add('toggle-header-lg');
    }, 50);
  } else {
    setTimeout(() => {
      UIheaderMd.classList.remove('toggle-header-md');
      UIheaderLg.classList.remove('toggle-header-lg');
    }, 50);
  }
});

// Handle Header Lg
const UIheaderLgULDiv = document.querySelector('.header-lg-ul-div');

document
  .querySelector('.header-lg .header-lg-ul-div')
  .appendChild(
    document.querySelector('.header-md .main-header-md-ul').cloneNode(true)
  );

const headerLgClonedUl = document.querySelector(
  '.header-lg .main-header-md-ul'
);
const headerLgDropLis = document.querySelectorAll(
  '.header-lg .main-header-md-ul .drop-li'
);
for (let dropLi of headerLgDropLis) {
  dropLi.querySelector(':scope > .drop-a > i').className =
    'fontello icon-right-open';
  // dropLi.querySelector(':scope > .drop-a i').className = 'ion-chevron-left';
}
const UImainLiDrops = headerLgClonedUl.querySelectorAll(':scope > .drop-li');
for (let i of UImainLiDrops) {
  const UImainAdropIcon = i.querySelector(':scope > .drop-a > i');
  UImainAdropIcon.className = 'fontello icon-down-open';
}

// handle headerlg dropdown links
// const UIdropLgIcons = document.querySelectorAll(".header-lg .drop-a > i");
// new HandleDrops(UIdropLgIcons);

// handle header md
const UIlines = document.querySelector('.header-md .lines');
const UIverticalMore = document.querySelector('.header-md .home-menu');
const UIuserLink = document.querySelector('.header-md .user-drop-link');
const UImainHeaderMdUlDiv = document.querySelector(
  '.header-md .main-header-md-ul-div'
);
const UIhomeHeaderMdUlDiv = document.querySelector(
  '.header-md .home-header-md-ul-div'
);
const UIuserHeaderMdUlDiv = document.querySelector(
  '.header-md .user-header-md-ul-div'
);


// main drop
UIlines.addEventListener('click', e => {
  // UIlines.classList.toggle('is-active');
  UImainHeaderMdUlDiv.classList.toggle('toggle-main-header-md-ul-div');
  document.querySelector('body').classList.add('toggle-body-overflowY');
});
document.addEventListener('click', e => {
  if (e.target.classList.contains('main-header-md-ul-div')) {
    // UIlines.classList.remove('is-active');
    UImainHeaderMdUlDiv.classList.remove('toggle-main-header-md-ul-div');
    document.querySelector('body').classList.remove('toggle-body-overflowY');
  }
});

// home drop

// handle main sidebar drop links
const UIdropMdIcons = document.querySelectorAll('.header-md .drop-a > i');
new HandleDrops(UIdropMdIcons);

function HandleDrops(dropIcons) {
  this.dropIcons = dropIcons;

  for (let dropI of this.dropIcons) {
    dropI.addEventListener('click', e => {
      let calcHeight = 0;
      let calcParentHeight = 0;
      let calcGrandParentHeight = 0;
      for (let ele of dropI.parentElement.nextElementSibling.children) {
        calcHeight += ele.children[0].offsetHeight;
      }
      if (dropI.parentElement.nextElementSibling.offsetHeight === 0) {
        for (let n of this.dropIcons) {
          n.parentElement.nextElementSibling.style.height = 0 + 'px';
          n.parentElement.classList.remove('toggle-drop-a');
        }

        dropI.parentElement.nextElementSibling.style.height = calcHeight + 'px';
        dropI.parentElement.classList.add('toggle-drop-a');
        if (
          dropI.parentElement.parentElement.parentElement.classList.contains(
            'dropped-ul'
          )
        ) {
          for (let parentLi of dropI.parentElement.parentElement.parentElement
            .children) {
            calcParentHeight += parentLi.children[0].offsetHeight;
          }
          // if the grand parent element has a dropped-ul class
          // then set the garnd parent height to the dropped ul plus the grand parent direct children height
          dropI.parentElement.parentElement.parentElement.style.height =
            calcParentHeight + calcHeight + 'px';
          // dropI.parentElement.parentElement.parentElement.parentElement.classList.add('toggle-drop-a');
          dropI.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
            'toggle-drop-a'
          );
        }

        if (
          dropI.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains(
            'dropped-ul'
          )
        ) {
          for (let grandLi of dropI.parentElement.parentElement.parentElement
            .parentElement.parentElement.children) {
            calcGrandParentHeight += grandLi.children[0].offsetHeight;
          }
          dropI.parentElement.parentElement.parentElement.parentElement.parentElement.style.height =
            calcGrandParentHeight + calcParentHeight + calcHeight + 'px';
          dropI.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
            'toggle-drop-a'
          );
        }
      } else {
        dropI.parentElement.nextElementSibling.style.height = 0 + 'px';
        dropI.parentElement.classList.remove('toggle-drop-a');
        if (
          dropI.parentElement.parentElement.parentElement.classList.contains(
            'dropped-ul'
          )
        ) {
          // if the garnd element has a dropped-ul class
          // then set the grand parent height to its direct children height only
          for (let parentLi of dropI.parentElement.parentElement.parentElement
            .children) {
            calcParentHeight += parentLi.children[0].offsetHeight;
          }
          dropI.parentElement.parentElement.parentElement.style.height =
            calcParentHeight + 'px';
          dropI.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
            'toggle-drop-a'
          );
        }

        if (
          dropI.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains(
            'dropped-ul'
          )
        ) {
          for (let grandLi of dropI.parentElement.parentElement.parentElement
            .parentElement.parentElement.children) {
            calcGrandParentHeight += grandLi.children[0].offsetHeight;
          }
          dropI.parentElement.parentElement.parentElement.parentElement.parentElement.style.height =
            calcGrandParentHeight + 'px';
          dropI.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
            'toggle-drop-a'
          );
        }
      }
      e.preventDefault();
    });
  }
}

// home main slider
var mainHomeSLider = new Swiper('.home-main-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  loop: true,
  autoplay: {
    delay: 8000,
    disableOnInteraction: true
  },
  navigation: {
    nextEl: '.home-main-slider-next',
    prevEl: '.home-main-slider-prev'
  },
  pagination: {
    el: '.home-main-slider-pagination',
    clickable: true
  }
});


// men products slider
const menProductsSlider = new Swiper('.men-products-slider', {
  centeredSlides: false,
  // speed: 1600,
  speed: 1000,
  loop: false,
  // autoplay: {
  //   delay: 8000,
  //   disableOnInteraction: true
  // },
  slidesPerView: 5,
  spaceBetween: 22,
  breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 12
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 22
    },
    1199: {
      slidesPerView: 3,
      spaceBetween: 32
    },
    1399: {
      slidesPerView: 4,
      spaceBetween: 22
    }
  },
  navigation: {
    nextEl: '.men-products-slider-next',
    prevEl: '.men-products-slider-prev'
  }
});

	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.loader-wrap').length){
			$('.loader-wrap').delay(1000).fadeOut(500);
		}
	}

	if ($(".preloader-close").length) {
		$(".preloader-close").on("click", function(){
			$('.loader-wrap').delay(200).fadeOut(500);
		})
	}

// women products slider
const womenProductsSlider = new Swiper('.women-products-slider', {
  centeredSlides: false,
  // speed: 1600,
  speed: 1000,
  loop: false,
  // autoplay: {
  //   delay: 8000,
  //   disableOnInteraction: true
  // },
  slidesPerView: 5,
  spaceBetween: 22,
  breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 12
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 22
    },
    1199: {
      slidesPerView: 3,
      spaceBetween: 32
    },
    1399: {
      slidesPerView: 4,
      spaceBetween: 22
    }
  },
  navigation: {
    nextEl: '.women-products-slider-next',
    prevEl: '.women-products-slider-prev'
  }
});


// kids products slider
const kidsProductsSlider = new Swiper('.kids-products-slider', {
  centeredSlides: false,
  // speed: 1600,
  speed: 1000,
  loop: false,
  // autoplay: {
  //   delay: 8000,
  //   disableOnInteraction: true
  // },
  slidesPerView: 5,
  spaceBetween: 22,
  breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 12
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 22
    },
    1199: {
      slidesPerView: 3,
      spaceBetween: 32
    },
    1399: {
      slidesPerView: 4,
      spaceBetween: 22
    }
  },
  navigation: {
    nextEl: '.kids-products-slider-next',
    prevEl: '.kids-products-slider-prev'
  }
});


const servicesSlider = new Swiper('.services-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  loop: true,
  // autoplay: {
  //   delay: 8000,
  //   disableOnInteraction: true
  // },
  navigation: {
    nextEl: '.services-slider-button-next',
    prevEl: '.services-slider-button-prev'
  },
  pagination: {
    el: '.services-slider-pagination',
    clickable: true
  },
  slidesPerView: 3,
  spaceBetween: 1,
  breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 1
    },
    1199: {
      slidesPerView: 3,
      spaceBetween: 1
    }
  }
});

// testimonials slider
const testimonialsSlider = new Swiper('.testimonials-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  // effect: "fade",
  // fadeEffect: {
  //   crossFade: true
  // },
  // loop: true,
  // autoplay: {
  //   delay: 8000,
  //   disableOnInteraction: true
  // },
  slidesPerView: 1,
  spaceBetween: 32,
  navigation: {
    nextEl: '.testimonials-slider-next',
    prevEl: '.testimonials-slider-prev'
  },
  pagination: {
    el: '.testimonials-slider-pagination',
    clickable: true
  }
});

// home partners slider
const homePartnerssSlider = new Swiper('.home-partners-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1000,
  loop: true,
  slidesPerView: 5,
  // spaceBetween: 40,
  breakpoints: {
    1199: {
      slidesPerView: 3
      // spaceBetween: 30,
    },

    767: {
      slidesPerView: 2
      // spaceBetween: 30,
    }
  },

  autoplay: {
    delay: 1000,
    disableOnInteraction: false
  }
  // navigation: {
  //   nextEl: '.clients-slider-next',
  //   prevEl: '.clients-slider-prev',
  // },
  // pagination: {
  //   el: '.clients-slider-pagination',
  //   clickable: true
  // }
});

// home gallery section
if (document.querySelector('.mfa-gallery')) {
  for (let g of document.querySelectorAll('.mfa-gallery')) {
    lightGallery(g, {
      thumbnail: true
    });
  }
}

// faqs section
const UIquestions = document.querySelectorAll('.question-div');
const UIanswers = document.querySelectorAll('.answer-div');
for (let a of UIanswers) {
  a.style.height = 0 + 'px';
}
UIquestions.forEach(q => {
  q.addEventListener('click', e => {
    let answerHeight = 0;
    for (let ele of q.nextElementSibling.children) {
      answerHeight += ele.offsetHeight;
    }
    if (e.currentTarget.nextElementSibling.offsetHeight === 0) {
      UIquestions.forEach(qq => {
        qq.nextElementSibling.style.height = 0 + 'px';
        qq.parentElement.classList.remove('toggle-q-a-li');
      });
      e.currentTarget.nextElementSibling.style.height = answerHeight + 'px';
    } else {
      e.currentTarget.nextElementSibling.style.height = 0 + 'px';
    }
    e.currentTarget.parentElement.classList.toggle('toggle-q-a-li');
  });
});

//////////////////////////////////////////////////////////////
if (document.querySelector('.about-drop-div')) {
  const UIaboutDropDivs = document.querySelectorAll('.about-drop-div');
  const UIaboutImages = document.querySelectorAll('.images-wrapper>ul>li');

  // open the first dropped ul
  const firstDropped = UIaboutDropDivs[0].nextElementSibling;
  let initialHeight = 0;
  for (let k of firstDropped.children) {
    initialHeight += k.offsetHeight;
  }
  firstDropped.style.height = initialHeight + 'px';
  firstDropped.parentElement.classList.add('toggle-drop-li');
  for (let dropDiv of UIaboutDropDivs) {
    dropDiv.addEventListener('click', e => {
      // reset all the dropped ul height to zero
      for (let ele of UIaboutDropDivs) {
        ele.nextElementSibling.style.height = 0 + 'px';
        ele.parentElement.classList.remove('toggle-drop-li');
      }
      // remove all the active image li
      for (let ele of UIaboutImages) {
        ele.classList.remove('active-li-img');
      }
      // calc the height of the dropped ul and set its height
      let calcDroppedHeight = 0;
      for (let h of dropDiv.nextElementSibling.children[0].children) {
        calcDroppedHeight += h.offsetHeight;
        if (dropDiv.nextElementSibling.offsetHeight === 0) {
          dropDiv.nextElementSibling.style.height = calcDroppedHeight + 'px';
          dropDiv.parentElement.classList.add('toggle-drop-li');
        } else {
          dropDiv.nextElementSibling.style.height = 0 + 'px';
          dropDiv.parentElement.classList.remove('toggle-drop-li');
        }
      }
      const toBeActiveImage = document.querySelector(
        `.images-wrapper .${dropDiv.dataset.img}`
      );
      toBeActiveImage.classList.add('active-li-img');
    });
  }
}
//////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////
//////////////////////// Mfa Filter ////////////////////////
if (document.querySelector('.mfa-filter-wrapper')) {
  const UIfilterContent = document.querySelector('.mfa-filter-content');
  const UImfaFilterBtns = document.querySelectorAll('.mfa-filter-btns>li');
  const UImfaFilterContent = document.querySelectorAll(
    '.mfa-filter-content>ul>li'
  );
  const UImfaFilterLoader = document.querySelector(
    '.mfa-filter-content .filter-loader'
  );

  // first of all give all the filter content the acvtive-filter-content class
  // and add the active to the __all__ button
  for (let ele of UImfaFilterContent)
    ele.classList.add('active-filter-content');
  for (let btn of UImfaFilterBtns)
    if (btn.dataset.mfaFilter === '__all__')
      btn.classList.add('active-filter-btn');

  for (let btn of UImfaFilterBtns) {
    btn.addEventListener('click', () => {
      // remove active-filter from all filter content first
      // and remove active-btn from all filter btns first
      for (let ele of UImfaFilterContent)
        ele.classList.remove('active-filter-content');
      for (let button of UImfaFilterBtns)
        button.classList.remove('active-filter-btn');

      // check if the all button is clicked, then add the active
      // class to all the filter content
      if (btn.dataset.mfaFilter === '__all__')
        for (let ele of UImfaFilterContent)
          ele.classList.add('active-filter-content');

      // then check for every button click
      // then set the active class to the button it self
      // and set the active class to the filtered content using the data attribute
      // and finally show the filter loader for one second and then hide it
      btn.classList.add('active-filter-btn');
      const filtered = document.querySelectorAll(
        `.mfa-filter-content>ul>.${btn.dataset.mfaFilter}`
      );
      for (let ele of filtered) {
        ele.classList.add('active-filter-content');
      }
      UImfaFilterLoader.classList.add('active-filter-loader');
      UIfilterContent.classList.add('hide-overflow');
      setTimeout(() => {
        UImfaFilterLoader.classList.remove('active-filter-loader');
        UIfilterContent.classList.remove('hide-overflow');
      }, 1000);
    });
  }
}
//////////////////////// Mfa Filter ////////////////////////
//////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
// counter up section
if (document.querySelector('.counter-number')) {
  $('.counter-number').counterUp({
    delay: 10,
    time: 2000
  });
}
// end counter up section
//////////////////////////////////////////////////////////////////




// end trim
///////////////////////////////////////////////////////////

// $(function () {
//   $('#datepicker').datepicker();
// });

// handle upload property images
if (document.querySelector('.carrers-page')) {
  const UIupload = document.querySelector('input[type="file"]');
  const UIUploadLabel = document.querySelector('label[for="file"]');
  UIupload.addEventListener('change', handleFiles);

  function handleFiles() {
    const files = this.files;
    const fileNames = [];
    for (let i = 0; i < files.length; i++) {
      fileNames.push(files[i].name);
    }
    const fileNamesString = fileNames.join(' & ');
    UIUploadLabel.textContent = fileNamesString;
  }
}
// end handle upload property images

// handle hover on news li
if (document.querySelector('.news-li')) {
  const UInewslinks = document.querySelectorAll('.news-a');
  for (let a of UInewslinks) {
    a.addEventListener('mouseenter', () => {
      a.parentElement.classList.add('toggle-news-card');
    });

    a.addEventListener('mouseleave', () => {
      a.parentElement.classList.remove('toggle-news-card');
    });
  }
}

// handle pagination
if (document.querySelector('.pagination-ul')) {
  const UIpaginationUl = document.querySelector('.pagination-ul');
  for (let page of UIpaginationUl.children) {
    page.children[0].addEventListener('click', e => {
      for (let p of UIpaginationUl.children) {
        p.children[0].classList.remove('active-page');
      }
      const UIprevPage = document.querySelector(
        '.pagination-ul li:first-of-type a'
      );
      const UInextPage = document.querySelector(
        '.pagination-ul li:last-of-type a'
      );
      page.children[0].classList.add('active-page');
      if (
        UIprevPage.classList.contains('active-page') ||
        UInextPage.classList.contains('active-page')
      ) {
        page.children[0].classList.remove('active-page');
      }
      e.preventDefault();
    });
  }
}


// lazy loading images
document.addEventListener('DOMContentLoaded', function () {
  let lazyImages = [].slice.call(document.querySelectorAll('img.lazy'));

  if ('IntersectionObserver' in window) {
    let lazyImageObserver = new IntersectionObserver(function (
      entries,
      observer
    ) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          let lazyImage = entry.target;
          lazyImage.src = lazyImage.dataset.src;
          // lazyImage.srcset = lazyImage.dataset.srcset;

          setTimeout(() => {
            lazyImage.classList.remove('lazy');
            lazyImageObserver.unobserve(lazyImage);
            lazyImage.nextElementSibling.remove();
          }, 1000);
        }
      });
    });

    lazyImages.forEach(function (lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });
  } else {
    for (let lazyImg of document.querySelectorAll('img.lazy')) {
      lazyImg.src = lazyImg.dataset.src;
    }
  }
});

// handle gallery filter
if (document.querySelector('.gallery-filter-btns')) {
  const UIgalleryFilterBtns = document.querySelectorAll(
    '.gallery-filter-btns div'
  );
  for (let i of UIgalleryFilterBtns) {
    i.addEventListener('click', () => {
      console.log(i.dataset.showMe);
      for (let k of document.querySelectorAll('.gallery-layout')) {
        k.classList.remove('show-gallery-layout');
      }
      for (let m of UIgalleryFilterBtns) {
        m.classList.remove('active-filter-btn');
      }
      document
        .querySelector(`.${i.dataset.showMe}`)
        .classList.add('show-gallery-layout');
      i.classList.add('active-filter-btn');
    });
  }
}



// handle products filter
if (document.querySelector('.products-filter-btns')) {
  const UIproductsfilterBtns = document.querySelectorAll(
    '.products-filter-btns > div'
  );
  for (let k of document.querySelectorAll('.products-slider')) {
    // k.classList.remove('show-products-slider');
    k.style.display = 'none';
  }

  document.querySelectorAll('.products-slider')[0].style.display = 'block';


  for (let i of UIproductsfilterBtns) {
    i.addEventListener('click', () => {
      for (let k of document.querySelectorAll('.products-slider')) {
        // k.classList.remove('show-products-slider');
        k.style.display = 'none';
      }
      for (let m of UIproductsfilterBtns) {
        m.classList.remove('active-filter-btn');
      }
      // document
      //   .querySelector(`.${i.dataset.showMe}`)
      //   .classList.add('show-products-slider');
      // i.classList.add('active-filter-btn');
      document
        .querySelector(`.${i.dataset.showMe}`).style.display = 'block';
      i.classList.add('active-filter-btn');
    });
  }
}


//handle scroll to top
const UIbackToTopBtn = document.querySelector('.back-to-top-btn');
window.addEventListener('scroll', () => {
  if (window.scrollY >= 200) {
    UIbackToTopBtn.classList.add('show-me');
  } else {
    UIbackToTopBtn.classList.remove('show-me');
  }
});

UIbackToTopBtn.addEventListener('click', () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});
