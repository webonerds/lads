(function(){AIR.HomepageHelper={curr:0,intervalId:0,numSlides:0,animating:false,time_slideInterval:7000,time_slideTransition:1000,time_captionFadeIn:1000,time_captionFadeOut:300,time_searchBarSlide:900,initHomepageHero:function(){this.initEvents();
this.cacheEls();
this.showSearch();
this.initCalendars();
this.initPrice();
this.initCustomForms();
return $("#home-loading-indicator").hide()
},initEvents:function(){var _this=this;
$(".input-wrapper span").live("click",function(e){return _this.clickInput(e)
});
$(".search-option").live("focus",function(e){return _this.play()
});
$("#location").live("keyup",function(e){return _this.play()
});
$("#search_form").live("submit",function(e){return _this.checkInputsAndSubmit(e)
});
return $(".slideshow-scroll").live("click",function(e){return _this.clickSlideArrow(e)
})
},cacheEls:function(){this.els={};
this.els.hero=$("#hero");
this.els.arrows=$(".slideshow-scroll");
this.els.loc=$("#location");
this.els.slideshow=$("#slideshow");
this.els.slides=this.els.slideshow.children();
this.els.searchArea=$(".search-area");
this.els.blob=$("#blob-bg");
return this.els.form=$("#search_form")
},initCustomForms:function(){var $guests,$guestsWrapper,update;
$guests=this.els.form.find("#guests");
$guestsWrapper=$guests.parent().find(".current");
update=function(e){return $guestsWrapper.text($guests.find(":selected").text())
};
$guests.change(update);
$guests.keyup(update);
$guests.focus(function(){return $guestsWrapper.addClass("focus")
});
$guests.blur(function(){return $guestsWrapper.removeClass("focus")
});
return $guests.change()
},initPrice:function(){var guest_exchange,_this=this;
guest_exchange=Airbnb.userAttributes.guest_exchange;
if(guest_exchange){return this.els.slides.each(function(i,e){var $price,price_string,price_usd;
$price=$(e).find(".price");
price_usd=$price.data("price");
price_string=I18n.guestConvertFromUsd(price_usd,{format:true});
return $price.html(price_string)
})
}},clickInput:function(e){return $(e.currentTarget).prev("input[type='text']").focus()
},initCalendars:function(){var $checkin,$checkout,dateFormat,defaultVal,e;
dateFormat=$.datepicker._defaults.dateFormat;
$checkin=$("#checkin");
$checkout=$("#checkout");
defaultVal=$checkin.attr("placeholder")?"":dateFormat;
try{$.datepicker.parseDate(dateFormat,$checkin.val());
$.datepicker.parseDate(dateFormat,$checkout.val())
}catch(_error){e=_error;
$checkin.val(defaultVal).blur();
$checkout.val(defaultVal).blur()
}return this.els.form.airbnbInputDateSpan()
},showSearch:function(){var _this=this;
this.els.searchArea.find("input[type='text']").placeholder();
return this.els.blob.children("img").imagesLoaded().done(function($images){return _this.els.blob.fadeIn(1000)
})
},initSlideshow:function(){var loading,_this=this;
this.numSlides=this.els.slides.length;
this.els.slides.find("img[data-image-url]").each(function(i,el){var $img;
$img=$(el);
return $img.attr("src",$img.data("image-url"))
});
this.els.slideshow.find("li[data-image-url]").each(function(i,el){var $li;
$li=$(el);
return $li.css("background-image","url("+$li.data("image-url")+")")
});
loading=this.els.slideshow.imagesLoaded();
return loading.done(function($images){var $arrows;
$arrows=$(".slideshow-scroll");
$arrows.removeClass("faded-out");
_this.els.hero.hover(function(){return $arrows.removeClass("faded-out")
},function(){return $arrows.addClass("faded-out")
});
return _this.play()
})
},play:function(){var _this=this;
this.pause();
return this.intervalId=setInterval(function(){return _this.next()
},this.time_slideInterval)
},pause:function(){return clearInterval(this.intervalId)
},next:function(){var currSlide,nextSlide;
if(this.animating){return
}currSlide=this.els.slides.eq(this.curr);
this.curr=(this.curr+1)%this.numSlides;
nextSlide=this.els.slides.eq(this.curr);
return this.transitionSlide(currSlide,nextSlide,"left")
},prev:function(){var currSlide,nextSlide;
if(this.animating){return
}currSlide=this.els.slides.eq(this.curr);
this.curr=this.curr<1?this.numSlides-1:this.curr-1;
nextSlide=this.els.slides.eq(this.curr);
return this.transitionSlide(currSlide,nextSlide,"right")
},clickSlideArrow:function(e){e.preventDefault();
if($(e.currentTarget).hasClass("slideshow-scroll-prev")){this.prev()
}else{this.next()
}return this.play()
},transitionSlide:function(currSlide,nextSlide,direction){var _this=this;
this.animating=true;
nextSlide.addClass("next "+direction);
currSlide.find(".caption").fadeOut(this.time_captionFadeOut);
this.els.blob.animate({opacity:nextSlide.data("bg-opacity")},500);
return currSlide.fadeOut(this.time_slideTransition,function(){currSlide.removeClass("active");
nextSlide.addClass("active").removeClass("next "+direction);
currSlide.show();
nextSlide.find(".caption").fadeIn(_this.time_captionFadeIn);
return _this.animating=false
})
},checkInputsAndSubmit:function(e){var $errorEl;
$errorEl=$("#enter_location_error_message");
if(this.locationIsBlank()){$errorEl.show();
return false
}$errorEl.hide();
e.preventDefault();
return Airbnb.SearchUtils.handleFormSubmit(e.currentTarget)
},locationIsBlank:function(){return !this.els.loc.val()||this.els.loc.hasClass("placeholder")||this.els.loc.hasClass("pac-placeholder")
}}
}).call(this);
(function(c,n){var k="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
c.fn.imagesLoaded=function(l){function m(){var b=c(h),a=c(g);
d&&(g.length?d.reject(e,b,a):d.resolve(e));
c.isFunction(l)&&l.call(f,e,b,a)
}function i(b,a){b.src===k||-1!==c.inArray(b,j)||(j.push(b),a?g.push(b):h.push(b),c.data(b,"imagesLoaded",{isBroken:a,src:b.src}),o&&d.notifyWith(c(b),[a,e,c(h),c(g)]),e.length===j.length&&(setTimeout(m),e.unbind(".imagesLoaded")))
}var f=this,d=c.isFunction(c.Deferred)?c.Deferred():0,o=c.isFunction(d.notify),e=f.find("img").add(f.filter("img")),j=[],h=[],g=[];
e.length?e.bind("load.imagesLoaded error.imagesLoaded",function(b){i(b.target,"error"===b.type)
}).each(function(b,a){var e=a.src,d=c.data(a,"imagesLoaded");
if(d&&d.src===e){i(a,d.isBroken)
}else{if(a.complete&&a.naturalWidth!==n){i(a,0===a.naturalWidth||0===a.naturalHeight)
}else{if(a.readyState||a.complete){a.src=k,a.src=e
}}}}):m();
return d?d.promise(f):f
}
})(jQuery);