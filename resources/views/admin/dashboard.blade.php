@extends('layouts.master')

@section('content')
<div class="section">
    <div class="container">
        <h1>Dashboard</h1>
        <div class="box">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

          
        	<div class="row">
        		<div class="col-md-8 col-md-offset-2">
        			<div class="panel panel-default">
        				<h5>Username CSV Import</h5>
    					<form class="form-horizontal" method="POST" action="/import/surname" enctype="multipart/form-data">
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
    						<br>
    						<div class="form-group">
    							<div class="col-md-8 col-md-offset-4">
    								<button type="submit" class="button">
    									Import
    								</button>
    							</div>
    						</div>
    					</form>
        			</div>
        		</div>
        	</div>
            <br>
            <div>                        
                @foreach($surnames as $username)
                    {{$username['character']}}
                @endforeach
            </div><br>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <h5>Character CSV Import</h5>
                        <form class="form-horizontal" method="POST" action="/import/character" enctype="multipart/form-data">
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
                            <br>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="button">
                                        Import
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div>                        
                @foreach($characters as $character)
                {{$character['character']}}
                @endforeach
            </div>
          
        </div>
    </div>
</div>
@endsection
