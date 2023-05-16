const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.vaccine/cb1e26e2-ae0e-4b08-aa29-d1eb6028ea81/?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}



