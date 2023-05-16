const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.Lockdown/a2f192bb-3fb6-4002-b1d9-2502511c97b4/?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}


