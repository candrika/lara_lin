<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"/> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <div class="page-heading">
    <h1 class="page-title">{{$title_content}}</h1>
    <ol class="breadcrumb">
         <li class="breadcrumb-item">
             <a href="index.html"><i class="la la-home font-20"></i></a>
         </li>
         <li class="breadcrumb-item">{{$title_content}}</li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data {{$title_content}}</div>
        </div>
        <div class="ibox-body">
        	<div class="row">
                <div class="col-md-2">
                    <a href="#" class="btn btn-primary btn-md" id="add_income_cat"><i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-2">
                    <div class="form-group" id="date_1">
                        <label class="font-normal"></label>
                        <div class="input-group date">
                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" type="text" autocomplete="off" name="startdate" id="startdate">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group" id="date_1">
                        <label class="font-normal"></label>
                        <div class="input-group date">
                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" type="text" autocomplete="off" name="enddate" id="enddate">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn btn-default btn-md" id="btn-search">Cari&nbsp;&nbsp;<i class="fa fa-search"></i></a>
                </div>
            </div>
        	<div class="mb-3"></div>
            <table class="table table-striped table-bordered table-hover" id="table_{{$title_content}}" cellspacing="0" width="100%">
                <thead>
                    <th>Nama Kategori</th>
                	<th>Nama Kategori Pengeluaran</th>
                	<th>Deskripsi</th>
                	<th>Aksi</th>
                </thead>
                <tbody>
                	@if($data_tables!=null)
                		@foreach($data_tables as $key => $v)
                		<tr>
                			<td>{{$v->category_name}}</td>
                            <td>{{$v->jenis_transaksi}}</td>
                            <td>{{$v->transaction_description}}</td>
                			<td><a href="#" class="btn btn-warning btn-sm edit" id="edit_{{$title_content}}" data-edit-id="{{$v->transaction_id}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-danger btn-sm hapus" id="hapus_{{$title_content}}" data-hapus-id="{{$v->transaction_id}}"><i class="fa fa-trash"></i></a></td>
                		</tr>                		
                		@endforeach
                	@endif
                </tbody>
            </table>
        </div>
        <div id="delete_msg">
                <p id="isi_msg"></p>
        </div>
    </div>        	
</div>
<!-- <div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>   -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script> -->
<script type="text/javascript">
    $(document).ready(function(){

        // $('#date_1 .input-group .date').datepicker({
        //     // todayBtn: "linked",
        //     // keyboardNavigation: false,
        //     // forceParse: false,
        //     // calendarWeeks: true,
        //     // autoclose: true
        // });

    });
</script>
<script type="text/javascript">
    $(function() { 


        $('#btn-search').click(function(e){
            e.preventDefault();

            console.log($('#startdate').val())
            console.log($('#enddate').val())
            $('.preloader-backdrop').show();
            $.get('/trx/page',{
                'startdate':$('#startdate').val(),
                'enddate':$('#enddate').val(),
            }).done(function(response){
                $('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
            })
        })

    
        $('#delete_msg').dialog({
            autoOpen:false,
            show:{
                effect:"blind",
                duration:1000
            },
            hide:{
                effect:"explode",
                duration:1000
            }
        })

        $('#add_income_cat').on('click',function(e){
        	e.preventDefault(e);
        	$('.preloader-backdrop').show();
        	$.get('/trx/form/input').done(function(response){
        		$('.preloader-backdrop').hide();
    			$('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
    		});
        });

        $('#hapus_<?=$title_content?>').click(function(e){
        	// alert('xxxx');
        	e.preventDefault(e);
        	if(confirm("Apa anda yakin?")){
        		$.get('/trx/delete/'+$(this).data('hapus-id')).done(function(response){
        			console.log(response)
        			alert(response.message);
        			$('.preloader-backdrop').show();
        			$.get('/trx/page').done(function(response){
                        $('.preloader-backdrop').hide();
                        $('.content-wrapper').html(" ");
                        $('.content-wrapper').html(response);
                    })
        		}).fail(function(){
        			alert('Data gagal dihapus');
                    // $( "#kotak-dialog" ).dialog( "open" )
        		})
        	}else{
        		return false;
        	}
        });

        $('#edit_<?=$title_content?>').click(function(e){
        	console.log($(this).data('edit-id'));
        	e.preventDefault(e);
        	$('.preloader-backdrop').show();
        	$.get('/trx/form/edit/'+$(this).data('edit-id')).done(function(response){
        		console.log(response)
        		$('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);

        	}).fail(function(){
        		alert('Gagal menampilkan form');
        		$('.preloader-backdrop').hide();
            })

        })

        $('#table_<?=$title_content?>').DataTable({
            // pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    });
</script>      	