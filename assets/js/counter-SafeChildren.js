const countEl = document.getElementById("count");
const sPlural = document.getElementById("s");

updateVisitCount();

function updateVisitCount() {
  fetch(
    "https://api.countapi.xyz/update/globaltigersolutions.com.SafeChildren/feb87587-e488-4adc-80d7-f4df17759c91?amount=1"
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
