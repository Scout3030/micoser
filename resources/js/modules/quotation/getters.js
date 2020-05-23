export function totalPrice(state){
	return state.quotations.reduce((sum, quotation) => {
		return Math.round((parseFloat(quotation.price) * quotation.qty)*100)/100 + Math.round(sum*100)/100
	}, 0)
}

// export function totalProducts(state){
// 	return state.quotations.reduce((sum, product) => {
// 		return parseInt(product.qty) + sum
// 	}, 0)
// 	// return state.cart.length
// }
