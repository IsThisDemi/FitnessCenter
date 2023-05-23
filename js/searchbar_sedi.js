// code for search bar
function search_club() {
	let input = document.getElementById('searchbar_club').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('address');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="list-item";				
		}
	}
}

