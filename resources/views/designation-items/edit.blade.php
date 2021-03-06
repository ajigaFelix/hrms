@extends(Auth::check() && Auth::user()->role->layout == 1 ? 'layouts.admin' : 'layouts.employee')

@section('head')
	<link href="{{ asset('/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>
		Designation Items
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-success">
					<div class="box-header">	
						<h3 class="box-title">Edit Designation Item</h3>
					</div>
					<div class="box-body">
						{!! Form::model($designation_item, ['method' => 'patch', 'url' => isset($department) ? 'departments/'.$department->id.'/designation-items/'.$designation_item->id : 'designation-items/'.$designation_item->id]) !!}
						{!! Form::hidden('id', $designation_item->id) !!}
						@include('designation-items.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('foot')
	<script src="{{ asset('/plugins/select2/select2.min.js') }}"></script>
	<script type="text/javascript">
		$(function () {
			$("select").select2({
				placeholder: "Select",
				allowClear: true
			});
		});
    </script>
@endsection