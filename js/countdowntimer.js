// Begin Timer

var countdownDatum = new Date("Juli 8, 2022 23:59:59").getTime();

var interval = setInterval(function() {
  var DatumNu = new Date().getTime();
  var distance = countdownDatum - DatumNu;

  var dagen = Math.floor(distance / (1000 * 60 * 60 * 24));
  var uren = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minuten = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconden = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("timer").innerHTML = dagen + "D " + uren + "U " + minuten + "M " + seconden + "S ";
  if (distance < 0) {
    clearInterval(interval);
    document.getElementById("timer").innerHTML = "TIMER AFGELOPEN";
  }
}, 1000);

// Eind Timer