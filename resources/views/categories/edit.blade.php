 

<div class="card">
    <div class="card-header">
        <h2>Update Category<small>Please input all field have required before submit.</small></h2>
    </div>
    
    <div class="card-body card-padding">
    <form action="{{URL::to('catupdate/'.$data['category']->id)}}" role="form" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
        {!! csrf_field() !!}
            <div class="row"> 
                <div class="col-xs-6">
                	<p class="f-500 m-b-15 c-black">Names</p> 
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Category's name" name="txtCategory" class="form-control input-sm" value="{{$data['category']->name}}">
                    </div>
                </div> 
                <div class="col-sm-6 m-b-25"> 
                    <p class="f-500 m-b-15 c-black">Parrents</p> 
                    <select class="selectpicker" data-live-search="true" name="cboCategory">
                        <option></option>
                        @foreach($data['pid'] as $result)
                        <option value="{{$result->id}}" {{$data['category']->pid==$result->id?"selected=selected":""}}>{{$result->name}}</option>
                        @endforeach 
                    </select> 
                </div>
            </div>
            <button class="btn btn-primary btn-sm m-t-10 waves-effect" type="submit">Update</button>
        </form>
    </div>
</div>