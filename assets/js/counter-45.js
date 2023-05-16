const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.45/e90b88b9-2cc4-4e53-8679-46970ae3db9b/?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}

