;(function(namespace, $){

  var Gallery = {

    init : function(){
      //this.loading()
    },


    loading: function(){
      init = $.now();
      console.log(0);


      //alert('loading');

    },

    fade_page: function(){
      console.log($.now()-init);
      $("#loading").fadeOut('normal', function(element) {
      $("#wrapper").hide(0).delay(0).fadeIn(1000);
      });
    }
  }

  $(document).ready(function(){ Gallery.loading() });

  $(window).load(function(){ Gallery.fade_page()});

})(window, jQuery);






// $(document).ready(function(){
// 	alert("ready");l
//   $("#loading").fadeOut('normal', function(element) {
//     // Animation complete.

//     $("#wrapper").hide(0).delay(0).fadeIn(1000);

//   });
// 	//$("#loading").hide(0).delay(100).fadeOut(2000);
// 	//$("#wrapper").hide(0).delay(2000).fadeIn(2000);
// 	 //$().ajaxStart(function() { $('#loading').show(); });
//   	 //$().ajaxStop(function() { $('#loading').hide(); });
// });

// $(window).load(function(){
//     alert("teste");
// });

 /*
 * SimpleModal Contact Form
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */

// jQuery(function ($) {
// 	var gallery = {
// 		message: null,
// 		init: function () {
// 			$('a[name=modal]').click(function (e) {
// 				e.preventDefault();

// 				url = $(this).attr('href');

// 				// load the contact form using ajax
// 				$.get(url, function(data){
// 					// create a modal dialog with the data
// 					$("#response_modal").html(data);
// 					$("#response_modal #content").modal({
// 						//closeHTML: "<span class='close'><a href='#' title='Close' class='modal-close'></a></span>",
// 						closeClass: '.modal-close',
// 						escClose: true,
// 						position: ["0%",],
// 						overlayId: 'contact-overlay',
// 						containerId: 'contact-container',
// 						opacity:80,
// 			 	 		overlayCss: {backgroundColor:"#000"},
// 						onOpen: gallery.open,
// 						onShow: gallery.show,
// 						onClose: gallery.close
// 					});
// 				});
// 			});
// 		},
// 		open: function (dialog) {
// 			// dynamically determine height
// 			console.log("open" + dialog);
// 			var h = 280;
// 			if ($('#contact-subject').length) {
// 				h += 26;
// 			}
// 			if ($('#contact-cc').length) {
// 				h += 22;
// 			}

// 			var title = $('#contact-container .contact-title').html();
// 			$('#contact-container .contact-title').html('Loading...');
// 			dialog.overlay.fadeIn(200, function () {
// 				dialog.container.fadeIn(200, function () {
// 					dialog.data.fadeIn(200, function () {
// 						$('#contact-container .contact-content').animate({
// 							height: h
// 						}, function () {
// 							$('#contact-container .contact-title').html(title);
// 							$('#contact-container form').fadeIn(200, function () {
// 								$('#contact-container #contact-name').focus();

// 								$('#contact-container .contact-cc').click(function () {
// 									var cc = $('#contact-container #contact-cc');
// 									cc.is(':checked') ? cc.attr('checked', '') : cc.attr('checked', 'checked');
// 								});
// 							});
// 						});
// 					});
// 				});
// 			});
// 		},
// 		show: function (dialog) {
// 			console.log("show" + dialog);
// 			$('#contact-container .contact-send').click(function (e) {
// 				e.preventDefault();
// 				// validate form
// 				if (contact.validate()) {
// 					var msg = $('#contact-container .contact-message');
// 					msg.fadeOut(function () {
// 						msg.removeClass('contact-error').empty();
// 					});
// 					$('#contact-container .contact-title').html('Sending...');
// 					$('#contact-container form').fadeOut(200);
// 					$('#contact-container .contact-content').animate({
// 						height: '80px'
// 					}, function () {
// 						$('#contact-container .contact-loading').fadeIn(200, function () {
// 							$.ajax({
// 								url: 'data/contact.php',
// 								data: $('#contact-container form').serialize() + '&action=send',
// 								type: 'post',
// 								cache: false,
// 								dataType: 'html',
// 								success: function (data) {
// 									$('#contact-container .contact-loading').fadeOut(200, function () {
// 										$('#contact-container .contact-title').html('Thank you!');
// 										msg.html(data).fadeIn(200);
// 									});
// 								},
// 								error: contact.error
// 							});
// 						});
// 					});
// 				}
// 				else {
// 					if ($('#contact-container .contact-message:visible').length > 0) {
// 						var msg = $('#contact-container .contact-message div');
// 						msg.fadeOut(200, function () {
// 							msg.empty();
// 							contact.showError();
// 							msg.fadeIn(200);
// 						});
// 					}
// 					else {
// 						$('#contact-container .contact-message').animate({
// 							height: '30px'
// 						}, contact.showError);
// 					}

