
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الشريك</span> </div>
    <div class="panel-body">

          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">العنوان</label>
            <div class="col-sm-10">
              <input name="title" type="text" class="form-control" id="title">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الرابط</label>
            <div class="col-sm-10">
              <input name="url" type="text" class="form-control" id="url">
            </div>
          </div>
          <div class="form-group">

            <label class="col-sm-2 control-label">الصورة</label>

                <div class="col-sm-10">

                  <input name="image" type="file" id="image" class="form-control">
                <p style="margin-top:10px;">القياس الخاص بالصور هو 265 × 180 ويمكنك <a href="https://placeholdit.imgix.net/~text?txtsize=50&txt=265%C3%97180&w=265&h=180">تحميل النموذج من هنا</a></p>

                </div>

              </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="btnadd" id="btnadd" value="اضافة">
            </div>
          </div>

    </div>
  </div>
</form>

                <script>

					init.push(function () {
						// Single select
						$("#jquery-select-customer").select2({
							allowClear: true,
							placeholder: "اختر العرض القاري"
						});

					});
				</script>
