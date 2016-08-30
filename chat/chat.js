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
      root: '/~samuel/csclub/chat/jsxc',
      xmpp: {
	 url: 'http://localhost:5280/http-bind/',
	 domain: 'aether.pye',
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
});

$(document).on("disconnected.jsxc", function() {
	showLoginForm();
	clearJsxc();
});
