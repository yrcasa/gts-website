const countEl = document.getElementById("count");
const sPlural = document.getElementById("s");

updateVisitCount();

function updateVisitCount() {
  fetch(
    "https://api.countapi.xyz/update/globaltigersolutions.com.HappyHolidays/5fda7358-831e-46fe-84ad-df4ed3ddb337?amount=1"
  )
    .then((res) => res.json())
    .then((res) => {
      countEl.innerHTML = res.value;

      if (res.value > 1) {
        sPlural.innerHTML = "s";
      }
    });
}
