

<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->alert->flash(['error', 'success']); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Kayıt Düzenle</div>
                <div class="panel-body">
                    <?php echo bsFormText('title', 'Başlık', ['required' => true, 'value' => $record->title]) ?>
                    <?php echo bsFormImage('image', 'Görsel', ['value' => $record->image, 'path' => 'public/upload/gallery/images/thumb']) ?>
                    <?php echo bsFormEditor('content', 'İçerik', ['value' => $record->content]) ?>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Gönder</button>
                    <button class="btn btn-success" type="submit" name="redirect" value="images/@galleryId">Kaydet ve Listeye Dön</button>
                    <a class="btn btn-default" href="<?php echo moduleUri('images', $parent->id) ?>">Vazgeç</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">


            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Yayımla</div>
                <div class="panel-body">
                    <?php echo bsFormDropdown('status', 'Durum', ['value' => $record->status, 'options' => ['published' => 'Yayında', 'unpublished' => 'Yayında Değil']]) ?>
                    <?php echo bsFormText('createdAt', 'Oluşturulma', ['value' => $this->date->set($record->createdAt)->datetime(), 'disabled' => true]) ?>
                    <?php echo bsFormText('updatedAt', 'Düzenlenme', ['value' => $this->date->set($record->updatedAt)->datetime(), 'disabled' => true]) ?>
                </div>
            </div>        </div>
    </form>
</div>