@if($status == App\JobOffer::ACTIVE)
<button class="mb-2 mr-2 btn-pill btn btn-success">Activa</button>
@elseif($status == App\JobOffer::PAUSED)
<button class="mb-2 mr-2 btn-pill btn btn-warning">Pausada</button>
@else
<button class="mb-2 mr-2 btn-pill btn btn-danger">Inactiva</button>
@endif