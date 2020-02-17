
@extends('admin/admin_layouts.admin_app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Processing Entries</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
                  <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Processing Entries</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                        <th>Songwriter</th>
                        <th>Song Title</th>
                        <th>Genre</th>
                        <th>Submission Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
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
               ajax: '{{ route('ProcessingEntries') }}',
               columns: [
                        { data: 'song_id', name: 'song_id' },
                        { data: 'first_name', name: 'first_name'},
                        { data: 'song_title', name: 'song_title' },
                        { data: 'song_genre', name: 'song_genre' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'status', name: 'status' },
                        { data: 'actions', name: 'actions', orderable: false, searchable: false  },
                     ]
            });
         });
</script>
