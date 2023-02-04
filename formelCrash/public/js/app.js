const signs = document.querySelectorAll('.sign');
const buzzer = document.querySelector('#buzzer');
const restart = document.querySelector('#restart');
let i = 0;
//: extra Zufallszeit berechnen
const flexTime = Math.floor(Math.random() * 2000);

//: rotschalten mit 1s Verzögerung
const timer = setInterval(() => {
  signs[i].classList.add('turnRed');
  i++;
  if (i == 5) {
    clearInterval(timer);
  };
}, 1000);
 
 
//: grün schalten nach 3sek + zufälliger Zeit
const launch = setTimeout(() => {
  signs.forEach((sign) => {
    sign.classList.remove('turnRed');
    sign.classList.add('turnGreen');
  })
  //: Aktivierung Reaktionsbutton nach 3sek mit Startzeit
  react(new Date().getTime());
}, 5100 + flexTime)

//: Messung der Reaktionszeit
const react = (start) => {
  buzzer.addEventListener('click', () => {
    const end = new Date().getTime();
    let result = end - start;

    //: farbliche Bewertung der Reaktionszeit
    if (result < 300) {
      buzzer.style.backgroundColor = '#82CD47bb';
      restart.style.backgroundColor = '#82CD4755';
    } else if (result < 800) {
      buzzer.style.backgroundColor = '#F99417bb';
      restart.style.backgroundColor = '#F9941755';
    } else {
      buzzer.style.backgroundColor = '#FF0032bb';
      restart.style.backgroundColor = '#FF003255';
    }
    buzzer.innerHTML = `${result / 1000} sec`;
    restart.style.visibility='visible';
    restart.innerHTML = 'Ich will nochmal!'
  })  
}

buzzer.addEventListener('click' , () => {
  buzzer.style.backgroundColor = '#ff0032bb'
  buzzer.innerHTML = 'disqualified'
  clearInterval(timer);
  clearTimeout(launch);
  restart.style.visibility='visible';
  restart.innerHTML = 'Schwachkopf!'
})

restart.addEventListener('click', () => {
  location.reload();
})
