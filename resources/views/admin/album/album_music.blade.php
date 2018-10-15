@extends('layout.admin')

@section('title',$title)

@section('content')
@if(session('success'))
<div class="mws-form-message info">
	{{session('success')}}
</div>
@endif

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
        	<form action="/admin/album/album_music/<?php echo $rs['0']->aid; ?>" method="get">

        	<div id="DataTables_Table_0_length" class="dataTables_length">
        		<label>显示 
        			<select size="1" name="num" aria-controls="DataTables_Table_0">
        				<option value="10" @if($request->num==10)  selected="selected" @endif>10</option>
        				<option value="25" @if($request->num==25)  selected="selected" @endif >25</option>
        				<option value="30" @if($request->num==30)  selected="selected" @endif >30</option>
        			</select> 条数据
        		</label>
        	</div>
        	<div class="dataTables_filter" id="DataTables_Table_0_filter">
        		<label>
        			
        			歌曲名: 
        			<input type="text" name="mname" value="{{$request->sname}}" aria-controls="DataTables_Table_0">
                    专辑名: 
                    <input type="text" name="aname" value="{{$request->aname}}" aria-controls="DataTables_Table_0">
        		</label>
        		
        		<button class="btn btn-info">搜索</button>
        	</div>
        	</form>
    <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <thead>
    	<tr role="row">
    		<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 40px;">ID
    		</th>
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 60px;">歌手
            </th>
    		
    		
    		<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 223px;">专辑
    		</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 223px;">歌曲名
            </th>
    		<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 91px;"> 发行时间
            </th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 91px;"> 热度
    		</th>
    		
    		<!-- <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 60px;">专辑封面
    		</th> -->
            
    	</tr>
    </thead>
     
<tbody role="alert" aria-live="polite" aria-relevant="all">
	@foreach($rs as $k => $v)
<tr class="@if($k % 2 == 0)odd @else even @endif">
        <td class="">{{$v->mid}}</td>
        <td class="">{{$v->sname}}</td>
        <td class=" ">{{$v->aname}}</td>
        <td class=" ">{{$v->mname}}</td>
        <td class=" ">{{$v->times}}</td>
        <td class=" ">{{$v->hot}}</td>
        <!-- <td class=" ">
            <img style="margin-left: 40px; max-width: 50%" src="{{$v->photo}} ">
        </td> -->
        
</tr>
@endforeach
     </tbody>
 </table>
 <div class="dataTables_info" id="DataTables_Table_0_info">每页显示 {{$request->num}} 条数据</div>
 <style>
                .pagination li{
                    float: left;
                    height: 20px;
                    padding: 0 10px;
                    display: block;
                    font-size: 12px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: #444444;
                    color: #fff;
                    text-decoration: none;
                    border-right: 1px solid #232323;
                    border-left: 1px solid #666666;
                    border-right: 1px solid rgba(0, 0, 0, 0.5);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                         /*display:block;*/

                }

                    .pagination li a{
                         color: #fff;
                         /*display:block;*/
                    }


                    .pagination .active{
                            background-color: #c5d52b;
                            color: #323232;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                    }

                    .pagination .disabled{
                        color: #666666;
                        cursor: default;
                    }

                    .pagination{
                        margin:0px;
                    }

            </style>
	 <div class="dataTables_paginate paging_two_button" id="DataTables_Table_0_paginate">
        {{$rs->appends($request->all())->links()}}

	 </div>
</div>
</div>
</div>
@stop

@section('js')
<script type="text/javascript">
		setTimeout(function(){
			$('.mws-form-message').slideUp(2000);
		},3000)
	</script>
@stop