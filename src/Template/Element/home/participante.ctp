<?php
  $id = md5($name);
?>
<div class="col-md-3">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="thumbnail attraction">
        <img src="img/participantes_<?= $year ?>/<?= $photo ?>" alt="" class="img-rounded img-responsive">
        <div class="caption">
          <h4>
            <?= $name ?><br>
            <small><?= $company ?></small>
          </h4>
          <h5 class="text-center">
            <a href="#" data-toggle="modal" data-target="#modal_<?= $id ?>"><span class="fa fa-plus-square"></span> Saiba mais</a>
          </h5>
          <div class="modal fade" id="modal_<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="pablo_title">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="pablo_title"><?= $name ?></h4>
                </div>
                <div class="modal-body">
                  <?= $text ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>