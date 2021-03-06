<!-- BEGIN: main -->
<div class="table-responsive" id="module_show_list">
	<table class="table table-striped table-bordered table-hover">
		<colgroup>
			<col class="w100">
			<col span="1">
			<col span="2" class="w200">
		</colgroup>
		<thead>
			<tr class="text-center">
				<th>{LANG.order}</th>
				<th>{LANG.location_name}</th>
                <th>{LANG.location_code}</th>
				<th>{LANG.status}</th>
				<th>{LANG.feature}</th>
			</tr>
		</thead>
		<tbody>
			<!-- BEGIN: row -->
			<tr>
				<td class="text-center">
				<select id="change_weight_{ROW.id}" onchange="nv_chang_weight('{ROW.id}');" class="form-control">
					<!-- BEGIN: weight -->
					<option value="{WEIGHT.w}"{WEIGHT.selected}>{WEIGHT.w}</option>
					<!-- END: weight -->
				</select></td>
				<td>{ROW.location_name}</td>
                <td>{ROW.location_code}</td>
				<td class="text-center">
				<select id="change_status_{ROW.id}" onchange="nv_chang_status('{ROW.id}');" class="form-control">
					<!-- BEGIN: status -->
					<option value="{STATUS.key}"{STATUS.selected}>{STATUS.val}</option>
					<!-- END: status -->
				</select></td>
				<td class="text-center">
					<em class="fa fa-edit fa-lg">&nbsp;</em> <a href="{ROW.url_edit}">{GLANG.edit}</a> &nbsp;
					<em class="fa fa-trash-o fa-lg">&nbsp;</em> <a href="javascript:void(0);" onclick="nv_module_del({ROW.id});">{GLANG.delete}</a>
				</td>
			</tr>
			<!-- END: row -->
		</tbody>
	</table>
<!-- BEGIN: generate_page -->
<div class="text-center">
	{GENERATE_PAGE}
</div>
<!-- END: generate_page -->
</div>
<!-- END: main -->