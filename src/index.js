const menus = document.querySelector(".mobile-menu-con");
const menu = document.querySelector(".menu-frame");
const one = document.querySelector(".bar.one");
const two = document.querySelector(".bar.two");
const three = document.querySelector(".bar.three");
const four = document.querySelector(".bar.four");
const pop_con = document.querySelector('.pop-container');
const dtls_frm = document.querySelector('.dtls-frame');
var state = "";

menu.addEventListener("click", () => {
    state == "" ? state = "added" : state = "";
    state == "" ? menus.classList.add("revanimate") : menus.classList.remove("revanimate");
    state == "added" ? menus.classList.add("animate") : menus.classList.remove("animate");
    one.classList.toggle("animated");
    two.classList.toggle("animated");
    three.classList.toggle("animated");
    four.classList.toggle("animated");
});

function setHome() {
    window.location = "./index.html";
}

window.addEventListener("scroll", () => {
    const up = document.querySelector(".back-top");
    scrollY > 100 ? up.style.display = "flex" : up.style.display = "none";
});

function openDetails() {
    pop_con.style.display = 'flex';
    dtls_frm.style.display = 'block';
    pop_con.classList.add('popp');
    dtls_frm.classList.add('pop');
    pop_con.classList.remove('exitt');
    dtls_frm.classList.remove('exit');
}

function closeDetails() {
    pop_con.style.display = 'none';
    pop_con.classList.add('exitt');
    dtls_frm.classList.add('exit');
    pop_con.classList.remove('popp');
    dtls_frm.classList.remove('pop');
}

window.addEventListener("resize", () => {
    const width = window.innerWidth;
    if (width >= 768 && state != "") {
        state = "";
        menus.classList.remove("animate");
        menus.classList.add("revanimate");
        one.classList.toggle("animated");
        two.classList.toggle("animated");
        three.classList.toggle("animated");
        four.classList.toggle("animated");
    }
})