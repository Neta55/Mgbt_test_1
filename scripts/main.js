"use strict";
console.log('Running main.js');

function openLogIn() {
    document.getElementById("signup").style.display = "none";
    document.getElementById("login").style.display = "block";
}

function openSignUp() {
    document.getElementById("login").style.display = "none";
    document.getElementById("signup").style.display = "block";
}
