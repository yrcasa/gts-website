const countEl = document.getElementById("count");
const sPlural = document.getElementById("s");

updateVisitCount();

function updateVisitCount() {
  fetch(
    "https://api.countapi.xyz/update/globaltigersolutions.com.cybertroll/3c383a7a-0ef7-4575-a98c-f3bf913e0afc?amount=1"
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
