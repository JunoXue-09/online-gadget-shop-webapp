function searchProduct(){
	let input = document.getElementById("searchInput").value.toLowerCase();
	
	let products = document.getElementsByClassName("Product Card");
	
	for(let i = 0; i < products.length; i++) {
		
		let text = products[i].innerText.toLowerCase();
		
		if (text.includes(input)){
			products[i].style.display = "block";
		} else {
			products[i].style.display = "none";
		}
	}
}
