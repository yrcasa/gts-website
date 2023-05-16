const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.healthCare/2128ab88-c464-42f2-9cd9-1079dfd9509d?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;

        // console.log(res);
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}

