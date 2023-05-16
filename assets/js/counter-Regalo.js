const countEl = document.getElementById("count");
const sPlural = document.getElementById("s");

updateVisitCount();

function updateVisitCount() {
  fetch(
    "https://api.countapi.xyz/update/globaltigersolutions.com.regalo/f75a8c9d-1bae-4ed4-aa5d-892ed21ae31d?amount=1"
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
