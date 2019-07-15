@extends('layouts.management.master')

@section('content')
               <div class="page-content-wrapper">
    <div class="container-fluid">
    <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <div class="card-header">
                                            <a class="btn btn-info" type="button" href="{{ url('management/product/new') }}" value="Input">Create New</a>
                                            </div>

                                            <!-- <h4 class="mt-0 header-title">Menu</h4> -->

                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Image</th>
                                                        <th>Title</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php $n = 1; ?>
                                                    @foreach($product as $row)
                                                    <tr>
                                                        <td>{{ $n }}</td>
                                                        <td>
                                                        <img src="{{ url($row->image) }}" alt="" style="width: 100px;height: 80px;object-fit: cover;"></td>
                                                        <td>{{ $row->title }}</td>
                                                        <td>
                                                       <a href="{{ url('management/product/view').'/'.$row->id }}">view</a> 
                                                        | 
                                                       <a href="{{ url('management/product/edit').'/'.$row->id }}">edit</a> 
                                                        |  
                                                       <a href="{{ url('management/product/delete').'/'.$row->id }}">delete</a> 
                                                        </td>
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