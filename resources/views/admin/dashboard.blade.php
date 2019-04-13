@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                    	<div class="row">
                    		<div class="col-md-8 col-md-offset-2">
                    			<div class="panel panel-default">
                    				<div class="panel-heading">Username CSV Import</div>

                    				<div class="panel-body">
                    					<form class="form-horizontal" method="POST" action="/import/username" enctype="multipart/form-data">
                    						@csrf

                    						<div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">                    						

                    							<div class="col-md-6">
                    								<input id="csv_file" type="file" class="form-control" name="csv_file" required>

                    								@if ($errors->has('csv_file'))
                    								<span class="help-block">
                    									<strong>{{ $errors->first('csv_file') }}</strong>
                    								</span>
                    								@endif
                    							</div>
                    						</div>

                    						<div class="form-group">
                    							<div class="col-md-8 col-md-offset-4">
                    								<button type="submit" class="btn btn-primary">
                    									Import
                    								</button>
                    							</div>
                    						</div>
                    					</form>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
