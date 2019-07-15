@extends('layouts.management.master')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Edit language</h4>
                        <br>
                        <form action="{{ url('management/language/update') }}" method="POST">
                        {{ @csrf_field() }}
                           <?php $n = 0;?>
                           @foreach($en as $key => $value)
                            <div class="row">
                               
                                <div class="col-lg-2">
                                    <div class="form-group">
                                    @if($n == 0)<label>Code</label>@endif
                                        <div>
                                            <input type="text" name="lang_code[]" class="form-control" required="" data-parsley-maxlength="6" placeholder="" value="{{ $key }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        @if($n == 0)<label>EN</label>@endif
                                        <div>
                                        <textarea name="lang_en[]" id="" cols="30" class="form-control" rows="1" required>{{ $value }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                    @if($n == 0)<label>ID</label>@endif
                                        <div>
                                        <textarea name="lang_id[]" id="" cols="30" class="form-control" rows="1" required>{{ $id[$key] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>.</label>
                                        <div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-5">
                                               <i class="mdi mdi-plus "></i>
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect">
                                                <i class="mdi mdi-delete-forever  "></i>
                                                
                                            </button>
                                             
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <?php $n++; ?>
                            @endforeach
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


                        <!--  -->
                        <div class="row-fluid">
            <div class="span6">
                <form action="index.php" method="post">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th width="300px">Jenis Barang</th>
                                <th width="100px">Jumlah</th>
                                <th width="80px"></th>
                            </tr>
                        </thead>
                        <!--elemet sebagai target append-->
                        <tbody id="itemlist">
                            <tr>
                                <td><input name="jenis_input[0]" class="form-control" /></td>
                                <td><input name="jumlah_input[0]" class="form-control" /></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-small btn-default" onclick="additem(); return false">+</button>
                                    <button name="submit" class="btn btn-small btn-primary"><i class="icon-ok"></i></button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
            <div class="span6">
                <p>Hasil submit bisa anda lihat di sini. Hasil ini bisa anda simpan dalam tabel atau digunakan untuk kepentingan lain.</p>
                <p>
                    <?php
                    if (isset($_POST['submit'])) {
                        $jenis = $_POST['jenis_input'];
                        $jumlah = $_POST['jumlah_input'];
                        foreach ($jenis as $key => $j) {
                            echo "<p>" . $j . " : " . $jumlah[$key] . "</p>";
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
                        <!--  -->
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
                var jenis_input = document.createElement('input');
                jenis_input.setAttribute('name', 'jenis_input[' + i + ']');
                jenis_input.setAttribute('class', 'form-control');
                var jumlah_input = document.createElement('input');
                jumlah_input.setAttribute('name', 'jumlah_input[' + i + ']');
                jumlah_input.setAttribute('class', 'form-control');
                var hapus = document.createElement('span');
//                meng append element input
                jenis.appendChild(jenis_input);
                jumlah.appendChild(jumlah_input);
                aksi.appendChild(hapus);
                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="icon-trash"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
                i++;
            }
        </script>
@endsection