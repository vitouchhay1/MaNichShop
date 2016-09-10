<style>
    .text-left >img{
        max-width:100%;
        height: 65px;
    }
</style> 
<div class="card">
    <div class="card-header">
        <h2>Proucts' Dashboard<small>You can modified product and every products you modified will be effect to front page || Note: Every product that deleted can not rollback.</small></h2>
    </div>
    <div class="card-header"><a href="{{URL::to('addproduct')}}"><button class="btn btn-default waves-effect">New</button></a></div> 
    <table id="data-table-command" class="table table-striped table-vmiddle">

        <thead> 
            <tr> 
                <th data-column-id="id" data-type="numeric">ID</th>
                <th>Image</th>
                <th data-column-id="name">Name</th>
                <th data-column-id="price" data-order="desc">price</th>
                <th data-column-id="color" data-order="desc">color</th>
                <th data-column-id="made" data-order="desc">made</th>
                <th data-column-id="type" data-order="desc">type</th>
                <th data-column-id="brand" data-order="desc">brand</th>
                <th data-column-id="created" data-order="desc">created</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Actions</th>
            </tr>
        </thead>
        <tbody>  
            @foreach($data['products'] as $result) 
                <?php
                    $img="<img src='".$result->image."'>";
                ?>
                <tr>
                    <td>{{$result->id}}</td> 
                    <td style="text-align:center;"><div class="proImage">{{$img}}</div></td>
                    <td>{{$result->name}}</td> 
                    <td>{{$result->price}}</td> 
                    <td>{{$result->color}}</td> 
                    <td>
                        @foreach($data['categories']['country'] as $country)
                            @if($country->id==$result->made)
                             {{$country->name}}
                            @endif
                        @endforeach
                    </td> 
                    <td>
                        @foreach($data['categories']['type'] as $type)
                            @if($type->id==$result->type)
                             {{$type->name}}
                            @endif
                        @endforeach
                    </td> 
                    <td>
                        @foreach($data['categories']['brand'] as $brand)
                            @if($brand->id==$result->brand)
                             {{$brand->name}}
                            @endif
                        @endforeach
                    </td> 
                    <td>{{$result->created_at}}</td> 
                </tr>  

        @endforeach 
        </tbody>
    </table>

</div> 
<script type="text/javascript">
    var route={};
        route['proedit']='<?php echo "proedit";?>'; 
        route['prodelete']='<?php echo "prodelete";?>'; 
</script>
