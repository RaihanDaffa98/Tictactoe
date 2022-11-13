let btnRef = document.querySelectorAll(".button-option");
let popupRef = document.querySelector(".popup");
let newgameBtn = document.getElementById("new-game");
let msgRef = document.getElementById("message");

//patern pemenang
let winningPattern = [
  [0, 1, 2],
  [0, 3, 6],
  [2, 5, 8],
  [6, 7, 8],
  [3, 4, 5],
  [1, 4, 7],
  [0, 4, 8],
  [2, 4, 6],
];


let xTurn = true;
let count = 0;

//Disable semua tombol
const disableButtons = () => {
btnRef.forEach((element) => (element.disabled = true));

//munculkan popup
  popupRef.classList.remove("hide");

  
};


//hidupkan tombol Restart
const enableButtons = () => {
  btnRef.forEach((element) => {
    element.innerText = "";
    element.disabled = false;
  });

  //disable popup
  popupRef.classList.add("hide");
 
};

//function menang kalah

const winFunction = (letter) => {
  disableButtons();

  if (letter == "X") {
    msgRef.innerHTML = "YOU WON !";
  } else {
    msgRef.innerHTML = "YOU LOSE !";
  }
};

//Function seri
const drawFunction = () => {
  disableButtons();
  msgRef.innerHTML = "IT'S A DRAW !";
};

//New Game
newgameBtn.addEventListener("click", () => {
  count = 0;
  enableButtons();
});

//Win Logic
const winChecker = () => {

  for (let i of winningPattern) {
    let [element1, element2, element3] = [
      btnRef[i[0]].innerText,
      btnRef[i[1]].innerText,
      btnRef[i[2]].innerText,
    ];

    if (element1 != "" && (element2 != "") & (element3 != "")) {
      if (element1 == element2 && element2 == element3) {
        winFunction(element1);
        

      }
    }
  }
};


btnRef.forEach((element) => {
  element.addEventListener("click", () => {
    if (xTurn) {
      xTurn = false;
  
      element.innerText = "X";
      element.disabled = true;
    } else {
      xTurn = true;
  
      element.innerText = "O";
      element.disabled = true;
    }
  
    count += 1;
    if (count == 9) {
      drawFunction();
    }
  
    winChecker();
  });
});

window.onload = enableButtons;