<section class="content-header">
	<h3>
		การลา |
		<small> Leave</small>
	</h3>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- code -->
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-md-12 btn-group dropup pull-right ">
					<button type="button" name="add-leave" class='btn btn-success dropdown-toggle pull-right add-leave'><i class="fa fa-plus"></i> New Record
					</button>
					<a href="<?php echo route('leave.leave_history.get');?>">
						<button href="" type="button" name="view-history" class='btn btn-warning pull-right dropdown-toggle view-history'><i class="fa fa-history"></i> History
						</button>
					</a>
					<a href="<?php echo route("leave.set_holiday.get")?>">
						<button href="" type="button" name="set-holiday" class='btn btn-info pull-right dropdown-toggle set-holidays'><i class="fa fa-calendar-plus-o"></i> Set Holiday
						</button>
					</a>
				</div>
			</div>
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">ประวัติการลา</h3>
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<input type="text" id="myInput" name="table_search" class="form-control pull-right" placeholder="Search">

							<div class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table id="myTable" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>วันที่ลา</th>
								<th>ประเภทการลา</th>
								<th>จำนวน(ชม.)</th>
								<th>เหตุผลการลา</th>
							</tr>
						</thead>
						<?php $count = 0;?>
						<?php foreach($data as $value) : ?>
							<tbody>
								<tr>
									<?php $current_employee = \Session::get('current_employee') ?>
									<?php $count = $count +1;?>
									<td><?php echo $count?></td>
									<td><?php echo $value['start_leave']?> ถึง <?php echo $value['end_leave']?></td>
									<td><?php echo $value->leaves_type['leaves_name']?></td>
									<td><?php echo $value['total_leave']*0.125*8?></td>
									<td><?php echo $value['reason']?>.</td>
								</tr>
							</tbody>
						<?php endforeach ?>
							<!-- <tfoot>
								<tr>
									<th>#</th>
									<th>วันที่ลา</th>
									<th>ประเภทการลา</th>
									<th>จำนวนวันลา</th>
									<th>เหตุผลการลา</th>
								</tr>
							</tfoot> -->
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- data -->
	<div id="ajax-center-url" data-url="<?php echo route('leave.ajax_center.post')?>"></div>
	<div id="add-request-leave" data-url="<?php echo route('leave.add_request_leave.post')?>"></div>
	<?php echo csrf_field()?>
