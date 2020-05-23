import {find, filter} from 'lodash'

export function addQuotation(state, item){
	const copy = {
		id: item + 1,
		qty: null,
		description: '',
		price: null
	}

	state.quotations.push(copy)
}

export function removeQuotation(state, quotation){
	state.quotations = filter(state.quotations, ({id}) => id !== quotation.id)
}

export function setTitle(state, title){
	state.title = title
}

export function setTime(state, time){
	state.time = time
}

export function setAdditionalInformation(state, additional_information){
	state.additional_information = additional_information
}

export function setClientId(state, client_id){
	state.client_id = client_id
}
