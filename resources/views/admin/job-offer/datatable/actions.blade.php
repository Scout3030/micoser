<div class="d-flex">
	<form action="{{ route('admin.job-offer.destroy', $slug) }}" method="POST">
	    @csrf
	    @method('DELETE')
	    <button type="submit" class="mb-2 mr-2 btn btn-danger">Eliminar</button>
	</form>

	<button class="mb-2 mr-2 btn btn-warning" onclick="window.location.href='{{route('admin.job-offer.edit', $slug)}}'">Editar</button>
	@if($status == App\JobOffer::ACTIVE)
	<form action="{{ route('admin.job-offer.pause', $slug) }}" method="POST">
	    @csrf
	    @method('put')
	    <button type="submit" class="mb-2 mr-2 btn btn-info">Pausar</button>
	</form>
	@endif

	@if($status == App\JobOffer::PAUSED)
	<form action="{{ route('admin.job-offer.pause', $slug) }}" method="POST">
	    @csrf
	    @method('put')
	    <button type="submit" class="mb-2 mr-2 btn btn-info">Publicar</button>
	</form>
	@endif
</div>