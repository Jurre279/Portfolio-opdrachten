// array om Rndn op te slaan
let geschiedenis = [];
let degrees = [
  [0, 60, -45],
  [45, -20, 70],
  [50, 160, 20], 
  [50, 160, 200],
  [45, -20, 250],
  [0, 240, -45],
];

// functie om dobbelsteen te rollen
let roll = document.querySelector("#dice");
roll.addEventListener("click", () => {
  // genereer willekeurig getal tussen 1 en 6
  let Rnd = Math.floor(Math.random() * 6) + 1;

  // veranderd afbeelding van dobbelsteen op basis van Rnd
  const dice = document.getElementById("dice");
  dice.classList.add("pointerevent");
  dice.src = "./imgs/dice" + Rnd + ".jpg";
  roll.classList.remove("basicturn");
  dice.classList.add("speed");

  // voeg Rnd toe aan geschiedenis
  geschiedenis.push(Rnd);

  // toon geschiedenis op het scherm
  let GeschiedenisText = "";
  for (const element of geschiedenis) {
    GeschiedenisText += element + " ";
  }

  console.log(geschiedenis);

  //telt het aantal items in de array geschiedenis.
  let length = geschiedenis.length;
  //deze functie alle items in de array geschiedenis bij elkaar op.
  const sumArray = (geschiedenis) => {
    let sum = 0;
    geschiedenis.forEach((item) => {
      sum += item;
    });
    return sum;
  };
  // roept sum array aan om de variable array totaal. het totaal te maken van de array geschiedenis
  let arraytotal = sumArray(geschiedenis);
  //Voert gemiddled functie uit
  const gemiddled = (length, arraytotal) => arraytotal / length;
  //het aantal keer een nummer is gevallen in de html pagina

  setTimeout(() => {
    roll.classList.remove("speed");
    roll.style.transform = `rotateY(${degrees[Rnd - 1][0]}deg) rotateX(${
      degrees[Rnd - 1][1]
    }deg) rotateZ(${degrees[Rnd - 1][2]}deg)`;
    let answer = document.getElementById(Rnd);
    answer.classList.add("answer");
    //zet gemiddlede in de html pagina
    const gemiddledElement = document.getElementById("gemiddled");
    gemiddledElement.innerHTML = gemiddled(length, arraytotal).toFixed(2);
    const GeschiedenisElement = document.getElementById("Geschiedenis");
    GeschiedenisElement.innerText = GeschiedenisText;
    const aantal = () => {
      document.querySelector("#amt" + Rnd).innerHTML++;
    };
    aantal();
    setTimeout(() => {
      roll.classList.add("basicturn");
      let answer = document.getElementById(Rnd);
      answer.classList.remove("answer");  
      dice.classList.remove("pointerevent");
    }, 2000);
  }, 2000);
});
