<template>

	<form
		action="/administracion/quotation/store"
		method="POST"
		enctype="multipart/form-data"
		novalidate
		@submit.prevent="sendData()"
		ref="form"
		>
		<input type="hidden" name="_token" :value="csrf">
		<input type="hidden" name="items" :value="items">
		<div class="form-row">
			<div class="col-md-12 col-sm-12">
                <div class="position-relative form-group">
                	<label class="">Titulo de la cotización</label>
                	<input :value="title" type="text" class="form-control" autocomplete="off" @input="setQuotationTitle" name="title">
                </div>
        	</div>
		</div>
		<div class="form-row">
			<div class="col-md-8 col-sm-6">
				<div class="position-relative form-group">
					<label class="">Cliente</label>
					<select class="form-control" @change="setQuotationClientId" name="client_id">
						<option>Seleccione cliente</option>
						<option v-for="client in clients" :value="client.id" :selected="client.id === client_id">{{client.name}} / {{client.document}}</option>
					</select>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="text-right">
					<a class="btn-icon btn-pill btn btn-success" @click.prevent="addNewItem(nItem)" style="color: #fff">
						<i class="lnr-plus-circle btn-icon-wrapper"></i>Agregar nuevo item
					</a>
				</div>
			</div>
		</div>
		<div class="form-row" v-for="(article, index) in quotations">
			<div class="col-md-2 col-sm-6">
                <div class="position-relative form-group">
                	<label class="">Cantidad</label>
                	<input v-model="article.qty" type="number" class="form-control">
                </div>
        	</div>
            <div class="col-md-5 col-sm-6">
                <div class="position-relative form-group">
                	<label class="">Descripción</label>
                	<textarea v-model="article.description" class="form-control"></textarea>
                </div>
            </div>
        	<div class="col-md-2 col-sm-6">
                <div class="position-relative form-group">
                	<label class="">Precio unitario (S/)</label>
                	<input v-model="article.price" type="text" class="form-control">
                </div>
        	</div>
        	<div class="col-md-2 col-sm-6">
                <div class="position-relative form-group">
                	<label class="">Total (S/)</label>
                	<input :value="article.qty * article.price" class="form-control" readonly>
                </div>
        	</div>
        	<div class="col-md-1 col-sm-6">
                <div class="position-relative form-group">
                	<a class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-danger" @click.prevent="removeItem(article)" style="color: #fff">
                		<i class="lnr-cross-circle btn-icon-wrapper"> </i>
                	</a>
                </div>
        	</div>
        </div>
        <div class="form-row" style="background: #346756">
            <div class="col-md-2 offset-md-9 col-sm-6">
                <div class="position-relative form-group">
                	<label class="text-white">Total (S/)</label>
                	<input type="text" class="form-control" :value="totalPrice" readonly>
                </div>
        	</div>
		</div>
		<div class="form-row">
			<div class="col-md-7 col-sm-6">
                <div class="position-relative form-group">
                	<label class="">Datos adicionales</label>
                	<textarea :value="additional_information" class="form-control" @change="setQuotationAdditionalInformation" name="additional_information"></textarea>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="position-relative form-group">
                	<label class="">Tiempo de entrega</label>
                	<input :value="time" type="text" class="form-control" @change="setQuotationTime" name="time">
                </div>
        	</div>
		</div>
		<button class="mt-1 btn btn-primary">Crear cotización</button>
	</form>

</template>

<script>
	import {mapState, mapMutations, mapGetters} from 'vuex'
	export default {
		data(){
			return {
				nItem: 1,
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
				items: []
			}
		},
		props: ['clients'],
		methods: {
			...mapMutations('quotation', ['addQuotation', 'removeQuotation', 'setTitle', 'setClientId', 'setAdditionalInformation', 'setTime']),
			addNewItem(item){
				this.addQuotation(item)
				this.nItem += 1
			},
			removeItem(item){
				this.removeQuotation(item)
			},
			sendData(){
				this.items = JSON.stringify(this.quotations)
				var that = this 
				setTimeout(function(){
					that.$refs.form.submit()
				}, 2000, that)
			},
			setQuotationTitle(e){
				this.setTitle(e.target.value)
			},
			setQuotationAdditionalInformation(e){
				this.setAdditionalInformation(e.target.value)
			},
			setQuotationTime(e){
				this.setTime(e.target.value)
			},
			setQuotationClientId(e){
				this.setClientId(e.target.value)
			}
		},
		computed: {
			...mapState('quotation', ['quotations', 'title', 'additional_information', 'time', 'client_id']),
			...mapGetters('quotation', ['totalPrice'])
		}
	};
</script>