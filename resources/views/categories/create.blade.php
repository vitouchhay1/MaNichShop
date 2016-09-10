<div data-widget-editbutton="false" data-widget-colorbutton="false" id="wid-id-0" class="jarviswidget jarviswidget-sortable" style="" role="widget">
	<!-- widget options:
	usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false"> 
	data-widget-colorbutton="false"
	data-widget-editbutton="false"
	data-widget-togglebutton="false"
	data-widget-deletebutton="false"
	data-widget-fullscreenbutton="false"
	data-widget-custombutton="false"
	data-widget-collapsed="true"
	data-widget-sortable="false" 
	-->
	<header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a data-placement="bottom" title="" rel="tooltip" class="button-icon jarviswidget-toggle-btn" href="javascript:void(0);" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a data-placement="bottom" title="" rel="tooltip" class="button-icon jarviswidget-fullscreen-btn" href="javascript:void(0);" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a data-placement="bottom" title="" rel="tooltip" class="button-icon jarviswidget-delete-btn" href="javascript:void(0);" data-original-title="Delete"><i class="fa fa-times"></i></a></div>
		<span class="widget-icon"> <i class="fa fa-eye"></i> </span>
		<h2>Add Category</h2> 
	<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header> 
	<!-- widget div-->
	<div role="content"> 
		<!-- widget edit box -->
		<div class="jarviswidget-editbox">
			<!-- This area used as dropdown edit box --> 
		</div>
		<!-- end widget edit box --> 
		<!-- widget content -->
		<div class="widget-body">  
			 {!! Form::open(array('url' => 'catstore','method' => 'post','class'=>'form-horizontal')) !!}
				<fieldset>
					<legend>Add New Category</legend>
					<div class="form-group">
						<label class="col-md-2 control-label">Category</label>
						<div class="col-md-10">
							<input type="text" placeholder="Add New Category" class="form-control" name="txtCategory">
						</div>
					</div> 
				<fieldset> 
					<div class="form-group">
						<label class="control-label col-md-2">Choose Parrents</label>
						<div class="col-md-10">
							<select class="form-control" name="cboCategory">
								<option value="0">--Select Parents--</option> 
								@foreach($cats as $cat)
								<option value="{{$cat->id}}">{{$cat->name}}</option> 
								@endforeach
							</select>
						</div>
					</div> 
				</fieldset> 
				<div class="form-actions">
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-default">
								Cancel
							</button>
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-save"></i>
								Submit
							</button>
						</div>
					</div>
				</div> 
			{!! Form::close() !!}
		</div>
		<!-- end widget content --> 
	</div>
	<!-- end widget div --> 
</div>