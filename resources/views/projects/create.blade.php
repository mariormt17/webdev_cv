 @extends('layout')

@section('title', __('Create Project'))

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.store') }}">
					<h1 class="display-4">{{ __('New Project') }}</h1>
					<hr>

					@include('projects._form', ['btnText' => 'Send'])

				</form>
			</div>
		</div>
	</div>
@endsection