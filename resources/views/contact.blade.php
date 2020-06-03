@extends('layout')

@section('title', __('Contact'))

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('form.store') }}">
					@csrf <!--Directiva para proteger el formulario-->
					<h1 class="display-4 ">{{ __('Contact') }}</h1>
					<hr>

					<div class="form-group">
						<label for="name">{{ __('Name') }}</label>

						<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
							id="name"
							name="name"
							placeholder="{{ __('Write here your complete name...') }}"
							value="{{ old('name') }}">

						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<!--{/!! $errors->first('name', '<small>:message</small><br>') !!}-->
					</div>

					<div class="form-group">
						<label for="email">{{ __('Email') }}</label>

						<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
							id="email"
							name="email"
							placeholder="{{ __('Write here your e-mail...') }}"
							type="email"
							value="{{ old('email') }}">

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<!--{/!! $errors->first('email', '<small>:message</small><br>') !!}-->
					</div>

					<div class="form-group">
						<label for="subject">{{ __('Subject') }}</label>

						<input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
							id="subject"
							name="subject"
							placeholder="{{ __('Write here your subject from the message...') }}"
							value="{{ old('subject') }}">

						@error('subject')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<!--{/!! $errors->first('subject', '<small>:message</small><br>') !!}-->
					</div>

					<div class="form-group">
						<label for="content">{{ __('Content') }}</label>

						<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
							id="content"
							name="content"
							placeholder="{{ __('Write here the message content...') }}">
								{{ old('content') }}
						</textarea>

						@error('content')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<!--{/!! $errors->first('content', '<small>:message</small><br>') !!}-->
					</div>

					<button class="btn btn-primary btn-lg btn-block">{{__('Send')}}</button>
				</form>
			</div>
		</div>
	</div>
@endsection