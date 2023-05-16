const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.com.ghosting/fe87b886-e214-4e5c-80e6-46b4ddd5ea09?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;

        // console.log(res);
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}

