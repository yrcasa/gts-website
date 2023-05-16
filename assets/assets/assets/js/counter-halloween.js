const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.com.halloween/85d97669-7457-4544-bb95-06876a1a8937?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;

        // console.log(res);
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}

