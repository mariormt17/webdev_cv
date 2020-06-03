@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1 class="display-4 font-weight-bold">{{ $project->title }}</h1>
			<hr>

			<div class="row">
				<div class="col-12 col-lg-4">
					<p class="font-size-category">
						{{ $project->category }}
					</p>

					<p class="font-size-roleandlang">
						<b>{{ __('Role').': '}}</b>
						{{ $project->role }}
					</p>

					@if($project->progLang)
						<p class="font-size-roleandlang">
							<b>{{ __('Language').': '}}</b>
							{{ $project->progLang }}
						</p>
					@endif

					<p class="font-size-others">
						<b>{{ __('Duration').': '}}</b>
						{{ $project->duration.' '.__('Weeks')}}
					</p>

					@if($project->companyMade)
						<p class="font-size-others">
							<b>{{ __('Company From').': '}}</b>
							{{ $project->companyMade }}
						</p>
					@endif

					@if($project->companyTo)
						<p class="font-size-others">
							<b>{{ __('Company To').': '}}</b>
							{{ $project->companyTo }}
						</p>
					@endif
				</div>

				<div class="col-12 col-lg-8">
					<label class="font-size-category">
						{{ __('Description') }}
					</label>

					<p class="font-size-others bg-light p-3 text-justify">
						{{ $project->description }}
					</p>
				</div>
			</div>

			<p class="text-black-50">
				{{ $project->created_at->diffForHumans() }}
			</p>


			<div class="d-flex justify-content-between align-items-center">
				<a class="font-size-others" href="{{ route('projects.index') }}">
					{{ __('Back') }}
				</a>

				@auth
					<div class="btn-group btn-group-sm">
						<a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">
							{{ __('Edit') }}
						</a>
						<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
							{{ __('Delete')}}
						</a>
					</div>

					<form class="d-none"
						id="delete-project"
						method="POST"
						action="{{ route('projects.destroy', $project) }}">
							@csrf
							@method('DELETE')
					</form>
				@endauth
			</div>
		</div>
	</div>
@endsection