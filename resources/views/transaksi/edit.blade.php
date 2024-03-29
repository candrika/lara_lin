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
            <div class="ibox-title">{{$title_content}}</div>
            <div class="ibox-tools">
                <a class="ibox-collapse cancel"><i class="fa fa-window-close"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form class="form-horizontal" id="{{$title_content}}" method="post" novalidate="novalidate">
                {{csrf_field()}}
                <div class="form-group row">
                    <input type="hidden" name="id" value="{{$transaction->transaction_id}}"/>
                    <label class="col-sm-2 col-form-label category_name">Nama Kategori</label>
                    <div class="col-sm-8">
                        <select class="form-control cat_id" name="category_id">
                            <option value="{{$transaction->category_id}}" selected>{{$transaction->category_name}}</option>    
                            @foreach($category as $key =>$name)  
                            <option value="{{$name->category_id}}">{{$name->category_name}}</option>    
                            @endforeach
                        </select>    
                        @if($errors->has('category_id'))
                          <div class="text-danger">{{ $errors->first('name')}}</div>  
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Kategori</label>
                    <div class="col-sm-8">
                        <select class="form-control category_type_id" type="text" name="category_type_id" readonly="true">
                        <option value="{{$transaction->category_type_id}}">{{$transaction->jenis_transaksi}}</option>
                        </select>  
                        @if($errors->has('category_type_id'))
                          <div class="text-danger">{{ $errors->first('category_type_id')}}</div>  
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nominal</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="amount" align="right" value="{{$transaction->amount}}" autocomplete="off"/>
                        @if($errors->has('amount'))
                          <div class="text-danger">{{ $errors->first('amount')}}</div>  
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-8">
                        <Textarea class="form-control" type="text" name="description" autocomplete="off">{{$transaction->transaction_description}}</textarea>
                        @if($errors->has('description'))
                          <div class="text-danger">{{ $errors->first('description')}}</div>  
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-info" type="submit" id="btn_{{$title_content}}_category">Submit</button>
                    </div>
                </div>
            </form>    
            <div id="success_msg">
                <p id="isi_msg"></p>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">

        // $('#success_msg').dialog({
        //     autoOpen:false,
        //     show:{
        //         effect:"blind",
        //         duration:1000
        //     },
        //     hide:{
        //         effect:"explode",
        //         duration:1000
        //     }
        // })

        $(".cancel").click(function(e){
            e.preventDefault();
            $('.preloader-backdrop').show();
            $.get('/trx/page').done(function(response){
                $('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
            })

        })

        $('.cat_id').change(function(){

            $.ajax({
                method:'GET',
                url:'/trx/category_type?id='+$('.cat_id').val(),
                // {
                //     id:$('.cat_id').val(),
                // },
                success:function(response){
                    console.log(response.data[0]);
                    var obj = response.data[0];
                    $('.category_type_id').html('<option value='+obj.category_type_id+' seleted>'+obj.jenis_transaksi+'</option>');
                },
                failure(response){
                    console.log($('.cat_id').val())

                }
            })

        });

        $('#<?=$title_content?>').submit(function(e){
            e.preventDefault();
            
            $('#btn_<?=$title_content?>_category').attr('disable',true);

            $.post('/trx/update',$(this).serialize()).done(function(response){
                console.log(response);
                // alert('saving data success');
                
                if(response.status==true){
                    alert(response.message);
                    $('.preloader-backdrop').show();
                    $.get('/trx/page').done(function(response){
                        $('.preloader-backdrop').hide();
                        $('.content-wrapper').html(" ");
                        $('.content-wrapper').html(response);
                    })

                }else{
                    $('#btn_<?=$title_content?>_category').removeAttr('disable',true);  
                }
            }).fail(function(){
                $('#btn_<?=$title_content?>_category').removeAttr('disable',true);
            })
        })
    </script>