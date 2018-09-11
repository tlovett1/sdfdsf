/******/ (function(modules) {
  // webpackBootstrap
  /******/ // The module cache
  /******/ var installedModules = {}; // The require function
  /******/
  /******/ /******/ function __webpack_require__(moduleId) {
    /******/
    /******/ // Check if module is in cache
    /******/ if (installedModules[moduleId]) {
      /******/ return installedModules[moduleId].exports;
      /******/
    } // Create a new module (and put it into the cache)
    /******/ /******/ var module = (installedModules[moduleId] = {
      /******/ i: moduleId,
      /******/ l: false,
      /******/ exports: {},
      /******/
    }); // Execute the module function
    /******/
    /******/ /******/ modules[moduleId].call(
      module.exports,
      module,
      module.exports,
      __webpack_require__,
    ); // Flag the module as loaded
    /******/
    /******/ /******/ module.l = true; // Return the exports of the module
    /******/
    /******/ /******/ return module.exports;
    /******/
  } // expose the modules object (__webpack_modules__)
  /******/
  /******/
  /******/ /******/ __webpack_require__.m = modules; // expose the module cache
  /******/
  /******/ /******/ __webpack_require__.c = installedModules; // define getter function for harmony exports
  /******/
  /******/ /******/ __webpack_require__.d = function(exports, name, getter) {
    /******/ if (!__webpack_require__.o(exports, name)) {
      /******/ Object.defineProperty(exports, name, {
        /******/ configurable: false,
        /******/ enumerable: true,
        /******/ get: getter,
        /******/
      });
      /******/
    }
    /******/
  }; // getDefaultExport function for compatibility with non-harmony modules
  /******/
  /******/ /******/ __webpack_require__.n = function(module) {
    /******/ var getter =
      module && module.__esModule
        ? /******/ function getDefault() {
            return module['default'];
          }
        : /******/ function getModuleExports() {
            return module;
          };
    /******/ __webpack_require__.d(getter, 'a', getter);
    /******/ return getter;
    /******/
  }; // Object.prototype.hasOwnProperty.call
  /******/
  /******/ /******/ __webpack_require__.o = function(object, property) {
    return Object.prototype.hasOwnProperty.call(object, property);
  }; // __webpack_public_path__
  /******/
  /******/ /******/ __webpack_require__.p = ''; // Load entry module and return exports
  /******/
  /******/ /******/ return __webpack_require__((__webpack_require__.s = 5));
  /******/
})(
  /************************************************************************/
  /******/ [
    /* 0 */
    /***/ function(module, exports) {
      var g;

      // This works in non-strict mode
      g = (function() {
        return this;
      })();

      try {
        // This works if eval is allowed (see CSP)
        g = g || Function('return this')() || (1, eval)('this');
      } catch (e) {
        // This works if the window reference is available
        if (typeof window === 'object') g = window;
      }

      // g can still be undefined, but nothing to do about it...
      // We return undefined, instead of nothing here, so it's
      // easier to handle this case. if(!global) { ...}

      module.exports = g;

      /***/
    },
    /* 1 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });
      var launchModal = (exports.launchModal = function launchModal(
        body,
        modalContent,
        item,
      ) {
        var video = item.querySelector('.video-modal');

        if (!video) {
          return false;
        }
        var videoEmbed = video.cloneNode(true);
        var iframe = videoEmbed.getElementsByTagName('iframe')[0];

        if (body[0].classList.contains('modal')) {
          body[0].classList.remove('video-modal-open');
          modalContent.innerHTML = '';
          iframe.src.replace('&autoplay=1', '');
        } else {
          body[0].classList.add('video-modal-open');
          modalContent.appendChild(videoEmbed);
          iframe.src += '&autoplay=1';
        }
      });

      exports.default = function() {
        var modal = document.getElementById('modalVideo');
        var videos = document.querySelectorAll('.video-item');
        var close = modal.querySelector('.modal-close');
        var body = document.getElementsByTagName('body');
        var modalContent = modal.querySelector('.modal-content');

        if (videos.length <= 0) {
          return false;
        }

        function Init() {
          [].forEach.call(videos, function(video) {
            video.addEventListener('click', function(event) {
              launchModal(body, modalContent, event.target.closest('li'));
            });
          });

          close.addEventListener('click', function() {
            body[0].classList.remove('video-modal-open');
            modalContent.innerHTML = '';
          });
        }

        return Init();
      };

      /***/
    },
    ,
    ,
    ,
    /* 2 */ /* 3 */ /* 4 */ /* 5 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      var _index = __webpack_require__(6);

      var _index2 = _interopRequireDefault(_index);

      var _menu = __webpack_require__(7);

      var _menu2 = _interopRequireDefault(_menu);

      var _smoothScroll = __webpack_require__(8);

      var _smoothScroll2 = _interopRequireDefault(_smoothScroll);

      var _footerSlider = __webpack_require__(11);

      var _footerSlider2 = _interopRequireDefault(_footerSlider);

      var _eventsSlider = __webpack_require__(12);

      var _eventsSlider2 = _interopRequireDefault(_eventsSlider);

      var _testimonialsSlider = __webpack_require__(13);

      var _testimonialsSlider2 = _interopRequireDefault(_testimonialsSlider);

      var _header = __webpack_require__(14);

      var _header2 = _interopRequireDefault(_header);

      var _loadMore = __webpack_require__(15);

      var _loadMore2 = _interopRequireDefault(_loadMore);

      var _videoModal = __webpack_require__(1);

      var _videoModal2 = _interopRequireDefault(_videoModal);

      var _formModal = __webpack_require__(17);

      var _formModal2 = _interopRequireDefault(_formModal);

      var _hero = __webpack_require__(18);

      var _hero2 = _interopRequireDefault(_hero);

      var _animation = __webpack_require__(20);

      var _animation2 = _interopRequireDefault(_animation);

      function _interopRequireDefault(obj) {
        return obj && obj.__esModule ? obj : { default: obj };
      }

      document.addEventListener('DOMContentLoaded', function() {
        (0, _header2.default)();
        (0, _menu2.default)();
        (0, _eventsSlider2.default)();
        (0, _testimonialsSlider2.default)();
        (0, _loadMore2.default)();
        (0, _videoModal2.default)();
        (0, _footerSlider2.default)();
        (0, _hero2.default)();
        (0, _formModal2.default)();
        (0, _animation2.default)();
        (0, _smoothScroll2.default)();
      }); // eslint-disable-line no-unused-vars

      /***/
    },
    /* 6 */
    /***/ function(module, exports) {
      // removed by extract-text-webpack-plugin
      /***/
    },
    /* 7 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      exports.default = function() {
        var siteMenu = document.getElementById('siteMenu');

        if (!siteMenu) {
          return false;
        }

        var menuButton = document.getElementById('menuButton');
        var menuItems = siteMenu.querySelectorAll('.menu-item');
        var html = document.documentElement;

        function closeMenu() {
          html.classList.remove('menu-open');
        }

        function openMenu() {
          html.classList.add('menu-open');
        }

        function Init() {
          menuButton.addEventListener('click', function() {
            if (html.classList.contains('menu-open')) {
              closeMenu();
            } else {
              openMenu();
            }
          });

          [].forEach.call(menuItems, function(menuItem) {
            var link = menuItem.querySelector('a');

            link.addEventListener('click', function(event) {
              event.preventDefault();
              closeMenu();
            });
          });
        }

        return Init();
      };

      /***/
    },
    /* 8 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      var _gumshoejs = __webpack_require__(9);

      var _gumshoejs2 = _interopRequireDefault(_gumshoejs);

      function _interopRequireDefault(obj) {
        return obj && obj.__esModule ? obj : { default: obj };
      }

      // import SmoothScroll from 'smooth-scroll';

      exports.default = function() {
        // SmoothScroll('.menu-item a[href*="#"]', {
        //   header: 'header',
        // });

        _gumshoejs2.default.init({
          selector: '.menu-item a[href*="#"]',
          selectorHeader: 'header',
          offset: 80,
          activeClass: 'active',
          scrollDelay: false,
        });

        console.log('gumshoe', _gumshoejs2.default);
      };

      /***/
    },
    /* 9 */
    /***/ function(module, exports, __webpack_require__) {
      /* WEBPACK VAR INJECTION */ (function(global) {
        var __WEBPACK_AMD_DEFINE_FACTORY__,
          __WEBPACK_AMD_DEFINE_ARRAY__,
          __WEBPACK_AMD_DEFINE_RESULT__; /*! gumshoejs v3.5.1 | (c) 2018 Chris Ferdinandi | MIT License | http://github.com/cferdinandi/gumshoe */
        !(function(e, t) {
          true
            ? !((__WEBPACK_AMD_DEFINE_ARRAY__ = []),
              (__WEBPACK_AMD_DEFINE_FACTORY__ = t(e)),
              (__WEBPACK_AMD_DEFINE_RESULT__ =
                typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function'
                  ? __WEBPACK_AMD_DEFINE_FACTORY__.apply(
                      exports,
                      __WEBPACK_AMD_DEFINE_ARRAY__,
                    )
                  : __WEBPACK_AMD_DEFINE_FACTORY__),
              __WEBPACK_AMD_DEFINE_RESULT__ !== undefined &&
                (module.exports = __WEBPACK_AMD_DEFINE_RESULT__))
            : 'object' == typeof exports
              ? (module.exports = t(e))
              : (e.gumshoe = t(e));
        })(
          'undefined' != typeof global ? global : this.window || this.global,
          function(e) {
            'use strict';
            var t,
              n,
              o,
              r,
              a,
              c,
              i,
              l = {},
              s = [],
              u = {
                selector: '[data-gumshoe] a',
                selectorHeader: '[data-gumshoe-header]',
                container: e,
                offset: 0,
                activeClass: 'active',
                scrollDelay: !1,
                callback: function() {},
              },
              f = function() {
                return (
                  'querySelector' in document &&
                  'addEventListener' in e &&
                  'classList' in document.createElement('_')
                );
              },
              d = function(e, t, n) {
                if ('[object Object]' === Object.prototype.toString.call(e))
                  for (var o in e)
                    Object.prototype.hasOwnProperty.call(e, o) &&
                      t.call(n, e[o], o, e);
                else
                  for (var r = 0, a = e.length; r < a; r++)
                    t.call(n, e[r], r, e);
              },
              v = function() {
                var e = {},
                  t = !1,
                  n = 0,
                  o = arguments.length;
                '[object Boolean]' ===
                  Object.prototype.toString.call(arguments[0]) &&
                  ((t = arguments[0]), n++);
                for (; n < o; n++) {
                  var r = arguments[n];
                  !(function(n) {
                    for (var o in n)
                      Object.prototype.hasOwnProperty.call(n, o) &&
                        (t &&
                        '[object Object]' ===
                          Object.prototype.toString.call(n[o])
                          ? (e[o] = v(!0, e[o], n[o]))
                          : (e[o] = n[o]));
                  })(r);
                }
                return e;
              },
              m = function(e) {
                return Math.max(e.scrollHeight, e.offsetHeight, e.clientHeight);
              },
              g = function() {
                return Math.max(
                  document.body.scrollHeight,
                  document.documentElement.scrollHeight,
                  document.body.offsetHeight,
                  document.documentElement.offsetHeight,
                  document.body.clientHeight,
                  document.documentElement.clientHeight,
                );
              },
              h = function(e) {
                var n = 0;
                if (e.offsetParent)
                  do {
                    (n += e.offsetTop), (e = e.offsetParent);
                  } while (e);
                else n = e.offsetTop;
                return (n = n - a - t.offset), n >= 0 ? n : 0;
              },
              p = function(t) {
                var n = t.getBoundingClientRect();
                return (
                  n.top >= 0 &&
                  n.left >= 0 &&
                  n.bottom <=
                    (e.innerHeight || document.documentElement.clientHeight) &&
                  n.right <=
                    (e.innerWidth || document.documentElement.clientWidth)
                );
              },
              y = function() {
                s.sort(function(e, t) {
                  return e.distance > t.distance
                    ? -1
                    : e.distance < t.distance
                      ? 1
                      : 0;
                });
              };
            l.setDistances = function() {
              (o = g()),
                (a = r ? m(r) + h(r) : 0),
                d(s, function(e) {
                  e.distance = h(e.target);
                }),
                y();
            };
            var b = function() {
                var e = document.querySelectorAll(t.selector);
                d(e, function(e) {
                  if (e.hash) {
                    var t = document.querySelector(e.hash);
                    t &&
                      s.push({
                        nav: e,
                        target: t,
                        parent:
                          'li' === e.parentNode.tagName.toLowerCase()
                            ? e.parentNode
                            : null,
                        distance: 0,
                      });
                  }
                });
              },
              H = function() {
                c &&
                  (c.nav.classList.remove(t.activeClass),
                  c.parent && c.parent.classList.remove(t.activeClass));
              },
              C = function(e) {
                H(),
                  e.nav.classList.add(t.activeClass),
                  e.parent && e.parent.classList.add(t.activeClass),
                  t.callback(e),
                  (c = { nav: e.nav, parent: e.parent });
              };
            l.getCurrentNav = function() {
              var n = e.pageYOffset;
              if (e.innerHeight + n >= o && p(s[0].target))
                return C(s[0]), s[0];
              for (var r = 0, a = s.length; r < a; r++) {
                var c = s[r];
                if (c.distance <= n) return C(c), c;
              }
              H(), t.callback();
            };
            var L = function() {
              d(s, function(e) {
                e.nav.classList.contains(t.activeClass) &&
                  (c = { nav: e.nav, parent: e.parent });
              });
            };
            l.destroy = function() {
              t &&
                (t.container.removeEventListener('resize', j, !1),
                t.container.removeEventListener('scroll', j, !1),
                (s = []),
                (t = null),
                (n = null),
                (o = null),
                (r = null),
                (a = null),
                (c = null),
                (i = null));
            };
            var E = function(e) {
                window.clearTimeout(n),
                  (n = setTimeout(function() {
                    l.setDistances(), l.getCurrentNav();
                  }, 66));
              },
              j = function(e) {
                n ||
                  (n = setTimeout(function() {
                    (n = null),
                      'scroll' === e.type && l.getCurrentNav(),
                      'resize' === e.type &&
                        (l.setDistances(), l.getCurrentNav());
                  }, 66));
              };
            return (
              (l.init = function(e) {
                f() &&
                  (l.destroy(),
                  (t = v(u, e || {})),
                  (r = document.querySelector(t.selectorHeader)),
                  b(),
                  0 !== s.length &&
                    (L(),
                    l.setDistances(),
                    l.getCurrentNav(),
                    t.container.addEventListener('resize', j, !1),
                    t.scrollDelay
                      ? t.container.addEventListener('scroll', E, !1)
                      : t.container.addEventListener('scroll', j, !1)));
              }),
              l
            );
          },
        );
        /* WEBPACK VAR INJECTION */
      }.call(exports, __webpack_require__(0)));

      /***/
    },
    ,
    /* 10 */ /* 11 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      exports.default = function() {
        var wrapper = document.getElementById('footerSliderWrapper');
        var slider = document.getElementById('footerSlider');

        if (!slider) {
          return false;
        }

        var rightArrow = wrapper.querySelector('.prev');
        var leftArrow = wrapper.querySelector('.next');

        jQuery(slider).slick({
          infinite: true,
          slidesToShow: 6,
          slidesToScroll: 1,
          arrows: true,
          prevArrow: jQuery(leftArrow),
          nextArrow: jQuery(rightArrow),
          dots: true,
          responsive: [
            {
              breakpoint: 1150,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 1080,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
          ],
        });
      };

      /***/
    },
    /* 12 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      exports.default = function() {
        var wrapper = document.getElementById('eventsSliderWrapper');
        var slider = document.getElementById('eventsSlider');

        if (!slider) {
          return false;
        }

        var rightArrow = wrapper.querySelector('.prev');
        var leftArrow = wrapper.querySelector('.next');

        jQuery(slider).slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          prevArrow: jQuery(leftArrow),
          nextArrow: jQuery(rightArrow),
          dots: true,
          centerMode: true,
        });
      };

      /***/
    },
    /* 13 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      exports.default = function() {
        var wrapper = document.getElementById('testimonalsSliderWrapper');
        var slider = document.getElementById('testimonalsSlider');

        if (!slider && !wrapper) {
          return false;
        }

        var totalSlides = wrapper.querySelector('.total-slides');
        var slide = wrapper.querySelector('.current-slide');
        var rightArrow = wrapper.querySelector('.prev');
        var leftArrow = wrapper.querySelector('.next');

        function setSlideCount(slideCount) {
          totalSlides.innerHTML += slideCount;
        }

        function setCurrentSlideNumber(currentSlide) {
          slide.innerHTML = currentSlide + 1;
        }

        jQuery(slider).on('init', function(event, slick) {
          var slideCount = slick.slideCount;

          setSlideCount(slideCount);
          setCurrentSlideNumber(slick.currentSlide);
        });

        jQuery(slider).slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          prevArrow: jQuery(leftArrow),
          nextArrow: jQuery(rightArrow),
          dots: true,
          fade: true,
        });

        jQuery(slider).on('beforeChange', function(
          event,
          slick,
          currentSlide,
          nextSlide,
        ) {
          setCurrentSlideNumber(nextSlide);
        });
      };

      /***/
    },
    /* 14 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      exports.default = function() {
        var siteHeader = document.getElementById('siteHeader');

        if (!siteHeader) {
          return false;
        }

        var siteHeaderHeight = siteHeader.offsetHeight;

        function onScrollAddClass() {
          siteHeader.classList.add('header-dark');
        }

        function onScrollRemoveClass() {
          siteHeader.classList.remove('header-dark');
        }

        function Init() {
          window.addEventListener('scroll', function() {
            if (window.scrollY > siteHeaderHeight) {
              onScrollAddClass();
            } else {
              onScrollRemoveClass();
            }
          });
        }

        return Init();
      };

      /***/
    },
    /* 15 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      __webpack_require__(16);

      var _videoModal = __webpack_require__(1);

      /* eslint-disable */
      exports.default = function() {
        var container = document.querySelectorAll('.video-lists');
        var loadMoreButton = document.getElementById('loadmore');
        var body = document.getElementsByTagName('body');
        var modalContent = document.getElementById('modalContent');

        var page = 2;

        if (!container || !loadMoreButton) {
          return false;
        }

        function Init() {
          loadMoreButton.addEventListener('click', function() {
            var endpoint =
              ATU.siteUrl + '/wp-json/atu/v1/videos?per_page=3&page=' + page;

            fetch(endpoint)
              .then(function(response) {
                return response.json();
              })
              .then(function(data) {
                var videoHtml = data.post;
                var videoItem = document
                  .createRange()
                  .createContextualFragment(videoHtml);
                var videoItems = videoItem.children;

                [].forEach.call(videoItems, function(item) {
                  item.style.opacity = 0;
                  item.style.transition = 'all 0.3s ease-in-out';

                  setTimeout(function() {
                    item.style.opacity = 1;
                  }, 100);

                  item.addEventListener('click', function(event) {
                    (0,
                    _videoModal.launchModal)(body, modalContent, event.target.closest('li'));
                  });
                });

                container[0].appendChild(videoItem);

                if (page === parseInt(data.more, 10)) {
                  loadMoreButton.style.display = 'none';
                }

                page += 1;
              });
          });
        }

        return Init();
      };

      /***/
    },
    /* 16 */
    /***/ function(module, exports) {
      (function(self) {
        'use strict';

        if (self.fetch) {
          return;
        }

        var support = {
          searchParams: 'URLSearchParams' in self,
          iterable: 'Symbol' in self && 'iterator' in Symbol,
          blob:
            'FileReader' in self &&
            'Blob' in self &&
            (function() {
              try {
                new Blob();
                return true;
              } catch (e) {
                return false;
              }
            })(),
          formData: 'FormData' in self,
          arrayBuffer: 'ArrayBuffer' in self,
        };

        if (support.arrayBuffer) {
          var viewClasses = [
            '[object Int8Array]',
            '[object Uint8Array]',
            '[object Uint8ClampedArray]',
            '[object Int16Array]',
            '[object Uint16Array]',
            '[object Int32Array]',
            '[object Uint32Array]',
            '[object Float32Array]',
            '[object Float64Array]',
          ];

          var isDataView = function(obj) {
            return obj && DataView.prototype.isPrototypeOf(obj);
          };

          var isArrayBufferView =
            ArrayBuffer.isView ||
            function(obj) {
              return (
                obj &&
                viewClasses.indexOf(Object.prototype.toString.call(obj)) > -1
              );
            };
        }

        function normalizeName(name) {
          if (typeof name !== 'string') {
            name = String(name);
          }
          if (/[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(name)) {
            throw new TypeError('Invalid character in header field name');
          }
          return name.toLowerCase();
        }

        function normalizeValue(value) {
          if (typeof value !== 'string') {
            value = String(value);
          }
          return value;
        }

        // Build a destructive iterator for the value list
        function iteratorFor(items) {
          var iterator = {
            next: function() {
              var value = items.shift();
              return { done: value === undefined, value: value };
            },
          };

          if (support.iterable) {
            iterator[Symbol.iterator] = function() {
              return iterator;
            };
          }

          return iterator;
        }

        function Headers(headers) {
          this.map = {};

          if (headers instanceof Headers) {
            headers.forEach(function(value, name) {
              this.append(name, value);
            }, this);
          } else if (Array.isArray(headers)) {
            headers.forEach(function(header) {
              this.append(header[0], header[1]);
            }, this);
          } else if (headers) {
            Object.getOwnPropertyNames(headers).forEach(function(name) {
              this.append(name, headers[name]);
            }, this);
          }
        }

        Headers.prototype.append = function(name, value) {
          name = normalizeName(name);
          value = normalizeValue(value);
          var oldValue = this.map[name];
          this.map[name] = oldValue ? oldValue + ',' + value : value;
        };

        Headers.prototype['delete'] = function(name) {
          delete this.map[normalizeName(name)];
        };

        Headers.prototype.get = function(name) {
          name = normalizeName(name);
          return this.has(name) ? this.map[name] : null;
        };

        Headers.prototype.has = function(name) {
          return this.map.hasOwnProperty(normalizeName(name));
        };

        Headers.prototype.set = function(name, value) {
          this.map[normalizeName(name)] = normalizeValue(value);
        };

        Headers.prototype.forEach = function(callback, thisArg) {
          for (var name in this.map) {
            if (this.map.hasOwnProperty(name)) {
              callback.call(thisArg, this.map[name], name, this);
            }
          }
        };

        Headers.prototype.keys = function() {
          var items = [];
          this.forEach(function(value, name) {
            items.push(name);
          });
          return iteratorFor(items);
        };

        Headers.prototype.values = function() {
          var items = [];
          this.forEach(function(value) {
            items.push(value);
          });
          return iteratorFor(items);
        };

        Headers.prototype.entries = function() {
          var items = [];
          this.forEach(function(value, name) {
            items.push([name, value]);
          });
          return iteratorFor(items);
        };

        if (support.iterable) {
          Headers.prototype[Symbol.iterator] = Headers.prototype.entries;
        }

        function consumed(body) {
          if (body.bodyUsed) {
            return Promise.reject(new TypeError('Already read'));
          }
          body.bodyUsed = true;
        }

        function fileReaderReady(reader) {
          return new Promise(function(resolve, reject) {
            reader.onload = function() {
              resolve(reader.result);
            };
            reader.onerror = function() {
              reject(reader.error);
            };
          });
        }

        function readBlobAsArrayBuffer(blob) {
          var reader = new FileReader();
          var promise = fileReaderReady(reader);
          reader.readAsArrayBuffer(blob);
          return promise;
        }

        function readBlobAsText(blob) {
          var reader = new FileReader();
          var promise = fileReaderReady(reader);
          reader.readAsText(blob);
          return promise;
        }

        function readArrayBufferAsText(buf) {
          var view = new Uint8Array(buf);
          var chars = new Array(view.length);

          for (var i = 0; i < view.length; i++) {
            chars[i] = String.fromCharCode(view[i]);
          }
          return chars.join('');
        }

        function bufferClone(buf) {
          if (buf.slice) {
            return buf.slice(0);
          } else {
            var view = new Uint8Array(buf.byteLength);
            view.set(new Uint8Array(buf));
            return view.buffer;
          }
        }

        function Body() {
          this.bodyUsed = false;

          this._initBody = function(body) {
            this._bodyInit = body;
            if (!body) {
              this._bodyText = '';
            } else if (typeof body === 'string') {
              this._bodyText = body;
            } else if (support.blob && Blob.prototype.isPrototypeOf(body)) {
              this._bodyBlob = body;
            } else if (
              support.formData &&
              FormData.prototype.isPrototypeOf(body)
            ) {
              this._bodyFormData = body;
            } else if (
              support.searchParams &&
              URLSearchParams.prototype.isPrototypeOf(body)
            ) {
              this._bodyText = body.toString();
            } else if (
              support.arrayBuffer &&
              support.blob &&
              isDataView(body)
            ) {
              this._bodyArrayBuffer = bufferClone(body.buffer);
              // IE 10-11 can't handle a DataView body.
              this._bodyInit = new Blob([this._bodyArrayBuffer]);
            } else if (
              support.arrayBuffer &&
              (ArrayBuffer.prototype.isPrototypeOf(body) ||
                isArrayBufferView(body))
            ) {
              this._bodyArrayBuffer = bufferClone(body);
            } else {
              throw new Error('unsupported BodyInit type');
            }

            if (!this.headers.get('content-type')) {
              if (typeof body === 'string') {
                this.headers.set('content-type', 'text/plain;charset=UTF-8');
              } else if (this._bodyBlob && this._bodyBlob.type) {
                this.headers.set('content-type', this._bodyBlob.type);
              } else if (
                support.searchParams &&
                URLSearchParams.prototype.isPrototypeOf(body)
              ) {
                this.headers.set(
                  'content-type',
                  'application/x-www-form-urlencoded;charset=UTF-8',
                );
              }
            }
          };

          if (support.blob) {
            this.blob = function() {
              var rejected = consumed(this);
              if (rejected) {
                return rejected;
              }

              if (this._bodyBlob) {
                return Promise.resolve(this._bodyBlob);
              } else if (this._bodyArrayBuffer) {
                return Promise.resolve(new Blob([this._bodyArrayBuffer]));
              } else if (this._bodyFormData) {
                throw new Error('could not read FormData body as blob');
              } else {
                return Promise.resolve(new Blob([this._bodyText]));
              }
            };

            this.arrayBuffer = function() {
              if (this._bodyArrayBuffer) {
                return consumed(this) || Promise.resolve(this._bodyArrayBuffer);
              } else {
                return this.blob().then(readBlobAsArrayBuffer);
              }
            };
          }

          this.text = function() {
            var rejected = consumed(this);
            if (rejected) {
              return rejected;
            }

            if (this._bodyBlob) {
              return readBlobAsText(this._bodyBlob);
            } else if (this._bodyArrayBuffer) {
              return Promise.resolve(
                readArrayBufferAsText(this._bodyArrayBuffer),
              );
            } else if (this._bodyFormData) {
              throw new Error('could not read FormData body as text');
            } else {
              return Promise.resolve(this._bodyText);
            }
          };

          if (support.formData) {
            this.formData = function() {
              return this.text().then(decode);
            };
          }

          this.json = function() {
            return this.text().then(JSON.parse);
          };

          return this;
        }

        // HTTP methods whose capitalization should be normalized
        var methods = ['DELETE', 'GET', 'HEAD', 'OPTIONS', 'POST', 'PUT'];

        function normalizeMethod(method) {
          var upcased = method.toUpperCase();
          return methods.indexOf(upcased) > -1 ? upcased : method;
        }

        function Request(input, options) {
          options = options || {};
          var body = options.body;

          if (input instanceof Request) {
            if (input.bodyUsed) {
              throw new TypeError('Already read');
            }
            this.url = input.url;
            this.credentials = input.credentials;
            if (!options.headers) {
              this.headers = new Headers(input.headers);
            }
            this.method = input.method;
            this.mode = input.mode;
            if (!body && input._bodyInit != null) {
              body = input._bodyInit;
              input.bodyUsed = true;
            }
          } else {
            this.url = String(input);
          }

          this.credentials = options.credentials || this.credentials || 'omit';
          if (options.headers || !this.headers) {
            this.headers = new Headers(options.headers);
          }
          this.method = normalizeMethod(options.method || this.method || 'GET');
          this.mode = options.mode || this.mode || null;
          this.referrer = null;

          if ((this.method === 'GET' || this.method === 'HEAD') && body) {
            throw new TypeError('Body not allowed for GET or HEAD requests');
          }
          this._initBody(body);
        }

        Request.prototype.clone = function() {
          return new Request(this, { body: this._bodyInit });
        };

        function decode(body) {
          var form = new FormData();
          body
            .trim()
            .split('&')
            .forEach(function(bytes) {
              if (bytes) {
                var split = bytes.split('=');
                var name = split.shift().replace(/\+/g, ' ');
                var value = split.join('=').replace(/\+/g, ' ');
                form.append(
                  decodeURIComponent(name),
                  decodeURIComponent(value),
                );
              }
            });
          return form;
        }

        function parseHeaders(rawHeaders) {
          var headers = new Headers();
          // Replace instances of \r\n and \n followed by at least one space or horizontal tab with a space
          // https://tools.ietf.org/html/rfc7230#section-3.2
          var preProcessedHeaders = rawHeaders.replace(/\r?\n[\t ]+/g, ' ');
          preProcessedHeaders.split(/\r?\n/).forEach(function(line) {
            var parts = line.split(':');
            var key = parts.shift().trim();
            if (key) {
              var value = parts.join(':').trim();
              headers.append(key, value);
            }
          });
          return headers;
        }

        Body.call(Request.prototype);

        function Response(bodyInit, options) {
          if (!options) {
            options = {};
          }

          this.type = 'default';
          this.status = options.status === undefined ? 200 : options.status;
          this.ok = this.status >= 200 && this.status < 300;
          this.statusText = 'statusText' in options ? options.statusText : 'OK';
          this.headers = new Headers(options.headers);
          this.url = options.url || '';
          this._initBody(bodyInit);
        }

        Body.call(Response.prototype);

        Response.prototype.clone = function() {
          return new Response(this._bodyInit, {
            status: this.status,
            statusText: this.statusText,
            headers: new Headers(this.headers),
            url: this.url,
          });
        };

        Response.error = function() {
          var response = new Response(null, { status: 0, statusText: '' });
          response.type = 'error';
          return response;
        };

        var redirectStatuses = [301, 302, 303, 307, 308];

        Response.redirect = function(url, status) {
          if (redirectStatuses.indexOf(status) === -1) {
            throw new RangeError('Invalid status code');
          }

          return new Response(null, {
            status: status,
            headers: { location: url },
          });
        };

        self.Headers = Headers;
        self.Request = Request;
        self.Response = Response;

        self.fetch = function(input, init) {
          return new Promise(function(resolve, reject) {
            var request = new Request(input, init);
            var xhr = new XMLHttpRequest();

            xhr.onload = function() {
              var options = {
                status: xhr.status,
                statusText: xhr.statusText,
                headers: parseHeaders(xhr.getAllResponseHeaders() || ''),
              };
              options.url =
                'responseURL' in xhr
                  ? xhr.responseURL
                  : options.headers.get('X-Request-URL');
              var body = 'response' in xhr ? xhr.response : xhr.responseText;
              resolve(new Response(body, options));
            };

            xhr.onerror = function() {
              reject(new TypeError('Network request failed'));
            };

            xhr.ontimeout = function() {
              reject(new TypeError('Network request failed'));
            };

            xhr.open(request.method, request.url, true);

            if (request.credentials === 'include') {
              xhr.withCredentials = true;
            } else if (request.credentials === 'omit') {
              xhr.withCredentials = false;
            }

            if ('responseType' in xhr && support.blob) {
              xhr.responseType = 'blob';
            }

            request.headers.forEach(function(value, name) {
              xhr.setRequestHeader(name, value);
            });

            xhr.send(
              typeof request._bodyInit === 'undefined'
                ? null
                : request._bodyInit,
            );
          });
        };
        self.fetch.polyfill = true;
      })(typeof self !== 'undefined' ? self : this);

      /***/
    },
    /* 17 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      exports.default = function() {
        var modal = document.getElementById('modal');
        var buttons = document.querySelectorAll('.form-button');
        var close = modal.querySelector('.modal-close');
        var body = document.getElementsByTagName('body')[0];

        if (buttons.length <= 0) {
          return false;
        }

        function Init() {
          [].forEach.call(buttons, function(button) {
            button.addEventListener('click', function() {
              body.classList.toggle('modal-open');
            });
          });

          close.addEventListener('click', function() {
            body.classList.remove('modal-open');
          });
        }

        return Init();
      };

      /***/
    },
    /* 18 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      var _imageComparison = __webpack_require__(19);

      var _imageComparison2 = _interopRequireDefault(_imageComparison);

      function _interopRequireDefault(obj) {
        return obj && obj.__esModule ? obj : { default: obj };
      }

      exports.default = function() {
        var hero = document.querySelectorAll('.hero');

        if (!hero) {
          return false;
        }
        var sliderContainer = document.querySelector('.hero-slider-container');
        var images = document.querySelectorAll('.comparison-image');

        function Init() {
          new _imageComparison2.default({
            container: sliderContainer,
            startPosition: 50,
            data: [
              {
                image: images[0],
              },
              {
                image: images[1],
              },
            ],
          });
        }

        return Init();
      };

      /***/
    },
    /* 19 */
    /***/ function(module, exports, __webpack_require__) {
      var __WEBPACK_AMD_DEFINE_ARRAY__,
        __WEBPACK_AMD_DEFINE_RESULT__; /*
     * ImageComparison: Slider to quickly compare two images.
     *
     * By Max Ulyanov
     * Src: https://github.com/M-Ulyanov/ImageComparison/
     * Example https://m-ulyanov.github.io/image-comparison/
     */

      (function(root) {
        const defaultOptions = {
          container: null,
          startPosition: 50,
          data: null,
        };

        /**
         * Constructor
         * @param options
         */
        function ImageComparison(options) {
          this.options = utils.extend({}, [defaultOptions, options], {
            clearEmpty: true,
          });
          this.container = this.options.container;
          this.images = [
            this.options.data[0].image,
            this.options.data[1].image,
          ];
          this.labels = [
            this.options.data[0].label,
            this.options.data[1].label,
          ];
          this._animateInterval = null;
          this._comparisonSeparator = null;
          this._items = [];

          if (this.container == null) {
            console.error('Container element not found!');
          }

          if (!this.images[0] || !this.images[1]) {
            console.error('Need two images!');
          }

          this._build();
          this._setEvents();
        }

        /**
         * Build HTML structure
         * @private
         */
        ImageComparison.prototype._build = function() {
          this.options.container.classList.add('comparison-widget');
          for (var i = 0; i < 2; i++) {
            var item = document.createElement('div');
            item.classList.add('comparison-item');

            var content = document.createElement('div');
            content.classList.add('comparison-item__content');
            if (this.labels[i]) {
              content.innerHTML =
                '<div class="comparison-item__label">' +
                this.labels[i] +
                '</div>';
            }
            this.images[i].classList.add('comparison-item__image');
            content.appendChild(this.images[i]);
            item.appendChild(content);

            if (i === 0) {
              item.classList.add('comparison-item--first');
              item.style.width = this.options.startPosition + '%';
              this._comparisonSeparator = document.createElement('div');
              this._comparisonSeparator.classList.add('comparison-separator');
              this._comparisonSeparator.innerHTML =
                '<div class="comparison-control"><div class="comparison-control__mask"></div></div>';
              item.appendChild(this._comparisonSeparator);
            }

            this._items.push(item);
            this.container.appendChild(item);
          }
        };

        /**
         * Set need DOM events
         * @private
         */
        ImageComparison.prototype._setEvents = function() {
          var comparison = this;

          comparison.container.addEventListener('click', function(event) {
            comparison._calcPosition(event);
          });

          utils.setMultiEvents(
            comparison._comparisonSeparator,
            ['mousedown', 'touchstart'],
            function() {
              comparison._comparisonSeparator.classList.add('actived');
            },
          );

          utils.setMultiEvents(
            document.body,
            ['mouseup', 'touchend'],
            function() {
              comparison._comparisonSeparator.classList.remove('actived');
            },
          );

          utils.setMultiEvents(
            document.body,
            ['mousemove', 'touchmove'],
            function(event) {
              if (
                comparison._comparisonSeparator.classList.contains('actived')
              ) {
                comparison._calcPosition(event);
                if (document['selection']) {
                  document['selection'].empty();
                }
              }
            },
          );

          utils.setMultiEvents(window, ['resize', 'load'], function() {
            comparison._setImageSize();
          });

          for (var i = 0; i < comparison.images.length; i++) {
            comparison.images[i].addEventListener('dragstart', function(e) {
              e.preventDefault();
            });
          }
        };

        /**
         * Calc current position (click, touch or move)
         * @param event
         * @private
         */
        ImageComparison.prototype._calcPosition = function(event) {
          var containerCoords = this.container.getBoundingClientRect();
          var containerWidth = containerCoords.width;
          /** @namespace event.touches */
          var horizontalPositionForElement =
            (event.clientX || event.touches[0].pageX) - containerCoords.left;
          var positionInPercent =
            (horizontalPositionForElement * 100) / containerWidth;
          if (positionInPercent > 100) {
            positionInPercent = 100;
          } else if (positionInPercent < 0) {
            positionInPercent = 0;
          }
          this._controllerPosition(positionInPercent.toFixed(2), event.type);
        };

        /**
         * Controller position
         * @param positionInPercent
         * @param eventType
         * @private
         */
        ImageComparison.prototype._controllerPosition = function(
          positionInPercent,
          eventType,
        ) {
          switch (eventType) {
            case 'click':
              this._setPositionWithAnimate(positionInPercent);
              break;
            default:
              this._updatePosition(positionInPercent);
          }
        };

        /**
         * Set position with animate
         * @param newPositionInPercent
         * @returns {boolean}
         * @private
         */
        ImageComparison.prototype._setPositionWithAnimate = function(
          newPositionInPercent,
        ) {
          var comparison = this;
          var currentPositionInPercent = parseFloat(
            comparison._items[0].style.width,
          );
          clearInterval(comparison._animateInterval);

          if (newPositionInPercent == currentPositionInPercent) {
            return false;
          } else if (currentPositionInPercent > newPositionInPercent) {
            decrementPosition();
          } else {
            incrementPosition();
          }

          // Support animate functions
          function incrementPosition() {
            comparison._animateInterval = setInterval(function() {
              currentPositionInPercent++;
              comparison._updatePosition(currentPositionInPercent);
              if (currentPositionInPercent >= newPositionInPercent) {
                setFinalPositionAndClearInterval();
              }
            }, 10);
          }

          function decrementPosition() {
            comparison._animateInterval = setInterval(function() {
              currentPositionInPercent--;
              comparison._updatePosition(currentPositionInPercent);
              if (currentPositionInPercent <= newPositionInPercent) {
                setFinalPositionAndClearInterval();
              }
            }, 10);
          }

          function setFinalPositionAndClearInterval() {
            comparison._updatePosition(newPositionInPercent);
            clearInterval(comparison._animateInterval);
          }
        };

        /**
         * Set position item[0]
         * @param percent
         * @private
         */
        ImageComparison.prototype._updatePosition = function(percent) {
          this._items[0].style.width = percent + '%';
        };

        /**
         * Set the width of image that has a position absolute
         * @private
         */
        ImageComparison.prototype._setImageSize = function() {
          this.images[0].style.width = this.container.offsetWidth + 'px';
        };

        /**
         * Utils Methods
         * @type {{extend: Function, getConstructor: Function}}
         */
        var utils = {
          /**
           * Native extend object
           * @param target
           * @param objects
           * @param options
           * @returns {*}
           */
          extend: function(target, objects, options) {
            for (var object in objects) {
              if (objects.hasOwnProperty(object)) {
                recursiveMerge(target, objects[object]);
              }
            }

            function recursiveMerge(target, object) {
              for (var property in object) {
                if (object.hasOwnProperty(property)) {
                  var current = object[property];
                  if (utils.getConstructor(current) === 'Object') {
                    if (!target[property]) {
                      target[property] = {};
                    }
                    recursiveMerge(target[property], current);
                  } else {
                    // clearEmpty
                    if (options.clearEmpty) {
                      if (current == null) {
                        continue;
                      }
                    }
                    target[property] = current;
                  }
                }
              }
            }

            return target;
          },

          /**
           * Set Multi addEventListener
           * @param element
           * @param events
           * @param func
           */
          setMultiEvents: function(element, events, func) {
            for (var i = 0; i < events.length; i++) {
              element.addEventListener(events[i], func);
            }
          },

          /**
           * Get object constructor
           * @param object
           * @returns {string}
           */
          getConstructor: function(object) {
            return Object.prototype.toString.call(object).slice(8, -1);
          },
        };

        if (true) {
          !((__WEBPACK_AMD_DEFINE_ARRAY__ = []),
          (__WEBPACK_AMD_DEFINE_RESULT__ = function() {
            return ImageComparison;
          }.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)),
          __WEBPACK_AMD_DEFINE_RESULT__ !== undefined &&
            (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
        } else {
          root.ImageComparison = ImageComparison;
        }
      })(this);

      /***/
    },
    /* 20 */
    /***/ function(module, exports, __webpack_require__) {
      'use strict';

      Object.defineProperty(exports, '__esModule', {
        value: true,
      });

      var _aos = __webpack_require__(21);

      var _aos2 = _interopRequireDefault(_aos);

      function _interopRequireDefault(obj) {
        return obj && obj.__esModule ? obj : { default: obj };
      }

      exports.default = function() {
        _aos2.default.init({
          easing: 'ease-out-back',
          duration: 1000,
        });
      };

      /***/
    },
    /* 21 */
    /***/ function(module, exports, __webpack_require__) {
      !(function(e, t) {
        true
          ? (module.exports = t())
          : 'function' == typeof define && define.amd
            ? define([], t)
            : 'object' == typeof exports
              ? (exports.AOS = t())
              : (e.AOS = t());
      })(this, function() {
        return (function(e) {
          function t(o) {
            if (n[o]) return n[o].exports;
            var i = (n[o] = { exports: {}, id: o, loaded: !1 });
            return (
              e[o].call(i.exports, i, i.exports, t), (i.loaded = !0), i.exports
            );
          }
          var n = {};
          return (t.m = e), (t.c = n), (t.p = 'dist/'), t(0);
        })([
          function(e, t, n) {
            'use strict';
            function o(e) {
              return e && e.__esModule ? e : { default: e };
            }
            var i =
                Object.assign ||
                function(e) {
                  for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var o in n)
                      Object.prototype.hasOwnProperty.call(n, o) &&
                        (e[o] = n[o]);
                  }
                  return e;
                },
              r = n(1),
              a = (o(r), n(6)),
              u = o(a),
              c = n(7),
              f = o(c),
              s = n(8),
              d = o(s),
              l = n(9),
              p = o(l),
              m = n(10),
              b = o(m),
              v = n(11),
              y = o(v),
              g = n(14),
              h = o(g),
              w = [],
              k = !1,
              x = {
                offset: 120,
                delay: 0,
                easing: 'ease',
                duration: 400,
                disable: !1,
                once: !1,
                startEvent: 'DOMContentLoaded',
                throttleDelay: 99,
                debounceDelay: 50,
                disableMutationObserver: !1,
              },
              j = function() {
                var e =
                  arguments.length > 0 &&
                  void 0 !== arguments[0] &&
                  arguments[0];
                if ((e && (k = !0), k))
                  return (
                    (w = (0, y.default)(w, x)), (0, b.default)(w, x.once), w
                  );
              },
              O = function() {
                (w = (0, h.default)()), j();
              },
              _ = function() {
                w.forEach(function(e, t) {
                  e.node.removeAttribute('data-aos'),
                    e.node.removeAttribute('data-aos-easing'),
                    e.node.removeAttribute('data-aos-duration'),
                    e.node.removeAttribute('data-aos-delay');
                });
              },
              S = function(e) {
                return (
                  e === !0 ||
                  ('mobile' === e && p.default.mobile()) ||
                  ('phone' === e && p.default.phone()) ||
                  ('tablet' === e && p.default.tablet()) ||
                  ('function' == typeof e && e() === !0)
                );
              },
              z = function(e) {
                (x = i(x, e)), (w = (0, h.default)());
                var t = document.all && !window.atob;
                return S(x.disable) || t
                  ? _()
                  : (document
                      .querySelector('body')
                      .setAttribute('data-aos-easing', x.easing),
                    document
                      .querySelector('body')
                      .setAttribute('data-aos-duration', x.duration),
                    document
                      .querySelector('body')
                      .setAttribute('data-aos-delay', x.delay),
                    'DOMContentLoaded' === x.startEvent &&
                    ['complete', 'interactive'].indexOf(document.readyState) >
                      -1
                      ? j(!0)
                      : 'load' === x.startEvent
                        ? window.addEventListener(x.startEvent, function() {
                            j(!0);
                          })
                        : document.addEventListener(x.startEvent, function() {
                            j(!0);
                          }),
                    window.addEventListener(
                      'resize',
                      (0, f.default)(j, x.debounceDelay, !0),
                    ),
                    window.addEventListener(
                      'orientationchange',
                      (0, f.default)(j, x.debounceDelay, !0),
                    ),
                    window.addEventListener(
                      'scroll',
                      (0, u.default)(function() {
                        (0, b.default)(w, x.once);
                      }, x.throttleDelay),
                    ),
                    x.disableMutationObserver ||
                      (0, d.default)('[data-aos]', O),
                    w);
              };
            e.exports = { init: z, refresh: j, refreshHard: O };
          },
          function(e, t) {},
          ,
          ,
          ,
          ,
          function(e, t) {
            (function(t) {
              'use strict';
              function n(e, t, n) {
                function o(t) {
                  var n = b,
                    o = v;
                  return (b = v = void 0), (k = t), (g = e.apply(o, n));
                }
                function r(e) {
                  return (k = e), (h = setTimeout(s, t)), _ ? o(e) : g;
                }
                function a(e) {
                  var n = e - w,
                    o = e - k,
                    i = t - n;
                  return S ? j(i, y - o) : i;
                }
                function c(e) {
                  var n = e - w,
                    o = e - k;
                  return void 0 === w || n >= t || n < 0 || (S && o >= y);
                }
                function s() {
                  var e = O();
                  return c(e) ? d(e) : void (h = setTimeout(s, a(e)));
                }
                function d(e) {
                  return (h = void 0), z && b ? o(e) : ((b = v = void 0), g);
                }
                function l() {
                  void 0 !== h && clearTimeout(h),
                    (k = 0),
                    (b = w = v = h = void 0);
                }
                function p() {
                  return void 0 === h ? g : d(O());
                }
                function m() {
                  var e = O(),
                    n = c(e);
                  if (((b = arguments), (v = this), (w = e), n)) {
                    if (void 0 === h) return r(w);
                    if (S) return (h = setTimeout(s, t)), o(w);
                  }
                  return void 0 === h && (h = setTimeout(s, t)), g;
                }
                var b,
                  v,
                  y,
                  g,
                  h,
                  w,
                  k = 0,
                  _ = !1,
                  S = !1,
                  z = !0;
                if ('function' != typeof e) throw new TypeError(f);
                return (
                  (t = u(t) || 0),
                  i(n) &&
                    ((_ = !!n.leading),
                    (S = 'maxWait' in n),
                    (y = S ? x(u(n.maxWait) || 0, t) : y),
                    (z = 'trailing' in n ? !!n.trailing : z)),
                  (m.cancel = l),
                  (m.flush = p),
                  m
                );
              }
              function o(e, t, o) {
                var r = !0,
                  a = !0;
                if ('function' != typeof e) throw new TypeError(f);
                return (
                  i(o) &&
                    ((r = 'leading' in o ? !!o.leading : r),
                    (a = 'trailing' in o ? !!o.trailing : a)),
                  n(e, t, { leading: r, maxWait: t, trailing: a })
                );
              }
              function i(e) {
                var t = 'undefined' == typeof e ? 'undefined' : c(e);
                return !!e && ('object' == t || 'function' == t);
              }
              function r(e) {
                return (
                  !!e &&
                  'object' == ('undefined' == typeof e ? 'undefined' : c(e))
                );
              }
              function a(e) {
                return (
                  'symbol' == ('undefined' == typeof e ? 'undefined' : c(e)) ||
                  (r(e) && k.call(e) == d)
                );
              }
              function u(e) {
                if ('number' == typeof e) return e;
                if (a(e)) return s;
                if (i(e)) {
                  var t = 'function' == typeof e.valueOf ? e.valueOf() : e;
                  e = i(t) ? t + '' : t;
                }
                if ('string' != typeof e) return 0 === e ? e : +e;
                e = e.replace(l, '');
                var n = m.test(e);
                return n || b.test(e)
                  ? v(e.slice(2), n ? 2 : 8)
                  : p.test(e)
                    ? s
                    : +e;
              }
              var c =
                  'function' == typeof Symbol &&
                  'symbol' == typeof Symbol.iterator
                    ? function(e) {
                        return typeof e;
                      }
                    : function(e) {
                        return e &&
                          'function' == typeof Symbol &&
                          e.constructor === Symbol &&
                          e !== Symbol.prototype
                          ? 'symbol'
                          : typeof e;
                      },
                f = 'Expected a function',
                s = NaN,
                d = '[object Symbol]',
                l = /^\s+|\s+$/g,
                p = /^[-+]0x[0-9a-f]+$/i,
                m = /^0b[01]+$/i,
                b = /^0o[0-7]+$/i,
                v = parseInt,
                y =
                  'object' == ('undefined' == typeof t ? 'undefined' : c(t)) &&
                  t &&
                  t.Object === Object &&
                  t,
                g =
                  'object' ==
                    ('undefined' == typeof self ? 'undefined' : c(self)) &&
                  self &&
                  self.Object === Object &&
                  self,
                h = y || g || Function('return this')(),
                w = Object.prototype,
                k = w.toString,
                x = Math.max,
                j = Math.min,
                O = function() {
                  return h.Date.now();
                };
              e.exports = o;
            }.call(
              t,
              (function() {
                return this;
              })(),
            ));
          },
          function(e, t) {
            (function(t) {
              'use strict';
              function n(e, t, n) {
                function i(t) {
                  var n = b,
                    o = v;
                  return (b = v = void 0), (O = t), (g = e.apply(o, n));
                }
                function r(e) {
                  return (O = e), (h = setTimeout(s, t)), _ ? i(e) : g;
                }
                function u(e) {
                  var n = e - w,
                    o = e - O,
                    i = t - n;
                  return S ? x(i, y - o) : i;
                }
                function f(e) {
                  var n = e - w,
                    o = e - O;
                  return void 0 === w || n >= t || n < 0 || (S && o >= y);
                }
                function s() {
                  var e = j();
                  return f(e) ? d(e) : void (h = setTimeout(s, u(e)));
                }
                function d(e) {
                  return (h = void 0), z && b ? i(e) : ((b = v = void 0), g);
                }
                function l() {
                  void 0 !== h && clearTimeout(h),
                    (O = 0),
                    (b = w = v = h = void 0);
                }
                function p() {
                  return void 0 === h ? g : d(j());
                }
                function m() {
                  var e = j(),
                    n = f(e);
                  if (((b = arguments), (v = this), (w = e), n)) {
                    if (void 0 === h) return r(w);
                    if (S) return (h = setTimeout(s, t)), i(w);
                  }
                  return void 0 === h && (h = setTimeout(s, t)), g;
                }
                var b,
                  v,
                  y,
                  g,
                  h,
                  w,
                  O = 0,
                  _ = !1,
                  S = !1,
                  z = !0;
                if ('function' != typeof e) throw new TypeError(c);
                return (
                  (t = a(t) || 0),
                  o(n) &&
                    ((_ = !!n.leading),
                    (S = 'maxWait' in n),
                    (y = S ? k(a(n.maxWait) || 0, t) : y),
                    (z = 'trailing' in n ? !!n.trailing : z)),
                  (m.cancel = l),
                  (m.flush = p),
                  m
                );
              }
              function o(e) {
                var t = 'undefined' == typeof e ? 'undefined' : u(e);
                return !!e && ('object' == t || 'function' == t);
              }
              function i(e) {
                return (
                  !!e &&
                  'object' == ('undefined' == typeof e ? 'undefined' : u(e))
                );
              }
              function r(e) {
                return (
                  'symbol' == ('undefined' == typeof e ? 'undefined' : u(e)) ||
                  (i(e) && w.call(e) == s)
                );
              }
              function a(e) {
                if ('number' == typeof e) return e;
                if (r(e)) return f;
                if (o(e)) {
                  var t = 'function' == typeof e.valueOf ? e.valueOf() : e;
                  e = o(t) ? t + '' : t;
                }
                if ('string' != typeof e) return 0 === e ? e : +e;
                e = e.replace(d, '');
                var n = p.test(e);
                return n || m.test(e)
                  ? b(e.slice(2), n ? 2 : 8)
                  : l.test(e)
                    ? f
                    : +e;
              }
              var u =
                  'function' == typeof Symbol &&
                  'symbol' == typeof Symbol.iterator
                    ? function(e) {
                        return typeof e;
                      }
                    : function(e) {
                        return e &&
                          'function' == typeof Symbol &&
                          e.constructor === Symbol &&
                          e !== Symbol.prototype
                          ? 'symbol'
                          : typeof e;
                      },
                c = 'Expected a function',
                f = NaN,
                s = '[object Symbol]',
                d = /^\s+|\s+$/g,
                l = /^[-+]0x[0-9a-f]+$/i,
                p = /^0b[01]+$/i,
                m = /^0o[0-7]+$/i,
                b = parseInt,
                v =
                  'object' == ('undefined' == typeof t ? 'undefined' : u(t)) &&
                  t &&
                  t.Object === Object &&
                  t,
                y =
                  'object' ==
                    ('undefined' == typeof self ? 'undefined' : u(self)) &&
                  self &&
                  self.Object === Object &&
                  self,
                g = v || y || Function('return this')(),
                h = Object.prototype,
                w = h.toString,
                k = Math.max,
                x = Math.min,
                j = function() {
                  return g.Date.now();
                };
              e.exports = n;
            }.call(
              t,
              (function() {
                return this;
              })(),
            ));
          },
          function(e, t) {
            'use strict';
            function n(e) {
              var t = void 0,
                o = void 0,
                i = void 0;
              for (t = 0; t < e.length; t += 1) {
                if (((o = e[t]), o.dataset && o.dataset.aos)) return !0;
                if ((i = o.children && n(o.children))) return !0;
              }
              return !1;
            }
            function o(e, t) {
              var n = window.document,
                o =
                  window.MutationObserver ||
                  window.WebKitMutationObserver ||
                  window.MozMutationObserver,
                a = new o(i);
              (r = t),
                a.observe(n.documentElement, {
                  childList: !0,
                  subtree: !0,
                  removedNodes: !0,
                });
            }
            function i(e) {
              e &&
                e.forEach(function(e) {
                  var t = Array.prototype.slice.call(e.addedNodes),
                    o = Array.prototype.slice.call(e.removedNodes),
                    i = t.concat(o);
                  if (n(i)) return r();
                });
            }
            Object.defineProperty(t, '__esModule', { value: !0 });
            var r = function() {};
            t.default = o;
          },
          function(e, t) {
            'use strict';
            function n(e, t) {
              if (!(e instanceof t))
                throw new TypeError('Cannot call a class as a function');
            }
            function o() {
              return (
                navigator.userAgent || navigator.vendor || window.opera || ''
              );
            }
            Object.defineProperty(t, '__esModule', { value: !0 });
            var i = (function() {
                function e(e, t) {
                  for (var n = 0; n < t.length; n++) {
                    var o = t[n];
                    (o.enumerable = o.enumerable || !1),
                      (o.configurable = !0),
                      'value' in o && (o.writable = !0),
                      Object.defineProperty(e, o.key, o);
                  }
                }
                return function(t, n, o) {
                  return n && e(t.prototype, n), o && e(t, o), t;
                };
              })(),
              r = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,
              a = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
              u = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,
              c = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
              f = (function() {
                function e() {
                  n(this, e);
                }
                return (
                  i(e, [
                    {
                      key: 'phone',
                      value: function() {
                        var e = o();
                        return !(!r.test(e) && !a.test(e.substr(0, 4)));
                      },
                    },
                    {
                      key: 'mobile',
                      value: function() {
                        var e = o();
                        return !(!u.test(e) && !c.test(e.substr(0, 4)));
                      },
                    },
                    {
                      key: 'tablet',
                      value: function() {
                        return this.mobile() && !this.phone();
                      },
                    },
                  ]),
                  e
                );
              })();
            t.default = new f();
          },
          function(e, t) {
            'use strict';
            Object.defineProperty(t, '__esModule', { value: !0 });
            var n = function(e, t, n) {
                var o = e.node.getAttribute('data-aos-once');
                t > e.position
                  ? e.node.classList.add('aos-animate')
                  : 'undefined' != typeof o &&
                    ('false' === o || (!n && 'true' !== o)) &&
                    e.node.classList.remove('aos-animate');
              },
              o = function(e, t) {
                var o = window.pageYOffset,
                  i = window.innerHeight;
                e.forEach(function(e, r) {
                  n(e, i + o, t);
                });
              };
            t.default = o;
          },
          function(e, t, n) {
            'use strict';
            function o(e) {
              return e && e.__esModule ? e : { default: e };
            }
            Object.defineProperty(t, '__esModule', { value: !0 });
            var i = n(12),
              r = o(i),
              a = function(e, t) {
                return (
                  e.forEach(function(e, n) {
                    e.node.classList.add('aos-init'),
                      (e.position = (0, r.default)(e.node, t.offset));
                  }),
                  e
                );
              };
            t.default = a;
          },
          function(e, t, n) {
            'use strict';
            function o(e) {
              return e && e.__esModule ? e : { default: e };
            }
            Object.defineProperty(t, '__esModule', { value: !0 });
            var i = n(13),
              r = o(i),
              a = function(e, t) {
                var n = 0,
                  o = 0,
                  i = window.innerHeight,
                  a = {
                    offset: e.getAttribute('data-aos-offset'),
                    anchor: e.getAttribute('data-aos-anchor'),
                    anchorPlacement: e.getAttribute(
                      'data-aos-anchor-placement',
                    ),
                  };
                switch (
                  (a.offset && !isNaN(a.offset) && (o = parseInt(a.offset)),
                  a.anchor &&
                    document.querySelectorAll(a.anchor) &&
                    (e = document.querySelectorAll(a.anchor)[0]),
                  (n = (0, r.default)(e).top),
                  a.anchorPlacement)
                ) {
                  case 'top-bottom':
                    break;
                  case 'center-bottom':
                    n += e.offsetHeight / 2;
                    break;
                  case 'bottom-bottom':
                    n += e.offsetHeight;
                    break;
                  case 'top-center':
                    n += i / 2;
                    break;
                  case 'bottom-center':
                    n += i / 2 + e.offsetHeight;
                    break;
                  case 'center-center':
                    n += i / 2 + e.offsetHeight / 2;
                    break;
                  case 'top-top':
                    n += i;
                    break;
                  case 'bottom-top':
                    n += e.offsetHeight + i;
                    break;
                  case 'center-top':
                    n += e.offsetHeight / 2 + i;
                }
                return (
                  a.anchorPlacement || a.offset || isNaN(t) || (o = t), n + o
                );
              };
            t.default = a;
          },
          function(e, t) {
            'use strict';
            Object.defineProperty(t, '__esModule', { value: !0 });
            var n = function(e) {
              for (
                var t = 0, n = 0;
                e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop);

              )
                (t += e.offsetLeft - ('BODY' != e.tagName ? e.scrollLeft : 0)),
                  (n += e.offsetTop - ('BODY' != e.tagName ? e.scrollTop : 0)),
                  (e = e.offsetParent);
              return { top: n, left: t };
            };
            t.default = n;
          },
          function(e, t) {
            'use strict';
            Object.defineProperty(t, '__esModule', { value: !0 });
            var n = function(e) {
              return (
                (e = e || document.querySelectorAll('[data-aos]')),
                Array.prototype.map.call(e, function(e) {
                  return { node: e };
                })
              );
            };
            t.default = n;
          },
        ]);
      });

      /***/
    },
    /******/
  ],
);
//# sourceMappingURL=frontend.bundle.js.map
