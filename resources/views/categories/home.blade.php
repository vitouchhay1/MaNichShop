<style>
    .text-left >img{
        max-width:100%;
        height: 65px;
    }
</style>
<div class="card">
    <div class="card-header">
        <h2>Category's Dashboard<small>You can modified category and every category you modified will be effect to front page || Note: Every category that deleted can not rollback.</small></h2>
    </div>
    <div class="card-header"><a href="{{URL::to('catadd')}}"><button class="btn btn-default waves-effect">New</button></a></div> 
    <table id="data-table-command" class="table table-striped table-vmiddle">

        <thead> 
            <tr> 
                <th data-column-id="id" data-type="numeric">ID</th> 
                <th data-column-id="name">Name</th>
                <th data-column-id="parrent" data-order="desc">Parrent</th>
                <!-- <th data-column-id="child" data-order="desc">Child</th>  -->
                <th data-column-id="created" data-order="desc">created</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Actions</th>
            </tr>
        </thead>
        <tbody>  
            @foreach($datas['categories'] as $result)  
                <tr>
                    <td>{{$result->id}}</td>  
                    <td>{{$result->name}}</td> 
                    <td></td>  
                    <td>{{$result->created_at}}</td> 
                </tr>   
            @endforeach 
        </tbody>
    </table>

</div> 
<script type="text/javascript">
    var route={};
        route['catedit']='<?php echo "catedit";?>'; 
        route['catdelete']='<?php echo "catdelete";?>'; 
</script>
