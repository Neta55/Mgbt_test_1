"use strict";
console.log('Running main.js');



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
    let pos = 20;
    let id = setInterval(moveRight, 2);
    function moveRight() {
        if (pos == 440) {
            clearInterval(id);
            location.reload();
        } else {
            pos++;
            signup.style.left = pos + 'px';
        }

    }
}

function openSignUp() {

    let login = document.getElementById("login");
    let signup = document.getElementById("signup");
    let pos = -20;
    let id = setInterval(moveLeft, 2);
    function moveLeft() {
        if (pos == -440) {
            clearInterval(id);
            login.style.display = "none";
            signup.style.display = "block";
        } else {
            pos--;
            login.style.left = pos + 'px';
        }
    }
}

function openEdit() {

    const editBtn = document.querySelectorAll('#edit-btn');
    for (let i = 0; i < editBtn.length; i++) {
        editBtn[i].onclick = () => { document.getElementById("edit-form-" + event.target.value).style.display = "grid"; };
    }




}

openEdit();

function closeEdit() {

    const closeBtn = document.querySelectorAll('#close-btn');
    for (let i = 0; i < closeBtn.length; i++) {
        closeBtn[i].onclick = () => { event.target.parentNode.style.display = "none"; };
    }



}


closeEdit();