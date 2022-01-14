
var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");
var body = document.querySelector("body");


/* quando clicar no botão, faça a ação definda (trocar as telas)*/ 

btnSignin.addEventListener("click", function () {
   body.className = "sing-in-js"; 
});

btnSignup.addEventListener("click", function () {
    body.className = "sing-up-js";
})

