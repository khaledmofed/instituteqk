				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('قائمة الاقسام');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'بحث ...');
					});
				</script>

<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">الأقسام</span>
					</div>
					<div class="panel-body">
                                        <a href="?do=add" class="btn btn-primary btn-add">جديد</a>

					<? if ($_GET['process'] == 'successfully') { ?>
                    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							 تمت العملية بنجاح
						</div>
                     <? } ?>
						<div class="table-light">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>العنوان</th>
									  <th></th>
									</tr>
								</thead>
								<tbody>
									<?
                                    $sql = "SELECT * FROM `blog_category` ORDER BY `id` DESC";
                                    $rows = $pdo->pdoGetAll($sql);
                                    foreach($rows as $result) {
                                    ?>
									<tr class="odd gradeX">
									  <td><?= $result['id'] ?></td>
									  <td><?= $result['title'] ?></td>
									  <td class="center">
                                        <a href="?do=edit&id=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="تعديل" data-original-title="تعديل"><i class="fa fa-edit"></i></a>
                                        <a href="?del=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="حذف" data-original-title="حذف" onclick="return confirm('هل انت متأكد من عملية الحذف؟ هذا الأجراء لايمكن التراجع عنه بعد تنفيذه')"><i class="fa fa-trash-o"></i></a>
                                        </td>
									</tr>
                                    <? } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>