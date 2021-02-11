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
        	<div class="col-md-6"><a href="#" class="btn btn-primary" id="add_income_cat"><i class="fa fa-plus"></i></a></div>
        	<div class="mb-3"></div>
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                	<th>Nama Kategori Pengeluaran</th>
                	<th>Deskripsi</th>
                	<th>Aksi</th>
                </thead>
                <tbody>
                	@if($data_tables!=null)
                		@foreach($data_tables as $key => $v)
                		<tr>
                			<td>{{$v->category_name}}</td>
                			<td>{{$v->category_description}}</td>
                			<td><a href="#" class="btn btn-warning btn-sm edit" id="edit_{{$title_content}}" data-edit-id="{{$v->category_id}}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-danger btn-sm hapus" id="hapus_{{$title_content}}" data-hapus-id="{{$v->category_id}}"><i class="fa fa-trash"></i></a></td>
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
<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });

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
        	$.get('/outcome/form/input').done(function(response){
        		$('.preloader-backdrop').hide();
    			$('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
    		});
        });

        $('#hapus_<?=$title_content?>').click(function(e){
        	// alert('xxxx');
        	e.preventDefault(e);
        	if(confirm("Apa anda yakin?")){
        		$.get('/outcome/delete/'+$(this).data('hapus-id')).done(function(response){
        			console.log(response)
        			alert(response.message);
        			$('.preloader-backdrop').show();
        			$.get('/outcome/page').done(function(response){
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
        	
        	e.preventDefault(e);
        	$('.preloader-backdrop').show();
        	$.get('/outcome/form/edit/'+$(this).data('edit-id')).done(function(response){
        		console.log(response)
        		$('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);

        	}).fail(function(){
        		alert('Gagal menampilkan form');
        		$('.preloader-backdrop').hide();
            })

        })
    });
</script>      	