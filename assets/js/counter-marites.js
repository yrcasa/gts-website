const countEl = document.getElementById('count');
const sPlural = document.getElementById('s');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/globaltigersolutions.com.com.marites/6afb6739-e29a-4bef-b1b4-d195388ba68f?amount=1')
	.then(res => res.json())
	.then(res => {
        countEl.innerHTML = res.value;

        // console.log(res);
        
        if(res.value > 1){
            sPlural.innerHTML = "s";
        }
	})
}

