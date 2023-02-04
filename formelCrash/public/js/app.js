//: Konstanten für DOM (HTML) Elemente : signs -> Ampel divs; buzzer, restart -> buttons
const signs = document.querySelectorAll('.sign');
const buzzer = document.querySelector('#buzzer');
const restart = document.querySelector('#restart');

//: Sound-Instanzen von Audio() als Konstanten
const beep = new Audio('public/sounds/beepS.mp3');
const bleep = new Audio('public/sounds/bleepS.mp3');
const oohh = new Audio('public/sounds/oohh.mp3');
const medium = new Audio('public/sounds/medium.mp3');
const boo = new Audio('public/sounds/boo.mp3');
const diss = new Audio('public/sounds/diss.mp3');
const fullThrottle = new Audio('public/sounds/start.mp3');
const awaitStart = new Audio('public/sounds/awaitStart.mp3');

//: fullThrottle und awaitStart sollen leiser sein
fullThrottle.volume = 0.4;
awaitStart.volume = 0.6;

//: Einkapselung in Start-Funktion zur Fehlervermeidung bei Audioverwendung 
(() => {
  //: Restart-Button erscheint und verschwindet bei Klick
  restart.style.visibility='visible';
  restart.innerHTML = 'Start!'
  restart.addEventListener('click', () => {
    restart.style.visibility = 'hidden';
    buzzer.style.visibility='visible';
    
    awaitStart.play();
        
    //: extra Zufallszeit berechnen
    const flexTime = Math.floor(Math.random() * 2000);
    
    //: rotschalten mit 1s Verzögerung
    let i = 0;
    const timer = setInterval(() => {
      signs[i].classList.add('turnRed');
      if (i < 4) {
        bleep.play();
      }
      i++;
      if (i == 5) {
        beep.play();
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
    
    //: benötigte Funktion zum Abschalten des Disqualifizierungssounds    
    const dissOnOf = (play = 'on') =>{
      diss.play();
      if (play == 'off') {
        diss.pause();
      } 
    }
    
    //: Messung der Reaktionszeit
    const react = (start) => {
      buzzer.addEventListener('click', () => {
        const end = new Date().getTime();
        let result = end - start;
        dissOnOf('off');
        awaitStart.pause();
        fullThrottle.play();
        //: farbliche Bewertung der Reaktionszeit
        if (result < 300) {
          buzzer.style.backgroundColor = '#82CD47bb';
          restart.style.backgroundColor = '#82CD4755';
          oohh.play();
        } else if (result < 800) {
          buzzer.style.backgroundColor = '#F99417bb';
          restart.style.backgroundColor = '#F9941755';
          medium.play()
          ;        } else {
            buzzer.style.backgroundColor = '#FF0032bb';
            restart.style.backgroundColor = '#FF003255';
            boo.play();
          }
      //: Buzzer aus, Ergebnis zeigen, Restart-Button erscheint
          buzzer.innerHTML = `${result / 1000} sec`;
          buzzer.disabled = true;
          restart.style.visibility='visible';
          restart.innerHTML = 'Ich will nochmal!'
        })  
      }
      
    //: zusätzlicher EventListener zur Behandlung übereilten Klickverhaltens
      buzzer.addEventListener('click' , () => {
        awaitStart.pause();
        fullThrottle.play();
        dissOnOf();
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
    })
  })()