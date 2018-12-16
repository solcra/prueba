@extends('layouts.app')
@section('content')
@guest
@else
	<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-12 col-sm-12 col-md-8 background-color-gris">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-4">
						<div class="container">
							<div class="row">
								<div class="col-12 col-sm-12 text-center">
									<img src="{{ Auth::user()->avatar }}" alt="" class="img-fluid">
								</div>
							  <div class="col-12 col-sm-12 text-center mt-3">
							      <a href="#" class="btn btn-primary button-secondary" onclick="event.preventDefault();
							          document.getElementById('logout-form').submit();">CERRAR SESIÓN</a>
							      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							      @csrf
							  </div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-8">
						<div class="name">
							<h1>{{ Auth::user()->name }} {{ Auth::user()->apellidos }}</h1>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-4">
									Nombre:
								</div>
								<div class="col-12 col-sm-12 col-md-8">
									{{ Auth::user()->name }} {{ Auth::user()->apellidos }}
								</div>
								<div class="col-12 col-sm-12 col-md-4">
									Correo eletronico:
								</div>
								<div class="col-12 col-sm-12 col-md-8">
									{{ Auth::user()->email }}
								</div>
								<div class="col-12 col-sm-12 col-md-4">
									Celular:
								</div>
								<div class="col-12 col-sm-12 col-md-8">
									{{ Auth::user()->celular }}
								</div>
								<div class="col-12 col-sm-12 col-md-4">
									Usuario:
								</div>
								<div class="col-12 col-sm-12 col-md-8">
									{{ Auth::user()->username }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endguest

@endsection