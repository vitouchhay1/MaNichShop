<div class="card">
    <div class="card-header">
        <h2>New Product<small>Please input all field have required before submit.</small></h2>
    </div>
    
    <div class="card-body card-padding">
    <form action="{{URL::to('productstore')}}" role="form" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
        {!! csrf_field() !!}
            <div class="row"> 
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Product's name" name="txtName" class="form-control input-sm">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Color" name="txtColor" class="form-control input-sm">
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Price" name="txtPrice" class="form-control input-sm">
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
                        <option value="{{$result->id}}">{{$result->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4 m-b-25"> 
                    <p class="f-500 m-b-15 c-black">Brand</p> 
                    <select class="selectpicker" data-live-search="true" name="cboBrand">
                        <option></option>
                        @foreach($data['categories']['brand'] as $result)
                        <option value="{{$result->id}}">{{$result->name}}</option>
                        @endforeach 
                    </select> 
                </div>
                <div class="col-sm-4 m-b-25">  
                    <p class="f-500 m-b-15 c-black">Made</p> 
                    <select class="selectpicker" data-live-search="true" name="cboMade">
                        <option></option>
                        @foreach($data['categories']['country'] as $result)
                        <option value="{{$result->id}}">{{$result->name}}</option>
                        @endforeach 
                    </select> 
                </div>
                <div class="col-xs-12">
                    <div class="fg-line form-group">
                        Size :
                        @foreach($data['categories']['size'] as $result)
                        <label class="checkbox checkbox-inline m-r-20"> 
                            <input type="checkbox" value="{{$result->id}}" name="cbsize[]"> 
                            <i class="input-helper"></i>    
                            {{$result->name}}
                        </label> 
                        @endforeach
                    </div>
                </div> 
                <div class="col-xs-12">
                    <p class="f-500 c-black m-b-20">Image Preview</p> 
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" ></div>
                        <div>
                            <span class="btn btn-info btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="proImage">
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>  
                </div>
            </div> 
            <p class="f-500 c-black m-b-20">Description</p>
            <div class="html-editor"></div>
            <button class="btn btn-primary btn-sm m-t-10 waves-effect" type="submit">Submit</button>
        </form>
    </div>
</div>