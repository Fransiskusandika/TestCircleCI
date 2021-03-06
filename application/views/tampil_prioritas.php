<?php $this->load->view('_partials/head'); ?>
<?php $this->load->view('_partials/header'); ?>
<?php $this->load->view('_partials/sidebar'); ?>

<section role="main" class="content-body">
					<header class="page-header">
						<h2>Editable Tables</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Editable</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
								<h2 class="panel-title">Prioritas</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="<?php echo site_url('c_prioritas/add'); ?>"><button id="addToTable" class="btn btn-primary">Create <i class="fa fa-plus"></i></button></a>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<?php $No=1; ?>
											<th>No</th>
											<th>Nama</th>
											<th>Action</th>
										</tr>
									</thead>
									<?php foreach($prioritas as $prioritas): ?>
									<tbody>
										<tr class="gradeX">
											<td><?php echo $No ?></td>
											<td><?php echo $prioritas->nama_prioritas ?></td>
											<td class="actions">
												<a href="<?php echo site_url('c_prioritas/edit/'.$prioritas->id_prioritas) ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

												<a href="<?php echo site_url('c_prioritas/delete/'.$prioritas->id_prioritas)?>" class="on-default remove-row" ><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<?php $No++ ?> 
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>
			</aside>
		</section>

		<a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalPrimary">Primary</a>

			<div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
				<section class="panel">
					<header class="panel-heading">
					<h2 class="panel-title">Are you sure?</h2>
					</header>
					<div class="panel-body">
						<div class="modal-wrapper">
							<div class="modal-icon">
								<i class="fa fa-question-circle"></i>
							</div>
								<div class="modal-text">
									<h4>Primary</h4>
									<p>Are you sure that you want to delete this image?</p>
								</div>
						</div>
					</div>
						<footer class="panel-footer">
						<div class="row">
						<div class="col-md-12 text-right">
						<a href="<?php echo site_url('c_analisis/delete/'.$sistem_analisis->id_sisanalisis) ?>"><button class="btn btn-primary modal-confirm">Confirm</button></a>
						<button class="btn btn-default modal-dismiss">Cancel</button>
						</div>
						</div>
						</footer>
						</section>
						</div>
						</section>
			</div>		
<?php $this->load->view('_partials/footer'); ?>
	</body>
	<html>