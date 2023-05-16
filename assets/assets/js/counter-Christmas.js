const countEl = document.getElementById("count");
const sPlural = document.getElementById("s");

updateVisitCount();

function updateVisitCount() {
  fetch(
    "https://api.countapi.xyz/update/globaltigersolutions.com.christmas/7d3edba2-4fa6-4003-98a9-1156d9f449f5?amount=1"
  )
    .then((res) => res.json())
    .then((res) => {
      countEl.innerHTML = res.value;

      // console.log(res);

      if (res.value > 1) {
        sPlural.innerHTML = "s";
      }
    });
}
