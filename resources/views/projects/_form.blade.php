@csrf

<div class="form-group">
	<label for="title">{{ __('Project Title') }}</label>

	<input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror"
		id="title"
		type="text"
		name="title"
		placeholder="{{ __('Write here the title of the project...') }}"
		value="{{ old('title', $project->title) }}">

	@error('title')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
	<!--{/!! $errors->first('title', '<small>:message</small><br>') !!}-->
</div>

<div class="form-group">
	<label for="category">{{ __('Project Category') }}</label>

	<input class="form-control bg-light shadow-sm @error('category') is-invalid @else border-0 @enderror"
		id="category"
		type="text"
		name="category"
		placeholder="{{ __('Write here the category of the project...') }}"
		value="{{ old('category', $project->category) }}">

	@error('category')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="progLang">{{ __('Project Programming Language') }}</label>

	<input class="form-control bg-light shadow-sm border-0"
		id="progLang"
		type="text"
		name="progLang"
		placeholder="{{ __('Write here the programming language of the project...') }}"
		value="{{ old('progLang', $project->progLang) }}">
</div>

<div class="form-group">
	<label for="role">{{ __('Project Role') }}</label>

	<input class="form-control bg-light shadow-sm @error('role') is-invalid @else border-0 @enderror"
		id="role"
		type="text"
		name="role"
		placeholder="{{ __('Write here the role you played in the project...') }}"
		value="{{ old('role', $project->role) }}">

	@error('role')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="companyMade">{{ __('Company Where Was Made') }}</label>

	<input class="form-control bg-light shadow-sm @error('companyMade') is-invalid @else border-0 @enderror"
		id="companyMade"
		type="text"
		name="companyMade"
		placeholder="{{ __('Write here the company where the project was made...') }}"
		value="{{ old('companyMade', $project->companyMade) }}">

	@error('companyMade')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="companyTo">{{ __('Company For Was Made') }}</label>

	<input class="form-control bg-light shadow-sm @error('companyTo') is-invalid @else border-0 @enderror"
		id="companyTo"
		type="text"
		name="companyTo"
		placeholder="{{ __('Write here the company for which the project was made...') }}"
		value="{{ old('companyTo', $project->companyTo) }}">

	@error('companyTo')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="duration">{{ __('Duration').' ('.__('Weeks').')' }}</label>

	<input class="form-control bg-light shadow-sm @error('duration') is-invalid @else border-0 @enderror"
		id="duration"
		type="text"
		name="duration"
		placeholder="{{ __('Write here the duration in weeks of the project...') }}"
		value="{{ old('duration', $project->duration) }}">

	@error('duration')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-group">
	<label for="description">{{ __('Project Description') }}</label>

	<textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
		id="description"
		name="description"
		placeholder="{{ __('Write here the description of the project...') }}"
		>{{ old('description', $project->description) }}</textarea>

	@error('description')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
	<!--{/!! $errors->first('description', '<small>:message</small><br>') !!}-->
</div>

<button class="btn btn-primary btn-lg btn-block">{{ __($btnText) }}</button>

<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">{{ __('Cancel') }}</a>