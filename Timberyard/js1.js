var counter = 1;
setInterval(function () {
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 4) {
    counter = 1;
  }
}, 5000);

$(document).ready(function () {
  $(".1111").animate({ height: "110px" }, "50");
  $(".1111").animate({ height: "80px" }, "50");
});

$(document).ready(function () {
  $(".jq1").click(function () {
    $(".jq11").slideToggle();
  });
  $(".jq2").click(function () {
    $(".jq22").slideToggle();
  });
  $(".jq3").click(function () {
    $(".jq33").slideToggle();
  });
  $(".jq4").click(function () {
    $(".jq44").slideToggle();
  });
  $(".jq5").click(function () {
    $(".jq55").slideToggle();
  });
  $(".jq6").click(function () {
    $(".jq66").slideToggle();
  });
  $(".jq7").click(function () {
    $(".jq77").slideToggle();
  });
  $(".jq8").click(function () {
    $(".jq88").slideToggle();
  });
});

window.addEventListener("load", () => {
  const email = localStorage.getItem("EMAIL");
  document.getElementById("h").innerHTML = email;
});

function handle() {
  const teak = document.getElementById("teak").value;
  const silver = document.getElementById("silver").value;
  const sandal = document.getElementById("sandal").value;
  const pink = document.getElementById("pink").value;
  const black = document.getElementById("black").value;
  const neem = document.getElementById("neem").value;
  const bamboo = document.getElementById("bamboo").value;
  const red = document.getElementById("red").value;
  localStorage.setItem("TEAK", teak);
  localStorage.setItem("SILVER", silver);
  localStorage.setItem("SANDAL", sandal);
  localStorage.setItem("PINK", pink);
  localStorage.setItem("BLACK", black);
  localStorage.setItem("NEEM", neem);
  localStorage.setItem("BAMBOO", bamboo);
  localStorage.setItem("RED", red);
  return;
}