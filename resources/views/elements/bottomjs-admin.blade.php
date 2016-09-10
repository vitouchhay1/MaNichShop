<script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{asset('vendors/bower_components/flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('vendors/sparklines/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>

<script src="{{asset('vendors/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js ')}}"></script>
<script src="{{asset('vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
<script src="{{asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('vendors/bootgrid/jquery.bootgrid.updated.min.js')}}"></script>
<script src="{{asset('vendors/summernote/dist/summernote-updated.min.js')}}"></script>
<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
    <script src="{{asset('vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js')}}"></script>
<![endif]--> 
<script src="{{asset('js/flot-charts/curved-line-chart.js')}}"></script>
<script src="{{asset('js/flot-charts/line-chart.js')}}"></script>
<script src="{{asset('js/charts.js')}}"></script>
<script src="{{asset('vendors/fileinput/fileinput.min.js')}}"></script>
<script src="{{asset('vendors/input-mask/input-mask.min.js')}}"></script>
<script src="{{asset('vendors/farbtastic/farbtastic.min.js')}}"></script> 
<script src="{{asset('js/charts.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script type="text/javascript">   
    //Function deleted,edite category
    $(function() { 
        //Command Buttons
        $("#data-table-command").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {
                "commands": function(column, row) {  
                    console.log(row.child);
                    // var routeedit='';
                    // var routedelete='';
                    // if( route.catedit=='catedit'){
                    //     routeedit=route.catedit;
                    // }if(route.proedit=='proedit'){
                    //     routeedit=route.proedit;
                    // }if(route.catdelete=='catdelete'){
                    //     routedelete=route.catdelete;
                    // }if(route.prodelete=='prodelete'){
                    //     routedelete=route.prodelete;
                    // }
                    //return "<a href="+routeedit+'/'+row.id+"><button type=\"button\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\" ></span></button> </a>" + "<a href='"+routedelete+'/'+row.id+"'><button onclick='confirmdelete()' type=\"button\"  id=\"sa-warning\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button></a>"; }
                    return "<a href="+route.edit+'/'+row.id+"><button  type=\"button\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\" ></span></button></a>" + "<button onclick=\"confirmdelete('"+route.delete+"/"+row.id+"')\" type=\"button\"  id=\"sa-warning\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>"; }
            }
        });
    });  
</script>
 <script type="text/javascript">  
/*
 * Notifications
 */
function notify(from, align, icon, type, animIn, animOut){
    $.growl({
        icon: icon,
        title: ' Bootstrap Growl ',
        message: 'Turning standard Bootstrap alerts into awesome notifications',
        url: ''
    },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                    from: from,
                    align: align
            },
            offset: {
                x: 20,
                y: 85
            },
            spacing: 10,
            z_index: 1031,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                    enter: animIn,
                    exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
                            '<button type="button" class="close" data-growl="dismiss">' +
                                '<span aria-hidden="true">&times;</span>' +
                                '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<span data-growl="icon"></span>' +
                            '<span data-growl="title"></span>' +
                            '<span data-growl="message"></span>' +
                            '<a href="#" data-growl="url"></a>' +
                        '</div>'
    });
};

$('.notifications > div > .btn').click(function(e){
    e.preventDefault();
    var nFrom = $(this).attr('data-from');
    var nAlign = $(this).attr('data-align');
    var nIcons = $(this).attr('data-icon');
    var nType = $(this).attr('data-type');
    var nAnimIn = $(this).attr('data-animation-in');
    var nAnimOut = $(this).attr('data-animation-out');
    
    notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
});


/*
 * Dialogs
 */

//Basic
$('#sa-basic').click(function(){
    swal("Here's a message!");
});

//A title with a text under
$('#sa-title').click(function(){
    swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
});

//Success Message
$('#sa-success').click(function(){
    swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
});

function confirmdelete(id){
    swal({   
        url:"go",
        title: "Are you sure?",   
        text: "You will not be able to recover this imaginary file!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false 
    }, function(){
       $.ajax({
        url: id,
        success: function(result){
            console.log('success');
        }});
        swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
    });
}
//Warning Message
$('.zmdi-delete').click(function(){
    swal({   
        url:"go",
        title: "Are you sure?",   
        text: "You will not be able to recover your data!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false 
    }, function(){   
        swal("Deleted!", "Your data has been deleted.", "success"); 
    });
});

//Parameter
$('#sa-params').click(function(){
    swal({    
        title: "Are you sure?",   
        text: "You will not be able to recover this imaginary file!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes, delete it!",   
        cancelButtonText: "No, cancel plx!",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }, function(isConfirm){   
        if (isConfirm) {     
            swal("Deleted!", "Your imaginary file has been deleted.", "success");   
        } else {     
            swal("Cancelled", "Your imaginary file is safe :)", "error");   
        } 
    });
});

//Custom Image
$('#sa-image').click(function(){
    swal({   
        title: "Sweet!",   
        text: "Here's a custom image.",   
        imageUrl: "img/thumbs-up.png" 
    });
});

//Auto Close Timer
$('#sa-close').click(function(){
     swal({   
        title: "Auto close alert!",   
        text: "I will close in 2 seconds.",   
        timer: 2000,   
        showConfirmButton: false 
    });
});
</script>