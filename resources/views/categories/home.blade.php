<style>
    .text-left >img{
        max-width:100%;
        height: 65px;
    }
    .hid{
        display: none;
    }
</style>  
<div class="card">
    <div class="card-header"> 
        <h2>Category's Dashboard<small>You can modified category and every category you modified will be effect to front page || Note: Every category that deleted can not rollback.</small></h2>
    </div>
    <div class="card-header"><a href="{{URL::to('catadd')}}"><button class="btn btn-default waves-effect">New</button></a></div> 
    <table id="data-table-command" class="table table-striped table-vmiddle">
    <input type="hidden" id="hfield"></input>  
        <thead> 
            <tr> 
                <th data-column-id="id" data-type="numeric">ID</th> 
                <th data-column-id="name">Name</th>
                <th data-column-id="child" data-order="desc">Child</th> 
                <th data-column-id="created" data-order="desc">created</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Actions</th>
            </tr>
        </thead>
        <tbody>  
            @foreach($datas['categories'] as $result)   
                <tr>
                    <td>{{$result->id}}</td>  
                    <td>{{$result->name}}</td> 
                    <td> 
                        {{$result->child!=''?$result->child:'N/A'}}
                    </td> 
                    <td>{{$result->created_at}}</td> 
                </tr>

            @endforeach 
        </tbody>
    </table>

</div> 
<script type="text/javascript">
// set variable to bottomjs-admin.blade.php
    var route={};
        route['edit']='<?php echo "catedit";?>'; 
        route['delete']='<?php echo "catdelete";?>'; 
</script>
