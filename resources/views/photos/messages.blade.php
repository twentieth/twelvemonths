
	@if(session('message_type') and session('message_text'))
	<div class="w3-row">
        <div class="w3-container w3-light-grey w3-padding-large {{ session('message_type') }} message">
        	<div class="message_text">{{ session('message_text') }} <i class="fa fa-remove w3-right close-message"></i></div>
        </div>
    </div>
	@endif