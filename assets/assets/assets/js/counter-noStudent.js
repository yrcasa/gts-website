const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.noStudent/bd2fb0af-e85d-4289-b104-c48fd0763ff6/?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
    })
}

