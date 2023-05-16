const countEl = document.getElementById("count");
const sPlural = document.getElementById("s");

updateVisitCount();

function updateVisitCount() {
  fetch(
    "https://api.countapi.xyz/update/globaltigersolutions.com.NewYear2021/cfedfb91-5f23-4435-90d0-2013c2a48566?amount=1"
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
