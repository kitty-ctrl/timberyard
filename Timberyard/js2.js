window.addEventListener("load", () => {
  const teak = localStorage.getItem("TEAK");
  document.getElementById("teakp").value = teak;
  document.getElementById("teakt").value = tc = teak * 15000;
  document.getElementById("teakc").value = "3201";

  const silver = localStorage.getItem("SILVER");
  document.getElementById("silverp").value = silver;
  document.getElementById("silvert").value = sic = silver * 10000;
  document.getElementById("silverc").value = "3210";

  const sandal = localStorage.getItem("SANDAL");
  document.getElementById("sandalp").value = sandal;
  document.getElementById("sandalt").value = sac = sandal * 50000;
  document.getElementById("sandalc").value = "4599";

  const pink = localStorage.getItem("PINK");
  document.getElementById("pinkp").value = pink;
  document.getElementById("pinkt").value = pc = pink * 30000;
  document.getElementById("pinkc").value = "3500";

  const black = localStorage.getItem("BLACK");
  document.getElementById("blackp").value = black;
  document.getElementById("blackt").value = blc = black * 38000;
  document.getElementById("blackc").value = "3200";

  const neem = localStorage.getItem("NEEM");
  document.getElementById("neemp").value = neem;
  document.getElementById("neemt").value = nc = neem * 10000;
  document.getElementById("neemc").value = "4900";

  const bamboo = localStorage.getItem("BAMBOO");
  document.getElementById("bamboop").value = bamboo;
  document.getElementById("bamboot").value = bac = bamboo * 13000;
  document.getElementById("bambooc").value = "5001";

  const red = localStorage.getItem("RED");
  document.getElementById("redp").value = red;
  document.getElementById("redt").value = rc = red * 10000;
  document.getElementById("redc").value = "1100";

  var totalc = tc + sic + sac + pc + blc + nc + bac + rc;
  document.getElementById("totalc").value = totalc;


  const email = localStorage.getItem("EMAIL");
  document.getElementById("email").value = email;
  document.getElementById("h").innerHTML = email;

});
$(window)
  .on("load resize ", function () {
    var scrollWidth =
      $(".tbl-content").width() - $(".tbl-content table").width();
    $(".tbl-header").css({ "padding-right": scrollWidth });
  })
  .resize();