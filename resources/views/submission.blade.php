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
        
        <form action="submit_form" method="POST" enctype="multipart/form-data" autocomplete="off" id="formfield">
        	@csrf
          <input type="text" name="user_id" value="{{ Auth::user()->user_id }}" hidden="">
          <input type="text" name="status" value="0" hidden="">
          <div class="form-group">
            <label for="title">Song Title</label>
            <input name="song_title" class="form-control" placeholder="Title of your entry" required="" id="song_title">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Genre</label>
            <select class="form-control" id="exampleFormControlSelect1" name="song_genre" required="required" id="genres">
              <option value="song1">song1</option>
              <option value="song2">song2</option>
              <option value="song3">song3</option>
            </select>
          </div>
          <hr>
          <div class="form-group mt-3">
            <label><strong>Upload Song</strong></label>
            <input type="file" name="audio_file" accept=".mp3" id="audio_file">>
            <p class="text-danger">**Only .MP3 file format is accepted.</p>
          </div>
          <hr>
          <div class="form-group mt-3">
            <div class="form-group mt-3">
              <label><strong>Upload lyrics</strong></label>
              <input type="file" name="lyrics_file" accept=".docx,docs/*" id="lyrics_file">
              <p class="text-danger">**Only Word Document(.docs or docx) file format is accepted.</p>
            </div>
          <hr>
          <div class="form-group">
          	<fieldset class="fieldset">
          		<textarea name="notes" cols="59" class="textarea" placeholder="Type your Message Here...." tabindex="5" required></textarea>
          	</fieldset>
          </div>
             <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Captcha</label>
                      <div class="row">
                        <div class="form-group col-md-4">
                         <div class="captcha">
                           <span>{!! captcha_img() !!}</span>
                           <button type="button" class="btn btn-success" id="refresh"><i class="fa fa-refresh" id="refresh"></i></button>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                      <div class="form-group col-md-4">
                       <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha"></div>
                     </div>
          <br>
          <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary" />
          </form>
        </div>
        <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Confirm Submit
                    </div>
                    <div class="modal-body">
                        Are you sure you want to submit the following details?
                        <table class="table">
                            <tr>
                              <th>Song Name</th>
                              <td id="fname"></td>
                                
                            </tr>
                            <tr>
                              <th>Lyrics File</th>
                              <td id="sname"></td>
                            </tr>
                            <tr>
                              <th>Audio File</th>
                              <td id="aname"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a href="#" id="submit" class="btn btn-success success">Submit</a>
                    </div>
                </div>
            </div>
        </div>

@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="{{ asset("/vendor/jquery/jquery.min.js") }}"></script>
<script type="text/javascript">

  $(".custom-file-input").on("change", function() {
    console.log('sd')
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  $(document).ready(function() {
        $('#refresh').click(function(){
          console.log('s')
          $.ajax({
           type:'GET',
           url:'refreshcaptcha',
           success:function(data){
            $(".captcha span").html(data.captcha);
          }
        });
        });

        $('#submitBtn').click(function() {
          $('#fname').text($('#song_title').val());
          $('#sname').text($('#lyrics_file').val());
          $('#aname').text($('#audio_file').val());
     });

        $('#submit').click(function(){
          console.log("asdas")
          $('#formfield').submit();
      });
  });

  

</script>