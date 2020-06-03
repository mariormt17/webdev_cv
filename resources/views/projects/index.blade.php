@extends('layout')

@section('title', __('Portfolio'))

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<h1 class="display-4 mb-0">{{ __('Portfolio') }}</h1>

			<form class="form-inline ml-3">
				<div class="input-group input-group-md">
					<input class="form-control form-control-navbar" type="search" name="search" placeholder="{{ __('Search...') }}" value="{{ $search }}">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<img src="/img/search.png" alt="search" style="width:20px; height:20px">
						</button>
					</div>
				</div>
			</form>

			@auth
				<a class=" btn btn-primary"
					href="{{ route('projects.create') }}">
						{{ __('Create a new project') }}
				</a>
			@endauth
		</div>

		@if($search)
			@forelse($projects as $project)
				<h5>
					<div class="alert alert-primary" role="alert">
						{{ __('The results for your search are as follows:') }}
					</div>
				</h5>
			@empty
				<h5>
					<div class="alert alert-danger" role="alert">
						{{ __('No projects were found with that search') }}
					</div>
				</h5>
			@endforelse
		@else
			<p class="lead text-secondary">{{ __('Projects carried out throughout my experience') }}</p>
		@endif

		<hr>

		<ul class="list-group">
			@isset($projects)
				@forelse($projects as $project)
					<li class="list-group-item border-0 mb-3 shadow-sm">
						<a class="d-flex justify-content-between align-items-center text-secondary"
							href="{{ route('projects.show', $project) }}">
								<span class="font-weight-bold">{{ $project->title }}</span>
								<span class="text-black-50">{{ $project->created_at->format('d/m/y') }}</span>
						</a>
					</li>
				@empty
					<li class="list-group-item border-0 mb-3 shadow-sm">
						{{ __('There are no projects to display in the list') }}
					</li>
				@endforelse
			@else
				<li class="list-group-item border-0 mb-3 shadow-sm">{{ __('There is no list of projects') }}</li>
			@endisset

			{{ $projects->links() }}

		</ul>
	</div>
@endsection