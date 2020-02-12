
@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Song Entries</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
                  <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Song Entries</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                        <th>Song Title</th>
                        <th>Genre</th>
                        <th>Songwriter</th>
                        <th>Lyrics</th>
                        <th>Audio</th>
                        <th>Submission Date</th>
                        <th>Contact Number</th>
                    </tr>
                  </thead>
                  
{{--                   @foreach($entries as $entry)
                  <tbody>
                    <tr>
                      <td>{{ $entry->song_title }}</td>
                      <td>{{ $entry->notes }}</td>
                      <td>{{ $entry->created_at }}</td>
                      <td>{{ $entry->AdminRemark }}</td>
                      {{ $status = $entry->status }}
                      <td>
                        @if($status == 1)
                          <span style="color: green">Approved</span>
                        @elseif($status == 2)
                          <span style="color: red">Not Approved</span>
                        @elseif($status == 0)
                          <span style="color: gray">Waiting For Approval</span>
                        @endif
                      </td>
                  @endforeach   --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <!-- /.row (main row) -->
  
      </div><!-- /.container-fluid -->

@endsection
<script src="{{ asset("/vendor/jquery/jquery.min.js") }}"></script>
<script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('ManageSongEntries') }}',
               columns: [
                        { data: 'song_id', name: 'song_id' },
                        { data: 'song_title', name: 'song_title' },
                        { data: 'song_genre', name: 'song_genre' },
                        { data: 'first_name',name: 'first_name'},
                        { data: 'lyrics_file', name: 'lyrics_file' },
                        { data: 'audio_file', name: 'audio_file' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'contact_num', name: 'contact_num' },
                     ]
            });
         });
</script>