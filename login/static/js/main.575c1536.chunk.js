(this.webpackJsonphrworktime_login=this.webpackJsonphrworktime_login||[]).push([[0],{13:function(e,a,t){e.exports=t(27)},18:function(e,a,t){},19:function(e,a,t){},26:function(e,a,t){},27:function(e,a,t){"use strict";t.r(a);var n=t(0),r=t.n(n),o=t(12),s=t.n(o),l=(t(18),t(3)),c=t(4),i=t(7),m=t(6),u=(t(19),t(20),t(2)),d=t.n(u),p=t(5),g=t(9),h=function(e){Object(i.a)(t,e);var a=Object(m.a)(t);function t(){var e;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return(e=a.call.apply(a,[this].concat(r))).LoginMain=function(){var e=d()("#username").val(),a=d()("#password").val();if(""===e||""===a)d()("#msgResult").css("color","#dc3545"),d()("#msgResult").html("Input Username and Password");else{var t="../dashboard/main.php";"hrfreewill001"===e&&"hrfwg@freewill"===a?(localStorage.setItem("usernameLocalStorage",e),localStorage.setItem("statusLocalStorage","hr"),window.location.assign(t)):"hrfreewill002"===e&&"hrfwg@freewill"===a?(localStorage.setItem("username",e),localStorage.setItem("status","hr"),window.location.assign(t)):"hrfreewill003"===e&&"hrfwg@freewill"===a?(localStorage.setItem("usernameLocalStorage",e),localStorage.setItem("statusLocalStorage","hr"),window.location.assign(t)):(d()("#msgResult").css("color","#dc3545"),d()("#msgResult").html("Username and Password Incorrect"),d()("#password").empty())}},e.handleKeyPress=function(a){if("Enter"===a.key){var t=e.props.onAccept;t&&t(a.target.value),e.LoginMain()}},e}return Object(c.a)(t,[{key:"render",value:function(){return r.a.createElement("section",{className:"section container"},r.a.createElement("div",{className:"card card-login mx-auto text-center bg-dark"},r.a.createElement("div",{className:"card-header mx-auto bg-dark"},r.a.createElement("span",null,r.a.createElement("img",{src:"https://static.wixstatic.com/media/2fe8ff_c0ed6354adac43d09b18816fce9bbd4f~mv2.png/v1/fill/w_413,h_113,al_c,q_85,usm_0.66_1.00_0.01/Logo%20FWS.webp",className:"w-75",alt:"Logo"})),r.a.createElement("br",null),r.a.createElement("span",{className:"logo_title mt-5"}," HR WorkTime")),r.a.createElement("div",{className:"card-body"},r.a.createElement("form",{method:"post"},r.a.createElement("div",{className:"input-group form-group"},r.a.createElement("div",{className:"input-group-prepend"},r.a.createElement("span",{className:"input-group-text"},r.a.createElement(g.a,{icon:p.b}))),r.a.createElement("input",{type:"text",id:"username",className:"form-control",placeholder:"Username",onKeyPress:this.handleKeyPress})),r.a.createElement("div",{className:"input-group form-group"},r.a.createElement("div",{className:"input-group-prepend"},r.a.createElement("span",{className:"input-group-text"},r.a.createElement(g.a,{icon:p.a}))),r.a.createElement("input",{type:"password",id:"password",className:"form-control",placeholder:"Password",onKeyPress:this.handleKeyPress})),r.a.createElement("div",{className:"form-group"},r.a.createElement("input",{type:"button",id:"LoginBtn",value:"Login",className:"btn btn-outline-danger float-right login_btn",onClick:this.LoginMain})))),r.a.createElement("div",{className:"card-footer"},r.a.createElement("span",{id:"msgResult"}))))}}]),t}(r.a.Component),f=(t(26),function(e){Object(i.a)(t,e);var a=Object(m.a)(t);function t(){return Object(l.a)(this,t),a.apply(this,arguments)}return Object(c.a)(t,[{key:"render",value:function(){return r.a.createElement("div",{className:"App"},r.a.createElement(h,null))}}]),t}(n.Component));Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));s.a.render(r.a.createElement(r.a.StrictMode,null,r.a.createElement(f,null)),document.getElementById("root")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then((function(e){e.unregister()})).catch((function(e){console.error(e.message)}))}},[[13,1,2]]]);
//# sourceMappingURL=main.575c1536.chunk.js.map