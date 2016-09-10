    <div class="card-header">
<div class="card">
    <div class="card-header">
        <h2>Edit Product<small>Please input all field have required before submit.</small></h2>
    </div> 
    <div class="card-body card-padding">
    <form action="{{URL::to('proupdate/'.$data['product']->id)}}" role="form" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
    {!! csrf_field() !!}
            <div class="row"> 
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Product's name" name="txtName" class="form-control input-sm" value="{{$data['product']->name}}">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Color" name="txtColor" class="form-control input-sm" value="{{$data['product']->color}}">
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Price" name="txtPrice" class="form-control input-sm" value="{{$data['product']->price}}">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder=".col-xs-4" class="form-control input-sm">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder=".col-xs-4" class="form-control input-sm">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder=".col-xs-4" class="form-control input-sm">
                    </div>
                </div>
                <div class="col-sm-4 m-b-25"> 
                    <p class="f-500 m-b-15 c-black">Categrories</p> 
                    <select class="selectpicker" data-live-search="true" name="cboCategory">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        <option>Tent</option>
                        <option>Flashlight</option>
                        <option>Toilet Paper</option>
                    </select>
                </div> 
                <div class="col-sm-4 m-b-25"> 
                   <p class="f-500 m-b-15 c-black">Type</p> 
                    <select class="selectpicker" data-live-search="true" name="cboType">
                        <option></option>
                        @foreach($data['categories']['type'] as $result)
                        <option value="{{$result->id}}" {{$result->id==$data['product']->type ?'selected="selected"':''}}>{{$result->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4 m-b-25 hproduct">  
                    <p class="f-500 m-b-15 c-black">Type of product</p> 
                    <div class="form-group">
                        <div class="fg-line">
                            <div class="select">
                                <select class="form-control" id="cboPrduct" name="cboPrduct"> 
                                @foreach($data['categories']['all'] as $result)
                                <option value="{{$result->id}}" {{$result->id==$data['product']->ptype ?'selected="selected"':''}}>{{$result->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 m-b-25"> 
                    <p class="f-500 m-b-15 c-black">Brand</p> 
                    <select class="selectpicker" data-live-search="true" name="cboBrand">
                        <option></option>
                        @foreach($data['categories']['all'] as $result)
                        <option value="{{$result->id}}" {{$result->id==$data['product']->brand ?'selected="selected"':''}}>{{$result->name}}</option>
                        @endforeach 
                    </select> 
                </div>
                <div class="col-sm-4 m-b-25">  
                    <p class="f-500 m-b-15 c-black">Made</p> 
                    <select class="selectpicker" data-live-search="true" name="cboMade">
                        <option></option>
                        @foreach($data['categories']['country'] as $result)
                        <option value="{{$result->id}}" {{$result->id==$data['product']->made ?'selected="selected"':''}}>{{$result->name}}</option>
                        @endforeach 
                    </select> 
                </div>
                <div class="col-xs-12">
                    <div class="fg-line form-group">
                        Size :
                        <?php $myArray = explode(',', $data['product']->size);   ?>
                        @foreach($data['categories']['size'] as $result)
                        <label class="checkbox checkbox-inline m-r-20"> 
                            <input type="checkbox" value="{{$result->id}}" name="cbsize[]" <?php foreach($myArray as $vals){ echo $result->id==$vals?"checked=checked":"";} ?>> 
                            <i class="input-helper"></i>    
                            {{$result->name}}
                        </label> 
                        @endforeach
                    </div>
                </div> 
                <?php  
                    $exlgid=explode(',', $data['product']->gid);
                ?>    
                @if(count($exlgid) > 0 )
                        @foreach($exlgid as $gid)
                            @foreach ($data['categories']['galleries']  as $value) 
                                @if($gid==$value->id)
                                    <div class="col-xs-3">
                                        <p class="f-500 c-black m-b-20">Image Preview</p> 
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <input type="hidden" value="{{$value->id}}" name="gid[]">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" ><img src="<?php $myimage = str_replace('\\','/',$value->name)?>{{asset($myimage)}}"></div>
                                            <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="proImage[]">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>  
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                @endif 
            </div> 
            <p class="f-500 c-black m-b-20">Description</p>
            <div class="html-editor"></div>
            <button class="btn btn-primary btn-sm m-t-10 waves-effect" type="submit">Update</button>
        </form>
    </div>
</div>
