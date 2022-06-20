// selecteurs
document.querySelector("h4");

// click event
const questionContainer = document.querySelector(".click-event");
const btn1 = document.querySelector("#btn-1");
const btn2 = document.getElementById("btn-2");
const response = document.querySelector("p");

questionContainer.addEventListener("click", () => {
  questionContainer.classList.toggle("question-clicked");
});

btn1.addEventListener("click", () => {
  response.classList.add("show-response");
  response.style.background = "green";
});

btn2.addEventListener("click", () => {
  response.classList.add("show-response");
  response.style.background = "red";
});

//=====================================================
// mouse events
// mouse mov

const mousemove = document.querySelector(".mousemove");

//suit la sourie
window.addEventListener("mousemove", (e) => {
  mousemove.style.left = e.pageX + "px";
  mousemove.style.top = e.pageY + "px";
});
// grossir quand on click
window.addEventListener("mousedown", () => {
  mousemove.style.transform = "scale(2) translate(-25%, -25%)";
});

window.addEventListener("mouseup", () => {
  mousemove.style.transform = "scale(1) translate(-50%, -50%)";
});

// survole
questionContainer.addEventListener("mouseenter", () => {
  questionContainer.style.background = "rgba(0,0,0,0.6)";
});

questionContainer.addEventListener("mouseout", () => {
  questionContainer.style.background = "rgba(0,0,0,1)";
});

response.addEventListener("mouseover", () => {
  response.style.transform = "rotate(2deg)";
});

//=======================================================
// key press events

const keypressContainer = document.querySelector(".keypress");
const key = document.getElementById("key");

document.addEventListener("keypress", (e) => {
  key.textContent = e.key;

  if (e.key === "j") {
    keypressContainer.style.background = "teal";
    ring();
  }
});

// sound in the J

const ring = () => {
  const audio = new Audio();
  audio.src = "./Enter.mp3";
  audio.play();
};

//==============================================================

// scroll (descente de page)

const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
  if (window.scrollY > 120) {
    nav.style.top = 0;
  } else {
    nav.style.top = "-50px";
  }
});

//=====================================================================

//form events

const inputName = document.querySelector('input[type="text"]');
const select = document.querySelector("select");
const form = document.querySelector("form");
let pseudo = "";
let language = "";

inputName.addEventListener("input", (e) => {
  pseudo = e.target.value;
});

select.addEventListener("input", (e) => {
  language = e.target.value;
});

form.addEventListener("submit", (e) => {
  e.preventDefault();

  if (cgv.checked) {
    document.querySelector("form > div").innerHTML = `
      <h3> Pseudo :  ${pseudo}</h3>
      <h4> Langage prefere : ${language}</h4>
      `;
  } else {
    alert(" veillez accepter cgv");
  }
});

//============================================================================

// load event ( a la fin de la page charger)

window.addEventListener("load", () => {
  console.log("doc charger");
});

//====================================================================

// forEach

const boxes = document.querySelectorAll(".box");
console.log(boxes);
boxes.forEach((element) => {
  element.addEventListener("click", (e) => {
    console.log(e.target);
  });
});

//==================================================

// BOM
let answer = null;
//window.open('url', nom, taille, taille)
//window.close()

//alert('hello')

// confirm
btn2.addEventListener("click", () => {
  confirm("etes vous sur?");
});

//prompt
btn1.addEventListener("click", () => {
  answer = prompt("ecrire votre nom");

  questionContainer.innerHTML += "<h3> Bravo" + answer + "</h3>";
});

// compte  A reboure
setTimeout(() => {
  console.log("ajouter apres 2 seconde");
}, 2000);

// ajoue a interval regulier
let interval = setInterval(() => {
  document.body.innerHTML += "<div class='box'> <h2> news boite</h2> </div>";
}, 1000);

//arret interval
window.addEventListener("click", () => {
  clearInterval(interval);
});

//location (url ou on est)
//location.href, host , pathname, search
//location.replace('url a rediriger)

// navigator
console.log(navigator.userAgent);

//history
console.log(history);
// retour en ariere
//window.history.back()

//============================================
// setproprety

window.addEventListener("mousemove", (e) => {
  nav.style.setProperty("--x", e.layerX + px);
  nav.style.setProperty("--y", e.layerY + px);
});
