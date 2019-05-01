/*
* EASYDROPDOWN - A Drop-down Builder for Styleable Inputs and Menus
* Version: 2.0.4
* License: Creative Commons Attribution 3.0 Unported - CC BY 3.0
* http://creativecommons.org/licenses/by/3.0/
* This software may be used freely on commercial and non-commercial projects with attribution to the author/copyright holder.
* Author: Patrick Kunka
* Copyright 2013 Patrick Kunka, All Rights Reserved
*/

(function(d){function e(){this.isField=!0;this.keyboardMode=this.hasLabel=this.cutOff=this.inFocus=this.down=!1;this.nativeTouch=!0;this.wrapperClass="dropdown";this.onSelect=null}function f(a,c){var b=new e;b.init(a,c);b.instances.push(b)}e.prototype={constructor:e,instances:[],init:function(a,c){var b=this;d.extend(b,c);b.$select=d(a);b.options=[];b.$options=b.$select.find("option");b.isTouch="ontouchend"in document;b.$select.removeClass(b.wrapperClass+" dropdown");b.$options.length&&(b.$options.each(function(a){var c=
    d(this);c.is(":selected")&&(b.selected={index:a,title:c.text()},b.focusIndex=a);c.hasClass("label")&&0==a?(b.hasLabel=!0,b.label=c.text(),c.attr("value","")):b.options.push({domNode:c[0],title:c.text(),value:c.val(),selected:c.is(":selected")})}),b.selected||(b.selected={index:0,title:b.$options.eq(0).text()},b.focusIndex=0),b.render())},render:function(){var a=this;a.$container=a.$select.wrap('<div class="'+a.wrapperClass+(a.isTouch&&a.nativeTouch?" touch":"")+'"><span class="old"/></div>').parent().parent();
    a.$active=d('<span class="selected">'+a.selected.title+"</span>").appendTo(a.$container);a.$carat=d('<span class="carat"/>').appendTo(a.$container);a.$scrollWrapper=d("<div><ul/></div>").appendTo(a.$container);a.$dropDown=a.$scrollWrapper.find("ul");a.$form=a.$container.closest("form");d.each(a.options,function(){a.$dropDown.append("<li"+(this.selected?' class="active"':"")+">"+this.title+"</li>")});a.$items=a.$dropDown.find("li");a.maxHeight=0;a.cutOff&&a.$items.length>a.cutOff&&a.$container.addClass("scrollable");
    for(i=0;i<a.$items.length;i++){var c=a.$items.eq(i);a.maxHeight+=c.outerHeight();if(a.cutOff==i+1)break}a.isTouch&&a.nativeTouch?a.bindTouchHandlers():a.bindHandlers()},bindTouchHandlers:function(){var a=this;a.$container.on("click",function(){a.$select.focus()});a.$select.on({change:function(){var c=d(this).find("option:selected"),b=c.text(),c=c.val();a.$active.text(b);"function"==typeof a.onSelect&&a.onSelect.call(a,{title:b,value:c})},focus:function(){a.$container.addClass("focus")},blur:function(){a.$container.removeClass("focus")}})},
    bindHandlers:function(){var a=this;a.query="";a.$container.on({click:function(){a.down?a.close():a.open()},mousemove:function(){a.keyboardMode&&(a.keyboardMode=!1)}});d("body").on("click",function(c){c=d(c.target);var b=a.wrapperClass.split(" ").join(".");!c.closest("."+b).length&&a.down&&a.close()});a.$items.on({click:function(){var c=d(this).index();a.select(c);a.$select.focus()},mouseover:function(){if(!a.keyboardMode){var c=d(this);c.addClass("focus").siblings().removeClass("focus");a.focusIndex=
    c.index()}},mouseout:function(){a.keyboardMode||d(this).removeClass("focus")}});a.$select.on({focus:function(){a.$container.addClass("focus");a.inFocus=!0},blur:function(){a.$container.removeClass("focus");a.inFocus=!1}});a.$dropDown.on("scroll",function(c){a.$dropDown[0].scrollTop==a.$dropDown[0].scrollHeight-a.maxHeight?a.$container.addClass("bottom"):a.$container.removeClass("bottom")});a.$select.on("keydown",function(c){if(a.inFocus){a.keyboardMode=!0;var b=c.keyCode;if(38==b||40==b||32==b)c.preventDefault(),
    38==b?(a.focusIndex--,a.focusIndex=0>a.focusIndex?a.$items.length-1:a.focusIndex):40==b&&(a.focusIndex++,a.focusIndex=a.focusIndex>a.$items.length-1?0:a.focusIndex),a.down||a.open(),a.$items.removeClass("focus").eq(a.focusIndex).addClass("focus"),a.cutOff&&a.scrollToView(),a.query="";if(a.down)if(9==b||27==b)a.close();else{if(13==b)return c.preventDefault(),a.select(a.focusIndex),a.close(),!1;if(8==b)return c.preventDefault(),a.query=a.query.slice(0,-1),a.search(),!1;38!=b&&40!=b&&(c=String.fromCharCode(b),
    a.query+=c,a.search())}}});if(a.$form.length)a.$form.on("reset",function(){a.$active.text(a.hasLabel?a.label:"")})},open:function(){var a=window.scrollY||document.documentElement.scrollTop,c=window.scrollX||document.documentElement.scrollLeft,b=this.notInViewport(a);this.closeAll();this.$select.focus();window.scrollTo(c,a+b);this.$container.addClass("open");this.$scrollWrapper.css("height",this.maxHeight+"px");this.down=!0},close:function(){this.$container.removeClass("open");this.$scrollWrapper.css("height",
    "0px");this.focusIndex=this.selected.index;this.query="";this.down=!1},closeAll:function(){var a=Object.getPrototypeOf(this).instances;for(i=0;i<a.length;i++)a[i].close()},select:function(a){var c=this.options[a],b=this.hasLabel?a+1:a;this.$items.removeClass("active").eq(a).addClass("active");this.$active.text(c.title);this.$select.find("option").prop("selected",!1).eq(b).prop("selected","selected");this.selected={index:a,title:c.title};this.focusIndex=i;"function"==typeof this.onSelect&&this.onSelect.call(this,
    {title:c.title,value:c.value})},search:function(){for(i=0;i<this.options.length;i++)if(-1!=this.options[i].title.toUpperCase().indexOf(this.query)){this.focusIndex=i;this.$items.removeClass("focus").eq(this.focusIndex).addClass("focus");this.scrollToView();break}},scrollToView:function(){if(this.focusIndex>=this.cutOff){var a=this.$items.eq(this.focusIndex).outerHeight()*(this.focusIndex+1)-this.maxHeight;this.$dropDown.scrollTop(a)}},notInViewport:function(a){var c=a+(window.innerHeight||document.documentElement.clientHeight),
    b=this.$dropDown.offset().top+this.maxHeight;return b>=a&&b<=c?0:b-c+5}};d.fn.easyDropDown=function(a){return this.each(function(){f(this,a)})};d(function(){"function"!==typeof Object.getPrototypeOf&&(Object.getPrototypeOf="object"===typeof"test".__proto__?function(a){return a.__proto__}:function(a){return a.constructor.prototype});d(".dropdown").each(function(){var a=d(this).attr("data-settings");settings=a?d.parseJSON(a):{};f(this,settings)})})})(jQuery);