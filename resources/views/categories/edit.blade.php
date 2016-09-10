 

<div class="card">
    <div class="card-header">
        <h2>Update Category<small>Please input all field have required before submit.</small></h2>
    </div>
    
    <div class="card-body card-padding">
    <form action="{{URL::to('catupdate/'.$data['category'][0]->id)}}" role="form" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
        {!! csrf_field() !!}
            <div class="row"> 
                <div class="col-xs-6">
                	<p class="f-500 m-b-15 c-black">Names</p> 
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Category's name" name="txtCategory" class="form-control input-sm" value="{{$data['category'][0]->name}}">
                    </div>
                </div> 
                <div class="col-sm-6 m-b-25">
                    <p class="f-500 c-black m-b-15">Children</p> 
                    <select class="selectpicker" name="cbochild[]" multiple>
                        <?php $expl=explode(",", $data['category'][0]->cid);?>
                        @foreach($data['childs'] as $child)
                            <option value="{{$child->id}}" @foreach($expl as $cid) {{$child->id==$cid ? $selected ='selected':''}}@endforeach>{{$child->name}}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <button class="btn btn-primary btn-sm m-t-10 waves-effect" type="submit">Update</button>
        </form>
    </div>
</div>