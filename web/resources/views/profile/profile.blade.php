@extends('layout.loggedin')

@section('loggedin_content')

	<div class="container">
		@include('common.messages')

		<h3>Hi, {{ $user->email }}!</h3>
		
		<div class="row">
			<div class="col s12 m6">
				<div class="card blue-grey lighten-4 black-text">
					<form class="form-horizontal" method="POST" accept-charset="UTF-8" action="{{ route('profile.updatepwd') }}">
						{{ csrf_field() }}
						<div class="card-content black-text">
							<p><span class="card-title">Change Password</span></p>
							<div class="input-field">
								<input type="password" class="validate" id="password" name="password" required>
								<label for="password">Current Password</label>
							</div>
							<div class="input-field">
								<input type="password" class="validate" id="newpassword" name="newpassword" required>
								<label for="newpassword">New Password</label>
							</div>
							<div class="input-field">
								<input type="password" class="validate" id="newpassword_confirmation" name="newpassword_confirmation" required>
								<label for="newpassword_confirmation">New Password (confirm)</label>
							</div>
						</div>
						<div class="card-action">
							<button style="width: 100%;" class="btn waves-effect blue" type="submit">
								<i class="material-icons left">save</i>Change Password
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card blue-grey lighten-4 black-text">
					<form class="form-horizontal" method="POST" accept-charset="UTF-8" action="{{ route('profile.updatemqtt') }}">
						{{ csrf_field() }}
						<div class="card-content black-text">
							<p><span class="card-title">MQTT server</span></p>
							<ul class="browser-default">
								<li><b>MQTT server:</b> mqtt.gbridge.kappelt.net</li>
								<li><b>MQTT port:</b> 1883</li>
								<li><b>TLS:</b> not yet supported</li>
								<li><b>Username:</b> gbridge-u{{ Auth::user()->user_id }}</li>
								<li><b>Password:</b> (change below)</li>
							</ul>
							<div class="input-field">
								<input type="password" class="validate" id="account-password" name="account-password" required>
								<label for="account-password">Account Password</label>
							</div>
							<div class="input-field">
								<input type="password" class="validate" id="mqtt-password" name="mqtt-password" required>
								<label for="mqtt-password">New MQTT Password</label>
							</div>
							<div class="input-field">
								<input type="password" class="validate" id="mqtt-password_confirmation" name="mqtt-password_confirmation" required>
								<label for="mqtt-password_confirmation">New MQTT Password (confirm)</label>
							</div>
						</div>
						<div class="card-action">
							<button style="width: 100%;" class="btn waves-effect blue" type="submit">
								<i class="material-icons left">save</i>Change MQTT Password
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection