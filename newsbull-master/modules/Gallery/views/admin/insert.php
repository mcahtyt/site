<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->alert->flash(['error', 'success']); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Kayıt Ekle</div>
                <div class="panel-body">
                    <?php echo bsFormText('title', 'Başlık', ['required' => true]) ?>
                    <?php echo bsFormText('slug', 'Slug') ?>
                    <?php echo bsFormImage('image', 'Görsel') ?>
                    <?php echo bsFormTextarea('summary', 'Özet') ?>
                    <?php echo bsFormEditor('content', 'İçerik') ?>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Gönder</button>
                    <button class="btn btn-success" type="submit" name="redirect" value="records">Kaydet ve Listeye Dön</button>
                    <a class="btn btn-default" href="<?php echo moduleUri('records') ?>">Vazgeç</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Tasarım</div>
                <div class="panel-body">
                    <?php echo bsFormDropdown('design', 'Tasarım', ['options' => ['default' => 'Varsayılan (Slider)', 'paging' => 'Sayfalı', 'serial' => 'Sıralı (Alt alta)']]) ?>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Yayımla</div>
                <div class="panel-body">
                    <?php echo bsFormDropdown('status', 'Durum', ['options' => ['published' => 'Yayında', 'unpublished' => 'Yayında Değil']]) ?>
                    <?php echo bsFormDropdown('showHome', 'Anasayfada Göster', ['options' => ['0' => 'Gizle', '1' => 'Göster']]) ?>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Meta Bilgileri</div>
                <div class="panel-body">
                    <?php echo bsFormText('metaTitle', 'Title') ?>
                    <?php echo bsFormTextarea('metaDescription', 'Description') ?>
                    <?php echo bsFormTextarea('metaKeywords', 'Keywords') ?>
                </div>
            </div>

        </div>
    </form>
</div>