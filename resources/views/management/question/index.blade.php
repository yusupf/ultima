@extends('layouts.management.master')

@section('content')
               <div class="page-content-wrapper">
    <div class="container-fluid">
    <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <div class="card-header">
                                            <a class="btn btn-info" type="button" href="{{ url('management/question/new') }}" value="Input">Create New</a>
                                            </div>

                                            <!-- <h4 class="mt-0 header-title">Menu</h4> -->

                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Path</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php $n = 1; ?>
                                                    @foreach($question as $row)
                                                    <tr>
                                                        <td>{{ $n }}</td>
                                                        <td>{{ $row->name }}</td>
                                                        <td>{{ $row->path }}</td>
                                                    </tr>
                                                    <?php $n++ ?>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->



@endsection

@section('script')

@endsection