// 				}
// 			});
// 		},
// 		close: function (dialog) {
// 			console.log("close" + dialog);
// 			$('#contact-container .contact-message').fadeOut();
// 			$('#contact-container .contact-title').html('Goodbye...');
// 			$('#contact-container form').fadeOut(200);
// 			$('#contact-container .contact-content').animate({
// 				height: 40
// 			}, function () {
// 				dialog.data.fadeOut(200, function () {
// 					dialog.container.fadeOut(200, function () {
// 						dialog.overlay.fadeOut(200, function () {
// 							$.modal.close();
// 						});
// 					});
// 				});
// 			});
// 		},
// 		error: function (xhr) {
// 			alert(xhr.statusText);
// 		},
// 		validate: function () {
// 			gallery.message = '';
// 			if (!$('#contact-container #contact-name').val()) {
// 				gallery.message += 'Name is required. ';
// 			}

// 			var email = $('#contact-container #contact-email').val();
// 			if (!email) {
// 				gallery.message += 'Email is required. ';
// 			}
// 			else {
// 				if (!gallery.validateEmail(email)) {
// 					gallery.message += 'Email is invalid. ';
// 				}
// 			}

// 			if (!$('#contact-container #contact-message').val()) {
// 				gallery.message += 'Message is required.';
// 			}

// 			if (gallery.message.length > 0) {
// 				return false;
// 			}
// 			else {
// 				return true;
// 			}
// 		},
// 		validateEmail: function (email) {
// 			var at = email.lastIndexOf("@");

// 			// Make sure the at (@) sybmol exists and
// 			// it is not the first or last character
// 			if (at < 1 || (at + 1) === email.length)
// 				return false;

// 			// Make sure there aren't multiple periods together
// 			if (/(\.{2,})/.test(email))
// 				return false;

// 			// Break up the local and domain portions
// 			var local = email.substring(0, at);
// 			var domain = email.substring(at + 1);

// 			// Check lengths
// 			if (local.length < 1 || local.length > 64 || domain.length < 4 || domain.length > 255)
// 				return false;

// 			// Make sure local and domain don't start with or end with a period
// 			if (/(^\.|\.$)/.test(local) || /(^\.|\.$)/.test(domain))
// 				return false;

// 			// Check for quoted-string addresses
// 			// Since almost anything is allowed in a quoted-string address,
// 			// we're just going to let them go through
// 			if (!/^"(.+)"$/.test(local)) {
// 				// It's a dot-string address...check for valid characters
// 				if (!/^[-a-zA-Z0-9!#$%*\/?|^{}`~&'+=_\.]*$/.test(local))
// 					return false;
// 			}

// 			// Make sure domain contains only valid characters and at least one period
// 			if (!/^[-a-zA-Z0-9\.]*$/.test(domain) || domain.indexOf(".") === -1)
// 				return false;

// 			return true;
// 		},
// 		showError: function () {
// 			$('#contact-container .contact-message')
// 				.html($('<div class="contact-error"></div>').append(contact.message))
// 				.fadeIn(200);
// 		}
// 	};

// 	gallery.init();

// });
