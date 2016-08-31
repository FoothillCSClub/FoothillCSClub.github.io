$(function() {
   jsxc.init({
      loginForm: {
	 form: $('#chatLoginForm'),
	 jid: $('#chatUsername'),
	 pass: $('#chatPassword'),
         onConnected: "continue",
         onAuthFail: "ask",
      },
      //logoutElement: $('#chatLogout'),
      root: '/chat/jsxc',
      xmpp: {
	 url: 'http-bind',
	 domain: 'cs.foothillstemclubs.org',
	 resource: 'jsxc'
      }
   });
});


function showLoginForm() {
	$("#chatLoginForm").show();
}

function hideLoginForm() {
	$("#chatLoginForm").hide();
}

function clearJsxc() {
	$("#jsxc_roster").remove();
	$("#jsxc_windowList").remove();
	$("#jsxc_windowListSB").remove();
}

function initLoginForm() {
	if (!(jsxc.storage.getItem("rid") && jsxc.storage.getItem("sid") && jsxc.storage.getItem("jid"))) {
		showLoginForm();
	}
}

$(document).on("attached.jsxc", function() {
	hideLoginForm();
	$("#chatPassword").val("");
});

$(document).on("disconnected.jsxc", function() {
	showLoginForm();
	clearJsxc();
});
