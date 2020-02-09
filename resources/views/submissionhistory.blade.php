@extends('layouts.app')

@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">YOUR SONG ENTRIES</h1>
          <p class="mb-4"></a>.</p>

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
                      <th>Song Title</th>
                      <th>Description</th>
                      <th>Posting Date</th>
                      <th>Admin Remark</th>
                      <th>Status</th>
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

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('entries') }}',
               columns: [
                        { data: 'song_title', name: 'song_title' },
                        { data: 'notes', name: 'notes' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'AdminRemark', name: 'AdminRemark' },
                        { data: 'status', name: 'status' }
                     ]
            });
         });
         </script>