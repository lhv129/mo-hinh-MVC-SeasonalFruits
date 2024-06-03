function myFunction(x) {
    x.classList.toggle("change");
}
function functionAll() {
    document.getElementById("active").classList.add('btn-filters');
    document.getElementById("active2").classList.remove('btn-filters');
    document.getElementById("active3").classList.remove('btn-filters');
    document.getElementById("active4").classList.remove('btn-filters');

    const berry = document.querySelectorAll('#berry');
    const lemon = document.querySelectorAll('#lemon');
    const fruits = document.querySelectorAll('#fruits');
    for (let i = 0; i < berry.length; i++) {
        if (berry[i].style.display === "block") {
            berry[i].style.display = "block";
        } else {
            berry[i].style.display = "block";
        }
    }
    for (let i = 0; i < lemon.length; i++) {
        if (lemon[i].style.display === "block") {
            lemon[i].style.display = "block";
        } else {
            lemon[i].style.display = "block";
        }
    }
    for (let i = 0; i < fruits.length; i++) {
        if (fruits[i].style.display === "block") {
            fruits[i].style.display = "block";
        } else {
            fruits[i].style.display = "block";
        }
    }
}
function functionBerry() {
    document.getElementById("active").classList.remove('btn-filters');
    document.getElementById("active2").classList.add('btn-filters');
    document.getElementById("active3").classList.remove('btn-filters');
    document.getElementById("active4").classList.remove('btn-filters');

    const berry = document.querySelectorAll('#berry');
    const lemon = document.querySelectorAll('#lemon');
    const fruits = document.querySelectorAll('#fruits');
    for (let i = 0; i < berry.length; i++) {
        if (berry[i].style.display === "block") {
            berry[i].style.display = "block";
        } else {
            berry[i].style.display = "block";
        }
    }
    for (let i = 0; i < lemon.length; i++) {
        if (lemon[i].style.display === "none") {
            lemon[i].style.display = "none";
        } else {
            lemon[i].style.display = "none";
        }
    }
    for (let i = 0; i < fruits.length; i++) {
        if (fruits[i].style.display === "none") {
            fruits[i].style.display = "none";
        } else {
            fruits[i].style.display = "none";
        }
    }
}
function functionLemon() {
    document.getElementById("active").classList.remove('btn-filters');
    document.getElementById("active2").classList.remove('btn-filters');
    document.getElementById("active3").classList.add('btn-filters');
    document.getElementById("active4").classList.remove('btn-filters');

    const berry = document.querySelectorAll('#berry');
    const lemon = document.querySelectorAll('#lemon');
    const fruits = document.querySelectorAll('#fruits');
    for (let i = 0; i < berry.length; i++) {
        if (berry[i].style.display === "none") {
            berry[i].style.display = "none";
        } else {
            berry[i].style.display = "none";
        }
    }
    for (let i = 0; i < lemon.length; i++) {
        if (lemon[i].style.display === "block") {
            lemon[i].style.display = "block";
        } else {
            lemon[i].style.display = "block";
        }
    }
    for (let i = 0; i < fruits.length; i++) {
        if (fruits[i].style.display === "none") {
            fruits[i].style.display = "none";
        } else {
            fruits[i].style.display = "none";
        }
    }
}
function functionFruits() {
    document.getElementById("active").classList.remove('btn-filters');
    document.getElementById("active2").classList.remove('btn-filters');
    document.getElementById("active3").classList.remove('btn-filters');
    document.getElementById("active4").classList.add('btn-filters');

    const berry = document.querySelectorAll('#berry');
    const lemon = document.querySelectorAll('#lemon');
    const fruits = document.querySelectorAll('#fruits');
    for (let i = 0; i < berry.length; i++) {
        if (berry[i].style.display === "none") {
            berry[i].style.display = "none";
        } else {
            berry[i].style.display = "none";
        }
    }
    for (let i = 0; i < lemon.length; i++) {
        if (lemon[i].style.display === "none") {
            lemon[i].style.display = "none";
        } else {
            lemon[i].style.display = "none";
        }
    }
    for (let i = 0; i < fruits.length; i++) {
        if (fruits[i].style.display === "block") {
            fruits[i].style.display = "block";
        } else {
            fruits[i].style.display = "block";
        }
    }
}

function card(){
    let card = document.querySelectorAll('.one');
    let card2 = document.querySelectorAll('.two');
    let card3 = document.querySelectorAll('.three');
    for (let i = 0; i < card.length; i++) {
        if (card[i].style.display === "none") {
            card[i].style.display = "block";
            card2[i].style.display = "none";
            card3[i].style.display = "none";
        } else {
            card[i].style.display = "none";
        }
    }
}
function card2(){
    let card = document.querySelectorAll('.one');
    let card2 = document.querySelectorAll('.two');
    let card3 = document.querySelectorAll('.three');
    for (let i = 0; i < card2.length; i++) {
        if (card2[i].style.display === "block") {
            card2[i].style.display = "none";
        } else {
            card[i].style.display = "none";
            card2[i].style.display = "block";
            card3[i].style.display = "none";
        }
    }
}
function card3(){
    let card = document.querySelectorAll('.one');
    let card2 = document.querySelectorAll('.two');
    let card3 = document.querySelectorAll('.three');
    for (let i = 0; i < card3.length; i++) {
        if (card3[i].style.display === "block") {
            card3[i].style.display = "none";
        } else {
            card[i].style.display = "none";
            card2[i].style.display = "none";
            card3[i].style.display = "block";
        }
    }
}
function on() {
    document.getElementById("overlay").style.display = "block";
  }