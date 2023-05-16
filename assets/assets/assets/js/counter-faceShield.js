const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.face-shield/1474425b-0778-415a-8c6d-78ec6dfb30b3/?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;

        // console.log(res);
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}

