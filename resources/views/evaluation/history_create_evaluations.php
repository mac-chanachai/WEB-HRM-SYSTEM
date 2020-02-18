<section class="content-header">
	<h3>
		ประวัติการสร้างแบบประเมิน |
		<small> History Created Evaluations.</small>
	</h3>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header">
					<h3 class="box-title">ประวัติการสร้าง</h3>
				</div>
				<div class="box-body table-responsive no-padding">
					<table id="myTable" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>รหัสแบบประเมิน</th>
								<th>ประจำปี</th>
								<th>ชื่อแบบประเมิน</th>
								<th>วันที่สร้าง</th>
								<th>สถานะ</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0;?>
							<?php foreach($create_evaluation as $value):?>
							<?php $no++; ?>
							<?php $year = explode('-', $value->years);?>
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo sprintf("%06d", $value->id_topic);?></td>
								<td><?php echo $year[0]?></td>
								<td><?php echo $value->topic_name;?></td>
								<td><?php echo $value->years?></td>
								<td><span class="label <?php echo ($value['status'] == 1 ? 'label-primary' : ($value['status'] == 3 ? 'label-danger' : 'label-warning')); ?>"><?php echo ($value['status'] == 1 ? 'อนุมัติ' : ($value['status'] == 3 ? 'ไม่อนุมัติ' : 'กำลังรอ')); ?>
									</span>
								</td>
								<td style="text-align: end;">
									<a href="<?php echo route('evaluation.edit_evaluations.get', $value->id_topic)?>">
										<i class="btn fa fa-lg <?php echo ($value['status'] == 2 ? 'fa-pencil' : ($value['status'] == NULL ? 'fa-pencil' : 'hide')); ?> edit-create-evaluation" data-id="<?php echo $value['id_topic'] ?>"></i>
									</a>

									<a><i class="btn fa fa-lg fa-trash delete-id_topic" style="color: red;" data-href="<?php echo route('evaluation.index.post', $value['id_topic']);?>"></i>

									</a>

									<a href="<?php echo route('evaluation.view_create_evaluations.get', $value->id_topic)?>"><i class="btn fa fa-lg fa-eye view-create-evaluation" style="color: black;" data-id="<?php echo $value['id_topic'] ?>"></i>
									</a>

								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<?php echo $pag->render(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="ajax-center-url" data-url="<?php echo route('evaluation.ajax_center.post')?>"></div>
<div id="edit-request-leave" data-url="<?php echo route('request_history.edit_request_leave.post')?>"></div>
<?php echo csrf_field()?>