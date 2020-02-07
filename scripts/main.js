"use strict";
console.log('Running main.js');
// document.getElementById("login").style.display = "block";


// function openLogIn() {
//     document.getElementById("signup").style.display = "none";
//     document.getElementById("login").style.display = "block";
// }

// function openSignUp() {
//     document.getElementById("login").style.display = "none";
//     document.getElementById("signup").style.display = "block";

// }

function openLogIn() {
    let signup = document.getElementById("signup");
    let login = document.getElementById("login");
    let pos = 0;
    let id = setInterval(moveRight, 2);
    function moveRight() {
        if (pos == 440) {
            clearInterval(id);
            signup.style.display = "none";
            login.style.display = "block";
            location.reload();
            console.log(pos);
        } else {
            pos++;
            signup.style.left = pos + 'px';
            console.log(pos);
        }

    }
}

function openSignUp() {

    let login = document.getElementById("login");
    let signup = document.getElementById("signup");
    let pos = 0;
    let id = setInterval(moveLeft, 2);
    function moveLeft() {
        if (pos == -440) {
            clearInterval(id);
            login.style.display = "none";
            signup.style.display = "block";
            console.log(moveLeft);
        } else {
            pos--;
            login.style.left = pos + 'px';
            console.log(pos);
        }
    }
}


