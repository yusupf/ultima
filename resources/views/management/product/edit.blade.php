@extends('layouts.management.master')
@section('style')
<style>
    .table > tbody > tr > td, .table > tfoot > tr > td, .table > thead > tr > td{
        padding:5px;
    }
</style>
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Product Detail</h4>
                        <br>
                        <form action="{{ url('management/product/edit').'/'.$id }}" method="POST" enctype='multipart/form-data'>
                        {{ @csrf_field() }}
                        <div class="form-group">
                                <label>Image</label>
                                <div>
                                    <img src="{{ url($product->image) }}" alt="" style="width: 100px;height: 80px;object-fit: cover;"></td>                    
                                </div>
                                <br>
                                change <input type="file" name="image" id="">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <div>
                                    <input name="title" class="form-control" value="{{ $product->title }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div>
                                    <textarea name="description" id="" cols="30" class="form-control" rows="5" required>{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th width="300px">Link</th>
                                <th width="100px">Merchant</th>
                                <th width="80px"></th>
                            </tr>
                        </thead>
                        <!--elemet sebagai target append-->
                        <tbody id="itemlist">
                        <?php $link = JSON_DECODE($product->link);?>
                        @foreach($link as $row)
                            <tr>
                                <td><input name="link[]" class="form-control" value="{{ $row->link }}" required/></td>
                                <td><input name="merchant[]" class="form-control" value="{{ $row->merchant }}" required/></td>
                                <td><span><button type="button" class="btn btn-danger waves-effect">
                                    <i class="mdi mdi-delete-forever  "></i>
                                    </button></span></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tr>
                                <td></td>
                                <td></td>
                                <td>
                                <button type="button" class="btn btn-success waves-effect" onclick="additem(); return false">
                                    <i class="mdi mdi mdi-plus   "></i>
                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="form-group m-b-0">
                                <div style="text-align:center">
                                <button type="submit" class="btn btn-warning waves-effect waves-light m-r-5">
                                        Submit
                                    </button>
                                    <a href="{{ url('management/product') }}" class="btn btn-primary waves-effect waves-light m-r-5">
                                        Cancel
                                    </a>
                                    
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
<script>
            var i = 1;
            function additem() {
//                menentukan target append
                var itemlist = document.getElementById('itemlist');
//                membuat element
                var row = document.createElement('tr');
                var jenis = document.createElement('td');
                var jumlah = document.createElement('td');
                var aksi = document.createElement('td');
//                meng append element
                itemlist.appendChild(row);
                row.appendChild(jenis);
                row.appendChild(jumlah);
                row.appendChild(aksi);
//                membuat element input
                var link = document.createElement('input');
                link.setAttribute('name', 'link[]');
                link.setAttribute('class', 'form-control');
                var merchant = document.createElement('input');
                merchant.setAttribute('name', 'merchant[]');
                merchant.setAttribute('class', 'form-control');
                var hapus = document.createElement('span');
//                meng append element input
                jenis.appendChild(link);
                jumlah.appendChild(merchant);
                aksi.appendChild(hapus);
                hapus.innerHTML = `<button type="button" class="btn btn-danger waves-effect">
                                    <i class="mdi mdi-delete-forever  "></i>
                                    </button>`;
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
                i++;
            }
        </script>
@endsection