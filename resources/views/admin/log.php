<section class="content-header">
	<div class="box-header">
		<h3>
			บันทึกประวัติ |
			<small> LOG</small>
		</h3>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12 btn-group dropup pull-right ">
			<a href="<?php echo route("admin.log_history.get")?>">
				<button href="" type="button" name="view-history" class='btn btn-warning pull-right dropdown-toggle view-history'><i class="fa fa-history"></i> History
				</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-danger">
				<div class="box-body">
					<div class="form-group">
						<div class="col-md-12 table-responsive no-padding">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Department</th>
										<th>Position</th>
										<th>Deleted By</th>
										<th>Date</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>100</th>
										<td>ก้องแก้ง กุ๊กๆ</td>
										<td>Driver</td>
										<td>พนักงาน</td>
										<td>ศักดิ์ทิพย์ สมเพียร</td>
										<td>2020-03-15</td>
										<td><button style="width: auto;" class="btn btn-primary form-control">อนุมัติ
										</button>
										<button style="width: auto;" class="btn btn-danger form-control">ไม่อนุมัติ
										</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>