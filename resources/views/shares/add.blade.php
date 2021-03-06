@extends('layout')

@section('header')
	<style>
		.container {
			padding-top: 50px;
		}
	</style>
@stop

@section('content')
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h3>SHARE NEW ITEM</h3>

			<form class="form-group" method="post" action="/newFile" enctype="multipart/form-data">
				<p>TITLE</p>
				<input type="text" name="share_title" class="form-control{{ $errors->has('share_title') ? ' has-error' : '' }}">
				@if ($errors->has('share_title'))
                    <span class= "alert-danger">
                        <strong>{{ $errors->first('share_title') }}</strong>
                    </span>
                @endif
				<p>DESCRIPTION</p>
				<textarea type="text" name="share_description" class="form-control{{ $errors->has('share_description') ? ' has-error' : '' }}"></textarea>
				@if ($errors->has('share_description'))
                    <span class="alert-danger">
                        <strong>{{ $errors->first('share_description') }}</strong>
                    </span>
                @endif
				<p>SELECT FILE</p>
				<input type="file" name="photo" class="form-control{{ $errors->has('photo') ? ' has-error' : '' }}">
				@if ($errors->has('photo'))
                    <span class="alert-danger">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                @endif
				<input type="submit" name="submit" value="Add File">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</div>
	</div>

       <script type="text/javascript">
	 CKEDITOR.replace( 'share_description' );
</script>
@stop
