const since = document.querySelector("#since");
const date = new Date();
const yearToday = date.getFullYear();

since.innerHTML = `&copy; 2008 - ${yearToday}`