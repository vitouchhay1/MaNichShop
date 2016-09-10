<style>
    #hchild{
        display: none;
    }
</style>
<div class="card"> 
    <div class="card-header">
        <h2>New Category<small>Please input all field have required before submit.</small></h2>
    </div>
    
    <div class="card-body card-padding">
    <form action="{{URL::to('catstore')}}" role="form" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
        {!! csrf_field() !!}
            <div class="row"> 
                <div class="col-xs-6">
                	<p class="f-500 m-b-15 c-black">Name</p> 
                    <div class="fg-line form-group">
                        <input type="text" placeholder="Category's name" name="txtCategory" class="form-control input-sm">
                    </div>
                </div> 

                <div class="col-sm-6 m-b-25">  
                    <p class="f-500 m-b-15 c-black">Parrent</p>
            
                    <div class="form-group">
                        <div class="fg-line">
                            <div class="select">
                                <select class="form-control" id="parrents">
                                    <option value="0">Select an Option</option>
                                    @foreach($datas['pid'] as $parrent)
                                    <option  value="{{$parrent->id}}">
                                        {{ $parrent->name}} 
                                    </option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> 
                     
                </div>
                <div class="col-sm-6 m-b-25" id="hchild">  
                    <p class="f-500 m-b-15 c-black">Child</p>
                    <div class="form-group">
                        <div class="fg-line">
                            <div class="select">
                                <select class="form-control" id="child">  
                                </select>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <button class="btn btn-primary btn-sm m-t-10 waves-effect" type="submit">Submit</button>
        </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){ 
  $(document).on("change", "#parrents", function(){
    $( "#child" ).empty();
    $.ajax({
      url: 'getChild',
      type: "post",
      dataType: "json",
      data: {'pid':$(this).val(),'_token': $('input[name=_token]').val()},
      success: function(data){
        if(data.length > 0){
            $("#hchild").show();
            $( "#child" ).append( "<option>Select child</option>" );
            $.each(data, function( index, value ) { 
               $( "#child" ).append( "<option>"+value.name+"</option>" );
            });
        }else{
            $("#hchild").hide();
        }
      }
    });      
  }); 
});
</script>