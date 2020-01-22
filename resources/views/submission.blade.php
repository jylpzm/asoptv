@extends('layouts.app')

@section('content')

<style type="text/css">
.fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	padding: 0;
}
.textarea {
	height:100px;
 	resize:none;

}

</style>
            @foreach($errors->all() as $error)
            <div class="alert alert-danger col-md-6 offset-md-3" role="alert">
              {{ $error }}
            </div>
            @endforeach
     <div class="col-md-6 offset-md-3 mt-5">
        <h1>SUBMIT YOUR SONG!</h1><br>
        
        <form action="submit_form" method="POST" enctype="multipart/form-data" >
        	@csrf
          <input type="text" name="user_id" value="{{ Auth::user()->user_id }}" hidden="">
          <div class="form-group">
            <label for="title">Title of your entry</label>
            <input name="song_title" class="form-control" placeholder="Title of your entry" required="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Favourite Platform</label>
            <select class="form-control" id="exampleFormControlSelect1" name="song_genre" required="required">
              <option>Github</option>
              <option>Gitlab</option>
              <option>Bitbucket</option>
            </select>
          </div>
          <hr>
          <div class="form-group mt-3">
            <label><strong>Upload Song</strong></label>
            <input type="file" name="audio_file">
            <p class="text-danger">**Only .MP3 file format is accepted.</p>
          </div>
          <hr>
          <div class="form-group mt-3">
            <div class="form-group mt-3">
              <label><strong>Upload lyrics</strong></label>
              <input type="file" name="lyrics_file">
              <p class="text-danger">**Only Word Document(.docs or docx) file format is accepted.</p>
            </div>
          <hr>
          <div class="form-group">
          	<fieldset class="fieldset">
          		<textarea name="notes" cols="59" class="textarea" placeholder="Type your Message Here...." tabindex="5" required></textarea>
          	</fieldset>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" S>Submit</button>
        </form>
    </div>
@endsection

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script type="text/javascript">
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});







</script>