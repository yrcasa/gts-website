const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.comply/5776d144-1b17-41af-94f3-d084e532160e?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}


