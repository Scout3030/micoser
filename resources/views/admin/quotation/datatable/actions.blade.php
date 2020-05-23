<div class="d-flex">
	<form action="{{ route('admin.quotation.destroy', $id) }}" method="POST">
	    @csrf
	    @method('DELETE')
	    <button type="submit" class="mb-2 mr-2 btn btn-danger">Eliminar</button>
	</form>

	<a class="mb-2 mr-2 btn btn-warning " onclick="window.location.href='{{route('admin.quotation.edit', $id)}}'">Editar</a>

	<a class="mb-2 mr-2 btn btn-success text-white" onclick="window.location.href='{{route('admin.quotation.show', $id)}}'"><i class="lnr-eye"></i> Ver</a>

	<a class="mb-2 mr-2 btn btn-info text-white" onclick="window.location.href='{{route('admin.quotation.print', $id)}}'"><i class="pe-7s-print"></i> Imprimir</a>
</div>