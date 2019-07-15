@extends('layouts.management.master')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Create New Question</h4>
                        <br>
                        <form action="{{ url('management/question/new') }}" method="POST">
                        {{ @csrf_field() }}
                            <div class="form-group">
                                <label>Question</label>
                                <div>
                                    <textarea name="question" id="" cols="30" class="form-control" rows="5"></textarea>
                                    <!-- <input type="text" class="form-control" required="" data-parsley-minlength="6" placeholder="Min 6 chars."> -->
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <div>
                                            <input type="text" name="label[]" class="form-control" required="" data-parsley-maxlength="6" placeholder="A, B, C, D, E">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label>Option</label>
                                        <div>
                                            <input type="text" name="option[]" class="form-control" required="" data-parsley-maxlength="6" placeholder="Option description">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>.</label>
                                        <div>
                                            <!-- <button type="submit" class="btn btn-success waves-effect waves-light m-r-5">
                                               <i class="mdi mdi-plus "></i>
                                            </button> -->
                                            <button type="button" class="btn btn-danger waves-effect">
                                                <i class="mdi mdi-delete-forever  "></i>
                                                
                                            </button>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group m-b-0">
                                <div style="text-align:center">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-5">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
</div>
@endsection

@section('script')

@endsection