'use strict';

/**
 * FancyBox. Set class.
 */

function extJS_fancyboxClass() {
	let elFilterWrapper = [
		'div.entry-content'
	];
	let elFilterItems = [
		'a[href$=".gif"]',
		'a[href$=".jpg"]',
		'a[href$=".jpeg"]',
		'a[href$=".png"]',
		'a[href$=".bmp"]'
	];

	jQuery(elFilterWrapper.join()).each(function () {
		jQuery(this).find(elFilterItems.join()).addClass('ext-lightbox').attr('rel', 'group-lightbox');
	});
}

/**
 * FancyBox. Loading.
 */

function extJS_fancyboxInit() {
	let elFilterWrapper = jQuery('div.entry-content');
	let elFilterItems = elFilterWrapper.find('a.ext-lightbox');

	elFilterItems.fancybox();
}

/**
 * Comment highlight.
 */

function extJS_commentHighlight() {
	let elCustomClass = 'comment-select';
	let elCommentWrapper = '.comment-list article';
	let getHash = jQuery(window.location.hash);

	getHash.children(elCommentWrapper).addClass(elCustomClass);
}

/**
 * Loading functions.
 */

$(function () {
	$(window).on('load', function () {
	});
	extJS_fancyboxClass();
	extJS_fancyboxInit();
	extJS_commentHighlight();
});