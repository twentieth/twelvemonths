<!DOCTYPE html>
<html lang="en">
@include('photos.head')
<body class="w3-black">



<div class="w3-row">
  <div class="w3-rest">
    <div class="w3-container w3-padding-xxlarge w3-black w3-xlarge" style="position:absolute;top:0;bottom:0;right:0;left:0;" id="contact-form">

  {{ Form::open(['url' => '/photos/contact', 'method' => 'POST']) }}
  {{ Form::label('your_name', 'your name', ['class' => 'w3-label w3-text-grey w3-hover-text-white']) }}
  @if($errors->has('your_name'))
    @foreach($errors->get('your_name') as $error)
      <span class="w3-medium w3-text-red errors">{{ $error }} </span>
    @endforeach
  @endif
  {{ Form::text('your_name', null, ['class' => 'w3-input', 'placeholder' => '*required']) }}
  {{ Form::label('your_email', 'your e-mail', ['class' => 'w3-label w3-text-grey w3-hover-text-white']) }}
  @if($errors->has('your_email'))
    @foreach($errors->get('your_email') as $error)
      <span class="w3-medium w3-text-red errors">{{ $error }} </span>
    @endforeach
  @endif
  {{ Form::email('your_email', null, ['class' => 'w3-input', 'placeholder' => '*required']) }}
  {{ Form::label('your_message', 'your message', ['class' => 'w3-label w3-text-grey w3-hover-text-white']) }}
  @if($errors->has('your_message'))
    @foreach($errors->get('your_message') as $error)
      <span class="w3-medium w3-text-red errors">{{ $error }} </span>
    @endforeach
  @endif
  {{ Form::textarea('your_message', null, ['class' => 'w3-input', 'placeholder' => '*required', 'rows' => '4']) }}
  {{ Form::label('cc_myself', 'do you want to receive the message copy?', ['class' => 'w3-label w3-text-grey w3-hover-text-white']) }}
  {{ Form::checkbox('cc_myself', True, True, ['class' => 'w3-check']) }}
  <br>
  <br>
  {{ Form::submit('send', ['class' => 'w3-btn w3-text-grey w3-hover-text-white']) }}
  {{ Form::reset('clean', ['class' => 'w3-btn w3-text-grey w3-hover-text-white']) }}
  {{ Form::close() }}
    </div>
  </div>
</div>

 
</body>
</html>
 
 