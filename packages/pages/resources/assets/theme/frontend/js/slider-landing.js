var SLIDER = {


	slideProfile: function () {
		if (typeof Tech.$('.slide-profile') === 'undefined') return;
		const swiperBanner = new Swiper('.slide-profile', {
			slidesPerView: 1,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 10,
			navigation: {
				nextEl: ".profile-next",
				prevEl: ".profile-prev",
			},
			pagination: {
				el: ".pagination-profile",
				clickable: true,
			},


		});
	},

	slideResult: function () {
		if (typeof Tech.$('.slide-result') === 'undefined') return;
		const swiperBanner = new Swiper('.slide-result', {
			slidesPerView: 2,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 8,
			navigation: {
				nextEl: ".result-next",
				prevEl: ".result-prev",
			},
			pagination: {
				el: ".pagination-result",
				clickable: true,
			},
			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 15
				},
				768: {
					slidesPerView: 2.5,
					spaceBetween: 15
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 15
				},

				1023: {
					slidesPerView: 4,
					spaceBetween: 24,
				},


			}


		});
	},
	slideDevice: function () {
		if (typeof Tech.$('.slide-device') === 'undefined') return;
		const swiperBanner = new Swiper('.slide-device', {
			slidesPerView: 2,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 8,

			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 15
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 15
				},
				992: {
					slidesPerView: 4,
					spaceBetween: 15
				},

				1023: {
					slidesPerView: 5,
					spaceBetween: 15,
				},


			}


		});
	},
	slideProcedure: function () {

		if (typeof Tech.$('.dental-implant') === 'undefined') return;
		const swiperBanner = new Swiper('.dental-implant', {
			slidesPerView: 3,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 8,
			freeMode: true,
			watchSlidesProgress: true,

			breakpoints: {
				576: {
					slidesPerView: 6,
					spaceBetween: 10
				},
				768: {
					slidesPerView: 6,
					spaceBetween: 15
				},
				992: {
					slidesPerView: 6,
					spaceBetween: 15
				},

				1023: {
					slidesPerView: 6,
					spaceBetween: 15,
				},


			}

		});
		if (typeof Tech.$('.slide-procedure__content') === 'undefined') return;
		const swiperBanner1 = new Swiper('.slide-procedure__content', {
			slidesPerView: 1,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 8,
			thumbs: {
				swiper: swiperBanner,
			},
		});
	},
	slideProcedureInvisalign: function () {

		if (typeof Tech.$('.procedure-invisalign') === 'undefined') return;
		const swiperBanner = new Swiper('.procedure-invisalign', {
			slidesPerView: 3,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 8,
			freeMode: true,
			watchSlidesProgress: true,

			breakpoints: {
				576: {
					slidesPerView: 6,
					spaceBetween: 10
				},
				768: {
					slidesPerView: 6,
					spaceBetween: 15
				},
				992: {
					slidesPerView: 6,
					spaceBetween: 15
				},

				1023: {
					slidesPerView: 6,
					spaceBetween: 15,
				},


			}

		});

	},
	slideTeam: function () {
		if (typeof Tech.$('.slide-team') === 'undefined') return;
		const swiperBanner = new Swiper('.slide-team', {
			slidesPerView: 2,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 10,

			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 15
				},
				992: {
					slidesPerView: 4,
					spaceBetween: 15
				},

				1023: {
					slidesPerView: 4,
					spaceBetween: 24,
				},


			}


		});
	},
	slideExperience: function () {
		if (typeof Tech.$('.slide-experience') === 'undefined') return;
		const swiperBanner = new Swiper('.slide-experience', {
			slidesPerView: 1,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 10,
			loop: false,
			centeredSlides: true,
			disableOnInteraction: false,
			loop: true,
			effect: 'coverflow',
			coverflowEffect: {
				rotate: 0,
				stretch: 0,
				depth: 100,
				modifier: 1.5,
				slideShadows: false,
			},


			breakpoints: {
				0: {
					effect: 'false',

					slidesPerView: 1,
					spaceBetween: 10
				},
				576: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				768: {
					slidesPerView: 2.5,
					spaceBetween: 10,
					effect: 'false',
					depth: 0,
					modifier: 0,
					loop: false,
					centeredSlides: false,

				},

				992: {
					slidesPerView: 2.5,
					spaceBetween: 10,
					depth: 0,
					modifier: 0,
					loop: false,
					centeredSlides: false,
					effect: 'false',
				},
				1366: {

					slidesPerView: 2.6,
					spaceBetween: 0,
					effect: 'coverflow',
					rotate: 0,
					stretch: 0,
					depth: 100,
					modifier: 1.5,
					slideShadows: false,

				},
			}

		});
	},
	slideFeeling: function () {
		if (typeof Tech.$('.slide-feeling') === 'undefined') return;
		const swiperBanner = new Swiper('.slide-feeling', {
			slidesPerView: 1,
			disableOnInteraction: true,
			speed: 600,
			spaceBetween: 10,
			navigation: {
				nextEl: ".feeling-next",
				prevEl: ".feeling-prev",
			},
		});
	},
	init: function () {
		SLIDER.slideProfile();
		SLIDER.slideResult();
		SLIDER.slideDevice();
		SLIDER.slideProcedure();
		SLIDER.slideTeam();
		SLIDER.slideExperience();
		SLIDER.slideProcedureInvisalign();
		SLIDER.slideFeeling();

	},
}
Tech.Query.ready(function () {
	setTimeout(function () {
		SLIDER.init();
	}, 100);
});