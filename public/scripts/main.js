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



    document.getElementById("edit-form").style.display = "grid";
}

function closeEdit() {
    document.getElementById("edit-form").style.display = "none";
}

// function openEdit() {


//     entries.onclick = function (event) {
//         let curentEditForm = event.target.closest('edit-form'); // where was the click?

//         if (!curentEditForm) return; // not on TD? Then we're not interested
//         if (!entries.contains.curentEditForm) return;
//         show(target); // šho it
//     };
//     function show(curentEditForm) {
//         if (curentEditForm) { // remove the existing class
//             curentEditForm.classList.remove('display-none');
//         }
//         curentEditForm = EditForm;
//         curentEditForm.classList.add('edit-form'); // add new
//     }
// }

