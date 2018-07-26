@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

	<!-- Main content -->
	<section class="content container-fluid">

		<!--------------------------
          | Your Page Content Here |
          -------------------------->

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="box box-default collapsed-box">
					<div class="box-header with-border">
						<h3 class="box-title">Expandable</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
							</button>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Removable</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3">
				<div class="box box-warning">
					<div class="box-header with-border">
						<h3 class="box-title">Collapsable</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3">
				<div class="box box-danger">
					<div class="box-header">
						<h3 class="box-title">Loading state</h3>
					</div>
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
					<!-- Loading (remove the following to stop the loading)-->
					<div class="overlay">
						<i class="fa fa-refresh fa-spin"></i>
					</div>
					<!-- end loading -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-md-3">
				<div class="box box-default collapsed-box">
					<div class="box-header with-border">
						<h3 class="box-title">Expandable</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
							</button>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Removable</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3">
				<div class="box box-warning">
					<div class="box-header with-border">
						<h3 class="box-title">Collapsable</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
						<!-- /.box-tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3">
				<div class="box box-danger">
					<div class="box-header">
						<h3 class="box-title">Loading state</h3>
					</div>
					<div class="box-body">
						The body of the box
					</div>
					<!-- /.box-body -->
					<!-- Loading (remove the following to stop the loading)-->
					<div class="overlay">
						<i class="fa fa-refresh fa-spin"></i>
					</div>
					<!-- end loading -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Default Box Example</h3>
				<div class="box-tools pull-right">
					<!-- Buttons, labels, and many other things can be placed here! -->
					<!-- Here is a label for example -->
					<span class="label label-primary">Label</span>
				</div>
				<!-- /.box-tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				The body of the box
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
				The footer of the box
			</div>
			<!-- box-footer -->
		</div>
		<!-- /.box -->

		<!-- START ACCORDION -->
		<h2 class="page-header">Bootstrap Accordion</h2>

		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Collapsible Accordion</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="box-group" id="accordion">
							<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
							<div class="panel box box-primary">
								<div class="box-header with-border">
									<h4 class="box-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											Collapsible Group Item #1
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="box-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
										wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
										eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
										assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
										nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
										farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
										labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel box box-danger">
								<div class="box-header with-border">
									<h4 class="box-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											Collapsible Group Danger
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="box-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
										wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
										eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
										assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
										nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
										farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
										labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel box box-success">
								<div class="box-header with-border">
									<h4 class="box-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											Collapsible Group Success
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="box-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
										wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
										eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
										assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
										nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
										farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
										labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>

		</div>
		<!-- /.row -->
		<!-- END ACCORDION -->

	</section>
	<!-- /.content -->


@endsection
